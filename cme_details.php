<?php
include 'header.php';
?>
<?php
include 'scripts.php';
?>

<?php

$getid = $_GET['id'];

// Database Operations

$servername = "localhost";
$username = "sgstudio_mips";
$password = "MIPSroot";
$dbname = "sgstudio_mips";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}




?>


<body class="about">



<div class="navbar">
  <div class="backbutton">
    <a href="cme.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
COURSE DETAILS
</div>

<div class="content">

<div class="spaced"></div>


<?php
$query_string = "select * from cmecourses where id= '$getid'";
$query = mysqli_query($conn,$query_string);
if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
      $id = $row["id"];
    	$title = $row["title"];
      $link = $row["link"];
      $credits = $row["credits"];
      $overview = $row["overview"];
      $objectives = $row["objectives"];
    }
}
 ?>

<div class="course_article clearfix">
  <div class="course_left">
    <?php echo $title; ?>
  </div>
  <div class="course_right">
    <a href="<?php echo $link; ?>" target="_blank"><button class='course_button'>TAKE COURSE</button></a>
  </div>
</div>

<hr class="divider">
<div class="course_article clearfix">
  <br/><br/>
<div class="course_title">OVERVIEW</div>
<br/>
<?php echo $overview; ?>
</div>
<hr class="divider">
<div class="course_article clearfix">
  <br/><br/>
<div class="course_title">CREDITS</div>
<br/>
<?php echo $credits; ?>
</div>
<hr class="divider">
<div class="course_article clearfix">
  <br/><br/>
<div class="course_title">OBJECTIVES</div>
<br/>
<?php echo $objectives; ?>
</div>
<hr class="divider">


</div>



<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_blue.png" class="tabimg"></a></div>
</div>



</body>
