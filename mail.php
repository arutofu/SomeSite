<?php

$data = [
	"mail" => $_POST['mail'],	
	"name" => $_POST['name'],
	"phone" => $_POST['phone'],
];

$connection = new PDO('mysql:host=localhost;dbname=mailing', 'pma', '1');
$sql = 'INSERT INTO mail_list (content_mail, phone, name) VALUES (:mail, :phone, :name)';
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);