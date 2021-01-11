<div class="container" style="margin-top:40px" >
		<div class="row">
			<div class="col-11" >
				<div class="panel panel-default"  >
					<div class="panel-heading">
						<h1>Agregar un producto</h1>
					</div>
					<div class="panel-body">
						<form role="form" enctype="multipart/form-data" action="../includes/edProduc.php" method="POST">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">

										<div class="form-group">
                                        <strong> Nombre del producto </strong>
											<div class="input-group">
												<input class="form-control" placeholder="Ingresa el nombre que se va a mostrar" name="nombre" id="nombre" type="text" required>
											</div>
                                        </div>

                                        <div class="form-group">
                                        <strong> Descripcion del producto </strong>
											<div class="input-group">
												<input class="form-control" placeholder="Agrega una descripcion de tu producto" name="descripcion" id="descripcion" type="text">
											</div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <strong> Precio por unidad</strong>
											<div class="input-group">
												<input class="form-control" placeholder="Agrega el precio de tu producto" name="precio" id="precio" type="text" required>
											</div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <strong> Imagen </strong>
											<div class="input-group">
												<input class="btn btn-primary"  name="imagen" id="imagen" type="file">
											</div>
										</div>
										
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" 
											type="submit" 
        									name="btnAccion"
        									value="Agregar producto">
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
  include "foot.php";
  ?>