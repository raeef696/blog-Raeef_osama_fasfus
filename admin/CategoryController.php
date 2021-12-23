<?php

include "../inc/autoload.inc.php";
$category = new category();


if(isset($_POST['submit'])) {
    $categorys = $_POST['category'];
    $category ->addcategorys($category);


    header("location: {$_SERVER['HTTP_ORIGIN']}/blog-tech/admin/index.admin.php?status=added");
  
  }




?>