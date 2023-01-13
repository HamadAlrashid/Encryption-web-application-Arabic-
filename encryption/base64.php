
<html>
<header>
  <title>Base64 Encode/Decoder</title>
</header>
<body>
  <center>
    <?php
    include_once("header.php");
    ?>

  <h2>Base64 Encode/Decoder</h2>

  <div class="container">
<br><br>
Input:<br>
  <form action="" method="post">
  <textarea name="input" style="height: 200px;" cols="20" rows="5" required="1" maxlength="500" placeholder="aGVsbG8uLi4= | hello ..."></textarea><br><br>
  <input type="submit" value="Encode!" name="encode">
  <input type="submit" value="Decode!" name="decode">
  </form>
  <?php
if (isset($_POST['encode'])){
$text = $_POST['input'];
$result = base64_encode($text);
echo " <div class='result'><h2>Result: <span style='background-color:#ffb4b4'>$result</span></h2></div>";
}
if (isset($_POST['decode'])){
$text = $_POST['input'];
$result = base64_decode($text);
echo "<div class='result'><h2> Result: <span style='background-color:#ffb4b4'>$result</span></h2></div>";
}




?>

</center>
</div>
<div class="container2" dir='rtl'>
  <h2>Useful Sources | مصادر مفيدة</h2><br>
  <a class="link" href="https://en.wikipedia.org/wiki/Base64">Base64 wikipedia</a><br>
  <a class="link" href="https://informatic-ar.com/unicode_encoding/">أساسيات لا بد لأي مبرمج معرفتها الترميز (Encoding)</a><br>
  <a class="link" href="https://stackoverflow.com/questions/201479/what-is-base-64-encoding-used-for">what-is-base-64-encoding-used-for</a><br>
  <a class="link" href="https://stackoverflow.com/questions/10315757/what-is-the-real-purpose-of-base64-encoding">what-is-the-real-purpose-of-base64-encoding</a><br>
</div>
<?php include_once("footer.php")?>



</body>

</html>
