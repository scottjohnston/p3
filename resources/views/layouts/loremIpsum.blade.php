@extends('layouts.master')

{{-- 'Project 3 Scott Johnston dwa15-' --}}

@section('title')
  Lorem Ipsum generator
@stop

@section ('content')

        <h3>LoremIpsum Generator</h3>
        <p>
           Select how many paragraphs of lorem ipsum you would like and they will
           appear bellow the form. Between 1 and 99 paragraphs is allowed.
        </p>
        <form method='GET' action="loremIpsumController">
           <br>
           <label for="noParagrahs">Select the number of Paragraphs</label>
           <input max="99" min="1" type="number" name="noParagrahs" id="noParagrahs" value="2" class="form-control scottsTextBox">

           {{-- 'Errors for the number of users' --}}
           @if($errors->get('noParagrahs'))
              @foreach($errors->get('noParagrahs') as $error)
                {{ $error }}
              @endforeach
           @endif

           <br>
           <br>
           <input type="submit" value="Generate LoremIpsum" class="btn btn-primary">
        </form>
        <h3>Lorem Ipsum paragraphs will appear here</h3>


        {!! isset($loremContent) ? $loremContent : 'lorem ipsum content will appear here' !!}

@stop
