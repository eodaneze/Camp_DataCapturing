<?php
//  session_start();
  require_once('./includes/connection.php');
 require_once('./home_header.php');

 $groups = array('Ukpa/Amachara', 'New Site', 'Amaizu/Amangballa', 'Nkpghoro', 'Mgbom', 'Amasiri', 'Unwana', 'Ozizza', 'Akpoha');
 sort($groups);

 $bs_class = array('bible study One', 'bible study Two', 'bible study Three', 'bible study Four', 'bible study Five');
 sort($bs_class);

 $allTitle = array('Mr', 'Mrs', 'Dr', 'Bro', 'Sis', 'Engr', 'Elder', 'Pastor', 'Rev');
 sort($allTitle);
 
?>
<body>
    <div class="all-form" style="height: fit-content;">
        
         <div class="form-content">
             <div class="form-logo">
                <img src="./assets/img/logo.png" alt="">
                <h5>Capture Unregistered Campers</h5>
                <!-- <span>Required field has an astriks</span> -->
             </div>
              <form action="./includes/register.php" method="post">
                 <span>Title are only for pilgrims(Optional)</span>
                  <div class="form-1">
                    <select name="title" class="form-control">
                       <option></option>
                       <?php

                          foreach($allTitle as $title){
                              ?><option><?=$title?></option><?php
                          }
                        ?>
                    </select>
                  </div>
                  <div class="form-1">
                    <input type="text" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-1">
                    
                    <input type="text" name="sgroup" placeholder="School Group (Optional)">
                  </div>
                  <span>Student category are those in secondary school</span>
                  <div class="form-1">
                    <select name="cat">
                        <option>--Campers Category--</option>
                        <option>Pilgrim</option>
                        <option>non-indigenes</option>
                        <option>SUCF</option>
                        <option>School Leaver</option>
                        <option>Student</option>
                        <option>Children</option>
                    </select>
                  </div>
                   <div class="form-1">
                      <input name="phone" type="text" class="form-control" placeholder="Phone Number (Optional)">
                   </div>
                  <label>Pilgrim group</label>
                  <div class="form-1">
                    <select name="pgroup">
                      <option></option>
                        <?php
                             foreach($groups as $group){
                                 ?><option><?=$group?></option><?php
                             }
                        ?>
                    </select>
                  </div>
                  <span style="font-size: 14px">For people outside Afikpo zone, indicate thier zone, area, address</span>
                  <div class="form-1">
                      <input type="text" name="non-indigenes" id="" class="form-control" placeholder="for non-indigenes">
                  </div>
                  <!-- <label>Bible Study Class</label>
                  <div class="form-1">
                    <select name="bsclass">
                      <option></option>
                      <?php
                         
                          foreach($bs_class as $class){
                            ?><option><?=$class?></option><?php
                          }
                      ?>
                        
                    </select>
                  </div> -->
                  <div class="form-1">
                    <select name="hostel">
                        <option>--Allocate Hostel--</option>
                        <?php
                           $sql = "SELECT * FROM hostels";
                           $result = mysqli_query($conn, $sql);

                           while($row = mysqli_fetch_assoc($result)){
                              $name = $row['name'];

                              ?><option><?=$name?></option><?php
                           }
                        ?>
                       
                    </select>
                  </div>
                  <div class="gender" style="margin-bottom: 15px;">
                      <span>Gender</span><br>
                      <input type="radio" name="gender" value="Male">Male
                      <input type="radio" name="gender" value="Female">Female
                  </div>
                  <div class="form-1 form-btn">
                      <button name="register">Register Now</button>
                  </div>
              </form>
              <div style="text-align: center; color: #555">
                  <h5>Powered By SU Afikpo Zone</h5>
              </div>
         </div>
    </div>

    <?php
  require_once('./alertify.php');
    ?>
</body>
</html>