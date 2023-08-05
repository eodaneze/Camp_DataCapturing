<?php
session_start();
require_once('./connection.php');
  if(isset($_POST['add'])){
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $master = isset($_POST['master']) ? $_POST['master'] : "";
    $cat = isset($_POST['cat']) ? $_POST['cat'] : "";
    

    
    if($name == "" || $master == "" || $cat == ""){
        $_SESSION['error'] = "All fields are required";
        header('location: ../addHostels.php');
        return false;
    }else{
        $sql = "INSERT INTO  hostels(name, master, cat)VALUES('$name', '$master', '$cat')";
        $result = mysqli_query($conn, $sql);

        if($result){
          $_SESSION['success'] = "New Hostel added successfully";
          header('location: ../addHostels.php');
        }else{
            $_SESSION['error'] = "error adding hostel";
          header('location: ../addHostels.php');
        }
    }
  }

?>