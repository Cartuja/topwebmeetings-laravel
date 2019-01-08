@extends('principal') <!-- Extiende de principal, que contiene el head, menu, footer -->

@section('contenido') <!-- Aquí se va a mostrar el ranking de webs -->
<style>
  #articulo_hover:hover{
    background-color: rgb(250, 245, 206);
  }
</style>
<div id="main" class="with_sidebar right_sidebar">
  <div id="main_inner" class="clearboth blog_style_excerpt">
    <!-- content -->
    <div id="content" class="content_blog post_single" role="main" itemscope itemtype="http://schema.org/Blog">
      <!-- post item -->
      <!--Recorremos webs-->
      
      <p> Cada año, miles de solteros deciden buscar el amor verdadero en una <b>página web de citas</b>. Pero hay tantas opciones disponibles,
        que la tarea de elegir la más adecuada resulta ser muy difícil. Para ayudarte con eso, hemos probado los <b>sitios de citas online</b> más
         importantes del mercado español. En este ranking te contamos cómo funcionan y las características más importantes de cada uno.
         ¡Te deseamos buena suerte y que disfrutes en la búsqueda! </p>
      <?php
        $posicion_web = 0;
        for($i = 0; $i< count($webs);$i++){
          $posicion_web = $posicion_web + 1;
          $id_web = $webs[$i]['IdWeb'];
          $nombre_web = $webs[$i]['NombreWeb'];
      ?>
      <?php if($i == 0){ ?>
      <article class="theme_article instock theme_yellowlight" id="articulo_hover" style="border: 3px solid yellow;">
      <?php } else { ?>
      <article class="theme_article instock" id="articulo_hover">
      <?php } ?>
        <div class="post_thumb image_wrapper no_thumb" style="width: 320px;">
          <div class="sc_blogger_item sc_column_item sc_column_item_1 sc_blogger_item_bordered first">
						<h2 class="sc_blogger_title sc_title entry-title sc_title_bubble sc_title_bubble_top">
							<span class="sc_title_bubble_icon">{{ $posicion_web }}</span>
							</a>
						</h2>
					</div>
          <a href='{{url($nombre_web)}}'>
            <div class="sc_slider sc_slider_flex" style="margin-top:60px;">
              <ul class="slides">
                <li><img style="padding-left: 5px;" alt="{{ $nombre_web }}" src="{{ $webs[$i]['LogoWebs'] }}"></li>
              </ul>
            </div>
          </a>
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
           <br>

           <!-- Read more -->
            <div class="sc_accordion_content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-accordion-accordion_1-panel-1" aria-labelledby="ui-accordion-accordion_1-header-1" role="tabpanel" aria-hidden="false" style="display: block;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            <!-- /Read more -->

           <div class="post_text_area">
            <div class="sc_column_item sc_column_item_4">
              <ul class="sc_list sc_list_style_check">
                <li class="sc_list_item first"><span class="sc_list_icon"></span>{{ $webs[$i]['Caracteristica1'] }}</li>
                <li class="sc_list_item"><span class="sc_list_icon"></span>{{ $webs[$i]['Caracteristica2'] }}</li>
                <li class="sc_list_item sc_list_style_error"><span class="sc_list_icon"></span>{{ $webs[$i]['Caracteristica3'] }}</li>
              </ul>
            </div>
            <a href="{{url($nombre_web)}}" class="more-link"> Leer reseñas web </a>
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
      <h2> Las mejores páginas para ligar online </h2>
      <p>
        Efectivamente, esta web es una especie de ranking en el que hablamos sobre las mejores páginas para ligar en España, aunque muchas de esas páginas de contactos también tienen muchos miembros hispanos de otros países. Hoy en día, existen muchos recursos para ligar en Internet, pero en este sitio nos centramos en las páginas web que te permiten conocer solteros y solteras en tu zona. En cada artículo, explicamos el funcionamiento de una web para ligar, con una descripción de sus funciones, cómo registrarse, cómo buscar gente, de qué herramientas dispone para conocer gente y algunos consejos para ligar más. Las páginas de las que hablamos aquí te permiten registrarte gratuitamente, crear tu perfil, subir fotos tuyas y buscar entre todos sus perfiles. Algunas son totalmente gratis y otras cobran una cantidad por desbloquear funciones adicionales, permitirte contactar con otros miembros o mostrar tu perfil de forma destacada.
      </p>
    </div>
  </div>
</div>
@stop
