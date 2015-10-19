<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/* Project 3 Scott Johnston dwa15- 
 * loremIpsumController provides 2 functions
 *
 * index() returns the view containing the form
 *
 * getloremIpsum() returns the view with the form as well as
 * the string containing the LoremIpsum to be displayed
 *
 * implode is used to convert the array to a string
 */

class loremIpsumController extends Controller
{

    //returns the view with the form
    function index ()
    {
      return view('layouts.loremIpsum');
    }

    /* getloremIpsum creates a loremIpsum object from the badcow
     * package and generates the requested number of paragraphs
     * returning the as a string with the view
     */
    function getloremIpsum(Request $request)
    {
      //validate the noParagrahs input field
      $this->validate($request, ['noParagrahs' => 'digits_between:1,2',]);

      //greats a loremIpsum object
      $generator = new \Badcow\LoremIpsum\Generator();

      $paragraphs ='';

      //tests to see if noParagrahs is set
      if ($request->has('noParagrahs'))
      {
        //gets the loremIpsum as an array
        $paragraphs = $generator->getParagraphs($request->input('noParagrahs'));
      }
      //converts the array to a string and returns it with the array
      return view('layouts.loremIpsum')->with('loremContent', implode('<p>', $paragraphs));
    }
}
