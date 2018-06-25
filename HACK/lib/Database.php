<?php
Class Database{
	
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;
	
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
	
	try{
		$this->link = new mysqli($this->host, $this->user, $this->pass);
		$sql = "CREATE DATABASE ".$this->dbname;
		$this->link->query($sql);
		$this->link->close();
		$this->link = new mysqli($this->host, $this->user, $this->pass,$this->dbname);
		/*if$tbl_notice = "CREATE TABLE IF NOT EXISTS tbl_notice (
					  id int(11) NOT NULL AUTO_INCREMENT,
					  title varchar(255) NOT NULL,
					  post text NOT NULL,
					  time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
					  PRIMARY KEY (id)
					) ENGINE=InnoDB  DEFAULT CHARSET=latin1;";
		($this->link->query($tbl_notice))
		{
			$insert_notice = "INSERT INTO tbl_notice (id, title, post, time) VALUES
								(4, 'Rapsberry Pie', 'A class will be held on 30 March,2018 on Rapsberry Pie. Class instructors will be Tusher Mondal & Hasib Iqbal', '2018-04-01 13:43:59'),
								(5, 'Arduino Workshop', 'A workshop will be held on Arduino for 2k16', '2018-04-01 15:06:54');";
			$this->link->query($insert_notice);
		}		;
		*/	

	}
	catch(Exception $e)
	{
		echo "Message : ".$e->getMessage();
	}
 }
	
	// Select or Read data
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		} else {
			return false;
		}
	}
	
	// Insert data
	public function insert($query){
	$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($insert_row){
		return $insert_row;
	} else {
		return false;
	}
  }
  
    // Update data
  	public function update($query){
	$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($update_row){
		return $update_row;
	} else {
		return false;
	}
  }
  
  // Delete data
   public function delete($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($delete_row){
		return $delete_row;
	} else {
		return false;
	}
  }

 
 
}

