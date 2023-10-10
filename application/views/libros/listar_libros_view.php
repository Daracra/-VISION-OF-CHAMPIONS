
<h1 class="text-center mt-2"; style="margin: 20px 50px">Catálogo de Libros</h1> 


 <div class="container">
  <div class="row">

<?php foreach($libro as $row) { ?>

<div class="col-md-3"; style="margin-bottom: 20px">
<div class="card text-center"; style="padding-top:20px">

<img class = "mx-auto" src="<?php echo base_url('/uploads/') . $row->libro_imagen?>" height="200" width="140" alt="Card image cap">

<div class="card-body">

  <h5 class="card-title"><?php echo $row->libro_titulo; ?></h5>
  <p class="card-text"><?php echo $row->libro_descripcion; ?></p>
  <p class="card-text"><?php echo "$"; echo $row->libro_precio; ?> </p>

<?php
       if($this->session->userdata('login')){
        echo form_open('carrito_controller/agregar_carrito'); 
        echo form_hidden('id', $row->libro_id);
        echo form_hidden('titulo', $row->libro_titulo);
        echo form_hidden('precio', $row->libro_precio);
        echo form_submit('comprar','agregar al carrito', "class='btn btn-success'");
        echo form_close();
}?>

<hr>

</div>
</div>
</div>

<?php } ?>

</div></div>
     