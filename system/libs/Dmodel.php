<?php 
class Dmodel{
	protected $con = array();
	public function __construct(){
		$dsn = 'mysql:dbname=db_mvc; host=localhost';
		$db_user = 'root';
		$db_pass = "";
		$this->con = new Database($dsn,$db_user,$db_pass);
	}
}
?>