<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <h1>Contact</h1>
    <div class="formular">
        <form action="trimite_formular.php" method="post">
            <h1>Trimiteti un mail pentru a discuta</h1>
            <label for="nume">Nume:</label>
            <input type="text" id="nume" name="nume" required placeholder="Ex. Alex">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="mail" required placeholder="Ex. test@test.com">

            <label for="mesaj">Mesaj:</label>
            <textarea id="mesaj" name="message" required placeholder="Ex. mesaj"></textarea>
            <div class="button">
                <button type="submit" name="submit">Trimite e-mail</button>
            </div>
        </form>

    </div>
    <div class="contact">
        <div class="contact-link">
            <h1>Puteti sa ma contactati la urmatoarele adrese</h1>
            <a href='https://www.instagram.com/plasteringuk/' target="_blank">
                <img src="images/instagram.svg" alt="">
            </a>
            <a href='https://www.facebook.com/profile.php?id=100064192446389' target="_blank">
                <img src="images/facebook.svg " alt="">
            </a>
            <?php
            $phoneNumber = '0754785759';

            echo '<h3>Sau prin telefon: <a href="tel:' . $phoneNumber . '">' . $phoneNumber . '</a></h3>';
            ?>

        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>