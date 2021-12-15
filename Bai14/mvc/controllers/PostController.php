<?php
require_once "models/Post.php";
require_once "controllers/BaseController.php";
class PostController extends BaseController
{
    public function index(){
        $post = new Post();
        $posts = $post->getList();
        $this->view('posts/list.php' , ['posts' => $posts,]);
        //require_once('views/posts/list.php');
    }
    public function create(){
        $this->view('posts/create.php');
    }
    public function store(){
        $this->redirect("index.php?mod=post&act=index");
    }
}

?>