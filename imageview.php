<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="tbl.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>IMAGE DETAILS</title>
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <h1 align="center"><u>IMAGE DETAILS</u></h1><br><br>
      <table>
        <tr>
          <th align="center"><b>Sl No<b></th>
          <th align="center"><b>IMAGE<b></th>
          <th align="center"><b>PHOTO<b></th>
          <th align="center"><b>UPDATE</b></th>
          <th align="center"><b>DELETE</b></th>
        </tr>
        <?php
        include("config.php");
         $i=0;
         $sql="SELECT * FROM image" ;
         $res=mysqli_query($conn,$sql);
         while($row=mysqli_fetch_array($res))
            {
               $i++;
             ?>
          <tr>
           <td align="center"><?php echo $i; ?></td>
           <td align="center"><?php echo $row['image_name']; ?></td>
           <td align="center"><img src="<?php echo $row['photo']; ?>" height="100px" width="100px"></td>
           <td align="center"><a href="Update.php?updateid=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></i></a></td>
           <td align="center"><a href="Delete.php?deleteid=<?php echo $row['id'];?>"><i class="fa fa-trash-o"></i></a></td>            
          </tr>
          <?php
                 }
             ?>
      </table>
  </body>
</html>