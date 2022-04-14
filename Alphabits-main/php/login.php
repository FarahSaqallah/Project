<?php
echo"hello";
dblink = mysqli_connect("localhost","root", "", "test");

if(mysqli_connect_errno()) {
    echo "Could not connect to database: Error: ".mysqli_connect_error();
    exit();
}

$insert = mysqli_query($dblink, "insert into t1 values('$username', '$password')") or die("Query failed: ".mysqli_error());

$x = mysqli_affected_rows($dblink);
echo "$x record(s) inserted";

mysqli_close($dblink);
?>