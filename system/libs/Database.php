<?php
class Database extends PDO{
	public function __construct($dsn,$db_user,$db_pass){
		parent::__construct($dsn,$db_user,$db_pass);
	}
	public function select($sql,$data = array(),$fetch_mode = PDO::FETCH_ASSOC){
		$stmt = $this->prepare($sql);
		foreach($data  as $key=>$value){
			$stmt->bindParam($key,$value);
		}
		if($stmt->execute()){
		return $stmt->fetchAll($fetch_mode);
		}else{
			return false;
		}
	}
	public function insert($sql,$data=array()){
		$stmt = $this->prepare($sql);
			foreach($data as $key=>$value){
				$stmt->bindValue($key,$value);
			}		
		return $stmt->execute();
	}
	public function update($sql,$data=array()){
		$stmt = $this->prepare($sql);
			foreach($data as $key=>$value){
				$stmt->bindValue($key,$value);
			}		
		return $stmt->execute();
	}
	public function delete($sql){
		return $this->exec($sql);
	}
}
?>