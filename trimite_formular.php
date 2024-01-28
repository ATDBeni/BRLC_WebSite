<?php

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