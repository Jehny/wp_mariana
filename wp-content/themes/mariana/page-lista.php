<?php
	include "layout/header.php";
?>
<div class="bg_body">
	<div class="img_topo">
		<img src="<?php bloginfo('template_url'); ?>/img/bg_listagem.png" class="img-responsive">
	</div>

	<div class="row-fluid">
		<section class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-1">
				<?php $i = 0; ?>
				<?php if (have_posts()) {
						query_posts('orderby=DESC' );
						 while (have_posts()) {
						 	the_post();  
							 $i++; 
				?>
						<div class="post">
							<div class="titulo row-fluid">
								<div class="numero"><?php echo $i; ?></div>
								<div class="nome">
									<h1> <?php the_title(); ?> </h1>
									<p>Posted by: <?php the_author(); ?> - <?php the_time('d/m/Y'); ?></p>
								</div>
							</div>
							<div class="corpo">
								<?php 
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('full'); 
									}
								?>
								<p class="resumo">
									<?php if (has_excerpt() ) { ?>
											<div class="resumo" ><?php the_excerpt(); ?></div>
									<?php } ?>
								</p>
							</div>

							<div class="menu">
								
							</div>
							<div class="div_buttom">
								<a href="<?php echo esc_url( get_permalink()); ?>" class="btn btn-mariana">Leia mais</a>
							</div>
						</div>
				<?php }
						wp_reset_query();
					} 
				?>
			</div>
			<div id="listagem" class="col-xs-12 col-sm-12 col-md-4">
				<div class="busca">
					<form action="" method="POST">
						<input type="text" placeholder="Buscar...">
						<button type="submit" name="busca"><img src="<?php bloginfo('template_url'); ?>/img/lupa.png"></button>
					</form>
				</div>
				<div class="posts_anteriores">
					<h3><img src="<?php bloginfo('template_url'); ?>/img/ico_post_anteriores.png">Posts anteriores</h3>
					<div class="item">Post de Abril de 2015</div>
					<div class="item">Post de Março de 2015</div>
					<div class="item">Post de Fevereiro de 2015</div>
				</div>
			</div>

		</section>
		
	</div>
</div>

<?php
	include "layout/footer.php";
?>