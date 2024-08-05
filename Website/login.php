<?php include 'header.php';?>

<div class="login-box">
  <p>Login</p>

  <?php 
                        $wrong = isset($_GET['success']) ? $_GET['success'] : "";
                        if (!empty($wrong)) : 
                        ?>
                        <div class="alert alert-danger mt-3">
                            <?php 
                            echo $wrong; 
                            ?>
                        </div>
                        <?php endif ; ?>


  <form method="POST" action="loginValidate.php">
    <div class="user-box">
      <input required="" name="username" type="text">
      <label>User Name</label>
    </div>
    <div class="user-box">
      <input required="" name="password" type="password">
      <label>Password</label>
    </div>
    <button type="submit" class="btn btn-success">Login</button>
  </form>
</div> 


<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>