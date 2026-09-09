<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alta de usuario | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
</head>

<body class="login-body">


<header class="login-header">

    <div class="login-header-contenido">

        <div class="login-header-logo">
            <img
                src="../img/logo-header.png?v=12"
                alt="Conectando Huellitas">
        </div>

        <nav class="login-nav">

            <a href="../../portal/index.php"
               class="login-nav-link">

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


<main class="usuario-main">

    <section class="usuario-card">

        <!-- TÍTULO -->

        <div class="usuario-encabezado">

            <h1>Alta de usuario</h1>

            <div class="detalle-usuario">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Registra un nuevo usuario del sistema
            </p>

        </div>



        <form class="usuario-formulario">

            <!-- REFUGIO -->

            <div class="usuario-seccion">

                <h2>REFUGIO</h2>

                <div class="usuario-grid una-columna">

                    <div class="campo-usuario">

                        <label for="refugio">
                            Refugio <span>*</span>
                        </label>

                        <select id="refugio"
                                name="refugio"
                                required>

                            <option value="">
                                Seleccionar refugio
                            </option>

                            <option value="belier">
                                Refugio Bélier
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            <!-- DATOS PERSONALES -->

            <div class="usuario-seccion">

                <h2>DATOS PERSONALES</h2>

                <div class="usuario-grid">

                    <div class="campo-usuario campo-completo">

                        <label for="nombres">
                            Nombre(s) <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="nombres"
                            name="nombres"
                            placeholder="Ingresa el nombre"
                            required>

                    </div>


                    <div class="campo-usuario">

                        <label for="apellido_paterno">
                            Apellido paterno <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="apellido_paterno"
                            name="apellido_paterno"
                            placeholder="Apellido paterno"
                            required>

                    </div>


                    <div class="campo-usuario">

                        <label for="apellido_materno">
                            Apellido materno
                        </label>

                        <input
                            type="text"
                            id="apellido_materno"
                            name="apellido_materno"
                            placeholder="Apellido materno">

                    </div>


                    <div class="campo-usuario">

                        <label for="correo">
                            Correo electrónico <span>*</span>
                        </label>

                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            placeholder="correo@ejemplo.com"
                            required>

                    </div>


                    <div class="campo-usuario">

                        <label for="telefono">
                            Teléfono <span>*</span>
                        </label>

                        <input
                            type="tel"
                            id="telefono"
                            name="telefono"
                            placeholder="228 000 0000"
                            required>

                    </div>

                </div>

            </div>


            <!-- DATOS DE ACCESO -->

            <div class="usuario-seccion">

                <h2>DATOS DE ACCESO</h2>

                <div class="usuario-grid">

                    <div class="campo-usuario campo-completo">

                        <label for="nombre_usuario">
                            Nombre de usuario <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="nombre_usuario"
                            name="nombre_usuario"
                            placeholder="Ej. elizabeth.belier"
                            required>

                    </div>


                    <div class="campo-usuario">

                        <label for="contrasena">
                            Contraseña <span>*</span>
                        </label>

                        <input
                            type="password"
                            id="contrasena"
                            name="contrasena"
                            placeholder="Ingresa la contraseña"
                            required>

                    </div>


                    <div class="campo-usuario">

                        <label for="confirmar_contrasena">
                            Confirmar contraseña <span>*</span>
                        </label>

                        <input
                            type="password"
                            id="confirmar_contrasena"
                            name="confirmar_contrasena"
                            placeholder="Repite la contraseña"
                            required>

                    </div>

                </div>

            </div>


            <!-- CONFIGURACIÓN -->

            <div class="usuario-seccion">

                <h2>CONFIGURACIÓN DE LA CUENTA</h2>

                <div class="usuario-grid">

                    <div class="campo-usuario">

                        <label for="rol">
                            Rol <span>*</span>
                        </label>

                        <select id="rol"
                                name="rol"
                                required>

                            <option value="">
                                Seleccionar rol
                            </option>

                            <option value="administrador">
                                Administrador del refugio
                            </option>

                            <option value="personal">
                                Personal / Trabajador
                            </option>

                            <option value="voluntario">
                                Voluntario
                            </option>

                        </select>

                    </div>


                    <div class="campo-usuario">

                        <label for="estado">
                            Estado <span>*</span>
                        </label>

                        <select id="estado"
                                name="estado"
                                required>

                            <option value="activo">
                                Activo
                            </option>

                            <option value="inactivo">
                                Inactivo
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            <!-- BOTONES -->

            <div class="usuario-botones">

                <button
                    type="button"
                    class="btn-guardar-usuario">

                    🐾 Guardar usuario

                </button>


                <button
                    type="reset"
                    class="btn-cancelar-usuario">

                    Cancelar

                </button>


                <a href="../index.php"
                   class="btn-regresar-panel">

                    ⌂ Regresar al panel

                </a>

            </div>

        </form>

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

</body>
</html>