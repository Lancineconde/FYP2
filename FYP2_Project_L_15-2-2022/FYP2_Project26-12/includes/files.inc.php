<?php
include_once 'dhh2.inc.php';
if(isset($_POST['upload']))
{


 $name = mysqli_real_escape_string($conn, $_POST['name']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $phone = mysqli_real_escape_string($conn, $_POST['phone']);
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="C:/xampp/htdocs/file/upload/";

 /* new file size in KB */
 $new_size = $file_size/1024;
 /* new file size in KB */

 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */

 $final_file=str_replace(' ','-',$new_file_name);

 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO file(name, email, phone, file_name,type,size) VALUES('$name', '$email', '$phone', '$final_file','$file_type','$new_size')";
  mysqli_query($conn,$sql);


  echo "<script>
  alert('Application Successfully sent, Thank You. ');
  window.location.href='../applytojob.php';
  </script>";

 }
 else
 {

   echo "<script>
   alert('Error.Please try again');
   window.location.href='../filesUpload.php';
   </script>";

		}
	}
?>
