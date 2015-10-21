@extends('layouts.master')

{{-- 'Project 3 Scott Johnston dwa15' --}}

@section('title')
  Fake user generator
@stop

@section ('content')

        <h3>Fake user Generator</h3>
        <p>
           Select which attributes and how many users you would like to generate.
           Up to 99 users can be generated at a time.
        </p>

          {!! Form::open( array ('url' => 'fakeUsersController', 'method' => 'get')) !!}

          {!! Form::label('noUsers', 'Number of Users') !!}

          {!! Form::number('noUsers', '3', $attributes = array ('class' => 'form-control scottsTextBox', 'min' => '1', 'max' => '99')) !!}
          <br>
          {{-- 'Errors for the number of users' --}}
          @if($errors->get('noUsers'))
             @foreach($errors->get('noUsers') as $error)
               {{ $error }}
             @endforeach
          @endif
          <br>
          {!! Form::checkbox('phoneNumber', '1') !!}
          {!! Form::label('phoneNumber', 'Phone number') !!}
          <br>
          <br>
          {!! Form::checkbox('address', '1') !!}
          {!! Form::label('address', 'Address') !!}
          <br>
          <br>
          {!! Form::checkbox( 'company', '1') !!}
          {!! Form::label('company', 'Company') !!}
          <br>
          <br>
          {!! Form::checkbox( 'email', '1') !!}
          {!! Form::label('email', 'Email') !!} 
          <br>
          <br>

          {!! Form::submit('Generate users', $attributes = array ('class' => 'btn btn-primary')) !!}

          {!! Form::close() !!}


        <h4>Fake Users will appear here</h4>


        {{-- 'displays the fake users' --}}
        {!! isset($allthefakes) ? $allthefakes : 'fake users here' !!}


@stop
