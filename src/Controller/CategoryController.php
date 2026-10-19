<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Service\CategoryService;

class CategoryController extends AbstractController
{
    private CategoryService $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryService();
    }
    public function addCategory(): mixed
    {
        //Test si le formulaire est soumis
        if (isset($_POST["submit"])) {
            //Traitement ajout de la categorie
            $data["msg"] = $this->categoryService->insertCategory();
        }
        //Retourner le template + $data["msg"]
        return $this->render('add_category', 'Ajouter une catégorie', $data ?? []);
    }
}