<h1 class="text-center">Registro de libros</h1>

<div class="container">

  <div class="w-50 mx-auto">

       

  <?php echo form_open_multipart('insertar_libro') ?>



  <div class="form-group">
      <label for="titulo">Título del libro</label>

      <?php echo form_input(['name'=> 'titulo', 'id'=> 'titulo', 'class'=> 'form-control', 'placeholder'=> 'Ingrese título del libro', 'value'=> set_value('titulo')]); ?>

  </div> <span class="text-danger"><?php echo form_error('título'); ?> </span>


  <div class="form-group">
      <label for="autor">Autor</label>

      <?php echo form_input(['name'=> 'autor', 'id'=> 'autor', 'class'=> 'form-control', 'placeholder'=> 'Ingrese Autor', 'value'=> set_value('autor')]); ?>

  </div> <span class="text-danger"><?php echo form_error('autor'); ?> </span>


  <div class="form-group">
      <label for="descripcion">Descripcion</label>

      <?php echo form_input(['name'=> 'descripcion', 'id'=> 'descripcion', 'class'=> 'form-control', 'placeholder'=> 'Ingrese descripcion','value'=> set_value('descripcion')]); ?>

  </div> <span class="text-danger"><?php echo form_error('descripcion'); ?> </span>


  <div class="form-group">
      <label for="stock">Stock</label>

      <?php echo form_input(['name'=> 'stock', 'id'=> 'stock', 'class'=> 'form-control', 'placeholder'=> 'Ingrese Stock','value'=> set_value('stock')]); ?>

  </div> <span class="text-danger"><?php echo form_error('stock'); ?> </span>


  <div class="form-group">
      <label for="precio">Precio</label>

      <?php echo form_input(['name'=> 'precio', 'id'=> 'precio', 'class'=> 'form-control', 'placeholder'=> 'Ingrese Precio','value'=> set_value('precio')]); ?>

  </div> <span class="text-danger"><?php echo form_error('precio'); ?> </span>


  <div class="form-group">
      <label for="imagen">Imagen</label>

      <?php echo form_input(['name'=> 'imagen', 'id'=> 'imagen', 'type'=>'file','value'=> set_value('imagen')]); ?>

  </div><span class="text-danger"><?php echo form_error('imagen'); ?> </span>



  <div class="form-group">
      <label for="categoria">Categoria</label>

      <?php 

            $lista['0'] = 'Seleccione categoria';

            foreach ($categorias as $row) {

              $lista [$row-> categoria_id] = $row-> categoria_desc;
          
            }

             echo form_dropdown('categoria', $lista, '0', 'class = "form-control" ');

             ?>
             </div> <span class="text-danger"><?php echo form_error('categoria'); ?> </span


      <div class="form-group">

    <?php echo form_submit('Agregar', 'Agregar', "class='btn btn-success'"); ?>
  </div>


<?php echo form_close();?>

</div>
</div>
