@extends('layouts.master')

{{-- 'Project 3 Scott Johnston dwa15-' --}}

@section('title')
  xkcd generator
@stop


@section ('content')


<h3>xkcd generator</h3>
          <p>
             xkcd generator creates a password that is up to 9 words long from a list
             of 60,000 words and is easy to remember. A special character can be
             added as well as a number between 1 and 999. Also a separator between
             the words can be specified.
          </P>
          <form method="get" action="xkcdGenerate" >
             <label for="noWords">Number Of Words</label>
             <input max='99' min='1' type="number" name="noWords" id='noWords' value="3" class="form-control scottsTextBox">
             <br>

             {{-- 'Errors for the number of words' --}}
             @if($errors->get('noWords'))
             @foreach($errors->get('noWords') as $error)
             {{ $error }}
             @endforeach
             @endif


             <br>
             <input type="radio" name="separator" value="camel" >Camel Case
             <br>
             <br>
             <input type="radio" name="separator" value="-" >Add hyphen separator
             <br>
             <br>
             <input type="radio" name="separator" value=" radio" >Add space separator
             <br>
             <br>
             <input type="checkbox" name="specialChar" value="1" >Add special character
             <br>
             <br>
             <input type="checkbox" name="number" value="1" >Add a number between 1 and 1000
             <br>
             <br>
             <input type="submit" value="Generate users" class="btn btn-primary">
          </form>
          <br>
          <h4>xkcd password will be displayed here</h4>


          {{-- 'xkcd password here' --}}
          {!! isset($password) ? $password : 'password will appear here' !!}

@stop
