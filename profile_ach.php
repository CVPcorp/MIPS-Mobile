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
    }
  }

?>


<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  APP ACHIEVEMENTS
</div>

<div class="content">

<div class="spaced"></div>

<div class="about_article">
  <center>
<div class="about_title"> ACHIEVEMENTS UNLOCKED: <?php echo $ach;?>/10</div>
</center>
</div>

<div class="menuach clearfix">
<div class="menuitemach"><?php if($ach == 1 || $ach == 2 || $ach == 3 || $ach == 4) {?><img src="assets/images/profile_badge.png" width=30/><?php } else { ?>
  <img src="assets/images/profile_badge2.png" width=30/><?php } ?></div>
<div class="menunextach">MIPS Score above 50</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><?php if($ach == 2 || $ach == 3 || $ach == 4) {?><img src="assets/images/profile_badge.png" width=30/><?php } else { ?>
  <img src="assets/images/profile_badge2.png" width=30/><?php } ?></div>
<div class="menunextach">15 CME Credits</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><?php if($ach == 3 || $ach == 4) {?><img src="assets/images/profile_badge.png" width=30/><?php } else { ?>
  <img src="assets/images/profile_badge2.png" width=30/><?php } ?></div>
<div class="menunextach">20 CME Credits</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><?php if($ach == 4) {?><img src="assets/images/profile_badge.png" width=30/><?php } else { ?>
  <img src="assets/images/profile_badge2.png" width=30/><?php } ?></div>
<div class="menunextach">50 CME Credits</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><img src="assets/images/profile_badge2.png" width=30/></div>
<div class="menunextach">MIPS Score above 70</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><img src="assets/images/profile_badge2.png" width=30/></div>
<div class="menunextach">MIPS 2014 Participant</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><img src="assets/images/profile_badge2.png" width=30/></div>
<div class="menunextach">MIPS 2013 Participant</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><img src="assets/images/profile_badge2.png" width=30/></div>
<div class="menunextach">Healthcare Quiz</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><img src="assets/images/profile_badge2.png" width=30/></div>
<div class="menunextach">App Feedback</div>
</div>
<hr class="divider"/>
<div class="menuach clearfix">
<div class="menuitemach"><img src="assets/images/profile_badge2.png" width=30/></div>
<div class="menunextach">Quiz of the Week</div>
</div>
<hr class="divider"/>

</div>


<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
