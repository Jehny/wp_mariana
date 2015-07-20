<?php
	include "layout/header.php";
?>
<div class="bg_body">
	<section class="container-fluid">
		<div class="col-md-7 col-md-offset-1">
			<?php $i = 0; 
			?>
			<?php if (have_posts()) {
					 while (have_posts()) {
						print_r(the_post());  
						 $i++; 
			?>
					<div class="post">
						<div class="titulo row-fluid">
							<div class="numero"><?php echo $i; ?></div>
							<div class="nome">
								<h1> <?php echo the_title(); ?> </h1>
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
				} 
			?>
		</div>
	</section>
</div>

<?php
	include "layout/footer.php";
?>