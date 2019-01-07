@extends('principal')

@section('contenido')
<div id="main_inner" class="clearboth blog_style_excerpt">
<div class="itemscope" itemscope itemtype="https://schema.org/Article">
	<article class="theme_article post_format_standard instock theme_blue">
		<div class="post_content">
			<div itemprop="articleBody" class="post_text_area">
				<div class="sc_blogger style_image_small sc_columns sc_columns_count_4">
					<!-- puzzle item -->
					<?php
						for ($i=0; $i < count($webs) ; $i++) {
							$id = $webs[$i]['IdWeb'];
							$nombre_web = $webs[$i]['NombreWeb'];
              $valoracion_total = $webs[$i]['ValoracionTotalWebs'];
							$descripcion_web = $webs[$i]['DescripcionWeb'];
							$imagen_web = $webs[$i]['LogoWebs'];
							$tags_web = $webs[$i]['Tags'];
					?>
					<div style="padding:4px;margin:2px;margin-bottom:15px;" class="sc_column_item sc_column_item_<?=$i ?>">
					  <div class="title_area">
					    <h4 style="margin-left:10px;" class="sc_blogger_title sc_title entry-title">
					      <a href="<?= $nombre_web ?>"><?= $nombre_web ?></a>
					    </h4>
							<div style="margin:10px;" class="reviews_summary blog_reviews">
								<div class="criteria_summary criteria_row">
									<span class="criteria_stars" title="4.3 from 5">
										<span class="stars_off"><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span><span class="theme_stars"></span></span>
										<span class="stars_on" data-review="<?= $valoracion_total ?>"><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span><span class="theme_stars theme_stars_on"></span></span>
									</span>
								</div>
							</div>
					  </div>
					  <div style="margin-left:10px;" class="post_wrapper">
					    <div class="post_info theme_info"><a href="#!"><?= $tags_web ?></a></span>
					      <span class="post_comments">
					        <a href="#!">
					          <span class="comments_icon theme_info icon-eye"></span><span class="comments_number"> <?= $valoracion_total ?></span>
					        </a>
					      </span>
					    </div>
					    <div class="sc_blogger_image image_wrapper">
					      <a href='web.php?id=<?= $id ?>'><img alt="<?= $nombre_web ?>" src="<?= $imagen_web ?>"></a>
					    </div>
					    <div class="sc_blogger_content"><p>"Cada día, miles de solteros se unen a Meetic. Tú también puedes descubrir nuevas formas de conocer gente registrándote ahora en la aplicación más famosa para buscar pareja en España."</p></div>
					  </div>
					</div>
					<?php } ?>
					<!-- /puzzle item -->
				</div>
			</div>
		</div>

	</article>
</div>
</div>
@stop
