<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class fakeUsersController extends Controller
{

  /* index returns the fakeUsers blade
   * which contains the form for user input
   */
  function index()
  {
    return view('layouts.fakeUsers');
  }

  /*
   *
   *
   */
  function getFakeUsers (Request $request)
  {
    //validate the noUsers input field
    $this->validate($request, ['noUsers' => 'digits_between:1,2',]);

    //set up the variable sor faker
    $noUsers = '';
    $faker = \Faker\Factory::create();
    $fakeData ='';


    if ($request->has('noUsers'))
    {
      $noUsers = $request->input('noUsers');
      for ($i = 0; $i < $noUsers; $i++)
      {
         $fakeData .= '<br>' . $faker->name . '<br>' ;

         if ($request->has('phoneNumber'))
         {
           $fakeData .= $faker->phoneNumber .'<br>';
         }
         if ($request->has('address'))
         {
           $fakeData .= $faker->address .'<br>';
         }
         if($request->has('company'))
         {
           $fakeData .= $faker->Company .'<br>';
         }
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
