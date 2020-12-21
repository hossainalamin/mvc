<?php
class Database extends PDO{
	public function __construct($dsn,$db_user,$db_pass){
		parent::__construct($dsn,$db_user,$db_pass);
	}
	public function select($table){
		$sql = "SELECT * from $table";
		$stmt = $this->prepare($sql);
		if($stmt->execute()){
		return $stmt->setFetchMode(PDO::FETCH_ASSOC);
		}else{
			return false;
		}
	}
}
?>