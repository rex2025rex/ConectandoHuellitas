<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=11">
</head>

<body class="login-body">

    <!-- HEADER -->
    <header class="login-header">

        <div class="login-header-contenido">

            <div class="login-header-logo">
                <img
                    src="../img/logo-header.png?v=11"
                    alt="Conectando Huellitas">
            </div>

            <nav class="login-nav">

                <a href="../../portal/index.php" class="login-nav-link">
                    <span class="nav-icono">⌂</span>
                    <span>Inicio</span>
                </a>

                <a href="../../portal/pages/quienes_somos.php"
                   class="login-nav-link">
                    <span class="nav-icono">ⓘ</span>
                    <span>¿Quiénes somos?</span>
                </a>

                <a href="../../portal/pages/contacto.php"
                   class="login-nav-link">
                    <span class="nav-icono">✉</span>
                    <span>Contacto</span>
                </a>

                <a href="login.php"
                   class="login-nav-login">
                    <span class="nav-icono">👤</span>
                    <span>Iniciar sesión</span>
                </a>

            </nav>

        </div>

    </header>


    <!-- CONTENIDO CENTRAL -->
    <main class="login-main">

        <section class="login-card">

            <div class="login-simbolo">
                <img
                    src="../img/logo_circulo.png?v=11"
                    alt="Conectando Huellitas">
            </div>

            <h1>Iniciar sesión</h1>

            <div class="detalle-login">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <form action="" method="POST">

                <div class="campo-login">

                    <label for="usuario">
                        Usuario o correo electrónico
                    </label>

                    <div class="input-contenedor">

                        <span class="input-icono">👤</span>

                        <input
                            type="text"
                            id="usuario"
                            name="usuario"
                            placeholder="Ingresa tu usuario o correo"
                            maxlength="100"
                            required
                            autocomplete="username">

                    </div>

                </div>


                <div class="campo-login">

                    <label for="contrasena">
                        Contraseña
                    </label>

                    <div class="input-contenedor">

                        <span class="input-icono">🔒</span>

                        <input
                            type="password"
                            id="contrasena"
                            name="contrasena"
                            placeholder="Ingresa tu contraseña"
                            maxlength="100"
                            required
                            autocomplete="current-password">

                        <button
                            type="button"
                            id="mostrarContrasena"
                            class="btn-ver-contrasena"
                            aria-label="Mostrar contraseña">
                            👁
                        </button>

                    </div>

                </div>


                <div class="opciones-login">

                    <label class="recordarme-login">
                        <input type="checkbox" name="recordarme">
                        <span>Recuérdame</span>
                    </label>

                    <a href="#" class="olvide-contrasena">
                        ¿Olvidaste tu contraseña?
                    </a>

                </div>


                <button
                    type="submit"
                    class="btn-login-sistema">
                    🐾 Iniciar sesión
                </button>

            </form>


            <div class="separador-login">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>


            <div class="registro-login">

                <p>¿No tienes cuenta?</p>

                <a href="registro.php">
                    Regístrate aquí
                </a>

            </div>

        </section>

    </main>


   
    <footer class="login-footer">

        <div class="footer-izquierda">
            <span>🐾 Conectando Huellitas</span>
            <span>•</span>
            <span>La red que salva vidas</span>
            <span>•</span>
            <span>2026</span>
        </div>

        <div class="footer-derecha">

            <a href="../../portal/pages/aviso_privacidad.php">
                Privacidad y seguridad
            </a>

            <span>|</span>

            <a href="#">
                Términos y condiciones
            </a>

        </div>

    </footer>


    <script src="../js/sistema.js?v=11"></script>

</body>

</html>