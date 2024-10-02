# Informe: Creación de Bases de Datos y Conexión con PHP

## 1. Creación de Bases de Datos en phpMyAdmin
phpMyAdmin es una herramienta basada en la web para administrar bases de datos MySQL. A continuación, se describe cómo crear una base de datos:

### Pasos para crear una base de datos en phpMyAdmin:
1. **Acceder a phpMyAdmin**:
   - Accede a tu servidor local (`localhost/phpmyadmin`) o al servidor donde esté instalado phpMyAdmin.
   
2. **Seleccionar la opción "Bases de datos"**:
   - En el menú superior, selecciona `Bases de datos`.

3. **Crear la base de datos**:
   - Introduce el nombre de la base de datos (por ejemplo, `mi_base_de_datos`).
   - Selecciona la colación (por ejemplo, `utf8mb4_general_ci`).
   - Haz clic en `Crear`.

## 2. Creación de Tablas y Campos en phpMyAdmin
Una vez creada la base de datos, puedes proceder a crear tablas.

### Pasos para crear tablas en phpMyAdmin:
1. **Seleccionar la base de datos**:
   - Desde la página de inicio de phpMyAdmin, selecciona la base de datos que acabas de crear.
   
2. **Crear una nueva tabla**:
   - Introduce el nombre de la tabla (por ejemplo, `usuarios`) y especifica el número de columnas (por ejemplo, `5`).
   - Haz clic en `Continuar`.

3. **Definir los campos (columnas)**:
   - **id** (tipo: `INT`, longitud: `11`, con `AUTO_INCREMENT` y `PRIMARY KEY`).
   - **nombre** (tipo: `VARCHAR`, longitud: `100`).
   - **email** (tipo: `VARCHAR`, longitud: `100`, con un índice único).
   - **created** (tipo: `DATETIME`).

4. **Guardar la tabla**:
   - Haz clic en `Guardar` para crear la tabla.

## 3. Conexión a la Base de Datos desde PHP
Una vez creada la base de datos y las tablas, puedes conectar PHP con MySQL. Existen dos métodos comunes: `mysqli` y `PDO`.

### Conexión usando `mysqli`:

```php
<?php
// Datos de conexión
$servername = "localhost";
$username = "NombreRoot";
$password = "PasswordRoot";
$database = "NombreBD";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
