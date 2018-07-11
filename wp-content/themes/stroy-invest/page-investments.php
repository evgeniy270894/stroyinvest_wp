<?php
/*
Template Name: Инвесторам
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

		<div class="doc_links">
			<a href="#">Договор займа »</a>
			<a href="#">Договор погашения »</a>
			<a href="#">Договор залога »</a>
			<a href="#">Договор поручительства »</a>
		</div>

		<div class="calc">
			<div class="row">
				<div class="col-md-6">
					<div class="calc_programms">
						<div class="calc_radio">
							<input type="radio" data-month='6' data-persent='0.2' checked name="programm" id="first">
							<label for='first' >
								<span>20% годовых <small>на 6 месяцев</small></span>
							</label>
						</div>
						<!-- /.calc_radio -->
						<div class="calc_radio">
							<input type="radio" data-month='12' data-persent='0.24'  name="programm" id="second">
							<label for='second' >
								<span>24% годовых <small>на 1 год</small></span>
							</label>
						</div>
						<!-- /.calc_radio -->
						<div class="calc_radio">
							<input type="radio" data-month='24' data-persent='0.26'  name="programm" id="third">
							<label for='third' >
								<span>26% годовых <small>на 2 года</small></span>
							</label>
						</div>
						<!-- /.calc_radio -->
						<div class="calc_radio">
							<input type="radio" data-month='36' data-persent='0.28'  name="programm" id="fourth">
							<label for='fourth' >
								<span>28% годовых <small>на 3 года</small></span>
							</label>
						</div>
						<!-- /.calc_radio -->
						<div class="calc_radio">
							<input type="radio" data-month='48' data-persent='0.32'  name="programm" id="fifth">
							<label for='fifth' >
								<span>32% годовых <small>на 4 года</small></span>
							</label>
							<div class="calc_popular">Популярная программа</div>
						</div>
						<!-- /.calc_radio -->
					</div>
					<p class="calc_information">
						*Наша компания является налоговым агентом, удерживает и оплачивает НДФЛ Вся информация, размещенная на сайте, несет исключительно рекламный характер и не является публичной офертой.
					</p>
				</div>
				<!-- /.col-md-6 -->

				<div class="col-md-6">
					<div class="calc_summ">
						<h4>Укажите сумму инвестиций</h4>
						<input class="calc_range" type="text" name="summ">
						<div class="calc_summ-invest">
							<span class="calc_summ-invest_label">Сумма:</span>
							<span class="calc_summ-invest_num"><b >1 200 000</b> руб.</span>
						</div>
						<div class="calc_summ-conclusion">
							<div class="calc_summ-year">
								<span><b class="calc_summ-year_num">2 351 569</b> руб.</span>
								<small>Сумма через <b class="calc_summ-year_month">36</b> месяцев</small>
							</div>
							<div class="calc_summ-month">
								<span><b class="calc_summ-month_num">32 000</b> руб.</span>
								<small>Ежемесячный доход</small>
							</div>
						</div>
					</div>
					<p class="calc_information-bottom">
						*Наша компания является налоговым агентом, удерживает и оплачивает НДФЛ Вся информация, размещенная на сайте, несет исключительно рекламный характер и не является публичной офертой.
					</p>
				</div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.calc -->



<?php get_footer(); ?>
