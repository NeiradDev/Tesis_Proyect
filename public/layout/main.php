<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Incluir el archivo CSS de Bootstrap -->
    <?php $this->include('assets/css/bootstrap.css') ?>
    
    <!-- Incluir el archivo CSS personalizado -->
    <?php 
    if (file_exists(BASEPATH . 'assets/css/' . $view . '.css.php')) include(BASEPATH . 'assets/css/' . $view . '.css.php');
    ?>

    <title>Gastronom&iacute;a</title>
</head>
<body>
    
    <?php $this->include('layout/header'); ?>

    <?php $this->renderView($view, $data); ?>

    <?php $this->include('layout/footer'); ?>

</body>

<!-- Incluir el archivo JavaScript de Bootstrap -->
    <?php $this->include('assets/js/bootstrap.js') ?>

<!-- Incluir el archivo JS personalizado -->
<?php 
if (file_exists(BASEPATH . 'assets/js/' . $view . '.js.php')) include(BASEPATH . 'assets/js/' . $view . '.js.php');
?>
</html>
