<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Savior</title>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
      <body>
        <div class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Savior</a>
          </div>
          <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
              <li><a href="/">Dashboard</a></li>
              <li><a href="/">Sucursales</a></li>
              <li><a href="/">Menu</a></li>
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
              <li><a href="javascript:void(0)">Link</a></li>
              <li class="dropdown">
                <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0)">Action</a></li>
                  <li><a href="javascript:void(0)">Another action</a></li>
                  <li><a href="javascript:void(0)">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="javascript:void(0)">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <div class="container-fluid main">
            @yield('content')
        </div>                
    </body>
</html>