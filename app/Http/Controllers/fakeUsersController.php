<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class fakeUsersController extends Controller
{

  function index()
  {
    return view('layouts.fakeUsers');
  }

  function getFakeUsers ()
  {
    $faker = \Faker\Factory::create();
    $fakeData ='';
    $noUsers = 3;
    $phoneNumber = TRUE;
    $address = TRUE;
    $company = TRUE;
    $email = TRUE;


    for ($i = 0; $i < $noUsers; $i++)
    {
       $fakeData .= '<br>' . $faker->name . '<br>' ;

       if ($phoneNumber)
       {
         $fakeData .= $faker->phoneNumber .'<br>';
       }
       if ($address)
       {
         $fakeData .= $faker->address .'<br>';
       }
       if($company)
       {
         $fakeData .= $faker->Company .'<br>';
       }
       if($email)
       {
         $fakeData .= $faker->email .'<br>';
       }

    }
      return view('layouts.fakeUsers')->with('allthefakes', $fakeData);
  }

}
