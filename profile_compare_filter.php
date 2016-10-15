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
<a href="profile_compare_filter.php"><div class="topbtfilter-active">Location</div></a>
<a href="profile_compare_filter2.php"><div class="topbtfilter">Details</div></a>
<a href="profile_compare_filter3.php"><div class="topbtfilter">Participation</div></a>
</div>

<div class="about_article">
<br/><br/>
<div class="about_title">

  <div class="menu clearfix">
  <div class="menuitem">Within 5 miles</div>
  <div class="menunext"><input type="radio" value="1" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Withing 10 miles</div>
  <div class="menunext"><input type="radio" value="2" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Within 15 miles</div>
  <div class="menunext"><input type="radio" value="3" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Within 20 miles</div>
  <div class="menunext"><input type="radio" value="4" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Within 25 miles</div>
  <div class="menunext"><input type="radio" value="5" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Within 50 miles</div>
  <div class="menunext"><input type="radio" value="6" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">Within 100 miles</div>
  <div class="menunext"><input type="radio" value="7" name="sort"></div>
  </div>
<br/><br/><br/>
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
