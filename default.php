<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-3.3.7/docs/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="default.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Part01_ArtistsDataList.php">Artist Data List (Part 1)</a></li>
                <li><a href="Part02-ArtistDetails.php?id=19">Single Artist (Part 2)</a></li>
                <li><a href="Part03-SingleWork.php?id=394">Single Work (Part 3)</a></li>
                <li><a href="Part04_Search.php">Search (Part 4)</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right" id="search_inp" method="GET" action="Part04_Search.php" >
            <p class="header-name">Vipulkumar Mahadik </p>
            <div class="form-group">
              <input name="search_txt" type="text" placeholder="Search Paintings" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Assignment #1!</h1>
        <p>This is first assignment for Vipulkumar Mahadik for COMP 3512.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-2">
          <h3>About us</h3>
          <p>What this is all about and other stuff.</p>
          <p><a class="btn btn-default" href="about.php" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> View details &raquo;</a></p>
        </div>
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Artist List</h3>
          <p>Displays the list of artists. </p>
          <p><a class="btn btn-default" href="Part01_ArtistsDataList.php" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> View details &raquo;</a></p>
       </div>
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Single Artist</h3>
          <p>Displays information for a single artist.</p>
          <p><a class="btn btn-default" href="Part02-ArtistDetails.php?id=19" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> View details &raquo;</a></p>
        </div>
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Single Work</h3>
          <p>Displays information for a single work.</p>
          <p><a class="btn btn-default" href="Part03-SingleWork.php?id=394" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> View details &raquo;</a></p>
        </div>
        <div class="col-md-2">
          <h3><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</h3>
          <p>Performs search on ArtWorks tables.</p>
          <p><a class="btn btn-default" href="Part04_Search.php" role="button"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
