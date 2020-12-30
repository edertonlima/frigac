
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

	<section class="box-section box-quem-somos bg-cor1">
		<div class="container">
			<div class="row">
				<div class="col-12 align-center">
					<h1 class="destaque cor-branco">bem vindo à nulu</h1>

					<div class="direction-revert-mobile">
						<div class="list-ico-page content-reduzido">
							<div class="item-ico">
								<div class="img-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-1-branco.png" alt=""></div>
								<h3 class="cor-branco">SEM LEITE E<br>DERIVADOS<br>ANIMAIS</h3>
							</div>
							<div class="item-ico">
								<div class="img-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-2-branco.png" alt=""></div>
								<h3 class="cor-branco">ECONOMIA<br>COOPERATIVA</h3>
							</div>
							<div class="item-ico">
								<div class="img-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-3-branco.png" alt=""></div>
								<h3 class="cor-branco">NEGÓCIO<br>BRASILEIRO</h3>
							</div>
						</div>

						<p class="content-reduzido cor-branco">Quem somos? Nulu significa felicidade, que é exatamente o que sentimos em criar para vocês produtos cheios de sabor, veganos e saudáveis. Acreditamos em uma nova alimentação, em uma nova forma de consumo e em novas empresas!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php /*
	$query = array(
			'post_type' => 'post',
			'posts_per_page' => 3
		);
	query_posts( $query );

	if( have_posts() ){ ?>

		<section class="box-section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="align-center">Últimas Notícias</h2>
						<p class="text-subtitulo destaque align-center">It is a long established fact that a reader will be distracted</p>
					</div>
				</div>

				<div class="row row-post">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-4">
							<?php get_template_part( 'content/list-post' ); ?>
						</div>
					<?php endwhile;
					wp_reset_query(); ?>
				</div>

				<a href="#" class="btn veja-mais btn-bg-cor1 cor-branco">veja mais</a>
			</div>
		</section>

	<?php } */?>

	<section class="box-section box-instagram">
		<div class="container">
			<div class="row">
				<div class="col-12 align-center">
					<h2 class="destaque cor-cor2">universo nulu</h2>
					<p class="content-reduzido cor-cor2">Siga no instagram <strong><a class="cor-cor2" href="#">@nulu_foods</a></strong> para mais informações, vídeos, receitas e dicas!</p>
				</div>
			</div>
		</div>

		<div id="instagram-feed" class="box-instagrambox-instagrambox-instagrambox-instagram"></div>
	</section>

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/slick/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#depoimentos').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		slide = 0;
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
		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/instagram-feed/instagram-feed.js"></script>
<script type="text/javascript">
	(function($){
		$(window).on('load', function(){
			$.instagramFeed({
				'username': 'nulu_foods',
				'container': "#instagram-feed",
				'display_profile': false,
				'display_biography': false,
				'display_gallery': true,
				'get_raw_json': false,
				'callback': null,
				'styling': true,
				'items': 6,
				'items_per_row': 6,
				'margin': 0
			});
		});
	})(jQuery);
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/scrollbar/scrollbar.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.scrollbar-dynamic').scrollbar();
	});
</script>