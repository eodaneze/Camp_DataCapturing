<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM contact WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['uname'];
    $date = $row['createddate'];
    $message = $row['message'];
    $email = $row['email'];
  }

?>

<main class="main" id="main">
    
        <div class="pagetitle">
                    <h1>SU Afikpo Zone || Add registries</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
        </div>

        <form action="./includes/addRegistre.php" method="post">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <label>Name</label><br>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Email</label><br>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="col-lg-6 mb-4">
                    <label>Pasword</label><br>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="col-lg-6 mb-4">
                    <label>Role</label><br>
                    <select name="role" class="form-control">
                       <option>--Select Registries Role--</option>
                       <option>Super Admin</option>
                       <option>Registre 1</option>
                       <option>Registre 2</option>
                       <option>Registre 3</option>
                       <option>Registre 4</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-secondary" name="add">Add Registre</button>
        </form>
        
</main>

<?php 
require_once('./alertify.php');
  require_once('./footer.php')
?>