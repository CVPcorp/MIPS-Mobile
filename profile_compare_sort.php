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

<?php

$sortorder = $_POST["sort"];

if(isset($_POST["submit"])) {

if(isset($_POST["sort"])) {
if($sortorder == "1") {
  $sort = "alpha";
}

if($sortorder == "2") {
  $sort = "distance";
}

if($sortorder == "3") {
  $sort = "scoreh2l";
}

if($sortorder == "4") {
  $sort = "scorel2h";
}

header('Location: https://www.sgstudio4.com/cvp/test/profile_compare.php?sortby=' . $sort);

}
}
?>

<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile_compare.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  SORT
</div>

<div class="content">

<div class="spaced"></div>

<div class="about_article">
<form action="profile_compare_sort.php" method="POST">
<div class="about_title">

  <div class="menu clearfix">
  <div class="menuitem">Alphabetically</div>
  <div class="menunext"><input type="radio" value="1" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">By Distance - Near to Far</div>
  <div class="menunext"><input type="radio" value="2" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">MIPS Score - High to Low</div>
  <div class="menunext"><input type="radio" value="3" name="sort"></div>
  </div>

  <div class="menu clearfix">
  <div class="menuitem">MIPS Score - Low to High</div>
  <div class="menunext"><input type="radio" value="4" name="sort"></div>
  </div>

  <br/><br/><br/>
    <!-- <center><button class = "loginbt" onClick="location.href='profile_compare.php?sort='"
       name="applybt">APPLY CHANGES</button></center> -->
       <center>

         <input type="submit" id='submit' name='submit' value="APPLY CHANGES" class="loginbt"/>
       </form>
     </center>

</div>



</div>


<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
