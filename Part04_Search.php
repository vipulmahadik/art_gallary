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
$txt ="";
if (isset($_GET['search_txt'])) {
  # code...
$txt = $_GET['search_txt'];
require 'connection.php';
$sql  = "SELECT `ArtWorkID`, `ImageFileName`, `Title`, `Description`, `GalleryID` FROM `artworks` WHERE `Title` LIKE '%$txt%'";
$result = mysqli_query($con,$sql);
}
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
      <div class="jumbotron" style="margin-top: 40px;">
        <div class="row">
          <div class="col-md-12">
            <form onsubmit="parsesearch()" action="javascript:void()">
              <div class="radio">
                <label><input type="radio" name="optradio" value="0" checked onchange="toggletext(this.value)">Filter by Title</label>
              </div>
              <div id="title_inp"><input class="form-control" type="text" id="titlewala" placeholder="Enter title here !" value="<?php if (isset($_GET['search_txt'])) {
                echo $_GET['search_txt'];
              }?>"></div>
              <div class="radio">
                <label><input type="radio" name="optradio" value="1" onchange="toggletext(this.value)">Filter by Description</label>
              </div>
              <div id="description_inp" class="invisi"><input class="form-control" type="text" id="descriptionwala" placeholder="Enter Description here !"></div>
              <div class="radio">
                <label><input type="radio" name="optradio" value="2" onchange="toggletext(this.value)">No filter (Show all)</label>
              </div>
              <div id="all_inp" class="invisi"></div>
              <button type="submit"  class="btn btn-primary">Filter</button>
            </form>
          </div>
        </div>
      </div>
      <div id="data">
        <?php
        if (isset($result)) 
          while($row = mysqli_fetch_array($result)) {
        ?>
          <div class="row search_row_pad" >
            <div class="col-md-2">
              <img src="images2/art/works/square-medium/<?php echo $row['ImageFileName']; ?>.jpg" class="img img-responsive">
            </div>
            <div class="col-md-10">
              <h4><a href="Part03-SingleWork.php?id=<?php echo $row['ArtWorkID'];?>"><?php echo $row['Title']; ?></a></h4>
              <p><?php echo $row['Description']; ?></p>
            </div>
          </div>
        <?php } ?>
        
      </div>
      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
      <script type="text/javascript">
        function toggletext(arg) {
          if (arg == "0") {
            document.getElementById('description_inp').className = "invisi";
            document.getElementById('title_inp').className = "";document.getElementById('titlewala').value = "";
          }
          if (arg == "1") {
            document.getElementById('description_inp').className = "";document.getElementById('descriptionwala').value="";
            document.getElementById('title_inp').className = "invisi";
          }
          if (arg == "2") {
            document.getElementById('description_inp').className = "invisi";
            document.getElementById('title_inp').className = "invisi";
          }
        }

        function parsesearch() {
          var filter = document.querySelector('input[name="optradio"]:checked').value;
          var text = "";
          if (filter==1) {text = document.getElementById('descriptionwala').value;}
          if (filter==2) {text = "";}
          if (filter==0) {text = document.getElementById('titlewala').value;}
          console.log(filter+" "+text);
            document.getElementById('data').innerHTML= "Loading ...";
          $.get("ajaxcall.php",{search_txt : text, by : filter},function(data) {
            document.getElementById('data').innerHTML= data;
            console.log(data);
          });
        }
      </script>
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
