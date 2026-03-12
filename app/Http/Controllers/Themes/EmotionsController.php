<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;

class EmotionsController extends ThemeController
{
    public function show()
    {
        //Inclure les datas:
        $data = $this->loadPageData('emotions');

        //Afficher la vue :
        return view('themes.emotions', [
            'emotionsData' => $data,
        ]);
    }
}
