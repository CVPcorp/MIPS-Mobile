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

$rand = rand(1,8);
switch($rand) {
  case 1:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_1.php'>Advancing Care Information</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_2.php'>Quality</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a>";
  $random1 = "You can have a look at the following links on ways you can improve.";
  $random2 = "Let me know if you have any other questions.";
  break;
  case 2:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_2.php'>Quality</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_4.php'>Improvement Activities</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a>";
  $random1 = "Here are some links to find more about MIPS.";
  $random2 = "I hope it helps.";
  break;
  case 3:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_3.php'>Cost</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_4.php'>Improvement Activities</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a>";
  $random1 = "You can try some of this links.";
  $random2 = "I'm sure you will find these links useful.";
  break;
  case 4:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_4.php'>Improvement Activities</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_1.php'>Advancing Care Information</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a> ";
  $random1 = "Take a look at some of these articles.";
  $random2 = "I'm sure you will find these articles useful.";
  break;
  case 5:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_2.php'>Quality</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_3.php'>Cost</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a> ";
  $random1 = "Why don't you have a look at this?";
  $random2 = "Hope you find some of these useful.";
  break;
  case 6:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_4.php'>Clinical Practice Improvement Activities</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_2.php'>Quality</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a>";
  $random1 = "This would proabably be helpful to you.";
  $random2 = "I'm always here to help you.";
  break;
  case 7:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_2.php'>Quality</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_3.php'>Cost</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a> ";
  $random1 = "This might be helpful to you.";
  $random2 = "Let me know if you need further help.";
  break;
  case 8:
  $rlink = "<a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_1.php'>Advancing Care Information</a> and <a href='https://www.sgstudio4.com/cvp/test/about_mips_pc_3.php'>Cost</a>. More information at <a href='https://qpp.cms.gov/learn/qpp' target='_blank'>https://qpp.cms.gov/learn/qpp</a> ";
  $random1 = "Let me check...Here is what I found on the web for MIPS";
  $random2 = "I'm sure you will find these links useful.";
  break;
  default:
  break;
}

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
      $name = $row["sname"];
      $npi = $row["npi"];
      $mscore = $row["mscore"];
    }
  }

?>

<body class="about">

  <?php
  if(isset($_POST["submit"])) {
    $user_msg = $_POST['chat'];
    $user_response = "<div class='chatbubbleright'> " . $user_msg . "
    </div><div style='clear:both;''/>";

    $new_response = "<div class='chatbubbleleft'> " . $random1 . "
    </div>
    <div style='clear:both;''/>
    <div class='chatbubbleleft'>
      " . $rlink . "
    </div>
    <div style='clear:both;''/>
    <div class='chatbubbleleft'> " . $random2 . "
    </div>
    <div style='clear:both;'/>";
  }

  ?>

<div class="navbar">
  <div class="backbutton">
    <a href="profile_cs.php"><img src="assets/images/back_text.png" height=20></a>
  </div>
CMS CHAT
</div>

<div class="content">

<div class="spaced"></div>

<div class="chatbubbleleft">
  Hello <?php echo $name;?>, Welcome to CMS Customer Support Chat
</div>
<div style="clear:both;"/>
<div class="chatbubbleleft">
  From your NPI <?php echo $npi;?>, I see that your MIPS score in the year 2014 was <?php echo $mscore;?>.
</div>
<div style="clear:both;"/>
<?php echo $user_response; ?>
<?php echo $new_response; ?>

</div>

<div class="chatsendbox">
<form name="cmschat" method=post action="?send=chat">
  <input type="text" name="chat" size=45 class="chatip">&nbsp;
  <input type="submit" value="Send" name="submit" id="submit" class="chatsubmit">
</form>
</div>

<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg"></a></div>
</div>



</body>
