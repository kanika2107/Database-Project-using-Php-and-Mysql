<html>
<style>
body {
    background-repeat: no-repeat;
      background-attachment: fixed;
}</style>
<body background="2.jpg">
<?php
if($_POST['nameoftable1']=="EMPLOYEE")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['employee_ID'];
$sql = "DELETE FROM EMPLOYEE
        WHERE Employee_ID = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="PATIENT")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['patient_ID'];
$sql = "DELETE FROM PATIENT
        WHERE Patient_ID = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="DOCTOR")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['contact'];
$sql = "DELETE FROM DOCTOR
        WHERE Contact = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="RECORD")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['Receptionist_ID'];
$sql = "DELETE FROM RECORD
        WHERE Receptionist_ID = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}



if($_POST['nameoftable1']=="LABTESTS")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['catalog_Number'];
$sql = "DELETE FROM LABTESTS
        WHERE Catalog_Number = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}



if($_POST['nameoftable1']=="CHEMIST")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['shop_Number'];
$sql = "DELETE FROM CHEMIST
        WHERE Shop_Number = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="CANTEEN")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['shop_Number'];
$sql = "DELETE FROM CANTEEN
        WHERE Shop_Number = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="GENERAL")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['shop_Number'];
$sql = "DELETE FROM GENERAL
        WHERE Shop_Number = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="MEDICINE")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['code'];
$sql = "DELETE FROM MEDICINE
        WHERE Code = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="ROOM")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['room_ID'];
$sql = "DELETE FROM ROOM
        WHERE room_ID = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}



if($_POST['nameoftable1']=="DEPARTMENT")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['department_ID'];
$sql = "DELETE FROM DEPARTMENT
        WHERE Department_ID = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="NURSE")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['contact'];
$sql = "DELETE FROM Contact
        WHERE Contact = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


if($_POST['nameoftable1']=="RECEPTIONIST")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$x=$_POST['contact'];
$sql = "DELETE FROM RECEPTIONIST
        WHERE Contact = '$x'";

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


?>
</body>
</html>