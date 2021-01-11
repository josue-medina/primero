<?php
    include_once 'head.php';
    include_once '../includes/productos.php';
    $producto = new productos();
    $prod=$producto->verProductos();

?>
<body>
<table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="15%" class="text-center">Nombre</th>
            <th width="15%" class="text-center">Descripcion</th>
            <th width="15%" class="text-center">Precio</th>
        </tr>

<?php  foreach($prod as $produ){?>
  <tr>
            <form action="../includes/edProduc.php" enctype="multipart/form-data" method="post">
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $produ['nombre'];   ?>" name="nombre" id="nombre" type="text" ></td>
            <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $produ['descripcion'];   ?>" name="descripcion" id="descripcion" type="text" ></td>
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $produ['precio'];   ?>" name="precio" id="precio" type="text" > </td>
            <td width="15%" class="text-center">
												<input class="btn btn-primary"  name="imagen" id="imagen" type="file">
                                            </td>
            <td width="15%" class="text-center">
          <input type="hidden" name="id" id="id" value="<?php echo $produ['id']?>">
          <input type="hidden" name="dir" id="dir" value="<?php echo $produ['img']?>">
          <button class="btn btn-primary" 
              name="btnAccion" 
              value="editar" 
              type="submit">Editar
              </button>
              <button class="btn btn-warning" 
              name="btnAccion" 
              value="eliminar" 
              type="submit">eliminar
              </button>
          </form>
          </td>
            <tr>
            <td></td>
        </tr>
        <tr>  
        </tr>
        <?php } ?>
        
          
           
    </tbody>
</table>
<?php include_once 'nuevo.php'; ?>
</body>
 