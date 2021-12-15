<?php
require_once "models/Query.php";
class Post extends Query
{
    public $table = 'posts';
    public function getList()
    {   
        $posts = $this->select($this->table,['id','title','thumbnail','category_id','content','description','created_at']);
        return $posts;
    }
}

?>