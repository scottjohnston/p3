@extends('layouts.master')


@section('title')
    P3 Developers Friend
@stop






@section ('content')

<div class="row">
   <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-1 col-lg-10">

        <p>
          Please choose how many paragraphs you would like to generate of LoremIpsum text
        </p>
        <p>
          <a href="/loremIpsum" data-tog="tooltip" title="LoremIpsum"> LoremIpsum generator</a>
        </p>

  </section>
</div>
<div class="row">
   <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-1 col-lg-10">
      <h3>Faker data</h3>
      <p>
        <a href="/fakeUsers" data-tog="tooltip" title="LoremIpsum">Generate fake users</a>
      </p>

   </section>
</div>
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
