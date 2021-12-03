
<html>
  <head>
  	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="w3-row w3-padding-64">
      <div class="w3-twothird w3-container">           
        <div class="container"><!--This is the main section-->
          <?php               
           $update=$_REQUEST['updateid'];
           include("config.php");
           $sql="SELECT * FROM image WHERE id=$update";
           $res=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_array($res))
              {                 
             ?>
           <br><br>
        <div class="home-content">
          <div class="box-topic">
            <div class="main-block">
              <h1>UPDATE</h1>
              <form action="Action.php?updateid=<?php echo $row['id'];?>" method="POST">
                <hr>
                 <div class="frm">
                   <div class="form-group">
                      <label id="icon" for="category"><!-- <i class="fa fa-list-alt" aria-hidden="true"> --></i></label>
                      <input type="text" name="image_name" id="category" readonly value="<?php echo $row['image_name']; ?>"/>
                        <label id="icon" for="file"><!-- <i class="fa fa-picture-o" aria-hidden="true"> --></i></label>
                         <input type="file" name="file" required><br>
                          <?php
                           }
                            ?>
                           <div class="btn-block">
                              <button type="submit" class="login_btn" name="btnsubmit">Submit</button>
                              <button type="reset" class="login_btn" name="btnreset">cancel</button>
                            </div>
                    </div>
                  </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  </body>
</html>
    
    