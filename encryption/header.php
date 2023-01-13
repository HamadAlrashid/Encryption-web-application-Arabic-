<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <?php

  // set the theme by the Session
session_start();

if(isset($_SESSION['style']) || isset($_POST['style'])){
  if (isset($_POST['style'])) {
    //echo "there is post ";
  //  echo $_POST['style'];
    $_SESSION['style'] = $_POST['style'];
  }

  if(isset($_SESSION['style'])){
    //echo "there is session". $_SESSION['style'];
    echo "<link rel='stylesheet' type='text/css' href='". $_SESSION['style']."' id='theme_css'>";

  }


}else{// first time user open the page ==> load the default theme
echo "<link rel='stylesheet' type='text/css' href='style1.css' id='theme_css'>";

}
  ?>
<style>
.button {
    border: none;
    color: white;
    padding: 5px px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
<body>

<ul>
  <img class="logo" src="logo.png">

  <li><a href="index.php"> Home | الرئيسية</a></li>

  <li class="dropdown1">
    <a href="javascript:void(0)" class="dropbtn1" >Encryption | التشفير</a>
    <div class="dropdown-content1">
      <a href="aes.php">AES Cipher | تشفيرة الاي اي اس</a>
      <a href="CeasarCipher.php">Ceasar Cipher | تشفيرة القيصر</a>
    </div>
  </li>
  <li class="dropdown1">
    <a href="javascript:void(0)" class="dropbtn1">Convertor | التحويلات</a>
    <div class="dropdown-content1">
      <a href="hex2str.php">HEX TO STRING | هيكس الى نص</a>
      <a href="str2hex.php">STRING TO HEX | نص الى هيكس</a>
      <a href="base64.php">BASE64 ENCODER\DECODE | بيس 64</a>
    </div>
  </li>
  <li class="dropdown1">
    <a href="javascript:void(0)" class="dropbtn1">Hash | الهاش</a>
    <div class="dropdown-content1">
      <a href="md5.php">MD5</a>
      <a href="sha256.php">SHA256</a>
      <a href="sha1.php">SHA1</a>
    </div>
  </li>
  <li><a href="aboutus.php">About Us | من نحن </a></li>
  <li><a href="help.php">Help | مساعده</a></li>


</ul>

<center>
  <form action="" method="post">
<button class="button"  name="style" value="style2.css" style="background-color: black;">Dark Theme</button>
<button class="button"  name="style" value="style1.css"style="background-color: gray;">Default Theme</button>
</form>
</center>

</body>
</html>

<script type="text/javascript">

function swapStyleSheet(sheet) {
    document.getElementById("theme_css").setAttribute("href", sheet);
}




</script>
