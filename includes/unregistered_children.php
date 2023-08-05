<?php
session_start();
require_once('./connection.php');
  if(isset($_POST['register'])){
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $sgroup = isset($_POST['sgroup']) ? $_POST['sgroup'] : "";
    $pgroup = isset($_POST['pgroup']) ? $_POST['pgroup'] : "";
    $hostel = isset($_POST['hostel']) ? $_POST['hostel'] : "";
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $non_indigenes = isset($_POST['non-indigenes']) ? $_POST['non-indigenes'] : "";

    
    if($name == "" || $sgroup == "" || $hostel == "" || $gender == ""){
        $_SESSION['error'] = "All fields are required";
        header('location: ../unregisteredChildren.php');
        return false;
    }else{
        $sql = "INSERT INTO unregistered_children(name, school, pgroup, none_indigenes, hostel, gender	)VALUES('$name', '$sgroup', '$pgroup','$non_indigenes' ,'$hostel', '$gender')";
        $result = mysqli_query($conn, $sql);

        if($result){
          $_SESSION['success'] = "Campers registration was successful!!";
          header('location: ../unregisteredChildren.php');
        }else{
            $_SESSION['error'] = "Error regustering camper";
          header('location: ../unregisteredChildren.php');
        }
    }
  }

?>