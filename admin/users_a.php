<?php 
    include("../includes/db.php");
    include("../includes/functions.php");
      
    $accion = $_GET['ac'] ;
   
    switch($accion){

        case 1:
            //SQL Insertar
            $id = trim($_POST['id']);
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $email = trim($_POST['email']);


            $db->query("INSERT INTO users(id, username, password, email) 
            VALUES(?,?,?,?)", array($id, $username, $password, $email));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:users_r.php");
            break;
        
        case 2:
            //SQL Actualizar 
  
            $id=$_POST['id']; 
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $email = trim($_POST['email']);


            $db->query("UPDATE users SET id = ?, username = ?, password = ?, email = ? 
             WHERE id = ?", array($id, $username, $password, $email , $id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:users_r.php");

            break; 
        
        case 3:
            //SQL eliminar
            $id=$_GET['id']; 
            $db->query("DELETE FROM users WHERE id = ?", array($id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location: users_r.php");
            break; 
            
        default:  

    }
?>
