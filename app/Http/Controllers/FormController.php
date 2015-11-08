<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\OutputGeneratorController;

class FormController extends Controller
{
	public function __construct() {
	}

    public function getIndex($word) {	
		return view('forms.b');
		//return "The magic word is " .$word;
		//return view('b'); 
		//return 'FormController is Okay';
    }
}
