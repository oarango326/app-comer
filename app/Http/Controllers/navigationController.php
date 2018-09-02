<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validaCreaVisita;

class navigationController extends Controller
{
	 public function __construct()
    {
            $this->middleware('auth',['except'=>['home']]);
    }

	public function home()
	{
		return view ('home');
    	//
	}
	public function visitas()
	{
		return view ('visitas');
    	//
	}

	public function cobros()
	{
		return view ('cobros');
    	//
	}

}
