<!DOCTYPE html>
<html>
<body>

<?php


$servername = "localhost";
$username = "root";
$password = "aissel123";
$dbname = "Company";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else

$eid1=$_POST["emplid"];
$empname=$_POST["ename"] ;
$edob=$_POST["dob"] ;
$phnum=$_POST["pnum"] ;
$eemail=$_POST["email"] ;
$edoj=$_POST["doj"] ;
$emsalary=$_POST["esalary"] ;

echo $eid1;

// Create connection

// Check connection


$sql = "insert into employees values('$eid1','$empname','$edob','$phnum','$eemail','$edoj','$emsalary')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
</html>
