			<div class="directions">
				<h2>Направления деятельности</h2>

				<div class="directions-slider">
					<div class="directions-block" style='background-image: url(<?php the_field('image_direction_1', 9); ?>)'>
						<h3><?php the_field('name_direction_1', 9); ?></h3>
					</div>
					<div class="directions-block" style='background-image: url(<?php the_field('image_direction_2', 9); ?>)'>
						<h3><?php the_field('name_direction_2', 9); ?></h3>
					</div>
					<div class="directions-block" style='background-image: url(<?php the_field('image_direction_3', 9); ?>)'>
						<h3><?php the_field('name_direction_3', 9); ?></h3>
					</div>
					<div class="directions-block" style='background-image: url(<?php the_field('image_direction_4', 9); ?>)'>
						<h3><?php the_field('name_direction_4', 9); ?></h3>
					</div>
					<div class="directions-block" style='background-image: url(<?php the_field('image_direction_5', 9); ?>)'>
						<h3><?php the_field('name_direction_5', 9); ?></h3>
					</div>
				</div>
				<!-- /.directions-slider-->
			</div>
			<!-- /.directions-->
		</div>
		<!-- /.col-md-8 -->
	</div>
	<!-- /.row -->

</div>
<!-- /.container -->

<footer class="footer">
	<div class="container">
		<div class="row">

			<div class="col-lg-4">
				<p>Copyright © 2014-<?php echo date('Y'); ?></p>
				<a class="footer-policy-link" href="#">Политика конфиденциальности</a>
				<small> <?php the_field("law_text", 19);?> </small>
			</div>
			<!-- /.col-md -->

			<div class="col-md-auto col-5 col-sm-6">
				<?php wp_nav_menu( array(
						'container'       => 'ul',
						'container_class' => 'footer_menu',
						'menu_class'      => 'footer_menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => '',
					) ); ?>
					
			</div>
			<!-- /.col-md -->

			<div class="col-md-auto col-7 col-sm-6">
				<ul class="footer_menu">
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
			</div>
			<!-- /.col-md -->

			<div class="col-md-auto">
				<div class="footer-contacts">
					<a class="footer-contacts_phone" href="tel: <?php the_field("phone_number", 19);?> "> <?php the_field("phone_number", 19);?> </a>
					<p class="footer-contacts_address"> <?php the_field("adress_1", 19);?> </p>
					<p class="footer-contacts_address"> <?php the_field("adress_2", 19);?> </p>
					<a class="footer-contacts_email" href="mailto:<?php the_field("email", 19);?>"> <?php the_field("email", 19);?></a>
				</div>
				<div class="footer-social-links">
					<ul>
						<li><a href="<?php the_field("vk", 19);?>"><i class="icon-vkontakte"></i></a></li>
						<li><a href="<?php the_field("facebook", 19);?>"><i class="icon-facebook"></i></a></li>
						<li><a href="<?php the_field("instagram", 19);?>"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>

			</div>
			<!-- /.col-md -->
		</div>
	</div>
	<!-- /.container -->
</footer>

<div id='modal_form' class="modal">
	<div class="modal_content">
		<div class="modal_close">&times</div>
		<h4>Заполните поля</h4>
		<p>Мы свяжемся с вами в ближайшее время</p>
			<?php echo do_shortcode('[contact-form-7 id="107" title="Контактная форма"]'); ?>
			<!-- <input type="text" name='name' required placeholder='Ваше имя'>
			<input type="phone" name='phone'required placeholder='Ваше телефон'> 
			<button class="btn btn-primary">Отправить заявку</button> -->
		<small>
			Нажимая кнопку, даю свое согласие <a href="#">на обработку персональных данных</a>
		</small>
	</div>
</div>

<div id='modal_alert' class="modal">
	<div class="modal_content modal_content-alert">
		<div class="modal_close">&times</div>
		<h4>Спасибо</h4>
		<p>Ваша заявка отправлена</p>
		<button class="btn btn-primary">Закрыть</button>
	</div>
</div>


<script>
	document.body.onload = (function() {
		setTimeout(function() {
			let preloder = document.getElementById('page_preloder');
			if(!preloder.classList.contains('done')){
				preloder.classList.add('done');	
				document.body.style.overflow = 'visible';
			};

		}, 300);
	});
</script>
<?php wp_footer(); ?>

</body>
</html>