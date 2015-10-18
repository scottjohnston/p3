@extends('layouts.master')


@section('title')
    Fake user generator
@stop



@section ('content')

      <h3>Fake user Generator</h3>
      <p>
        Select what atributes and how many users you would like to generate
      </P>


      <form method="get" action="fakeUsersController" >
        <label for="noUsers">Number Of Users</label>
        <input max='99' min='1' type="number" name="noUsers" id='noUsers' value="3" class="form-control scottsTextBox">
        <br>
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

      {!! isset($allthefakes) ? $allthefakes : 'Fake users will appear here' !!}


 @stop
