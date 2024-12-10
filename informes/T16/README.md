# Configuración de Servidores Virtuales con Nginx

A continuación, se describe el proceso paso a paso para configurar servidores virtuales en Nginx, incluyendo la creación de directorios para las empresas, ajustes en la configuración de Nginx, y pruebas de los servidores.

---

## 1. Creación de Directorios

Se crean los directorios para cada una de las empresas y se asignan los permisos y propiedad adecuados:

```bash
mkdir -p /var/www/empresa1
mkdir -p /var/www/empresa2
mkdir -p /var/www/empresa3
chown -R usuario:usuario /var/www/empresa1
chown -R usuario:usuario /var/www/empresa2
chown -R usuario:usuario /var/www/empresa3
chmod -R 755 /var/www/empresa1
chmod -R 755 /var/www/empresa2
chmod -R 755 /var/www/empresa3
```

---

## 2. Configuración de Archivos en Nginx

### 2.1 Duplicar el archivo de configuración base

Se copian los archivos de configuración base para cada empresa:

```bash
cd /etc/nginx/sites-available
cp default empresa1
cp default empresa2
cp default empresa3
```

### 2.2 Edición de Configuración para cada Empresa

Se editan los archivos `empresa1`, `empresa2` y `empresa3` con los siguientes cambios:

1. **Eliminación de `default_server`:**
   - En `listen:80` y `listen[::]:80`, se elimina `default_server`.

2. **Cambio del directorio raíz:**
   - Se reemplaza `root /var/www/html` por `root /var/www/empresaX` (donde X es el número de la empresa).

3. **Configuración del nombre del servidor:**
   - Se cambia `server_name _;` por `server_name empresaX.com www.empresaX.com`.

Ejemplo de la configuración de `empresa1`:
```nginx
server {
    listen 80;
    listen [::]:80;

    root /var/www/empresa1;
    index index.html;

    server_name empresa1.com www.empresa1.com;

    location / {
        try_files $uri $uri/ =404;
    }
}
```

### 2.3 Activación de los Sitios

Se crean enlaces simbólicos para activar los sitios:

```bash
cd ..
ln -s /etc/nginx/sites-available/empresa1 /etc/nginx/sites-enabled/
ln -s /etc/nginx/sites-available/empresa2 /etc/nginx/sites-enabled/
ln -s /etc/nginx/sites-available/empresa3 /etc/nginx/sites-enabled/
ls -l
```

Se elimina el archivo `default`:

```bash
rm default
```

---

## 3. Comprobación y Recarga de Nginx

Se verifica la configuración de Nginx y se recargan los servicios:

```bash
nginx -t
nginx -s reload
```

---

## 4. Configuración del Archivo `/etc/hosts`

Se añaden las siguientes entradas al archivo `/etc/hosts` para resolver los dominios localmente:

```bash
nano /etc/hosts
```

Contenido a añadir:
```plaintext
127.0.0.1 empresa1.com www.empresa1.com
127.0.0.1 empresa2.com www.empresa2.com
127.0.0.1 empresa3.com www.empresa3.com
```

Se recarga Nginx nuevamente:

```bash
nginx -s reload
```

---

## 5. Creación de Archivos HTML para las Empresas

Se crean archivos `index.html` personalizados para cada empresa en sus respectivos directorios:

```bash
cd /var/www/empresa1
nano index.html
```

Contenido del archivo `index.html` para `empresa1`:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Empresa 1</title>
</head>
<body>
    <h1>Hola, soy empresa1</h1>
</body>
</html>
```

Se repite este proceso para `empresa2` y `empresa3`, ajustando el contenido correspondiente.

---

## 6. Recarga Final de Nginx

Se realiza una recarga final para aplicar todos los cambios:

```bash
nginx -s reload
```

---

## Resultado

Al acceder a los dominios `empresa1.com`, `empresa2.com`, y `empresa3.com` en un navegador, se visualizará la página personalizada de cada empresa.
```
