<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../models/Database.php';
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Article.php';

use App\Models\Category;
use App\Models\Article;
use Smarty;

class HomeController
{
    private Category $categoryModel;
    private Article $articleModel;
    private Smarty $smarty;

    public function __construct()
    {
        $this->categoryModel = new Category();
        $this->articleModel = new Article();

        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__ . '/../../templates/');
        $this->smarty->setCompileDir(__DIR__ . '/../../templates_c/');
        $this->smarty->setCacheDir(__DIR__ . '/../../cache/');
    }

    public function index(): void
    {
        $categories = $this->categoryModel->getAllWithArticles();

        foreach ($categories as &$category) {
            $category['articles'] = $this->articleModel->getLatestByCategory($category['id'], 3);
        }

        $this->smarty->assign('categories', $categories);
        $this->smarty->display('pages/home.tpl');
    }
}
