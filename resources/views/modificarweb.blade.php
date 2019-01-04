@extends('principal') <!-- Extiende de principal, que contiene el head, menu, footer -->

@section('contenido')
<?php
$posicionWeb = 1;
    if(isset($_SESSION['session_email']))
    {
      $i = 0;
      $id_web = $webs[$i]['IdWeb'];
      $nombre_web = $webs[$i]['NombreWeb'];
      $descripcion_web = $webs[$i]['DescripcionWeb'];
      $imagen_web = $webs[$i]['LogoWebs'];
      $url_web = $webs[$i]['UrlWeb'];
      $caracteristica_1_web = $webs[$i]['Caracteristica1'];
      $caracteristica_2_web = $webs[$i]['Caracteristica2'];
      $caracteristica_3_web = $webs[$i]['Caracteristica3'];
      $tags_web = $webs[$i]['Tags'];
?>
<div id="main" class="with_sidebar right_sidebar">
  <div id="main_inner" class="clearboth blog_style_excerpt">
    <!-- content -->
    <div id="content" class="content_blog post_single" role="main" itemscope itemtype="http://schema.org/Blog">
      <div class="theme_article instock theme_regular">
        <div id="nav_pages" class="theme_paginaton">
          <ul>
              <li class="pager_pages"><span></span></li>
              <li style="display:hidden" id="li_previo" class=""> <a id="previo" title="Anterior" onclick="return Previo()"> Previous </a></li>
              <li id="li_id_web" class="pager_current"><span title=""> <?= $posicionWeb ?> </span></li>
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <input type="hidden" id="posicion_web" name="posicion_web" value="<?= $posicionWeb ?>">
              <li style="display:hidden" id="li_next" class=""><a id="next" title="Siguiente" onclick="return Next()">Next</a></li>
          </ul>
        </div>
      </div>

      <article class="theme_article instock theme_regular">
        <h1 id="titulo_web" style='margin-left:50px;'><?= $nombre_web ?> </h1>
        <div style="width: 80%; margin:auto;">
        <form class="sc_contact_form">
            <input type="hidden" id="id_web" name="id_web" value="<?= $id_web ?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="field">
              <label for="nombre_web" style="margin-right: 2%;"> Nombre: </label>
              <input type="text" id="nombre_web" name="nombre_web" placeholder="Nombre" value="<?= $nombre_web ?>">
              <div id="div_nombre_web"></div>
            </div>
            <div class="field">
              <label for="descripcion_web" style="margin-right: 2%;"> Descripcion: </label>
              <textarea id="descripcion_web" name="descripcion_web" placeholder="Descripcion"><?= $descripcion_web ?></textarea>
              <div id="div_descripcion_web"></div>
            </div>
            <div class="field">
              <label for="logo_web" style="margin-right: 2%;"> Logo: </label>
              <input type="hidden" id="imagen" name="imagen" value="<?= $imagen_web ?>">
              <input type="file" id="logo_web" name="logo_web" placeholder="Imagen de la web" value="<?= $imagen_web ?>">
              <div id="div_logo_web"></div>
            </div>
            <div class="field">
              <label for="url_web" style="margin-right: 2%;"> Url: </label>
              <input type="text" id="url_web" name="url_web" placeholder="https://example.com" value="<?= $url_web ?>">
              <div id="div_url_web"></div>
            </div>
            <div class="field">
              <label for="caracteristica_1_web" style="margin-right: 2%;"> Caracteristica 1: </label>
              <input type="text" id="caracteristica_1_web" name="caracteristica_1_web" placeholder="Example: Registros gratis" value="<?= $caracteristica_1_web ?>">
              <div id="div_caracteristica_1"></div>
            </div>
            <div class="field">
              <label for="caracteristica_2_web" style="margin-right: 2%;"> Caracteristica 2: </label>
              <input type="text" id="caracteristica_2_web" name="caracteristica_2_web" placeholder="Example: Perfiles reales" value="<?= $caracteristica_2_web ?>">
              <div id="div_caracteristica_2"></div>
            </div>
            <div class="field">
              <label for="caracteristica_3_web" style="margin-right: 2%;"> Caracteristica 3: </label>
              <input type="text" id="caracteristica_3_web" name="caracteristica_3_web" placeholder="Example: No es gratuito" value="<?= $caracteristica_3_web ?>">
              <div id="div_caracteristica_3"></div>
            </div>
            <div class="field">
              <label for="tags" style="margin-right: 2%;"> Tags: </label>
              <input type="text" id="tags" name="tags" value="<?= $tags_web ?>">
              <div id="div_tags_web"></div>
            </div>
            <button style="float:right; margin-left:5%;" onclick="return guardar()">Grabar web</span></button>
            <button style="float:right" onclick="return eliminar()">Eliminar web</span></button>
        </form>
        </div>
      </article>
      <div id="respuesta_añadir_web"></div>
      <div id="respuesta_eliminar_web"></div>
    </div>
  </div>
</div>
<?php }
      else {
        echo "ERROR";
      }
?>
@stop
