<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;

class PeauController extends ThemeController
{
    public function show()
    {
        //Inclure les datas :
        $data = $this->loadPageData('peau');

        //Afficher la vue :
        return view('themes.peau', [
            'peauData' => $data,
        ]);
    }
}
