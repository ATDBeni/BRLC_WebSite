<?php include 'header.php'; ?>

<h1>Contact</h1>

<form action="trimite_formular.php" method="post">
    <label for="nume">Nume:</label>
    <input type="text" id="nume" name="nume" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="mesaj">Mesaj:</label>
    <textarea id="mesaj" name="mesaj" required></textarea>

    <input type="submit" value="Trimite">
</form>

<?php include 'footer.php'; ?>
