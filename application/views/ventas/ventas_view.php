<div class="row">
  <div class="w-100 mx-auto">
    <div style="border-radius:30px;background-color:#DCEADB ;padding:20px; margin: 25px 25px 25px 25px">
      <h1 class="text-center"; style= "font-family: 'Patua One'"> Lista de Ventas </h1>
      <div class="container text-center ">
        <table class="mt-5 table table-bordered border-primary table-dark table-striped col-12">
          <thead>

            <th>ID venta</th>
            <th>ID cliente</th>
            <th>Nombre Cliente</th>
            <th>Fecha venta</th>
            <th>Ver detalles</th>
          </thead>
          <tbody>
            <?php foreach ($venta as $row) { ?>
              <tr>
                <td><?php echo $row->venta_id; ?></td>
                <td><?php echo $row->id_cliente; ?></td>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->venta_fecha;  ?></td>
                <td><a href="<?php echo base_url("ventas_controller/detalle_ventas/$row->venta_id"); ?>" class="btn btn-success" role="button" style="background-color: #1E850C ">Ver detalles</a></td>
              </tr>

            <?php }  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


