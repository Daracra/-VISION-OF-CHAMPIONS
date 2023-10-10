<header>
<div class="shadow p-2 mb-2 bg-white rounded">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url()?>" style= "font-family: 'Patua One'">
    <img src="<?php echo base_url () ?>assets/img/logoVDC1.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
    VISION DE CAMPEONES
  </a>

  <!--Menu desplegable-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <!--"ul" representa toda la fila-->
    <ul class="navbar-nav ml-auto">
      <!--"li" representa cada opcion de la fila-->
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo base_url("proyecto_controller/quienes_somos")?>"
        >Quienes somos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("proyecto_controller/videos")?>">Videos</a>
      </li>


        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ministerios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url("proyecto_controller/campeonesKids")?>">Campeones Kids</a>
          <a class="dropdown-item" href="<?php echo base_url("proyecto_controller/generadoresCambio")?>">Generadores de Cambio</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url("proyecto_controller/fundacionEsperanza")?>">Fundacion Portal de Esperanza</a>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo base_url("proyecto_controller/comercializacion")?>"
        >Comercializacion</a>
      </li>


<!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catalogos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url("proyecto_controller/catalogol")?>">Catalogo Libros</a>
          <a class="dropdown-item" href="<?php echo base_url("proyecto_controller/catalogor")?>">Catalogo Remeras</a>
        </div>
      </li>-->


      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('productos')?>" tabindex="-1" aria-disabled="true">Catalogo</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contacto')?>" tabindex="-1" aria-disabled="true">Contacto</a>
      </li>



  
     <?php if($this-> session-> userdata('login')){ ?>

      <li class="nav-item"><a class="nav-link" href= "<?php echo base_url ('carrito');?>"> Ver carrito </a></li>

      <li class="nav-item">
        <a class="nav-link" href="#"> <?php echo $this-> session-> userdata('nombre'); ?></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url ('salir')?>">Salir</a>
      </li>

    <?php } else{ ?>

      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo base_url('registrar')?>"
        >Registrarse</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo base_url('inicio_sesion')?>"
        >Login</a>
      </li>

<?php } ?>

    </ul>

     </div>
</nav>

</div>

</header>

   <!--Buscador
     <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-primary" type="submit">Buscar</button>
      </form>-->
  