<?php
require_once('./inc/autoload.inc.php');
require_once('./templates/hedaer.php');
require ('./inc/autoload.inc.php');

$post = new Post();
?>



    <div class="hero-section wf-section">
      
    <div class="hero-content w-container">
      <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="hero-heading">
      أفضل المدونات التقنية التي يمكنك أن تتابعها.
    </div>
      <div style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="hero-subheading">
      عالم التقنية بين يديك
    </div>
      <a href="#Latest-post" style="opacity: 1;" class="button w-button">
    عرض احدث المشاركات
    </a>
    </div>
  </div>
  <!-- <div class="category-section wf-section">
    <div class="w-container">
      <div class="w-dyn-list">
        <div role="list" class="w-clearfix w-dyn-items w-row">
          <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2">
            <a href="/categories/nature" class="category-link">Nature</a>
          </div>
          <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2">
            <a href="/categories/photography" class="category-link">Photography</a>
          </div>
          <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2">
            <a href="/categories/relaxation" class="category-link">Relaxation</a>
          </div>
          <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2">
            <a href="/categories/vacation" class="category-link">Vacation</a>
          </div>
          <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2">
            <a href="/categories/travel" class="category-link">Travel</a>
          </div>
          <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2">
            <a href="/categories/adventure" class="category-link">Adventure</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div id="posts" class="main-section bottom-padding wf-section">
    <div id="Latest-post" class="w-container">
      <div class="section-heading">
        <h2 class="section-title">المشاركات المميزة</h2>
        <div class="med-divider">
        </div>
      </div>
      <?php 

      foreach($post->getPost() as $posts){
     echo  '<div class="w-dyn-list " >';
     echo   '<div role="list" class="w-clearfix w-dyn-items w-row">';
         echo '<div role="listitem" class="featuredthumbnail w-dyn-item w-col w-col-6">';
            echo '<a href="/blog/this-is-my-new-post" data-w-id="3c1b0055-dd47-cc77-5812-26c30ac7c948" class="featured-wrapper w-inline-block">
              <div>';
                echo "<div class='category-tag-2'>التصنيف</div>";
                echo '<div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7fb465de834a_photo-1443926818681-717d074a57af.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="featured-image">
              </div>';
            echo '</div>';
            echo '<div class="featured-text">';
              echo '<div class=" " style="color: #FFF;">';
                echo '<h1>' . $posts['title'] . '</h1>';
             echo '</div>';
              echo '<div class=""  style="color: #878685;">نص تعريفي عن المقالة</div>';
              echo '<div class="featured-details">';
                echo '<div class="w-clearfix">';
                  echo '<img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7ff9f8de8335_128-14.jpg" alt="" class="author-img">';
                  echo '<div class="author-title lite">Mat Vogels</div>';
                  echo '<div class="thumbnail-date lite">September 25, 2015</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</a>';
        echo '</div>';
      }

