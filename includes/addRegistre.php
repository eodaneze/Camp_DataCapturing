<?php
 session_start();
 require_once('./connection.php');
  if(isset($_POST['add'])){
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    // echo $name;
    // die();
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
    $role = isset($_POST['role']) ? trim($_POST['role']) : "";

    
    if($email == "" || $password == ""){
        $_SESSION['error'] = "All fields are required";
        header('location: ../addRegistries.php');
    }else{
        // $role = 'superAdmin';
       $sql = "INSERT INTO admin(name, email, password, role)VALUES('$name', '$email', '$password', '$role')";
       $result = mysqli_query($conn, $sql);
       if($result){
            $_SESSION['success'] = "New Registre Added Successfully";
            header('location: ../addRegistries.php');
       }
    }
  }


?>