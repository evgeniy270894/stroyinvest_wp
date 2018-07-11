<?php
/*
Template Name: Структура
*/
?>



<?php get_header(); ?>

<div class="row">
	<div class="col-lg-4">
		<?php get_sidebar(); ?>
	</div>
	<!-- /.col-md-4 -->

	<div class="col-lg-8">
		<div class="content">
			<h2><?php the_title(); ?></h2>
			<div class="row">

				<?php 
				$args = array(
					'sort_order'   => 'ASC',
					'sort_column'  => 'post_title',
					'hierarchical' => 1,
					'child_of'     => 15,
					'parent'       => -1,
					'post_type'    => 'page',
					'post_status'  => 'publish',
				); 
				$pages = get_pages( $args );
				foreach( $pages as $post ){
					setup_postdata( $post );
				?>
				<div class="col-md-6 col-sm-12">
					<a href="<?php the_permalink(); ?>"> 
						<div class="org_item">
							<a href='#' class='org_title'><?php the_title(); ?></a>
							<span><?php the_field('ogrn');?></span>
							<span><?php the_field('inn'); ?></span>
							<?php the_excerpt(); ?>
						</div>
					</a>
				</div>

				<?php
				}  
				wp_reset_postdata();
				?>

			</div>
		</div>
		<!-- /.content -->


<?php get_footer(); ?>
