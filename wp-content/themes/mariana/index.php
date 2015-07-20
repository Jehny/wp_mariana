<?php
	include "layout/header.php";
?>
	
<div id="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<?php 
			$banners = get_posts('post_type=banners');
			if($banners){
				foreach ($banners as $banner){
					if($i++ == 1){
						$active = "active";
					}else{$active = "";}
					?>
					<div class="<?php echo $active; ?> item">
						<img alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($banner->ID)); ?>" class="img-responsive">
					    <!-- <div class="carousel-caption">
					       	<h3>...</h3>
					        <p>...</p>
					    </div> -->

					</div>
		<?php  }
			}
		?>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span aria-hidden="true"><img src="<?php bloginfo('template_url'); ?>/img/prev.png" class="img-responsive"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon" aria-hidden="true"><img src="<?php bloginfo('template_url'); ?>/img/next.png 
	    " class="img-responsive"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>	
</div>

<section class="container-fluid">
	<div class="row-fluid sobre_nos">
		<h1>Sobre Nós</h1>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
	</div>
	
	
</section>
<div class="row-fluid">
	<div class="img_topo_quem">
		<img src="<?php bloginfo('template_url'); ?>/img/quem_somos_home_topo.png" class="img-responsive">
	</div>
	<div class="bg_quem_somos">
		<img src="<?php bloginfo('template_url'); ?>/img/quem_somos_home.png" class="img-responsive">
	</div>
	<div class="texto_quem_somos">
		<h3>Escrever as delicadezas do dia a dia é uma dádiva!</h3>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
		<div><a href="" class="btn btn-mariana">Continuar lendo</a></div>
	</div>
</div>

<section class="container-fluid">
	<div id="portifolio" class="row-fluid">
		<h1>Veja nosso <br />
			<strong>Protifólio de trabalho</strong>	
		</h1>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
	</div>
	
	<div class="portifolio_galeria">		
		<div class="portifolio_nav">
			<ul class="nav nav-tabs" id="portifolio_tab">
			  	<li role="presentation" class="active"><a href="#todos">Todos</a></li>
			 	<li role="presentation"><a href="#fotos" id="photos">Fotos</a></li>
			 	<li role="presentation"><a href="#videos">Vídeo</a></li>
			</ul>
		</div>

		<div id="portifolio_content" class="tab-content">
			<div role="tabpanel" class="tab-pane fade active in" id="todos" aria-labelledby="home-tab">
		        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_1.png"></div>
		        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_2.png"></div>
		        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_3.png"></div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="fotos" aria-labelledby="home-tab">
		       <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_1.png"></div>
		        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_2.png"></div>
		        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_3.png"></div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="videos" aria-labelledby="home-tab">
			    <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_1.png"></div>
		        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_2.png"></div>
		        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php bloginfo('template_url'); ?>/img/imagem_3.png"></div>
			</div>

		</div>
		<div class="div_buttom"><a href="" class="btn btn-mariana">Ver todos</a></div>
	</div>
</section>

<div id="artigos" class="row-fluid">
	<section class="container-fluid">
		<h1>Textos, artigos, reflexões sobre o <br>
			<span>mundo a nossa volta</span></h1>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. </p>
		<div class="row-fluid item_artigos">
			<div class="col-xs-12 col-sm-6 col-md-3 bg">
				<img src="<?php bloginfo('template_url'); ?>/img/img_artigo_item.png" class="img-responsive">
				<p class="titulo">Por Mariana.etc</p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
				<a href="" class="btn btn-artigo">Continuar lendo</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 bg">
				<img src="<?php bloginfo('template_url'); ?>/img/img_artigo_item.png" class="img-responsive">
				<p class="titulo">Por Mariana.etc</p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
				<a href="" class="btn btn-artigo">Continuar lendo</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 bg">
				<img src="<?php bloginfo('template_url'); ?>/img/img_artigo_item.png" class="img-responsive">
				<p class="titulo">Por Mariana.etc</p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
				<a href="" class="btn btn-artigo">Continuar lendo</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 bg">
				<img src="<?php bloginfo('template_url'); ?>/img/img_artigo_item.png" class="img-responsive">
				<p class="titulo">Por Mariana.etc</p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
				<a href="" class="btn btn-artigo">Continuar lendo</a>
			</div>
		</div>
	</section>
</div>

<div id="doacoes" class="row-fluid">
	<section class="container-fluid">
		<h1>Gostaria de patrocinar nosso projeto?</h1>
		<hr>
		<p class="resumo">Entre em contato com a gente, tire dúvidas, dê sugestões. Quer um <br />
		orçamento para projeto? Teremos o maior prazer em realizar sua ideia.</p>
		<div class="div_buttom"><a href="" class="btn btn-doacao"><img src="<?php bloginfo('template_url'); ?>/img/ico_butao_doacao.png" class="img-reponsive">Eu quero</a></div>
	</section>
</div>

<div id="contato" class="row-fluid">
	<section class="container-fluid">
		<h1>Quer bater um papo com a gente?</h1>
		<hr>
		<p class="resumo">Entre em contato com a gente, tire dúvidas, dê sugestões. Quer um <br />
		orçamento para projeto? Teremos o maior prazer em realizar sua ideia.</p>

		<form action="" method="POST" id="form_fale" class="col-md-offset-1">
			<fieldset>
				<label>Nome:</label>
				<p><input type="text" name="nome"></p>
			</fieldset>
			<fieldset>
				<label>E-mail:</label>
				<p><input type="email" name="email"></p>
			</fieldset>
			<fieldset>
				<label>Mensagem:</label>
				<p><textarea rows="2" cols="25"></textarea></p>
			</fieldset>
			<div class="div_buttom"><button type="submit" name="submit" class="btn btn-artigo">Enviar mensagem</button></div>
		</form>
	</section>
</div>



<?php
	include "layout/footer.php";
?>