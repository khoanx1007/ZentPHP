<?php
require_once "models/Category.php";
require_once "controllers/BaseController.php";
class CategoryController extends BaseController
{
    public function index(){
        $category = new Category();
        $categories = $category->getList();
        $this->view('categories/list.php', [
            'categories' => $categories,
        ]);
        //require_once('views/categories/list.php');
    }
    public function create(){
        $this->view('categories/create.php');
    }
    public function store(){
        $this->redirect("index.php?mod=category&act=index");
    }
}

?>