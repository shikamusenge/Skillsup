<?php
$conn = mysqli_connect("localhost","root","","skillup");


///////////////////////  login ////////////////////////////

if(isset($_POST['loginBtn']))
{
$user = $_POST['usn'];
$password = $_POST['psw'];
$query = "SELECT * from users where RegNo ='$user' or Email ='$user'";
$sql = mysqli_query($conn,$query) or die("failled to connect");
if(mysqli_num_rows($sql) == 1){
    $row = mysqli_fetch_array($sql);

if(password_verify($password, $row['Password']))
 {
session_start();
$_SESSION['UssId']=$row['UserId'];
$_SESSION['ussName']=$row['FName'];
$_SESSION['Usspost']=$row['Post'];
$_SESSION['title']="login success fully";
$_SESSION['fac']=$row['Faculity'];
$_SESSION['Depertment']=$row['Depertment'];
if($row['Post'] == 'Student')
header("location:dashboard.php");
elseif($row['Post'] == 'Lecturer')
echo"wellcome Lecturer";
else
header("location:adimndashbord.php");  
}
else
    header("location:register.php?errorMsg= incorrect Password");
}
else
header("location:register.php?errorMsg= user does not exist");
}



///////////////////// signup ////////////////////////////////////////


if (isset($_POST['signUpBtn'])) {
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
    $sex = $_POST['genda'];
	$Id=$_POST['nid'];
	$Rg=$_POST['regNo'];
	$Em=$_POST['Email'];
    $tel=$_POST['phone'];
	$Pst=$_POST['post'];
	$Ps=$_POST['post'];
	$iprc=$_POST['iprc'];
	$Dp=$_POST['depertiments'];
	$fac=$_POST['faculity'];
	$psw1=$_POST['psw1'];
	$psw2=$_POST['psw2'];
    
	$key=rand(0,100000);
	$qr="SELECT * FROM users WHERE RegNo='$Rg' OR Email='$Em' OR ID='$Id'";
	$sql1=mysqli_query($conn,$qr);
	if ($psw1 != $psw2) {
	header("location:signup.php?errorMsg= <h4>Password not mutching</h4>");
	}
	else{
		$p=password_hash($psw2, PASSWORD_DEFAULT);
if (mysqli_num_rows($sql1)>0) {
	header("location:signup.php?errorMsg= <h4>User already exist</h4>");
}
else
{
$qr1="INSERT INTO users Values(NULL,'$fn','$ln','$sex','$Rg','$tel','$Em','$Pst','$Id','$iprc','$Dp','$fac','$key','0','$p')";
$sql2=mysqli_query($conn,$qr1);
if ($sql2) {
header("location:register.php?Msg=<h4 class='text-sucess'>Registration success full Login</h4>");
}}

}
}


/////////////////////////// Contact Message Btn /////////////////////////////////////////

