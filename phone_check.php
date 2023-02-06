<?php
    $login = trim( $_POST['phone'] );
    

$connection = new PDO('mysql:host=localhost;dbname=mailing', 'pma', '1');


    $sql = 'SELECT FROM mail_list (phone) VALUES (:phone)';
    
    if( @mysql_num_rows > 0 )
    {
        echo "Телефон уже записан!";
    }
    else
    {
        echo "";
    }
?>