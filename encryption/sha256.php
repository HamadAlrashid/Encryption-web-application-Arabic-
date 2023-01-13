

<!DOCTYPE html>
<html>
<head>
	<title>SHA256 Hash</title>
</head>
<body>
<center>
<?php
include_once("header.php");
?>
	<h2>SHA256 HASH</h2>
<br><div class="container">
	<form method="post" action="#">
		Input:<br><textarea name="input" style="height: 200px;" cols="20" maxlength="500" rows="5" required="1"></textarea><br>
		<br> <input type="submit" name="hash" value="Hash!">
	</form>
<?php
if (isset($_POST['hash'])){
	$hashed = hash('sha256', $_POST['input']);
	echo "<div class='result'><h3>Hashed: <span style='background-color:#ffb4b4'>$hashed</span></h3></div>";
}
?>
</div>
</center>
<div dir="ltr" class="container2">
<h1>What is SHA256 ?</h1><p>
  SHA-256 stands for Secure Hash Algorithm – 256 bit and is a type of hash function commonly used in Blockchain. A hash function is a type of mathematical function which turns data into a fingerprint of that data called a hash. It’s like a formula or algorithm which takes the input data and turns it into an output of a fixed length, which represents the fingerprint of the data.

  The input data can literally be any data, whether it’s the entire Encyclopedia Britannica, or just the number ‘1’. A hash function will give the same hash for the same input always no matter when, where and how you run the algorithm. Equally interestingly, if even one character in the input text or data is changed, the output hash will change. Also, a hash function is a one-way function, thus it is impossible to generate back the input data from its hash. So, you can go from the input data to <br>the hash but not from the hash to the input data.

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
