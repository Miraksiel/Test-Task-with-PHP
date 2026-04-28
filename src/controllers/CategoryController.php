<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../models/Database.php';
require_once __DIR__ . '/../models/Category.php';
use App\Models\Category;
use Smarty;

class CategoryController
{
    private Category $categoryModel;
    private Smarty $smarty;

    public function __construct()
    {
        $this->categoryModel = new Category();

        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__ . '/../../templates/');
        $this->smarty->setCompileDir(__DIR__ . '/../../templates_c/');
        $this->smarty->setCacheDir(__DIR__ . '/../../cache/');
    }

    public function show(string $slug): void
    {
        $category = $this->categoryModel->getBySlug($slug);

        if (!$category) {
            http_response_code(404);
            echo '404 - Category not found';
            return;
        }

        $sort = $_GET['sort'] ?? 'date';
        $page = (int)($_GET['page'] ?? 1);

        $limit = 10;
        $offset = ($page - 1) * $limit;

        $articles = $this->categoryModel->getArticles($category['id'], $sort, $limit, $offset);

        $totalArticles = $this->categoryModel->getArticleCount($category['id']);
        $totalPages = (int)ceil($totalArticles / $limit);

        $pagination = [
            'current' => $page,
            'total' => $totalPages,
            'sort' => $sort,
            'slug' => $slug
        ];

        $this->smarty->assign('category', $category);
        $this->smarty->assign('articles', $articles);
        $this->smarty->assign('sort', $sort);
        $this->smarty->assign('pagination', $pagination);
        $this->smarty->display('pages/category.tpl');
    }
}
