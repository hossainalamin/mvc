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
	public function insertCatagory($table,$data=array()){
		$sql = "INSERT into $table(name,title) VALUES(:name,:title)";
		$data = array(":name" => $data['name'],
		":title" => $data['title']
	);
		return $this->con->insert($sql,$data);
	}

}
?>