<?php
include_once 'headUn.php';

?>
    <div class="container" style="margin-top:40px" >
		<div class="row">
			<div class="col-11" >
				<div class="panel panel-default"  >
					<div class="panel-heading">
						<h1> Inicia sesion para continuar</h1>
					</div>
					<div class="panel-body">
						<form role="form" action="" method="post">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Correo electronico" name="username" id="" type="text" required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>

												<input class="form-control" placeholder="Contraseña" name="password" id="password"   type="password" value="" required>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" 
											type="submit" 
        									name="btnAccion"
        									value="Iniciar sesion">
										</div>
									<div class="panel-footer ">
										¿No tienes cuenta?  <a href="vistas/registro.php" onClick=""> Registrate </a>
									</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					
                </div>
			</div>
		</div>
	</div>
	<?php
  include_once 'foot.php';
  ?>