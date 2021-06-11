<?php 

class userModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_dore;charset=utf8', 'root', '');
    }

 //TRAE UN USUARIO MEDIANTE EL user
    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE nombre=?");
        $sentencia->execute([$user]);
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

 //TRAE UN USUARIO MEDIANTE EL ID  
    function getUserByID($id){
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE id=?");
        $sentencia->execute([$id]);
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }


 //OBTIENE TODOS LOS USUARIOS
    function getAllUsers(){
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }

 //AGREGA UN USUARIO A LA BD
    function addUserDB($user,$hash,$rol,$email){
        $query = $this->db->prepare('INSERT INTO users(nombre,email,pass,admin) VALUES (?,?,?,?)');
        $query->execute([$user,$email,$hash,$rol]);
    }

}

?>