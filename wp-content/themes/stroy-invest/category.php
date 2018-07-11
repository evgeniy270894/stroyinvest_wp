
<?php get_header(); ?>

<div class="row">
	<div class="col-lg-4">
		<?php get_sidebar(); ?>
	</div>
	<!-- /.col-md-4 -->

	<div class="col-lg-8">
		<div class="content">
			<h2>
				<?php if( is_category() ) {
					$cat_name = get_queried_object()->name;
					$cat_slug = get_queried_object()->slug;
					echo $cat_name;
					
				}
				?>
			</h2>
			<div class="row">
				<?php 
				// параметры по умолчанию
				$args = array(
					'numberposts' => 0,
					'category_name'    => $cat_slug,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'post',
					'suppress_filters' => true,
				 // подавление работы фильтров изменения SQL запроса
				);

				$posts = get_posts( $args );

				foreach($posts as $post){ setup_postdata($post);
					?>

					<div class="col-md-6">
						<a href="<?php the_permalink();?>">
							<div class="object_card">
								<?php the_post_thumbnail( 'object_preview', ''); ?>
								<div class="object_card-wrapper">
									<a href="<?php the_permalink();?>" class="object_card-title"><?php the_title(); ?></a>
									<p class="object_card-text"><?php the_field('object_description'); ?></p>
									<p class="object_card-price"><?php the_field('object_price'); ?></p>
									<a href="" data-target='modal' class="btn btn-primary object_card-btn">Бесплатная консультация</a>
									<a href="<?php the_permalink();?>" class="object_card-more">Подробнее</a>
								</div>
							</div>
						</a>
					</div>

					<?php 
				}
			wp_reset_postdata(); // сброс
			?>
		</div>

		<?php wptuts_pagination(); ?>
	</div>
	<!-- /.content -->
	<?php get_footer(); ?>
