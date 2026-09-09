<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar seguimiento | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/registrar_seguimiento.css?v=1">
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



<main class="seguimiento-main">

    <section class="seguimiento-card">


        <div class="seguimiento-encabezado">

            <h1>Registrar seguimiento postadopción</h1>

            <div class="detalle-seguimiento">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Seguimiento del bienestar y adaptación del animal adoptado
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
                    <strong>Adoptante:</strong>
                    María López
                    &nbsp; • &nbsp;
                    <strong>Fecha de adopción:</strong>
                    15/08/2026
                </p>

                <span class="estado-adopcion">
                    ADOPTADA
                </span>

            </div>

        </div>



        <form
            action="#"
            method="post"
            onsubmit="return false;">


            

            <div class="seguimiento-seccion">

                <h2>DATOS DEL SEGUIMIENTO</h2>

                <div class="seguimiento-grid">


                    <div class="campo-seguimiento">

                        <label for="fecha_seguimiento">
                            Fecha del seguimiento
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="fecha_seguimiento"
                            name="fecha_seguimiento"
                            required>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="etapa_seguimiento">
                            Etapa del seguimiento
                            <span>*</span>
                        </label>

                        <select
                            id="etapa_seguimiento"
                            name="etapa_seguimiento"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="semana">
                                1.er seguimiento — 1 semana
                            </option>

                            <option value="mes">
                                2.º seguimiento — 1 mes
                            </option>

                            <option value="tres_meses">
                                3.er seguimiento — 3 meses
                            </option>

                            <option value="seis_meses">
                                4.º seguimiento — 6 meses
                            </option>

                            <option value="anual">
                                Seguimiento anual
                            </option>

                            <option value="extraordinario">
                                Seguimiento extraordinario
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="medio_contacto">
                            Medio de seguimiento
                            <span>*</span>
                        </label>

                        <select
                            id="medio_contacto"
                            name="medio_contacto"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="llamada">
                                Llamada telefónica
                            </option>

                            <option value="mensajeria">
                                WhatsApp / Mensajería
                            </option>

                            <option value="videollamada">
                                Videollamada
                            </option>

                            <option value="visita">
                                Visita domiciliaria
                            </option>

                            <option value="presencial">
                                Seguimiento presencial
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="estado_general">
                            Estado general del animal
                            <span>*</span>
                        </label>

                        <select
                            id="estado_general"
                            name="estado_general"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="excelente">
                                Excelente
                            </option>

                            <option value="bueno">
                                Bueno
                            </option>

                            <option value="regular">
                                Regular
                            </option>

                            <option value="preocupante">
                                Preocupante
                            </option>

                        </select>

                    </div>


                </div>

            </div>



            <!-- ADAPTACIÓN Y BIENESTAR -->

            <div class="seguimiento-seccion">

                <h2>ADAPTACIÓN Y BIENESTAR</h2>

                <div class="seguimiento-grid">


                    <div class="campo-seguimiento">

                        <label for="adaptacion">
                            Adaptación al nuevo hogar
                            <span>*</span>
                        </label>

                        <select
                            id="adaptacion"
                            name="adaptacion"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="muy_buena">
                                Muy buena
                            </option>

                            <option value="buena">
                                Buena
                            </option>

                            <option value="en_proceso">
                                En proceso
                            </option>

                            <option value="dificultades">
                                Presenta dificultades
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="convivencia">
                            Convivencia
                        </label>

                        <select
                            id="convivencia"
                            name="convivencia">

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="muy_buena">
                                Muy buena
                            </option>

                            <option value="buena">
                                Buena
                            </option>

                            <option value="regular">
                                Regular
                            </option>

                            <option value="dificultades">
                                Presenta dificultades
                            </option>

                            <option value="no_aplica">
                                No aplica
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="alimentacion">
                            Alimentación y cuidados
                        </label>

                        <select
                            id="alimentacion"
                            name="alimentacion">

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="adecuados">
                                Adecuados
                            </option>

                            <option value="mejorables">
                                Requieren mejora
                            </option>

                            <option value="inadecuados">
                                Inadecuados
                            </option>

                            <option value="no_verificado">
                                No fue posible verificar
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="condicion_fisica">
                            Condición física aparente
                        </label>

                        <select
                            id="condicion_fisica"
                            name="condicion_fisica">

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="buena">
                                Buena
                            </option>

                            <option value="regular">
                                Regular
                            </option>

                            <option value="requiere_atencion">
                                Requiere atención
                            </option>

                            <option value="no_verificada">
                                No fue posible verificar
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento campo-completo">

                        <label for="comportamiento">
                            Comportamiento y convivencia con la familia
                        </label>

                        <textarea
                            id="comportamiento"
                            name="comportamiento"
                            placeholder="Ej. Se encuentra adaptado, convive adecuadamente con la familia y otros animales, presenta ansiedad, miedo, conductas destructivas, etc."></textarea>

                    </div>


                </div>

            </div>



            <!-- EVIDENCIA Y RIESGO -->

            <div class="seguimiento-seccion">

                <h2>EVIDENCIA Y VALORACIÓN</h2>

                <div class="seguimiento-grid">


                    <div class="campo-seguimiento">

                        <label for="evidencia">
                            Evidencia recibida
                        </label>

                        <select
                            id="evidencia"
                            name="evidencia">

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="fotografias">
                                Fotografías
                            </option>

                            <option value="video">
                                Video
                            </option>

                            <option value="foto_video">
                                Fotografías y video
                            </option>

                            <option value="documentos">
                                Documentos
                            </option>

                            <option value="visita">
                                Verificación mediante visita
                            </option>

                            <option value="ninguna">
                                Ninguna
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="situacion_riesgo">
                            ¿Se detectó alguna situación de riesgo?
                            <span>*</span>
                        </label>

                        <select
                            id="situacion_riesgo"
                            name="situacion_riesgo"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="no">
                                No
                            </option>

                            <option value="si">
                                Sí
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento campo-completo">

                        <label for="detalle_riesgo">
                            Situación detectada / observaciones
                        </label>

                        <textarea
                            id="detalle_riesgo"
                            name="detalle_riesgo"
                            placeholder="Describir cualquier situación relevante relacionada con el bienestar, cuidados, salud, comportamiento o entorno del animal."></textarea>

                    </div>


                </div>

            </div>



            <!-- RESULTADO -->

            <div class="seguimiento-seccion">

                <h2>RESULTADO DEL SEGUIMIENTO</h2>

                <div class="seguimiento-grid">


                    <div class="campo-seguimiento">

                        <label for="resultado">
                            Resultado
                            <span>*</span>
                        </label>

                        <select
                            id="resultado"
                            name="resultado"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="satisfactorio">
                                Satisfactorio
                            </option>

                            <option value="requiere_atencion">
                                Requiere atención
                            </option>

                            <option value="observacion">
                                En observación
                            </option>

                            <option value="incumplimiento">
                                Incumplimiento
                            </option>

                            <option value="recuperado">
                                Animal recuperado / devuelto
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="accion_requerida">
                            Acción requerida
                        </label>

                        <select
                            id="accion_requerida"
                            name="accion_requerida">

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="ninguna">
                                Ninguna
                            </option>

                            <option value="nuevo_contacto">
                                Contactar nuevamente
                            </option>

                            <option value="visita">
                                Programar visita
                            </option>

                            <option value="veterinaria">
                                Valoración veterinaria
                            </option>

                            <option value="revision_adopcion">
                                Revisar situación de adopción
                            </option>

                            <option value="otra">
                                Otra
                            </option>

                        </select>

                    </div>



                    <div class="campo-seguimiento">

                        <label for="proximo_seguimiento">
                            Próximo seguimiento
                        </label>

                        <input
                            type="date"
                            id="proximo_seguimiento"
                            name="proximo_seguimiento">

                        <small>
                            Esta fecha será calculada automáticamente cuando
                            se habilite la funcionalidad del sistema.
                        </small>

                    </div>



                    <div class="campo-seguimiento campo-completo">

                        <label for="observaciones_finales">
                            Observaciones finales
                        </label>

                        <textarea
                            id="observaciones_finales"
                            name="observaciones_finales"
                            placeholder="Registrar acuerdos, recomendaciones, compromisos del adoptante o información adicional del seguimiento."></textarea>

                    </div>


                </div>

            </div>



            <div class="nota-registro">

                <span>ⓘ</span>

                <p>
                    Los seguimientos ordinarios se programarán a la semana,
                    al mes, a los 3 meses, a los 6 meses y posteriormente
                    cada año. También podrán registrarse seguimientos
                    extraordinarios cuando sea necesario.
                </p>

            </div>



            <div class="seguimiento-botones">

                <button
                    type="button"
                    class="btn-guardar">
                    🐾 Guardar seguimiento
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
            Términos y condicioness
        </a>

    </div>

</footer>


</body>
</html>