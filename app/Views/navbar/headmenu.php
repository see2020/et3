<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">ET3</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsmain" aria-controls="navbarsmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsmain">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Главная</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled">Disabled</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="tables" data-bs-toggle="dropdown" aria-expanded="false">Таблицы</a>
					<ul class="dropdown-menu" aria-labelledby="tables">
						<li><a class="dropdown-item" href="<?php echo base_url();?>/">таблица 1 (table_1)</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url();?>/">таблица 2 (table_2)</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url();?>/">таблица ... (table_...)</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="system" data-bs-toggle="dropdown" aria-expanded="false">Ситема</a>
					<ul class="dropdown-menu" aria-labelledby="system">
						<li><a class="dropdown-item" href="<?php echo base_url();?>/">Главное меню</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url();?>/config">Настройки</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url();?>/">Пользователи</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dev_link" data-bs-toggle="dropdown" aria-expanded="false">dev link</a>
					<ul class="dropdown-menu" aria-labelledby="dev_link">
						<li><a class="dropdown-item" href="<?php echo base_url();?>/home/tst">http://et/et3/home/tst</a></li>
						<li><a class="dropdown-item" href="https://codeigniter.com/user_guide/models/model.html">https://codeigniter.com/user_guide/models/model.html</a></li>
						<li><a class="dropdown-item" href="https://bootstrap5.ru/docs/getting-started/introduction">https://bootstrap5.ru/docs/getting-started/introduction</a></li>
						<li><a class="dropdown-item" href="https://bootstrap-4.ru/docs/5.1/customize/components/">https://bootstrap-4.ru/docs/5.1/customize/components/</a></li>
						<li><a class="dropdown-item disabled" href="#">Another action</a></li>
						<li><a class="dropdown-item active" href="#">Another action 1</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
						<li><a class="dropdown-item" href="javascript:void(0);" onclick="alert('!!!')">alert('!!!')</a></li>
					</ul>
				</li>


			</ul>
			<form>
				<input class="form-control" type="text" placeholder="Search" aria-label="Search">
			</form>
		</div>
	</div>
</nav>

