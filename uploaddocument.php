<?php
session_start();
if(!isset($_SESSION['UssId']))
{
  header("location:register.php?errorMsg=You must Login Firstly");
  exit();
}
?>
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
                <a href="dashboard.php" class="nav-link link-active">Dashboard</a>
              </li>
              <li class="nav-item"><div class="dropdown">
                <button class="dropbtn navbar-item">Documents</button>
                <div class="dropdown-content">
                  <a href="mydocument.php" class='nav-link'>My Documents</a>
                  <a href="shared.php" class='nav-link'>Shared Doc</a>
                </div>
              </div>
              </li>
              <li class="nav-item">
                <a href="Groups.php" class="nav-link">Groups</a>
              </li>
              <li class="nav-item">
                <a href="notification.php" class="nav-link">Notification</a>
              </li>
              <li class="nav-item"><div class="dropdown">
                <button class="dropbtn navbar-item">My Account</button>
                <div class="dropdown-content">
                  <a href="plofile.php" class='nav-link'>Plofile</a>
                  <a href="logout.php" class='nav-link'>Logout out
                    <?php echo $_SESSION['ussName'];?>
                  </a>
                </div>
              </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!-- End of header section & navigation bar -->
    <div class="px-5 row">
      <div class="side-bar col-sm-12 col-md-3 col-lg-3" style="min-height: 700px;">
        Student and Recturer Knowledge share platform
        <hr />

        Boost your Knowledge with Skill Up
      </div>
      <!-- End of side bar -->
      <div class="main-section col-sm-12 col-lg-9 col-md-7">

      <h1 class="text-center text-success my-4">
        upload New document
      </h1> 
      <form action="app.php" method="post" enctype="multipart/form-data" class='form-signup'>
      <input type="text" name="docname" placeholder="Enter Document Name" class="form-control" required><br>
  <input type="file" name="file" id="fileToUpload" required class="form-control">
  <label for="description" class='label-check'>description:</label>
  <textarea name="description" id="description" cols="30" rows="4" class='form-control' required>
    Add description here....
  </textarea>
  
  <label class="label-check">Do you want to share This file? </label> 
  <div class="form-group">
   <input type="radio" name="status" value="shared" class="radio-check form-group-item" onclick="description()"> Yes 
   <input type="radio" name="status" value="nshare" class="radio-check form-group-item" onclick="hidedescription()"checked> No 
   </div> 
 

<button class='btn btn-primary' name='uploadMydocumentBtn'>Submit</button>
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
        <a href="https://ur.ac.rw"target="_blank">UR</a><br /><br /><a
          href="https://minuza.brd.rw"
          target="_blank"
          >Minuza</a
        >
      </div>
    </div>
  </body>    78851 7854  0788776916
</html>
