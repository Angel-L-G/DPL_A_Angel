# Informe: Operaciones CRUD en PHP

## Base de Datos: `prueba`
## Tabla: `users`

### 1. Insertar Registros (Create)

Para insertar un registro en la tabla `users`, utilizamos una consulta SQL de tipo `INSERT INTO`. El siguiente código muestra cómo hacerlo usando `mysqli`.

```php
<?php
    $connection = mysqli_connect(
        'localhost',
        'root',
        '1q2w3e4r',
        'prueba'
    );

    echo '<pre>';

    $insert = "insert into users(name, email) values('El alfa', 'elalfa@gmail.com')";
    
    $return_insert = mysqli_query($connection, $insert);
    print_r($return_insert);

    mysqli_close($connection);
?>
```

# 2. Modificar Registros (Update)

Para modificar un registro en la tabla `users`, usamos la consulta `UPDATE`. Aquí se muestra cómo modificar el email de un usuario.

```php
<?php
    $connection = mysqli_connect(
        'localhost',
        'root',
        '1q2w3e4r',
        'prueba'
    );

    echo '<pre>';

    $update = "UPDATE users SET email='updated@gmail.com' WHERE id=1";

    $return_update = mysqli_query($connection, $update);
    print_r($return_update);

    mysqli_close($connection);
?>
```

# 4. Borrar Registros (Delete)

Para borrar un registro en la tabla `users`, usamos la consulta `DELETE FROM`. Aquí se muestra cómo eliminar un registro por su nombre.

```php
<?php
    $connection = mysqli_connect(
        'localhost',
        'root',
        '1q2w3e4r',
        'prueba'
    );

    echo '<pre>';

    $delete = "DELETE FROM users WHERE name='El alfa'";

    $return_delete= mysqli_query($connection, $delete);
    print_r($return_delete);

    mysqli_close($connection);
?>
```
