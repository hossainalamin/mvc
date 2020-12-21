<?php 
class Catagory extends Dmodel{
	public function __construct(){
		parent::__construct();
	}
	public function catList($table){
		$sql = "SELECT * from $table";
		return $this->con->select($sql);
	}
	public function catById($table,$id){
		$sql = "SELECT * from $table WHERE id=:id";
		$data = array(":id"=>$id);
		return $this->con->select($sql,$data);
	}
}
?>