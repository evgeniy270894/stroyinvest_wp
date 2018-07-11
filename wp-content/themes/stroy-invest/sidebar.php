<div class="left-sidebar">
	<div class="left-sidebar_btn">Категории</div>
	
	<ul class="left-sidebar_menu">
		<?php 
		
		$args = array(
			'orderby'            => 'name',
			'order'              => 'ASC',
			'show_last_update'   => 0,
			'style'              => 'list',
			'show_count'         => 0,
			'hide_empty'         => 0,
			'hierarchical'       => true,
			'title_li'           => NULL,
			'exclude'            => '1',
			
			
		);

			wp_list_categories( $args );
		?>
	</ul>
	
	<?php wp_reset_postdata(); ?>


	<?php 
		// параметры по умолчанию
				$args = array(
					'numberposts' => 2,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'post_type'   => 'post',
					'suppress_filters' => true,
				 // подавление работы фильтров изменения SQL запроса
				);

				$posts = get_posts( $args );

				foreach($posts as $post){ setup_postdata($post);
					?>
					<div class="left-sidebar_object">
						<?php the_post_thumbnail( 'sidebar_preview', '' ) ?>
						<div class="left-sidebar_object-description">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">Узнать подробнее »</a>
						</div>
					</div>

					<?php 
				}
			wp_reset_postdata(); // сброс
	 ?>

</div>
				<!-- /.left-sidebar -->