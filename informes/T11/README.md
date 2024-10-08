# Interfaces de contacto con los ficheros php anteriores

Este informe describe cómo interactúan los formularios HTML con los archivos PHP correspondientes (`insert.php`, `update.php`, `delete.php`, `index.php`). Cada formulario permite realizar una operación distinta sobre la base de datos: **inserción**, **actualización** y **eliminación** de registros.

## Formularios HTML

Estos formularios permiten tanto ingresar como actualizar y borrar datos en la tabla de users, enviando la información a los archivos `insert.php`,`delete.php` y `update.php` para ser procesada. 

#### Código del formulario de inserción:

```html
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
```

# Codigo PhP

Los codigos de los arhcivos php solo cambian al principio incluyendo las variables enviadad mediante.

```php
  $var_name = $_POST['input_name'];
```

Y sustitullendo dichas variables en la consulta aqui el ejemplo del delete en el que se sutituye el name por `$name` que es el nombre de mi variable.

```php
  $delete = "DELETE FROM users WHERE name='$name'";
```
