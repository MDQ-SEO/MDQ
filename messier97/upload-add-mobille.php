<?php
include 'connect.php';
if (isset($_POST['upload'])) {
	//project image
	$projectimages = $_FILES["projectimages"]["name"];
	$projectimagesTempname = $_FILES["projectimages"]["tmp_name"];
	$folder="../images/portfolio";
   //project banner image
    $bannerimages = $_FILES["bannerimages"]["name"];
	$bannerimagesTempname = $_FILES["bannerimages"]["tmp_name"];
	//proview about the project
    $project_overview =$_POST["project_overviews"];
	$project_title =$_POST["project_title"];
	//slider image for the project

	  $images_name ="";
	  foreach ($_FILES["photos"]["error"] as $key => $error) {
		  if ($error == UPLOAD_ERR_OK) {
			  $tmp_name = $_FILES["photos"]["tmp_name"][$key];
			  $name = $_FILES["photos"]["name"][$key];
			  $images_name =$images_name.",".$name;
		  }
	  }
	  $cilent_id=$_POST['cilent_id'];

	  $technology=$_POST['technology'];
	  $icontech="";
	  foreach($technology as $tech){
		$icontech .=$tech.",";
	  }


    if (move_uploaded_file($projectimagesTempname ,$folder . $projectimages) && move_uploaded_file($bannerimagesTempname ,$folder.$bannerimages) && move_uploaded_file($tmp_name ,$folder . $images_name)){

		$sql = mysqli_query($conn,"INSERT INTO `application_web`(`cilent_id`,`project_title`,`logo_images`, `banner_images`, `project_overview`, `photos`, `technology`) VALUES ('$cilent_id','$project_title','$projectimages','$bannerimages','$project_overview','".$images_name."','$icontech')");
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