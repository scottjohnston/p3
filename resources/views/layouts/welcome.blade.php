@extends('layouts.master')


@section('title')
    Developers Best Friend
@stop






@section ('content')


        <h3>Lorem Ipsum Generator </h3>
        <p>
          Building a text based project and need a way to see what it will look like with out making up reams of
          text your self? The Developers Best Friend provides a Lorem Ipsum generator that can generate up to 99
          pragraphs of fake text that you can add to your dev project and help you see what the final project
          will look like.
        </p>
        <p>
          <a href="/loremIpsum" data-tog="tooltip" title="LoremIpsum generator"> LoremIpsum generator</a>
        </p>


      <h3>Fake users</h3>
      <p>
        Building a data base and need a way to generate users? Developers best friend creates customised user
        data that you can copy and past into your project for testing.
      </p>
      <p>
        <a href="/fakeUsers" data-tog="tooltip" title="fake user data">Generate fake users</a>
      </p>

@stop
