<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Log;

class FaqController extends Controller
{

    public function loadPageData($pageName)
    {
        $filePath = app_path("Data/{$pageName}.php");

        if (!file_exists($filePath)) {
            abort (404, "Le fichier de données pour {$pageName} est introuvable !");
        }

        return include $filePath;
    }

    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('faq');


        //Passer les paramètres, inclure les fichiers CSS :
        return view('faq', [
            'faqData' => $data,
        ]);

    }
}
