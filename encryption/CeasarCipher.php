<?php
//ctype_alpha(text)
//str_split(string)

function Ceasar($text,$key,$mode='e'){
	//echo "Plaintext: ". $text;
	//echo "<br> key:". $key;

	if ($mode == "d") {
		$key = $key * -1 ;
	}
	$newtext = "";

	$text = str_split($text);

	foreach ($text as $letter) {
		//echo "<br> ::".$letter;
		if (ctype_alpha($letter)) {

			$num = ord($letter);
			$num += $key ;

			if (ctype_lower($letter)) {
				if($num > ord('z')){
					$num -= 26;

				}elseif ($num < ord('a')) {
					$num += 26;
				}

			}elseif (ctype_upper($letter)) {
				if ($num > ord('Z')) {
					$num -= 26;

				}elseif ($num < ord('A')) {
					$num += 26;
				}
			}
			$newtext .= chr($num);
		}else{
			$newtext .= $letter;
		}

	} return $newtext ;

}

if(isset($_POST['Encrypt'])){ //check if there a submit
	$plaintext = $_POST['plaintext'];
	$key = $_POST['key'];

	$ciphertext = Ceasar($plaintext, $key);

}if (isset($_POST['Decrypt'])) {
		$plaintext = $_POST['plaintext'];
	$key = $_POST['key'];

	$Decryptedtext = Ceasar($plaintext, $key, 'd');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ceasar Cipher | تشفيرة القيصر</title>
</head>
<body><center>
	<?php
include_once("header.php");
?>
<h2>Ceasar Cipher | تشفيرة القيصر</h2>
<div class="container">


	<form action="" method="post">
		Input:<br>
		<textarea name="plaintext" style="resize: none;" cols="20" rows="5" maxlength="500" placeholder="Hello Khalid..."></textarea><br><br>
		Password:<br>
		<input type="number" name="key" min="1" max="25" required="1" placeholder="1-25">
		<br><br>
		<input type="submit" name="Encrypt" value="Encrypt!">
		<input type="submit" name="Decrypt" value="Decrypt!">
		<?php
		if (isset($ciphertext)) {
			echo "<br><br><div class='result'><h2> Encrypted: <span style='background-color:#ffb4b4'>". $ciphertext. "</span></h2></div>";
		}
		elseif (isset($Decryptedtext)) {
			echo "<br><br><div class='result'> <h2>Decrypted : <span style='background-color:#ffb4b4'>". $Decryptedtext. "</span></h2></div>";
		}
		?>
	</form>
</div>
</center>

<div class="container2" dir="rtl">

<h1>طريقة الاستخدام | Usage</h1>
<p><h3>Input : </h3><br>
 البيانات المراد تشفيرها
 <br>
 *[A-Z]
<br><br>
<h3>
Password :
<br>
</h3>
المفتاح المستخدم في التشفير
(الباسوورد).
<br>
*يجب ان يكون بين 0-25
</p>
<h1>ماهي تشفيرة القيصر | CeasarCipher ?</h1>
<p>
	في علم التعمية التقليدي (classic cryptography) شفرة قيصر هي وسيلة لتشفير النصوص , هذه الشفرة شاع استخدامها قديما ويُعتقد أن يوليوس قيصر كان أول من استخدم هذه الوسيلة وكان ذلك بين 58 ق.م حتى 51 ق.م , وخوارزمية التشفير كانت جدا بسيطة إذ انه كان يبدل الحرف المُراد تشفيره بالحرف الثالث الذي يليه , أي لو أراد تشفير حرف "ا" كان يكتب مكانه حرف "ث" وهكذا . عندما اخذ زمام الأمور اغسطس كانت الازاحة مقدار حرفين فقط !
<br>
	حسب المعايير الحديثة هذا النوع من التشفير هو غير امن البتة إذ انه من النص المشفر يمكن استنباط النص الأصلي , وذلك لان توزيع الحروف في النص لا يتغير وبالتالي حسب التوزيع الأصلي للغة الاصل يمكن استنباط النص الأصلي , هذا النوع من الهجمات يسمى : هجوم النص المشفر فقط .

</p>
</div>

<?php include_once("footer.php")?>


</body>
</html>
