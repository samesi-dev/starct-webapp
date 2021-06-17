<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/
require('stripe-php-master/init.php');
$publishableKey="pk_test_51J336UFX6YGqP6VYCTYgVfYARlgwBL9AooHVO5BFgiNchjlMAoNQOII5c3dwJGzXPGjLdY5FGGKJYJ6GiO5NPDS400Bj7wcUxh";
$secretKey="sk_test_51J336UFX6YGqP6VYAeehxC0pG3gbuEOzxSAp6KW0xAnsM6hELiJaYg0t6nhk6tEktiehy7dfvL8VtXoWOKPDsj4w00ZSx6RIS2";

\Stripe\Stripe::setApiKey($secretKey);



// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>