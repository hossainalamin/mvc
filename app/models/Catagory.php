<?php 
class Catagory extends Dmodel{
	public function __construct(){
		parent::__construct();
	}
	public function catList($table){
		return $this->con->select($table);
	}
	public function catById($table,$id){
		$sql = "SELECT * from $table WHERE id=:id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindParam(":id",$id);
		if($stmt->execute()){
		return $stmt->fetchAll();
		}else{
			return false;
		}
	}
}
?>