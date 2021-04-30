
<?php get_header(); ?>

	<section class="box-section box-section-no-padding">
		<div class="slide-page">
			<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner.jpg');">
				<div class="container">
					<h2>cortes<br>suínos</h2>
					<a href="#">conheça</a>
				</div>
			</div>
		</div>
	</section>


	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-12 align-center">
					<p>Lorem ipsum <strong>desde 1990</strong> amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

					<ul class="icon-page icon-cor1">
						<li>
							<a href="<?php echo get_home_url(); ?>/?categoria_produto=linguicas" title="Linguiças">
								<div class="icon-page-imagem">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-linguicas.png" alt="Linguiças">
								</div>
								Linguiças
							</a>
						</li>
						<li>
							<a href="<?php echo get_home_url(); ?>/?categoria_produto=defumados" title="Defumados">
								<div class="icon-page-imagem">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-defumados.png" alt="Defumados">
								</div>
								Defumados
							</a>
						</li>
						<li>
							<a href="<?php echo get_home_url(); ?>/?categoria_produto=banha" title="Banha">
								<div class="icon-page-imagem">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-banha.png" alt="Banha">
								</div>
								Banha
							</a>
						</li>
						<li>
							<a href="<?php echo get_home_url(); ?>/?categoria_produto=carne-suina" title="Carne Suína">
								<div class="icon-page-imagem">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-carne-suina.png" alt="Carne Suína">
								</div>
								Carne Suína
							</a>
						</li>
						<li>
							<a href="<?php echo get_home_url(); ?>/?categoria_produto=embutidos" title="Embutidos">
								<div class="icon-page-imagem">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-embutidos.png" alt="Embutidos">
								</div>
								Embutidos
							</a>
						</li>
						<li>
							<a href="<?php echo get_home_url(); ?>/?categoria_produto=torresmo" title="Torresmo">
								<div class="icon-page-imagem">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-torresmo.png" alt="Torresmo">
								</div>
								Torresmo
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	

	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-12 align-center">
					<h2>Fale Conosco</h2>
					<p class="content-reduzido">Entre em contato para esclarecer suas dúvidas ou obter mais informações</p>

					<a href="#" class="btn btn-page" title="Seja um Revendedor">Seja um Revendedor</a>
					<a href="#" class="btn btn-page" title="Trabalhe Conosco">Trabalhe Conosco</a>
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