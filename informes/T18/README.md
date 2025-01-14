# Informe sobre el CRUD de Usuarios en PHP con MySQL

## Descripción General
Este proyecto es una aplicación básica de CRUD (Crear, Leer, Actualizar, Eliminar) de usuarios, desarrollada en PHP con MySQL como base de datos. La interfaz utiliza **Bootstrap 5** para el diseño responsivo y funcional.

---

## Características

1. **Crear Usuarios**:
   - Un formulario permite agregar un nuevo usuario a la base de datos.
   - La contraseña es encriptada utilizando la función `password_hash()` antes de guardarla en la base de datos.

2. **Leer Usuarios**:
   - Los usuarios existentes se muestran en una tabla HTML.
   - La tabla incluye columnas para el ID, el nombre, el correo electrónico y las acciones disponibles.

3. **Actualizar Usuarios**:
   - Cada usuario tiene un botón "Editar" que abre un modal con un formulario para actualizar su información (nombre y correo electrónico).

4. **Eliminar Usuarios**:
   - Cada usuario tiene un botón "Eliminar" que abre un modal de confirmación para borrar al usuario seleccionado.

---

## Estructura del Código

### 1. **Conexión a la Base de Datos**
La conexión a la base de datos utiliza la función `mysqli_connect()`.
```php
$host = "localhost";
$user = "root";
$password = "abc";
$database = "crud_db";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
```

### 2. **Operaciones del CRUD**
#### Crear Usuario
- El formulario para crear usuario envía los datos mediante `POST`.
- La contraseña se encripta antes de guardarla.
```php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] === 'create') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')") or die($conn->error);
    header("Location: index.php");
    exit;
}
```

#### Leer Usuarios
- Se utiliza una consulta `SELECT` para recuperar todos los usuarios.
```php
$result = $conn->query("SELECT * FROM users") or die($conn->error);
```

#### Actualizar Usuario
- Un modal con un formulario permite editar el nombre y el correo electrónico del usuario seleccionado.
```php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] === 'edit') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id='$id'") or die($conn->error);
    header("Location: index.php");
    exit;
}
```

#### Eliminar Usuario
- Un modal de confirmación permite borrar al usuario seleccionado.
```php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] === 'delete') {
    $id = $_POST['id'];

    $conn->query("DELETE FROM users WHERE id='$id'") or die($conn->error);
    header("Location: index.php");
    exit;
}
```

---

## Diseño de la Base de Datos

La tabla utilizada para este CRUD es `users`.

### Estructura de la Tabla `users`
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```

---

## Interfaz de Usuario

### Formulario para Crear Usuarios

Formulario para agregar un nuevo usuario.
```html
<form method="POST" action="">
    <input type="hidden" name="action" value="create">
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-success">Crear</button>
</form>
```

### Tabla de Usuarios

Los usuarios registrados se muestran en una tabla con las acciones disponibles:
- **Editar**: Abre un modal con un formulario para editar.
- **Eliminar**: Abre un modal de confirmación para borrar.

```html
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id']; ?>">Editar</button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $row['id']; ?>">Eliminar</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
```

---

## Tecnologías Utilizadas

1. **PHP**: Para el backend y las operaciones CRUD.
2. **MySQL**: Base de datos para almacenar la información de los usuarios.
3. **Bootstrap 5**: Para un diseño responsivo y estilizado.
4. **HTML**: Estructura de la interfaz de usuario.

---

## Mejoras Futuras

1. Validación del lado del servidor para entradas de usuario.
2. Uso de consultas preparadas para prevenir inyecciones SQL.
3. Agregar paginación a la tabla de usuarios.
4. Implementar roles y permisos para diferentes usuarios.
5. Mejorar la experiencia de usuario con alertas visuales tras acciones exitosas o fallidas.

---

## Conclusión
Este CRUD básico en PHP con MySQL es una solución efectiva para gestionar usuarios. Es fácilmente extensible y proporciona una base sólida para desarrollar aplicaciones web más complejas.
