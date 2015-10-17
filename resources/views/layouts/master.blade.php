<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


      <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','')
      </title>

   </head>
   <body>
      <div class="container" >
         <header class="jumbotron">
            <h1>@yield('title','P3 Developers Friend')<br><small>Scott Johnston</small></h1>
         </header>

         <!-- Links to the other projects-->
         <div class="row">
            <div class="center-block ">

               <nav class="navbar navbar-default  " role="navigation">
                <div class="navbar-header">

               <button type="button" class="navbar-toggle " data-toggle="collapse" data-tog="tooltip" title="Links" data-target="#example-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

               </button>


               </div>


               <div class="collapse navbar-collapse" id="example-navbar-collapse">

               <ul class="list-inline nav nav-tabs nav-justified ">
                  <li><a href="http://p1.scottvjohnston.me" data-tog="tooltip" title="Project 1"> Project 1</a></li>
                  <li><a href="https://github.com/scottjohnston/p1" data-tog="tooltip" title="Github P1">Git project 1</a></li>
                  <li><a href="http://p2.scottvjohnston.me" data-tog="tooltip" title="Project 2">Project 2</a></li>
                  <li><a href="https://github.com/scottjohnston/p2" data-tog="tooltip" title="Github P2">git project 2</a></li>
                  <li><a href="http://p3.scottvjohnston.me" data-tog="tooltip" title="Project 3">Project 3</a></li>
                  <li><a href="https://github.com/scottjohnston/p2" data-tog="tooltip" title="Github P3">git project 3</a></li>
                  <li><a href="#" data-tog="tooltip" title="Project 4">Project 4</a></li>
                  <li><a href="#" data-tog="tooltip" title="Github P4">git project 4</a></li>
               </ul>

            </div>
            </nav>

            </div>
         </div>





               {{-- Main page content will be yielded here --}}
               @yield('content')



      <footer class="text-center">
         <a href="http://dwa15.com/" data-toggle="tooltip" title="Course web site">dwa 15</a>
      </footer>


      <!-- Jquery for the tool tip-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();
         });
      </script>
   </body>
</html>
