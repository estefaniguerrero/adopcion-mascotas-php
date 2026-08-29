# Adopción de Mascotas con PHP

Sitio web estático de la Fundación Huellitas de Esperanza. Fue desarrollado con PHP, HTML5, CSS3 y JavaScript, sin conexión a base de datos.

## Estructura

```text
adopcion-mascotas-php/
├── index.php
├── css/style.css
├── js/app.js
└── img/mascotas.png
```

## Ejecutar en XAMPP

1. Copiar la carpeta en `C:\xampp\htdocs\adopcion-mascotas-php`.
2. Iniciar Apache en XAMPP.
3. Abrir `http://localhost/adopcion-mascotas-php/`.

## Flujo Git requerido

Crear el repositorio público vacío `adopcion-mascotas-php` y clonarlo. Después trabajar en la rama indicada:

```bash
git checkout -b programador
git add .
git commit -m "feat: maquetacion completa de pagina web de adopcion"
git push -u origin programador
git checkout main
git merge programador
git push origin main
```

## Contenido

- Encabezado con nombre, logotipo y eslogan.
- Catálogo de mascotas.
- Requisitos de adopción.
- Formulario y datos de contacto.
- Diseño adaptable a computadoras y dispositivos móviles.

