<?php 

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'invest_theme' );
 
function invest_theme() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), null, true );
};
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_image_size( object_preview, 341, 141, true);
add_image_size( sidebar_preview, 350, 200, true);


/*Пагинация*/
function wptuts_pagination( $args = array() ) {

	$defaults = array(
		'range'           => 4,
		'custom_query'    => FALSE,
		'previous_string' => __( '<<', 'text-domain' ),
		'next_string'     => __( '>>', 'text-domain' ),
		'before_output'   => '<div class="post-nav"><ul class="pager">',
		'after_output'    => '</ul></div>'
	);

	$args = wp_parse_args( 
		$args, 
		apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
	);

	$args['range'] = (int) $args['range'] - 1;
	if ( !$args['custom_query'] )
		$args['custom_query'] = @$GLOBALS['wp_query'];
	$count = (int) $args['custom_query']->max_num_pages;
	$page  = intval( get_query_var( 'paged' ) );
	$ceil  = ceil( $args['range'] / 2 );

	if ( $count <= 1 )
		return FALSE;

	if ( !$page )
		$page = 1;

	if ( $count > $args['range'] ) {
		if ( $page <= $args['range'] ) {
			$min = 1;
			$max = $args['range'] + 1;
		} elseif ( $page >= ($count - $ceil) ) {
			$min = $count - $args['range'];
			$max = $count;
		} elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
			$min = $page - $ceil;
			$max = $page + $ceil;
		}
	} else {
		$min = 1;
		$max = $count;
	}

	$echo = '';
	$previous = intval($page) - 1;
	$previous = esc_attr( get_pagenum_link($previous) );

	$firstpage = esc_attr( get_pagenum_link(1) );
	if ( $firstpage && (1 != $page) )
		$echo .= '<li class="previous"><a href="' . $firstpage . '">' . __( 'Начало', 'text-domain' ) . '</a></li>';
	if ( $previous && (1 != $page) )
		$echo .= '<li><a href="' . $previous . '" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';

	if ( !empty($min) && !empty($max) ) {
		for( $i = $min; $i <= $max; $i++ ) {
			if ($page == $i) {
				$echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 2, '0', STR_PAD_LEFT ) . '</span></li>';
			} else {
				$echo .= sprintf( '<li><a href="%s">%002d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
			}
		}
	}

	$next = intval($page) + 1;
	$next = esc_attr( get_pagenum_link($next) );
	if ($next && ($count != $page) )
		$echo .= '<li><a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';

	$lastpage = esc_attr( get_pagenum_link($count) );
	if ( $lastpage ) {
		$echo .= '<li class="next"><a href="' . $lastpage . '">' . __( 'Конец', 'text-domain' ) . '</a></li>';
	}
	if ( isset($echo) )
		echo $args['before_output'] . $echo . $args['after_output'];
}