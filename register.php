<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-icon.css" />
    <script src="js/script.js" defer></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Skill Up</title>
  </head>
  <body>
    <section class="first-section">
      <header class="text-center">Skill Up</header>
      <div class="header-section px-5 bg-primary">
        <nav class="navbar navbar-expand-md navbar-dark">
          <div class="navbar-brand">
            <img src="image/logo-1.svg" alt="Skill Up" width="100px" />
          </div>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="nav-link link-active"
                  >Register/Login</a
                >
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="help.php" class="nav-link">Help</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!-- End of header section & navigation bar -->
    <div class="px-5 row">
      <div class="side-bar col-sm-12 col-md-3 col-lg-3">
        Student and Recturer Knowledge share platform
        <hr />

        Boost your Knowledge with Skill Up
      </div>
      <!-- End of side bar -->
      <div class="main-section col-sm-12 col-lg-7 col-md-7">
        <form action="app.php" class="p-5 form-login" method="post">
          <h3 class="text-center">Login form</h3>
          <?php if(isset($_GET['Msg'])){echo "<div class='errorMsg text-success text-center'> $_GET[Msg]</div>";} ?> <?php if(isset($_GET['errorMsg'])){echo "<div class='errorMsg text-danger text-center'> $_GET[errorMsg]</div>";} ?>
         

          <label class="label-check" for="userName">Email \ Registration Number</label>
          <input type="text" class="form-control" id="userName" name="usn" />

          <label class="label-check" for="password" >password</label>
          <input type="password" class="form-control" id="password" name='psw'/>

          <button class="btn btn-outline-primary" name="loginBtn">Login</button>
          <div>
            Sign up instead<a
              href="signup.php"
              class="btn btn-outline-primary mx-5 px-5"
            >
              Signup</a
            >
          </div>
        </form>
      </div>

      <!-- End of main section -->
    </div>
    <!-- End of midle section -->

    <div class="footer row bg-primary px-5 text-light">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h3><u>Follow Us</u></h3>

        <a href="#"
          ><img
            src="image/facebook-svgrepo-com.svg"
            alt=""
            width="30px"
            height="30px"
          />facebook</a
        >
        <br /><br />
        <a href="#"
          ><img
            src="image/twitter-svgrepo-com.svg"
            alt=""
            width="30px"
            height="30px"
          />Twiter</a
        ><a href="#"></a><a href="#"></a>
      </div>
      <!-- End os follo us divission -->

      <div class="col-md-4 col-lg-4 col-sm-12">
        <h3><u>Our Contact</u></h3>
        Email:
        <br />
        Telephone: +250
      </div>
      <!-- End of Our-Contact-division -->

      <div class="col-md-4 col-sm-12 col-lg-4">
        <h3><u>Use Ful Links</u></h3>
        <a href="https://www.mis.rp.ac.rw" target="_blank">TVET mis</a
        ><br /><br />
        <a href="https://ur.ac.rw">UR</a><br /><br /><a
          href="https://minuza.brd.rw"
          target="_blank"
          >Minuza</a
        >
      </div>
    </div>
  </body>
</html>
