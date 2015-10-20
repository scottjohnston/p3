<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/* Project 3 Scott Johnston dwa15-
 * fakeUsersController provides 2 functions
 *
 * index() which returns the view containing the form
 *
 * getFakeUsers with generates the fake users and
 * returns them as a string with the view containing the form
 * so that the user can easily generate more
 */


class fakeUsersController extends Controller
{

  /* index returns the fakeUsers blade
   * which contains the form for user input
   */
  function index()
  {
    return view('layouts.fakeUsers');
  }

  /* getFakeUsers checks for and if it exists and is valid
   * creates a faker object that it loops over for each
   *  user requested and creates the fields required
   *
   * returns the view with the form and the users as a string
   */
  function getFakeUsers (Request $request)
  {
    //validate the noUsers input field
    $this->validate($request, ['noUsers' => 'digits_between:1,2',]);

    //number of users container
    $noUsers = '';

    //create the faker object
    $faker = \Faker\Factory::create();

    //set up the variable for users string
    $fakeData ='';

    //if request has noUsers set create the users
    if ($request->has('noUsers'))
    {
      //get number of users for the loop
      $noUsers = $request->input('noUsers');

      //loop through creating the users as a string
      for ($i = 0; $i < $noUsers; $i++)
      {
         $fakeData .= '<br>' . $faker->name . '<br>' ;

         //add phone number
         if ($request->has('phoneNumber'))
         {
           $fakeData .= $faker->phoneNumber .'<br>';
         }
        //add address
         if ($request->has('address'))
         {
           $fakeData .= $faker->address .'<br>';
         }
         //add company address
         if($request->has('company'))
         {
           $fakeData .= $faker->Company .'<br>';
         }
         //add email address
         if($request->has('email'))
         {
           $fakeData .= $faker->email .'<br>';
         }
      }
    }
      //return the faker data as a string
      return view('layouts.fakeUsers')->with('allthefakes', $fakeData);
  }
}
