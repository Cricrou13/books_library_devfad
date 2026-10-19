<?php

namespace App\Service;

use App\Repository\CategoryRepository;
use App\Entity\Category;

class CategoryService
{
    private CategoryRepository $categoryRepository;

    //injection de dépendance
    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository();
    }

    /**
     * Méthode qui retourne la liste de toutes les categories
     * @return array<Category> $categories Tableau objet Category
     */
    public function getAllCategories(): array
    {
        return $this->categoryRepository->findAll();
    }
}
