<?php
  require_once('./header.php');
  require_once('./navbar.php');
  require_once('./sidebar.php');

?>

<main class="main" id="main">
<div class="pagetitle">
                    <h1>SU Afikpo Zone || Add Hostels</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </nav>
        </div>

        <form action="./includes/addHostel.php" method="post">
              <div class="row">
                  <div class="col-lg-4 mb-4">
                          <input name="name" type="text" placeholder="Enter Hostel Name" class="form-control">
                    </div>
                  <div class="col-lg-4">
                          <input name="master" type="text" placeholder="Hostel master/Mistress" class="form-control">
                    </div>
                  <div class="col-lg-4">
                          <select name="cat" id="" class="form-control">
                             <option>--Hostel Category--</option>
                             <option>Male</option>
                             <option>Female</option>
                          </select>
                    </div>
                </div>
              <button name="add" class="btn btn-secondary mt-4">Add Hostel</button>
            </form>
</main>
<?php 
  require_once('./alertify.php');
  require_once('./footer.php')
?>