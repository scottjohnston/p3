<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;




class xkcdController extends Controller
{


  function index()
  {
    return view('layouts.xkcd');
  }


  //gerate the password
  function getPassword(Request $request)
  {
    //validate the noUsers input field
    $this->validate($request, ['noWords' => 'required|size:1',]);

    $words = file('wordList.txt', FILE_IGNORE_NEW_LINES);

    //set up the variables for xkcd passwords
    $password = "";
    $separator = "";
    $specCharArray = array("@", "%", "+", "\\", "/", "'", "!", "#", "$", "^", "?", ":", ".", "(", ")", "{", "}", "[", "]", "~", "_" );

    //if the separator field is set get what it is
    if ($request->has('separator'))
    {
      $separator = $request->input('separator');
    }

    //begin building the string
    if ($request->has('noWords'))
    {
      for ($x = 0; $x < $request->input('noWords'); $x++)
      {
        //pick the second and subsequent word number from the array
        $wordNumber = rand(0, (count($words) - 1));

        //check for camel code
        if ($separator == "camel")
        {
          //Camel code the words
          $password = $password . ucwords($words[$wordNumber]);
        }
        elseif ($x < 1)
    		{
    			$password = $words[$wordNumber];
    		}
    		else
    		{
    			//concatenate the final string
    			$password = $password . $separator . $words[$wordNumber];
    		}
      }

      //add the special character if required
      if ($request->has('specialChar'))
      {

        //for($x = 0; $x < 1; $x++ )
        //{
          $password = $password . $specCharArray[rand(0, (count($specCharArray) - 1))];
        //}
      }

      //add the number if required
      if ($request->has('number'))
      {
        $password = $password . rand(1,1000);
      }


    }


    return view('layouts.xkcd')->with('password', $password);
  }



}
