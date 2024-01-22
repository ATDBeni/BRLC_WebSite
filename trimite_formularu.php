<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

    $to = "atudoroaeben123@gmail.com";
    $subject = "Formular de contact - $nume";
    $headers = "From: $email";

    mail($to, $subject, $mesaj, $headers);
    echo "Formularul a fost trimis cu succes!";
}
?>
