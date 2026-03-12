<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DixHuilesController extends Controller
{
    public function show()
    {
        //Inclusion des datas :
        $data = $this->loadPageData('dixHuiles');

        //Afficher la vue :
        return view('themes.dixHuiles', [
            'dixHuiles' => $data,
        ]);

    }
}
