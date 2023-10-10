<h1 class="text-center">Listado de Libros</h1>

<div class="container">

    <table id="mytable" class="table table-bordred table-striped table-hover">
		<thead> <!--Se genera un encabezado de titulos por columnas -->
			<th>Titulo</th>
			<th>Descripcion</th>
			<th>Stock</th>
			<th>Precio</th>
			<th>Categoria</th>
			<th>Editar</th>
			<th>Activar/Eliminar</th>
		</thead
		>
		<tbody> <!-- Inicio de cuerpo de tabla -->

		<?php foreach($libro as $row) {?>  <!-- "foreach" para recorrer y generar la lista. "tr" son las filas y "td" son las columnas -->
		<tr>
			<td> <?php echo $row->libro_titulo; ?> </td>
			<td> <?php echo $row->libro_autor; ?> </td>
			<td> <?php echo $row->libro_descripcion; ?> </td>
			<td> <?php echo $row->libro_stock; ?> </td>
			<td> <?php echo $row->libro_precio; ?> </td>
			<td> <?php echo $row->categoria_desc; ?> </td>

		<td> <a class="btn btn-success" href="<?php echo base_url("libro_controller/editar_libro/$row->libro_id");?>">Editar</a></td>

		<?php

		if ( ($row->libro_estado) ==1) { ?>
			<td> <a class="btn btn-success" href="<?php echo base_url("libro_controller/eliminar_libro/$row->libro_id");?>">Eliminar</a> </td>

		<?php } else { ?>
			<td> <a class="btn btn-danger" href="<?php echo base_url("libro_controller/activar_libro/$row->libro_id");?>">Activar</a> </td> 
		<?php } ?>

		</tr>
		<?php } ?>

		</tbody>
   </table>
</div>