<?php

namespace App\Http\Controllers\Themes;

use Illuminate\Http\Request;

class BasesController extends ThemeController
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('bases');

        //Passer les paramètres, inclure les fichiers CSS :
        return view('themes.bases', [
            'basesData' => $data,
        ]);

    }

}