?>
        <div role="listitem" class="featuredthumbnail w-dyn-item w-col w-col-6">
          <a href="/blog/from-top-down" data-w-id="3c1b0055-dd47-cc77-5812-26c30ac7c948" class="featured-wrapper w-inline-block">
            <div>
              <div style="background-color:#dd783f" class="category-tag-2">تصنيف</div>
              <div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f0439de8336_photo-1443304895043-ef30921332c5.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="featured-image">
            </div>
          </div>
          <div class="featured-text">
            <div class="" style="color: #FFF;">
            <h1>
            عنوان المقالة
            </h1>
          </div>
            <div class="" style="color: #878685;">نص تعريفي عن المقالة</div>
            <div class="featured-details">
              <div class="w-clearfix">
                <img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f7389de832c_128-34.jpg" alt="" class="author-img">
                <div class="author-title lite">William Wong</div>
                <div class="thumbnail-date lite">September 25, 2015</div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="w-container">
  <div class="section-heading">
    <h2 class="section-title">Most Recent</h2>
    <div class="med-divider"></div>
  </div>
  <div class="w-dyn-list">
    <div role="list" class="w-clearfix w-dyn-items w-row">
      <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
        <a href="/blog/still-standing-tall" data-w-id="46150442-4efa-9d36-3a4c-20d527e7a6bc" class="thumbnail-wrapper w-inline-block">
          <div class="image-wrapper">
            <div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f8ce9de833d_photo-1433854304641-67729357fe18.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="thumbnail-image">
          </div>
          <div style="background-color:#e6c728" class="category-tag">Nature</div>
        </div>
          <div class="thumbnail-text">
            <div class="blog-title">Still Standing Tall</div>
          <div class="preview-text">Life begins at the end of your comfort zone.</div>
        </div>
          <div class="thumb-details w-clearfix">
            <img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f7389de832c_128-34.jpg" alt="" class="author-img">
            <div class="author-title">William Wong</div>
            <div class="thumbnail-date">9/25/2015</div>
          </div>
          </a>
          </div>
            <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
            <a href="/blog/sunny-side-up" data-w-id="46150442-4efa-9d36-3a4c-20d527e7a6bc" class="thumbnail-wrapper w-inline-block">
            <div class="image-wrapper">
            <div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f7caade8338_photo-1431329842981-433c8635c2b9.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="thumbnail-image">
          </div>
            <div style="background-color:#a872b7" class="category-tag">Photography</div>
          </div>
            <div class="thumbnail-text">
              <div class="blog-title">Sunny Side Up</div>
            <div class="preview-text">No place is ever as bad as they tell you it’s going to be.</div>
          </div>
            <div class="thumb-details w-clearfix">
              <img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7ff9f8de8335_128-14.jpg" alt="" class="author-img">
            <div class="author-title">Mat Vogels</div>
            <div class="thumbnail-date">9/25/2015</div>
          </div>
          </a>
          </div>
            <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
              <a href="/blog/water-falls" data-w-id="46150442-4efa-9d36-3a4c-20d527e7a6bc" class="thumbnail-wrapper w-inline-block">
                <div class="image-wrapper">
                <div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f1017de8349_photo-1433155327100-12aac6a14ff1.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="thumbnail-image">
              </div>
                <div style="background-color:#4aaec2" class="category-tag">Relaxation</div>
              </div>
                <div class="thumbnail-text">
                  <div class="blog-title">Water Falls</div>
                  <div class="preview-text">We travel not to escape life, but for life not to escape us.</div
                  ></div>
                  <div class="thumb-details w-clearfix">
                    <img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7ff9f8de8335_128-14.jpg" alt="" class="author-img">
                  <div class="author-title">Mat Vogels</div>
                  <div class="thumbnail-date">9/25/2015</div>
                </div>
                </a>
                </div>
                  <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
                    <a href="/blog/through-the-mist" data-w-id="46150442-4efa-9d36-3a4c-20d527e7a6bc" class="thumbnail-wrapper w-inline-block">
                    <div class="image-wrapper">
                    <div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f5e3ede8340_photo-1441906363162-903afd0d3d52.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="thumbnail-image">
                </div>
                  <div style="background-color:#d25f7c" class="category-tag">Vacation</div>
                </div>
                  <div class="thumbnail-text">
                    <div class="blog-title">Through the Mist</div>
                  <div class="preview-text">Travel makes you see what a tiny place you occupy in the world.</div>
                </div>
                  <div class="thumb-details w-clearfix">
                    <img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f7389de832c_128-34.jpg" alt="" class="author-img">
                    <div class="author-title">William Wong</div>
                    <div class="thumbnail-date">9/25/2015</div>
                  </div>
                  </a>
                  </div>
                  <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
                    <a href="/blog/awaken-early" data-w-id="46150442-4efa-9d36-3a4c-20d527e7a6bc" class="thumbnail-wrapper w-inline-block">
                      <div class="image-wrapper">
                      <div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f9857de8342_photo-1442347504183-965bd14449ac.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="thumbnail-image">
                    </div>
                    <div style="background-color:#d25f7c" class="category-tag">Vacation</div>
                  </div>
                  <div class="thumbnail-text">
                    <div class="blog-title">Awaken Early</div>
                    <div class="preview-text">Not all those who wander are lost.</div>
                  </div>
                  <div class="thumb-details w-clearfix">
                    <img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7ff9f8de8335_128-14.jpg" alt="" class="author-img">
                    <div class="author-title">Mat Vogels</div>
                    <div class="thumbnail-date">9/25/2015</div
                    ></div>
                  </a>
                </div>
                <div role="listitem" class="blog-thumbnail w-dyn-item w-col w-col-4">
                  <a href="/blog/try-it-always" data-w-id="46150442-4efa-9d36-3a4c-20d527e7a6bc" class="thumbnail-wrapper w-inline-block">
                    <div class="image-wrapper">
                      <div style="background-image: url(&quot;https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7f0ea0de8344_photo-1433878455169-4698e60005b1.jpg&quot;); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="thumbnail-image">
                    </div>
                    <div style="background-color:#49ae5c" class="category-tag">Travel</div>
                  </div>
                  <div class="thumbnail-text">
                    <div class="blog-title">Try it Always</div>
                    <div class="preview-text">The world is a book, and those who do not travel read only one page.</div>
                  </div>
                  <div class="thumb-details w-clearfix">
                    <img src="https://assets.website-files.com/5e4b1929fccc7f96f6de825d/5e4b1929fccc7ff9f8de8335_128-14.jpg" alt="" class="author-img">
                    <div class="author-title">Mat Vogels</div>
                    <div class="thumbnail-date">9/25/2015</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-section dark wf-section">
        <div class="w-container">
          <div class="section-heading">
            <h2 class="white">Stay in Touch</h2>
            <div class="med-divider"></div>
          </div>
          <div class="form-wrapper w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="w-clearfix">
              <input type="email" class="field w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email address" id="email" required="">
              <input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
            </form>
            <div class="success-message w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form</p>
            </div>
          </div>
        </div>

      </div>
    </div>


<?php

require_once './templates/footer.php';

?>
