<?php
/*
Template Name: О компании
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
		</div>
		<!-- /.content -->
		<div class="team">
			<h2>Руководство СтройИнвест</h2>
			<div class="row">
				<div class="col-sm-6 col-lg-4 col-md-4  team_item__img">

					<img src="<?php the_field('owner_photo_1'); ?>" alt="Петров Дмитрий">
					<h4><?php the_field('owner_name_1') ?></h4>
					<p><?php the_field('owner_post_1') ?></p>
				</div>
				<div class="col-sm-6 col-lg-4 col-md-4  team_item__img">
					<img src="<?php the_field('owner_photo_2'); ?>" alt="Иванов Васисилий">
					<h4><?php the_field('owner_name_2') ?></h4>
					<p><?php the_field('owner_post_2') ?></p>
				</div>
				<div class=" col-sm-6 offset-sm-3 offset-md-0  col-lg-4 col-md-4  team_item__img ">
					<img src="<?php the_field('owner_photo_3'); ?>" alt="Василькова Анна">
					<h4><?php the_field('owner_name_3') ?></h4>
					<p><?php the_field('owner_post_3') ?></p>
				</div>
			</div>
		</div>
		<!-- /.team -->


<?php get_footer(); ?>
