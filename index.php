<?php
   ob_start();
   session_start();
?>
<?php
$login = $_SESSION['login'];
if($login == "true") {
header('Location: https://www.sgstudio4.com/cvp/test/profile.php');
}

$email = $_GET["email"];
$action = $_POST["action"];
$username2 = $_POST["username"];
$password2 = $_POST["password"];

$error = $_GET["error"];

$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
             && !empty($_POST['password'])) {

               // Database Operations

               $servername = "localhost";
               $username = "sgstudio_mips";
               $password = "MIPSroot";
               $dbname = "sgstudio_mips";

               $conn = new mysqli($servername, $username, $password, $dbname);
               if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
               }

               $query_string = "select * from masterdata where email = '$username2' && password = '" . md5($password2) . "'";
               $query = mysqli_query($conn,$query_string);
               if (mysqli_num_rows($query) > 0) {
                 while($row = mysqli_fetch_assoc($query)) {
                 $_SESSION['login'] = 'true';
                 $_SESSION['valid'] = true;
                 $_SESSION['timeout'] = time();
                 $_SESSION['userid'] = $row["id"];
                 header('Location: https://www.sgstudio4.com/cvp/test/profile.php');
               }
             }
               else {
                 $error = "Invalid Credentials. Please try again.";
                 header('Location: https://www.sgstudio4.com/cvp/test/index.php?error=' . $error . '&email=' . $username2);
               }
          }


?>
<?php
include 'header.php';
?>
<?php
include 'scripts.php';
?>


<body class="login" style="color: #333333;">
<div class="navbar">
PROFILE
</div>

<div class="logo" style="color: #333333;">
<img src="assets/images/cmslogo.png" width="200px" alt="CMS Logo"/>
</div>
<center>
<div class="logotext">
  MERIT-BASED INCENTIVE PAYMENT SYSTEM

  <form action="?action=login" method="POST">
             <div class="errormsg"><?php echo $error; ?></div>
<br/>

             <input alt="username" type = "text" class="loginip"
                name = "username" placeholder = "email" value="<?php echo $email;?>"><br/>
             &nbsp;<input alt="password" type = "password" class = "loginip"
                name = "password" placeholder = "password">
                <br/>
             <input alt="submit" class = "loginbt" type = "submit"
                name="login" value="Login">
</form>

Need an account? <br/><br/>
<button class = "loginbt" onClick="location.href='signup.php'"
   name="signupbt">Sign Up</button>




</center>
</div>




<div class="tabbar clearfix">
<div class="tabs"><a href="index.php"><img src="assets/images/tab_profile_blue.png" class="tabimg" alt="Profile"></a></div>
<div class="tabs"><a href="about.php"><img src="assets/images/tab_about_grey.png" class="tabimg" alt="About"></a></div>
<div class="tabs"><a href="news.php"><img src="assets/images/tab_news_grey.png" class="tabimg" alt="News"></a></div>
<div class="tabs"><a href="cme.php"><img src="assets/images/tab_cme_grey.png" class="tabimg" alt="CME"></a></div>
</div>



</body>
