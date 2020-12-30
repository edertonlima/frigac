
<?php get_header(); ?>

	<section class="box-section box-section-no-padding">

		<div class="slide-page">
			<div class="item imagem slide-item-height-full" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-banner-home.jpg');">
				<!--<div class="container">
					<h2 class="destaque">queijo a base de castanha<br>saboroso e vegano</h2>
				</div>-->
			</div>
		</div>

	</section>

	<section class="box-section">
		<div class="container">
			<div class="row list-post">

						<div class="col-6">
							<article class="item-post">
								<a href="<?php echo get_home_url(); ?>/estilo-de-vida/5-formas-de-cuidar-de-si-mesmo/" class="img-post">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-blog-1.jpg" alt="">
								</a>

								<h3><a href="<?php echo get_home_url(); ?>/estilo-de-vida/5-formas-de-cuidar-de-si-mesmo/">5 FORMAS DE CUIDAR DE SI MESMO</a></h3>
								<span class="legenda-post"><a href="#">estilo de vida</a> <strong>| 28 de março</strong></span>
							</article>
						</div>

						<div class="col-6">
							<article class="item-post">
								<a href="<?php echo get_home_url(); ?>/estilo-de-vida/cookie-sem-gluten-e-plant-based/" class="img-post">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-blog-2.jpg" alt="">
								</a>

								<h3><a href="<?php echo get_home_url(); ?>/estilo-de-vida/cookie-sem-gluten-e-plant-based/">COOKIE SEM GLÚTEN E PLANT BASED</a></h3>
								<span class="legenda-post"><a href="#">receitas</a> <strong>|  23 de outubro</strong></span>
							</article>
						</div>

				<?php if( have_posts() ){
					while ( have_posts() ) : the_post(); ?>

						<div class="col-6">
							<?php //get_template_part( 'content/list-post' ); ?>
						</div>

					<?php endwhile;
				}else{
					echo '<div class="col-12 align-center"><p>Nenhum conteúdo encontrado.</p></div>';
				} ?>

			</div>
		</div>
	</section>

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/slick/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slide-produtos').slick({
			dots: false,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true
		});

		/*slide = 0;
		$('#depoimentos .slick-dots li').each(function() {
			imagem = $('#depoimentos .slick-slide[data-slick-index="'+ slide +'"] img').attr('src');
			$('button', this).css('background-image','url('+ imagem +')');
			slide = slide+1;
		});

		// projetos
		$('#projetos').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1
		});*/
	});
</script>