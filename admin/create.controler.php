<?php

include "../inc/autoload.inc.php";

$post = new Post();

if(isset($_POST['submit'])) {
    $title = $_POST['blog_title'];
    $body  = $_POST['blog_body'];
    $create_at = $_POST['create_at'];
    $img   = $_POST['blog_img'];
  
    $post->addPost($title, $body, $create_at, $img);
  
    header("location: {$_SERVER['HTTP_ORIGIN']}/blog-tech/admin/index.admin.php?status=added");
  
  }




?>