<?php
include 'db.php';

class User extends DB{
    private $nombre;


    public function userExists($user, $pass){
        

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE correo = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function nuevoUsuario($nombre, $apellido,$correo,$contraseña){
        $query = $this->connect()->prepare('INSERT INTO `tiendap`.`usuarios` (`nombre`, `apellido`, `correo`, `password`, `tipo`) VALUES (:nom, :app, :corr,:clav,"usuario"); ');
        $query->execute(['nom'=>$nombre ,'app'=>$apellido,'corr'=>$correo,'clav'=>$contraseña ]);
                        

    }
    public function verCuentas(){
        $query = $this->connect()->prepare('SELECT * FROM usuarios');
        $query->execute();
        $lista=$query->fetchAll();
        return $lista;
    }

    public function vercomentarios(){
        $query = $this->connect()->prepare('SELECT * FROM comentarios');
        $query->execute();
        $lista=$query->fetchAll();
        return $lista;
    }

    public function edCuenta($id,$nombre,$apellido,$correo,$clave,$tipo){
        $query = $this->connect()->prepare('UPDATE `tiendap`.`usuarios` SET `nombre` = :nombre , `apellido` = :apellido , `correo` = :correo , `password` = :clave , `tipo` = :tipo WHERE `id` = :id; ');
        
        $query->execute(['id'=>$id,'nombre'=>$nombre,'apellido'=>$apellido,'correo'=>$correo,'clave'=>$clave,'tipo'=>$tipo ]);
                        

    }

    public function eliminar($id){
        $query = $this->connect()->prepare('DELETE FROM `tiendap`.`usuarios` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }
    public function eliminarCom($id){
        $query = $this->connect()->prepare('DELETE FROM `tiendap`.`comentarios` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }

    public function serVendedor($id){
        $query = $this->connect()->prepare('UPDATE `tiendap`.`usuarios` SET `tipo` = "vendedor" WHERE `id` = :id;');
        $query->execute(['id'=>$id ]);
                        

    }
    

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE correo = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->id = $currentUser['id'];
            $this->nombre = $currentUser['nombre'];
            $this->apellido = $currentUser['apellido'];
            $this->correo = $currentUser['correo'];
            $this->clave = $currentUser['password'];
            $this->tipo = $currentUser['tipo'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getId(){
        return $this->id;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getPassword(){
        return $this->clave;
    }
    public function getTipo(){
        return $this->tipo;
    }
    
}

?>