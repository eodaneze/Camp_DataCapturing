<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');



  $sql = "SELECT hostel, COUNT(*) AS hostel_count FROM campers WHERE hostel = 'Joshue Hostel'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $countHostel = $row['hostel_count'];

  $sql = "SELECT master AS hostel_master FROM hostels WHERE name = 'Joshue Hostel'";
  $result = mysqli_query($conn, $sql);
  $row= mysqli_fetch_assoc($result);
  $master = $row['hostel_master'];


  

  $sql = "SELECT hostel, COUNT(*) AS hostel_count FROM campers WHERE hostel = 'Caleb hostel'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $countHostel2 = $row['hostel_count'];

  $sql = "SELECT master AS hostel_master FROM hostels WHERE name = 'Caleb hostel'";
  $result = mysqli_query($conn, $sql);
  $row= mysqli_fetch_assoc($result);
  $master2 = $row['hostel_master']
  

//   $categoryCount = array();

//   if (mysqli_num_rows($result) > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $category = $row["category"];
//         $count = $row["student_count"];
//         $categoryCount[$category] = $count;
//     }
// } else {
//     echo "No students found.";
// }

?>

<main class="main" id="main">
<div class="pagetitle">
                    <h1>SU Afikpo Zone || View Bible Study Classes</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
        </div>

   <div class="row">
      <?php
          $sql = "SELECT bs_class FROM campers";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){
            print_r($row);

                $name = $row['bs_class'];

                ?>
                        <div class="col-lg-3">
                            <?=$name?>
                        </div>
                <?php
          }
      ?>
    
   </div>
           
</main>
<?php 
  require_once('./alertify.php');
  require_once('./footer.php')
?>