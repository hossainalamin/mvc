<?php 
class Load{
	public function viewHome($page){
		include 'app/views/'.$page.'.php';
	}
	public function viewCat($page,$data=false){
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