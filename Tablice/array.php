<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formularz</title>
</head>
<body>

<form method="GET" action="form.php">
    <label for="name">Imię:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Wyślij GET</button>
</form>

<form method="POST" action="form.php">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <button type="submit">Wyślij POST</button>
</form>

</body>
</html>
