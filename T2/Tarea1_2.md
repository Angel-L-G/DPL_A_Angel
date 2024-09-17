# CREAR UNA RAMA v0.2 (1 PUNTO)

Crear una rama v0.2.  
Posiciona tu carpeta de trabajo en esta rama.

- `git checkout -b v0.2`
  
![](/T2/img2/1.png)

# AÑADIR EL FICHERO 2.txt (1 PUNTO)

Añadir un fichero 2.txt en la rama v0.2.
- `touch 2.txt`
- `git add 2.txt`
- `git commit -m "Añadir archivo 2.txt"`
  
![](/T2/img2/2.png)

# CREAR UNA RAMA REMOTA v0.2 (1 PUNTO)

Subir los cambios al repositorio remoto.
- `git push origin v0.2`
  
![](/T2/img2/3.png)

# MERGE DIRECTO (1 PUNTO)

Posicionarse en la rama master.  
Hacer un merge de la rama v0.2 en la rama master.
- `git checkout main`
- `git merge v0.2`
  
![](/T2/img2/4.png)

# MERGE CON CONFLICTO (1 PUNTO)

En la rama master poner "Hola" en el fichero 1.txt y hacer commit.  
Posicionarse en la rama v0.2 y poner "Adios" en el fichero 1.txt y hacer commit.  
Posicionarse de nuevo en la rama master y hacer un merge con la rama v0.2.
- `git checkout main`
- `echo "Hola" > 1.txt`
- `git add 1.txt`
- `git commit -m "Añadir Hola en 1.txt"`
- `git checkout v0.2`
- `echo "Adios" > 1.txt`
- `git add 1.txt`
- `git commit -m "Añadir Adios en 1.txt"`
- `git checkout main`
- `git merge v0.2`
  
![](/T2/img2/5.png)

# LISTADO DE RAMAS (1 PUNTO)

Listar las ramas con merge y las ramas sin merge.
- `git branch --merged`
- `git branch --no-merged`
  
![](/T2/img2/6.png)

# ARREGLAR CONFLICTO (1 PUNTO)

Arreglar el conflicto anterior y hacer un commit. Explicar cómo lo has arreglado, incluyendo capturas de pantalla.
- Resolver el conflicto en 1.txt.
    - Hize un `git push -f` para forzar los cambios;
- `git add 1.txt`
- `git commit -m "Resolver conflicto en 1.txt"`
  
![](/T2/img2/7.png)

# BORRAR RAMA (1 PUNTO)

Crear un tag v0.2.  
Borrar la rama v0.2.
- `git tag v0.2`
- `git branch -d v0.2`
  
![](/T2/img2/8.png)

# LISTADO DE CAMBIOS (1 PUNTO)

Listar los distintos commits con sus ramas y sus tags.
- `git log --oneline --decorate --graph --all`
  
![](/T2/img2/9.png)

# CREAR UNA ORGANIZACIÓN (1 PUNTO)

Crea una organización llamada orgdpl-tunombredeusuariodegithub (ejemplo orgdpl-amarzar).
![](T2/img2/10.png)
- 

# CREAR EQUIPOS

Crear dos equipos en la organización orgdpl-tunombredeusuariodegithub, uno llamado administradores con más permisos y otro colaboradores con menos permisos.  
![](T2/img2/11.png)
Meter a github.com/amarzar y a 2 de vuestros compañeros de clase en el equipo de administradores.  
Meter a github.com/amarzar y a 2 de vuestros compañeros de clase en el equipo de colaboradores.
- 

# CREAR UN index.html

Crear un index.html que se pueda ver como página web en la organización.
- 

# CREAR PULL REQUESTS

Hacer 2 forks de 2 repositorios orgdpl-tunombredeusuariodegithub.github.io de 2 organizaciones de las que no sean ni administradores ni colaboradores.  
Crear una rama en cada fork.  
En cada rama modificar el fichero index.html añadiendo vuestro nombre.  
Con cada rama hacer un pull request.
- 

# GESTIONAR PULL REQUESTS

Aceptar los pull request que lleguen a los repositorios de tu organización.
- 
