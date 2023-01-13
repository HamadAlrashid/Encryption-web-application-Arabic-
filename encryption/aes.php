<?php


//getting Cipher method in the dropdown list
$methodnames = array('cbc','cfb', 'ecb');
$opensslmethods = openssl_get_cipher_methods();
$AESmethods = array();
foreach ($opensslmethods as $method) {
	if (substr($method, 0,3) == "aes" ) {
		if(substr($method, -3) == $methodnames[0] || substr($method, -3) == $methodnames[1] || substr($method, -3) == $methodnames[2]){
			array_push($AESmethods, $method) ;


		}

	}
}



?>

<!DOCTYPE html>
<html>
<head>
<center>
<?php include_once('header.php'); ?>
	<title>AES Encrpytion | تشفير </title>

</head>
<body>

<h2> AES Encrpytion | تشفير</h2>
<div class="container">

	<form action="#" method="post">
		<div style="float: right">
			Settings:
		<br><input type="radio" onclick="Mode()" name="mode" id="normal" value="normal" checked/>Normal | عادي
		<br><input type="radio" onclick="Mode()" name="mode" id="advance"/>Advance | متقدم<br><br>
	</div>
<br><br>
<br><br>
<br>

		Message | الرسالة :<br>
		<textarea name="text" style="height: 200px;" cols="20" rows="5" maxlength="500" required="1" placeholder="Hello Mohammed..."></textarea>
		<br>
		<input type="radio" name="texttype" value="plaintext" checked />Plaintext | نص <input type="radio" name="texttype"  value="hex"/>Hex


		<br><br>
		Key | الباسوورد:<br>
		<input type="text" name="key" required="1" placeholder="(Encryption/Decryption Key)">




		<br><br>
		<div id="hide1" style="display:none">
		&emsp;&emsp;<select name="method" id="dropdown" onchange="FindSelected()" >
			<br><br>

			<option value="" >Select the Cipher Method | نوع التشفير</option>
			<?php
			foreach ($AESmethods as $method ) { ?>
			<option value="<?php echo $method ; ?>"><?php echo $method ;?> </option>
			<?php
			}
			?>


		</select>
		<a id="help0" class="link" href="#help1">Help</a>
				<br><br>

		IV(Initialization Vector):<br>
		<input type="text" name="iv" id="iv" placeholder="Used with CBC,CFB ONLY " >
		<br>
			<input type="radio" name="ivtype" id="ivtype" value="plaintext"  checked />Plaintext | نص
			<input type="radio"  name="ivtype"  id="ivtype1" value="hex"/>Hex
		<br><br>
	</div>
		<input type="submit" name="Encrypt" value="Encrypt!">
		<input type="submit" name="Decrypt" value="Decrypt!">

	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script type="text/javascript">

//disable the iv if the method is ecb
function FindSelected(){
	var method = document.getElementById('dropdown').value
	if (method.endsWith('ECB')) {
		document.getElementById('ivtype1').disabled=true;
		document.getElementById('ivtype').disabled=true;
		document.getElementById('iv').disabled=true;
	}else{
		document.getElementById('ivtype1').disabled=false;
		document.getElementById('ivtype').disabled=false;
		document.getElementById('iv').disabled=false;

	}
}
// scroll down with jQuery
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#help0").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
// change the mode to advance
function Mode(){
	if (document.getElementById('advance').checked) {
		document.getElementById('hide1').style.display = 'block';
		document.getElementById('dropdown').required = true;

	}else {
		document.getElementById('hide1').style.display = 'none';
		document.getElementById('dropdown').required = false;
	}
}

function Copy(text=0) { // the Function for copying the output

	var ele = document.createElement("textarea");
     document.body.appendChild(ele);
     ele.value = text;
     ele.select();
     document.execCommand("copy");
     document.body.removeChild(ele);
  alert("Successfully Copied | تم النسخ بنجاح ");
}
</script>
<?php

//check which button is clicked
if (isset($_POST['Encrypt'])) {

	checkbuttons("e");
	}

if (isset($_POST['Decrypt'])) {
	checkbuttons("d");
}


