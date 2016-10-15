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
    	$email= $row["email"];
      $pic = $row["pic"];
      $name = $row["name"];
      $npi = $row["npi"];
      $tin = $row["tin"];
      $mscore = $row["mscore"];
      $mustage = $row["mustage"];
      $payout = $row["payout"];
      $ccn = $row["ccn"];
      $speciality = $row["speciality"];
      $zipcode = $row["zipcode"];
      $city = $row["city"];
      $address = $row["address"];
      $phone = $row["phone"];
      $education = $row["education"];
      $acceptsMedicare = $row["acceptsMedicare"];
      $ach = $row["ach"];
      $mgroup = $row["mgroup"];
    }
  }

?>

<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  INFO
  <div class="editbutton">
    <a href="profile_edit.php">Edit</a>
  </div>
</div>

<div class="content">

<div class="spaced"></div>

<div class="about_article">

<div class="profileinfotitle">PROVIDER / ORG NAME</div>
<div class="profileinfotext"><?php echo $name;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">NPI</div>
<div class="profileinfotext linkdisabled"><?php echo $npi;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">TIN</div>
<div class="profileinfotext linkdisabled"><?php echo $tin;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">CCN</div>
<div class="profileinfotext linkdisabled"><?php echo $ccn;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">SPECIALITY</div>
<div class="profileinfotext"><?php echo $speciality;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">GROUP AFFILIATIONS</div>
<div class="profileinfotext"><?php echo $mgroup;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">ZIP</div>
<div class="profileinfotext linkdisabled"><?php echo $zipcode;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">CITY</div>
<div class="profileinfotext"><?php echo $city;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">ADDRESS</div>
<div class="profileinfotext linkdisabled"><?php echo $address;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">PHONE</div>
<div class="profileinfotext linkdisabled"><?php echo $phone;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">EDUCATION</div>
<div class="profileinfotext"><?php echo $education;?></div>
<hr class="divider"/>
<br/>
<div class="profileinfotitle">ACCEPTS MEDICARE ASSIGNMENTS</div>
<div class="profileinfotext"><?php echo $acceptsMedicare;?></div>
<hr class="divider"/>
</div>

</div>


<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
