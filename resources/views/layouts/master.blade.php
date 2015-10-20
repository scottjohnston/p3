<!DOCTYPE html>
<html>
  {{-- 'Project 3 Scott Johnston dwa15-' --}}

   <head>
      <meta charset="utf-8"/>

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      {{-- 'Css tweak for the size of the text box' --}}
      <link rel="stylesheet" type="text/css" href="css/scottsCss.css">


      <title>
         {{-- 'title of the site' --}}
         @yield('title','Developers Best Friend')
      </title>


   </head>
   <body>
      <div class="container" >
         <header class="jumbotron">
            {{-- 'title for the jumbotron' --}}
            <h1>@yield('title','P3 Developers Friend')<br><small>Scott Johnston</small></h1>
         </header>
         {{-- 'Navigation for the site collapses for small devices' --}}
         <div class="row">
            <div class="center-block ">
               <nav class="navbar navbar-default" >
                  <div class="navbar-header">


                     {{-- button for collapse-able bar --}}
                     <button type="button" class="navbar-toggle " data-toggle="collapse" data-tog="tooltip" title="Links" data-target="navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>


                  {{-- main nav links --}}
                  <div class="collapse navbar-collapse" id="navbar-collapse">
                     <ul class="list-inline nav nav-tabs nav-justified ">
                        <li><a href="/" data-tog="tooltip" title="Developers Friend"> Developers best friend Main Page</a></li>
                        <li><a href="/loremIpsum" data-tog="tooltip" title="LoremIpsum generator"> LoremIpsum generator</a></li>
                        <li><a href="/fakeUsers" data-tog="tooltip" title="LoremIpsum">Generate fake users</a></li>
                        <li><a href="/xkcd" data-tog="tooltip" title="place holder">xkcd password generator</a></li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-2 col-lg-8">

               {{-- Main page content will be yielded here --}}
               @yield('content')

            </section>
         </div>
      </div>


      <footer class="text-center">
         <a href="http://dwa15.com/" data-toggle="tooltip" title="Course web site">dwa 15</a>
         <a href="http://p1.scottvjohnston.me/" data-tog="tooltip" title="Project ">Project 1</a>
         <a href="http://p2.scottvjohnston.me/" data-tog="tooltip" title="Project 2">Project 2</a>
         <a href="http://p3.scottvjohnston.me/" data-tog="tooltip" title="Project 3">Project 3</a>
         <a href="https://github.com/scottjohnston/p3" data-tog="tooltip" title="github P3">github P3</a>
      </footer>


      {{-- Jquery for the tool tip --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();
         });
      </script>


   </body>
</html>
