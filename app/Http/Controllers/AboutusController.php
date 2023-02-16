<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    	    {
        	// Fetch information from a database or other source
        	$companyName = 'My Company';

        	// Pass the information to the view
        	return view('aboutus', ['companyName' => $companyName]);
   	    }
}


