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



if(isset($_POST["save"])) {
  $email = $_POST["username"];
  $pass = $POST["password"];
    $name = $_POST["name"];
    $npi = $_POST["npi"];
    $tin = $_POST["tin"];
    $ccn = $_POST["ccn"];
    $speciality = $_POST["speciality"];
    $zipcode = $_POST["zipcode"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $education = $_POST["education"];
    $acceptsMedicare = $_POST["acceptsMedicare"];
    $mgroup = $_POST["mgroup"];

    $pass = md5($pass);



$sqlupdate = "update masterdata SET email = '$email', password = '$pass', name = '$name', npi = $npi, tin = '$tin', ccn = '$ccn', speciality = '$speciality', zipcode = $zipcode, city = '$city', address = '$address', phone = '$phone', education = '$education', acceptsMedicare = '$acceptsMedicare', mgroup = '$mgroup' where id = $uid";
$result = mysqli_query($conn,$sqlupdate);
if($result) {
  $msg = "Updated";
}
header('Location: https://www.sgstudio4.com/cvp/test/profile_info.php');
}


?>

<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile_info.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  EDIT INFO
  <form name="editprofile" action="?action=save" method=post>
  <div class="editbutton">
    <button type="submit" name="save" class="loginbt2">Save</button>
  </div>
</div>

<div class="content">

<div class="spaced"></div>

<div class="about_article">


<br/><br/>
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
<div class="profileinfotitle">PROVIDER / ORG NAME</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="name" value="<?php echo $name;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">NPI</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="npi" value="<?php echo $npi;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">TIN</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="tin" value="<?php echo $tin;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">CCN</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="ccn" value="<?php echo $ccn;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">SPECIALITY</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="speciality" value="<?php echo $speciality;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">GROUP AFFILIATIONS</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="mgroup" value="<?php echo $mgroup;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">ZIP</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="zipcode" value="<?php echo $zipcode;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">CITY</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="city" value="<?php echo $city;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">ADDRESS</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="address" value="<?php echo $address;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">PHONE</div>
<div class="profileinfotext linkdisabled"><input type="text" class="loginip2"
   name="phone" value="<?php echo $phone;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">EDUCATION</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="education" value="<?php echo $education;?>"></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">ACCEPTS MEDICARE ASSIGNMENTS</div>
<div class="profileinfotext"><input type="text" class="loginip2"
   name="acceptsMedicare" value="<?php echo $acceptsMedicare;?>"></div>
<hr class="divider"/>
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
