<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contacto</li>
  </ol>
</nav>


  <div class="row">
        <div class="col-sm-4"; style="margin-left: 40px">
            <?php echo validation_errors(); ?>


            <?php echo form_open('consultar'); ?>

            <div class="form-group">
              <label for="validationCustom01">Nombre/s</label>
                <label for="nombre" class="text-white font-weight-bold">Ingrese su Nombre</label>

                <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'autofocus' => 'autofocus', 'value' => set_value('nombre')]); ?>

            </div> <span class="text-danger"><?php echo form_error('nombre'); ?> </span>

            <div class="form-group">
              <label for="exampleFormControlInput1">Direccion Email</label>
                <label for="mail" class="text-white font-weight-bold">Ingrese su Correo Electrónico</label>
                <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Ingrese Email', 'value' => set_value('mail')]); ?>
            </div>


            <div class="form-group">
               <label for="exampleFormControlInput1">Asunto</label>
                <label for="asunto" class="text-white font-weight-bold">Ingrese Asunto de la Consulta</label>
                <?php echo form_input(['name' => 'asunto', 'id' => 'asunto', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ingrese Asunto', 'value' => set_value('asunto')]); ?>
            </div>

            <div class="form-group">
               <label for="exampleFormControlInput1">Consulta</label>
                <label for="contenido" class="text-white font-weight-bold">Ingrese su Consulta</label>
                <?php echo form_input(['name' => 'contenido', 'id' => 'contenido', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ingrese Contenido', 'value' => set_value('contenido')]); ?>
            </div>

            <div class="form-group">
                <?php $submitJS = 'onClick="submitSuccess()"'; ?>
                <!-- Deberia llamarse a la funcion solamente si la consulta fue realmente realizada, es decir, si no hubo errores -->
                <?php echo form_submit('Enviar Consulta', 'Enviar Consulta', "class='btn  btn-success', $submitJS"); ?>
            </div>

            <?php echo form_close(); ?>
        <div class="col-sm-4"></div>
    </div>
  

<div class="col-md-7"; style="margin-left: 5px">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.976636263073!2d-58.82434458527797!3d-27.469986723291154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b5e01d2a65b%3A0x5d9562a9b257e1c8!2sIglesia%20Visi%C3%B3n%20de%20Campeones!5e0!3m2!1ses!2sar!4v1618791526549!5m2!1ses!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  

         </div>        

</div>








<!--<section class="container">
   <?php echo validation_errors(); ?>


            <?php echo form_open('consultar'); ?>
	
	<div class="row">
		

         <div class="col-md-4">

         	<form>


                 <div class="row">
                 <div class="col">
    	            <label for="validationCustom01">Nombre/s</label>
                    <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'autofocus' => 'autofocus', 'value' => set_value('nombre')]); ?>

                 </div><span class="text-danger"><?php echo form_error('nombre'); ?> </span>


                 <div class="col">
     	            <label for="validationCustom02">Apellido/s</label>
                    <?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control', 'placeholder' => 'Ingrese Apellido', 'autofocus' => 'autofocus', 'value' => set_value('apellido')]); ?>
                 </div>c
                 </div>


                <div class="form-group">
                   <label for="exampleFormControlInput1">Direccion Email</label>
                   <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Ingrese Email', 'value' => set_value('mail')]); ?>
                </div><span class="text-danger"><?php echo form_error('emial'); ?> </span>

                <div class="form-group">
                   <label for="exampleFormControlSelect1">Motivo de la consulta</label>
                   <select class="form-control" id="exampleFormControlSelect1">
                      <option>1- Consejeria Pastoral</option>
                      <option>2- Fundacion Portal de Esperanza</option>
                      <option>3- Generacion Kids</option>
                      <option>4- Generadores de Cambio</option>
                      <option>5- Compras</option>
                      <option>6- Otros</option>
                   <?php echo form_input(['name' => 'motivoconsulta', 'id' => 'motivoconsulta', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ingrese Motivo Consulta', 'value' => set_value('motivoconsulta')]); ?>
                   </select>
                </div><span class="text-danger"><?php echo form_error('motivoconsulta'); ?> </span>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ingrese su consulta</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    <?php echo form_input(['name' => 'consulta', 'id' => 'consulta', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ingrese Consulta', 'value' => set_value('consulta')]); ?></textarea>
                </div><span class="text-danger"><?php echo form_error('consulta'); ?> </span>

                <div class="form-group">
                <?php $submitJS = 'onClick="submitSuccess()"'; ?>
                 Deberia llamarse a la funcion solamente si la consulta fue realmente realizada, es decir, si no hubo errores 
                <?php echo form_submit('Enviar Consulta', 'Enviar Consulta', "class='btn  btn-success', $submitJS"); ?>
            </div>


           </form>
	

         </div> 

         
<?php echo form_close(); ?>-->

     

