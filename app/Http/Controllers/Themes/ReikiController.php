<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;

class ReikiController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('reiki');

        //Afficher la vue :
        return view('themes.reiki', [
            'reikiData' => $data,
        ]);
    }
}
