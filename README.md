# Блог на PHP

Тестовое задание - блог с категориями и статьями на чистом PHP.

## Требования

- Docker & Docker Compose
- PHP 8.1+
- MySQL 8.0

## Запуск проекта

```bash
docker-compose up -d
docker-compose exec php composer install
docker-compose exec mysql mysql -uroot -proot blog_db < database/schema.sql
docker-compose exec php php database/seed.php
docker-compose exec php php compile-scss.php
```

Сайт доступен: http://localhost

## Структура БД

- `categories` - категории статей
- `articles` - статьи
- `article_categories` - связь many-to-many между статьями и категориями

## Технологии

- PHP 8.1
- MySQL 8.0
- Smarty (шаблонизатор)
- SCSS (стили)
- Docker
