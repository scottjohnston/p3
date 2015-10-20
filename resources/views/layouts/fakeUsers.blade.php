@extends('layouts.master')

{{-- 'Project 3 Scott Johnston dwa15-' --}}

@section('title')
  Fake user generator
@stop

@section ('content')

        <h3>Fake user Generator</h3>
        <p>
           Select which attributes and how many users you would like to generate
           up to 99 users can be generated at a time
        </P>
        <form method="get" action="fakeUsersController" >
           <label for="noUsers">Number Of Users</label>
           <input max='99' min='0' type="number" name="noUsers" id='noUsers' value="3" class="form-control scottsTextBox">
           <br>

           {{-- 'Errors for the number of users' --}}
           @if($errors->get('noUsers'))
              @foreach($errors->get('noUsers') as $error)
                {{ $error }}
              @endforeach
           @endif


           <br>
           <input type="checkbox" name="phoneNumber" value="1" >Phone number
           <br>
           <br>
           <input type="checkbox" name="address" value="1" >Address
           <br>
           <br>
           <input type="checkbox" name="company" value="1" >Company
           <br>
           <br>
           <input type="checkbox" name="email" value="1" >Email
           <br>
           <br>
           <input type="submit" value="Generate users" class="btn btn-primary">
        </form>
        <br>
        <h4>Fake Users will appear here</h4>


        {{-- 'displays the fake users' --}}
        {!! isset($allthefakes) ? $allthefakes : 'fake users here' !!}


@stop
