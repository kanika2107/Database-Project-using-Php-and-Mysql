<html>
<style>
body {
    background-repeat: no-repeat;
        background-attachment: fixed;
}</style>
<body background="2.jpg">

<?php
echo "<center>";
if($_POST['nameoftable2']=="DOCTOR")
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
if(!empty($_POST["namer"]))
{
$y=$_POST['namer'];
$sql = "UPDATE DOCTOR
        SET Name='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST['ager']))
{
	$y = $_POST['ager'];
	$sql = "UPDATE DOCTOR
        SET Age='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST['addressr']))
{
	$y = $_POST['addressr'];
	$sql = "UPDATE DOCTOR
        SET Address='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST['contactr']))
{
	$y = $_POST['contactr'];
	$sql = "UPDATE DOCTOR
        SET Contact='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST['designationr']))
{
	$y = $_POST['designationr'];
	$sql = "UPDATE DOCTOR
        SET Designation='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST['visitingr']))
{
	$y = $_POST['visitingr'];
	$sql = "UPDATE DOCTOR
        SET Visiting='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST['permanentr']))
{
	$y = $_POST['permanentr'];
	$sql = "UPDATE DOCTOR
        SET Permanent='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST['patient_IDr']))
{
	$y = $_POST['patient_IDr'];
	$sql = "UPDATE DOCTOR
        SET Pateint_ID='$y'
        WHERE Contact='$x'";
}


mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="PATIENT")
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
if(!empty($_POST["patient_IDr"]))
{
$y=$_POST['patient_IDr'];
$sql = "UPDATE PATIENT
        SET Patient_ID='$y'
        WHERE Patient_ID='$x'";
}
if(!empty($_POST['namer']))
{
	$y = $_POST['namer'];
	$sql = "UPDATE PATIENT
        SET Name='$y'
        WHERE Patient_ID='$x'";
}
if(!empty($_POST['addressr']))
{
	$y = $_POST['addressr'];
	$sql = "UPDATE PATIENT
        SET Address='$y'
        WHERE Patient_ID='$x'";
}
if(!empty($_POST['contactr']))
{
	$y = $_POST['contactr'];
	$sql = "UPDATE PATIENT
        SET Contact='$y'
        WHERE Patient_ID='$x'";
}
if(!empty($_POST['sexr']))
{
	$y = $_POST['sexr'];
	$sql = "UPDATE PATIENT
        SET Sex='$y'
        WHERE Patient_ID='$x'";
}
if(!empty($_POST['date_Admittedr']))
{
	$y = $_POST['date_Admittedr'];
	$sql = "UPDATE PATIENT
        SET Date_Admitted='$y'
        WHERE Patient_ID='$x'";
}
if(!empty($_POST['date_Dischargedr']))
{
	$y = $_POST['date_Dischargedr'];
	$sql = "UPDATE PATIENT
        SET Date_Discharged='$y'
         WHERE Patient_ID='$x'";
}



mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}

if($_POST['nameoftable2']=="RECORD")
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
if(!empty($_POST["patient_IDr"]))
{
$y=$_POST['patient_IDr'];
$sql = "UPDATE RECORD
        SET Patient_ID='$y'
        WHERE Receptionist_ID='$x'";
}
if(!empty($_POST['appointment_dater']))
{
	$y = $_POST['appointment_dater'];
	$sql = "UPDATE RECORD
        SET Appointment_Date='$y'
        WHERE Receptionist_ID='$x'";
}
if(!empty($_POST['descriptionr']))
{
	$y = $_POST['descriptionr'];
	$sql = "UPDATE RECORD
        SET Description='$y'
        WHERE Receptionist_ID='$x'";
}
if(!empty($_POST['Receptionist_IDr']))
{
	$y = $_POST['Receptionist_IDr'];
	$sql = "UPDATE RECORD
        SET Receptionist_ID='$y'
        WHERE Receptionist_ID='$x'";
}




mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="LABTESTS")
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
if(!empty($_POST["patient_IDr"]))
{
$y=$_POST['patient_IDr'];
$sql = "UPDATE LABTESTS
        SET Patient_ID='$y'
        WHERE Catalog_number='$x'";
}
if(!empty($_POST['lab_Assistantr']))
{
    $y = $_POST['lab_Assistantr'];
    $sql = "UPDATE LABTESTS
        SET Lab_Assistant='$y'
        WHERE Catalog_number='$x'";
}
if(!empty($_POST['recommending_Doctorr']))
{
    $y = $_POST['recommending_Doctorr'];
    $sql = "UPDATE LABTESTS
        SET Recommending_Doctor='$y'
        WHERE Catalog_number='$x'";
}
if(!empty($_POST['report_Dater']))
{
    $y = $_POST['report_Dater'];
    $sql = "UPDATE LABTESTS
        SET Report_Date='$y'
        WHERE Catalog_number='$x'";
}
if(!empty($_POST['catalog_Numberr']))
{
    $y = $_POST['catalog_Numberr'];
    $sql = "UPDATE LABTESTS
        SET Catalog_number='$y'
        WHERE Catalog_number='$x'";
}
if(!empty($_POST['name_of_testr']))
{
    $y = $_POST['name_of_testr'];
    $sql = "UPDATE LABTESTS
        SET Name_of_test='$y'
        WHERE Catalog_number='$x'";
}




mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="CHEMIST")
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
if(!empty($_POST["shop_Numberr"]))
{
$y=$_POST['shop_Numberr'];
$sql = "UPDATE CHEMIST
        SET Shop_Number='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['listr']))
{
    $y = $_POST['listr'];
    $sql = "UPDATE CHEMIST
        SET List='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['start_timer']))
{
    $y = $_POST['start_timer'];
    $sql = "UPDATE CHEMIST
        SET Start_time='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['close_timer']))
{
    $y = $_POST['close_timer'];
    $sql = "UPDATE CHEMIST
        SET Close_Time='$y'
        WHERE Shop_Number='$x'";
}





mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="CANTEEN")
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
if(!empty($_POST["shop_Numberr"]))
{
$y=$_POST['shop_Numberr'];
$sql = "UPDATE CANTEEN
        SET Shop_Number='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['listr']))
{
    $y = $_POST['listr'];
    $sql = "UPDATE CANTEEN
        SET List='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['start_timer']))
{
    $y = $_POST['start_timer'];
    $sql = "UPDATE CANTEEN
        SET Start_time='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['close_timer']))
{
    $y = $_POST['close_timer'];
    $sql = "UPDATE CANTEEN
        SET Close_Time='$y'
        WHERE Shop_Number='$x'";
}





mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="GENERAL")
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
if(!empty($_POST["shop_Numberr"]))
{
$y=$_POST['shop_Numberr'];
$sql = "UPDATE GENERAL
        SET Shop_Number='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['listr']))
{
    $y = $_POST['listr'];
    $sql = "UPDATE GENERAL
        SET List='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['start_timer']))
{
    $y = $_POST['start_timer'];
    $sql = "UPDATE GENERAL
        SET Start_time='$y'
        WHERE Shop_Number='$x'";
}
if(!empty($_POST['close_timer']))
{
    $y = $_POST['close_timer'];
    $sql = "UPDATE GENERAL
        SET Close_Time='$y'
        WHERE Shop_Number='$x'";
}





mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="EMPLOYEE")
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
if(!empty($_POST["employee_IDr"]))
{
$y=$_POST['employee_IDr'];
$sql = "UPDATE EMPLOYEE
        SET Employee_ID='$y'
        WHERE Employee_ID='$x'";
}


mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="MEDICINE")
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
if(!empty($_POST["coder"]))
{
$y=$_POST['coder'];
$sql = "UPDATE MEDICINE
        SET Code='$y'
        WHERE Code='$x'";
}
if(!empty($_POST['patient_IDr']))
{
    $y = $_POST['patient_IDr'];
    $sql = "UPDATE MEDICINE
        SET Patient_ID='$y'
        WHERE Code='$x'";
}
if(!empty($_POST['pricer']))
{
    $y = $_POST['pricer'];
    $sql = "UPDATE MEDICINE
        SET Price='$y'
        WHERE Code='$x'";
}
if(!empty($_POST['expiry_dater']))
{
    $y = $_POST['expiry_dater'];
    $sql = "UPDATE MEDICINE
        SET Date_of_expiry='$y'
        WHERE Code='$x'";
}
if(!empty($_POST['quantityr']))
{
    $y = $_POST['quantityr'];
    $sql = "UPDATE MEDICINE
        SET Quantity='$y'
        WHERE Code='$x'";
}
if(!empty($_POST['namer']))
{
    $y = $_POST['namer'];
    $sql = "UPDATE MEDICINE
        SET Name='$y'
        WHERE Code='$x'";
}
if(!empty($_POST['coder']))
{
    $y = $_POST['coder'];
    $sql = "UPDATE MEDICINE
        SET Code='$y'
        WHERE Code='$x'";
}





mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="ROOM")
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
if(!empty($_POST["patient_IDr"]))
{
$y=$_POST['patient_IDr'];
$sql = "UPDATE ROOM
        SET Patient_ID='$y'
        WHERE Room_ID='$x'";
}
if(!empty($_POST['room_IDr']))
{
    $y = $_POST['room_IDr'];
    $sql = "UPDATE ROOM
        SET Room_ID='$y'
        WHERE Room_ID='$x'";
}
if(!empty($_POST['room_typer']))
{
    $y = $_POST['room_typer'];
    $sql = "UPDATE ROOM
        SET Room_type='$y'
        WHERE Room_ID='$x'";
}
if(!empty($_POST['periodr']))
{
    $y = $_POST['periodr'];
    $sql = "UPDATE ROOM
        SET Period='$y'
        WHERE Room_ID='$x'";
}






mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}

if($_POST['nameoftable2']=="DEPARTMENT")
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
if(!empty($_POST["department_IDr"]))
{
$y=$_POST['department_IDr'];
$sql = "UPDATE DEPARTMENT
        SET Department_ID='$y'
        WHERE Department_ID='$x'";
}
if(!empty($_POST['specialisationr']))
{
    $y = $_POST['specialisationr'];
    $sql = "UPDATE DEPARTMENT
        SET Specialisation='$y'
        WHERE Department_ID='$x'";
}
if(!empty($_POST['heading_Doctorr']))
{
    $y = $_POST['heading_Doctorr'];
    $sql = "UPDATE DEPARTMENT
        SET Heading_Doctor='$y'
        WHERE Department_ID='$x'";
}

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable2']=="NURSE")
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
if(!empty($_POST["addressr"]))
{
$y=$_POST['addressr'];
$sql = "UPDATE NURSE
        SET Address='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["designationr"]))
{
$y=$_POST['designationr'];
$sql = "UPDATE NURSE
        SET Designation='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["namer"]))
{
$y=$_POST['namer'];
$sql = "UPDATE NURSE
        SET Name='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["employee_IDr"]))
{
$y=$_POST['employee_IDr'];
$sql = "UPDATE NURSE
        SET Employee_ID='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["ager"]))
{
$y=$_POST['ager'];
$sql = "UPDATE NURSE
        SET Age='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["contactr"]))
{
$y=$_POST['contactr'];
$sql = "UPDATE NURSE
        SET Contact='$y'
        WHERE Contact='$x'";
}



mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}

if($_POST['nameoftable2']=="RECEPTIONIST")
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
if(!empty($_POST["salaryr"]))
{
$y=$_POST['salaryr'];
$sql = "UPDATE NURSE
        SET Salary='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["sexr"]))
{
$y=$_POST['sexr'];
$sql = "UPDATE NURSE
        SET Sex='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["namer"]))
{
$y=$_POST['namer'];
$sql = "UPDATE NURSE
        SET Name='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["employee_IDr"]))
{
$y=$_POST['employee_IDr'];
$sql = "UPDATE NURSE
        SET Employee_ID='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["ager"]))
{
$y=$_POST['ager'];
$sql = "UPDATE NURSE
        SET Age='$y'
        WHERE Contact='$x'";
}
if(!empty($_POST["contactr"]))
{
$y=$_POST['contactr'];
$sql = "UPDATE NURSE
        SET Contact='$y'
        WHERE Contact='$x'";
}

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
echo "</center>";
?>

</body>
</html>
