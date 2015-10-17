@extends('layouts.master')


@section('title')
    P3 Developers Friend
@stop



@section ('content')

<div class="row">
   <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-1 col-lg-10">
      <h3>Form of the LoremIpsum test</h3>

      <form method='GET' action="loremIpsumController">
        Number of Paragraphs:<br>
        <input max="99" min="1" type="number" name="noParagrahs" id="noParagrahs" value="2" class="form-control ">
        <br>
        <br><br>
        <input type="submit" value="Submit">
      </form>

   </section>

</div>



<div class="row">
   <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-1 col-lg-10">
      <h3>Lorem Ipsum test</h3>


       <?php
            //$paragraphsTest = "is set";
            //$generator = new Badcow\LoremIpsum\Generator();
            //$paragraphs = $generator->getParagraphs(5);
            if (isset($loremContent))
              echo $loremContent;
              else {
                echo "Is not set";
              }
            //echo implode('<p>', $paragraphsTest);
      ?>

   </section>

</div>

@stop
