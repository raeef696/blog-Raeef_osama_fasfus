<?php
require './temp/hedaer.admin.php';
require '../inc/autoload.inc.php';
?>




<div class="container" style="margin: 0px auto; width: 60%;">
    <form class="form-group" action="CategoryController.php" method="POST">
        <div class="mb-3">
            <label for="input0" class="form-label">اسم التصنيف</label>
            <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="form-group">
            <div class="col-sm-12 left_text">
                <button type="submit" name="submit" class="btn btn-primary px-4">إضافة تصنيف جديد</button>
                <button type="reset" class="btn btn-default">إفراخ الحقل</button>
            </div>
        </div>
    </form>

</div>



<?php
require_once './temp/footer.admin.php';
?>