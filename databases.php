<?php

$server = "localhost";
$login = "pma";
$pass = "1";
$name_db = "mailing";

$link = mysqli_connect($server, $login, $pass, $name_db);

if ($link == false)
{
	echo "Ошибка подключения";
}
else echo "Соединение удалось";

?>