//the encryption/decryption function
function AES($text, $method, $key, $iv, $do){

//genarate a random 16 bytes for the iv
  if($iv === "random"){
			$ivlen = openssl_cipher_iv_length($method);
			$iv = openssl_random_pseudo_bytes($ivlen);

    }



	if($do == "e"){

//encrypt function
		$encrypted = openssl_encrypt($text, $method, $key, $options=OPENSSL_RAW_DATA, $iv);

	return $encrypted; //RAW = Binary

	}elseif($do == "d"){
//decrypt function
			$decrypted = openssl_decrypt($text, $method,$key,$options=OPENSSL_RAW_DATA, $iv);

	return $decrypted ; //RAW = Binary

	}
	}


function checkbuttons($do){
	$text = $_POST['text'];
	$key = $_POST['key'];
	$texttype = $_POST['texttype'];
	$mode1 = $_POST['mode'];

	if ($_POST['mode'] == "normal"){
		$method = "AES-256-ECB";
	}else{
		$method = $_POST['method'];
	}


	if($texttype == "plaintext" and $do == "d"){
		$text = base64_decode($text);
	}elseif($texttype == "hex"){$text = Hex2String($text);}

	if(substr($method, -3) != "ECB"){
	$ivtype = $_POST['ivtype'];
	$iv = $_POST['iv'];
	if($ivtype == "hex"){$iv = Hex2String($iv); }

//check for iv
$messageiv = "<br><div class='container'> IV : You have Entered:".strlen($iv)." Bytes. <br>IV must be 16 bytes (A Random IV will be genarated by the server!)</div>";
	if (strlen($iv) == 0  ) {
		echo $messageiv;
		$iv = "random";
		}

	elseif (strlen($iv) > 0 and strlen($iv) < 16 ) {

		echo $messageiv;
		$iv = "random";

	}
	elseif (strlen($iv) > 16 ){

		echo $messageiv;
		$iv = "random";

	}
  if($iv === "random"){

			$iv="random";
      $iv = "0000000000000000"; // delete this line and the iv will be genarated randomly

          }

		$cipher = AES($text, $method, $key, $iv, $do) ;
	}else{
		$iv = "";

	$cipher = AES($text, $method, $key,$iv, $do) ;}

	//echo decryption or encryption for user
	if($do == "e"){
		if ($mode1 == "normal"){
			$copied = base64_encode($cipher);
			$copied2 = bin2hex($cipher);
			echo "<div class='container'><center><div class='result'><h1>Encrypted:</h1><br><h2><br><br>CipherText | الرسالة المشفره:  <span style='background-color:#ffb4b4'>". $copied. "</span><input type='button' class='copy' onclick='Copy(\"$copied\")' value='Copy | نسخ' /><br><br>HEX: <span style='background-color:#ffb4b4'>".$copied2."</span><input type='button' class='copy' onclick='Copy(\"$copied2\")' value='Copy | نسخ' /><br><br>Key : $key<br></h2></div></center></div>" ;

		}else{
		$copied = base64_encode($cipher);
		$copied2 = bin2hex($cipher);
	echo "<div class='container'><center><div class='result'><h1>Encrypted:</h1><br><h2><br><br>CipherText | الرسالة المشفره:  <span style='background-color:#ffb4b4'>". $copied. "</span><input type='button' class='copy' onclick='Copy(\"$copied\")' value='Copy | نسخ' /><br><br>HEX: <span style='background-color:#ffb4b4'>".$copied2."</span><input type='button' class='copy' onclick='Copy(\"$copied2\")' value='Copy | نسخ' /><br><br>Key: $key<br><br>IV:$iv</h2></div></center></div>" ;
}
	}elseif ($do == "d") {
		echo "<div class='container'><center><div class='result'><h1>Decrypted:</h1><br><h2><br>Plaintext | الرسالة: <span style='background-color:#ffb4b4'>".$cipher. "</span><input type='button' class='copy' onclick='Copy(\"$cipher\")' value='Copy | نسخ' /></h2></div></center></div>" ;
	}

	}


// function to convert a string to hexadecimal
function String2Hex($string){
    $hex='';
    for ($i=0; $i < strlen($string); $i++){
        $hex .= dechex(ord($string[$i]));
    }
    return $hex;
}

// function to convert hexadecimal to string
function Hex2String($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}

?>
</center>
<div class="container2" dir="rtl" id="help1">

<h1>طريقة الاستخدام | Usage</h1>
<p><h3> Message | الرسالة : </h3><br>
 البيانات المراد تشفيرها
<br><br>
<h3>
Key | الباسوورد:
<br>
</h3>
المفتاح المستخدم في التشفير
(الباسوورد).
<br>
جدول ال Key Size
<!DOCTYPE html>


