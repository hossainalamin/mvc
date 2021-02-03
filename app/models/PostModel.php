<?php
class PostModel extends Dmodel{
    function __construct(){
        parent::__construct();
    }
    function PostList($table){
            $sql = "SELECT * from $table order by id limit 3";
            return $this->con->select($sql);
    }
    function GetPostById($table_post,$table_catagory,$id){
        $sql = "SELECT $table_post.*,$table_catagory.name from $table_post inner join $table_catagory on $table_post.cat = $table_catagory.id where $table_post.id = $id";
        return $this->con->select($sql);
}
}
?>