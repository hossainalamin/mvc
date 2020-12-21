<?php 
class Test extends Tcontroller{
    function __construct()
    {
        parent::__construct();
    }
    public function test($param){
        echo "Hi $param .";
    }  
}
?>