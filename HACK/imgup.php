<?php
  session_start();
?>
<?php include 'config/config.php' ?>
  <?php include 'lib/Database.php' ?>
  <?php
    $db = new Database();
  ?>



<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $permited  = array('jpg', 'jpeg', 'png', 'gif');

      $file_name = $_FILES['image']['name'];

      $file_size = $_FILES['image']['size'];

      $file_temp = $_FILES['image']['tmp_name'];

      

      $folder = "uploads/";

      move_uploaded_file($file_temp, $folder.$file_name);
      $nickname = $_POST['nickname'];

      //$user = $_SESSION['username'];

      $query = "INSERT INTO tbl_image(image,nickname) VALUES('$file_name','$nickname')";
      $inserted_rows = $db->insert($query);
      ?>
      


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Success</title>
  <!-- BOOTSTRAP STYLES-->

    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
    <?php include 'navi.php'?>      
    
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Image</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->


                <hr />

                
                    <div class="container 75%">
                      <div class="row uniform 50%">
                        
                        <div class="12u$">
                          <?php
                           if($inserted_rows)
                            echo "<p style='font-size:20px'><b>Image Inserted Succesfully</b></p>";
                          else
                            echo "Error";
                          //$id = $_SESSION['user_id'];

                          //$query = "update tbl_user set image='$file_name' where id='$id'";


                          //$inserted_rows = $db->update($query);
                        }
                        ?>
                          
                        </div>
                      </div>
                    </div>
                    
               

                



              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row"><?php include 'clock.php'?>
                <div class="col-lg-12" >
                  <p style="text-align: center">Design by: <a href="#" style="color:#fff;" target="_blank">Salim Shadman Ankur</a></p>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
