<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    
    $user->setUser($userSession->getCurrentUser());
    if($user->getTipo()=='admin'){
        include_once 'vistas/principal.php';
    }else{
        ?>
         <div class="jumbotron">
                <div class="container">
                    <h1>No tienes permisos de administrador</h1>
                    
                    <a href='http://localhost/carrito' class='badge  badge-success'>Regresar a la tienda</a>
                </div>
                </div>
        <?php
        echo "<a href='http://localhost/proyecto/includes/logout.php' class='badge  badge-success'>Regresar </a></h1>";
    }
    
    

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        if($user->getTipo()=='admin'){
            include_once 'vistas/principal.php';
        }else{
            ?>
             <div class="jumbotron">
                <div class="container">
                    <h1>No tienes permisos de administrador</h1>
                    
                    <a href='http://localhost/carrito' class='badge  badge-success'>Regresar a la tienda</a>
                </div>
                </div>
            <?php
        }
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/sesion.php';
    }
}else{
    //echo "login";
    include_once 'vistas/sesion.php';
 
}



?>