@extends('layouts.master')

{{-- 'Project 3 Scott Johnston dwa15' --}}

@section('title')
  Lorem Ipsum generator
@stop

@section ('content')

        <h3>Lorem Ipsum Generator</h3>
        <p>
           Select how many paragraphs of lorem ipsum you would like and they will
           appear below the form. Between 1 and 99 paragraphs is allowed.
        </p>

        {!! Form::open(array('url' => 'loremIpsumController')) !!}

        {!! Form::label('noParagrahs', 'Select the number of Paragraphs') !!}
        <br>
        {!! Form::number('noParagrahs', '2', $attributes = array ('class' => 'form-control scottsTextBox', 'min' => '1', 'max' => '99')) !!}
        <br>

        {{-- 'Errors for the number of users' --}}
        @if($errors->get('noParagrahs'))
           @foreach($errors->get('noParagrahs') as $error)
             {{ $error }}
           @endforeach
        @endif

        <br>
        {!! Form::submit('Generate Lorem Ipsum', $attributes = array ('class' => 'btn btn-primary')) !!}

        {!! Form::close() !!}


      <h3>Lorem Ipsum paragraphs will appear here</h3>


      {!! isset($loremContent) ? $loremContent : 'lorem ipsum content will appear here' !!}

@stop
