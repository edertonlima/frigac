
<?php

// configurações
$customPost = array(
	array(
	    'name' => 'Produtos',
	    'singular_name' => 'Produto',
	    'slug' => 'produto',
	    'category' => true
	)
);

$nome_post = array(
	'name' => 'Gastronomia',
	'singular_name' => 'Gastronomia'
);



// remove pagina pai
function remove_post_custom_fields() {
	remove_meta_box( 'pageparentdiv' , 'page' , 'side' ); 
}

// remove admin bar
add_filter('show_admin_bar', '__return_false');

// menu
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
	register_nav_menu( 'primary', __( 'header', 'header' ) );
}



//configurações de pagina

// adiciona excerpt
add_post_type_support( 'page', 'excerpt' );



//configurações de post

//adiciona thumbnails
add_theme_support( 'post-thumbnails' );

// adiciona excerpt
add_post_type_support( 'post', 'excerpt' );




// muda nome post
function change_post_label() {
	global $menu;
	global $submenu;
	global $nome_post;
	$menu[5][0] = $nome_post['name'];
	$submenu['edit.php'][5][0] = 'Todos os posts';
	$submenu['edit.php'][10][0] = 'Adicionar post';
	echo '';
}
function change_post_object() {
	global $wp_post_types;
	global $nome_post;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $nome_post['name'];
	$labels->singular_name = $nome_post['singular_name'];
	$labels->add_new = 'Adicionar post';
	$labels->add_new_item = 'Adicionar post';
	$labels->edit_item = 'Editar post';
	$labels->new_item = 'Post';
	$labels->view_item = 'Ver post';
	$labels->search_items = 'Buscar post';
	$labels->not_found = 'Nenhum post encontrado';
	$labels->not_found_in_trash = 'Nenhum post encontrado na lixeira';
	$labels->all_items = 'Todos os posts';
	$labels->menu_name = 'Notícias';
	$labels->name_admin_bar = 'Notícias';
}

if($nome_post['name'] != ''){
	add_action( 'admin_menu', 'change_post_label' );
	add_action( 'init', 'change_post_object' );
}



	// PRODUTOS
	add_action( 'init', 'create_post_type_produto' );
	function create_post_type_produto() {

		$labels = array(
		    'name' => _x('Produtos', 'post type general name'),
		    'singular_name' => _x('Produto', 'post type singular name'),
		    'add_new' => _x('Adicionar Nova', 'Produto'),
		    'add_new_item' => __('Add New Produto'),
		    'edit_item' => __('Edit Produto'),
		    'new_item' => __('New Produto'),
		    'all_items' => __('Todas as Produto'),
		    'view_item' => __('View Produto'),
		    'search_items' => __('Search Produto'),
		    'not_found' =>  __('No Produto found'),
		    'not_found_in_trash' => __('No Produto found in Trash'),
		    'parent_item_colon' => '',
		    'menu_name' => 'Produtos'
		);
		$args = array(
		    'labels' => $labels,
		    'public' => true,
		    'publicly_queryable' => true,
		    'show_ui' => true,
		    'show_in_menu' => true,
		    'rewrite' => true,
		    'capability_type' => 'post',
		    'has_archive' => true,
		    'hierarchical' => false,
		    'menu_position' => null,
		    'menu_icon' => 'dashicons-tag',
		    'supports' => array('title','thumbnail','excerpt','editor')
		  );

	    register_post_type( 'produto', $args );
	}

	add_action( 'init', 'create_taxonomy_categoria_produto' );
	function create_taxonomy_categoria_produto() {

		$labels = array(
		    'name' => _x( 'Categorias de Produto', 'taxonomy general name' ),
		    'singular_name' => _x( 'Categorias', 'taxonomy singular name' ),
		    'search_items' =>  __( 'Search Categorias' ),
		    'all_items' => __( 'All Categories' ),
		    'parent_item' => __( 'Parent Categorias' ),
		    'parent_item_colon' => __( 'Parent Categorias:' ),
		    'edit_item' => __( 'Edit Categorias' ),
		    'update_item' => __( 'Update Categorias' ),
		    'add_new_item' => __( 'Add New Categorias' ),
		    'new_item_name' => __( 'New Categorias Name' ),
		    'menu_name' => __( 'Categorias' ),
		);

	    register_taxonomy( 'categoria_produto', array( 'produto' ), array(
	        'hierarchical' => true,
	        'labels' => $labels,
	        'show_ui' => true,
	        'show_in_tag_cloud' => true,
	        'query_var' => true,
			'has_archive' => 'produto',
			'rewrite' => array(
			    'slug' => 'produto',
			    'with_front' => false,
				),
	        )
	    );
	}



// remove itns do admin
if(wp_get_current_user()->user_login == 'ederton'){
	$producao = false;
}else{
	$producao = true;
}

if($producao){
	add_action('admin_head', 'remove_itens_admin');

	function remove_itens_admin() {
	  echo '
		<script type="text/javascript">
			jQuery.noConflict();
			jQuery("document").ready(function(){

				// menu
				jQuery("#menu-appearance").remove(); //aparencias
				jQuery("#menu-comments").remove(); //comentários
				jQuery("#menu-plugins").remove(); //plugins
				jQuery("#toplevel_page_edit-post_type-acf-field-group").remove(); //ACF
				jQuery("#menu-settings").remove(); //configurações
				jQuery("#menu-tools").remove(); //ferramentas
				jQuery("#menu-media").remove(); //midias

				// usuario master
				jQuery("#user-1").remove();

				// qr code
				jQuery("#wpkqcg-page-meta-box-qrcodemetabox h2").html("QR Code");
				jQuery("#wpkqcg-page-meta-box-qrcodemetabox .form-table tr:nth-child(6)").remove();
				jQuery("#wpkqcg-page-meta-box-qrcodemetabox .form-table tr:nth-child(5)").remove();
				jQuery("#wpkqcg-page-meta-box-qrcodemetabox .form-table tr:nth-child(3)").remove();
				jQuery("#wpkqcg-page-meta-box-qrcodemetabox .form-table tr:nth-child(2)").remove();
				jQuery("#wpkqcg-page-meta-box-qrcodemetabox .form-table tr:nth-child(1)").remove();

			});
		</script>
	  ';
	}
}

?>