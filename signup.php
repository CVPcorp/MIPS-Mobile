<?php
   ob_start();
   session_start();
?>
<?php
include 'header.php';
?>
<?php
include 'scripts.php';
?>

<?php

$uid = $_SESSION['userid'];
// Database Operations

$servername = "localhost";
$username = "sgstudio_mips";
$password = "MIPSroot";
$dbname = "sgstudio_mips";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


$query_string = "select * from masterdata where id = '$uid'";
$query = mysqli_query($conn,$query_string);
if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
      $id = $row["id"];
    	$email= $row["email"];
      $pic = $row["pic"];
      $name = $row["name"];
      $npi = $row["npi"];
      $tin = $row["tin"];
      $mscore = $row["mscore"];
      $mustage = $row["mustage"];
      $payout = $row["payout"];
      $ccn = $row["ccn"];
      $speciality = $row["speciality"];
      $zipcode = $row["zipcode"];
      $city = $row["city"];
      $address = $row["address"];
      $phone = $row["phone"];
      $education = $row["education"];
      $acceptsMedicare = $row["acceptsMedicare"];
      $ach = $row["ach"];
      $mgroup = $row["mgroup"];
    }
  }



if(isset($_POST["signup"])) {
    $email = $_POST["username"];
    $pass = $_POST["password"];
    $repass = $_POST["repassword"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $npi = $_POST["npi"];
    $state = $_POST["state"];

if(!(isset($email) && isset($pass) && isset($repass) && isset($fname) && isset($lname) && isset($npi) && isset($state))) {
  $error = "There are one or more errors with your sign up. Please correct those and sign up again.";
  header('Location: https://www.sgstudio4.com/cvp/test/signup.php?error=' . $error);
}


else if($repass != $pass) {
    $error = "Passwords do not match";
    header('Location: https://www.sgstudio4.com/cvp/test/signup.php?error=' . $error);
}

else if(strlen($npi) != 10){
  $error = "Please enter a valid NPI";
  header('Location: https://www.sgstudio4.com/cvp/test/signup.php?error=' . $error);
}

else {

$cmecredits = 10;
$ach = 3;
$pic = "dc.png";
$sname = explode(" ", $name, 0);
$mscore = "60";
$mustage = "1";
$mgroup = $education;
$payout = "$ 5000";
$pass = md5($pass);
$name = $fname . " " . $lname;




$sqlinsert = "INSERT into masterdata(email, password,name,fname, lname,npi,tin,ccn,speciality,zipcode,city,address,phone,education,acceptsMedicare,cmecredits,ach,sname,mscore, mustage, pic, mgroup, payout, state) VALUES('$email', '$pass','$name','$fname', '$lname', '$npi','$tin','$ccn','$speciality', $zipcode,'$city','$address','$phone', '$education', '$acceptsMedicare', $cmecredits, $ach, '$sname', '$mscore', '$mustage', '$pic', '$mgroup' ,'$payout', '$state')";
$result = mysqli_query($conn,$sqlinsert);
if($result) {
  $msg = "Inserted";
}

$query_string1 = "select * from masterdata where email = '$email'";
$query1 = mysqli_query($conn,$query_string1);
if (mysqli_num_rows($query1) > 0) {
    while($row = mysqli_fetch_assoc($query1)) {
      $cuid = $row["id"];
    }
  }

$sqlinsert_ph_mips1 = "INSERT into programhistory_mips(uid, year,score) VALUES('$cuid','2013','55')";
$result_ph_mips1 = mysqli_query($conn,$sqlinsert_ph_mips1);
$sqlinsert_ph_mips2 = "INSERT into programhistory_mips(uid, year,score) VALUES('$cuid','2014','60')";
$result_ph_mips2 = mysqli_query($conn,$sqlinsert_ph_mips2);

$sqlinsert_ph_mu1 = "INSERT into programhistory_mu(uid, year,stage) VALUES('$cuid','2013','1')";
$result_ph_mu1 = mysqli_query($conn,$sqlinsert_ph_mu1);
$sqlinsert_ph_mu2 = "INSERT into programhistory_mu(uid, year,stage) VALUES('$cuid','2014','1')";
$result_ph_mu2 = mysqli_query($conn,$sqlinsert_ph_mu2);
$sqlinsert_ph_mu3 = "INSERT into programhistory_mu(uid, year,stage) VALUES('$cuid','2015','2')";
$result_ph_mu3 = mysqli_query($conn,$sqlinsert_ph_mu3);

$sqlinsert_ph_vm1 = "INSERT into programhistory_vm(uid, year,stage) VALUES('$cuid','2013','+0.5%')";
$result_ph_vm1 = mysqli_query($conn,$sqlinsert_ph_vm1);
$sqlinsert_ph_vm2 = "INSERT into programhistory_vm(uid, year,stage) VALUES('$cuid','2014','+1.0%')";
$result_ph_vm2 = mysqli_query($conn,$sqlinsert_ph_vm2);
$sqlinsert_ph_vm3 = "INSERT into programhistory_vm(uid, year,stage) VALUES('$cuid','2015','+1.5%')";
$result_ph_vm3 = mysqli_query($conn,$sqlinsert_ph_vm3);

$sqlinsert_ph_pqrs1 = "INSERT into programhistory_pqrs(uid, year,stage) VALUES('$cuid','2013','$5693')";
$result_ph_mpqrs1 = mysqli_query($conn,$sqlinsert_ph_pqrs1);
$sqlinsert_ph_pqrs2 = "INSERT into programhistory_pqrs(uid, year,stage) VALUES('$cuid','2014','$6943')";
$result_ph_pqrs2 = mysqli_query($conn,$sqlinsert_ph_pqrs2);

$query_string = "select * from masterdata where email = '$email'";
$query = mysqli_query($conn,$query_string);
if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
      $_SESSION['login'] = 'true';
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['userid'] = $row["id"];
      header('Location: https://www.sgstudio4.com/cvp/test/profile.php');
    }
  }
}

}



?>

<body class="about">

<?php $error = $_GET["error"];?>
<div class="navbar">
  <div class="backbutton">
    <a href="index.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  NEW USER
  <form name="editprofile" action="?action=save" method=post>
  <div class="editbutton">
    <button type="submit" name="signup" class="loginbt2">Sign up</button>
  </div>
</div>

<div class="content">

<div class="spaced"></div>

<div class="about_article">


<br/><br/>
<center><div class="errormsg"><?php echo $error; ?></div><br/></center>

<div class="profileinfotitle">EMAIL</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="username" value="<?php echo $username2;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">PASSWORD</div>
<div class="profileinfotext"><input type="password" class="loginip2"
   name="password" value="<?php echo $password2;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">RE-TYPE PASSWORD</div>
<div class="profileinfotext"><input type="password" class="loginip2"
   name="repassword" value="<?php echo $password2;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">FIRST NAME</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="fname" value="<?php echo $fname;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">LAST NAME</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="lname" value="<?php echo $lname;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">NPI</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="npi" value="<?php echo $npi;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">STATE</div>
<div class="profileinfotext linkdisabled"><select name="state" class="loginip2">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>	</div>
<hr class="divider"/>
<br/>
</div>
</form>

</div>


<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
