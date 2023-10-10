<div class="row">
  <div class="w-100 mx-auto">
    <div style="border-radius:20px;background-color:#DCEADB;padding:20px;margin:25px 25px">
      <h1 class="text-center"; style= "font-family: 'Patua One'">Lista de Consultas</h1>
      <div class="container text-center ">
        <table class="mt-5 table table-bordered table table-striped col-12">
          <thead>

            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Asunto</th>
            <th>Mensaje</th>
          </thead>
          <tbody>
            <?php foreach ($consultas as $row) { ?>
              <tr>

                <td><?php echo $row->id_consulta;  ?></td>
                <td><?php echo $row->nombre;  ?></td>
                <td><?php echo $row->email;  ?></td>
                <td><?php echo $row->asunto;  ?></td>
                <td><?php echo $row->contenido;  ?></td>
                <?php
                if (($row->estado) == 1) { ?>
                  <td><a class="btn btn-danger" href="<?php echo base_url("consultas_controller/eliminar_consulta/$row->id_consulta"); ?>"><svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z" />
                        <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z" />
                      </svg>
                    </a></td>
                <?php } else { ?>
                  <td><a class="btn btn-success" href="<?php echo base_url("consultas_controller/activar_consulta/$row->id_consulta"); ?>"><svg class="bi bi-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                      </svg></a></td>
                      
                <?php } ?>
              </tr>


            <?php }  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>