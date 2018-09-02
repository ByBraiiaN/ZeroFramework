<?php require RUTA_APP . '/views/inc/header.php'; ?>

<h2><?php echo $datos['titulo']; ?></h2>
<p>Framwork PHP MVC</p>

<h3>Configura lo siguiente para empezar</h3>
<p>1. En app/config/config.php - Acceso a la DB, URL del sitio y Nombre del sitio</p>
<p>2. En app/libs/Core.php - Definir controlador y método que estara por defecto</p>
<p>3. En app/views/int/ - Definir contenido del header y footer.</p>
<p>4. En app/views/pages/ - Agregar las vistas.</p>
<p>5. En public/.htaccess - Remplazar URL por la actual dejando el /public.</p>

<?php require RUTA_APP . '/views/inc/footer.php'; ?>