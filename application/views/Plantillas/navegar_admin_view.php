<header class="container-fluid bg-dark">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
		<a class="navbar-brand" style= "font-family: 'Patua One'" href="<?php echo base_url ('administrador') ?>">Mi empresa</a>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button


		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('listarCons') ?>">Ver consultas</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('listarVen') ?>">Listar Ventas</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('agregar') ?>">Registrar libro</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('gestionar') ?>">Gestinar libros</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo $this-> session-> userdata ('nombre'); ?>"></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url ('salir') ?>">Salir</a>
				</li>

			</ul>

		</div>

	</nav>
</header>

