<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    require_once APP_TEMPLATE . "includes/head.php";
    ?>
</head>
<body>
    <header>
    <?php
    require_once APP_TEMPLATE . "includes/administradorHeader.php";
    ?>
    </header>
    <main>
    <?php
    require_once APP_VIEWS . $this->view;
    ?>
    </main>
    <footer>
    </footer>
</body>
</html>