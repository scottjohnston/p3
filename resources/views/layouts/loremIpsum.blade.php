@extends('layouts.master')


@section('title')
    Lorem Ipsum generator
@stop



@section ('content')


      <h3>LoremIpsum Generator</h3>
      <p>
        Select how many paragraphs of lorem ipsum you would like and they will
        appear bellow the form
      </p>

      <form method='GET' action="loremIpsumController">
        <br>
        <label for="noParagrahs">Select the number of Paragraphs:</label>
        <input max="99" min="1" type="number" name="noParagrahs" id="noParagrahs" value="2" class="form-control scottsTextBox">
        <br>
        <br><br>
        <input type="submit" value="Submit">
      </form>

      <h3>Lorem Ipsum paragraphs will appear here</h3>

      {!! isset($loremContent) ? $loremContent : 'lorem ipsum content will appear here' !!}

@stop
