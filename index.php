<?php
 require_once('./home_header.php');
?>
<body>
    <div class="all-form">
        
         <div class="form-content">
             <div class="form-logo">
                <img src="./assets/img/logo.png" alt="">
                <h5>Registrar Login</h5>
             </div>
              <form action="./includes/adminLogin.php" method="post">
              <div class="form-1">
                <input type="text" name="email" placeholder="Email address">
              </div>
              <div class="form-1">
                <input type="password" name="password" placeholder="Password">
              </div>
              <div class="form-1 form-btn">
                  <button name="login">Login to your account</button>
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