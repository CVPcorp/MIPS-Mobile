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
      $ach = $row['ach'];
      $cmecredits = $row["cmecredits"];
    }
  }

?>



<body class="about">
<div class="navbar">
PROFILE
</div>

<div class="content">

<div class="spaced_profile"></div>

<div class="profile_view clearfix">
<div class="profile_view_col1"><br/>
<img src="assets/images/<?php echo $pic;?>" class="userpic"/> <br/><br/>
<center><div class="ach"><?php echo $ach;?></div></center>
</div>
<div class="profile_view_col2"><br/>
<div class="pv_small">Name</div>
<div class="pv_big"><?php echo strtoupper($name);?></div><br/>
<div class="pv_small">NPI</div>
<div class="pv_big linkdisabled"><?php echo $npi;?></div><br/>
<div class="pv_small">TIN</div>
<div class="pv_big linkdisabled"><?php echo $tin;?></div>
</div>
<div class="profile_view_col3"><br/>
  <div class="pv_small">2015 MU</div>
  <div class="pv_img right bottom">STAGE <?php echo $mustage;?></div><br/>
  <div class="pv_small">2014 SCORE</div>
  <a href="profile_mips_score.php"><div class="pv_img right bottom">MIPS <?php echo $mscore;?></div></a><br/>
  <div class="pv_small">2014 PAYOUT</div>
  <div class="pv_img right bottom"><?php echo $payout;?></div><br/>

</div>

<div style="clear:both;"></div>
  <div class="compare">
    <a href="profile_compare.php"><img src="assets/images/compare_bt.png" width=120/></a>
  </div>
</div>




<a href="profile_pph.php"><div class="menu clearfix">
<div class="menuitem">Program Participation History</div>
<div class="menunext"><img src="assets/images/arrow_gray.png" height=20></div>
</div></a>
<hr class="divider">
<a href="profile_info.php"><div class="menu clearfix">
<div class="menuitem">Personal Info</div>
<div class="menunext"><img src="assets/images/arrow_gray.png" height=20></div>
</div></a>
<hr class="divider">
<a href="profile_alerts.php"><div class="menu clearfix">
<div class="menuitem">Alerts</div>
<div class="menunext"><img src="assets/images/arrow_gray.png" height=20></div>
</div></a>
<hr class="divider">
<a href="profile_cs.php"><div class="menu clearfix">
<div class="menuitem">Customer Support</div>
<div class="menunext"><img src="assets/images/arrow_gray.png" height=20></div>
</div></a>
<hr class="divider">
<div class="menu clearfix">
<div class="menuitem">CME Credits</div>
<div class="menunext"><?php echo $cmecredits;?></div>
</div>
<hr class="divider">
<a href="profile_linked.php"><div class="menu clearfix">
<div class="menuitem">Linked Accounts</div>
<div class="menunext"><img src="assets/images/arrow_gray.png" height=20></div>
</div></a>
<hr class="divider">
<a href="profile_ach.php"><div class="menu clearfix">
<div class="menuitem">App Achievements</div>
<div class="menunext"><img src="assets/images/arrow_gray.png" height=20></div>
</div></a>
<hr class="divider">
<a href="logout.php"><div class="menu clearfix">
<div class="menuitem">Logout</div>
<div class="menunext"><img src="assets/images/arrow_gray.png" height=20></div>
</div></a>
<hr class="divider">

</div>

<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
