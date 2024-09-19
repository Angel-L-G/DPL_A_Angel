# Aplicar seguridad a tu servidor de phpmyadmin en xampp
## Primer Paso
  Abrir el interfaz de Xampp y acceder a la configuracion de la aplicacion a traver del boton que dice "Open Aplication Folder"
![](/informes/T4-(seguridadXampp/img/1.png)

## Segundo Paso
  Buscamos y abrir el archivo llamado "config.inc.php"
![](/informes/T4-(seguridadXampp/img/2.png)

## Tercer Paso
  Buscamos la parte que pone "$cfg['Servers'][$i]['password'] y le asignamos el valor que queramos

## Cuarto Paso
  Un par de lineas mas arriba econtramemos una linea que pone "$cfg['Servers'][$i]['auth_type'] y le asignamos el 'http'

Con eso conseguiremos que phpmyadmin pregunte las credenciales al entrar
