
<!DOCTYPE html>
<html>
    <head>
      <title>Image gallery</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="rasal">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
    </head>
  <body>
    <form action="view.php">
      <div class="w3-bar w3-blue">
        <a href="#" class="w3-bar-item w3-button">Home</a>
        <a href="imgupload.php" class="w3-bar-item w3-button">Upload image</a>
        <a href="imageview.php" class="w3-bar-item w3-button">Image view</a>
      </div>
      <div class="container-fluid">
        <?php
        include("config.php");
        $query="SELECT * FROM image";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
        if($total!=0)
        {
          while($result=mysqli_fetch_assoc($data))
          {
            echo "<img src='".$result['photo']."' height='250' width='250'>";

          }
        }
        ?>
      </div>
    </form>
  </body>
</html>
