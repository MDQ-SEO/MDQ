<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $collname= $_POST['collname'];
    $ypass= $_POST['ypass'];
    $degree= $_POST['degree'];
    $branch= $_POST['branch'];
    $location= $_POST['location'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $comment= $_POST['comment'];
    $gender= $_POST['gender'];
    $position= $_POST['position'];
    $oldoffice= $_POST['oldoffice'];
    $experience= $_POST['experience'];
    $dob=$_POST=['dob'];
    (isset($_POST['dp'])) ? $dp = $_POST['dp'] : $dp = null;
    (isset($_POST['cv'])) ? $cv = $_POST['cv'] : $cv = null;


// for cv
    $filename = $_FILES['cv']['name'];
    $tempname = $_FILES['cv']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $folder = "./resume";

//for dp
    $my_dp = $_FILES['dp']['name'];
    $temp_dp = $_FILES['dp']['tmp_name'];
    $extension_dp = pathinfo($my_dp, PATHINFO_EXTENSION);
    $folder_dp = "./photo";



  $sql = "INSERT INTO careers (name, collname, ypass, degree, branch, location, email, mobile, comment, gender,dp,cv,dob,position,old_office,experience) VALUES ('$name', '$collname', '$ypass', '$degree', '$branch', '$location', '$email', '$phone', '$comment', '$gender','$my_dp','$filename','$dob','$position','$oldoffice','$experience')";
  // execute query
  if (mysqli_query($conn,$sql))
  {
  if (move_uploaded_file($tempname,"$folder/$filename") || move_uploaded_file($temp_dp,"$folder_dp/$my_dp") )
  {

      echo "<script type='text/javascript'>
      alert('Thank you! for Joining us!');
          window.location.href='../offer-letter.php';
      </script>";
  }else{
      echo "<script type='text/javascript'>
      alert('Photo/Resume not uploaded');
      window.location.href='../offer-letter.php';
      </script>";
  }

  }

  else
  {

      echo " <script type='text/javascript'>
      alert('Something went wrong. Please try again Later!');
      window.location.href='../offer-letter.php';
      </script>";

  }

}
  ?>