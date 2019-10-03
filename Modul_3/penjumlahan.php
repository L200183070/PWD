<html>
<head>
<title> Program Penjumlahan </title>
</head>
<body>
<form action="penjumlahan.php" method='POST'>
Nilai A adalah <input type="text" name="A"><br/><br/>
Nilai B adalah <input type="text" name="B"><br/><br/>
<input type="submit" value="Jumlahkan" name="submit">
</form>
<?php
if(isset($_POST['submit'])) {
$a = $_REQUEST['A'];
$b = $_REQUEST['B'];

$c = "";
$c = $a + $b;

echo " Nilai A adalah $a </br>";
echo " Nilai B adalah $b </br>" ;
echo "Jadi Nilai A ditambah Nilai B adalah $c ";
}
?>
</body>