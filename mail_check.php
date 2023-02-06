<?php
    $login = trim( $_POST['mail'] ); // Логин, который получаем через POST
    

$connection = new PDO('mysql:host=localhost;dbname=mailing', 'pma', '1');


    $sql = 'SELECT FROM mail_list (content_mail) VALUES (:mail)';
    
    if( @mysql_num_rows > 0 )
    {
        echo "Почта уже зарегистрирована!";
    }
    else
    {
        echo "Почта свободна!";
    }
?>