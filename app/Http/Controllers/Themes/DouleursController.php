<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;
use App\Http\Controllers\ThemeController;

class DouleursController extends ThemeController
{
    public function show()
    {
        //Inclure des datas :
        $data = $this->loadPageData('douleurs');

        //Afficher la vue :
        return view('themes.douleurs', [
            'douleursData' => $data,
        ]);
    }
}
