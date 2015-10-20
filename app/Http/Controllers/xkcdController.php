<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


/*  Project 3 Scott Johnston dwa15-
 *xkcdController provides 2 functions for generating views and
 *
 * index() that returns the form for user input
 *
 * getPassword() that creates the password as a string and returns it
 * with the view
 */

class xkcdController extends Controller
{

  //calls the introduction with the form
  function index()
  {
    return view('layouts.xkcd');
  }


  /* getPassword generates a password based on the form data retrieved
   * from the request object the password is constucted as a string
   * and returned to the veiw.
   *
   *  returns a string with a view
   */
  function getPassword(Request $request)
  {
    //validate the noUsers input field
    $this->validate($request, ['noWords' => 'required|numeric|between:1,9',]);

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
    else
    {
      //separator is ' '
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
          $password = $password . $specCharArray[rand(0, (count($specCharArray) - 1))];
      }

      //add the number if required
      if ($request->has('number'))
      {
        $password = $password . rand(1,1000);
      }
    }
    //return the view with the string
    return view('layouts.xkcd')->with('password', $password);
  }

}
