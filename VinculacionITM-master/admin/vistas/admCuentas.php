<?php
    include_once 'head.php';
    include_once '../includes/user.php';
    include_once '../includes/user_session.php';
    $userSession = new UserSession();
    $user = new User();

$user->setUser($userSession->getCurrentUser());
$cuentas=$user->verCuentas();
?>

<br>
   
<h1><?php echo $user->getNombre();?></h1> <br> <h2>Para hacer un cambio llena los campos y selecciona "editar" para  agregar los datos correspondientes</h2><br>
 <div class="row">

 <body>
 <table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="15%" class="text-center">Nombre</th>
            <th width="15%" class="text-center">Apellido</th>
            <th width="15%" class="text-center">Correo</th>
            <th width="15%" class="text-center">Contraseña</th>
            <th width="15%" class="text-center">Tipo</th>
        </tr>

<?php  foreach($cuentas as $usuarios){?>
  <tr>
            <form action="../includes/edCuentas.php" method="post">
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $usuarios['nombre'];   ?>" name="nombre" id="nombre" type="text" ></td>
            <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $usuarios['apellido'];   ?>" name="apellido" id="apellido" type="text" ></td>
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $usuarios['correo'];   ?>" name="correo" id="correo" type="text" > </td>
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $usuarios['password'];   ?>" name="password" id="password" type="text" > </td>
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $usuarios['tipo'];   ?>" name="tipo" id="tipo" type="text" ></td>
            <td width="15%" class="text-center"> 
          <input type="hidden" name="id" id="id" value="<?php echo $usuarios['id']?>">
          <button class="btn btn-primary" 
              name="btnAccion" 
              value="agregar" 
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