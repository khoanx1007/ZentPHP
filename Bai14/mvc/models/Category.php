<?php
require_once "models/Query.php";
class Category extends Query
{
    public $table = 'categories';
    public function getList()
    {   
        $categories = $this->select($this->table,['id','name','parent_id','description','thumbnail','created_at']);
        return $categories;
    }
    public function create($data){
        $status = $this -> insert($this->table,$data);
        return $status;
    }
}

?>