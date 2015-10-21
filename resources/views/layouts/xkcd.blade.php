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
          {!! Form::open( array ('url' => 'xkcdGenerate', 'method' => 'get')) !!}

          {!! Form::label('noWords', 'Number of Users') !!}

          {!! Form::number('noWords', '3', $attributes = array ('class' => 'form-control scottsTextBox', 'min' => '1', 'max' => '9')) !!}
          <br>
          {{-- 'Errors for the number of words' --}}
          @if($errors->get('noWords'))
          @foreach($errors->get('noWords') as $error)
          {{ $error }}
          @endforeach
          @endif
          <br>
          {!! Form::radio('separator', 'camel') !!}
          {!! Form::label('separator', 'Camel Case') !!}
          <br>
          <br>
          {!! Form::radio('separator', '-') !!}
          {!! Form::label('separator', 'Add hyphen separator') !!}
          <br>
          <br>
          {!! Form::radio( 'separator', ' ') !!}
          {!! Form::label('separator', 'Add space separator') !!}
          <br>
          <br>
          {!! Form::checkbox( 'specialChar', '1') !!}
          {!! Form::label('specialChar', 'Add special character') !!}
          <br>
          <br>
          {!! Form::checkbox( 'number', '1') !!}
          {!! Form::label('number', 'Add a number between 1 and 1000') !!}
          <br>
          <br>

          {!! Form::submit('Generate password', $attributes = array ('class' => 'btn btn-primary')) !!}

          {!! Form::close() !!}

          <br>
          <h4>xkcd password will be displayed here</h4>


          {{-- 'xkcd password here' --}}
          {!! isset($password) ? $password : 'password will appear here' !!}

@stop
