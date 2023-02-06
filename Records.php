<?php
    //database name = "mailing"
    //table name = "users"
    $con = mysql_connect("localhost","pma","1");
    $dbs = mysql_select_db("mailing",$con);
    $result= mysql_query("select * from mail_list");
    $array = mysql_fetch_row($result);
?>
<tr>
    <td>id: </td>
    <td>name: </td>
    <td>phone: </td>	
    <td>mail: </td>
</tr>
<?php
    while ($row = mysql_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "</tr>";
    }   
?>