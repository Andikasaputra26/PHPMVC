<?php
include "./layouts/header.php";
?>
  <body>
    <div class="wrapper">
      <div class="inner">
        <div class="image-holder">
          <img
            src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4f323c12-a7a6-4ff3-bea2-50c26ca2ca86/v2k-run-shoes-zJV8TV.png"
            alt
          />
        </div>
        <form action="../controller/login.php" method="POST">
          <h3>Sing in</h3>
          
          <div class="form-holder">
            <input type="email" name="email" id="email" placeholder="email" class="form-control" />
          </div>
          <div class="form-holder">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              class="form-control"
              style="font-size: 15px"
            />
          </div>
          
          <div class="form-login">
            <button type="submit" value="Login">Login</button>
            <p>Don't Have account? <a href="register-view.php">Registrasi</a></p>
          </div>
        </form>
      </div>
    </div>
  <?php
  include './layouts/script.php';
  ?>