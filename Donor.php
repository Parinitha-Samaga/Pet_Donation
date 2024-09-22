<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'maria','Pets', 80);

// get the post records
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dod = $_POST['dod'];
$noi = $_POST['noi'];
$pwd = $_POST['pwd'];

// database insert SQL code
$sql = "INSERT INTO `Pet_Donors` (`ID`, `First_Name`, `Last_Name`, `Date_of_Donation`, `Number_of_Items`, `Password`) VALUES ('0', '$fname', '$lname', '$dod', '$noi', '$pwd')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted <br> <br>";
	
}
$sql = 'SELECT * FROM Pet_Donors';
   
   $retval = mysqli_query($con, $sql);
   
   
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "Donor ID :{$row['ID']}  <br> ".
         "Donor's First Name : {$row['First_Name']} <br> ".
         "Donor's Last Name : {$row['Last_Name']} <br> ".
	 "Date of Donation : {$row['Date_of_Donation']} <br> ".
	 "Number of Items donated : {$row['Number_of_Items']} <br>".
	 "Password : {$row['Password']} <br>".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
  
?>
