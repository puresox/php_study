<?php
$con = mysqli_connect("localhost","root","IPR4SJep3lbi3VtxxG7g");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql_select="SELECT * FROM test.test order by id";
$result = mysqli_query($con,$sql_select);
echo "<table border='1'>
<tr>
<th>name</th>
<th>id</th>
<th>sex</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['sex'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>