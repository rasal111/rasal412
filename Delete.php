<?php
$delete=$_REQUEST['deleteid'];
include("config.php");
$sql="DELETE FROM `image` WHERE `id`='$delete'";
$res=mysqli_query($conn,$sql);
if($res==1)
{
    header("location:imageview.php");
}
else{
    echo "faild";
}
?>