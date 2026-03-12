<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;
use App\Http\Controllers\ThemeController;

class DixHuilesController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('dixHuiles');

        //Afficher la vue :
        return view('themes.dixHuiles', [
            'dixHuilesData' => $data,
        ]);

    }
}
