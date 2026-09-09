<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Alta de raza | Conectando Huellitas
    </title>

    <link rel="stylesheet"
          href="../css/sistema.css?v=12">

    <link rel="stylesheet"
          href="../css/razas.css?v=1">

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



<main class="raza-main">

    <section class="raza-card">


        <div class="raza-encabezado">

            <h1>
                Alta de raza
            </h1>


            <div class="detalle-raza">

                <span></span>
                <strong>♥</strong>
                <span></span>

            </div>


            <p>
                Registra una raza en el catálogo
            </p>

        </div>



        <form
            action="#"
            method="post"
            onsubmit="return false;">


            <div class="raza-seccion">

                <h2>
                    DATOS DE LA RAZA
                </h2>


                <div class="raza-grid">


                    <!-- ESPECIE -->

                    <div class="campo-raza">

                        <label for="especie">

                            Especie
                            <span>*</span>

                        </label>


                        <select
                            id="especie"
                            name="especie"
                            required>

                            <option value="">
                                Seleccionar especie
                            </option>

                            <option value="perro">
                                Perro
                            </option>

                            <option value="gato">
                                Gato
                            </option>

                            <option value="huron">
                                Hurón
                            </option>

                            <option value="tlacuache">
                                Tlacuache
                            </option>

                            <option value="conejo">
                                Conejo
                            </option>

                        </select>

                    </div>



                    <!-- RAZA -->

                    <div class="campo-raza">

                        <label for="nombre_raza">

                            Nombre de la raza
                            <span>*</span>

                        </label>


                        <input
                            type="text"
                            id="nombre_raza"
                            name="nombre_raza"
                            placeholder="Ej. Labrador, Mestizo"
                            required>

                    </div>



                    <!-- ESTADO -->

                    <div class="campo-raza campo-completo">

                        <label for="estado_raza">

                            Estado
                            <span>*</span>

                        </label>


                        <select
                            id="estado_raza"
                            name="estado_raza"
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

                    <div class="campo-raza campo-completo">

                        <label for="observaciones">
                            Observaciones
                        </label>


                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Información adicional sobre la raza"></textarea>

                    </div>

                </div>

            </div>



            <!-- BOTONES -->

            <div class="raza-botones">


                <button
                    type="button"
                    class="btn-guardar-raza">

                    🐾 Guardar raza

                </button>


                <button
                    type="reset"
                    class="btn-cancelar-raza">

                    Cancelar

                </button>


                <a href="../index.php"
                   class="btn-regresar-raza">

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