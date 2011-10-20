<?php
require_once 'classes/PHPMailer.class.php';

if(isset($_POST)){
    $formOk = true;
    $errors = array();

    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('Y/m/d');
    $time = date('H:i:s');

    array_walk_recursive($_POST, create_function('&$val', '$val = stripslashes(trim($val));'));
    $name = $_POST['name'];
    $emailAddress = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(empty($name)){
        $formOk = false;
        $errors[] = 'You have not entered a name';
    }elseif(empty($emailAddress)){
        $formOk = false;
        $errors[] = 'You have not entered an email address';
    }elseif(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
        $formOk = false;
        $errors[] = 'You have not entered a valid email address';
    }elseif(strlen($message) < 5){
        $formOk = false;
        $errors[] = 'Your message must be greater than 5 characters';
    }

    $returnArr['message'] = $message;

    if($formOk){
        try {
            $email = new PHPMailer(true);
            $email->AddAddress('physicsmazz@gmail.com', 'MAZZ');
            $email->Subject = "Email from resorationsincberkshires.com";
            $email->From = 'donotreply@resorationsincberkshires.com';
            $email->FromName = "Restorations Inc.";

            $emailBody = "From: {$name}<br>";
            $emailBody .= "Email: {$emailAddress}<br>";
            $emailBody .= "Message: {$message}<br>";

            $email->MsgHTML($emailBody);
            $email->Send();
            $returnArr['result'] = 'OK';
        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
    }

    $returnArr['errorArr'] = $errors;
    echo (json_encode($returnArr));

}








 