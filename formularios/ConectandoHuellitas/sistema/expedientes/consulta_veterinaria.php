<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consulta veterinaria | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/consulta_veterinaria.css?v=1">
</head>


<body class="login-body">


<!-- =========================================================
     HEADER
     ========================================================= -->

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



<!-- =========================================================
     CONTENIDO
     ========================================================= -->

<main class="consulta-main">

    <section class="consulta-card">


        <!-- ENCABEZADO -->

        <div class="consulta-encabezado">

            <h1>Consulta veterinaria</h1>

            <div class="detalle-consulta">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Valoración médica y cuidados preventivos
            </p>

        </div>



        <!-- =================================================
             ANIMAL
             ================================================= -->

        <div class="animal-resumen">

            <div class="animal-resumen-foto">
                🐶
            </div>

            <div class="animal-resumen-datos">

                <span class="animal-etiqueta">
                    EXPEDIENTE
                </span>

                <!-- DATOS DE EJEMPLO PARA LA MAQUETA -->
                <h2>Luna</h2>

                <p>
                    <strong>Clave:</strong>
                    01-P-L-0001
                </p>

                <p>
                    <strong>Estado actual:</strong>
                    En valoración
                </p>

            </div>

        </div>
    

        <form
            action="#"
            method="post"
            onsubmit="return false;">



           

            <div class="consulta-seccion">

                <h2>VALORACIÓN VETERINARIA</h2>

                <div class="consulta-grid">


                    <div class="campo-consulta">

                        <label for="fecha_consulta">
                            Fecha de consulta
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="fecha_consulta"
                            name="fecha_consulta"
                            required>

                    </div>



                    <div class="campo-consulta">

                        <label for="peso">
                            Peso (kg)
                        </label>

                        <input
                            type="number"
                            id="peso"
                            name="peso"
                            min="0"
                            step="0.01"
                            placeholder="Ej. 4.50">

                    </div>



                    <div class="campo-consulta campo-completo">

                        <label for="motivo">
                            Motivo de la consulta
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="motivo"
                            name="motivo"
                            placeholder="Ej. Valoración médica de ingreso"
                            required>

                    </div>



                    <div class="campo-consulta">

                        <label for="condicion_general">
                            Condición general
                            <span>*</span>
                        </label>

                        <select
                            id="condicion_general"
                            name="condicion_general"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="buena">
                                Buena
                            </option>

                            <option value="regular">
                                Regular
                            </option>

                            <option value="delicada">
                                Delicada
                            </option>

                            <option value="grave">
                                Grave
                            </option>

                        </select>

                    </div>



                    <div class="campo-consulta">

                        <label for="temperatura">
                            Temperatura (°C)
                        </label>

                        <input
                            type="number"
                            id="temperatura"
                            name="temperatura"
                            step="0.1"
                            placeholder="Ej. 38.5">

                    </div>



                    <div class="campo-consulta campo-completo">

                        <label for="hallazgos">
                            Hallazgos durante la revisión
                        </label>

                        <textarea
                            id="hallazgos"
                            name="hallazgos"
                            placeholder="Describe los hallazgos relevantes de la exploración"></textarea>

                    </div>



                    <div class="campo-consulta campo-completo">

                        <label for="diagnostico">
                            Diagnóstico / valoración
                            <span>*</span>
                        </label>

                        <textarea
                            id="diagnostico"
                            name="diagnostico"
                            placeholder="Ej. Cachorro aparentemente sano, sin alteraciones evidentes"
                            required></textarea>

                    </div>

                </div>

            </div>



            <div class="consulta-seccion">

                <h2>VACUNACIÓN</h2>

                <div class="bloque-pregunta">

                    <span>¿Se aplicó alguna vacuna?</span>

                    <label>
                        <input
                            type="radio"
                            name="aplico_vacuna"
                            value="si">
                        Sí
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="aplico_vacuna"
                            value="no">
                        No
                    </label>

                </div>


                <!-- SI SE APLICÓ VACUNA -->

                <div class="subbloque-consulta">

                    <h3>Si se aplicó vacuna</h3>

                    <div class="consulta-grid">

                        <div class="campo-consulta">

                            <label for="tipo_vacuna">
                                Tipo de vacuna
                            </label>

                            <input
                                type="text"
                                id="tipo_vacuna"
                                name="tipo_vacuna"
                                placeholder="Ej. Vacuna múltiple">

                        </div>


                        <div class="campo-consulta">

                            <label for="fecha_vacuna">
                                Fecha de aplicación
                            </label>

                            <input
                                type="date"
                                id="fecha_vacuna"
                                name="fecha_vacuna">

                        </div>


                        <div class="campo-consulta">

                            <label for="requiere_dosis">
                                ¿Requiere próxima dosis?
                            </label>

                            <select
                                id="requiere_dosis"
                                name="requiere_dosis">

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


                        <div class="campo-consulta">

                            <label for="proxima_vacuna">
                                Fecha de próxima dosis
                            </label>

                            <input
                                type="date"
                                id="proxima_vacuna"
                                name="proxima_vacuna">

                            <small>
                                Esta fecha generará posteriormente
                                un aviso en el sistema.
                            </small>

                        </div>

                    </div>

                </div>


                <!-- SI NO SE APLICÓ -->

                <div class="subbloque-consulta subbloque-no">

                    <h3>Si no se aplicó vacuna</h3>

                    <div class="campo-consulta">

                        <label for="motivo_no_vacuna">
                            Motivo por el que no se aplicó
                        </label>

                        <select
                            id="motivo_no_vacuna"
                            name="motivo_no_vacuna">

                            <option value="">
                                Seleccionar motivo
                            </option>

                            <option value="enfermo">
                                Animal enfermo
                            </option>

                            <option value="no_apto">
                                Estado general no apto
                            </option>

                            <option value="tratamiento">
                                Tratamiento en curso
                            </option>

                            <option value="edad">
                                Edad no adecuada
                            </option>

                            <option value="reciente">
                                Vacunación reciente
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 DESPARASITACIÓN
                 ================================================= -->

            <div class="consulta-seccion">

                <h2>DESPARASITACIÓN</h2>

                <div class="bloque-pregunta">

                    <span>¿Se realizó desparasitación?</span>

                    <label>
                        <input
                            type="radio"
                            name="desparasitado"
                            value="si">
                        Sí
                    </label>

                    <label>
                        <input
                            type="radio"
                            name="desparasitado"
                            value="no">
                        No
                    </label>

                </div>


                <!-- SI SE REALIZÓ -->

                <div class="subbloque-consulta">

                    <h3>Si se realizó desparasitación</h3>

                    <div class="consulta-grid">

                        <div class="campo-consulta">

                            <label for="producto_desparasitacion">
                                Producto / tipo
                            </label>

                            <input
                                type="text"
                                id="producto_desparasitacion"
                                name="producto_desparasitacion"
                                placeholder="Producto aplicado">

                        </div>


                        <div class="campo-consulta">

                            <label for="fecha_desparasitacion">
                                Fecha de aplicación
                            </label>

                            <input
                                type="date"
                                id="fecha_desparasitacion"
                                name="fecha_desparasitacion">

                        </div>


                        <div class="campo-consulta">

                            <label for="requiere_desparasitacion">
                                ¿Requiere próxima aplicación?
                            </label>

                            <select
                                id="requiere_desparasitacion"
                                name="requiere_desparasitacion">

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


                        <div class="campo-consulta">

                            <label for="proxima_desparasitacion">
                                Próxima desparasitación
                            </label>

                            <input
                                type="date"
                                id="proxima_desparasitacion"
                                name="proxima_desparasitacion">

                            <small>
                                Esta fecha generará posteriormente
                                un aviso en el sistema.
                            </small>

                        </div>

                    </div>

                </div>


               

                <div class="subbloque-consulta subbloque-no">

                    <h3>Si no se realizó desparasitación</h3>

                    <div class="campo-consulta">

                        <label for="motivo_no_desparasitacion">
                            Motivo por el que no se realizó
                        </label>

                        <select
                            id="motivo_no_desparasitacion"
                            name="motivo_no_desparasitacion">

                            <option value="">
                                Seleccionar motivo
                            </option>

                            <option value="enfermo">
                                Animal enfermo
                            </option>

                            <option value="no_apto">
                                Estado general no apto
                            </option>

                            <option value="tratamiento">
                                Tratamiento en curso
                            </option>

                            <option value="reciente">
                                Desparasitación reciente
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            <div class="consulta-seccion">

                <h2>RESULTADO DE LA VALORACIÓN</h2>

                <div class="consulta-grid">


                    <div class="campo-consulta campo-completo">

                        <label for="resultado">
                            Resultado
                            <span>*</span>
                        </label>

                        <select
                            id="resultado"
                            name="resultado"
                            required>

                            <option value="">
                                Seleccionar resultado
                            </option>

                            <option value="apto">
                                Apto para adopción
                            </option>

                            <option value="tratamiento">
                                Requiere tratamiento
                            </option>

                            <option value="nueva_valoracion">
                                Requiere nueva valoración
                            </option>

                            <option value="seguimiento">
                                Requiere seguimiento veterinario
                            </option>

                        </select>

                    </div>



                    <div class="campo-consulta campo-completo">

                        <label for="indicaciones">
                            Indicaciones / tratamiento
                        </label>

                        <textarea
                            id="indicaciones"
                            name="indicaciones"
                            placeholder="Indicaciones médicas, tratamiento o cuidados requeridos"></textarea>

                    </div>



                    <div class="campo-consulta campo-completo">

                        <label for="observaciones">
                            Observaciones adicionales
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Información adicional de la consulta"></textarea>

                    </div>

                </div>

            </div>



            <div class="consulta-botones">

                <button
                    type="button"
                    class="btn-guardar-consulta">
                    🐾 Guardar consulta
                </button>

                <button
                    type="reset"
                    class="btn-cancelar-consulta">
                    Cancelar
                </button>

                <a
                    href="#"
                    class="btn-expediente-consulta">
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