

<!DOCTYPE html>
<html>
<head>
	<title>MD5 Hash</title>
</head>
<body>
<center>
	<?php
	include_once("header.php");
	?>
	<h2>MD5 HASH</h2>
<br><div class="container">
	<form method="post" action="#">
		Input:<br><textarea name="input" style="height: 200px;" maxlength="500" cols="20" rows="5" required="1"></textarea><br>
		<br> <input type="submit" name="hash" value="Hash!">
	</form>
<?php
if (isset($_POST['hash'])){
	$hashed = hash('md5', $_POST['input']);
	echo "<div class='result'><h3>Hashed: <span style='background-color:#ffb4b4'>$hashed</span></h3></div>";
}
?>
</div>
</center>
<div dir="rtl">
	<div class="container2">
<h1> ماهو أم دي 5 | What is MD5 : </h1><p>
خوارزمية أم دي 5 أو خوارزمية هضم الرسالة الخامسة (بالإنجليزية: Message Digest MD5 algorithm) هي دالة الاختزال المسمّاة دالة هاش تشفيرية (Message Digest) والتي تُعتبر من أكثر دوال الاختزال انتشارًا في علم التشفير وأمن المعلومات نظرًا لسهولة تنفيذها وصعوبة اختراقها. يشمل ذلك نظرة سريعة على أهميّتها، طريقة تطويرها من النظريّة التي تتّبعها ومُخرجاتها، والنسخ السابقة لها إم دي2, إم دي4 المطوّرة في مختبرات إم آي تي MIT عن طريق الدكتور رونالد ريفست. يُفرّق أيضًا بين MD5 وبقيّة دوال الاختزال عن طريق أبرز خصائصها التقنيّة ومميّزاتها، ثُم يوضّح بشيءٍ من التفصيل خطوات تنفيذها بدءًا من طريقة الاختزال، مرورًا بالجولات الأربع انتهاءً باختزال الرسالة الأصليّة إلى شكلها النهائيّ. وأخيرًا يُلقي هذا المقال نظرة سريعة على عيوب ونقاط ضعف هذه الدالّة نسبةً إلى ثباتها أمام محاولات الاختراق، وسلسلة محاولات الكسر الناجحة التي حصلت عليها مُنذ بداية تطويرها.

</p>
<img src="hash.png">
<p>دالة هاش تشفيرية (على وجه التحديد، SHA-1) في العمل. لاحظ أن حتى التغيرات الصغيرة في المصدر في الدخل (هنا في كلمة "over") یؤدي إلى تغيير جذري في الخرج الناتج</p>
<br>	<h1>مصادر مفيدة  | Useful Sources</h1>
<a href="https://informatic-ar.com/%D9%85%D8%A7-%D9%87%D9%88-%D8%A7%D9%84-hashing-%D9%88%D9%84%D9%85%D8%A7%D8%B0%D8%A7-%D9%8A%D8%AC%D8%A8-%D8%A3%D9%86-%D9%84%D8%A7-%D9%8A%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-%D9%83%D9%88%D8%B3%D9%8A%D9%84/" class="link">ما هو ال Hashing ولماذا يجب أن لا يستخدم كوسيلة تشفير Encryption ؟</a><br>
<a href="https://ar.wikipedia.org/wiki/%D8%A5%D9%85_%D8%AF%D9%8A5" class="link">Wikipedia md5 </a><br>
<a href="https://www.tutorialspoint.com/cryptography/cryptography_hash_functions.htm" class="link">Cryptography Hash functions</a><br>
<a href="https://en.wikipedia.org/wiki/SHA-1" class="link">SHA-1</a><br>
<a href="https://www.computerworld.com/article/3173616/security/the-sha1-hash-function-is-now-completely-unsafe.html" class="link">The SHA1 hash function is now completely unsafe</a>


</div>

<?php include_once("footer.php")?>

</body>
</html>
