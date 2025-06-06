<?php
session_start();
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'APROBADOR_GENERAL') {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aprobador General</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="img/FDS_Favicon.png">
</head>
<body>
    <div class="login-container">
        <img src="img/FDS_Logo.webp">
        <h2>Bienvenido, <?= htmlspecialchars($_SESSION['nombre']) ?></h2>
        <p class="user-role">Aprobador General</p>
        
        <div class="dashboard-menu">
            <a href="registrar_oc.php" class="menu-item">
                <span class="menu-icon">📝</span>
                <span class="menu-text">Registrar Orden de Compra</span>
            </a>
            <a href="aprobacion_oc.php" class="menu-item">
                <span class="menu-icon">✓</span>
                <span class="menu-text">Aprobación de O.C.</span>
            </a>
            <a href="historico_oc.php" class="menu-item">
                <span class="menu-icon">📊</span>
                <span class="menu-text">Histórico de O.C.</span>
            </a>
        </div>
        
        <p class="logout-container">
            <a href="logout.php" class="logout-button">Cerrar sesión</a>
        </p>
    </div>
</body>
</html>