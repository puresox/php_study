<?php
$q=$_GET["q"];
if ($q==1)
{
    echo "<form>
    Name:&nbsp;<input type=\"text\" name=\"name\"><br>
    ID:&nbsp;&nbsp;<input type=\"text\" name=\"id\"><br>
    SEX: &nbsp;<input type=\"radio\" name=\"gender\" value=\"female\">女
    <input type=\"radio\" name=\"gender\" value=\"male\">男<br>
</form>";
}
?>