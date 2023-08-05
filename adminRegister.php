<?php require_once('./home_header.php') ?>
<body>
    <div class="all-form" style="height: fit-content;">
        
         <div class="form-content">
             <div class="form-logo">
                <img src="./assets/img/logo.png" alt="">
                <h5>Admin Registration</h5>
             </div>
              <form action="./includes/adminRegister.php" method="post">
              <div class="form-1">
                <input type="text" name="name" placeholder="Enter name">
              </div>
              <div class="form-1">
                
                <input type="text" name="email" placeholder="Email">
              </div>
              <div class="form-1">
                
                <input type="password" name="password" placeholder="Password">
                <input type="hidden" name="role">
              </div>
              
              <div class="form-1 form-btn">
                  <button name="register">Register Admin</button>
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