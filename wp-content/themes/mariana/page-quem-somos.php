
<?php
	include "layout/header.php";
?>

	<div id="topo_quem_somos" class="row-fluid">
		<section class="container-fluid apresentacao">
			<div class="quem_faz">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="foto">
						<img src="http://www.alienado.net/fotos/2013/05/Rosto-redondo.jpg" width="50" height="50" class="img-responsive">
					</div>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<h1>Quem faz?</h1>
					<p>Mariana Timoteo</p>
					<p><strong>Jornalista/Fotógrafa</strong></p>
					<p class="resumo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
				</div>
			</div>
		</section>
	</div>

	<div class="row-fluid">
		<section class="container-fluid">
			<div class="corpo">
				<?php 
					$page = get_page_by_title( 'Quem Somos' );
					
					if( get_field('titulo') ){ ?>
						 <h1><?php the_field('titulo'); ?></h1>

				<?php } ?>
					<div class="separador">
						<hr class="col-xs-4 col-sm-4 col-md-4 colunas">
						<p class="col-xs-4 col-sm-4 col-md-4 colunas"><img src="<?php bloginfo('template_url'); ?>/img/separador_sobre.png" class="img-responsive"> </p>
						<hr class="col-xs-4 col-sm-4 col-md-4 colunas">
					</div>
				<?php

					if (has_excerpt() ) { ?>
						<div class="resumo" ><?php the_excerpt(); ?></div>

				<?php } 

					echo  $page->post_content;
				?>
			</div>
		</section>
	</div>

<?php
	include "layout/footer.php";
?>
