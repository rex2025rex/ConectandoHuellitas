<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Alta de especie | Conectando Huellitas
    </title>


    <link rel="stylesheet"
          href="../css/sistema.css?v=12">


    <link rel="stylesheet"
          href="../css/especies.css?v=1">

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



<main class="especie-main">

    <section class="especie-card">


        <div class="especie-encabezado">

            <h1>
                Alta de especie
            </h1>


            <div class="detalle-especie">

                <span></span>
                <strong>♥</strong>
                <span></span>

            </div>


            <p>
                Registra una nueva especie en el catálogo
            </p>

        </div>




        <form
            class="especie-formulario"
            action="#"
            method="post"
            onsubmit="return false;">


            <div class="especie-seccion">

                <h2>
                    DATOS DE LA ESPECIE
                </h2>


                <div class="especie-grid">


                    <!-- NOMBRE -->

                    <div class="campo-especie campo-completo">

                        <label for="nombre_especie">

                            Nombre de la especie
                            <span>*</span>

                        </label>


                        <input
                            type="text"
                            id="nombre_especie"
                            name="nombre_especie"
                            placeholder="Ej. Hurón"
                            required>

                    </div>



                    <!-- ESTADO -->

                    <div class="campo-especie">

                        <label for="estado_especie">

                            Estado
                            <span>*</span>

                        </label>


                        <select
                            id="estado_especie"
                            name="estado_especie"
                            required>

                            <option value="activa">
                                Activa
                            </option>

                            <option value="inactiva">
                                Inactiva
                            </option>

                        </select>

                    </div>



                    <!-- OBSERVACIONES -->

                    <div class="campo-especie campo-completo">

                        <label for="observaciones">

                            Observaciones

                        </label>


                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Información adicional sobre la especie"></textarea>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 BOTONES
                 ================================================= -->

            <div class="especie-botones">


                <button
                    type="button"
                    class="btn-guardar-especie">

                    🐾 Guardar especie

                </button>


                <button
                    type="reset"
                    class="btn-cancelar-especie">

                    Cancelar

                </button>


                <a href="../index.php"
                   class="btn-regresar-especie">

                    ⌂ Regresar al panel

                </a>


            </div>


        </form>

    </section>

</main>


<footer class="login-footer">

    <div class="footer-izquierda">

        <span>
            🐾 Conectando Huellitas
        </span>

        <span>•</span>

        <span>
            La red que salva vidas
        </span>

        <span>•</span>

        <span>
            2026
        </span>

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