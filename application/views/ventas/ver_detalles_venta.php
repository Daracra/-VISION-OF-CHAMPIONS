<div class="row">
    <div class="w-50 mx-auto">
        <div style="border-radius:20px;background-color:#B0BFAA;padding:20px; margin: 25px 25px">
            <h1 class="text-center">Detalles de la venta</h1>
            <div class="container text-center ">
                <table class="mt-5 table table-bordered table-dark col-12">
                    <thead>

                        <th>ID Venta</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                    </thead>
                    <tbody>
                        <?php foreach ($detalle_venta as $row) { ?>
                            <tr>

                                <td><?php echo $row->id_venta;  ?></td>
                                <td><?php echo $row->libro_titulo;  ?></td>
                                <td><?php echo $row->detalle_cantidad;  ?></td>
                                <td><?php echo $row->detalle_precio;  ?></td>
                                <td><?php echo $row->detalle_precio * $row->detalle_cantidad;  ?></td>
                            </tr>


                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>