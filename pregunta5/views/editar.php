<?php include "encabezado.inc.php";
// print_r($docente);

foreach ($docente as $dato) {
	$ci = $dato->ci;
	$nombre = $dato->nombre;
	$paterno = $dato->paterno;
	$materno = $dato->materno;
	$f_nacimiento = $dato->f_nacimiento;
	$usuario = $dato->usuario;
	$password = $dato->password;
	$dpto = $dato->departamento_fk;
}

?>

<div class="container">

<div class="encabezado">
	<h1 class="text-primary mt-3">Editar Docente</h1>
	<div class="row">
		<div class="card ">
    		<div class="card-body">
    			
    			<form action="<?php echo base_url('index.php/Lectura2/actualizar')?>" method="POST">
					<div class="row">
						<div class="col-6">
			  				<!-- columna 1 -->
			  				<div class="form-group pt-3">
								<label for="fname">Carnet de identidad:</label>
								<input type="text" class="form-control" placeholder="12345678" name="ci" readonly value="<?php echo $ci?>">
							</div>
							<div class="form-group pt-3">
								<label for="fname">Apellido Paterno:</label>
								<input type="text" class="form-control" placeholder="Ap. Paterno" name="paterno" required value="<?php echo $paterno?>">
							</div>
							<div class="form-group pt-3">
								<label for="fname">Fecha nacimiento:</label>
								<input type="date" class="form-control" name="f_nacimiento" required value="<?php echo $f_nacimiento?>">
							</div>
							<div class="form-group pt-3">
								<label for="fname">Usuario:</label>
								<input type="text" class="form-control" name="usuario" placeholder="" readonly value="<?php echo $usuario?>">
							</div>
						</div>
						<div class="col-6">
			  				<!-- columna 2 -->
			  				<div class="form-group pt-3">
								<label for="fname">Nombre:</label>
								<input type="text" class="form-control" placeholder="Nombre" name="nombre" required value="<?php echo $nombre?>">
							</div>
							<div class="form-group pt-3">
								<label for="fname">Apellido Materno:</label>
								<input type="text" class="form-control" placeholder="Ap. Materno" name="materno" required value="<?php echo $materno?>">
							</div>
			  				<div class="form-group pt-3">
								<label for="fname">Departamento:</label>

								<select id="dpto" name="dpto" class="form-select" >
									<?php 
									$seleccion = 'selected';
									if ($dpto=='01') {
										echo '<option value="01" '.$seleccion.'>CHUQUISACA</option>';
									}else echo '<option value="01">CHUQUISACA</option>';
									if ($dpto=='02') {
										echo '<option value="02" '.$seleccion.'>LA PAZ</option>';
									}else echo '<option value="02">LA PAZ</option>';
									if ($dpto=='03') {
										echo '<option value="03" '.$seleccion.'>COCHABAMBA</option>';
									}else echo '<option value="03">COCHABAMBA</option>';
									if ($dpto=='04') {
										echo '<option value="04" '.$seleccion.'>ORURO</option>';
									}else echo '<option value="04">ORURO</option>';
									if ($dpto=='05') {
										echo '<option value="05" '.$seleccion.'>POTOSI</option>';
									}else echo '<option value="05">POTOSI</option>';
									if ($dpto=='06') {
										echo '<option value="06" '.$seleccion.'>TARIJA</option>';
									}else echo '<option value="06">TARIJA</option>';
									if ($dpto=='07') {
										echo '<option value="07" '.$seleccion.'>SANTA CRUZ</option>';
									}else echo '<option value="07">SANTA CRUZ</option>';
									if ($dpto=='08') {
										echo '<option value="08" '.$seleccion.'>BENI</option>';
									}else echo '<option value="08">BENI</option>';
									if ($dpto=='09') {
										echo '<option value="09" '.$seleccion.'>PANDO</option>';
									}else echo '<option value="09">PANDO</option>';
									 ?>
								    
								</select>
							</div>
							<div class="form-group pt-3">
								<label for="fname">Contraseña:</label>
								<input type="password" class="form-control" name="password" required value="<?php echo $password?>">
							</div>
						</div>
						
					</div>
					
					<div class="row p-3 border-top-1 align-content-end">
						<button class="btn btn-success" type="submit">
							<i class="fas fa-user-plus"></i> REGISTRAR DOCENTE
					 	</button>
					</div> 
				</form>	
    		</div>
  		  </div>
		
	</div>
	
</div>

</div>
<?php include 'footer.inc.php'; ?>