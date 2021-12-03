
<?php
if(isset($_POST['btnsubmit']))
  {
	$image=$_POST['image_name'];
	$files=$_FILES['file'];
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
	include("config.php");
$sql="INSERT INTO `image`(`image_name`, `photo`) VALUES ('$image','$destinationfile')";
$res=mysqli_query($conn,$sql);
 if($res==1)
	{
	    header('index.php');
	 }
else
	{
	     echo "faild";
	 }
	}

 ?>   
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	    <meta name="description" content="Free Web tutorials">
	    <meta name="keywords" content="HTML, CSS, JavaScript">
	    <meta name="author" content="rasal">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>      
	   <div class="container"><!--This is the main section-->
	      <h1>ADD PRODUCTS</h1>
	      <form action="" method="POST" enctype="multipart/form-data">
	        <hr> 
	        <div class="frm">
	          <div class="form-group"> 
		        <label id="icon" for="file"><i class="fa fa-picture-o" aria-hidden="true"></i></label>
		        <input type="file" name="file" class="form-control" required><br>
		        <label id="icon" for="price"></label>
		        <input type="text" name="image_name" class="form-control" id="image_name" required/>
		        <div class="btn-block">
		          <button type="submit" name="btnsubmit" class="login_btn">Submit</button>
		          <button type="reset" name="btnreset" class="login_btn">cancel</button>
	        	</div>
	          </div>
	        </div>
	      </form>
	    </div>
	</body>
</html>