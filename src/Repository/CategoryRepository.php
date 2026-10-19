<?php

namespace App\Repository;

use App\Database\Mysql;
use App\Entity\Category;

class CategoryRepository
{
    private \PDO $connexion;

    public function __construct()
    {
        $this->connexion = Mysql::connectBdd();
    }

    public function create(Category $category): Category
    {
        try {
            $sql = "INSERT INTO category(category_name) VALUE(?)";
            $stmt = $this->connexion->prepare($sql);
            $stmt->bindValue(1, $category->getName());
            $stmt->execute();
            $id = $this->connexion->lastInsertId();
            $category->setId($id);
        } catch(\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return $category;
    }

    public function findByName(string $name): ?Category
    {
         try {
            $sql = "SELECT c.id_category AS id, c.category_name FROM category AS c
            WHERE c.category_name = ?";
            $stmt = $this->connexion->prepare($sql);
            $stmt->bindValue(1, $name, \PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetch(\PDO::FETCH_ASSOC);
            if (!$data) {
                $category = Category::hydrate($data);
            }
        } catch(\PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        return $category ?? null;
    }
}