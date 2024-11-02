<?php
$code_07704633343 = filter_input(INPUT_POST, 'code_07704633343');
$dawa_07704633343 = filter_input(INPUT_POST, 'dawa_07704633343');
$molat_07704633343 = filter_input(INPUT_POST, 'molat_07704633343');
$wrdakari_07704633343 = filter_input(INPUT_POST, 'wrdakari_07704633343');
$sharawani_07704633343 = filter_input(INPUT_POST, 'sharawani_07704633343');
$shwentr_07704633343 = filter_input(INPUT_POST, 'shwentr_07704633343');
$mabast_07704633343 = filter_input(INPUT_POST, 'mabast_07704633343');

if (!empty($code_07704633343)){
if (!empty($dawa_07704633343)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "07704633343";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO m07704633343 (code_07704633343, dawa_07704633343, molat_07704633343, wrdakari_07704633343, sharawani_07704633343, shwentr_07704633343, mabast_07704633343)
values ('$code_07704633343','$dawa_07704633343','$molat_07704633343','$wrdakari_07704633343','$sharawani_07704633343','$shwentr_07704633343','$mabast_07704633343')";
if ($conn->query($sql)){
 header ("location: index.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
