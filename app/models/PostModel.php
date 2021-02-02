<?php
class PostModel extends Dmodel{
    function __construct(){
        parent::__construct();
    }
    function PostList($table){
            $sql = "SELECT * from $table order by id limit 3";
            return $this->con->select($sql);
    }
}
?>