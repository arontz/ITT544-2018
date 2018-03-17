<html>
<body>
<?php

$namereg = $_POST['name'];
$idnumreg = $_POST['idnumber'];
$genderreg = $_POST['gender'];
$telnumreg = $_POST['telnum'];


$database= "homereservation";
$username = "root";
$password = "";

$connect = mysql_connect(localhost, $username, $password) or die("Unable to log into database");

@mysql_select_db($database, $connect) or die ("Unable to connect");

mysql_query("INSERT INTO 'user' VALUES('', '$namereg', '$idnumreg', $gederreg', '$telnumreg')") or die ("Strange error");

echo "User registered";

echo $namereg;
echo $idnumreg;
echo $genderreg;
echo $telnumreg;

mysql_close($connect);

?>
</body>
</html>