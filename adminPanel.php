<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');


//   get all campers total
$sql = "SELECT COUNT(*) AS camper FROM campers";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$campersCount = $row['camper'];

// get all male campers
$sql = "SELECT COUNT(*) AS camper FROM campers WHERE gender = 'Male'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$MaleCampersCount = $row['camper'];


// get all female campers
$sql = "SELECT COUNT(*) AS camper FROM campers WHERE gender = 'Female'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$FemaleCampersCount = $row['camper'];

//   get registered pilgrim count
  $sql = "SELECT category, COUNT(*) AS pilgrim FROM campers WHERE category = 'Pilgrim'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $pilgrimCount = $row['pilgrim'];


//   get male registrered pilgrim count
$sql = "SELECT category, COUNT(*) AS pilgrim FROM campers WHERE category = 'Pilgrim' AND gender = 'Male'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $pilgrimMaleCount = $row['pilgrim'];

  //   get male registrered pilgrim count
$sql = "SELECT category, COUNT(*) AS pilgrim FROM campers WHERE category = 'Pilgrim' AND gender = 'Female'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$pilgrimFemaleCount = $row['pilgrim'];


// get registered SUCF count
$sql = "SELECT category, COUNT(*) AS sucf FROM campers WHERE category = 'SUCF'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $SucfCount = $row['sucf'];

//   get male registrered sucf count
$sql = "SELECT category, COUNT(*) AS sucf FROM campers WHERE category = 'SUCF' AND gender = 'Male'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $sucfMaleCount = $row['sucf'];

  //   get male registrered sucf count
$sql = "SELECT category, COUNT(*) AS sucf FROM campers WHERE category = 'SUCF' AND gender = 'Female'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sucfFemaleCount = $row['sucf'];


// get registered school leaver count
$sql = "SELECT category, COUNT(*) AS sleaver FROM campers WHERE category = 'School Leaver'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $SleaverCount = $row['sleaver'];

//   get male registrered sucf count
$sql = "SELECT category, COUNT(*) AS sleaver FROM campers WHERE category = 'School Leaver' AND gender = 'Male'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $SleaverMaleCount = $row['sleaver'];

  //   get male registrered sucf count
$sql = "SELECT category, COUNT(*) AS sleaver FROM campers WHERE category = 'School Leaver' AND gender = 'Female'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$SleaverFemaleCount = $row['sleaver'];



// get registered school leaver count
$sql = "SELECT category, COUNT(*) AS student FROM campers WHERE category = 'Student'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $StudentCount = $row['student'];

//   get male registrered sucf count
$sql = "SELECT category, COUNT(*) AS student FROM campers WHERE category = 'Student' AND gender = 'Male'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $StudentMaleCount = $row['student'];

  //   get male registrered sucf count
$sql = "SELECT category, COUNT(*) AS student FROM campers WHERE category = 'Student' AND gender = 'Female'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$StudentFemaleCount = $row['student'];



// get registered children count
$sql = "SELECT category, COUNT(*) AS children FROM campers WHERE category = 'Children'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $ChildrenCount = $row['children'];

//   get male registrered children count
$sql = "SELECT category, COUNT(*) AS children FROM campers WHERE category = 'Children' AND gender = 'Male'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $ChildrenMaleCount = $row['children'];

  //   get male registrered children count
  $sql = "SELECT category, COUNT(*) AS children FROM campers WHERE category = 'Children' AND gender = 'Female'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$ChildrenFemaleCount = $row['children'];



// get registered non-indigenes  count
$sql = "SELECT category, COUNT(*) AS non_indigene FROM campers WHERE category = 'non-indigenes'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $non_indigeneCount = $row['non_indigene'];

//   get male registrered children count
$sql = "SELECT category, COUNT(*) AS non_indigene FROM campers WHERE category = 'non-indigenes' AND gender = 'Male'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $non_indigeneMaleCount = $row['non_indigene'];

  //   get male registrered children count
  $sql = "SELECT category, COUNT(*) AS non_indigene FROM campers WHERE category = 'non-indigenes' AND gender = 'Female'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$non_indigeneFemaleCount = $row['non_indigene'];

?>

<body>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Admin Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                      <!-- all-campers -->
                      <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Male</span>
                                            <span><?=$MaleCampersCount?></span>
                                        </a></li>
                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Female</span>
                                            <span><?=$FemaleCampersCount?></span>
                                        </a></li>
                                      
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Total Campers</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                           <a href="./viewCampers.php"> <i class="bi bi-people"></i></a>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$campersCount?></h6>
                                           

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                      <!-- end of all-campers -->
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Male</span>
                                            <span><?=$pilgrimMaleCount?></span>
                                        </a></li>
                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Female</span>
                                            <span><?=$pilgrimFemaleCount?></span>
                                        </a></li>
                                      
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Pilgrims</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <a href="./viewPilgrims.php"><i class="bi bi-people"></i></a>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$pilgrimCount?></h6>
                                           

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Male</span>
                                            <span><?=$sucfMaleCount?></span>
                                        </a></li>
                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Female</span>
                                            <span><?=$sucfFemaleCount?></span>
                                        </a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">SUCF</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <!-- <i class="bi bi-currency-dollar"></i> -->
                                            <a href="./viewSucf.php"><i class="bi bi-people"></i></a>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$SucfCount?></h6>
                                            

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- school leavers card -->
                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Male</span>
                                            <span><?=$SleaverMaleCount?></span>
                                        </a></li>
                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Female</span>
                                            <span><?=$SleaverFemaleCount?></span>
                                        </a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">School Leavers</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <a href="./viewSchoolLeavers.php"><i class="bi bi-people"></i></a>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$SleaverCount?></h6>
                                            

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End of school leavers card -->


                        <!-- students card -->
                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Male</span>
                                            <span><?=$StudentMaleCount?></span>
                                        </a></li>
                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Female</span>
                                            <span><?=$StudentFemaleCount?></span>
                                        </a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Students</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                           <a href="./viewStudents.php"><i class="bi bi-people"></i></a>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$StudentCount ?></h6>
                                            

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End of students card -->


                        <!-- children card -->
                        <div class="col-xxl-3 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Male</span>
                                            <span><?=$ChildrenMaleCount?></span>
                                        </a></li>
                                        <li><a class="dropdown-item d-flex justify-content-between" href="#">
                                            <span>Female</span>
                                            <span><?=$ChildrenFemaleCount?></span>
                                        </a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Children</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <a href="./viewChildren.php"><i class="bi bi-people"></i></a>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=$ChildrenCount?></h6>
                                            

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end of children card -->

                        <!-- non-indigenes -->
                        <div class="col-xxl-3 col-xl-12">

<div class="card info-card customers-card">

    <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item d-flex justify-content-between" href="#">
                <span>Male</span>
                <span><?=$non_indigeneMaleCount?></span>
            </a></li>
            <li><a class="dropdown-item d-flex justify-content-between" href="#">
                <span>Female</span>
                <span><?=$non_indigeneFemaleCount?></span>
            </a></li>
        </ul>
    </div>

    <div class="card-body">
        <h5 class="card-title">non-indigenes</h5>

        <div class="d-flex align-items-center">
            <div
                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <a href="./viewNonIndigene.php"><i class="bi bi-people"></i></a>
            </div>
            <div class="ps-3">
                <h6><?=$non_indigeneCount?></h6>
                

            </div>
        </div>

    </div>
</div>

</div>
                        <!--end of non-indigenes -->





                       

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
             

            </div>
        </section>

    </main><!-- End #main -->


    <?php
    require_once('./alertify.php');
  require('./footer.php')

?>