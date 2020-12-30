
<?php get_header(); ?>

	<section class="box-section box-section-no-padding">

		<div class="slide-page">
			<div class="item imagem slide-item-height-full" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-banner-home.jpg');">
				<div class="container">
					<h2 class="destaque">queijo a base de castanha<br>saboroso e vegano</h2>
				</div>
			</div>
		</div>

	</section>

	<section class="box-section box-section-produtos" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-slide-produtos.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-6"></div>
				<div class="col-6">
					
					<div class="slide-produtos">
						<div class="item-slide item-slide-txt">
							<p>Nossos produtos são a base de castanha de caju: uma castanha 100% brasileira, utilizada pelos povos originários de diferentes formas em uma alimentação cheia de sabor e saúde. Conheça nossa linha:</p>
						</div>
						<div class="item-slide">
							<a href="<?php echo get_home_url(); ?>/produtos/manteiga-vegana/" class="img-produto">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/manteiga-vegana.png" alt="">
							</a>
							<h3><a href="<?php echo get_home_url(); ?>/produtos/manteiga-vegana/"><span>Manteiga Vegana</span></a></h3>
						</div>
						<div class="item-slide">
							<a href="<?php echo get_home_url(); ?>/produtos/mussarela-vegana/" class="img-produto">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mussarela-vegana.png" alt="">
							</a>
							<h3><a href="<?php echo get_home_url(); ?>/produtos/mussarela-vegana/"><span>Mussarela Vegana</span></a></h3>
						</div>
						<div class="item-slide">
							<a href="<?php echo get_home_url(); ?>/produtos/queijo-de-akaiu/" class="img-produto">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/queijo-de-akaiu.png" alt="">
							</a>
							<h3><a href="<?php echo get_home_url(); ?>/produtos/queijo-de-akaiu/"><span>Queijo de Akaîu</span></a></h3>
						</div>
					</div>

				</div>
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