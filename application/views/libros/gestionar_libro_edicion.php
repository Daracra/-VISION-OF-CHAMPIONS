<h1 class="text-center"> Edicion de Libros</h1>

<div class="container">
	<div class="w-50 mx-auto">

		<?php echo form_open_multipart("libro_controller/actualizar_libro/$libro_id");?>

			<div class="form-group">
				<label for="titulo">Titulo</label>
				<?php echo form_input(['name' => 'titulo', 'id' => 'titulo','class' => 'form-control','autofocus'=>'autofocus','value'=> "$titulo"]); ?>
			</div><span class="text-danger"><?php echo form_error('titulo'); ?> </span>

			<div class="form-group">
				<label for="titulo">Descripcion</label>
				<?php echo form_input(['name' => 'descripcion', 'id' => 'descripcion','class' => 'form-control','value'=> "$descripcion"]); ?>
			</div><span class="text-danger"><?php echo form_error('descripcion'); ?> </span>

			<div class="form-group">
				<label for="titulo">Stock</label>
				<?php echo form_input(['name' => 'stock', 'id' => 'stock','class' => 'form-control','value'=> "$stock"]); ?>
			</div><span class="text-danger"><?php echo form_error('stock'); ?> </span>

			<div class="form-group">
				<label for="precio">Precio</label>
				<?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control', 'value'=>"$precio"]); ?>
			</div> <span class="text-danger"><?php echo form_error('precio'); ?> </span>

			<div class="form-group">
                        <img src="<?php echo base_url('/uploads/') . $imagen ?>" height="100" width="100" />
                        <label for="imagen">Imagen del producto</label>
                        <?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'type' => 'file', 'value' => 'set_value'('imagen')])  ?><span class="text-danger text-uppercase"><?php echo form_error('imagen'); ?> </span>
                    </div>




			<div class="form-group">
				<label for="categoria">Categoria</label>
				<?php
				$lista['O'] = 'Seleccione categoría';
				foreach($categorias as $row) {
				  $lista[$row->categoria_id] = $row->categoria_desc;
			    }
				echo form_dropdown('categoria', $lista,'0','class="form-control"');
				?>
			</div>

			<span class="text-danger"><?php echo form_error('categoria'); ?> </span>

			<div class="form-group">
				<?php echo form_submit('Modificar', 'Modificar',"class='btn btn-success'"); ?>
			</div>

		<?php echo form_close();?>

	</div>
</div>