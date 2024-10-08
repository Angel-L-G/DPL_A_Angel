<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <h3>Insert:</h3>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"/>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="enviar">
    </form>

    <form action="update.php" method="post">
        <h3>Update:</h3>
        <label for="id">id:</label>
        <input type="number" id="id" name="id"/>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"/>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="enviar">
    </form>

    <form action="delete.php" method="post">
        <h3>Delete:</h3>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"/>
        <input type="submit" value="enviar">
    </form>
</body>
</html>