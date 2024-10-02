# Informe: Operaciones CRUD en PHP

## Base de Datos: `prueba`
## Tabla: `users`

### 1. Insertar Registros (Create)

Para insertar un registro en la tabla `users`, utilizamos una consulta SQL de tipo `INSERT INTO`. El siguiente código muestra cómo hacerlo usando `mysqli`.

```php
<?php
// Datos de conexión
$servername = "localhost";
$username = "NombreRoot";
$password = "ContraseñaRoot";
$database = "prueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar datos
$sql = "INSERT INTO users (nombre, email) VALUES ('Juan Pérez', 'juan@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
```

# 2. Leer Registros (Read)

Para leer (o seleccionar) registros desde la tabla `users`, utilizamos la consulta `SELECT * FROM`. A continuación, se muestra el código PHP para hacerlo.

```php
<?php
// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar los datos
$sql = "SELECT id, nombre, email, edad FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir cada registro
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Email: " . $row["email"]. " - Edad: " . $row["edad"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conn->close();
?>
```

# 3. Modificar Registros (Update)

Para modificar un registro en la tabla `users`, usamos la consulta `UPDATE`. Aquí se muestra cómo modificar la edad de un usuario.

```php
<?php
// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Actualizar datos
$sql = "UPDATE users SET edad=30 WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error actualizando el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
```

# 4. Borrar Registros (Delete)

Para borrar un registro en la tabla `users`, usamos la consulta `DELETE FROM`. Aquí se muestra cómo eliminar un registro por su id.

```php
<?php
// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Borrar datos
$sql = "DELETE FROM users WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado exitosamente";
} else {
    echo "Error eliminando el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
```
