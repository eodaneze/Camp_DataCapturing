<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');



?>

<main class="main" id="main">
<div class="pagetitle">
                    <h1>SU Afikpo Zone || All Registered Pilgrims</h1>
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
                <th>Title</th>
                <th>Name</th>
                <th>Category</th>
                <th>Pligrim group</th>
                <th>Bible Study Class</th>
                <th>Hostel</th>
                <th>Gender</th>
            </tr>
            <tbody>
                 <?php

                    $sqlTotalItems = "SELECT category, COUNT(*) as pilgrims FROM campers WHERE category = 'pilgrim'";
                    $resultTotalItems = mysqli_query($conn, $sqlTotalItems);
                    $rowTotalItems = mysqli_fetch_assoc($resultTotalItems);
                    $totalItems = $rowTotalItems['pilgrims'];

                    $itemsPerPage = 7;
                    // get the total number of pages
                    $totalPages = ceil($totalItems / $itemsPerPage);
                    // get the current page number from the url
                    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    // ensure the current page number is within valid bounds
                    $current_page = max(1, min($current_page, $totalPages));
                    // calculate the offset for the database query
                    $offset = ($current_page - 1) * $itemsPerPage;
                    // fetch the data from database using the calculated offset
                    $sqlData = "SELECT * FROM campers WHERE category = 'pilgrim' LIMIT $offset, $itemsPerPage";
                    $resultData = mysqli_query($conn, $sqlData);
                    // display the data
                    $num = 1;
                    while ($row = mysqli_fetch_assoc($resultData)) {
                        $name = $row['name'];
                        $school_group = $row['school_group'];
                        $category = $row['category'];
                        $non_indigenes = $row['non_indigenes'];
                        $pligrim_group = $row['pligrim_group'];
                        $bs_class = $row['bs_class'];
                        $hostel = $row['hostel'];
                        $gender = $row['gender'];
                        $title = $row['title'];
                        ?>
                            <tr>
                                 <td><a href=""><?=$num++?></a></td>
                                 <td><?=$title?></td>
                                 <td><?=$name?></td>
                                 <!-- <td><?= $school_group ? $school_group : 'NIL'?></td> -->
                                 <td><?=$category?></td>
                                 <td><?=$pligrim_group ? $pligrim_group :  $non_indigenes?></td>
                                 <td><?=$bs_class?></td>
                                 <td><?=$hostel?></td>
                                 <td><?=$gender?></td>
                            </tr>
                        <?php
                    }
                    
                 ?>
            </tbody>
        </table>
        <!-- display pagination links -->
        <style>
            .pagination{
                border-top: 1px solid #555;
                
            }
            .pagination a{
                border: 1px solid #ccc;
                margin: 0 10px;
                padding: 8px;
                color: blue;
                margin-top: 10px;
              
            }
        </style>
        <!-- <button>Print</button> -->
        <div class="pagination">
            <?php
                if($current_page > 1){
                    ?><a href="?page=<?=$current_page - 1?>">Previous</a><?php
                }
                for($i = 1; $i<=$totalPages; $i++){
                    if($i === $current_page){
                      
                    }else{
                        ?><a href="?page=<?=$i?>"><?=$i?></a><?php
                    }
                }

                if($current_page < $totalPages){
                    ?><a href="?page=<?=$current_page + 1?>">Next</a><?php
                }
            ?>
        </div>
</main>



<?php
require_once("./footer.php");
?>