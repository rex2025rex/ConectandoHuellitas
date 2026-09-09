<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar movimiento | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/registrar_movimiento.css?v=1">
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



<main class="movimiento-main">

    <section class="movimiento-card">


        <!-- ENCABEZADO -->

        <div class="movimiento-encabezado">

            <h1>Registrar movimiento</h1>

            <div class="detalle-movimiento">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Registro de cambio de ubicación del animal
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
                    <strong>Estatus actual:</strong>
                    Disponible para adopción
                </p>

            </div>


            <div class="ubicacion-actual">

                <span>UBICACIÓN ACTUAL</span>

                <strong>
                    Refugio Bélier
                </strong>

            </div>

        </div>



        <form
            action="#"
            method="post"
            onsubmit="return false;">


            <!-- MOVIMIENTO -->

            <div class="movimiento-seccion">

                <h2>DATOS DEL MOVIMIENTO</h2>

                <div class="movimiento-grid">


                    <div class="campo-movimiento">

                        <label for="fecha_movimiento">
                            Fecha del movimiento
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="fecha_movimiento"
                            name="fecha_movimiento"
                            required>

                    </div>



                    <div class="campo-movimiento">

                        <label for="tipo_movimiento">
                            Tipo de movimiento
                            <span>*</span>
                        </label>

                        <select
                            id="tipo_movimiento"
                            name="tipo_movimiento"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="salida_veterinaria">
                                Salida a veterinaria
                            </option>

                            <option value="regreso_veterinaria">
                                Regreso de veterinaria
                            </option>

                            <option value="hogar_temporal">
                                Traslado a hogar temporal
                            </option>

                            <option value="regreso_hogar_temporal">
                                Regreso de hogar temporal
                            </option>

                            <option value="traslado_refugio">
                                Traslado a otro refugio
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <div class="campo-movimiento">

                        <label for="ubicacion_anterior">
                            Ubicación anterior
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="ubicacion_anterior"
                            name="ubicacion_anterior"
                            value="Refugio Bélier"
                            required>

                    </div>



                    <div class="campo-movimiento">

                        <label for="nueva_ubicacion">
                            Nueva ubicación
                            <span>*</span>
                        </label>

                        <select
                            id="nueva_ubicacion"
                            name="nueva_ubicacion"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="refugio">
                                Refugio
                            </option>

                            <option value="veterinaria">
                                Veterinaria / Clínica
                            </option>

                            <option value="hogar_temporal">
                                Hogar temporal
                            </option>

                            <option value="otro_refugio">
                                Otro refugio
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <div class="campo-movimiento campo-completo">

                        <label for="lugar_destino">
                            Nombre del lugar o destino
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="lugar_destino"
                            name="lugar_destino"
                            placeholder="Ej. Clínica Veterinaria San Francisco"
                            required>

                    </div>



                    <div class="campo-movimiento">

                        <label for="responsable_destino">
                            Persona responsable en destino
                        </label>

                        <input
                            type="text"
                            id="responsable_destino"
                            name="responsable_destino"
                            placeholder="Ej. María López">

                    </div>



                    <div class="campo-movimiento">

                        <label for="telefono_contacto">
                            Teléfono de contacto
                        </label>

                        <input
                            type="tel"
                            id="telefono_contacto"
                            name="telefono_contacto"
                            placeholder="Ej. 228 123 4567">

                    </div>



                    <div class="campo-movimiento campo-completo">

                        <label for="motivo">
                            Motivo del movimiento
                            <span>*</span>
                        </label>

                        <textarea
                            id="motivo"
                            name="motivo"
                            placeholder="Ej. Traslado para valoración veterinaria, tratamiento, resguardo temporal, etc."
                            required></textarea>

                    </div>



                    <div class="campo-movimiento campo-completo">

                        <label for="observaciones">
                            Observaciones
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Información adicional relacionada con el traslado o movimiento"></textarea>

                    </div>


                </div>

            </div>



            <!-- ACLARACIÓN -->

            <div class="nota-movimiento">

                <span>ⓘ</span>

                <p>
                    Este registro modifica la <strong>ubicación física</strong>
                    del animal, pero no necesariamente su estatus.
                    Por ejemplo, un animal puede estar
                    “En tratamiento” y encontrarse físicamente
                    en una clínica veterinaria.
                </p>

            </div>



            <!-- TRAZABILIDAD -->

            <div class="nota-registro">

                <span>🐾</span>

                <p>
                    Más adelante el sistema registrará automáticamente
                    qué usuario interno realizó el movimiento y la fecha
                    y hora en que fue capturado.
                </p>

            </div>



            <!-- BOTONES -->

            <div class="movimiento-botones">

                <button
                    type="button"
                    class="btn-guardar">
                    🐾 Guardar movimiento
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