
  <?php include 'config/config.php' ?>
  <?php include 'lib/Database.php' ?>
  <?php
    session_start();
  ?>
  <?php
    $db = new Database();
  ?>

<?php

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $permited  = array('jpg', 'jpeg', 'png', 'gif');

    $file_name = $_FILES['image']['name'];

    $file_size = $_FILES['image']['size'];

    $file_temp = $_FILES['image']['tmp_name'];

    $folder = "uploads/";

    move_uploaded_file($file_temp, $folder.$file_name);

    //$user = $_SESSION['username'];

    //$query = "INSERT INTO tbl_user(image,username) VALUES('$file_name','$user')";
    //$inserted_rows = $db->insert($query);
    $id = $_SESSION['user_id'];

    $query = "update tbl_user set image='$file_name' where id='$id'";


    $inserted_rows = $db->update($query);
  }

    ?>

    

  

  <section id="main" class="wrapper">
        <div class="container">

          <header class='major special' onload="startTime()">
            <h2> 
            <?php echo "Profile Picture"?>
             </h2>
            <p>Hardware Acceleration Club of KUET</p>

            <?php
             if ($inserted_rows) {

              echo "<span class='success'>Image Inserted Successfully.

                    </span>";

              }else {

               echo "<span class='error'>Image Not Inserted !</span>";

              }

             
           ?>



          </header>

          <!--<form action="" method="post" enctype="multipart/form-data">
              Select image to upload:
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submit">
          </form>-->

        </div>
      </section>
      



<!DOCTYPE HTML>

<html>
  <head>
    <title>USER</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <?php include 'clock.php' ?>
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <h1><a href="users.php">HACK</a></h1>
        <a href="#nav">Menu</a>
      </header>
      <div>


      </div>

    <?php include 'unav.php'?>

    <!-- Main -->
      

    

<?php include 'footer.php'?>