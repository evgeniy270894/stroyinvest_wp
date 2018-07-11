<?php
/*
Template Name: Главная
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
			<?php the_content(); ?>
			<a href="<?php the_permalink( $post = 11 ) ?>" class="btn btn-primary">Узнать больше о компании</a>
		</div>
		<!-- /.content -->


<?php get_footer(); ?>
