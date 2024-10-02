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
