<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="" type="image/x-icon" />
	<link rel="icon" href="" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="pt" />
	<meta name="rating" content="General" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<meta name="author" content="" />
	<meta name="language" content="pt-br" />
	<meta name="title" content="" />

	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header">
		<nav class="nav nav-principal">
			<div class="container">
				<div class="logo"><a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nulu-alimentos-funcionais.png" alt="">
				</a></div>
				
				<ul class="align-right">

					<?php 
						$array_menu = wp_get_nav_menu_items('header');
						$menu = array();
						foreach ($array_menu as $item) {
							if (empty($m->menu_item_parent)) { ?>

								<li>
									<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"> 
										<span><?php echo $item->title; ?></span>
									</a>
								</li>

							<?php }
						}
					?>

					<?php /*<li class="<?php if(is_page('biografia')){ echo 'ativo'; } ?>">
						<a href="<?php echo get_permalink(get_page_by_path('biografia')); ?>" title="biografia">biografia</a>
					</li>
					<li class="<?php if(get_post_type() == 'post'){ echo 'ativo'; } ?>">
						<a href="<?php echo get_home_url(); ?>/noticias">notícias</a>
					</li>
					<li class="<?php if(get_post_type() == 'midias'){ echo 'ativo'; } ?>">
						<a href="<?php echo get_home_url(); ?>/midias">mídia</a>
					</li>
					<li class="<?php if(is_page('contato')){ echo 'ativo'; } ?>">
						<a href="#">contato</a>
					</li> */ ?>
				</ul>

				<!--
				<div class="menu-mobile" id="nav-icon2">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div> -->
				<span class="menu-mobile" id="btn-open-menu">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-menu-mobile.svg" alt="">
				</span>
			</div>
		</nav>

		<nav class="nav-mobile">

			<div class="logo"><a href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nulu-alimentos-funcionais-mobile.svg" alt="">
			</a></div>

			<span id="btn-close-menu">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-menu.svg" alt="">
			</span>
			
			<ul>
				<?php 
					$array_menu = wp_get_nav_menu_items('header');
					$menu = array();
					foreach ($array_menu as $item) {
						if (empty($m->menu_item_parent)) { ?>

							<li>
								<a href="<?php echo $item->url; ?>" title="<?php echo $item->title; ?>"> 
									<span><?php echo $item->title; ?></span>
								</a>

								<?php if($item->object_id == 16){ 

									$query = array(
											'post_type' => 'produtos'
										);
									query_posts( $query );

									if( have_posts() ){ ?>
										<ul>
											<?php while ( have_posts() ) : the_post(); ?>
												<li>
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
												</li>
											<?php endwhile;
											wp_reset_query(); ?>
										</ul>
									<?php }

								} ?>
							</li>

						<?php }
					}
				?>
			</ul>
		</nav>
	</header>

	<?php if(is_front_page()){ ?>

	<?php } ?>