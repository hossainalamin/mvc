<?php 
class Main{
    public $url;
    public $controller_name = "Index";
    public $method_name   = "Index";
    public $path       = 'app/controllers/';
    public $controller;
    public function __construct(){
        $this->GetUrl();
        $this->LoadController();
        $this->CallMethod();
    }
    public function GetUrl(){
        $this->url = isset($_GET['url'])?$_GET['url']:NULL;
        if($this->url != null ){
            $this->url = rtrim($this->url,'/');
            $this->url = explode("/",$this->url);
        }else{
                unset($this->url);
            }
    }
    public function LoadController(){
        if(!isset($this->url[0])){
            include $this->path.$this->controller_name.".php";
            $this->controller = new $this->controller_name();
        }else{
            $this->controller_name = $this->url[0];
            $file_name = $this->path.$this->controller_name.".php";
            if(file_exists($file_name)){
                include $file_name;
                if(class_exists($this->controller_name)){
                    $this->controller = new $this->controller_name();
                }else{
                    header("location:".base_url."/Index");
                }
            }else{
                header("location:".base_url."/Index");
            }
        }
    }
    public function CallMethod(){
        if(isset($this->url[2])){
            $this->method_name = $this->url[1];
            if(method_exists($this->controller,$this->method)){
                $this->controller->$this->method_name($this->url[2]);
            }else{
                header("location:".base_url."/Index");
            }
        }else{
            if(isset($this->url[1])){
                $this->method_name = $this->url[1];
                if(method_exists($this->controller,$this->method)){
                    $this->controller-> $this->method_name();
                }else{
                    header("location:".base_url."/Index");
                }
            }else{
                header("location:".base_url."/Index");
            }
        }
    }        

}

?>