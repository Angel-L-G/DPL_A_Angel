# Informe de Creación, Clonación y Modificación de un Repositorio GitHub
## 1. Crear una cuenta en GitHub

Lo primero que se realizó fue la creación de una cuenta en GitHub accediendo a la página oficial de GitHub y completando los pasos de registro.
## 2. Crear un repositorio llamado “banco”

Después de iniciar sesión en GitHub, se creó un nuevo repositorio con el nombre "banco". Los pasos para crear el repositorio fueron:

    Hacer clic en el botón New repository.
    Nombrar el repositorio como "banco".
    Seleccionar la opción Public o Private según sea preferido.
    Omitir la opción de agregar un README inicial (puede ser agregado después si es necesario).
    Hacer clic en Create repository.

## 3. Clonar el repositorio desde la línea de comandos

Para clonar el repositorio recién creado desde GitHub a una máquina local, se utilizó la siguiente línea de comandos en la terminal:

    git clone https://github.com/tu_usuario/banco.git

Esto descargó una copia del repositorio "banco" en una carpeta local.
## 4. Crear un proyecto llamado “banco” en otra carpeta

En una ubicación diferente del sistema local, se creó un nuevo proyecto también llamado "banco". Dependiendo del lenguaje y el entorno de desarrollo, se pueden haber usado las siguientes herramientas:

  - Si fue un proyecto de Visual Studio, se creó un proyecto con ese nombre.
  - Si fue un proyecto en otro lenguaje como Java o Python, se generó la estructura de carpetas correspondiente.

## 5. Copiar la carpeta del proyecto "banco" al repositorio clonado

Después de que el proyecto fue creado en la otra carpeta, se copió el contenido de la carpeta del proyecto "banco" en la carpeta del repositorio clonado previamente en el paso 3.
## 6. Hacer commit y push desde Visual Studio

A continuación, se abrió el proyecto en Visual Studio para realizar el primer commit y luego enviarlo al repositorio remoto en GitHub. Los pasos fueron los siguientes:

  - Abrir Visual Studio y cargar el proyecto clonado.
  - Asegurarse de que los cambios estén preparados para ser confirmados (staged).
  - Hacer clic en Git -> Commit y añadir un mensaje descriptivo del commit.
  - Finalmente, hacer push para subir los cambios al repositorio remoto en GitHub.

## 7. Borrar del disco duro todo el código del banco

Posteriormente, se eliminó todo el código localmente. Esto se hizo eliminando la carpeta del proyecto del disco duro.
## 8. Clonar el proyecto del banco desde GitHub

Se procedió a clonar nuevamente el proyecto del repositorio "banco" de GitHub a la máquina local con el siguiente comando:

    git clone https://github.com/tu_usuario/banco.git

Esto volvió a traer una copia del proyecto "banco" del repositorio GitHub.
## 9. Modificar el código y subirlo a GitHub

Finalmente, se realizó una modificación en el código del proyecto. Luego de modificarlo, se siguieron los siguientes pasos para subir los cambios a GitHub:

  - Guardar los cambios realizados en el proyecto.
  - Ejecutar los comandos de Git para preparar el commit y subir los cambios:


        git add .
        git commit -m "Descripción de la modificación realizada"
        git push origin main

Esto subió las nuevas modificaciones al repositorio remoto en GitHub, completando así el ciclo de trabajo.
