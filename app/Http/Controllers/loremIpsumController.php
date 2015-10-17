<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\vendor\Badcow\LoremIpsum;


class loremIpsumController extends Controller
{

    function index ()
    {
      return view('layouts.loremIpsum');
    }


    function getloremIpsum()
    {
      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($_GET['noParagrahs']);

      return view('layouts.loremIpsum')->with('loremContent', implode('<p>', $paragraphs));
    }
}
