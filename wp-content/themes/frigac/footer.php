
	<footer class="footer bg-cor3">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/selo-footer.png" alt="" class="logo-selo-footer">
		<div class="container">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-5">

					<div class="box-nav-footer">
						<nav class="nav nav-footer">							
							<ul class="align-right">

								<?php 
									$array_menu = wp_get_nav_menu_items('header');
									$menu = array();
									foreach ($array_menu as $item) {
										if (empty($m->menu_item_parent)) { ?>

											<li>
												<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"> 
													<?php echo $item->title; ?>
												</a>
											</li>

										<?php }
									}
								?>

							</ul>
						</nav>
					</div>

				</div>
				<div class="col-5 align-center">

					<h3>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-mobile.png" alt="">
						Contato
					</h3>

					<p>+55 (48) 3272.1171</p>
					<p><a href="mailto:frigac@gmail.com" title="frigac@gmail.com">frigac@gmail.com</a></p>

					<div class="social-footer">
						<p>Siga-nos nas redes sociais e acompanhe novidades, receitas, dicas e muito mais!</p>

						<ul>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-facebook.png" alt="">
								</a>
							</li>

							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-instagram.png" alt="">
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</footer>

</body>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		window_W = $(window).width();

		scroll_body = $(window).scrollTop();
		if(scroll_body > 25){
			$('.header').addClass('scroll');
		}else{
			$('.header').removeClass('scroll');
		}
	});

	$('#btn-open-menu').click(function(){
		$('.nav-mobile').toggleClass('active');
	});

	$('#btn-close-menu').click(function(){
		$('.nav-mobile').toggleClass('active');
	});	

	$(window).scroll(function(){
		scroll_body = $(window).scrollTop();
		if(scroll_body > 25){
			$('.header').addClass('scroll');
		}else{
			$('.header').removeClass('scroll');
		}
	});
</script>

<?php wp_footer(); ?>



	<!-- cookies -->
	<style>
		.box-cookies {
			background-color: #29a1d8; padding: 20px; position: fixed; bottom: 0; left: 0; width: 100%; display: flex; align-items: center;
			justify-content: center; z-index: 999;
		}
		.box-cookies p, .box-cookies p strong, .box-cookies p a {
			font-weight: 300; font-size: .875rem; line-height: 1.225rem; color: #ffffff; margin: 0 50px 0 0;
			max-width: 600px;
		}
		.box-cookies p a {
			text-decoration: underline;
		}
		.box-cookies p a:hover {
			text-decoration: none;
		}
		.box-cookies p strong {
			display: block;
			font-weight: bold;
			margin: 0;
		}
		.box-cookies form {
			width: 150px;
		}
		#ok-cookies {
			background: #fff; color: #29a1d8; font-weight: bold; display: flex; align-items: center; line-height:  normal; height: 34px; padding: 0; width: 150px; flex: 0 0 150px; justify-content: center;
			border: 1px solid #ffffff;
		}
		#ok-cookies:hover {
			background-color: transparent;
			color: #ffffff;
		}

		@media all and (max-width: 680px){
			.box-cookies {
				flex-direction: column;
			}
			.box-cookies p {
				text-align: center;
				margin: 0;
			}
			.box-cookies p strong {
				text-align: center;
			}
			.box-cookies p:first-child {
				margin-bottom: 15px;
			}
			#ok-cookies {
				margin-top: 15px;
				flex: 0 0 auto;
			}
		}
	</style>


		<div class="box-cookies" style="display: none;">
			<p>
				<strong>Política de Cookies</strong>
				Utilizamos cookies para oferecer melhor experiência, melhorar o desempenho, analisar como você interage em nosso site e personalizar conteúdo. Ao utilizar este site, você concorda com o uso de cookies.
				<a style="display: none;"> href="<?php echo get_home_url(); ?>/privacy-policy">Read more.</a>
			</p>

			<button id="ok-cookies" class="button" type="button" style="">OK</button>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
		<script>
			$(document).ready(function(){				

				$('#ok-cookies').click(function(){
					Cookies.set('info-cookies', 'none');
					$('.box-cookies').fadeOut();
				});

				if(!Cookies.get('info-cookies')){
					$('.box-cookies').fadeIn();
				}
			});
		</script>	