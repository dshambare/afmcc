<!doctype html>
<html>
<head><title>Read AFM Data</title></head>
<body>
<?php
if (file_exists("leadership.html"))
{
/*echo "file exists";*/
$result=system("dir c:\wamp64");
echo $result;
print_r($result);
}
?>
</body>
</html>