<?php
 require_once('./includes/connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style media='print'>
  @page{
    size: A3;
    margin: 0;
  }
  #print-btn{
    display: none;
    visibility: hidden;
  }
</style>
</head>
<body>
    
<div class="container-fluid table-responsive mt-3">
    <div class="text-center">
         <img style="width: 70px;" src="./assets/img/logo.png" alt="">
         <h5>Afikpo Zone</h5>
         <h6>All registered campers </h6>
    </div>
   <table class="table table-bordered">
       <thead>
          <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>School Group</th>
                <th>Category</th>
                <th>Pligrim group</th>
                <th>Bible Study Class</th>
                <th>Indigene</th>
                <th>Hostel</th>
                <th>Gender</th>
          </tr>
       </thead>
       <tbody>
           <?php
              $sql = "SELECT * FROM campers ORDER BY name ASC";
              $result = mysqli_query($conn, $sql);
              $num = 0;
              while($row = mysqli_fetch_assoc($result)){
                $num++;
                $name = $row['name'];
                $school_group = $row['school_group'];
                $category = $row['category'];
                $non_indigenes = $row['non_indigenes'];
                $pligrim_group = $row['pligrim_group'];
                $bs_class = $row['bs_class'];
                $hostel = $row['hostel'];
                $gender = $row['gender'];
                ?>
                   <tr>
                      <td><a href=""><?=$num?></a></td>
                      <td><?=$name?></td>
                      <td><?= $school_group ? $school_group : 'NIL'?></td>
                      <td><?=$category?></td>
                      <td><?=$pligrim_group?></td>
                      <td><?=$bs_class?></td>
                      <td><?=$non_indigenes ? "NO ( ${non_indigenes})": 'YES'?></td>
                      <td><?=$hostel?></td>
                      <td><?=$gender?></td>
                    </tr>
                
                <?php
              }
            ?>
       </tbody>
   </table>
   <div class="text-center">
              <button onclick="window.print()" class='btn btn-primary' id='print-btn'>Print</button>
    </div>
   
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>