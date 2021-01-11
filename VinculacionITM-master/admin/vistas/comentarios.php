<?php
    include_once 'head.php';
    include_once '../includes/user.php';
    include_once '../includes/user_session.php';
    $userSession = new UserSession();
    $user = new User();


$comentarios=$user->verComentarios();
?>

<br>
   
<h1><?php echo $user->getNombre();?></h1> <br> <h2>Para hacer un cambio llena los campos y selecciona "editar" para  agregar los datos correspondientes</h2><br>
 <div class="row">

 <body>
 <table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="15%" class="text-center">Num</th>
            <th width="15%" class="text-center">Comentario</th>
            <th width="15%" class="text-center">fecha</th>
        </tr>

<?php  foreach($comentarios as $comentario){?>
  <tr>
            <form action="../includes/edCuentas.php" method="post">
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $comentario['id'];   ?>" name="id" id="id" type="text" ></td>
            <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $comentario['comentario'];   ?>" name="apellido" id="apellido" type="text" ></td>
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $comentario['fecha'];   ?>" name="correo" id="correo" type="text" > </td>
            <td width="15%" class="text-center"> 
          <input type="hidden" name="id" id="id" value="<?php echo $usuarios['id']?>">

              <button class="btn btn-warning" 
              name="btnAccion" 
              value="comenEli" 
              type="submit">eliminar
              </button>
          </form>
          </td>
            <tr>
        
        <?php } ?>
        
          
            <td></td>
        </tr>
        <tr>  
        </tr>
    </tbody>
</table>

    

<body>
  
    <?php
  include_once 'foot.php';
  ?>