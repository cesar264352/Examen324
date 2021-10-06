<?php include "encabezado.inc.php";?>
<div class="container">

<div class="encabezado">
	<h1 class="text-primary mt-3">Lista de Docente</h1>
	<div class="row">
		<div class="col-8">
			<form method="GET">
				<table class="table mt-3">
					<thead class="bg-light">
						<tr>
							<th>Usuario</th>
							<th>Nombre</th>
							<th>Paterno</th>
							<th>Materno</th>
							<th>Cambios</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$contador=0;
					foreach ($docentes as $docente) {
						echo '
						<tr>
							<td>'.$docente->usuario.'</td>
							<td>'.$docente->nombre.'</td>
							<td>'.$docente->paterno.'</td>
							<td>'.$docente->materno.'</td>
							<td>
								<a href="'.base_url('index.php/Lectura2/editar?id=').$docente->ci.'" class="btn btn-primary"><i class="fas fa-edit"></i></a>
								<a href="'.base_url('index.php/Lectura2/borrar?id=').$docente->ci.'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>	
							</td>
						</tr>';
						$contador++;
					}
					 ?>				
					</tbody>
				</table>
			</form>
		</div>
		<div class="col-4">
			<div class="card ">
    		<div class="card-body">
    			<h4 class="card-title text-primary pt-2 pb-4">Nuevo docente</h4>
    			<form action="<?php echo base_url('index.php/Lectura2/save')?>" method="POST">
				<div class="row">
					<div class="col-6">
		  				<!-- columna 1 -->
		  				<div class="form-group pt-3">
							<label for="fname">Carnet de identidad:</label>
							<input type="text" class="form-control" placeholder="000" name="ci" required>
						</div>
						<div class="form-group pt-3">
							<label for="fname">Apellido Paterno:</label>
							<input type="text" class="form-control" placeholder="Ap. Paterno" name="paterno" required>
						</div>
						<div class="form-group pt-3">
							<label for="fname">Fecha nacimiento:</label>
							<input type="date" class="form-control" name="f_nacimiento" required>
						</div>
						<div class="form-group pt-3">
							<label for="fname">Usuario:</label>
							<input type="text" class="form-control" name="usuario" value="<?php echo 'doc'.($contador+1);?>" placeholder="<?php echo 'doc'.($contador+1);?>" readonly>
						</div>
					</div>
					<div class="col-6">
		  				<!-- columna 2 -->
		  				<div class="form-group pt-3">
							<label for="fname">Nombre:</label>
							<input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
						</div>
						<div class="form-group pt-3">
							<label for="fname">Apellido Materno:</label>
							<input type="text" class="form-control" placeholder="Ap. Materno" name="materno" required>
						</div>
		  				<div class="form-group pt-3">
							<label for="fname">Departamento:</label>
							<select id="dpto" name="dpto" class="form-select">
								<option selected>Selecciona</option>
							    <option value="01">CHUQUISACA</option>
							    <option value="02">LA PAZ</option>
							    <option value="03">COCHABAMBA</option>
							    <option value="04">ORURO</option>
							    <option value="05">POTOSI</option>
							    <option value="06">TARIJA</option>
							    <option value="07">SANTA CRUZ</option>
							    <option value="08">BENI</option>
							    <option value="09">PANDO</option>
							</select>
						</div>
						<div class="form-group pt-3">
							<label for="fname">Contraseña:</label>
							<input type="password" class="form-control" name="password" required>
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
			<!-- formulario -->
			
		</div>
		
	</div>
	
</div>

</div>
<?php include 'footer.inc.php'; ?>