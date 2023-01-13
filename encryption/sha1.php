

<!DOCTYPE html>
<html>
<head>
	<title>SHA1 Hash</title>
</head>
<body>
<center>
	<?php
	include_once("header.php");
	?>
	<h2>SHA1 HASH</h2>
<br><div class="container">
	<form method="post" action="#">
		Input:<br><textarea name="input" style="height: 200px;" maxlength="500" cols="20" rows="5" required="1"></textarea><br>
		<br> <input type="submit" name="hash" value="Hash!">
	</form>
<?php
if (isset($_POST['hash'])){
	$hashed = hash('sha1', $_POST['input']);
	echo "<div class='result'><h3>Hashed: <span style='background-color:#ffb4b4'>$hashed</span></h3>";
}
?>
</center>
<div dir="ltr" class="container2">
<h1>What is SHA1 ?</h1><p>
  In cryptography, SHA-1 (Secure Hash Algorithm 1) is a cryptographic hash function which takes an input and produces a 160-bit (20-byte) hash value known as a message digest – typically rendered as a hexadecimal number, 40 digits long. It was designed by the United States National Security Agency, and is a U.S. Federal Information Processing Standard.[3]
  <br>
  Since 2005 SHA-1 has not been considered secure against well-funded opponents,[4] and since 2010 many organizations have recommended its replacement by SHA-2 or SHA-3.[5][6][7] Microsoft, Google, Apple and Mozilla have all announced that their respective browsers will stop accepting SHA-1 SSL certificates by 2017.[8][9][10][11][12][13]
  <br>
  In 2017 CWI Amsterdam and Google announced they had performed a collision attack against SHA-1, publishing two dissimilar PDF files which produced the same SHA-1 hash

</p>
<div dir="rtl">
<img src="hash.png">
<p>دالة هاش تشفيرية (على وجه التحديد، SHA-1) في العمل. لاحظ أن حتى التغيرات الصغيرة في المصدر في الدخل (هنا في كلمة "over") یؤدي إلى تغيير جذري في الخرج الناتج</p>
<br>	<h1>مصادر مفيدة  | Useful Sources</h1>
	<a href="https://informatic-ar.com/%D9%85%D8%A7-%D9%87%D9%88-%D8%A7%D9%84-hashing-%D9%88%D9%84%D9%85%D8%A7%D8%B0%D8%A7-%D9%8A%D8%AC%D8%A8-%D8%A3%D9%86-%D9%84%D8%A7-%D9%8A%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-%D9%83%D9%88%D8%B3%D9%8A%D9%84/" class="link">ما هو ال Hashing ولماذا يجب أن لا يستخدم كوسيلة تشفير Encryption ؟</a><br>
	<a href="https://ar.wikipedia.org/wiki/%D8%A5%D9%85_%D8%AF%D9%8A5" class="link">Wikipedia md5 </a><br>
	<a href="https://www.tutorialspoint.com/cryptography/cryptography_hash_functions.htm" class="link">Cryptography Hash functions</a><br>
  <a href="https://en.wikipedia.org/wiki/SHA-1" class="link">SHA-1</a><br>
  <a href="https://www.computerworld.com/article/3173616/security/the-sha1-hash-function-is-now-completely-unsafe.html" class="link">The SHA1 hash function is now completely unsafe</a>
</div>
</div>




<?php include_once("footer.php")?>
</body>
</html>
