<?php
require_once './temp/hedaer.admin.php';
require_once('../inc/autoload.inc.php');


?>






<div class="row my-4 mx-auto" style="margin: 0px auto; width: 60%;">
            <div class="col-lg-12 col-md-8 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                <div class="row mb-3">
                    <div class="col-6">
                    <p class="text-sm">
                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                        <span>جميع المقالات</span>
                    </p>
                    </div>
                    <div class="col-6 my-auto text-start">
                    <div class="dropdown float-start ps-4">
                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3 me-n4" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">عمل</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">عمل آخر</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">شيء آخر هنا</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card-body p-0 pb-2 ">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">عنوان المقالة</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">اسم ناشر المقالة</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">تاريخ النشر</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">التصنيف</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">تعديل</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $post = new Post();
                        $category = new category();
                        if($post->getPost()) {
                            foreach($post->getPost() as $posts) {
                                echo '<tr>';
                                echo '<td>';
                                echo '<div class="d-flex px-2 py-1">';
                                echo '<div class="d-flex flex-column justify-content-center">';
                                echo '<h6 class="mb-0 text-sm">' . $posts['title'] . '</h6>';
                                echo '</div>';
                                echo '</div>';
                                echo '</td>';
                                foreach($post->users() as $users)
                        echo '<td>';
                        echo '<span class="text-xs font-weight-bold">' . $users['username'] . '</span>';
                        echo '</td>';
                        echo '<td class="align-middle text-center text-sm">';
                        echo '<span class="text-xs font-weight-bold">' . $posts['create_at'] . '</span>';
                            echo '</td>';
                            foreach($category->getCategorys() as $categorys)
                        echo '<td class="align-middle">';
                        echo '<div class="progress-wrapper w-75 mx-auto">';
                            echo '<span class="text-xs font-weight-bold">' . $categorys['name_category'] .'</span>';
                                echo '</div>';                           
                        echo '</td>';
                        echo '<td class="align-middle">';
                        echo '<div class="progress-wrapper w-75 mx-auto">';
                            echo '<span class="text-xs font-weight-bold"><a href="">تعديل</a></span>';
                                echo '</div>';                           
                        echo '</td>';
                        echo '<td class="align-middle">';
                        echo '<div class="progress-wrapper w-75 mx-auto">';
                            echo '<span class="text-xs font-weight-bold"><a href="">حذف</a></span>';
                                echo '</div>';                           
                        echo '</td>';
                    echo '</tr>';

                    }
                }
                        ?>
                        
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
<?php
    require_once './temp/footer.admin.php'
?>