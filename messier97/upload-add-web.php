<?php
include 'connect.php';
if (isset($_POST['upload'])) {
	//project image
	$projectimages = $_FILES["weblogo_images"]["name"];
	$projectimagesTempname = $_FILES["weblogo_images"]["tmp_name"];
	$folder="../images/portfolio";
   //project banner image
    $webbannerimages = $_FILES["webbannerimages"]["name"];
	$bannerimagesTempname = $_FILES["webbannerimages"]["tmp_name"];
	//proview about the project
    $webproject_overview =$_POST["webproject_overviews"];
	$webproject_title =$_POST["webproject_title"];
	//slider image for the project

	  $images_name ="";
	  foreach ($_FILES["webphotos"]["error"] as $key => $error) {
		  if ($error == UPLOAD_ERR_OK) {
			  $tmp_name = $_FILES["webphotos"]["tmp_name"][$key];
			  $name = $_FILES["webphotos"]["name"][$key];
			  $images_name =$images_name.",".$name;
		  }
	  }
	  $cilent_id=$_POST['cilent_id'];

	  $technology=$_POST['technology'];
	  $icontech="";
	  foreach($technology as $tech){
		$icontech .=$tech.",";
	  }


    if (move_uploaded_file($projectimagesTempname ,$folder . $projectimages) && move_uploaded_file($bannerimagesTempname ,$folder.$webbannerimages) && move_uploaded_file($tmp_name ,$folder . $images_name)){

		$sql = mysqli_query($conn,"INSERT INTO `web_details`(`cilent_id`,`webproject_title`,`weblogo_images`, `webbanner_images`, `webproject_overview`, `webphotos`, `technology`) VALUES ('$cilent_id','$webproject_title','$projectimages','$webbannerimages','$webproject_overview','".$images_name."','$icontech')");
		if($sql){
			echo "<script type='text/javascript'>
		alert('application has been inserted successfully');
		window.location.href='admin-create-portfolio.php';
		</script>";
		}else{
			echo "<script type='text/javascript'>
		alert('application has not been inserted successfully');
	    window.location.href='admin-create-portfolio.php';
		</script>";
		}
	  }else{
		echo "<script type='text/javascript'>
		alert('application has not been moved');
		window.location.href='admin-create-portfolio.php';
		</script>";
	  }

}
?>