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

  $query_string_cd = "select * from comparedata";
  $query_cd = mysqli_query($conn,$query_string_cd);
  $num_result = mysqli_num_rows($query_cd);
  if ($num_result > 0) {
      while($row = mysqli_fetch_assoc($query_cd)) {
        $id_cd[] = $row["id"];
        $name_cd[] = $row["name"];
        $npi_cd[] = $row["npi"];
        $zipcode_cd[] = $row["zipcode"];
        $location_cd[] = $row["location"];
        $mips_cd[] = $row["mips"];
      }
    }

?>


<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  COMPARE
</div>

<div class="content">

<div class="spaced"></div>

<div class="about_article">
  <center>
<div class="about_title"> Hello <?php echo $sname; ?>, this comparison is based on your speciality, <?php echo $speciality;?></div>

<br/>
</center>
</div>
<div class="topcompare clearfix">
<a href="profile_compare_sort.php"><div class="topbt">SORT</div></a>
<a href="profile_compare_filter.php"><div class="topbt">FILTER</div></a>
</div>

<div style="clear:both;"></div><br/><br/>


<?php for($i=0; $i<$num_result; $i++) { ?>


<a href="profile_compare_details.php?id=<?php echo $id_cd[$i];?>">
<div class="menuc clearfix">
  <div class="menuitemcimg">
    <img src="assets/images/placeholder.png" width="100%"/>
  </div>

<div class="menuitemc">
  <div class="profileinfotextbig"><?php echo $name_cd[$i]; ?></div>
  <div class="profileinfotitle"><?php echo $npi_cd[$i]; ?></div>
  <div class="profileinfotextsmall"><?php echo $speciality;?></div>
</div>
<div class="menunextc">
  <div class="comparezip"><?php echo $zipcode_cd[$i]; ?></div>
  <div class="comparedist"><?php echo $location_cd[$i]; ?></div>
  <div class="comparemips"><?php echo $mips_cd[$i]; ?></div>
</div>
</div>
</a>
<hr class="divider"/>
<br/>

<?php } ?>

</div>


<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
