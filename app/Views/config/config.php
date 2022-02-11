
<nav  style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>/">Главная</a></li>
		<li class="breadcrumb-item active" aria-current="page">Настройки</li>
	</ol>
</nav>

<div class="container-lg px-4 py-5" id="icon-grid">
	<h2 class="pb-2 border-bottom">Настройки</h2>

	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3 py-4">

		<!--            xs            <576 px-->
		<!--            sm            ≥576 px	-->
		<!--            md            ≥768 px	-->
		<!--            lg            ≥992 px	-->
		<!--            xl            ≥1200 px	-->
		<!--            XXL-->

		<div class="col d-flex align-items-start">
			<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
			<div>
				<h4 class="fw-bold mb-0 et-cfg-head">Основные настройки</h4>
				<p class="et-cfg-body">
					Глобальные настройки разделов, таблиц, полей
				</p>
<!--				<a href="--><?php //echo base_url();?><!--/config/main" class="btn btn-primary">Перейти</a>-->
				<a href="http://et/et3/config/main" class="btn btn-primary">Перейти</a>
			</div>
		</div>

		<div class="col d-flex align-items-start">
			<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
			<div>
				<h4 class="fw-bold mb-0 et-cfg-head">Меню</h4>
				<p class="et-cfg-body">
					Верхнее меню доступа к разделам
				</p>
				<a href="#" class="btn btn-primary">Перейти</a>
			</div>
		</div>






	</div>
</div>
<!--<div class="container"><h1 class="mt-5">Sticky footer</h1><p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p><p>Use <a href="../examples/sticky-footer-navbar/">the sticky footer with a fixed navbar</a> if need be, too.</p></div>-->
