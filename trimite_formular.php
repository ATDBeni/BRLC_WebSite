<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'C:\xampp\htdocs\Proiect_Info\PHPMailer-master/src/Exception.php';
// require 'C:\xampp\htdocs\Proiect_Info\PHPMailer-master/src/PHPMailer.php';
// require 'C:\xampp\htdocs\Proiect_Info\PHPMailer-master/src/SMTP.php';

// $mailSender = new PHPMailer(true);
// $mailSender->SMTPDebug = SMTP::DEBUG_SERVER;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nume = $_POST["nume"];
//     $email = $_POST["email"];
//     $mesaj = $_POST["mesaj"];

//     $to = "atudoroaeben123@gmail.com";
//     $subject = "ce fa ma";

//     try {
//         // Configurare server SMTP
//         $mailSender->SMTPDebug = SMTP::DEBUG_OFF;
//         $mailSender->isSMTP();
//         $mailSender->Host = 'smtp.gmail.com';
//         $mailSender->SMTPAuth = true;
//         $mailSender->Username = 'betelarad121.125@gmail.com';
//         $mailSender->Password = 'betel2020';
//         $mailSender->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//         $mailSender->Port = 587;

//         // Destinatar
//         $mailSender->setFrom($email);
//         $mailSender->addAddress($to);

//         // Mesaj
//         $mailSender->Subject = $subject;
//         $mailSender->Body = $mesaj;

//         // Trimite e-mailul
//         $mailSender->send();
//         echo "Formularul a fost trimis cu succes!";
//     } catch (Exception $e) {
//         echo "Eroare la trimiterea e-mailului: {$mailSender->ErrorInfo}";
//         echo "<pre>";
//         print_r($e);
//         echo "</pre>";

//     }
// }

// if(isset($_POST['submit'])){
//     $name = $_POST['nume'];
//     $subject = $_POST['subject'];  
//     $mailFrom = $_POST['mail'];
//     $message = $_POST['message'];

//     $mailTo = "betelarad121.125@gmail.com";
//     $headers = "From:".$mailFrom;
//     $txt = "You recive email an email from ".$name.".\n\n".$message;
//     mail($mailTo, $subject,$txt,$headers);
//     header("Location:index.php?mailsend");
// }
if(isset($_POST['nume']) && isset($_POST['mail']) && isset($_POST['message'])){
    $name = $_POST['nume']; 
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "betelarad121.125@gmail.com";
    $headers = "From:".$mailFrom;
    $txt = "You receive an email from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}