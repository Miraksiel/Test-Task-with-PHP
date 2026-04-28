<?php

namespace App\Models;

use PDO;

class Category
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllWithArticles(): array
    {
        $sql = "SELECT DISTINCT c.*
                FROM categories c
                INNER JOIN article_categories ac ON c.id = ac.category_id
                ORDER BY c.name ASC";

        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function getBySlug(string $slug): ?array
    {
        $sql = "SELECT * FROM categories WHERE slug = :slug LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['slug' => $slug]);

        $result = $stmt->fetch();
        return $result ?: null;
    }

    public function getArticles(int $categoryId, string $sort = 'date', int $limit = 10, int $offset = 0): array
    {
        $orderBy = ($sort === 'views') ? 'a.views DESC' : 'a.created_at DESC';

        $sql = "SELECT a.*
                FROM articles a
                INNER JOIN article_categories ac ON a.id = ac.article_id
                WHERE ac.category_id = :categoryId
                ORDER BY {$orderBy}
                LIMIT :limit OFFSET :offset";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getArticleCount(int $categoryId): int
    {
        $sql = "SELECT COUNT(*)
                FROM articles a
                INNER JOIN article_categories ac ON a.id = ac.article_id
                WHERE ac.category_id = :categoryId";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['categoryId' => $categoryId]);

        return (int) $stmt->fetchColumn();
    }
}
