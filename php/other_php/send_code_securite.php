<?php
  require_once 'connexion_data_base.php';
  $rand = $_POST['rand'];
  $email = $_POST['email'];
  $sujet = "Code de sécurité";
  $message = "Bonjour , le code de sécurité est : <b>$rand</b>";

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail ->IsSmtp();
  $mail ->SMTPDebug = 0;
  $mail ->SMTPAuth = true;
  $mail ->SMTPSecure = 'ssl';
  $mail ->Host = 'smtp.gmail.com';
  $mail ->Port = 465;
  $mail ->Timeout = 5;
  $mail ->IsHTML(true);
  $mail ->Username = "miniprojet.groupec@gmail.com";
  $mail ->Password = "miniprojet1234567";
  $mail ->SetFrom("miniprojet.groupec@gmail.com","Bibiliothèque en ligne");
  $mail ->Subject = $sujet;
  $mail ->Sender = ("miniprojet.groupec@gmail.com");
  $mail ->Body = "<p>$message</p>
    <br>
    <p><b>De :<b/> miniprojet.groupec@gmail.com </p>
    <hr>
    <b>Bibliothèque en ligne</b>";
  $mail ->AddAddress($email);
  $mail ->CharSet = 'UTF-8';
  $mail ->send();
   ?>
