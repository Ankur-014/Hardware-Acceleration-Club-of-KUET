<?php
  session_start();
?>
<?php include 'config/config.php' ?>
  <?php include 'lib/Database.php' ?>
  <?php
    $db = new Database();
  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notice Board</title>
	<!-- BOOTSTRAP STYLES-->
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
                     <h2>Notice Board </h2>   
                    </div>
            </div>              
            <hr />
            <div>
              <p>Suggestions: <span id="txtHint"></span></p> 
              <form method="post">Search: <input type="text" id="txt1" placeholder="Title" name="name2" onkeyup="showHint(this.value)">
                  <input type="submit"  value="Delete Notice">
              </form>
              <?php
                  if($_SERVER['REQUEST_METHOD'] == "POST")
                  {
                    $user   = $_POST['name2'];
                    $query2 = "SELECT * from tbl_notice";
                    $result1 = $db->select($query2);
                    $xw = "<b>Not Found</b>";
                    while($result2 = $result1->fetch_assoc()){

                      if($result2['title']===$user){
                        $id = $result2['title'];
                        $sql = "DELETE from tbl_notice where title = '$id'";
                        $sql1 = $db->delete($sql);
                        if($sql1)                        
                          $xw= "<b>Succesfully Deleted</b>";

                        break;
                      }             
                    } 
                    
                     echo $xw;

                  }
                    
             ?>

                <script>
                function showHint(str) {
                  var xhttp;
                  if (str.length == 0) { 
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                  }
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                  };
                  xhttp.open("GET", "gethint3.php?q="+str, true);
                  xhttp.send();   
                }
                </script>
            </div>
                 <!-- /. ROW  -->

            <?php
            $query = "select * from tbl_notice order by time desc";
            $notice = $db->select($query);
            while($result = $notice->fetch_assoc()){
            ?>
            
            <h3><a href="#"><?php echo  $result['title']; ?></a></h3>
            <?php //<a href="#"><img src="images/hack.jpg" alt="post image"/></a>?>
            <?php echo $result['post']; ?>
            <p><?php echo $result['time']; ?></p>
                     
            
          
          <?php } ?>

                  
              
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
