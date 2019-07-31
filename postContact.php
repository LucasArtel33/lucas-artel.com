<?php

$errors = [];

if(!array_key_exists('name',$_POST) || $_POST['name'] ==''){
    $errors['name'] = "Vous n'avez pas renseigner votre nom.";
}

if(!array_key_exists('mail',$_POST) || $_POST['mail'] =='' || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['mail'] = "Vous n'avez pas renseigner une adresse email valide.";
}

if(!array_key_exists('sujet',$_POST) || $_POST['sujet'] ==''){
    $errors['sujet'] = "Vous n'avez pas renseigner de sujet";
}

if(!array_key_exists('message',$_POST) || $_POST['message'] ==''){
    $errors['message'] = "Vous n'avez pas renseigner votre message";
}

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php#contact');
}else {
    session_start();
    $_SESSION['success'] = 1 ;

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $headers = 'FROM:' . $mail;

    mail('lucas.artel33@gmail.com', $sujet, $message, $headers);
    header('Location: index.php#contact');
}
