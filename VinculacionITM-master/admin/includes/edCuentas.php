<?php 
    include 'user.php';
    include '../vistas/headUn.php';
    $user = new User();
    if($_POST){
        switch($_POST['btnAccion']){
            case 'agregar':
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $correo=$_POST['correo'];
                $clave=$_POST['password'];
                $tipo=$_POST['tipo'];
                $user->edCuenta($id,$nombre,$apellido,$correo,$clave,$tipo);
                header("location: http://localhost/proyecto/admin ");
            break;
            case 'eliminar':
                $id=$_POST['id'];
                $user->eliminar($id);?>
                 <div class="jumbotron">
                <div class="container">
                    <h1>Usuario eliminado</h1>
                    
                    <a href='http://localhost/carrito/admin/vistas/admCuentas.php' class='badge  badge-success'>Regresar a la tienda</a>
                </div>
                </div><?php
            break;
            case 'comenEli':
                $id=$_POST['id'];
                $user->eliminar($id);
                ?>
                <div class="jumbotron">
               <div class="container">
                   <h1>Comentario  eliminado</h1>
                   
                   <a href='http://localhost/carrito/admin/vistas/comentarios.php' class='badge  badge-success'>Regresar a la tienda</a>
               </div>
               </div><?php
            break;
        }
        
    }else{
      header("location: http://localhost/proyecto/admin ");
    }
?>