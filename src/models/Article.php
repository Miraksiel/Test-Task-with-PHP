<?php

namespace App\Models;

use PDO;

class Article
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getLatestByCategory(int $categoryId, int $limit = 3): array
    {
        $sql = "SELECT a.*
                FROM articles a
                INNER JOIN article_categories ac ON a.id = ac.article_id
                WHERE ac.category_id = :categoryId
                ORDER BY a.created_at DESC
                LIMIT :limit";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getBySlug(string $slug): ?array
    {
        $sql = "SELECT * FROM articles WHERE slug = :slug LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['slug' => $slug]);

        $result = $stmt->fetch();
        return $result ?: null;
    }

    public function incrementViews(int $articleId): void
    {
        $sessionKey = 'viewed_' . $articleId;

        if (!isset($_SESSION[$sessionKey])) {
            $sql = "UPDATE articles SET views = views + 1 WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(['id' => $articleId]);

            $_SESSION[$sessionKey] = true;
        }
    }

    public function getSimilar(int $articleId, int $limit = 3): array
    {
        $sql = "SELECT DISTINCT a.*, COUNT(ac2.category_id) as common_categories
                FROM articles a
                INNER JOIN article_categories ac2 ON a.id = ac2.article_id
                WHERE ac2.category_id IN (
                    SELECT category_id FROM article_categories WHERE article_id = :articleId1
                )
                AND a.id != :articleId2
                GROUP BY a.id
                ORDER BY common_categories DESC, a.created_at DESC
                LIMIT :limit";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':articleId1', $articleId, PDO::PARAM_INT);
        $stmt->bindValue(':articleId2', $articleId, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getCategories(int $articleId): array
    {
        $sql = "SELECT c.*
                FROM categories c
                INNER JOIN article_categories ac ON c.id = ac.category_id
                WHERE ac.article_id = :articleId";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['articleId' => $articleId]);

        return $stmt->fetchAll();
    }
}
