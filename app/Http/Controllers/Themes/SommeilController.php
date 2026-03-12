<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;

class SommeilController extends ThemeController
{
    public function show()
    {
        //Inclure les datas :
        $data = $this->loadPageData('sommeil');

        //Afficher vue :
        return view('themes.sommeil', [
            'sommeilData' => $data,
        ]);
    }
}
