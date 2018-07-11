<?php get_header(); ?>

<div class="row">
	<div class="col-lg-4">
		<?php get_sidebar(); ?>
	</div>
	<!-- /.col-md-4 -->

	<div class="col-lg-8">
		<div class="content">
			<h2><?php the_title(); ?></h2>
			<div class="object_page">
				<div class="object_page-slider">
					<?php the_content(); ?>
				</div>
				<div class="object_page-text">
					<p><strong>Площадь : </strong> <?php the_field('area'); ?></p>
					<p><strong>Назначение : </strong> <?php the_field('target'); ?> </p>
					<p><strong>Стоимость : </strong><?php the_field('object_price'); ?></p>
					<p><strong>Описание :  </strong> <?php the_field('object_description'); ?></p>
					<a href="" class="btn btn-primary object_card-btn">Бесплатная консультация</a>
				</div>

			</div>

		</div>
		<!-- /.content -->

<?php get_footer(); ?>
