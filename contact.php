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
            <label for="nume">Nume:</label>
            <input type="text" id="nume" name="nume" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="mail" required>

            <label for="mesaj">Mesaj:</label>
            <textarea id="mesaj" name="message" required></textarea>
            <div class="button">
                <button type="submit" name="submit">Trimite e-mail</button>
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>