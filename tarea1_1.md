#Tarea 1

##CREACIÓN DEL REPOSITORIO (1 PUNTO)

    Crear una cuenta en GitHub si aún no la tienes.
        - <https://github.com/Angel-L-G>
    Crear un repositorio en vuestro GitHub llamado DPL_A_nombre ( DPL_A_Alejandro )
        - git init; git remote add origin <https://github.com/Angel-L-G/DPL_A_Angel>
    Clonar el repositorio en local.
        - git clone <https://github.com/Angel-L-G/DPL_A_Angel>

##CREACIÓN DEL ARCHIVO README (1 PUNTO)

    Crear ( si no lo habéis hecho ya ) en vuestro repositorio local un documento tarea1_1.md, en este documento  tendrán que ir poniendo los comandos que han 
    utilizado durante el ejercicio, las explicaciones y capturas de pantalla que consideren necesarias.
        - touch tarea1_1.md

##COMMIT INICIAL (1 PUNTO)

    Añadir al tarea1_1.md los  comandos utilizados hasta ahora y hacer un commit inicial con el mensaje commit inicial.
        - git add tarea1_1.md; git commit -m "commit inicial"
        ![](/img1/1.png)

##PUSH INICIAL (1 PUNTO)

    Subir los cambios al repositorio remoto
        - git push origin main
        ![](/img1/2.png)

##IGNORAR ARCHIVOS (1 PUNTO)

    Crear en el repositorio local un fichero llamado privado.txt.
        - touch privado.txt
    Crear en el repositorio local una carpeta llamada privada.
        - mkdir privada
    Realizar los cambios oportunos para que tanto el archivo como la carpeta sean ignorados por git. ( Incluir capturas de pantalla )
        - touch .gitignore; git add .; git commit -m "Ignorar privado.txt y carpeta privada"
        ![](/img1/3.png)

##AÑADIR FICHERO 1.txt (1 PUNTO)

    Añadir 1.txt al repositorio local.
        - touch 1.txt; git add 1.txt; git commit -m "añadir archivo 1.txt"
        ![](/img1/4.png)

##CREAR EL TAG v0.1 (1 PUNTO)

    Crear un tag v0.1
        - git tag v0.1
        ![](/img1/5.png)

##SUBIR EL TAG v0.1 (1 PUNTO)

    Subir los cambios al repositorio remoto.
        - git push origin v0.1
        ![](/img1/6.png)

##CONFIGURACIÓN Y USO SOCIAL DE  GITHUB (1 PUNTO)

    Poner una foto en vuestro perfil de GitHub.
    Poner el doble factor de autentificación en vuestra cuenta de GitHub.
    Seguir los repositorios  de vuestros compañeros.
    Añadir una estrella a los repositorios  del resto de tus compañeros.

##CREAR UNA TABLA (1 PUNTO)

    Crear una tabla de este estilo en el fichero tarea1_1.md con la información de varios de tus compañeros de clase:
    +--------+--------+
    | Nombre | Github |
    | ------ | ------ |
    | Owen | ![Owen](https://github.com/OwenHernandez) |
    | ---- | -------- |
    | Kai | ![Kai](https://github.com/YoooKai) |
    | ---- | -------- |
    | Marina | ![Marina](https://github.com/mdiogc) |
    +--------+--------+
