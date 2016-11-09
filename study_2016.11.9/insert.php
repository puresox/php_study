<?php
$name=$_GET["name"];
$id=$_GET["id"];
$sex=$_GET["sex"];

$con = mysqli_connect("localhost","root","IPR4SJep3lbi3VtxxG7g");

if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
}
$sql_insert = "INSERT INTO test.test(name,id,sex)
VALUES ('$name','$id', '$sex')";
if (mysqli_query($con, $sql_insert)) {
    echo "新记录插入成功!<br>";
}
else {
    echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>