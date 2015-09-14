<html>
<style>
body {
    background-repeat: no-repeat;
      background-attachment: fixed;
}</style>
<head>
<title>Add New Record in MySQL Database</title>
</head>
<body background="2.jpg">
<?php
if($_POST['nameoftable']=="EMPLOYEE")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $Employee_ID = addslashes ($_POST['employee_ID']);
}
else
{
   $Employee_ID = $_POST['employee_ID'];
}

$sql = "INSERT INTO EMPLOYEE ".
       "(Employee_ID) ".
       "VALUES ".
       "('$Employee_ID')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="PATIENT")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $contact = addslashes ($_POST['contact']);
   $address = addslashes ($_POST['address']);
   $name = addslashes ($_POST['name']);
   $Sex=addslashes($_POST['sex']);
   $date_admitted = addslashes ($_POST['date_Admitted']);
   $date_discharged = addslashes ($_POST['date_Discharged']);
   $Pateint_ID = addslashes ($_POST['patient_ID']);
}
else
{
   $contact = $_POST['contact'];
   $address = $_POST['address'];
   $name = $_POST['name'];
   $Sex=$_POST['sex'];
   $date_admitted = $_POST['date_Admitted'];
   $date_discharged = $_POST['date_Discharged'];
   $Pateint_ID = $_POST['patient_ID'];
}

$sql = "INSERT INTO PATIENT ".
       "(Patient_ID,Name,Address,Contact,Date_Admitted,Date_Discharged,Sex) ".
       "VALUES ".
       "('$Pateint_ID','$name','$address','$contact','$date_admitted','$date_discharged','$Sex')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="DOCTOR")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $contact = addslashes ($_POST['contact']);
   $address = addslashes ($_POST['address']);
   $name = addslashes ($_POST['name']);
   $age=addslashes($_POST['age']);
   $designation = addslashes ($_POST['designation']);
   $visiting = addslashes ($_POST['visiting']);
   $permanent = addslashes($_POST['permanent']);
   $Pateint_ID = addslashes ($_POST['patient_ID']);
}
else
{
   $contact = $_POST['contact'];
   $address = $_POST['address'];
   $name = $_POST['name'];
   $age=$_POST['age'];
   $designation = $_POST['designation'];
   $visiting = $_POST['visiting'];
   $permanent = $_POST['permanent'];
   $Pateint_ID = $_POST['patient_ID'];
}

$sql = "INSERT INTO DOCTOR ".
       "(Contact,Age,Address,Name,Designation,Visiting,Permanent,Pateint_ID) ".
       "VALUES ".
       "('$contact','$age','$address','$name','$designation','$visiting','$permanent','$Pateint_ID')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="NURSE")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $contact = addslashes ($_POST['contact']);
   $address = addslashes ($_POST['address']);
   $name = addslashes ($_POST['name']);
   $age=addslashes($_POST['age']);
   $designation = addslashes ($_POST['designation']);
   $Employee_ID = addslashes ($_POST['employee_ID']);
}
else
{
   $contact = $_POST['contact'];
   $address = $_POST['address'];
   $name = $_POST['name'];
   $age=$_POST['age'];
   $designation = $_POST['designation'];
   $Employee_ID = $_POST['employee_ID'];
}

$sql = "INSERT INTO NURSE ".
       "(Contact,Age,Address,Name,Designation,Employee_ID) ".
       "VALUES ".
       "('$contact','$age','$address','$name','$designation','$Employee_ID')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="MEDICINE")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $code = addslashes ($_POST['code']);
   $quantity = addslashes ($_POST['quantity']);
   $name = addslashes ($_POST['name']);
   $price=addslashes($_POST['price']);
   $expiry_date = addslashes ($_POST['expiry_date']);
   $Patient_ID = addslashes ($_POST['patient_ID']);
}
else
{
   $code = $_POST['code'];
   $quantity = $_POST['quantity'];
   $name = $_POST['name'];
   $price=$_POST['price'];
   $expiry_date = $_POST['expiry_date'];
   $Patient_ID = $_POST['patient_ID'];
}

$sql = "INSERT INTO MEDICINE ".
       "(Code,Name,Quantity,Date_of_expiry,Price,Patient_ID) ".
       "VALUES ".
       "('$code','$name','$quantity','$expiry_date','$price','$Patient_ID')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="TREATMENT")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $surgery = addslashes ($_POST['surgery']);
   $therapy = addslashes ($_POST['therapy']);
   $Patient_ID = addslashes ($_POST['patient_ID']);
}
else
{
    $surgery = $_POST['surgery'];
   $therapy = $_POST['therapy'];
   $Patient_ID = $_POST['patient_ID'];
}

$sql = "INSERT INTO TREATMENT ".
       "(Surgery,Therapy,Patient_ID) ".
       "VALUES ".
       "('$surgery','$therapy','$Patient_ID')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="CANTEEN")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $shop_number = addslashes ($_POST['shop_Number']);
   $list = addslashes ($_POST['list']);
   $start_time = addslashes ($_POST['start_time']);
   $close_time = addslashes ($_POST['close_time']);
}
else
{
   $shop_number = $_POST['shop_Number'];
   $list = $_POST['list'];
   $start_time = $_POST['start_time'];
   $close_time = $_POST['close_time'];
}

