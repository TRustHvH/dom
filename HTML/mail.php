<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$message = $_POST["message"];


$EmailTo = "olgapolyakova.zvl@gmail.com";
$Subject = "Новое письмо от $email";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Phone: ";
$Fields .= $phone;
$Fields .= "\n";

$Fields .= "Company: ";
$Fields .= $company;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Subject,  $Fields, "From:".$email);

