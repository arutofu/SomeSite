<?php
$dbh = new PDO('mysql:dbname=mailing;host=localhost', 'pma', '1');
$sth = $dbh->prepare("SELECT * FROM `mail_list` ORDER BY `id`");
$sth->execute();
$list = $sth->fetchAll(PDO::FETCH_ASSOC);