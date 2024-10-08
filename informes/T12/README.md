# Informe de Tarea 1.3 - Trabajando con Git y Markdown

## Creación de la estructura del proyecto y commits iniciales

    Crear un directorio de trabajo: Se creó un directorio llamado /bloggalpon/ en el directorio del usuario.

```bash
mkdir ~/bloggalpon
cd ~/bloggalpon
```

## Inicializar el repositorio vacío: Se inicializó un repositorio Git en la carpeta /bloggalpon/.

```bash
git init
```

## Crear el archivo `index.html`: Se creó un archivo index.htm con la estructura básica de una página web HTML.

```html
<!DOCTYPE html>
<html lang="en">
<head></head>
<body></body>
</html>
```

## Crear un commit indicando que se crea el esqueleto básico del index.htm:

```bash
git add index.htm
git commit -m "Se crea el esqueleto básico del index.htm"
```

## Añadir el contenido al head entre <head> y </head>:

```html
<head>
  <meta charset="UTF-8">
  <title>Blog Galpón</title>
</head>
```

# Crear un commit indicando que se añade la cabecera del index.htm:

```bash
git commit -am "Se añade la cabecera del index.htm"
```

# Añadir el contenido al body entre <body> y </body>:

```html
<body>
  <header>
    <h1>Bienvenidos al Blog Galpón</h1>
  </header>
</body>
```

# Crear un commit indicando que se añade la estructura básica del body:

```bash
git commit -am "Se añade la estructura básica del body"
```

# Añadir el contenido de section entre <section> y </section>:

```html
<section>
  <article>
    <h2>Primer Post</h2>
    <p>Este es el primer post del Blog Galpón.</p>
  </article>
</section>
```

# Crear un commit indicando que se añade toda la estructura de la zona de posts:

```bash
git commit -am "Se añade la estructura de la zona de posts"
```

# Añadiendo estilos CSS

Crear el archivo style.css: Se creó un archivo style.css y se añadieron los estilos básicos para html y body.

```css
html, body {
  margin: 0;
  padding: 0;
}
```

# Crear un commit indicando que se añaden las CSS de html y body:

```bash
git add style.css
git commit -m "Se añaden las CSS de html y body"
```

# Añadir más estilos para elementos HTML5: header, section, article, aside y footer:

```css
header, section, article, aside, footer {
  display: block;
}
```

#Crear un commit indicando que se añaden las CSS de varios elementos HTML5:

```bash
git commit -am "Se añaden las CSS de header, section, article, aside y footer"
```

# Añadir el logotipo en el directorio raíz del proyecto: Se añadió el archivo logo.png en la raíz del proyecto.

Crear un commit indicando que se añade el logotipo de Galpón:

```bash
git add logo.png
git commit -m "Se añade el logotipo de Galpón"
```

# Añadir más estilos CSS para section:

```css
section {
  padding: 10px;
}
```

# Crear un commit indicando que se añaden las CSS de section:

```bash
git commit -am "Se añaden las CSS de section"
```

# Añadir estilos CSS para footer:

```css
footer {
  text-align: center;
  padding: 10px;
}
```

## Crear un commit indicando que se añaden las CSS del footer:

```bash
git commit -am "Se añaden las CSS del footer"
```

## Añadir estilos CSS para h1 y enlaces:

```css
h1 {
  font-size: 24px;
  color: #333;
}

a {
  color: #0066cc;
}
```

## Crear un commit indicando que se añaden las CSS del h1 y los enlaces:

```bash
git commit -am "Se añaden las CSS del h1 y de los enlaces"
```

## Crear una etiqueta v1.0:

```bash
git tag v1.0
```

## Creación y trabajo en la rama "desarrollo"

```bash
git checkout -b desarrollo
```

## Crear un directorio de images y mover allí el logotipo logo.png:

```bash
mkdir images
mv logo.png images/
```

## Crear un commit indicando que se mueve el logotipo a la carpeta images:

```bash
git commit -am "Se mueve el logotipo a la carpeta images"
```

## Crear un directorio de CSS y mover allí el archivo style.css:

```bash
mkdir css
mv style.css css/
```

## Crear un commit indicando que se mueve la CSS a la carpeta css:

```bash
git commit -am "Se mueve la CSS a la carpeta css"
```

## Cambiar las referencias a la CSS en index.htm y al logotipo logo.png en la CSS:

    En index.htm, actualizar la referencia a style.css.
    En css/style.css, actualizar la referencia a logo.png.

## Crear un commit indicando que se cambian las referencias a las CSS y a las imágenes al reorganizarlas en directorios:

```bash
git commit -am "Se cambian las referencias a las CSS y al logotipo"
```

## Creación de la rama "bugfix" y correcciones

### Crear una rama bugfix a partir de master:

```bash
git checkout master
git checkout -b bugfix
```

## Quitar los comentarios en las CSS de los punteados (//border): Se eliminaron los comentarios //border.

### Crear un commit indicando que se introducen los punteados en la barra derecha y el footer:

```bash
git commit -am "Se introducen los punteados en la barra derecha y footer"
```

## Introducir como título "Galpón": Se añadió el título "Galpón" en el archivo index.htm.

### Crear un commit indicando que se introduce el título en la página:

```bash
git commit -am "Se introduce el título Galpón en la página"
```

## Cambiar el año 2012 por 2014 en el footer y quitar (c):

```bash
git commit -am "Se cambian pequeños ajustes en el footer"
```

## Crear una etiqueta v1.1:

```bash
git tag v1.1
```

## Llevar estos cambios a la rama master:

```bash
git checkout master
git merge bugfix
```

## Borrar la rama bugfix:

```bash
git branch -d bugfix
```

## Llevar los cambios de la rama desarrollo a la rama master:

```bash
git merge desarrollo
```
## Resolver cualquier conflicto que se presente.

### Crear una etiqueta v1.2:

```bash
git tag v1.2
```
