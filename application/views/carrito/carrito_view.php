<h1 class="text-center">Carrito de compras</h1>

<a href="<?php echo base_url('proyecto_controller/catalogo'); ?>" class="btn btn-success" role="button"; style="margin-left: 20px">Continuar comprando</a>

<h2 class="text-center"><?php echo $message ?></h2>

<table id="mytable" class="table table-bordred table-striped">

	<?php if($cart = $this->cart->contents()):?>

		<thead>
			<th>N° item</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Subtotal</th>
			<th>Acción</th>
		</thead>

		<tbody>

			<?php
			$i = 1;

			foreach ($cart as $item):?>

				<tr>
					<td> <?php echo $i++;?>
						
					</td>
					<td>
						<?php echo $item ['name']; ?>
					</td>
					<td>
						<?php echo $this->cart-> format_number($item ['price'],2);?>
					</td>
					<td>
						<?php echo $item ['qty']; ?>
					</td>
					<td>
						<?php echo $this->cart-> format_number($item ['subtotal'],2);?>
					</td>
					<td>
						<?php echo anchor('carrito_controller/borrar/'.$item['rowid'], 'Eliminar'); ?>
					</td>

				</tr>


			<?php endforeach; ?>

		<tr>
			<td>
				Total Compra: $<?php echo number_format($this-> cart->total(), 2); ?>
			</td>
			<td>
				<button type="button" class="btn btn-success" onclick="limpiar_carrito()">Vaciar carrito</button>
			</td>
			
			<td>
                <a href="<?php echo base_url('ventas_controller/guardar_venta') ?>" class="btn btn-success" role="button">Comprar</a>
            </td>

		</tr>

	<?php endif; ?>

		</tbody>

	</table>

	<script>
		
		function limpiar_carrito(){
			var result = confirm('Desea vaciar carrito?');
			if(result){
				window.location= "<?php echo base_url(); ?>carrito_controller/borrar/all";
			} else{
				return false; //cancela la acción
			}
		}

	</script>



			
	

