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
        <form action="../controller/registrasi.php " method="post">
          <h3>Sign Up</h3>
          <div class="form-holder active">
            <input type="text" name="name" id="name" placeholder="name" class="form-control" />
          </div>
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
          <div class="checkbox">
            <label>
              <input type="checkbox" checked /> I agree all statement in
              <a href="#">Terms & Conditions</a>
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-login">
            <button type="submit" value="Registrasi">Sign up</button>
            <p>Already Have account? <a href="login-view.php">Login</a></p>
          </div>
        </form>
      </div>
    </div>
    <?php
  include './layouts/script.php';
  ?>


<!-- https://colorlib.com/etc/regform/colorlib-regform-20/images/registration-form-4.jpg -->