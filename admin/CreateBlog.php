<?php
require './temp/hedaer.admin.php';
require '../inc/autoload.inc.php';
$category = new category();
?>




<div class="container" style="margin: 0px auto; width: 60%;">
    <form class="form-group" action="create.controler.php" method="POST">
    <div class="mb-3">
        <label for="input0" class="col-sm-2 control-label bring_right left_text">اختيار التصنيف </label>
            <div class="col-sm-10">
                <select name="category_name" id="" class="form-control">
        <?php 
      if($category->getCategorys()) {
      foreach($category->getCategorys() as $categorys) 
         echo  "<option> "   . $categorys['name_category']  .  "</option>";
        //    
        }
            ?>
                </select>
            </div>
    </div>
    <div class="mb-3">
        <label for="input0" class="form-label">عنوان المقالة</label>
        <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="input1" class="form-label">محتوى المقالة</label>
        <textarea name="blog_body" id="" cols="30" rows="10" class="form-control" placeholder="محتوى المقالة"></textarea>
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="form-group">
        <label for="input2" class="col-sm-2 control-label bring_right left_text">تاريخ المقالة</label>
            <div class="col-sm-10">
                <input type="date" name="create_at" class="form-control" id="input2" placeholder="تاريخ المقالة">
            </div>
    </div>
    <div class="form-group">
            <label for="input3" class="col-sm-2 control-label bring_right left_text">الصورة البارزة للمقالة</label>
                <div class="col-sm-10">
                    <input class="form-control"  name="blog_img" type="file" id="input3" id="formFileMultiple" multiple>
                </div>
    </div>

    <div class="form-group">
    <button type="submit" name="submit" class="btn">نشر</button>
    </div>
    </form>
    </div>






<?php
require_once './temp/footer.admin.php';
?>