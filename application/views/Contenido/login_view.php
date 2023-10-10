<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Login</li>
  </ol>
</nav>



<h1 class="text-center" >Login</h1>

<div class="container">
  
  <div class="w-50 mx-auto">


    <span class="text-danger font-weight-bold"><?php echo validation_errors(); ?></span>

    <?php echo form_open('ingresar'); ?>

    <div class="form-group">
      <label for="mail">Ingrese usuario</label>
      <?php echo form_input(['name' => 'mail','id' => 'mail', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'ingrese email', 'value' => set_value('mail')]); ?>
    </div>
    <div class="form-group">
      <label for="password">Ingrese contraseña</label>
      <?php echo form_input(['name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'ingrese password', 'value' => set_value('password')]); ?>
    </div>


    <div class="form-group">
      <?php echo form_submit('Ingresar','Ingresar', "class='btn  btn-success'");
      ?>
    </div>

    <?php echo form_close();?>
  </div>
</div>
 

<!-- 
<section class="container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" style="margin-bottom: 50px" class="btn btn-primary">Ingresar</button>
</form>
</section>-->