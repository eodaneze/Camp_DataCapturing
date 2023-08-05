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
                    <h1>SU Afikpo Zone || View Hostels</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
        </div>

   <div class="container">
       <div class="row">

         <div class="col-xxl-3 col-xl-12">
 
                 <div class="card info-card customers-card">
 
                     
 
                     <div class="card-body">
                         <h5 class="card-title">Joshue Hostel</h5>
 
                         <div class="d-flex align-items-center">
                             <h5 class="card-title">Number Of Campers: </h5>
                             <div class="ps-3">
                                 <h6 class="card-title"><?=$countHostel?></h6>
                                 
 
                             </div>
                         </div>
                          <h6>Hostel Master: <?=$master?></h6>
 
                     </div>
                 </div>
 
         </div>
         <div class="col-xxl-3 col-xl-12">
 
                 <div class="card info-card customers-card">
 
                     
 
                     <div class="card-body">
                         <h5 class="card-title">Caleb Hostel</h5>
 
                         <div class="d-flex align-items-center">
                             <h5 class="card-title">Number Of Campers: </h5>
                             <div class="ps-3">
                                 <h6 class="card-title"><?=$countHostel2?></h6>
                                 
 
                             </div>
                         </div>
                          <h6>Hostel Master: <?=$master2?></h6>
 
                     </div>
                 </div>
 
         </div>
       </div>
   </div>
           
</main>
<?php 
  require_once('./alertify.php');
  require_once('./footer.php')
?>