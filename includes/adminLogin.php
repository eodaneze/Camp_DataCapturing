<?php
session_start();
require_once('./connection.php');
  if(isset($_POST['login'])){ 
     $email = isset($_POST['email']) ? trim($_POST['email']) : ""; 
     $password = isset($_POST['password']) ? trim($_POST['password']) : ""; 
   //   $hashPassword = md5(sha1($password));
    
    //  $conpassword = $_POST['conpassword'];  
     
     if($email == "" || $password == ""){
        $_SESSION['error'] = "All fields are required";
        header('location: ../index.php');
         
     }else{
        //  $hashed_password  = md5($password);
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password ='$password' ";
        $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       $row = mysqli_fetch_assoc($result);
       $role = $row['role'];
       $name = $row['name'];
    //    session_start();
       $_SESSION['adminId'] = $row['id'];
       

       if(isset($_SESSION['adminId'])){
           if($row['role'] == "SuperAdmin"){

               $_SESSION['success'] = "You have logged in successfully";
               header('location: ../adminPanel.php');
               exit();
           }else{
                $_SESSION['success'] = "Welcome ${name}, your role is ${role}";
                header('location: ../register.php');
                exit();
           }
       }else{
        $_SESSION['error'] = "Email or password is incorrect"; 
        header('location: ../index.php');
        exit();
       }
     }else{
        $_SESSION['error'] = "User Not Found"; 
        header('location: ../index.php');
        exit();
     }
    }
}else{
echo "error";
}

    ?>