$sql = "INSERT INTO CANTEEN ".
       "(Shop_Number,List,Close_Time,Start_Time) ".
       "VALUES ".
       "('$shop_number','$list','$close_time','$start_time')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="CHEMIST")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $shop_number = addslashes ($_POST['shop_Number']);
   $list = addslashes ($_POST['list']);
   $start_time = addslashes ($_POST['start_time']);
   $close_time = addslashes ($_POST['close_time']);
}
else
{
   $shop_number = $_POST['shop_Number'];
   $list = $_POST['list'];
   $start_time = $_POST['start_time'];
   $close_time = $_POST['close_time'];
}

$sql = "INSERT INTO CHEMIST ".
       "(Shop_Number,List,Close_Time,Start_Time) ".
       "VALUES ".
       "('$shop_number','$list','$close_time','$start_time')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="GENERAL")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $shop_number = addslashes ($_POST['shop_Number']);
   $list = addslashes ($_POST['list']);
   $start_time = addslashes ($_POST['start_time']);
   $close_time = addslashes ($_POST['close_time']);
}
else
{
   $shop_number = $_POST['shop_Number'];
   $list = $_POST['list'];
   $start_time = $_POST['start_time'];
   $close_time = $_POST['close_time'];
}

$sql = "INSERT INTO GENERAL ".
       "(Shop_Number,List,Close_Time,Start_Time) ".
       "VALUES ".
       "('$shop_number','$list','$close_time','$start_time')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="RECORD")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $receptionist_ID = addslashes ($_POST['Receptionist_ID']);
   $Patient_ID = addslashes ($_POST['patient_ID']);
   $description = addslashes ($_POST['description']);
   $appointment_Date = addslashes ($_POST['appointment_date']);
}
else
{
   $receptionist_ID = $_POST['Receptionist_ID'];
   $Patient_ID = $_POST['patient_ID'];
   $description = $_POST['description'];
   $appointment_Date = $_POST['appointment_date'];
}

$sql = "INSERT INTO RECORD ".
       "(Receptionist_ID,Patient_ID,Description,Appointment_Date) ".
       "VALUES ".
       "('$receptionist_ID','$Patient_ID','$description','$appointment_Date')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
if($_POST['nameoftable']=="ROOM")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $Room_ID = addslashes ($_POST['room_ID']);
   $Patient_ID = addslashes ($_POST['patient_ID']);
   $Room_type = addslashes ($_POST['room_type']);
   $period = addslashes ($_POST['period']);
}
else
{
    $Room_ID = $_POST['room_ID'];
   $Patient_ID = $_POST['patient_ID'];
   $Room_type = $_POST['room_type'];
   $period = $_POST['period'];
}

$sql = "INSERT INTO ROOM ".
       "(Room_ID,Patient_ID,Period,Room_type) ".
       "VALUES ".
       "('$Room_ID','$Patient_ID','$period','$Room_type')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}

if($_POST['nameoftable']=="LABTESTS")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $catalog_number = addslashes ($_POST['catalog_Number']);
   $Patient_ID = addslashes ($_POST['patient_ID']);
   $lab_assistant = addslashes ($_POST['lab_Assistant']);
   $recommending_doctor = addslashes ($_POST['recommending_Doctor']);
   $reprt_date = addslashes ($_POST['report_Date']);
   $name_of_test = addslashes ($_POST['name_of_test']);
}
else
{
    $catalog_number = $_POST['catalog_Number'];
   $Patient_ID = $_POST['patient_ID'];
   $lab_assistant = $_POST['lab_Assistant'];
   $recommending_doctor = $_POST['recommending_Doctor'];
   $reprt_date = $_POST['report_Date'];
   $name_of_test = $_POST['name_of_test'];
}

$sql = "INSERT INTO LABTESTS ".
       "(Catalog_number,Patient_ID,Lab_Assistant,Recommending_Doctor,Report_Date,Name_of_test) ".
       "VALUES ".
       "('$catalog_number','$Patient_ID','$lab_assistant','$recommending_doctor','$report_date','$name_of_test')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}

if($_POST['nameoftable']=="DEPARTMENT")
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $department_ID = addslashes ($_POST['department_ID']);
   $specialistion = addslashes ($_POST['specialisation']);
   $heading_doctor = addslashes ($_POST['heading_Doctor']);
   
}
else
{
   $department_ID = $_POST['department_ID'];
   $specialistion = $_POST['specialisation'];
   $heading_doctor =$_POST['heading_Doctor'];
}

$sql = "INSERT INTO DEPARTMENT ".
       "(Department_ID,Specialisation,Heading_Doctor) ".
       "VALUES ".
       "('$department_ID','$specialisation','$heading_doctor')";
mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}


?>
</body>
</html>
