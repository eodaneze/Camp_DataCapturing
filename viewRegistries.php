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
                    <h1>SU Afikpo Zone || View Registrar</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
        </div>

        <div class="table-responsive">
             <table class="table table-bordered">
                 <tr>
                     <th>S/N</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Password</th>
                     <th>Operation</th>
                 </tr>
                <tbody>
                     <?php
                          
                            $sql = "SELECT * FROM admin";
                            $result = mysqli_query($conn, $sql);
                            $num = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                $name = $row['name'];
                                $email = $row['email'];
                                $role = $row['role'];
                                $password = $row['password'];
                                
                                ?>
                                    <tr>
                                         <td><a href=""><?=$num++?></a></td>
                                         <td><?=$name?></td>
                                         <td><?=$email?></td>
                                         <td><?=$role?></td>
                                         <td><?=$password?></td>
                                         <td>
                                             <a href="./editReg.php?id=<?=$row['id']?>"><button class="btn btn-secondary">EDIT</button></a>
                                         </td>
                                    </tr>

                                <?php
                            }
                     ?>
                </tbody>
             </table>
        </div>

      
        
</main>

<?php 
require_once('./alertify.php');
  require_once('./footer.php')
?>