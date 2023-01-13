
<!DOCTYPE html>
<html>
<head>
	<title>Help | مساعدة</title>


<style>

@import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
 /**/
body{
font-family: 'Droid Arabic Naskh', serif;
font-size: 12px;

}
	.q{
		color: black;
	}
h1 span{
	background-color: yellow;
}
p{
	font-size: 20px;
}
</style>
</head>
<body>
	<?php include_once("header.php")?>






<div class="container" dir="rtl">
	<center>
	<img src="cloud.jpg" width="50%" height="50%">
</center>
	<h1 class="q"><span>  Goal of the website | ما الهدف من الموقع ؟</span></h1>
	<p>
الموقع يقدم خدمة تشفير البيانات والتحويل بين أنواعها باستخدام أشهر وأقوى الخوارزميات المستخدمه في وقتنا الحالي , وتقديم مساعدة وشرح سهل الفهم للتعرف على أهم المعاني والمصطلحات في علم التشفير وأمن المعلومات بشكل عام.

	</p>

	<h1 class="q"><span> Our Vision |رؤية الموقع :</span></h1>

	<p>
رؤيتنا هي أن يتم توعية الأشخاص بأهمية علم أمن المعلومات والتشفير لأن الأجيال القادمة مقبلة على ثورة كبيرة في مجال تقنية المعلومات والأنترنت بشكل عام , عن طريق تقديم هذي الخدمه في الموقع وشرح عنها بالمختصر المفيد .
	</p>


<h1 class="q"><span> What is cryptography and how does it work | ما هو التشفير وكيف يعمل ؟ </span></h1>

<p>التشفير هو العلم الذي يستخدم الرياضيات للتشفير وفك تشفير البيانات. التشفير يُمكّنُك من تخزين المعلومات الحساسة وعليه لا يمكن قراءتها من قبل اي شخص ما عدا الشخص المرسل لـه (الذي يمتلك مفتاح التشفير) .
<br>كيف يعمل ؟
يوجد نوعين من التشفير , التشفير المتماثل (Symmetric) , التشفير غير المتماثل (Asymmetric)
</p>

<p>في عملية التشفير المتماثل Symmetric  نحتاج الى عنصرين وهما 1- البيانات المراد تشفيرها 2- مفتاح التشفير . البيانات المراد تشفيرها هي مثلا الرساله التي تحتوي على معلومات خاصه , ومفتاح التشفير هو الباسوورد الذي يتم فيه عمليتي التشفير وفك التشفير . ونضرب مثال هذا النوع من التشفير بالباب المقفول,فهو يحتاج مفتاح حتى نفتحه! ويجب ان يكون المفتاح هو نفس المفتاح الذي تم استخدامه في المره الاولى اثناء الغلق , كذلك مفتاح التشفير في البيانات المشفره . على سبيل المثال خالد لديه رساله تحتوي على بيانات مهمه <br>وخاصه ويريد ان يرسلها ل أحمد فقط , نفترض ان الرساله قبل التشفير هي:</p>
<p><span style="background-color: green"> السلام عليكم , كيف حالك يا أحمد...</span></p>
<p>بعد التشفير ستكون:</p>
<p><span style="background-color: red">vxXRAiFOtomX30SfcQWsx/Kp++Ntpf/HfSQjU</span></p>

<p>
لاكن في التشفير الغير متماثل   Asymmetricنحتاج الى ثلاث عناصر وهي البيانات المراد تشفيرها ومفتاح للتشفير publickey ومفتاح لفك التشفير privatekey ! المثال الواقعي على الأبواب لاينطبق هنا. كيف تعمل؟! التشفير الغير متماثل هو يكون عباره عن خوارزميات معقده جدا . ويستخدم عاده في المتصفحات وبالتحديد في بروتوكولات  ssl,tsl او كما تعرف ببروتوكولات المصادقه .
</p>


<h1 class="q"><span> Why do we use encryption |لماذا نستخدم التشفير ؟ </span></h1>
<p>
التشفير وسيلة جدا مهمه لحفظ البيانات والتأكد من عدم قراتها من قبل اي شخص ماعدا المستقبل او الشخص الذي يمتلك المفتاح .نفترض ان شخص مجهول اعترض رسالة خالد الموجهه الى أحمد كما في المثال الاعلى ! في حال تم اعتراضها من قبل شخص لايملك المفتاح ستكون الرساله غير مفهومه ابدا .
</p>


<h1 class="q"><span> Where do we use encryption  |  أين يستخدم التشفير ؟</span></h1>
<p>•	في برامج التواصل مثل whatsapp, telegram .</p>
<p>•	في مواقع الانترنت التي تستخدم بروتوكول HTTPS  .</p>
<p>•	في البنوك .</p>
<p>•	في الحروب العسكريه .</p>
<p>•	الانظمه مثل Windows في غلق الملفات بكلمة سر (Bitlocker)</p>



<h1 class="q"><span> Prevalent encryption algorithms | أشهر الشفرات المستخدمه :</span></h1>
<p dir='ltr'>
	•	Advanced Encryption Standard (AES): A block cipher, this is pretty much the gold standard, per the U.S. Government. It offers 128-, 192-, and 256-bit encryption, the last two reserved for instances that require extra-strength protection.
	<br>•	RSA: This asymmetric algorithm uses paired keys and is pretty standard for encrypting information sent over the internet, although it’s been through some issues of getting broken, which have then been resolved.
	<br>•	IDEA (International Data Encryption Algorithm): This block cipher with a 128-bit key has a great track record for not being broken.
	<br>•	Signal Protocol: This open-source encryption protocol is used for asynchronous messaging, like email.
	<br>•	Blowfish and Twofish: Both of these block ciphers are free to use and popular among e-commerce platforms for protecting payment information. They were created by the same person and offer symmetric encryption with keys varying in bit length. Twofish is the successor and offers longer encryption keys.
	<br>•	Ring Learning With Errors or Ring-LWE: This protocol ramps up elliptic curves by adding in a new type of encryption that might be unbreakable by quantum computers.


