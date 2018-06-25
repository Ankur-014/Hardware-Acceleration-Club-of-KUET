<?php include 'config/config.php' ?>
    <?php include 'lib/Database.php' ?>
    <?php
        $db = new Database();
    ?>
<?php
// Array with names


    $query = "select * from tbl_online";
    $mem = $db->select($query);
    $a = array();
    while($result = $mem->fetch_assoc()){
    ?>
    
    <?php 
       array_push($a,$result['product_name']); 
    
    };

 ?>
<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>