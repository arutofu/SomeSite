<?php
mysql_connect("localhost", "pma", "1") or die (mysql_error ());
mysql_select_db("mailing") or die(mysql_error());

$strSQL = "SELECT * FROM mail_list";

$rs = mysql_query($strSQL);

while($row = mysql_fetch_array($rs)) {
echo $row['content_mail'] . "<br />";
}
mysql_close();
?>