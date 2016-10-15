<?php
   ob_start();
   session_start();
?>
<?php
$login = $_SESSION['login'];
if($login != "true") {
header('Location: https://www.sgstudio4.com/cvp/test/index.php');
}
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
      $name = $row["name"];
      $sname = $row["sname"];
      $npi = $row["npi"];
    }
  }

?>

<body class="news">


<div class="navbar">
  <div class="backbutton">
    <a href="about_eligible.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
ARE YOU ELIGIBLE?
</div>

<div class="content">

<div class="spaced"></div>


<div class="about_article clearfix">

<div class="about_title">ARE YOU ELIGIBLE?</div>

<br/><br/>
<center>
  Hi <?php echo $sname; ?>, <br/>
  From your NPI <?php echo $npi; ?>, <br/>
  we found that you are <br/><br/>

  <img src="assets/images/ELIGIBLE.png" height=30>

<br/><br/><br/><br/><br/><br/>
Learn more about the MIPS program in the area related to your speciality <br/><br/>
<a href="about_eligible.php"><img src="assets/images/MORE-INFO.png" height=30></a>
</center>

</div>

</div>

<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
