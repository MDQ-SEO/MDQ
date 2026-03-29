<?php


$photoString = "photo1.jpg,photo2.jpg,photo3.jpg"; // Replace this with your actual photo string
$photos = explode(',', $photoString);

// Assume $selectedIndex is the index you want to remove
$selectedIndex = 0; // Replace this with the actual selected index

// Check if the selected index is valid
if (isset($photos[$selectedIndex])) {
    // Remove the selected index from the array
    unset($photos[$selectedIndex]);

    // Reindex the array
    $photos = array_values($photos);

    // Display the final array
    print_r($photos);
} else {
    echo "Invalid selected index.";
}



// include "connect.php";

// if(isset($_POST['edit-post'])){
//     $post_id = $_POST['id'];
//     $projectname = $_POST['projectname'];
//     $aboutproject = $_POST['aboutproject'];
//     $type_project = $_POST['type_project'];

//     $path = '../images/portfolio/';

//     // First Image
//     if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
//         $allowedExtensions = array("jpg", "jpeg", "webp", "png");

//         $image = $_FILES['image']['name'];
//         $fileuploadtempname = $_FILES['image']['tmp_name'];
//         $extension = pathinfo($image, PATHINFO_EXTENSION);

//         date_default_timezone_set('Asia/Kolkata');
//         $createdAt = date("Y-m-d H:i:s", time());

//         if (move_uploaded_file($fileuploadtempname, $path.$image)) {
//             if(in_array($extension, $allowedExtensions)) {
//                 // Second Image
//                 if(isset($_FILES['sec_image']) && $_FILES['sec_image']['error'] === UPLOAD_ERR_OK) {
//                     $sec_image = $_FILES['sec_image']['name'];
//                     $sec_fileuploadtempname = $_FILES['sec_image']['tmp_name'];
//                     $sec_extension = pathinfo($sec_image, PATHINFO_EXTENSION);

//                     if (move_uploaded_file($sec_fileuploadtempname, $path.$sec_image)) {
//                         if(in_array($sec_extension, $allowedExtensions)) {
//                             $sql = mysqli_query($conn, "UPDATE project_list SET projectname = '$projectname', aboutproject = '$aboutproject', image = '$image', sec_image = '$sec_image', type_project = '$type_project' WHERE id = '$post_id'");
//                         } else {
//                             echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed for the second image');
//                             window.location.href='table-project-list.php'</script>";
//                             exit();
//                         }
//                     } else {
//                         echo "<script>alert('Failed to move uploaded file for the second image');
//                         window.location.href='table-project-list.php'</script>";
//                         exit();
//                     }
//                 } else {
//                     // If no second image is provided, update with the first image only
//                     $sql = mysqli_query($conn, "UPDATE project_list SET projectname = '$projectname', aboutproject = '$aboutproject', image = '$image', type_project = '$type_project' WHERE id = '$post_id'");
//                 }

//                 if($sql){
//                     echo "<script type='text/javascript'>
//                     alert ('Project List Updated Successfully');
//                     window.location.href='table-project-list.php';
//                     </script>";
//                     exit();
//                 } else {
//                     echo "<script type='text/javascript'>
//                     alert('Failed to update');
//                     window.location.href='table-project-list.php';
//                     </script>" . mysqli_error($conn);
//                     exit();
//                 }
//             } else {
//                 echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed for the first image');
//                 window.location.href='table-project-list.php'</script>";
//                 exit();
//             }
//         } else {
//             echo "<script>alert('Failed to move uploaded file for the first image');
//             window.location.href='table-project-list.php'</script>";
//             exit();
//         }
//     }
//     else {
//         // If no first image is provided, update without any images
//         $sql = mysqli_query($conn, "UPDATE project_list SET projectname = '$projectname', aboutproject = '$aboutproject' , type_project = '$type_project' WHERE id = '$post_id'");

//         if($sql){
//             echo "<script type='text/javascript'>
//             alert ('Updated Successfully');
//             window.location.href='table-project-list.php';
//             </script>";
//             exit();
//         } else {
//             echo "<script type='text/javascript'>
//             alert('Failed to update');
//             window.location.href='table-project-list.php';
//             </script>" . mysqli_error($conn);
//             exit();
//         }
//     }
// }
?>
