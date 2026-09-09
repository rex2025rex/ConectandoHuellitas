<?php
/*
|--------------------------------------------------------------------------
| CONECTANDO HUELLITAS
| Header maestro del sistema interno
|--------------------------------------------------------------------------
*/

$nombreUsuario = 'Elizabeth Orozco';
?>

<header class="login-header">

    <div class="login-header-contenido">

        <!-- LOGO -->
        <div class="login-header-logo">

            <a href="/ConectandoHuellitas/sistema/panel.php">

                <img
                    src="/ConectandoHuellitas/sistema/img/logo-header.png?v=12"
                    alt="Conectando Huellitas"
                >

            </a>

        </div>


        <!-- NAVEGACIÓN -->
        <nav class="login-nav">

            <!-- PANEL -->
            <a
                href="/ConectandoHuellitas/sistema/panel.php"
                class="login-nav-link"
            >
                <span class="nav-icono">⌂</span>
                <span>Panel</span>
            </a>


            <!-- USUARIO -->
            <div class="usuario-header">
                <span class="usuario-header-nombre">
                    <?php echo htmlspecialchars($nombreUsuario); ?>
                </span>
            </div>


            <!-- CERRAR SESIÓN -->
            <a
                href="/ConectandoHuellitas/sistema/usuarios/logout.php"
                class="btn-cerrar-sesion-header"
            >
                <span class="cerrar-sesion-texto">
                    Cerrar sesión
                </span>
            </a>

        </nav>

    </div>

</header>