<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar vacuna | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/registrar_vacuna.css?v=1">
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

            <a href="../usuarios/login.php"
               class="login-nav-login">
                <span class="nav-icono">👤</span>
                <span>Iniciar sesión</span>
            </a>

        </nav>

    </div>

</header>



<main class="vacuna-main">

    <section class="vacuna-card">


        <div class="vacuna-encabezado">

            <h1>Registrar vacuna</h1>

            <div class="detalle-vacuna">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Registro de aplicación de vacuna
            </p>

        </div>


        <div class="animal-resumen">

            <div class="animal-foto">
                🐶
            </div>

            <div class="animal-info">

                <span class="animal-etiqueta">
                    EXPEDIENTE
                </span>

                <h2>Luna</h2>

                <p>
                    <strong>Clave:</strong>
                    01-P-L-0001
                </p>

                <p>
                    <strong>Especie:</strong>
                    Perro
                    &nbsp; • &nbsp;
                    <strong>Sexo:</strong>
                    Hembra
                </p>

            </div>

        </div>



        <form
            action="#"
            method="post"
            onsubmit="return false;">



            <div class="vacuna-seccion">

                <h2>DATOS DE LA VACUNACIÓN</h2>

                <div class="vacuna-grid">


                    <div class="campo-vacuna">

                        <label for="fecha_aplicacion">
                            Fecha de aplicación
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="fecha_aplicacion"
                            name="fecha_aplicacion"
                            required>

                    </div>



                    <div class="campo-vacuna">

                        <label for="tipo_vacuna">
                            Tipo de vacuna
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="tipo_vacuna"
                            name="tipo_vacuna"
                            placeholder="Ej. Vacuna múltiple"
                            required>

                    </div>



                    <div class="campo-vacuna">

                        <label for="dosis">
                            Dosis / aplicación
                        </label>

                        <input
                            type="text"
                            id="dosis"
                            name="dosis"
                            placeholder="Ej. Primera dosis">

                    </div>



                    <div class="campo-vacuna">

                        <label for="requiere_proxima">
                            ¿Requiere próxima dosis?
                            <span>*</span>
                        </label>

                        <select
                            id="requiere_proxima"
                            name="requiere_proxima"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="si">
                                Sí
                            </option>

                            <option value="no">
                                No
                            </option>

                        </select>

                    </div>



                    <div class="campo-vacuna">

                        <label for="fecha_proxima">
                            Fecha de próxima dosis
                        </label>

                        <input
                            type="date"
                            id="fecha_proxima"
                            name="fecha_proxima">

                        <small>
                            Esta fecha permitirá generar
                            posteriormente una alerta en el sistema.
                        </small>

                    </div>


                </div>

            </div>



            <div class="vacuna-seccion">

                <h2>ATENCIÓN VETERINARIA</h2>

                <div class="vacuna-grid">


                    <div class="campo-vacuna">

                        <label for="veterinario">
                            Nombre del veterinario
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="veterinario"
                            name="veterinario"
                            placeholder="Ej. MVZ Juan Pérez García"
                            required>

                    </div>



                    <div class="campo-vacuna">

                        <label for="veterinaria">
                            Veterinaria / Clínica
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="veterinaria"
                            name="veterinaria"
                            placeholder="Ej. Clínica Veterinaria San Francisco"
                            required>

                    </div>



                    <div class="campo-vacuna campo-completo">

                        <label for="observaciones">
                            Observaciones
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Información adicional sobre la aplicación de la vacuna"></textarea>

                    </div>


                </div>

            </div>



            <div class="nota-registro">

                <span>ⓘ</span>

                <p>
                    El usuario que registre esta información y la fecha
                    de captura serán identificados automáticamente.

            </div>



            <div class="vacuna-botones">

                <button
                    type="button"
                    class="btn-guardar-vacuna">
                    🐾 Guardar vacuna
                </button>

                <button
                    type="reset"
                    class="btn-cancelar-vacuna">
                    Cancelar
                </button>

                <a
                    href="expediente_animal.php"
                    class="btn-regresar-expediente">
                    ← Regresar al expediente
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