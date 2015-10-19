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


    function getloremIpsum(Request $request)
    {
      //validate the noParagrahs input field
      $this->validate($request, ['noParagrahs' => 'digits_between:1,2',]);

      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs ='';
      if ($request->has('noParagrahs'))
      {
        $paragraphs = $generator->getParagraphs($request->input('noParagrahs'));
      }

      return view('layouts.loremIpsum')->with('loremContent', implode('<p>', $paragraphs));
    }
}
