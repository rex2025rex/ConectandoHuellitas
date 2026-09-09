<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar desparasitación | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/registrar_desparasitacion.css?v=1">
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



<main class="desparasitacion-main">

    <section class="desparasitacion-card">


        <div class="desparasitacion-encabezado">

            <h1>Registrar desparasitación</h1>

            <div class="detalle-desparasitacion">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Registro de aplicación de desparasitante
            </p>

        </div>



        <!-- RESUMEN DEL ANIMAL -->

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


            <!-- DATOS DE LA DESPARASITACIÓN -->

            <div class="desparasitacion-seccion">

                <h2>DATOS DE LA DESPARASITACIÓN</h2>

                <div class="desparasitacion-grid">


                    <div class="campo-desparasitacion">

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



                    <div class="campo-desparasitacion">

                        <label for="tipo_desparasitacion">
                            Tipo de desparasitación
                            <span>*</span>
                        </label>

                        <select
                            id="tipo_desparasitacion"
                            name="tipo_desparasitacion"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="interna">
                                Interna
                            </option>

                            <option value="externa">
                                Externa
                            </option>

                            <option value="interna_externa">
                                Interna y externa
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <div class="campo-desparasitacion">

                        <label for="producto">
                            Producto / desparasitante
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="producto"
                            name="producto"
                            placeholder="Ej. Drontal, NexGard, Bravecto"
                            required>

                    </div>



                    <div class="campo-desparasitacion">

                        <label for="dosis">
                            Dosis administrada
                        </label>

                        <input
                            type="text"
                            id="dosis"
                            name="dosis"
                            placeholder="Ej. 1 tableta">

                    </div>



                    <div class="campo-desparasitacion">

                        <label for="via_administracion">
                            Vía de administración
                        </label>

                        <select
                            id="via_administracion"
                            name="via_administracion">

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="oral">
                                Oral
                            </option>

                            <option value="topica">
                                Tópica
                            </option>

                            <option value="inyectable">
                                Inyectable
                            </option>

                            <option value="otro">
                                Otra
                            </option>

                        </select>

                    </div>



                    <div class="campo-desparasitacion">

                        <label for="requiere_proxima">
                            ¿Requiere próxima aplicación?
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



                    <div class="campo-desparasitacion">

                        <label for="fecha_proxima">
                            Próxima desparasitación
                        </label>

                        <input
                            type="date"
                            id="fecha_proxima"
                            name="fecha_proxima">

                        <small>
                            Esta fecha servirá después para generar
                            alertas internas en el sistema.
                        </small>

                    </div>


                </div>

            </div>



            <!-- ATENCIÓN -->

            <div class="desparasitacion-seccion">

                <h2>ATENCIÓN VETERINARIA</h2>

                <div class="desparasitacion-grid">


                    <div class="campo-desparasitacion">

                        <label for="veterinario">
                            Nombre del veterinario
                        </label>

                        <input
                            type="text"
                            id="veterinario"
                            name="veterinario"
                            placeholder="Ej. MVZ Juan Pérez García">

                    </div>



                    <div class="campo-desparasitacion">

                        <label for="veterinaria">
                            Veterinaria / Clínica
                        </label>

                        <input
                            type="text"
                            id="veterinaria"
                            name="veterinaria"
                            placeholder="Ej. Clínica Veterinaria San Francisco">

                    </div>



                    <div class="campo-desparasitacion campo-completo">

                        <label for="observaciones">
                            Observaciones
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Ej. Aplicación preventiva, toleró adecuadamente el medicamento, indicaciones adicionales, etc."></textarea>

                    </div>


                </div>

            </div>



            <div class="nota-registro">

                <span>ⓘ</span>

                <p>
                    El usuario interno que capture el registro y la fecha
                    de captura serán identificados automáticamente.
                </p>

            </div>



            <div class="desparasitacion-botones">

                <button
                    type="button"
                    class="btn-guardar">
                    🐾 Guardar desparasitación
                </button>

                <button
                    type="reset"
                    class="btn-cancelar">
                    Cancelar
                </button>

                <a
                    href="expediente_animal.php"
                    class="btn-regresar">
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