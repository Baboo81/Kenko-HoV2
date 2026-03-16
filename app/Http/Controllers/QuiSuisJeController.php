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
}
