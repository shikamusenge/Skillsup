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
      <div>
      <h1 class="text-center text-success my-4">
        Shared Documents
      </h1> 
      <?php if(isset($_GET['Msg'])){echo "<div class='Msg text-success text-center'> $_GET[Msg]</div>";} ?>
      <?php
require_once("connection.php");
$sql = mysqli_query($con,"SELECT * FROM `post` INNER JOIN `attachments` inner join users WHERE post.DocId=attachments.attch_id and  users.UserId=post.UserId AND status='shared' and post.UserId IN (SELECT UserId From users where Depertment='$_SESSION[Depertment]') ORDER BY post.DocId Desc") or die("erro");
if (mysqli_num_rows($sql)==0) {
	echo "<div class='d-flex col-12' style='justfy-content:space-around'>You have not added files yet  add instead</div>";
}
else
{
	while ($row=mysqli_fetch_array($sql)) {
		echo"<div class='container p-3 m-5 col-lg-8 col-sm-12' style='border-radius:15px;box-shadow:3px 3px 3px 7px lightblue; border:solid 1px blue; min-height:50px;flex-direction:column; overflow:hidden;'>";
		echo "<div class='row'><h5>".$row['FName']." ".$row['LName']."</h3></div>";
		echo "<div class='row m-3'><h6>".$row['DocumentName']."</h6></div>";
		echo "<div class='row m-3'><b>".$row['Description']."</b></div>";
		echo "<div class='m-5 my-3'><div style='float:right;'>".$row['DocDate'];
		echo "&nbsp;&nbsp;&nbsp; <a href='uploads_files/".$row['FileName']."'target='_blank'>download </a>&nbsp;&nbsp;&nbsp;";
		echo "<a href='code.php?docid=".$row['attch_Id']."'>Comments</a></div></div><br>";
        echo "</div>";
	}
}
?></div>
 <a href="uploaddocument.php" id="upload" class="btn btn-primary mx-5 btn-lg" style="float:right;postion:fixed;"> Add new</a>
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
    <script>
const upBtn = document.querySelector("#upload");
upBtn.addEventListener("click", (e) => {
  e.target.parent.style.display = "none";
  document.querySelector(".d-none").style.display = "block";
  e.preventDefault();
});
    </script>
  </body>    
</html>
