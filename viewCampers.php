<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');



?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<main class="main" id="main">
<div class="pagetitle">
                    <h1>SU Afikpo Zone || All Registered Campers</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
        </div>
        <div class="search-form">
            <div class="row">
                 <div class="col-lg-4 mb-3">
                  <input type="text" id="searchTerm" class="form-control" placeholder="Search campers by name">
                 </div>
            </div>
        </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>School Group</th>
                <th>Category</th>
                <th>Phone</th>
                <th>Pligrim group</th>
                <th>Bible Study Class</th>
                <th>Indigene</th>
                <th>Hostel</th>
                <th>Gender</th>
            </tr>
            <tbody id="searchResults">
                 <?php

                    $sqlTotalItems = "SELECT COUNT(*) as camp FROM campers";
                    $resultTotalItems = mysqli_query($conn, $sqlTotalItems);
                    $rowTotalItems = mysqli_fetch_assoc($resultTotalItems);
                    $totalItems = $rowTotalItems['camp'];

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
                    $sqlData = "SELECT * FROM campers LIMIT $offset, $itemsPerPage";
                    $resultData = mysqli_query($conn, $sqlData);
                    // display the data
                    $num = 1;
                    while ($row = mysqli_fetch_assoc($resultData)) {
                        $name = $row['name'];
                        $school_group = $row['school_group'];
                        $category = $row['category'];
                        $phone = $row['phone'];
                        $non_indigenes = $row['non_indigenes'];
                        $pligrim_group = $row['pligrim_group'];
                        $bs_class = $row['bs_class'];
                        $hostel = $row['hostel'];
                        $gender = $row['gender'];
                        ?>
                            <tr>
                                 <td><a href=""><?=$row['id']?></a></td>
                                 <td><?=$name?></td>
                                 <td><?= $school_group ? $school_group : 'NIL'?></td>
                                 <td><?=$category?></td>
                                 <td><?=$phone?></td>
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
        <div class="text-center mb-3">
              <a href="print.php" class='btn btn-primary'>Print Word</a>
              <a href="./export.php" class='btn btn-success'>Export Excel</a>
        </div>
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


<script>
        $(document).ready(function() {
            // Function to perform live search
            function performLiveSearch() {
                var searchTerm = $("#searchTerm").val();

                $.ajax({
                    url: "searchajax.php",
                    type: "POST",
                    data: { search: searchTerm},
                    dataType: "html",
                    success: function(response) {
                        $("#searchResults").html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            }

            // Trigger live search on each keystroke
            $("#searchTerm").on("keyup", function() {
                performLiveSearch();
            });
        });
    </script>
<?php
require_once("./footer.php");
?>