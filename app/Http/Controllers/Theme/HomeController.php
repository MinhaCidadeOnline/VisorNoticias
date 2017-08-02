<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function index()
    {
    	$data = [
    		'title' => 'Informações de Itapema, Porto Belo, Bombinhas e de toda a Costa Verde & Mar', 
    		'subtitle' => 'Informações de Itapema, Porto Belo, Bombinhas e de toda a Costa Verde & Mar', 
    		'name' => '',
    		'image' => 'img/default.jpg'
    	];
        return view('theme.index', compact('data'));
    }

}
