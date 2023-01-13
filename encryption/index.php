<!DOCTYPE html>

<html>
<head>
  <title>What is Encryption | ماهو التشفير</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
  <?php
  include_once("header.php");
  ?>
<div class="jumbotron text-center">
  <h1>What is Encryption | ماهو التشفير</h1>
  <br>
  <p dir="rtl" lang="ar" style="color:black">التشفير هو العلم الذي يستخدم الرياضيات للتشفير وفك تشفير البيانات. التشفير يُمكّنُك من تخزين المعلومات الحساسة أو نقلها عبر الشبكات غير الآمنة- مثل الإنترنت- وعليه لا يمكن قراءتها من قبل اي شخص ما عدا الشخص المرسل لـه.
وحيث أن التشفير هو العلم المستخدم لحفظ أمن وسرية المعلومات، فإن تحليل وفك التشفير (Cryptoanalysis) هو علم لكسر وخرق الاتصالات الآمنة.</p>
</div>
<center>
  <br><br>
<img src="1.png">
<img src="2.jpg">
<br><br>
<video width="640" height="480" controls>
 <source src="1.mp4" type="video/mp4">
متصفحك لايدعم تشغيل هذا الفديو
</video>
</center>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2 dir="rtl">أهداف التشفير</h2>
      <p dir="rtl"> يوجد أربعة أهداف رئيسية وراء استخدام علم التشفير وهي كالتالي:ـ
<br><br>
    السرية أو الخصوصية ( Confidentiality ):ـ

هي خدمة تستخدم لحفظ محتوى المعلومات من جميع الأشخاص ما عدا الذي قد صرح لهم الإطلاع عليها.
<br><br>
    تكامل البيانات (Integrity ):-

وهي خدمة تستخدم لحفظ المعلومات من التغيير ( حذف أو إضافة أو تعديل ) من قبل الأشخاص الغير مصرح لهم بذلك.
<br><br>
    إثبات الهوية ( Authentication ):ـ

وهي خدمة تستخدم لإثبات هوية التعامل مع البيانات ( المصرح لهم ).
<br><br>
    عدم الجحود ( Non-repudiation ):ـ

وهي خدمة تستخدم لمنع الشخص من إنكاره القيام بعمل ما.

إذاً الهدف الأساسي من التشفير هو توفير هذه الخدمات للأشخاص ليتم الحفاظ على أمن معلوماتهم.</p>

    </div>
    <div class="col-sm-4">
      <h2 dir="rtl">كيف يعمل التشفير</h2>
      <p dir="rtl">كيفية عمل التشفير:ـ

خوارزمية التشفير هو دالة رياضية تستخدم في عملية التشفير وفك التشفير. وهو يعمل بالاتحاد مع المفتاح أو كلمة السر أو الرقم أو العبارة، لتشفير النصوص المقروءة.
<br>
نفس النص المقروء يشفر إلى نصوص مشفرة مختلفة مع مفاتيح مختلفة. والأمن في البيانات المشفرة يعتمد على أمرين مهمين قوة خوارزمية التشفير وسرية المفتاح .</p></div>
    <div class="col-sm-4">
      <h2 dir="rtl">انواع التشفير</h2>
      <p dir="rtl">
أولاً : التشفير الكلاسيكي يعتبر التشفير الكلاسيكي من أقدم أنواع التشفير, حيث بدأ مع بداية ظهور هذا العلم منذ آلاف السنين ويعتمد هذا التصنيف في أسلوب التشفير على أحد الأمرين أو التقنيتين التاليين :
<br><br><br>
– تبديل الأحرف أو Subtitution : وهو عبارة عن عملية تبديل الأحرف أو الرموز في النص او البيانات المراد تشفيرها لأحرف أو رموز أخرى ومثال ذلك أن يتم تغيير الحرف A للحرف X والحرف B لحرف آخر. وحتى يتم فك تشفير هذه البيانات المشفرة على الشخص أن يكون على دراية بطريقة تحويل هذه الأحرف.




<br><br>
– تبديل أماكن الأحرف أو Transposition : وهي عملية إعادة ترتيب الأحرف والأرقام والرموز في النص او البيانات المراد تشفيرها ووضعها في مكان مختلف عن مكانها الأصلي في النص أو البيانات فمثلاً يمكن أن تصبح كلمة Technawi بعد التشفير لـ enwcThai.
</p>

<br>
      <p dir="rtl">ثانياً : التشفير الحديث

يعتبر هذا النوع من أنواع التشفير احد الأمور الأساسية التي يعتمد عليها أمن المعلومات. حيث يعتمد بشكل كبير (التشفير الحديث) على مفاهيم مختلفة من الرياضيات مثل نظرية الأعداد و نظرية الإحتمالات وغيرها ويستخدم في هذا الصنف مفاتيح خاصة للتشفير وفك التشفير.
<br>
هنالك تقنيتين أو طريقتين يتم استخدامهما للتشفير بهذا النوع. حيث تعتمد كل طريقة على أنواع وطبيعة مفاتيح التشفير وهما كالآتي :
<br><br>
– التشفير المتماثل Symmetric : حيث يتم في هذه الطريقة استخدام مفتاح واحد للتشفير ولفك التشفير, أي أن نفس المفتاح الذي استخدم في عملية التشفير هو نفسه الذي يستخدم في فك التشفير.
<br><br>
– التشفير الغير متماثل Asymmetric : حيث يتم في هذه الطريقة استخدام مفتاحي تشفير, الأول لإجراء عملية التشفير والثاني لإجراء عملية فك التشفير.

</p>
<br>

<p dir="rtl"><a class="link" href="https://www.technawi.net/%D9%85%D8%AF%D8%AE%D9%84-%D8%A5%D9%84%D9%89-%D8%B9%D9%84%D9%85-%D8%A7%D9%84%D8%AA%D8%B4%D9%81%D9%8A%D8%B1-%D8%A3%D9%86%D9%88%D8%A7%D8%B9-%D8%A7%D9%84%D8%AA%D8%B4%D9%81%D9%8A%D8%B1/">المصدر1</a><br>
  <a class="link" href="https://mustafasadiq0.com/2014/09/30/%D8%A7%D9%84%D8%AA%D8%B4%D9%81%D9%8A%D8%B1-%D9%88%D8%A7%D9%86%D9%88%D8%A7%D8%B9%D9%87/">المصدر2</a><br><a href="https://www.youtube.com/watch?v=rz4QLVYVWwQ" class="link">Video</a></p>
</div>
  </div>
</div>

<?php include_once("footer.php")?>


</body>
</html>
