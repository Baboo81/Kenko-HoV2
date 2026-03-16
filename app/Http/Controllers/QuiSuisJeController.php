<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuiSuisJeController extends Controller
{
    public function show()
    {
        //Inclure des datas :
        $data = $this->loadPageData('quiSuisJe');

        //Afficher la vue :
        return view('qui-suis-je', [
            'quiSuisJeData' => $data,
        ]);
    }

     public function loadPageData($pageName)
    {
        $filePath = app_path("Data/{$pageName}.php");

        if (!file_exists($filePath)) {
            abort (404, "Le fichier de données pour {$pageName} est introuvable !");
        }

        return include $filePath;
    }
}
