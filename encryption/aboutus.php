
<!DOCTYPE html>
<html>
<head>
	<title>About Us | تواصل معنا</title>
</head>
<body>

<center>
	<?php
	include_once('header.php')
	?>

		<h2>About Us | تواصل معنا</h2>



<div class="container">
	<img src="school.jpeg" width="640" height="181" alt="">\

	<div><h3> This project was developed by Hamad Alrashid in 2018 to apply for the national olmpiad competition in Saudi Arabia. The project won the second best project in Riyadh.
<br><br>
	The project was developed using php, javascript, and Openssl library      
<br><br>

</h3></div>

	<div dir="rtl"><h3>تم عمل هذا المشروع من قبل حمد ابراهيم الراشد – مدارس الرواد الأهليه – ثالث ثانوي
<br><br>
تم تطوير المشروع باستخدام لغة     php  و javascript  وتم استخدام css  في التصميم ,  وتم استخدام مكتبة openssl لتشفير البيانات
<br><br>

</h3></div>
	<form action="" method="post">
		الاسم:<input type="text" name="name" required="1" placeholder="Hamad ..."><br>
		الايميل:<input type="text" name="sender" required="1" placeholder="myemail@gmail.com"><br>
		العنوان:<input type="text" name="subject" required="1" placeholder="Question About Encryption Methods..."><br>
		الرسالة:<br><textarea name="message" maxlength="500" style="height: 200px;" cols="20" rows="5" required="1"></textarea><br>
		<input type="submit" name="send" value="Send">



	</form>
<?php
if (isset($_POST['send'])) { // it will need a mail server
	/*
	$to = "hamadir10@gmail.com";
	$subject = $_POST['subject'];
	$text = $_POST['message'];
	$headers = "from:".$_POST['sender']. " \n name:".$_POST['name'] ;
	mail($to, $subject, $text, $headers);
	*/
	echo "<center><h3><div class='container'><h5>There is no MailServer, So this Function is not Working</h5><br>Thank you ". $_POST['name']. " for contacting us | ِشكرا لك  </div></h3></center>";
}



?>

</div>


</center>

<?php include_once("footer.php")?>
</body>
</html>
