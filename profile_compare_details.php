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
$cdid = $_GET['id'];
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
$num_result1 = mysqli_num_rows($query);
if ($num_result1 > 0) {
    while($row = mysqli_fetch_assoc($query)) {
      $id_cd = $row["id"];
      $speciality = $row["speciality"];
    }
  }

$query_string_cd = "select * from comparedata where id = '$cdid' ";
$query_cd = mysqli_query($conn,$query_string_cd);
$num_result = mysqli_num_rows($query_cd);
if ($num_result > 0) {
    while($row = mysqli_fetch_assoc($query_cd)) {
      $id_cd = $row["id"];
      $name_cd = $row["name"];
      $npi_cd = $row["npi"];
      $zipcode_cd = $row["zipcode"];
      $location_cd = $row["location"];
      $mips_cd = $row["mips"];

    }
  }


?>


<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile_compare.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
  COMPARE
</div>

<div class="content">

<div class="spaced"></div>



<div class="about_article">
<br/><br/>




<div class="menuc clearfix">
  <div class="menuitemcimg">
    <img src="assets/images/placeholder.png" width="100%"/>
  </div>


<div class="menuitemc">
  <div class="profileinfotextbig"><?php echo $name_cd; ?></div>
  <div class="profileinfotitle"><?php echo $npi_cd; ?></div>

</div>
<div class="menunextc">
  <div class="comparezip"><?php echo $zipcode_cd; ?></div>
  <div class="comparedist"><?php echo $location_cd; ?></div>
  <div class="comparemips"><?php echo $mips_cd; ?></div>
</div>
</div>
<hr class="divider"/>
<br/>
<div class="profileinfotextbig">Speciality</div>
<div class="profileinfotextsmall"><?php echo $speciality;?></div>
<hr class="divider"/>
<br/>

<div class="profileinfotextbig">Address</div>
<div class="profileinfotextsmall">WASHINGTON TOWNSHIP MEDICAL FOUNDATION<br/>
39500 FREMONT BLVD<br/>
Suite 100<br/>
FREMONT, CA 94538</div><br/>
<div class="profileinfotextsmall"><a href="tel:5106879510">(510) 687-9510</div><br/>
<div class="profileinfotextsmall"><a href="https://www.google.co.in/maps/place/Washington+Township+Medical+Foundation,+Inc./@37.554812,-121.9846385,17z/data=!4m5!3m4!1s0x808fc085e7433963:0x4626f5cbf8e94c24!8m2!3d37.5558412!4d-121.9830667" target="_blank">Maps and Directions</a></div><br/>
<hr class="divider"/>
<br/>
<div class="profileinfotextbig">Education</div>
<div class="profileinfotextsmall">Graduated: 1974 <br/>
Wayne State University School Of Medicine<br/>
Presby Med Ctr, General Medicine, 1976-1979<br/></div>
<hr class="divider"/>
<br/>
<div class="profileinfotextbig">Affiliations</div>
<div class="profileinfotextsmall">Group Affiliations: Washington Township Medical Foundation <br/>
Hospital Affiliations: Washington Hospital<br/></div>
<hr class="divider"/>
<br/>
<div class="profileinfotextbig">Participation in quality activities</div><br/><br/>
<div class="profileinfotextsmall">
  <table cellspacing=3 cellpadding=3 class="compare_bottom" width="90%">
  <tr>
    <td width="20%"><img src="assets/images/compare_tick.png" width=25/>
    </td>
    <td width="80%">Patient Quality Reporting System (PQRS)
    </td>
  </tr>
  <tr>
    <td width="20%"><img src="assets/images/compare_no_tick.png" width=25/>
    </td>
    <td width="80%">PQRS Maintenance of Certification Program Incentive
    </td>
  </tr>
  <tr>
    <td width="20%"><img src="assets/images/compare_tick.png" width=25/>
    </td>
    <td width="80%">Electronic Health Record (EHR) Incentive Program
    </td>
  </tr>
  <tr>
    <td width="20%"><img src="assets/images/compare_tick.png" width=25/>
    </td>
    <td width="80%">Consumer Assesment of Healthcare Providers & Systems
    </td>
  </tr>
  <tr>
    <td width="20%"><img src="assets/images/compare_no_tick.png" width=25/>
    </td>
    <td width="80%">Million Hearts
    </td>
  </tr>
  </table>
</div>

<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
