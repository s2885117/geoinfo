<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Panther Consulting Planning</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
      
      <script src="js/index.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="#" onclick='home()'>Home</a></li>
          <li><a href="#">Learn More</a></li>
          @if (!Auth::check())
          <li><a href="#" onclick='showSignIn()'>Sign In</a></li>
          @else
          <li>{{ link_to_route('company.index', "Company") }}</li>
          <li>{{ link_to_route('project.index', "Project") }}</li>
          <li>{{ link_to_route('index.logout', "Logout") }}</li>
          @endif
        </ul>
        @if (Auth::check())
        {{ Form::open(array('route' => 'portal.projectOverview')) }}
        {{ Form::submit('Welcome, Get Started', array('class' => 'btn btn-success', 'style' => 'background-color: #e6595e; border-color: #e6595e; margin-bottom: 20px;')) }}
        {{ Form::close(); }}
        @else
        <a href="#"><button type="button" class="btn btn-success" onclick='showSignUp()' style="background-color: #e6595e; border-color: #e6595e;">Sign Up</button></a></br></br>
        @endif
      </div>
      <div class="jumbotron" id="logoImg">
        <h1>HaBUtek </h1>
      </div>
      <div class="jumbotron" id="signIn" hidden="false">
        {{ Form::open(array('route' => 'index.login', 'class' => 'form-horizontal')) }}
        <div class="form-group">
          <p class="lead">Sign In</p>
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) }}
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox pull-left">
              {{ Form::checkbox('remember', '1') }} Remember Me?
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Sign in', array('class', 'btn btn-default pull-right')) }}
          </div>
        </div>
        {{ Form::close() }}
      </div>
      <div class="jumbotron" id="signUp" hidden=true>
        {{ Form::open(array('action' => 'IndexController@store', 'class' => 'form-horizontal')) }}
        <div class="form-group">
          <p class="lead">Sign Up</p>

          <label class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'First Name')); }}
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Surname</label>
          <div class="col-sm-10">
            {{ Form::text('surname', '', array('class' => 'form-control', 'placeholder' => 'Last Name')); }}
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email')); }}
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')); }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Sign Up', array('class' => 'btn btn-default pull-right')) }}
          </div>
        </div>
        {{ Form::close(); }}
      </div>
      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Planning for Tomorrow's Developments</h4>

        </div>
      </div>

      <div class="footer">
        <p>Panther Consulting Planning</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>