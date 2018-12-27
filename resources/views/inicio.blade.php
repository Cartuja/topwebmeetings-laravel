@extends('principal') <!-- Extiene de principal, que contiene el head, menu, footer -->

@section('contenido') <!-- Aquí se va a mostrar el ranking de webs -->
  <!-- post item -->
  <article class="theme_article instock">
    <div class="post_thumb image_wrapper no_thumb" style="width: 320px;">
      <a href='web.php?id='>
        <div class="sc_slider sc_slider_flex">
          <ul class="slides">
            <li><img style="margin-top: 50px;padding:5px;" alt="" src=""></li>
          </ul>
        </div>
      </a>
      <span class="post_format theme_accent_bg icon-camera"></span>
      <span class="post_category theme_accent_bg"></span>
    </div>

    <div class="post_content">
      <div class="post_info post_info_top theme_info">
        <span class="post_comments">
          <a href="single-format-standard.html">
            <span class="comments_icon theme_info icon-eye"></span>
            <span class="comments_number"></span>
          </a>
        </span>
      </div>
      <div class="title_area">
        <h2 class="post_title"><a href='web.php?id='class="theme_title"></a></h2>
        <!-- estrellas -->
           <div class="reviews_summary blog_reviews">
          <div class="criteria_summary criteria_row">
            <span class="criteria_stars" title="4.3 from 5">
              <span class="stars_off"><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span></span>
              <span class="stars_on" data-review=""><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span></span>
            </span>
          </div>
        </div>
        <!-- /estrellas -->
         </div>

      <!-- Info -->
         <div class="post_info post_info_top theme_info">
        <span class="post_cats">
          <a class="cat_link" href="excerpt-style2.html">
          </a>
        </span>
      </div>
      <!-- /Info -->

         <div class="post_text_area">
        <div class="sc_column_item sc_column_item_4">
          <ul class="sc_list sc_list_style_check">
            <li class="sc_list_item first"><span class="sc_list_icon"></span></li>
            <li class="sc_list_item"><span class="sc_list_icon"></span></li>
            <li class="sc_list_item sc_list_style_error"><span class="sc_list_icon"></span></li>
          </ul>
        </div>
        <a href="" class="more-link"> Visitar web</a>
      </div>

      <!-- Tags -->

         <div class="post_info post_info_bottom theme_info" style="
      border-bottom: 1px solid #00a8dd;margin-top:15px;"></div>

      <span class="post_tags" style="vertical-align: -webkit-baseline-middle;display: -webkit-inline-box;margin-top: 10px;">
        <span class="tags_label">Tags:</span>
          <a class="tag_link" href="#">
          </a>
      </span>
      <!-- /Tags -->
       </div>
  </article>
  <!-- /post item -->
@stop
