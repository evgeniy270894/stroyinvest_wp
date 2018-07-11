<?php
/*
Template Name: Контакты
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
			<div class="contacts">
				<a class="contacts_phone" href="tel:<?php the_field("phone_number", 19);?>"><i class="icon-phone"></i><?php the_field("phone_number", 19);?></a>
				<a class="contacts_email" href="mailto:<?php the_field("email", 19);?>"><i class="icon-mail"></i><?php the_field("email", 19);?></a>
				<span class="ymaps-geolink contacts_address"><?php the_field("adress_1", 19);?></span>
				<span class="ymaps-geolink contacts_address"><?php the_field("adress_2", 19);?></span>
				<a href="#" data-target='modal' class="btn btn-primary contacts_btn">Задать вопрос</a>
			</div>
			<div class="contacts_social-links">
				<ul>
					<li><a href="<?php the_field("vk", 19);?>"><i class="icon-vkontakte"></i></a></li>
					<li><a href="<?php the_field("facebook", 19);?>"><i class="icon-facebook"></i></a></li>
					<li><a href="<?php the_field("instagram", 19);?>"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- /.content -->


<?php get_footer(); ?>
