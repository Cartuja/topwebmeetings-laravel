@extends('principal') <!-- Extiende de principal, que contiene el head, menu, footer -->

@section('contenido')
<?php
    if(isset($_SESSION['session_email']))
    {
      $id_web = $webs[0]['IdWeb'];
      $nombre_web = $webs[0]['NombreWeb'];
      $descripcion_web = $webs[0]['DescripcionWeb'];
      $imagen_web = $webs[0]['LogoWebs'];
      $url_web = $webs[0]['UrlWeb'];
      $caracteristica_1_web = $webs[0]['Caracteristica1'];
      $caracteristica_2_web = $webs[0]['Caracteristica2'];
      $caracteristica_3_web = $webs[0]['Caracteristica3'];
      $tags_web = $webs[0]['Tags'];
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
              <li id="li_id_web" class="pager_current"><span title=""> <?= $id_web ?> </span></li>
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <input type="hidden" id="id_web" name="id_web" value="<?= $id_web; ?>">
              <li style="display:hidden" id="li_next" class=""><a id="next" title="Siguiente" onclick="return Next()">Next</a></li>
          </ul>
        </div>
      </div>
      <article class="theme_article instock theme_regular">
        <div style="width: 80%; margin:auto;">
        <form action="" method="" class="sc_contact_form">
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
              <input type="text" id="imagen" name="imagen" value="<?= $imagen_web ?>">
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
            <button style="float:right" onclick="return guardar()">Grabar web</span></button>
            <div id="resultado_insertar_web"></div>
        </form>
        </div>
      </article>
    </div>
  </div>
</div>
<?php }
      else {
        echo "ERROR";
      }
?>
@stop
