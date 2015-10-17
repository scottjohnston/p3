@extends('layouts.master')


@section('title')
    P3 Developers Friend
@stop





@section ('content')

<div class="row">
   <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-1 col-lg-10">
      <h3>form for the users test</h3>


      <form method="get" action="fakeUsersController">
        Number Of Users<br>
        <input type="text" name="noUsers" value="3">
        <br><br>
        <input type="submit" value="Submit">
      </form>

   </section>

</div>
<div class="row">
   <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-1 col-lg-10">
      <h3>Faker data</h3>



      <?php
    
      if (isset ($allthefakes))
      {
        echo $allthefakes. ' <br>';
      }



        //print_r($faker);
      ?>

    </section>

 </div>


 @stop
