<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidation;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
    	return view('form');
    }

    public function store(StoreFormValidation $req)
    {
    	// $this->validate($req, [
    	// 	'name' => 'required|max:20',
    	// 	'email' => 'required|max:30'
    	// ]);
    }
}
