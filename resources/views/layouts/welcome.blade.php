@extends('layouts.master')

{{-- 'Project 3 Scott Johnston dwa15-' --}}

@section('title')
Developers Best Friend
@stop


@section ('content')

        <h3>Lorem Ipsum Generator </h3>
        <p>
           Building a text based project and need a way to see what it will look like without making up reams of
           text yourself? The Developer's Best Friend provides a Lorem Ipsum generator that can generate up to 99
           paragraphs of fake text that you can add to your dev project and help you see what the final project
           will look like.
        </p>
        <p>
           <a href="/loremIpsum" data-tog="tooltip" title="LoremIpsum generator"> Lorem Ipsum generator</a>
        </p>
        <h3>Fake users</h3>
        <p>
           Building a database and need a way to generate users? Developer's best friend creates customized user
           data that you can copy and paste into your project for testing.
        </p>
        <p>
           <a href="/fakeUsers" data-tog="tooltip" title="fake user data">Generate fake users</a>
        </p>
        <h3>xkcd password generator</h3>
        <p>
           Need a long password that is hard to crack but easy to remember? xkcd password generator
           uses a 60,000 word library to create a password with real words.
        </p>
        <p>
           <a href="/xkcd" data-tog="tooltip" title="fake user data">Generate xkcd password</a>
        </p>


@stop
