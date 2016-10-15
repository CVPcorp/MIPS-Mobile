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


<body class="news">



<div class="navbar">
  <div class="backbutton">
    <a href="news.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
NEWS
</div>

<div class="content">

<div class="spaced"></div>


<?php
$query_string = "select * from news where id= '$getid'";
$query = mysqli_query($conn,$query_string);
if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_assoc($query)) {
      $id = $row["id"];
    	$title = $row["title"];
      $image_link = $row["image_link"];
      $description = $row["description"];
      $timestamp = $row["timestamp"];
    }
}
 ?>

<div class="news_article clearfix" style="font-size: 12pt;">
<b><?php echo strtoupper($title); ?></b>
</div>

<div class="news_article clearfix">
<img src="<?php echo $image_link; ?>" height=200px>
</div>

<div class="news_article clearfix">
<b><?php echo $timestamp; ?></b>
</div>

<div class="news_article clearfix">
<?php echo $description; ?>
</div>



</div>



<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
