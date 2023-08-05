<?php
session_start();
require_once('./connection.php');
  if(isset($_POST['register'])){
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $sgroup = isset($_POST['sgroup']) ? $_POST['sgroup'] : "";
    $cat = isset($_POST['cat']) ? $_POST['cat'] : "";
    $pgroup = isset($_POST['pgroup']) ? $_POST['pgroup'] : "";
    $bsclass = isset($_POST['bsclass']) ? $_POST['bsclass'] : "";
    $hostel = isset($_POST['hostel']) ? $_POST['hostel'] : "";
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $non_indigenes = isset($_POST['non-indigenes']) ? $_POST['non-indigenes'] : "";
    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";

    
    if($name == "" || $cat == "" || $bsclass == "" || $hostel == "" || $gender == ""){
        $_SESSION['error'] = "All fields are required";
        header('location: ../register.php');
        return false;
    }else{
        $sql = "INSERT INTO campers(title, name, school_group, category, phone, pligrim_group, non_indigenes, bs_class, hostel, gender)VALUES('$title', '$name', '$sgroup', '$cat', '$phone', '$pgroup','$non_indigenes' ,'$bsclass', '$hostel', '$gender')";
        $result = mysqli_query($conn, $sql);

        if($result){
          $_SESSION['success'] = "Campers registration was successful!!";
          header('location: ../register.php');
        }else{
            $_SESSION['error'] = "Error registering camper";
          header('location: ../register.php');
        }
    }
  }

?>