@extends('main')
@section('title','|HomePage')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1> Welcome to My Blog!</h1>
            <p class="lead"> Thank you for visiting the website I built with Laravel. Please read my latest post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role ="button"> Popular Post</a></p>
          </div>
        </div>
      </div>  <!-- end of header .row -->
      <div class="row"><!-- below row here -->
        <div class="col-md-8">
          <div class="post">
            <h3> Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>

          <div class="post">
            <h3> Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
          
          <hr>

          <div class="post">
            <h3> Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>


        </div><!-- end of posts column -->
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>
      </div><!-- end of below row -->
@endsection