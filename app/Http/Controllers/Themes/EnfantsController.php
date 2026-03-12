<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;

class EnfantsController extends ThemeController
{
    public function show()
    {
        //Inclure les datas :
        $data = $this->loadPageData('enfants');

        //Afficher la vue :
        return view('themes.enfants', [
            'enfantsData' => $data,
        ]);
    }
}
