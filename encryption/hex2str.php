
<html>
<header>
  <title>Hex To String</title>
</header>

<body>
  <center>
    <?php
    include_once("header.php");
    ?>

    <h2>Hex To String | من النظام الست عشري الى نص</h2>
    <div class="container">

  <br><br>
  Hex:<br>
    <form action="" method="post">
    <textarea name="text" style="height: 200px;" cols="20" rows="5" required="1" maxlength="500" placeholder="68656c6c6f | hello ..."></textarea><br><br>
    <input type="submit" value="Convert! | حول" name="convert">
    </form>
    <?php
if (isset($_POST['convert'])){
  $hex = $_POST['text'];
  $result = Hex2String($hex);
  echo "<div class='result'><h2> Result: <span sty>$result</span></h2></div>";
}

function Hex2String($hex){
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}
?>
  </center>
</div>
<div class="container2" >
  <h2>What is Hexadecimal | ما هو النظام الست عشري </h2>
  Computers store text as numbers, and with hex you display the numbers not as a decimal number, but in base 16. Hex or base 16 or hexadecimal is a numeral system that uses 16 symbols. The symbols include 0-9 and a-f (sometimes A-F).  An example of a hexadecimal number is 3BF2. Computer science applications can use hexadecimal for binary coding in computing and digital electronics.  The primary use of hex is a more people friendly way to represent the value.
<br>
  While computers work with binary data, it can be difficult for humans to work with a large number of digits. Humans typically use a base 10 system, while for computer applications it is easier to work with hexadecimal than decimal.
<br>
  As hex saves space (either paper space or screen space), you can more efficiently use hex instead of a large number of ones and zeros. You can also go from hex back to binary bits if needed. For example A is 1010.
<br>
  Hex numbers represent large numbers compactly and are used in programming as computers use bytes as a unit of information. In hex you need two digits where you need 8 binary digits to represent a byte.
<br>
  Hexadecimal is also used in the Red-Green-Blue color system in computers. Red, green, and blue are each represented by a byte that is two hex digits. An RGB color uses six hex digits. Hexadecimal is also commonly used to represent computer memory addresses.
<a class="link" href="http://www.unit-conversion.info/texttools/hexadecimal/">المصدر</a>
</div>
<?php include_once("footer.php")?>

</body>

</html>
