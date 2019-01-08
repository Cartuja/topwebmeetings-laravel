@extends('principal')

@section('contenido')
<?php
if(isset($_SESSION['session_email'])){
	$email_session =  $_SESSION['session_email'];
} else{
	$email_session = '';
}
/* Recogemos datos de las webs */
for ($i=0; $i < count($web); $i++) {
	 $id_web = $web[$i]['IdWeb'];
   $nombre_web = $web[$i]['NombreWeb'];
   $logo_web = $web[$i]['LogoWebs'];
   $valoracion_total = $web[$i]['ValoracionTotalWebs'];
   $descripcion_web = $web[$i]['DescripcionWeb'];
}
/* /Recogemos datos de las webs */

/* Recoger usuarios */
	$id_usuario = "";
	for ($i=0; $i < count($usuarios) ; $i++) {
		if($email_session == $usuarios[$i]['EmailUsuario']){
			$nombre = $usuarios[$i]['NombreUsuario'];
		}
	}
/* /Recoger usuarios */
?>
<div id="main" class="with_sidebar right_sidebar">
		<div id="main_inner" class="clearboth blog_style_fullpost">
			<!-- content -->
			<div id="content" class="content_blog post_single" role="main">
			  <div class="itemscope" itemscope itemtype="http:://schema.org/Review">
					<article class="theme_article post_format_standard instock">
						<div class="post_thumb image_wrapper no_thumb heavy_inited">
							<img alt="<?= $nombre_web ?>" src="{{ $logo_web }}" itemprop="image">
						</div>
						<!-- Post content -->
						<div class="post_content">
							<!-- Post info -->
							<div class="post_info post_info_top theme_info">
			          <?php date_default_timezone_set('UTC'); ?>
			          <span class="post_date theme_text date updated" itemprop="datePublished" content=""><?php echo date('l jS \of F Y h:i:s A'); ?> </span>
							</div>
							<!-- /Post info -->
							<div class="post_reviews theme_regular">
								</br>
								<ul class="tabs theme_field">
									<li><a href="#reviews_author" class="theme_button">Valoracion</a></li>
								</ul>
								<!-- Review author -->
								<div id="reviews_author" class="reviews_tab reviews_author">
									<div class="reviews_data">
										<div class="criteria_row theme_field">
											<span class="criteria_label theme_strong">Diseño web</span>
											<form method="POST" name="form_estrellas1" id="form_estrellas1" action=''>
			                  <p class="clasificar">
			                    <input type="hidden" name="idweb" value="<?= $id_web ?>">
													<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
			                    <input id="radio1a" type="radio" name="valoracion_votacion" value="5" onclick="return Votar('diseno')" >
			                    <label for="radio1a">★</label>
			                    <input id="radio2a" type="radio" name="valoracion_votacion" value="4" onclick="return Votar('diseno')" >
			                    <label for="radio2a">★</label>
			                    <input id="radio3a" type="radio" name="valoracion_votacion" value="3" onclick="return Votar('diseno')" >
			                    <label for="radio3a">★</label>
			                    <input id="radio4a" type="radio" name="valoracion_votacion" value="2" onclick="return Votar('diseno')" >
			                    <label for="radio4a">★</label>
			                    <input id="radio5a" type="radio" name="valoracion_votacion" value="1" onclick="return Votar('diseno')" >
			                    <label for="radio5a">★</label>
			                  </p>
										</div>
										<div class="criteria_row theme_field">
											<span class="criteria_label theme_strong">Registro web</span>
												<p class="clasificar">
													<input type="hidden" name="idweb" value="<?= $id_web ?>">
													<input id="radio1b" type="radio" name="valoracion_votacion" value="5" onclick="return Votar('registro')">
													<label for="radio1b">★</label>
													<input id="radio2b" type="radio" name="valoracion_votacion" value="4" onclick="return Votar('registro')">
													<label for="radio2b">★</label>
													<input id="radio3b" type="radio" name="valoracion_votacion" value="3" onclick="return Votar('registro')">
													<label for="radio3b">★</label>
													<input id="radio4b" type="radio" name="valoracion_votacion" value="2" onclick="return Votar('registro')">
													<label for="radio4b">★</label>
													<input id="radio5b" type="radio" name="valoracion_votacion" value="1" onclick="return Votar('registro')">
													<label for="radio5b">★</label>
												</p>
										</div>
										<div class="criteria_row theme_field">
											<span class="criteria_label theme_strong">Perfil web</span>
												<p class="clasificar">
													<input type="hidden" name="idweb" value="<?= $id_web ?>">
													<input id="radio1c" type="radio" name="valoracion_votacion" value="5" onclick="return Votar('perfil')">
													<label for="radio1c">★</label>
													<input id="radio2c" type="radio" name="valoracion_votacion" value="4" onclick="return Votar('perfil')">
													<label for="radio2c">★</label>
													<input id="radio3c" type="radio" name="valoracion_votacion" value="3" onclick="return Votar('perfil')">
													<label for="radio3c">★</label>
													<input id="radio4c" type="radio" name="valoracion_votacion" value="2" onclick="return Votar('perfil')">
													<label for="radio4c">★</label>
													<input id="radio5c" type="radio" name="valoracion_votacion" value="1" onclick="return Votar('perfil')">
													<label for="radio5c">★</label>
												</p>
										</div>
										<div class="criteria_row theme_field">
											<span class="criteria_label theme_strong">Características web</span>
												<p class="clasificar">
													<input type="hidden" name="idweb" value="<?= $id_web ?>">
													<input id="radio1d" type="radio" name="valoracion_votacion" value="5" onclick="return Votar('caracteristicas')">
													<label for="radio1d">★</label>
													<input id="radio2d" type="radio" name="valoracion_votacion" value="4" onclick="return Votar('caracteristicas')">
													<label for="radio2d">★</label>
													<input id="radio3d" type="radio" name="valoracion_votacion" value="3" onclick="return Votar('caracteristicas')">
													<label for="radio3d">★</label>
													<input id="radio4d" type="radio" name="valoracion_votacion" value="2" onclick="return Votar('caracteristicas')">
													<label for="radio4d">★</label>
													<input id="radio5d" type="radio" name="valoracion_votacion" value="1" onclick="return Votar('caracteristicas')">
													<label for="radio5d">★</label>
												</p>
										</div>
										<div class="criteria_row theme_field">
												<span class="criteria_label theme_strong">Atención web</span>
												<p class="clasificar">
													<input type="hidden" name="idweb" value="<?= $id_web ?>">
													<input id="radio1e" type="radio" name="valoracion_votacion" value="5" onclick="return Votar('atencion')">
													<label for="radio1e">★</label>
													<input id="radio2e" type="radio" name="valoracion_votacion" value="4" onclick="return Votar('atencion')">
													<label for="radio2e">★</label>
													<input id="radio3e" type="radio" name="valoracion_votacion" value="3" onclick="return Votar('atencion')">
													<label for="radio3e">★</label>
													<input id="radio4e" type="radio" name="valoracion_votacion" value="2" onclick="return Votar('atencion')">
													<label for="radio4e">★</label>
													<input id="radio5e" type="radio" name="valoracion_votacion" value="1" onclick="return Votar('atencion')">
													<label for="radio5e">★</label>
												</p>
										</div>
									</div>
									<div class="reviews_summary blog_reviews">
										<div class="criteria_summary criteria_row theme_field">
											<span class="criteria_label theme_strong"></span>
											<span itemscope itemprop="reviewRating"><meta itemprop="worstRating" content="0"><meta itemprop="bestRating" content="5"><meta itemprop="ratingValue" content="4.3"><span class="criteria_stars" title="4.3 from 5">
											<span class="stars_off"><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span></span>
											<span class="stars_on" data-review="<?= $valoracion_total?>"><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span></span>
										</span></span>
											<!-- mostrar media total -->
											<span class="criteria_mark theme_accent_bg"><?= $valoracion_total ?> </span>
											<span class="criteria_word theme_accent_bg"> Total </span>
										</form> <!-- /Fin formulario estrellas -->
											<!-- /mostrar media total -->
										</div>
									</div>
								</div>
								<div id="resultado_votar"></div>
								<!-- /Review author -->

								<!-- /Review user -->
							</div>
							<div class="title_area">
								<h1 itemprop="itemReviewed" class="post_title theme_title entry-title"><?= $nombre_web; ?></h1>
							</div>
							<div itemprop="reviewBody" class="post_text_area">
								<div id="lipsum">
									{!! $descripcion_web !!}
			            <!-- <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p> -->
								</div>
							</div>
						</div>
						<!-- #Post content -->
					</article>
					<!-- Recoger comentarios usuarios -->
					<div id="comments" class="post_comments theme_blue">
						<div class="post_comments_tree theme_article">
							<div class="subtitle_area">
								<h3 class="post_comments_title theme_subtitle"><?= count($comentarios) ?> comentarios</h3>
							</div>
							<ol class="comment-list">
								<?php
									for ($i=0; $i < count($comentarios) ; $i++) {
										$id_comentario = $comentarios[$i]['IdComentario'];
										$usuario = $comentarios[$i]['Usuario'];
										$texto_comentario = $comentarios[$i]['TextoComentario'];
										$fecha_comentario = $comentarios[$i]['FechaComentario'];
										$email = $comentarios[$i]['email'];
								?>
								<li>
									<div class="comment_author_avatar">
										 <img alt="" src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" />
									</div>
									<h6 class="comment_title theme_subtitle">
										{{ $usuario }} <span class="comment_date theme_info"> {{ $fecha_comentario }} </span>
									</h6>
										<!-- Solo aparece este boton cuando el usuario esta con la session -->
							<?php if($email_session)
										{
											if($email_session == $email)
											{
												?>
												<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
												<input type="hidden" name="id_comentario" value="<?= $id_comentario ?>">
												<button name="eliminarComentario" style="float:right;" onclick="return deletComent()">Eliminar</button>
							<?php
										}
									} ?>
										<div class="comment_content">{{ $texto_comentario }}</div>
			        	</li>
								<?php } ?>
									<div id="resultado_eliminar_comentario"></div>
			        </ol>
						</div>
						<div id="resultado_eliminar"></div>
						<!-- #comments -->
						<div class="post_comments_form theme_article">
							<div id="respond" class="comment-respond">
								<h3 id="reply-title">Introduce un comentario </h3>
								<form action="" method="POST" name="form_comentario" id="commentform">
									<input type="hidden" name="idWeb" value="<?= $id_web ?>">
									<input type="hidden" name="_token" value="<?= csrf_token() ?>">
									<p class="comment-form-author">
										<label for="author" class="required">Name<span class="required"> (required)</span></label>
										<input id="author" name="author" type="text" value="<?php if($email_session) { echo $nombre; } ?>" size="30" aria-required='true' <?php if($email_session) { ?> readonly <?php } ?> />
									</p>
									<p class="comment-form-email">
										<input type="hidden" name="idUsuario" value="">
										<label for="email" class="required">Email<span class="required"> (required)</span></label>
										<input id="email" name="email" type="text" value="<?= $email_session ?>" size="30" aria-required='true' <?php if($email_session) { ?> readonly <?php } ?>/>
									</p>
									<p class="comment-form-comment">
										<label for="comment" class="required">Your Message<span class="required"> (required)</span></label>
										<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
									</p>
									<p class="form-submit">
										<button name="insertComent" onclick="return addComent()"> Submit </button>
									</p>
								</form>
							</div><!-- #respond -->
						</div>
					</div><!-- #comments form -->
					<div id="resultado_añadir_comentario"></div>
					<!-- /Recoger comentarios usuarios -->
				</div>
			</div>
		</div>
	</div>

@stop
