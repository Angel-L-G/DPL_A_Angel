# Método de Paso de Variables de formularios. GET y Post.

Para hacer un form y enviarlo a otro archivo a traves de un post o un get necesitaremos dos archivos un html y un php aqui les mostrare que hize yo.

## El Fichero html

  Cabe destacar que aqui tengo dos forms uno con post y otro con get.
  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="get-post.php" method="get">
            <label for="usuario">Nombre:</label>
            <input type="text" name="usuario">
            <br>
            <input type="submit" name="enviar" value="enviar">
        </form>
    </body>
    </html>

## El Fichero php

Aqui recibiremos los datos en las variables de php $_GET y $_Post

    <?php
      print($_GET['usuario']);
      print($_POST['usuario']);
    ?>
