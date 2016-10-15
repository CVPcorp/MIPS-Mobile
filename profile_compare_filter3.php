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
      $ach = $row['ach'];
      $name = $row["name"];
      $npi = $row["npi"];
      $sname = $row["sname"];
      $speciality = $row["speciality"];
    }
  }

?>


<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile_compare.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  FILTER
</div>

<div class="content">

<div class="spaced"></div>


<div class="topcompare-filter clearfix">
<a href="profile_compare_filter.php"><div class="topbtfilter">Location</div></a>
<a href="profile_compare_filter2.php"><div class="topbtfilter">Details</div></a>
<a href="profile_compare_filter3.php"><div class="topbtfilter-active">Participation</div></a>
</div>

<div class="about_article">
<br/><br/>
<div class="about_title">

<center><div class="bigtext">Enter the Participating Measure</div></center> <br/><br/>

  <div class="menu clearfix">
  <div class="menuitem">Patient Quality Reporting System (PQRS)</div>
  <div class="menunext"><input type="radio" value="1" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">PQRS Maintenance of Certification Program Incentive</div>
  <div class="menunext"><input type="radio" value="1" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Electronic Health Record (EHR) Incentive Program</div>
  <div class="menunext"><input type="radio" value="1" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Consumer Assessment of Healthcare Providers & Systems</div>
  <div class="menunext"><input type="radio" value="1" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Million Hearts</div>
  <div class="menunext"><input type="radio" value="1" name="sort"></div>
  </div>
<hr class="divider"/><br/><br/><br/>
  <center><button class = "loginbt" onClick="location.href='profile_compare.php'"
     name="applybt">APPLY CHANGES</button></center>


</div>



</div>


<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
