<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/*	Project 3 Scott Johnston dwa15- 
 * WelcomeController returns the welcome view
 * that introduces the site to the user
 */

class WelcomeController extends Controller
{

	//returns the welcome view
	function index()
	{
		return view ('layouts.welcome');
	}


}
