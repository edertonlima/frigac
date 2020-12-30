
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">

				<div class="slide-page">
					<div class="item imagem slide-item-height-full" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-banner-produto.jpg');">
						<div class="container">
							<h2 class="destaque">sabor e textura de<br>manteiga de verdade</h2>
						</div>
					</div>
				</div>

			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						
						<div class="col-6 align-center">
							<h1 class="destaque cor-cor1"><?php the_title(); ?></h1>
							<p>Preparado vegetal <strong>sabor manteiga</strong> obtido a partir de extrato de castanha de caju pasteurizado, por processos tecnologicamente adequados.</p>

							<p>Carro chefe da nossa linha, sabor semelhante a manteiga tradicional, <strong>textura cremosa,</strong> perfeita para substituir a manteiga tradicional em receitas.</p>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/manteiga-vegana-infos.jpg" class="img-single" alt="">
						</div>
						<div class="col-6 align-center col-info-single">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/manteiga-vegana-single.png" alt="" class="img-single">

							<div class="info-single">
								<p><strong>INGREDIENTES:</strong>  Gordura de coco, água, óleo de girassol, castanha de caju, lecitina de girassol, vinagre de maçã, sal rosa do himalaia, açafrão da terra orgânico e conservantes naturais (INS 234 e INS 235).</p>

								<p><strong>ALÉRGICOS:</strong>  CONTÉM CASTANHA DE CAJU. PODE CONTER TRAÇOS DE SOJA. NÁO CONTÉM GLÚTEN.</p>

								<div class="embalagens">
									<p><strong>Embalagem:</strong></p>
									<p>
										150g - cód 001<br>
										1kg - cód 002
									</p>
								</div>
							</div>

						</div>
					</div>
					<div class="row footer-single">
						<div class="col-6 align-center">
							<div class="ico-redes">
								<p class="cor-cor1">Compartilhe com pessoas de interesse!</p>

								<ul>
									<li><a href="" class="ico-social"><span class="ico-linkedin"></span></a></li>
									<li><a href="" class="ico-social"><span class="ico-twitter"></span></a></li>
									<li><a href="" class="ico-social"><span class="ico-facebook"></span></a></li>
									<li><a href="" class="ico-social"><span class="ico-instagram"></span> </a></li>
									<li><a href="" class="ico-social"><span class="ico-whatsapp"></span> </a></li>
								</ul>
							</div>
						</div>

						<div class="col-6 align-center align-self-center">
							<ul class="ico-single">
								<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-single-1.png" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-single-2.png" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-single-3.png" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-single-4.png" alt=""></li>
							</ul>
						</div>

					</div>
				</div>
			</section>

		<?php endwhile;
	} ?>

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