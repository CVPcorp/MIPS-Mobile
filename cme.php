<?php
include 'header.php';
?>
<?php
include 'scripts.php';
?>

<?php

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
CME CREDITS
</div>

<div class="content">

<div class="spaced"></div>

<div class="cmelogo">
  <img src="assets/images/cme_credits.png" height=100/>
</div>


<?php
$query_string = "select * from cmecourses";
$query = mysqli_query($conn,$query_string);
if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
      $id = $row["id"];
    	$title = $row["title"];
      $link = $row["link"];
      $credits = $row["credits"];
      $overview = $row["overview"];
      $objectives = $row["objectives"];

      echo "<div class='course_article clearfix'><a href='cme_details.php?id=" . $id . "'>";
      echo "<div class='course_left'><b>" . $title . "</b><br/>Credits: " . $credits . "<br/>" . $overview . "</div>";
      echo "<div class='course_right'><img src=assets/images/cme_credits2.png height=50><br/><button class='course_button' onClick='document.location.href=" . $link . "'>TAKE COURSE</button></div>";
      echo "</a></div>";
    }
}
 ?>

</div>


</div>

<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_blue.png" class="tabimg"></a></div>
</div>



</body>
