<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

if ($uri === '' || $uri === '/') {
    require_once __DIR__ . '/../src/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();

} elseif (preg_match('#^/category/([a-z0-9\-]+)$#', $uri, $matches)) {
    require_once __DIR__ . '/../src/controllers/CategoryController.php';
    $controller = new CategoryController();
    $controller->show($matches[1]);

} elseif (preg_match('#^/article/([a-z0-9\-]+)$#', $uri, $matches)) {
    require_once __DIR__ . '/../src/controllers/ArticleController.php';
    $controller = new ArticleController();
    $controller->show($matches[1]);

} else {
    http_response_code(404);
    echo '404 - Page Not Found';
}
