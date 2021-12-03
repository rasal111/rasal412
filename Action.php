<?php
if(isset($_POST['btnsubmit']))
{
$update=$_REQUEST['updateid'];
$image=$_REQUEST['image_name'];
  $files=$_files['file'];
	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];
	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));
	$fileextstored = array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored))
	{
	    $destinationfile="upload/".$filename;
	    move_uploaded_file($filetmp,$destinationfile);
	}

 $servername="localhost";
$username="root";
$password="";
$dbname="demo";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if($conn===false)
 {
     die("Error,couldn't connect ".mysqli_connect_error());
 }
 $sql="UPDATE `images` SET  'image_name'='$image', `photo`='$destinationfile' WHERE `id`='$update'";
$res=mysqli_query($conn,$sql);
 if($res==1)
{
    header('location:imageview.php');
 }
else
{
     echo "faild";
 }
}


 ?>   