</p>
<h1 class="q"><span> Bestالأقوى ؟</span></h1>
<p>
	العامل الرئيسي الذي يحدد مدى قوه الشفره هي الخوارزميه نفسها وطريقة عملها .
<br>	بشكل عام في الوقت الحالي:

<br>•	التشفير المتماثل: تعتبر شفرة AES هي الاكثر استخداما وأمانا.
	<br>•	التشفير الغير متماثل : شفرة RSA  الشهيره .
<br>	*الارقام والشفرات تتغير ولا تدوم
</p>
<h1 class="q"><span> ماذا يعني كسر الشفره او الCracking ؟</span></h1>

<p>

<br>	في حال انك اعترضت رساله مشفره فستستطيع ان تحاول فك شفرتها عن طريق معرفة الخوارزميه المستخدمه ثم تجربه مفاتيح عشوائيه حتى تكون مفهومه .
<br>	على سبيل المثال شفرة القيصر :
<br>	فهي تشفر فقط الحروف الانجليزيه و المفتاح يكون رقم بين 1 الى 25
<br>	الخوارزميه جدا بسيطه وليست معقده على الاطلاق , طريقة عملها :
<br>مثلا نريد ان نشفر حرف ال A باستخدام المفتاح 2 فيصبح الحرف المشفر هو C . المفتاح يمثل عدد الخطوات على ترتيب الحروف الانجليزية , ففي حال كان المفتاح 1 سيكون الحرف المشفر هو B , وفك التشفير هو عكس الخطوات .
</p>
<p>لنفترض انك اعترضت رسالة وعلمت انها مشفره بتشفيرة القيصر ,
وكانت الرسالة المشفره هي :
</p>
<p><span style="background-color:red">URYYB ZBUNZZRQ , ZRRG ZR NG 9NZ VA</span></p>

<center>
<p>
<br><span style="background-color:yellow">	عند عمل تخمين لاحتمالات المفاتيح ستكون النتيجة كالتالي:
</span>
<br>
<p dir="ltr">
<br>	#1  :VSZZC ACVOAASR , ASSH AS OH 9OA
<br>	#2  :WTAAD BDWPBBTS , BTTI BT PI 9PB
<br>	#3  :XUBBE CEXQCCUT , CUUJ CU QJ 9QC
<br>	#4  :YVCCF DFYRDDVU , DVVK DV RK 9RD
<br>	#5  :ZWDDG EGZSEEWV , EWWL EW SL 9SE
<br>	#6  :AXEEH FHATFFXW , FXXM FX TM 9TF
<br>	#7  :BYFFI GIBUGGYX , GYYN GY UN 9UG
<br>	#8  :CZGGJ HJCVHHZY , HZZO HZ VO 9VH
<br>	#9  :DAHHK IKDWIIAZ , IAAP IA WP 9WI
<br>	#10  :EBIIL JLEXJJBA , JBBQ JB XQ 9XJ
<br>	#11  :FCJJM KMFYKKCB , KCCR KC YR 9YK
<br>	#12  :GDKKN LNGZLLDC , LDDS LD ZS 9ZL
<br><span style="background-color:green">	#13  :HELLO MOHAMMED , MEET ME AT 9AM</span>
<br>	#14  :IFMMP NPIBNNFE , NFFU NF BU 9BN
<br>	#15  :JGNNQ OQJCOOGF , OGGV OG CV 9CO
<br>	#16  :KHOOR PRKDPPHG , PHHW PH DW 9DP
<br>	#17  :LIPPS QSLEQQIH , QIIX QI EX 9EQ
<br>	#18  :MJQQT RTMFRRJI , RJJY RJ FY 9FR
<br>	#19  :NKRRU SUNGSSKJ , SKKZ SK GZ 9GS
<br>	#20  :OLSSV TVOHTTLK , TLLA TL HA 9HT
<br>	#21  :PMTTW UWPIUUML , UMMB UM IB 9IU
<br>	#22  :QNUUX VXQJVVNM , VNNC VN JC 9JV
<br>	#23  :ROVVY WYRKWWON , WOOD WO KD 9KW
<br>	#24  :SPWWZ XZSLXXPO , XPPE XP LE 9LX
<br>	#25  :TQXXA YATMYYQP , YQQF YQ MF 9MY YQ MF 9MY UZ
</p>
</p>
</center>
<p>

<br>	نلاحظ ان عند التخمين لجميع احتمالات المفتاح نحصل على الرسالة الصحيحه والتي هي عند المفتاح رقم 13 لأن لها معنى .
<br>	تشفيرة القيصر لاتستخدم لأنها سهله الكسر وغير امنه بتاتا!
<br>	لاكن في خوارزمية AES  يكون عدد المفاتيح جدا ضخم = فيصعب كسر الشفره
	.
<br>	•	مع تطور الكمبيوترات وقدرتها على التخمين بسرعه عاليه سيتم كسر الشفره



</p>

</div>
<?php include_once("footer.php")?>








</body>
</html>
