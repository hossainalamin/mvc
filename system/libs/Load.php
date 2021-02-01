<?php 
class Load{
	public function view($page){
		include 'app/views/'.$page.'.php';
	}
	public function viewCat($page,$data=array()){
	if($data==true){
		extract($data);
	}
		include 'app/views/'.$page.'.php';
	}
	public function viewModel($model){
		include 'app/models/'.$model.'.php';
		return new $model();
	}
}
?>