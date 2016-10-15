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
NEWS
</div>

<div class="content">

<div class="spaced"></div>


<?php
$query_string = "select * from news";
$query = mysqli_query($conn,$query_string);
if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
      $id = $row["id"];
    	$image_link = $row["image_link"];
      $title = $row["title"];
      $description = $row["description"];
      $timestamp = $row["timestamp"];
      $title = nl2br($title);
      $description = nl2br($description);


      $limit = 75;
      if (strlen($description) > $limit)
      $description = substr($description, 0, strrpos(substr($description, 0, $limit), ' ')) . '...';

      echo "<div class='news_article clearfix'><a href='news_details.php?id=" . $id . "'>";
      echo "<div class='news_left'><img src='" . $image_link .  "'><br/><br/>" . $timestamp ."</div>";
      echo "<div class='news_right'>" . strtoupper($title) . "<br/><br/>" . $description . "</div>";
      echo "</a></div><hr class='divider'>";
    }
}
 ?>

</div>


</div>

<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
