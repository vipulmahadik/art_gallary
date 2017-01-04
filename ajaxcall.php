<?php
$txt = $_GET['search_txt'];
$by = $_GET['by'];
require 'connection.php';
if ($by == '0') {
	$sql  = "SELECT `ArtWorkID`, `ImageFileName`, `Title`, `Description`, `GalleryID` FROM `artworks` WHERE `Title` LIKE '%$txt%'";
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
	?>
	<div class="row search_row_pad">
	  <div class="col-md-2">
	    <img src="images2/art/works/square-medium/<?php echo $row['ImageFileName']; ?>.jpg"  class="img img-responsive">
	  </div>
	  <div class="col-md-10">
	    <h4><a href="Part03_SingleWork.php?id=<?php echo $row['ArtWorkID'];?>"><?php echo $row['Title']; ?></a></h4>
	    <p><?php if ($row['Description'] == "") {
	    	echo "No Description Available";
	    } else echo $row['Description']; ?></p>
	  </div>
	</div>
	<?php } 
}
if ($by == '1') {
	$sql  = "SELECT `ArtWorkID`, `ImageFileName`, `Title`, `Description`, `GalleryID` FROM `artworks` WHERE `Description` LIKE '%$txt%'";
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
	?>
	<div class="row search_row_pad">
	  <div class="col-md-2">
	    <img src="images2/art/works/square-medium/<?php echo $row['ImageFileName']; ?>.jpg"  class="img img-responsive">
	  </div>
	  <div class="col-md-10">
	    <h4><a href="Part03_SingleWork.php?id=<?php echo $row['ArtWorkID'];?>"><?php echo $row['Title']; ?></a></h4>
	    <p><?php if ($row['Description'] == "") {
	    	echo "No Description Available";
	    } else echo str_ireplace($txt,"<span class=\"highlight\">".$txt."</span>",$row['Description']); ?></p>
	  </div>
	</div>
	<?php } 
}
if ($by == '2') {
	$sql  = "SELECT `ArtWorkID`, `ImageFileName`, `Title`, `Description`, `GalleryID` FROM `artworks` WHERE `Title` LIKE '%$txt%' or `Description` LIKE '%$txt%'";
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
	?>
	<div class="row search_row_pad">
	  <div class="col-md-2">
	    <img src="images2/art/works/square-medium/<?php echo $row['ImageFileName']; ?>.jpg"  class="img img-responsive">
	  </div>
	  <div class="col-md-10">
	    <h4><a href="Part03_SingleWork.php?id=<?php echo $row['ArtWorkID'];?>"><?php echo $row['Title']; ?></a></h4>
	    <p><?php echo $row['Description']; ?></p>
	  </div>
	</div>
	<?php } 
}
?>