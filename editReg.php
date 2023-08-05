<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM admin WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $role = $row['role'];
  }

?>

<main class="main" id="main">
<div class="pagetitle">
                    <h1>SU Afikpo Zone || Edit Registrar</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
        </div>

  <form action="">
     <div class="row">
         <div class="col-lg-6 mb-4">
            <label>Name</label><br>    
              <input type="text" name="name" class="form-control" value="<?=$name?>">
         </div>
         <div class="col-lg-6 mb-4">
            <label>Email</label><br>
              <input type="email" name="email" class="form-control" value="<?=$email?>">
         </div>
         <div class="col-lg-6 mb-4">
            <label>Role</label><br>
              <input type="text" name="role" class="form-control" value="<?=$role?>">
              <input type="hidden" name="id" value="<?=$row['id']?>">
         </div>
         <div class="col-lg-6 mb-4">
            <label>Password</label><br>
              <input type="text" name="role" class="form-control" value="<?=$password?>">
         </div>
     </div>
     <button class="btn btn-secondary">EDIT</button>
  </form>
           
</main>
<?php 
  require_once('./alertify.php');
  require_once('./footer.php')
?>