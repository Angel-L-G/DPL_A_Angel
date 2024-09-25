# Redireccionar Páginas entre Archivos PHP

### Pasos a realizar:

1. **Crear archivos PHP para redireccionar**  
   Vamos a crear dos archivos de ejemplo:
   - `origen.php` (desde donde se redirigirá)
   - `destino.php` (hacia donde se redirigirá)

   Asegúrate de tener ambos archivos en el mismo directorio o con rutas accesibles.

2. **Usar `header()` para redireccionar en `origen.php`**  
   En el archivo `origen.php`, utilizamos la función `header()` para realizar la redirección. Debes asegurarte de que no haya salida antes de usar esta función, es decir, no debe haber espacio en blanco, ni HTML, ni `echo` antes de la redirección.

   Ejemplo de código en `origen.php`:

   ```php
   <?php
     header("Location: destino.php");
     exit();  // Es buena práctica usar exit() después de header para detener la ejecución del script.
   ?>
