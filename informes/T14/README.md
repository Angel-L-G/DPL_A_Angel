Instalar **vsftpd** (Very Secure FTP Daemon) en un servidor Linux es un proceso sencillo. A continuación, te proporciono los pasos detallados:

---

### 1. **Actualizar el sistema**
Antes de instalar cualquier software, asegúrate de que el sistema esté actualizado.
```bash
sudo apt update && sudo apt upgrade -y    # Para distribuciones basadas en Debian/Ubuntu
sudo yum update -y                        # Para distribuciones basadas en CentOS/RHEL
```

---

### 2. **Instalar vsftpd**
Usa el gestor de paquetes de tu distribución:
```bash
sudo apt install vsftpd -y               # Para Debian/Ubuntu
sudo yum install vsftpd -y               # Para CentOS/RHEL
sudo dnf install vsftpd -y               # Para Fedora
```

---

### 3. **Configurar el servicio**
Una vez instalado, debes configurar **vsftpd** según tus necesidades:

#### a) Abrir el archivo de configuración:
```bash
sudo nano /etc/vsftpd.conf
```

#### b) Realiza cambios básicos según lo que necesitas:
- Permitir acceso local:
  ```bash
  local_enable=YES
  ```
- Habilitar permisos de escritura:
  ```bash
  write_enable=YES
  ```
- Configurar un directorio raíz para los usuarios (opcional):
  ```bash
  chroot_local_user=YES
  ```
- Configurar un puerto pasivo (opcional):
  ```bash
  pasv_min_port=10000
  pasv_max_port=10100
  ```
- (Opcional) Restringir el acceso anónimo:
  ```bash
  anonymous_enable=NO
  ```

Guarda los cambios (`Ctrl + O`, luego `Enter`) y cierra el editor (`Ctrl + X`).

---

### 4. **Habilitar y arrancar el servicio**
Inicia y habilita el servicio para que se inicie automáticamente al arrancar el sistema:
```bash
sudo systemctl start vsftpd
sudo systemctl enable vsftpd
```

---

### 5. **Configurar el firewall**
Permite el acceso al puerto FTP (21) y al rango de puertos pasivos (si los configuraste):

Para **ufw** (Ubuntu):
```bash
sudo ufw allow 21/tcp
sudo ufw allow 10000:10100/tcp
sudo ufw reload
```

Para **firewalld** (CentOS/RHEL):
```bash
sudo firewall-cmd --add-service=ftp --permanent
sudo firewall-cmd --add-port=10000-10100/tcp --permanent
sudo firewall-cmd --reload
```

---

### 6. **Crear usuarios para FTP**
Crea un usuario del sistema y establece una contraseña para él:
```bash
sudo adduser ftpuser
sudo passwd ftpuser
```

Asegúrate de asignarle un directorio adecuado (por ejemplo, `/home/ftpuser`) y de configurar los permisos.

---

### 7. **Probar la conexión**
Usa un cliente FTP como **FileZilla** o el comando `ftp` en otra máquina para conectarte al servidor. Introduce la dirección IP del servidor, el usuario, y la contraseña para probar la conexión.

---

### 8. **Solución de problemas (opcional)**
- Verifica los logs si algo no funciona correctamente:
  ```bash
  sudo tail -f /var/log/vsftpd.log
  ```
- Asegúrate de que el puerto 21 esté abierto y no bloqueado por algún firewall externo.

---

Con estos pasos, deberías tener un servidor FTP funcional utilizando **vsftpd**. Si necesitas configuraciones más avanzadas, como acceso mediante TLS/SSL o restricciones adicionales, házmelo saber.
