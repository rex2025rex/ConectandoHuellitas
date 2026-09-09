<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar tratamiento | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/registrar_tratamiento.css?v=1">
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



<main class="tratamiento-main">

    <section class="tratamiento-card">


        <div class="tratamiento-encabezado">

            <h1>Registrar tratamiento</h1>

            <div class="detalle-tratamiento">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Registro y seguimiento de tratamiento veterinario
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


            <!-- DATOS DEL TRATAMIENTO -->

            <div class="tratamiento-seccion">

                <h2>DATOS DEL TRATAMIENTO</h2>

                <div class="tratamiento-grid">


                    <div class="campo-tratamiento">

                        <label for="fecha_inicio">
                            Fecha de inicio
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="fecha_inicio"
                            name="fecha_inicio"
                            required>

                    </div>



                    <div class="campo-tratamiento">

                        <label for="tipo_tratamiento">
                            Tipo de tratamiento
                            <span>*</span>
                        </label>

                        <select
                            id="tipo_tratamiento"
                            name="tipo_tratamiento"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="medicamento">
                                Medicamento
                            </option>

                            <option value="curacion">
                                Curación
                            </option>

                            <option value="terapia">
                                Terapia
                            </option>

                            <option value="procedimiento">
                                Procedimiento
                            </option>

                            <option value="dieta_terapeutica">
                                Dieta terapéutica
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <div class="campo-tratamiento campo-completo">

                        <label for="motivo_diagnostico">
                            Motivo / diagnóstico
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="motivo_diagnostico"
                            name="motivo_diagnostico"
                            placeholder="Ej. Dermatitis, infección, recuperación postoperatoria"
                            required>

                    </div>



                    <div class="campo-tratamiento campo-completo">

                        <label for="medicamento_procedimiento">
                            Medicamento / producto / procedimiento
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="medicamento_procedimiento"
                            name="medicamento_procedimiento"
                            placeholder="Ej. Amoxicilina, curación de herida, terapia física"
                            required>

                    </div>



                    <div class="campo-tratamiento">

                        <label for="dosis">
                            Dosis
                        </label>

                        <input
                            type="text"
                            id="dosis"
                            name="dosis"
                            placeholder="Ej. 1 tableta, 2 ml">

                    </div>



                    <div class="campo-tratamiento">

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

                            <option value="ocular">
                                Ocular
                            </option>

                            <option value="otica">
                                Ótica
                            </option>

                            <option value="otra">
                                Otra
                            </option>

                            <option value="no_aplica">
                                No aplica
                            </option>

                        </select>

                    </div>



                    <div class="campo-tratamiento">

                        <label for="frecuencia">
                            Frecuencia
                        </label>

                        <input
                            type="text"
                            id="frecuencia"
                            name="frecuencia"
                            placeholder="Ej. Cada 12 horas">

                    </div>



                    <div class="campo-tratamiento">

                        <label for="duracion">
                            Duración
                        </label>

                        <input
                            type="text"
                            id="duracion"
                            name="duracion"
                            placeholder="Ej. 7 días">

                    </div>



                    <div class="campo-tratamiento">

                        <label for="fecha_termino">
                            Fecha estimada de término
                        </label>

                        <input
                            type="date"
                            id="fecha_termino"
                            name="fecha_termino">

                        <small>
                            Permitirá identificar tratamientos próximos a concluir.
                        </small>

                    </div>



                    <div class="campo-tratamiento">

                        <label for="estado_tratamiento">
                            Estado del tratamiento
                            <span>*</span>
                        </label>

                        <select
                            id="estado_tratamiento"
                            name="estado_tratamiento"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="activo">
                                Activo
                            </option>

                            <option value="finalizado">
                                Finalizado
                            </option>

                            <option value="suspendido">
                                Suspendido
                            </option>

                        </select>

                    </div>


                </div>

            </div>



            <!-- INDICACIONES -->

            <div class="tratamiento-seccion">

                <h2>INDICACIONES Y CUIDADOS</h2>

                <div class="tratamiento-grid">


                    <div class="campo-tratamiento campo-completo">

                        <label for="indicaciones">
                            Indicaciones del tratamiento
                        </label>

                        <textarea
                            id="indicaciones"
                            name="indicaciones"
                            placeholder="Ej. Administrar después de alimento, mantener limpia la zona, evitar actividad intensa, etc."></textarea>

                    </div>



                    <div class="campo-tratamiento campo-completo">

                        <label for="cuidados_especiales">
                            Cuidados especiales
                        </label>

                        <textarea
                            id="cuidados_especiales"
                            name="cuidados_especiales"
                            placeholder="Ej. Reposo, uso de collar isabelino, dieta especial, aislamiento temporal, etc."></textarea>

                    </div>


                </div>

            </div>



            <!-- ATENCIÓN VETERINARIA -->

            <div class="tratamiento-seccion">

                <h2>ATENCIÓN VETERINARIA</h2>

                <div class="tratamiento-grid">


                    <div class="campo-tratamiento">

                        <label for="veterinario">
                            Nombre del veterinario
                        </label>

                        <input
                            type="text"
                            id="veterinario"
                            name="veterinario"
                            placeholder="Ej. MVZ Juan Pérez García">

                    </div>



                    <div class="campo-tratamiento">

                        <label for="veterinaria">
                            Veterinaria / Clínica
                        </label>

                        <input
                            type="text"
                            id="veterinaria"
                            name="veterinaria"
                            placeholder="Ej. Clínica Veterinaria San Francisco">

                    </div>



                    <div class="campo-tratamiento campo-completo">

                        <label for="observaciones">
                            Observaciones
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Ej. Evolución inicial, reacción al medicamento, recomendaciones adicionales, etc."></textarea>

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



            <div class="tratamiento-botones">

                <button
                    type="button"
                    class="btn-guardar">
                    🐾 Guardar tratamiento
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