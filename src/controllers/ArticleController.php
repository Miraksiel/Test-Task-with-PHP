<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../models/Database.php';
require_once __DIR__ . '/../models/Article.php';

use App\Models\Article;
use Smarty;

class ArticleController
{
    private Article $articleModel;
    private Smarty $smarty;

    public function __construct()
    {
        $this->articleModel = new Article();

        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__ . '/../../templates/');
        $this->smarty->setCompileDir(__DIR__ . '/../../templates_c/');
        $this->smarty->setCacheDir(__DIR__ . '/../../cache/');
    }

    public function show(string $slug): void
    {
        $article = $this->articleModel->getBySlug($slug);

        if (!$article) {
            http_response_code(404);
            echo '404 - Article not found';
            return;
        }

        $this->articleModel->incrementViews($article['id']);

        $categories = $this->articleModel->getCategories($article['id']);
        $similar = $this->articleModel->getSimilar($article['id'], 3);

        $this->smarty->assign('article', $article);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('similar', $similar);
        $this->smarty->display('pages/article.tpl');
    }
}
