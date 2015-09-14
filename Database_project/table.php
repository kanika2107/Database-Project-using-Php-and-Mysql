<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body background="2.jpg">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$x=$_POST['nameoftable4'];
$sql = "DROP TABLE '$x'";
mysql_select_db( 'Hospital' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete table: ' . mysql_error());
}
echo "Table deleted successfully\n";
mysql_close($conn);
?>
</body>
</html>

