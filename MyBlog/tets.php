<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>

<?php

	$db = new Database();
	$del = "delete from tbl_mili where roll = 11";
	$db->delete($del);
	$query = "select * from tbl_mili";
	$data = $db->select($query);
	while($result = $data->fetch_assoc())
	{
		echo $result['name']."<br/>";
		echo $result['id']."<br/>";
		echo $result['roll']."<br/><br/>";
	}

?>