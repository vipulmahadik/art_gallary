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
<?php 
$id = $_GET['id'];
require 'connection.php';
$sql  = "SELECT * FROM `artists` where `ArtistID`=$id";
$result = mysqli_query($con,$sql);
// if (mysql_num_rows($result)==0) { 
//   // echo $result;
//   header("Location: http://127.0.0.1/swapnil/Project3/Error.php");
// die();
// }

?>
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


    <div class="container">
      <!-- Example row of columns -->
      <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-12">
            <?php 
            $flag = 0;
              while($row = mysqli_fetch_array($result)) {
                $flag = 1;
                ?>
        <h1><?php echo $row['FirstName']." ".$row['LastName']; $name = $row['FirstName']." ".$row['LastName'];?></h1>
          <div class="col-md-4 " data-toggle="modal" data-target="#myModal">
            <img src="images2/art/artists/medium/<?php echo $row['ArtistID'];?>.jpg" class="img img-responsive img-thumbnail">
          </div>
          <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $name; ?></h4>
                  </div>
                  <div class="modal-body">
                    <p><img src="images2/art/artists/medium/<?php echo $row['ArtistID'];?>.jpg"></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
          <div class="col-md-5">
            <p><?php echo $row['Details']; ?></p>
            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Add to favourite</button>
            <div class="panel panel-default margint20" >
              <!-- Default panel contents -->
              <div class="panel-heading">Artist Details</div>

              <!-- Table -->
              <table class="table">
              <tr><td><b>Date:</b></td><td><?php echo $row['YearOfBirth']." - ".$row['YearOfDeath']; ?></td></tr>
              <tr><td><b>Nationality:</b></td><td><?php echo $row['Nationality']; ?></td></tr>
              <tr><td><b>More info:</b></td><td><?php echo "<a href=".$row['ArtistLink'].">".$row['ArtistLink']."</a>"; ?></td></tr>
              </table>
            </div>
          </div>
          <?php } 
          if ($flag == 0) {
            header("Location: http://127.0.0.1/swapnil/Project3/Error.php");
          die();
          }

          $sql  = "SELECT * FROM `artworks` where `ArtistID`=$id";
          $result = mysqli_query($con,$sql);
          ?>
        </div>
      </div>
      <div class="row"><div class="col-md-12"><h2>Art by <?php echo $name; ?></h2></div></div>
      <?php 
      $counter = 0;

        while($row = mysqli_fetch_array($result)) {
          if ($counter%4==0) {
            # code...
            echo '<div class="row" style="margin-top: 15px;">';
          }

          echo  "<div class=\"col-md-3\" style=\"padding=5px;\">
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">
              <div class=\"row\"><div class=\"col-md-12\"><img src=\"images2/art/works/square-medium/".$row['ImageFileName'].".jpg\" class=\"img-thumbnail art-img\"></div></div>
              <a class=\"title-work-artist\" href=".$row['ArtWorkLink'].">".$row['Title'].", ".$row['YearOfWork']."</a>
              <div class=\"col-md-12\">
                <div class=\"col-md-4\" style=\"padding: 0 4px;\"><a class=\"btn btn-primary btn-padd\" href=\"Part03-SingleWork.php?id=".$row['ArtWorkID']."\" role=\"button\"><span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span> View</a></div>
                <div class=\"col-md-4\" style=\"padding: 0 4px;\"><a class=\"btn btn-success btn-padd\" href=\"#\" role=\"button\"><span class=\"glyphicon glyphicon-gift\" aria-hidden=\"true\"></span> Wish</a></div>
                <div class=\"col-md-4\" style=\"padding: 0 4px;\"><a class=\"btn btn-info btn-padd\" href=\"#\" role=\"button\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Cart</a></div>
              </div>
            </div>
          </div>
        </div>
          ";
          $end = 0;
          if ($counter%4==3) {
                  # code...
            $end=1;
            echo "</div>";
          }
          $counter=$counter+1;
        }
        if ($end == 0) {
          echo "</div>";
        }
      ?>

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
