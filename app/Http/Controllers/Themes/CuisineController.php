<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;
use App\Http\Controllers\ThemeController;

class CuisineController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('cuisine');

        //Afficher la vue :
        return view('themes.cuisine', [
            'cuisineData' => $data,
        ]);
    }
}
