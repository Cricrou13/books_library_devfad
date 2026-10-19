<?php

namespace App\Controller;

use App\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function addCategory(): mixed
    {
        if (isset($_POST["submit"])) {
            //Traitement du formulaire
        }
        return $this->render('add_category', 'Ajouter une catégorie', $data ?? []);
    }
}