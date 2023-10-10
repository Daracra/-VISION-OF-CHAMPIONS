<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrarse</li>
  </ol>
</nav>

<h1 class="text-center">Registro de usuario</h1>

<div class="container">

  <div class="w-50 mx-auto">

       <?php echo validation_errors(); ?>

  <?php echo form_open('registrar'); ?>



  <div class="form-group">
      <label for="categoria" class="text-primary font-weight-bold">Ingrese Apellido/s</label>

      <?php echo form_input(['name'=> 'apellido', 'id'=> 'apellido', 'class'=> 'form-control', 'placeholder'=> 'Ingrese Apellido', 'autofocus'=> 'autofocus', 'value'=> set_value('apellido')]); ?>

  </div> <span class="text-danger"><?php echo form_error('apellido'); ?> </span>


  <div class="form-group">
      <label for="nombre">Ingrese Nombre/s</label>

      <?php echo form_input(['name'=> 'nombre', 'id'=> 'nombre', 'class'=> 'form-control', 'placeholder'=> 'Ingrese Nombre', 'value'=> set_value('nombre')]); ?>

  </div> <span class="text-danger"><?php echo form_error('nombre'); ?> </span>


  <div class="form-group">
      <label for="mail">Ingrese su correo electrónico</label>

      <?php echo form_input(['name'=> 'mail', 'id'=> 'mail', 'type'=> 'email','class'=> 'form-control', 'placeholder'=> 'Ingrese Email','value'=> set_value('mail')]); ?>

  </div> <span class="text-danger"><?php echo form_error('mail'); ?> </span>

  <div class="form-group">
      <label for="telefono">Ingrese un telefono de contacto</label>

      <?php echo form_input(['name'=> 'telefono', 'id'=> 'telefono', 'type'=> 'text','class'=> 'form-control', 'placeholder'=> 'Ingrese Telefono','value'=> set_value('telefono')]); ?>

  </div> <span class="text-danger"><?php echo form_error('telefono'); ?> </span>

  <div class="form-group">
      <label for="password">Ingrese contraseña</label>

      <?php echo form_input(['name'=> 'password', 'id'=> 'password', 'type'=> 'password','class'=> 'form-control', 'placeholder'=> 'Ingrese Password','value'=> set_value('password')]); ?>

  </div> <span class="text-danger"><?php echo form_error('password'); ?> </span>

  <div class="form-group">
      <label for="passconf">Repetir contraseña</label>

      <?php echo form_input(['name'=> 'passconf', 'id'=> 'passconf', 'type'=> 'password','class'=> 'form-control', 'placeholder'=> 'Repetir contraseña','value'=> set_value('passconf')]); ?>

  </div>

  <div class="form-group">

    <?php echo form_submit('Registrarme', 'Registrarme', "class='btn btn-success'"); ?>
  </div>


<?php echo form_close();?>

</div>
</div>




<!--    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
    </div>
    <div class="form-group col-md-6">
      <label>Ingrese Nombre/s</label>
      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
    </div>
  </div>
  <div class="form-group col-md-6">
      <label>Ingrese telefono de contacto</label>
      <input type="text" class="form-control" aria-label="Last name">
    </div>
  <div class="form-group">
    <label for="inputEmail4">Ingrese correo electronico</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Ingrese e-mail">
  <div class="form-group">
    <label for="inputPassword4">Ingrese contraseña</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="form-group">
    <label for="inputPassword4">Repetir contraseña</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Provincia</label>
      <select id="inputState" class="form-control">
        <option selected>Corrientes</option>
        <option>Buenos Aires</option>
        <option>Catamarca</option>
        <option>Chaco</option>
        <option>Chubut</option>
        <option>Córdoba</option>
        <option>Entre Ríos</option>
        <option>Formosa</option>
        <option>Jujuy</option>
        <option>La Pampa</option>
        <option>La Rioja</option>
        <option>Mendoza</option>
        <option>Misiones</option>
        <option>Neuquén</option>
        <option>Río Negro</option>
        <option>Salta</option>
        <option>San Juan</option>
        <option>San Luis</option>
        <option>Santa Cruz</option>
        <option>Santa Fe</option>
        <option>Santiago del Estero</option>
        <option>Tierra del Fuego</option>
        <option>Tucumán</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Codigo postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" style="margin-bottom: 50px" class="btn btn-primary">Registrarse</button>
</form>
</section> -->