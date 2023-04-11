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
        <form action="app.php" method='post' class="row form-signup">
          <h3 class="text-center">Register Form</h3>
          <?php if(isset($_GET['errorMsg'])){echo "<div class='errorMsg text-danger'> $_GET[errorMsg]</div>";} ?>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="firstName" >First Name</label>
            <input type="text" class="form-control" id="firstName" name='fn' required />
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name='ln' required />
          </p>

          <p class="col-10">
            Genda: <input type="radio" value="Male" name="genda" checked/>Male
            <input type="radio" value="Female" name="genda" /> Female
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="Identinty">National ID</label>
            <input
              type="text"
              class="form-control"
              id="Identinty"
              maxlength="16"
              minlength="16"
              name='nid'
            />
          </p>

          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="regNo">Registration Number</label>
            <input type="text" class="form-control" id="regNo" name="regNo" required />
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="Email">Your Email</label>
            <input type="email" class="form-control" id="Email" name="Email" required />
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="Tel">Telephone</label>
            <input
              type="text"
              class="form-control"
              id="Tel"
              maxlength="13"
              minlength="10"
              name="phone"
            />
          </p>

          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="post">Select Post:</label>
            <select value="Select" id="post" class="form-control" name="post" required>
              <option value="Select">Select</option>
              <option value="Student">Student</option>
              <option value="Lecturer">Lecturer</option>
            </select>
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="insititute"
              >Select Insititute /IPRC</label
            >
            <select name="iprc" id="insititute" class="form-control" required>
              <option value="Select">Select</option>
              <option value="Ngoma">Ngoma</option>
              <option value="Huye">Huye</option>
              <option value="Karongi">Karongi</option>
              <option value="Kitabi">Kitabi</option>
              <option value="Kigali">Kigali</option>
              <option value="Musanze">Musanze</option>
              <option value="Tumba">Tumba</option>
            </select>
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label for="departiment">Departiment</label>
            <select name="depertiments" id="departiment" class="form-control">
              <option value="Select">Select</option>
            </select>
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label for="faculity">Faculity</label>
            <select name="faculity" id="faculity" class="faculity form-control">
              <option value="Select">Select</option>
            </select>
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="password">Password</label>
            <input type="password" name="psw1" class="form-control" id="password" />
          </p>
          <p class="col-sm-12 col-md-12 col-lg-5">
            <label class="label-check" for="re-password"
              >Comfirm Password</label
            >
            <input type="password" name="psw2" class="form-control" id="password" />
          </p>

          <button class="btn btn-outline-primary col-8 p-2" name="signUpBtn">Signup</button>

          <div class="col-10">
            Login instead =><a
              href="register.php"
              class="btn btn-outline-primary mx-5 px-5"
            >
              Login</a
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