<h2>KeySizes info</h2>

<table align="center" dir="ltr">
  <tr>
    <th> Bit|بت</th>
    <th>Keylength | طول المفتاح </th>
    <th>Number of possibilities | عدد الاحتمالات</th>
    <th>Time to Crack | كم من الوقت تحتاج حتى تكسر الشفره</th>
  </tr>
  <tr>
    <td>128Bit</td>
    <td>16 Byte</td>
    <td>3.4 X 10^28 Key</td>
    <td>1.02 X 10^28 Years</td>

  </tr>
  <tr>
    <td>192Bit</td>
    <td>24 Bytes</td>
    <td>6.2 X 10^57 Key</td>
    <td>1.872 X 10^37 Years</td>
  </tr>
  <tr>
    <td>256Bit</td>
    <td>32 Byte</td>
    <td>1.1 X 10^77 Key</td>
    <td>3.31 X 10^56 Years</td>
  </tr>

</table>
سيتم عمل بادينق في حال كان طول المفتاح غير صحيح
<br><a class="link" href="https://cryptography.io/en/latest/hazmat/primitives/padding/">Padding</a>


<br><br>
<h3>
Select Cipher Method | طريقة التشفير : </h3><br>
في خوارزمية معيار التشفير المتقدم يوجد 6 عمليات للتشفير , ووضعنا لكم أشهر ثلاثة وهي
<br><br>
CBC<br>
CFB<br>
ECB<br>
<br>
ونفضل استخدام النوع الأول . للمزيد من المعلومات أنقر هنا
<br>
<a class="link" href="https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation">Block Cipher Modes</a>
<br><br>
<h3>
IV(Initialization Vector): </h3><br>
يزيد من أمان التشفير , يستخدم مع النوع الأول و الثاني فقط

 </p>
 <div dir="ltr">
	 <img src="3.jpg">
<h1>What is AES (Advance Encryption Standard) - معيار التشفير المتقدم : </h1>
<p>
<a href="https://ar.wikipedia.org/wiki/%D9%85%D8%B9%D9%8A%D8%A7%D8%B1_%D8%A7%D9%84%D8%AA%D8%B4%D9%81%D9%8A%D8%B1_%D8%A7%D9%84%D9%85%D8%AA%D9%82%D8%AF%D9%85">Arabic</a>
<br>
	The Advanced Encryption Standard, or AES, is a symmetric block cipher chosen by the U.S. government to protect classified information and is implemented in software and hardware throughout the world to encrypt sensitive data.
<br>
The selection process for this new symmetric key algorithm was fully open to public scrutiny and comment; this ensured a thorough, transparent analysis of the designs submitted.
<br>NIST specified the new advanced encryption standard algorithm must be a block cipher capable of handling 128 bit blocks, using keys sized at 128, 192, and 256 bits;
<br>
<h3>AES features:</h3>

<br><br>
    Security: Competing algorithms were to be judged on their ability to resist attack, as compared to other submitted ciphers, though security strength was to be considered the most important factor in the competition.
    <br><br>Cost: Intended to be released under a global, nonexclusive and royalty-free basis, the candidate algorithms were to be evaluated on computational and memory efficiency.
    <br><br>Implementation: Algorithm and implementation characteristics to be evaluated included the flexibility of the algorithm; suitability of the algorithm to be implemented in hardware or software; and overall, relative simplicity of implementation.
</div>
</p>
<h2>Useful Sources | مصادر مفيدة</h2><br>
<a class="link"href="https://searchsecurity.techtarget.com/definition/Advanced-Encryption-Standard">Advanced Encryption Standard (AES) </a>
<br>
<a class="link"href="https://en.wikipedia.org/wiki/Advanced_Encryption_Standard">Wikipedia</a>
<br>
<a class="link"href="https://www.eetimes.com/document.asp?doc_id=1279619">How secure is AES against brute force attacks?</a>
<br>
<a class="link" href="https://www.jscape.com/blog/aes-encryption">What AES Encryption Is And How It's Used To Secure File Transfers</a>
<br>
<a class="link" href="https://www.lifewire.com/what-is-hexadecimal-2625897"> Where and Why Is Hexadecimal Used? </a><br>
<a class="link" href="https://www.youtube.com/channel/UCdR6FP8F5wJT2DYYT2z69Ww/videos">Encryption Algorithm(AR)</a>
</div>
<?php include_once("footer.php")?>

</body>
</html>
