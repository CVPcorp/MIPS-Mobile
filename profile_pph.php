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


// Meaningful Use
$mu_query_string = "select * from programhistory_mu where uid = '$uid'";
$mu_query = mysqli_query($conn,$mu_query_string);
if (mysqli_num_rows($mu_query) > 0) {
    while($row = mysqli_fetch_assoc($mu_query)) {
      $mu_id[] = $row["id"];
    	$mu_uid[] = $row["uid"];
      $mu_year[] = $row["year"];
      $mu_stage[] = $row["stage"];
    }
  }

  // Value-based Modifier
  $vm_query_string = "select * from programhistory_vm where uid = '$uid'";
  $vm_query = mysqli_query($conn,$vm_query_string);
  if (mysqli_num_rows($vm_query) > 0) {
      while($row = mysqli_fetch_assoc($vm_query)) {
        $vm_id[] = $row["id"];
      	$vm_uid[] = $row["uid"];
        $vm_year[] = $row["year"];
        $vm_stage[] = $row["stage"];
      }
    }

    // MIPS Score
    $mips_query_string = "select * from programhistory_mips where uid = '$uid'";
    $mips_query = mysqli_query($conn,$mips_query_string);
    if (mysqli_num_rows($mips_query) > 0) {
        while($row = mysqli_fetch_assoc($mips_query)) {
          $mips_id[] = $row["id"];
        	$mips_uid[] = $row["uid"];
          $mips_year[] = $row["year"];
          $mips_score[] = $row["score"];
        }
      }

      // PQRS
      $pqrs_query_string = "select * from programhistory_pqrs where uid = '$uid'";
      $pqrs_query = mysqli_query($conn,$pqrs_query_string);
      if (mysqli_num_rows($pqrs_query) > 0) {
          while($row = mysqli_fetch_assoc($pqrs_query)) {
            $pqrs_id[] = $row["id"];
          	$pqrs_uid[] = $row["uid"];
            $pqrs_year[] = $row["year"];
            $pqrs_payout[] = $row["payout"];
          }
        }

?>


<body class="about">


<div class="navbar">
  <div class="backbutton">
    <a href="profile.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
PROGRAM HISTORY
</div>

<div class="content">

<div class="spaced"></div>


<div class="about_article clearfix">

<center>
<div class="about_title">MEANINGFUL USE</div><br/>

<table class="infotable" cellspacing=0 cellpadding=0 width="90%" border=0>
<tr>
  <td class="infotableheader" width="50%">YEAR
  </td>
  <td class="infotableheader" width="50%">STAGE
  </td>
</tr>
<tr>
  <td class="infotablerow1" width="50%"><?php echo $mu_year[0];?>
  </td>
  <td class="infotablerow1" width="50%"><?php echo $mu_stage[0];?>
  </td>
</tr>
<tr>
  <td class="infotablerow2" width="50%"><?php echo $mu_year[1];?>
  </td>
  <td class="infotablerow2" width="50%"><?php echo $mu_stage[1];?>
  </td>
</tr>
<tr>
  <td class="infotablerow1" width="50%"><?php echo $mu_year[2];?>
  </td>
  <td class="infotablerow1" width="50%"><?php echo $mu_stage[2];?>
  </td>
</tr>
</table>

<br/><br/>
<div class="about_title">VALUE BASD MODIFIER</div><br/>
<table class="infotable" cellspacing=0 cellpadding=0 width="90%" border=0>
<tr>
  <td class="infotableheader" width="50%">YEAR
  </td>
  <td class="infotableheader" width="50%">STAGE
  </td>
</tr>
<tr>
  <td class="infotablerow1" width="50%"><?php echo $vm_year[0];?>
  </td>
  <td class="infotablerow1" width="50%"><?php echo $vm_stage[0];?>
  </td>
</tr>
<tr>
  <td class="infotablerow2" width="50%"><?php echo $vm_year[1];?>
  </td>
  <td class="infotablerow2" width="50%"><?php echo $vm_stage[1];?>
  </td>
</tr>
<tr>
  <td class="infotablerow1" width="50%"><?php echo $vm_year[2];?>
  </td>
  <td class="infotablerow1" width="50%"><?php echo $vm_stage[2];?>
  </td>
</tr>
</table>
<br/><br/>
<div class="about_title">MIPS COMPOSITE SCORE</div><br/>
<table class="infotable" cellspacing=0 cellpadding=0 width="90%" border=0>
<tr>
  <td class="infotableheader" width="50%">YEAR
  </td>
  <td class="infotableheader" width="50%">SCORE
  </td>
</tr>
<tr>
  <td class="infotablerow1" width="50%"><?php echo $mips_year[0];?>
  </td>
  <td class="infotablerow1" width="50%"><?php echo $mips_score[0];?>
  </td>
</tr>
<tr>
  <td class="infotablerow2" width="50%"><?php echo $mips_year[1];?>
  </td>
  <td class="infotablerow2" width="50%"><?php echo $mips_score[1];?>
  </td>
</tr>
</table>
<br/><br/>
<div class="about_title">PQRS ADJUSTMENTS</div><br/>
<table class="infotable" cellspacing=0 cellpadding=0 width="90%" border=0>
<tr>
  <td class="infotableheader" width="50%">YEAR
  </td>
  <td class="infotableheader" width="50%">PAYOUT ($)
  </td>
</tr>
<tr>
  <td class="infotablerow1" width="50%"><?php echo $pqrs_year[0];?>
  </td>
  <td class="infotablerow1" width="50%"><?php echo $pqrs_payout[0];?>
  </td>
</tr>
<tr>
  <td class="infotablerow2" width="50%"><?php echo $pqrs_year[1];?>
  </td>
  <td class="infotablerow2" width="50%"><?php echo $pqrs_payout[1];?>
  </td>
</tr>
</table>
<br/><br/>
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
