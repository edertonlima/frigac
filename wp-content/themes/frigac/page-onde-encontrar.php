
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">
				<div class="slide-page">
					<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-6.jpg');">
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h2>Onde Encontrar</h2>
							<p class="content-reduzido">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
						</div>

						<div class="col-12">
							<div class="list-onde-encontrar">
								<h4>Florianópolis</h4>
								<ul>
									<li>
										<span>Açougue Lorem Ipsum</span>
										<p>
											Endereço
											<br>
											Telefone
										</p>
									</li>
									<li>
										<span>Açougue Lorem Ipsum</span>
										<p>
											Endereço
											<br>
											Telefone
										</p>
									</li>
								</ul>
							</div>
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

	});
</script>