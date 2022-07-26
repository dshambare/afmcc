<!doctype html>
<html>
<head><title>Read AFM Data</title></head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$dbname="afmcc";
$cxn = mysqli_connect($host,$user,$password,$dbname)
or die ("No connection");
$sql="select * from members";
$result = mysqli_query($cxn,$sql)
or die ("Couldn’t execute query.");
//--echo $row['DOB'];echo " ";-->;
//--echo $row['ID'];echo " ";-->;
//!--echo $row['Name'];-->
while($row=mysqli_fetch_assoc($result))
{
//foreach($row as $value)
{
echo "Name :{$row['Name']}<br>".
"Address :{$row['Address']} <br>".
"ID no.: {$row['ID']}<br>".
"DOB :{$row['DOB']}<br>".
"--------------------------------------------------<br>";



}
}
mysqli_close($cxn);
?>
</body>
</html>

   