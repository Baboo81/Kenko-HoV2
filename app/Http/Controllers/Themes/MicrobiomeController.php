<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;

class MicrobiomeController extends ThemeController
{
    public function show()
    {
        //Inclure les datas :
        $data = $this->loadPageData('microbiome');

        //Afficher vue :
        return view('themes.microbiome', [
            'microbiomeData' => $data,
        ]);
    }
}
