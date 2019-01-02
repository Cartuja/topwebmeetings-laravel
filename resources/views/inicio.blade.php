@extends('principal') <!-- Extiende de principal, que contiene el head, menu, footer -->

@section('contenido') <!-- Aquí se va a mostrar el ranking de webs -->
<style>
  #articulo_hover:hover{
    background-color: rgb(236, 230, 179);
  }
</style>
<div id="main" class="with_sidebar right_sidebar">
  <div id="main_inner" class="clearboth blog_style_excerpt">
    <!-- content -->
    <div id="content" class="content_blog post_single" role="main" itemscope itemtype="http://schema.org/Blog">
      <!-- post item -->
      <!--Recorremos webs-->
      <h1> Topwebmeetings </h1>
      <h4> Datos </h4>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
      <?php
        $posicion_web = 0;
        for($i = 0; $i< count($webs);$i++){
          $posicion_web = $posicion_web + 1;
          $id_web = $webs[$i]['IdWeb'];
          $nombre_web = $webs[$i]['NombreWeb'];
      ?>
      <?php if($i == 0){ ?>
      <article class="theme_article instock theme_yellowlight" id="articulo_hover">
      <?php } else { ?>
      <article class="theme_article instock" id="articulo_hover">
      <?php } ?>
        <div class="post_thumb image_wrapper no_thumb" style="width: 320px;">
          <a href='{{url($nombre_web)}}'>
            <div class="sc_slider sc_slider_flex" style="margin-top:30px;">
              <ul class="slides">
                <li><img style="margin-top: 50px;padding:5px;" alt="{{ $nombre_web }}" src="{{ $webs[$i]['LogoWebs'] }}"></li>
              </ul>
            </div>
          </a>
          <span class="post_category theme_accent_bg">{{ $posicion_web }}</span>
        </div>

        <div class="post_content">
          <div class="post_info post_info_top theme_info">
            <span class="post_comments">
              <a href="single-format-standard.html">
                <span class="comments_icon theme_info icon-eye">{{ $webs[$i]['ValoracionTotalWebs'] }}</span>
                <span class="comments_number"></span>
              </a>
            </span>
          </div>
          <div class="title_area">
            <h2 class="post_title"><a href='{{url($nombre_web)}}'class="theme_title">{{ $webs[$i]['NombreWeb'] }}</a></h2>
            <!-- estrellas -->
               <div class="reviews_summary blog_reviews">
              <div class="criteria_summary criteria_row">
                <span class="criteria_stars" title="4.3 from 5">
                  <span class="stars_off"><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span></span>
                  <span class="stars_on" data-review="{{ $webs[$i]['ValoracionTotalWebs'] }}"><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span></span>
                </span>
              </div>
            </div>
            <!-- /estrellas -->
           </div>

          <!-- Info -->
           <div class="post_info post_info_top theme_info">
            <span class="post_cats">
              <a class="cat_link" href="excerpt-style2.html">
                {{ $webs[$i]['Info'] }}
              </a>
            </span>
          </div>
          <!-- /Info -->

           <div class="post_text_area">
            <div class="sc_column_item sc_column_item_4">
              <ul class="sc_list sc_list_style_check">
                <li class="sc_list_item first"><span class="sc_list_icon"></span>{{ $webs[$i]['Caracteristica1'] }}</li>
                <li class="sc_list_item"><span class="sc_list_icon"></span>{{ $webs[$i]['Caracteristica2'] }}</li>
                <li class="sc_list_item sc_list_style_error"><span class="sc_list_icon"></span>{{ $webs[$i]['Caracteristica3'] }}</li>
              </ul>
            </div>
            <a href="{{ $webs[$i]['UrlWeb'] }}" class="more-link"> Visitar web</a>
          </div>

          <!-- Tags -->
           <div class="post_info post_info_bottom theme_info" style="
          border-bottom: 1px solid #00a8dd;margin-top:15px;"></div>

          <span class="post_tags" style="vertical-align: -webkit-baseline-middle;display: -webkit-inline-box;margin-top: 10px;">
            <span class="tags_label">Tags:</span>
              <a class="tag_link" href="#">
                {{ $webs[$i]['Tags'] }}
              </a>
          </span>
          <!-- /Tags -->
       </div>
      </article>
      <?php } ?>
      <!-- /Recogemos webs -->
      <!-- /post item -->
    </div>
  </div>
</div>
@stop