if(isset($_POST['contactMessageBtn'])){
	$Names = $_POST['names'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
	$Message = $_POST['message'];
	$query = "INSERT INTO `contact` VALUES(NULL,'$Names','$Email','$Phone','$Message','0')";
$query = mysqli_query($conn,$query);
if($query){
	header("Location:contact.php?Msg=Your Message is Recieved <br> Thank you");
}
else{
	echo $query.mysqli_error(y);
}
}
/////////////////////////////// upload files //////////////////

if(isset($_POST['uploadMydocumentBtn'])){
	session_start();
$file=$_FILES['file']['name'];
$Ext=pathinfo($file,PATHINFO_EXTENSION);
$rand=rand(0,100000);
$N_name=$Ext.date('ymd').time().$rand;
$filename=$N_name.'.'.$Ext;
$file=$_FILES['file']['tmp_name'];
$date=date('y-m-d');
if (move_uploaded_file($file, 'uploads_files/'.$filename)) {

$qr2=mysqli_query($conn,"INSERT INTO `attachments` (`attch_Id`, `FileName`, `date`) VALUES (null, '$filename','$date')") or die("failed to save");
if ($qr2) {
$row=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `attachments` WHERE FileName='$filename'")) or die("failled");
$id=$row['attch_Id'];
mysqli_query($conn,"INSERT INTO `post`(`PostId`, `UserId`, `DocDate`, `DocumentName`, `Description`, `status`, `DocId`)
 VALUES(NULL,'$_SESSION[UssId]','$date','$_POST[docname]','$_POST[description]','$_POST[status]','$id')")or die("failed to save in post");
   header("location:mydocument.php?Msg=File uploaded successfully");
	
}
}
}



//////////////////////////////////////// add group /////////////////////////
if(isset($_POST['addgroupBtn'])){
	session_start();
	$groupName = $_POST['groupName'];
	$discription = $_POST['discription'];
    $q1 = mysqli_query($conn,"INSERT INTO `groups`(`GroupId`, `GroupName`, `Description`, `ownerId`) VALUES (NULL,'$groupName','$discription','$_SESSION[UssId]')");
	if($q1){
		$sql = mysqli_query($conn,"SELECT GroupId from Groups WHERE ownerId='$_SESSION[UssId]' AND GroupName ='$groupName' ORDER BY GroupId DESC Limit 1");
	$result = mysqli_fetch_array($sql);
	$grupId = $result['GroupId'];
if(mysqli_query($conn,"INSERT INTO `groupmembers`(`GroupId`, `memberId`, `post`) VALUES ('$grupId','$_SESSION[UssId]','1')")){
	header("location:groups.php");

}

	}
}


////////////////////////////////// Join Group //////////////////////////////////////

if(isset($_GET['GroupId'])){
	session_start();
	if(mysqli_query($conn,"INSERT INTO `groupmembers`(`GroupId`, `memberId`, `post`) VALUES ('$_GET[GroupId]','$_SESSION[UssId]','0')")){
		header("location:groups.php");
	}
}


////////////////////////////////  Delete doc //////////////////////////////////////


if(isset($_GET['docid'])){
	session_start();
	if(mysqli_query($conn,"DELETE FROM `attachments` WHERE attch_Id='$_GET[docid]'")){
		if(mysqli_query($conn,"DELETE FROM `post` WHERE DocId='$_GET[docid]'")){
			header("location:mydocument.php");
		}
	}
}

///////////////////////////////////// GroupBtn ////////////////////////////////////////



if(isset($_POST['GroupBtn'])){
	session_start();
$file=$_FILES['file']['name'];
$Ext=pathinfo($file,PATHINFO_EXTENSION);
$rand=rand(0,100000);
$N_name=$Ext.date('ymd').time().$rand;
$filename=$N_name.'.'.$Ext;
$file=$_FILES['file']['tmp_name'];
$date=date('y-m-d');
if (move_uploaded_file($file, 'uploads_files/'.$filename)) {

$qr2=mysqli_query($conn,"INSERT INTO `attachments` (`attch_Id`, `FileName`, `date`) VALUES (null, '$filename','$date')") or die("failed to save");
if ($qr2) {
$row=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `attachments` WHERE FileName='$filename'")) or die("failled");
$id=$row['attch_Id'];
$qry = mysqli_query($conn,"INSERT INTO `post`(`PostId`, `UserId`, `DocDate`, `DocumentName`, `Description`, `status`, `DocId`)
 VALUES(NULL,'$_POST[GroupId]','$date','$_SESSION[UssId]','$_POST[description]','group','$id')")or die("failed to save in post");
  
 if($qry) 
 header("location:groups.php?GroupId=$_POST[GroupId]&&Msg=Opinion sent successfully");
else{
	echo "failed";
}	
}
}
}



//////////////////////////////////// Send comment ////////////////////////////////

if(isset($_POST['CommentBtn']))
{
	session_start();
	$comment = $_POST['Comment'];
	$userId= $_SESSION['UssId'];
	$PostId = $_POST['PostId'];
	$date = date('Y/m/d h:i:sa',time());
	$myquery = "INSERT INTO `replay`(`ReplayId`, `UserId`, `PostId`, `AttchId`, `content`, `date`, `view`) VALUES (NULL,'$userId','$PostId','0','$comment','$date','0')";
	if(mysqli_query($conn,$myquery)){

		if(isset($_GET['PostId']))
		{
header("location:coments.php?PostId=$_POST[GroupId]");
		}
		else
		{
			header("location:groups.php?GroupId=$_POST[GroupId]");	
		}
        
	}
	
}

?>