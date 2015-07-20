<?php
	include "layout/header.php";
?>
<div class="bg_body">
	<div class="img_topo">
		<img src="<?php bloginfo('template_url'); ?>/img/bg_listagem.png" class="img-responsive">
	</div>

	<div class="row-fluid">
		<section class="container-fluid">
			<div class="col-md-7 col-md-offset-1">
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
								<a href="" class="btn btn-mariana">Leia mais</a>
							</div>
						</div>
				<?php }
						wp_reset_query();
					} 
				?>
<!-- 
				<div class="post">
					<div class="titulo row-fluid">
						<div class="numero">02</div>
						<div class="nome">
							<h1>Premeiro post Mariana.etc vai ser um Sucesso!</h1>
							<p>Posted by: Mariana.etc - 20/03/2015</p>
						</div>
					</div>
					<div class="corpo">
						<img src="<?php bloginfo('template_url'); ?>/img/img_post_list.png" class="img-responsive">
						<p class="resumo">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu dictum velit. Proin sed nisi ut ex posuere luctus. Praesent eu congue tortor, eget porttitor dolor. In tempus sagittis turpis vitae faucibus. Aliquam vel erat a est lacinia viverra. Donec ullamcorper, erat id efficitur ornare, tellus quam laoreet erat, in ultricies massa enim a magna. Etiam maximus lobortis elementum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						</p>
					</div>

					<div class="menu">
						
					</div>
					<div class="div_buttom">
						<a href="" class="btn btn-mariana">Leia mais</a>
					</div>
				</div> -->
			</div>
			<div id="listagem" class="col-md-4">
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