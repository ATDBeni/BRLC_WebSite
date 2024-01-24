<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

<?php include 'header.php'; ?>

<h1>Contact</h1>

<form action="trimite_formular.php" method="post">
    <label for="nume">Nume:</label>
    <input type="text" id="nume" name="nume" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="mail" required>

    <label for="subiect">Subiect:</label>
    <input type="text" id="subiect" name="subject" required>

    <label for="mesaj">Mesaj:</label>
    <textarea id="mesaj" name="message" required></textarea>

    <button type="submit" name="submit">Trimite e-mail</button>
</form>

<?php include 'footer.php'; ?>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['nume'];
    $subject = $_POST['subject'];  
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "betelarad121.125@gmail.com";
    $headers = "De la:".$mailFrom;
    $txt = "Ai primit un e-mail de la ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>
