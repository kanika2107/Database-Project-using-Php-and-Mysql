<html>

<title>
DATABASE
</title>
<style>
body {
    background-repeat: no-repeat;
      background-attachment: fixed;
}
</style>
<body background="2.jpg">
<?php
echo "<center>";
echo "<h1>";
echo "EMPLOYEE TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Employee_ID
        FROM EMPLOYEE';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Employee_ID :{$row['Employee_ID']} <br>
         <br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);
echo "<hr>";
echo "<h1>";
echo "PATIENT TABLE";
echo "</h1>";
echo "<br><br>";
/* PATIENT */

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Patient_ID,Address,
				Contact,Date_Admitted,
				Date_Discharged,Sex,Name
        FROM PATIENT';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Patient_ID :{$row['Patient_ID']}<br>".
    	 "Name :{$row['Name']}<br>".
    	 "Address:{$row['Address']}<br>".
    	 "Contact : {$row['Contact']}<br>".
    	 "Date_Admitted : {$row['Date_Admitted']}<br>".
    	 "Date_Discharged: {$row['Date_Discharged']}<br>".
    	 "Sex : {$row['Sex']}".

         "<br><br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);
echo "<hr>";
echo "<h1>";
echo "DOCTOR TABLE";
echo "</h1>";
echo "<br><br>";
/* Doctor */
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Name,Address,Visiting,
				Permanent,Age,Pateint_ID,Designation
        FROM DOCTOR';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Patient_ID :{$row['Pateint_ID']}<br>".
    	 "Name :{$row['Name']}<br>".
    	 "Address:{$row['Address']}<br>".
    	 "Contact : {$row['Contact']}<br>".
    	 "Permanent : {$row['Permanent']}<br>".
     	 "Visiting: {$row['Visiting']}<br>".
    	 "Age : {$row['Age']}<br>".
    	 "Designation : {$row['Designation']}".

         "<br><br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);
echo "<hr>";
echo "<h1>";
echo "RECORD TABLE";
echo "</h1>";
echo "<br><br>";
/* Record */
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Appointment_Date,Patient_ID,Description,Receptionist_ID
        FROM RECORD';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Patient_ID :{$row['Patient_ID']}<br>".
    	 "Appointment_Date :{$row['Appointment_Date']}<br>".
    	 "Description:{$row['Description']}<br>".
    	 "Receptionist_ID : {$row['Receptionist_ID']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);



/**** LAB TESTS ****/

echo "<hr>";
echo "<h1>";
echo "LABTESTS TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Catalog_number,Patient_ID,Lab_Assistant,Recommending_Doctor,
        Report_Date,Name_of_test
        FROM LABTESTS';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Catalog_number :{$row['Catalog_number']}<br>".
    	 "Patient_ID :{$row['Patient_ID']}<br>".
    	 "Lab_Assistant:{$row['Lab_Assistant']}<br>".
    	 "Recommending_Doctor : {$row['Recommending_Doctor']}<br>".
    	 "Report_Date : {$row['Report_Date']}<br>".
     	 "Name_of_test: {$row['Name_of_test']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);



/*** Chemists ***/
echo "<hr>";
echo "<h1>";
echo "CHEMIST TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Shop_Number,List,Close_Time,Start_Time
        FROM CHEMIST';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Shop_Number :{$row['Shop_Number']}<br>".
    	 "List :{$row['List']}<br>".
    	 "Close_Time:{$row['Close_Time']}<br>".
    	 "Start_Time : {$row['Start_Time']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);

/****CANTEEN ***/
echo "<hr>";
echo "<h1>";
echo "CANTEEN TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Shop_Number,List,Close_Time,Start_Time
        FROM CANTEEN';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Shop_Number :{$row['Shop_Number']}<br>".
    	 "List :{$row['List']}<br>".
    	 "Close_Time:{$row['Close_Time']}<br>".
    	 "Start_Time : {$row['Start_Time']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);

/****GENERAL ***/
echo "<hr>";
echo "<h1>";
echo "GENERAL TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Shop_Number,List,Close_Time,Start_Time
        FROM GENERAL';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Shop_Number :{$row['Shop_Number']}<br>".
    	 "List :{$row['List']}<br>".
    	 "Close_Time:{$row['Close_Time']}<br>".
    	 "Start_Time : {$row['Start_Time']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);

/***
Medicine***/
echo "<hr>";
echo "<h1>";
echo "MEDICINE TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Price,Patient_ID,Date_of_expiry,Quantity,Name,Code
        FROM MEDICINE';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Patient_ID :{$row['Patient_ID']}<br>".
    	 "Price :{$row['Price']}<br>".
    	 "Date_of_expiry:{$row['Date_of_expiry']}<br>".
    	 "Quantity : {$row['Quantity']}<br>".
    	 "Name : {$row['Name']}<br>".
     	 "Code: {$row['Code']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);

/***Room***/
echo "<hr>";
echo "<h1>";
echo "ROOM TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Room_ID,Room_type,Patient_ID,Period
        FROM ROOM';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Patient_ID :{$row['Patient_ID']}<br>".
    	 "Room_ID :{$row['Room_ID']}<br>".
    	 "Room_type:{$row['Room_type']}<br>".
    	 "Period : {$row['Period']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);


/**Treatment**/
echo "<hr>";
echo "<h1>";
echo "TREATMENT TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Surgery,Therapy,Patient_ID
        FROM TREATMENT';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Surgery :{$row['Surgery']}<br>".
    	 "Therapy :{$row['Therapy']}<br>".
    	 "Patient_ID:{$row['Patient_ID']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);

/**department **/
echo "<hr>";
echo "<h1>";
echo "DEPARTMENT TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Department_ID,Specialisation,Heading_Doctor
        FROM DEPARTMENT';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Departemnt_ID :{$row['Department_ID']}<br>".
    	 "Specialisation :{$row['Specialisation']}<br>".
    	 "Heading_Doctor:{$row['Heading_Doctor']}<br>".
         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);

/*** Nurse **/ 
echo "<hr>";
echo "<h1>";
echo "NURSE TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Contact,Name,Age,Address,Designation,Employee_ID
        FROM NURSE';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Employee_ID :{$row['Employee_ID']}<br>".
    	 "Name :{$row['Name']}<br>".
    	 "Address:{$row['Address']}<br>".
    	 "Contact : {$row['Contact']}<br>".
    	 "Age : {$row['Age']} <br>".
    	 "Designation : {$row['Designation']}<br>".

         "<br>";
} 
//echo "Fetched data successfully\n";
mysql_close($conn);

/**receptionist **/
echo "<hr>";
echo "<h1>";
echo "RECEPTIONIST TABLE";
echo "</h1>";
echo "<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Kanikam6';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Salary,Name,Age,Contact,Sex,Employee_ID
        FROM RECEPTIONIST';

mysql_select_db('Hospital');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Employee_ID :{$row['Employee_ID']}<br>".
    	 "Name :{$row['Name']}<br>".
    	 "Address:{$row['Address']}<br>".
    	 "Contact : {$row['Contact']}<br>".
    	 "Age : {$row['Age']} <br>".
    	 "Salary : {$row['Salary']}".

         "<br><br>";
} 

mysql_close($conn);

echo "</center>";
?>
</body>
</html>
