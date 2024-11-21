La instalación y configuración de **ProFTPD** (Professional FTP Daemon) también es un proceso sencillo. Aquí tienes una guía paso a paso para instalarlo y configurarlo:

---

### 1. **Actualizar el sistema**
Antes de instalar cualquier software, asegúrate de que el sistema esté actualizado:
```bash
sudo apt update && sudo apt upgrade -y    # Para distribuciones basadas en Debian/Ubuntu
sudo yum update -y                        # Para distribuciones basadas en CentOS/RHEL
```

---

### 2. **Instalar ProFTPD**
Usa el gestor de paquetes de tu distribución:
```bash
sudo apt install proftpd -y               # Para Debian/Ubuntu
sudo yum install proftpd -y               # Para CentOS/RHEL
sudo dnf install proftpd -y               # Para Fedora
```

---

### 3. **Elegir el modo de instalación**
Durante la instalación en Ubuntu/Debian, puede que te pregunten si deseas instalar ProFTPD en modo **standalone** o **inetd**:
- Selecciona **standalone** para ejecutar ProFTPD como un servicio independiente.

Si no aparece esta opción, no te preocupes; el servicio puede configurarse después.

---

### 4. **Configurar ProFTPD**
Edita el archivo principal de configuración para adaptarlo a tus necesidades:
```bash
sudo nano /etc/proftpd/proftpd.conf
```

Algunas configuraciones comunes que puedes ajustar:

#### a) Permitir usuarios locales:
Busca y asegúrate de que esté configurado así:
```bash
<Global>
  DefaultRoot ~
  RequireValidShell off
</Global>
```

#### b) Deshabilitar acceso anónimo (opcional):
```bash
<Anonymous ~ftp>
  User ftp
  Group nogroup
  # Si quieres deshabilitar el acceso anónimo:
  <Limit LOGIN>
    DenyAll
  </Limit>
</Anonymous>
```

#### c) Activar el modo pasivo (opcional, para conexiones NAT/firewalls):
```bash
PassivePorts 60000 61000
```

Guarda los cambios (`Ctrl + O`, luego `Enter`) y cierra el editor (`Ctrl + X`).

---

### 5. **Habilitar y arrancar el servicio**
Inicia y habilita ProFTPD para que se inicie automáticamente al arrancar el sistema:
```bash
sudo systemctl start proftpd
sudo systemctl enable proftpd
```

---

### 6. **Configurar el firewall**
Permite el acceso al puerto FTP (21) y al rango de puertos pasivos (si lo configuraste):

Para **ufw** (Ubuntu):
```bash
sudo ufw allow 21/tcp
sudo ufw allow 60000:61000/tcp
sudo ufw reload
```

Para **firewalld** (CentOS/RHEL):
```bash
sudo firewall-cmd --add-service=ftp --permanent
sudo firewall-cmd --add-port=60000-61000/tcp --permanent
sudo firewall-cmd --reload
```

---

### 7. **Crear usuarios para FTP**
Crea un usuario y configura su directorio de trabajo:
```bash
sudo adduser ftpuser
sudo passwd ftpuser
```

Asegúrate de que tenga un directorio asignado (como `/home/ftpuser`) y establece permisos adecuados:
```bash
sudo mkdir /home/ftpuser
sudo chown ftpuser:ftpuser /home/ftpuser
sudo chmod 750 /home/ftpuser
```

---

### 8. **Probar la conexión**
Usa un cliente FTP como **FileZilla** o el comando `ftp` desde otra máquina para conectarte al servidor.

---

### 9. **Habilitar TLS/SSL para conexiones seguras (opcional)**
Si quieres usar FTPS para mayor seguridad:

#### a) Generar un certificado:
```bash
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
  -keyout /etc/proftpd/ssl/proftpd.key \
  -out /etc/proftpd/ssl/proftpd.crt
```

#### b) Configurar ProFTPD para usar TLS:
Edita `/etc/proftpd/tls.conf` (o añade las siguientes líneas a `/etc/proftpd/proftpd.conf`):
```bash
<IfModule mod_tls.c>
  TLSEngine on
  TLSLog /var/log/proftpd/tls.log
  TLSProtocol TLSv1.2
  TLSRSACertificateFile /etc/proftpd/ssl/proftpd.crt
  TLSRSACertificateKeyFile /etc/proftpd/ssl/proftpd.key
  TLSOptions NoCertRequest
  TLSVerifyClient off
</IfModule>
```

Reinicia ProFTPD:
```bash
sudo systemctl restart proftpd
```

---

### 10. **Solución de problemas**
- Verifica los logs si algo no funciona correctamente:
  ```bash
  sudo tail -f /var/log/proftpd/proftpd.log
  ```
- Asegúrate de que los puertos estén abiertos y el servicio esté corriendo correctamente:
  ```bash
  sudo systemctl status proftpd
  ```

---

Con estos pasos, deberías tener un servidor ProFTPD funcional. Si necesitas configuraciones adicionales o enfrentaste algún problema, házmelo saber.
