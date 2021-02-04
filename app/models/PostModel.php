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
    public function GetPostByCat($table_post,$table_catagory,$id){
        $sql = "SELECT $table_post.*,$table_catagory.name from $table_post inner join $table_catagory on $table_post.cat = $table_catagory.id where $table_catagory.id = $id";
        return $this->con->select($sql);
    }
    public function LatestPostList($table){
        $sql = "SELECT * from $table order by id limit 3";
        return $this->con->select($sql);
    }
    public function GetPostBySearch($table,$keyword,$id){
        if(empty($keyword) && $id==0){
            header('location:'.base_url.'/Index/home');
        }
        if(isset($keyword) && !empty($keyword)){
        $sql = "SELECT * from $table where title like '%$keyword%' or content like '%$keyword%' and cat = '$id' order by id limit 3";
        }elseif(isset($id)){
            $sql = "SELECT * from $table where cat = '$id' order by id limit 3";
        }
        return $this->con->select($sql);
    }
}
?>