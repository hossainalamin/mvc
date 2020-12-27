<?php 
class CatController extends Tcontroller{
    public function __construct(){
        parent::__construct();
    }
    public function catagoryModel(){
		$data = array();
		$table = "tbl_catagory";
		$model = $this->load->viewModel("Catagory");
		$data['cat'] = $model->catList($table);
		$this->load->viewCat("catagory",$data);
	}
	public function catById(){
		$data = array();
		$table = "tbl_catagory";
		$id=1;
		$model = $this->load->viewModel("Catagory");
		$data['catbyid'] = $model->catById($table,$id);
		$this->load->viewCat("catbyid",$data);
	}
	public function addCatagory(){
		$this->load->viewCat("addcat");
	}
	public function insertCatagory(){
		$name=$_POST['name'];
		$title=$_POST['title'];
		$table = "tbl_catagory";
		$data  = array(
			'name'  => $name,
			'title' => $title
		);
		$model = $this->load->viewModel("Catagory");
		$result = $model->insertCatagory($table,$data);
		$mdata=array();
		if($result==1){
			$mdata['msg'] = "Catagory added successfully";
		}else{
			$mdata['msg'] = "Catagory not added";
		}
		$this->load->viewCat("addcat",$mdata);
	}
	public function updateCatagory(){
		$table = "tbl_catagory";
		$con   = "id=2";
		$data=array(
			"name" =>  "cosmetics",
			"title"=> "Indian cosmetics"
		); 
		$model = $this->load->viewModel("Catagory");
		$result = $model->updateCatagory($table,$data,$con);
	}
	public function deleteCatById(){
		$table = "tbl_catagory";
		$con   = "id=35";
		$model = $this->load->viewModel("Catagory");
		$result = $model->deleteCatagory($table,$con);
	}
}
?>