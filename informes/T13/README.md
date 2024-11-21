## **Configuración de usuarios**

### **1. Permitir o restringir usuarios**
- **Permitir solo ciertos usuarios:**
  Agrega los nombres de usuario permitidos en el archivo `/etc/vsftpd.userlist` y configura lo siguiente en `/etc/vsftpd.conf`:

  ```plaintext
  userlist_enable=YES
  userlist_deny=NO
  userlist_file=/etc/vsftpd.userlist
  ```

  Esto habilitará la lista de usuarios permitidos.

- **Restringir usuarios específicos:**
  Cambia `userlist_deny=YES`. Los usuarios en `vsftpd.userlist` tendrán prohibido acceder.

### **2. Asignar directorios raíz**
Para que los usuarios estén restringidos a sus directorios de inicio:
```plaintext
chroot_local_user=YES
allow_writeable_chroot=YES
```

---

## **Configuración de logs**

### **Habilitar registros básicos:**
En `/etc/vsftpd.conf`, habilita el registro de accesos y errores:
```plaintext
xferlog_enable=YES
xferlog_file=/var/log/vsftpd.log
```

---

## **Configuración de SSL**

### **1. Generar certificados SSL**
Si no tienes un certificado SSL, puedes generar uno usando OpenSSL:
```bash
sudo openssl req -x509 -nodes -newkey rsa:2048 -keyout /etc/ssl/private/vsftpd.pem -out /etc/ssl/certs/vsftpd.pem -days 365
```

### **2. Configurar SSL en vsFTP**
Edita `/etc/vsftpd.conf` y agrega o actualiza las siguientes opciones:
```plaintext
rsa_cert_file=/etc/ssl/certs/ssl-cert-snakeoil.pem
rsa_private_key_file=/etc/ssl/private/ssl-cert-snakeoil.key
ssl_enable=YES
```

### **3. Requerir SSL para usuarios:**
Para asegurarte de que todos los usuarios usen SSL:
```plaintext
force_local_logins_ssl=YES
force_local_data_ssl=YES
```

---

## **Reiniciar el servicio**
Después de realizar los cambios, reinicia el servicio para aplicar la configuración:
```bash
sudo systemctl restart vsftpd
```
