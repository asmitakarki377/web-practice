<?php
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="phpclasswork";
$conn="";

try{
    $conn=mysqli_connect($db_server, $db_user, $db_password, $db_name);
}

catch(mysql_sql_exception){
    echo"Could not connect";
}
if($conn){
    echo "You are connected.";
}
else{
    echo"No Connection";
}
?>
