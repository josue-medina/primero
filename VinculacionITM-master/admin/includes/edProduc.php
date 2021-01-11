<?php 
    include 'productos.php';
    $produc = new productos();
    if($_POST)
    
    switch($_POST['btnAccion']){
        case 'Agregar producto':
            $ruta='img/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$ruta);
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $precio=$_POST['precio'];
            $produc->agregarProd($nombre,$descripcion,$precio,$ruta);
            echo "<h1>Producto agregado exitosamente</h1>";
        break;
        case 'editar':
            $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $dir='img/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            echo "<h1>".$dir."<h1>";
        $produc->edProducto($id,$nombre,$descripcion,$precio,$dir);
        header("location: http://localhost/proyecto/admin ");
        break;
        case 'eliminar':
            $id=$_POST['id'];
            $produc->eliminar($id);
            echo "<h1>Usuario eliminado</h1>";
            echo "<a href='http://localhost/proyecto/admin' class='badge  badge-success'> Regresar </a>";
        break;
    }else{
        header("location: http://localhost/proyecto/admin ");
    }
?>