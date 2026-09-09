<?php
/*
|--------------------------------------------------------------------------
| CONECTANDO HUELLITAS
| Panel principal
|--------------------------------------------------------------------------
| Primera versión navegable.
| Sin conexión a MySQL.
| Las opciones ya enlazan con sus pantallas correspondientes.
|--------------------------------------------------------------------------
*/
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Panel principal | Conectando Huellitas
    </title>

    <!-- CSS GENERAL -->
    <link
        rel="stylesheet"
        href="css/sistema.css?v=12"
    >

    <!-- CSS DEL PANEL -->
    <link
        rel="stylesheet"
        href="css/panel.css?v=2"
    >

</head>

<body class="login-body">


<?php include 'includes/header.php'; ?>


<main class="panel-main">

    <section class="panel-contenedor">


        <!-- =====================================================
             ENCABEZADO DEL PANEL
        ====================================================== -->

        <div class="panel-presentacion">

            <span class="panel-mini-titulo">
                CONECTANDO HUELLITAS
            </span>

            <h1>
                Panel principal
            </h1>

            <div class="detalle-panel">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Selecciona el módulo al que deseas ingresar.
            </p>

        </div>



        <!-- =====================================================
             1. PERDIDOS Y ENCONTRADOS
        ====================================================== -->

        <section class="panel-modulo">

            <button
                type="button"
                class="panel-modulo-cabecera"
                aria-expanded="false"
            >

                <div class="panel-modulo-identidad">

                    <div class="panel-modulo-icono">
                        🔎
                    </div>

                    <div class="panel-modulo-texto">

                        <span class="panel-modulo-etiqueta">
                            COMUNIDAD
                        </span>

                        <h2>
                            Mascotas perdidas y encontradas
                        </h2>

                        <p>
                            Reporta y consulta mascotas perdidas o encontradas.
                        </p>

                    </div>

                </div>

                <span class="panel-flecha">
                     ▶
                </span>

            </button>


            <div class="panel-modulo-contenido">

                <div class="panel-opciones">


                    <!-- REPORTAR PERDIDA -->

                    <a
                        href="reportes/reportar_perdido.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">
                            🐕
                        </div>

                        <div class="panel-opcion-texto">

                            <h3>
                                Reportar mascota perdida
                            </h3>

                            <p>
                                Registra una mascota que se encuentra extraviada.
                            </p>

                        </div>

                        <span class="panel-opcion-flecha">
                            →
                        </span>

                    </a>



                    <!-- REPORTAR ENCONTRADA -->

                    <a
                        href="reportes/reportar_encontrado.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">
                            🐾
                        </div>

                        <div class="panel-opcion-texto">

                            <h3>
                                Reportar mascota encontrada
                            </h3>

                            <p>
                                Registra una mascota localizada sin su propietario.
                            </p>

                        </div>

                        <span class="panel-opcion-flecha">
                            →
                        </span>

                    </a>



                    <!-- MIS REPORTES -->

                    <a
                        href="reportes/mis_reportes.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">
                            📋
                        </div>

                        <div class="panel-opcion-texto">

                            <h3>
                                Mis reportes
                            </h3>

                            <p>
                                Consulta los reportes realizados con esta cuenta.
                            </p>

                        </div>

                        <span class="panel-opcion-flecha">
                            →
                        </span>

                    </a>


                </div>

            </div>

        </section>



        <!-- =====================================================
             2. EXPEDIENTES
        ====================================================== -->

        <section class="panel-modulo">

            <button
                type="button"
                class="panel-modulo-cabecera"
                aria-expanded="false"
            >

                <div class="panel-modulo-identidad">

                    <div class="panel-modulo-icono">
                        🐾
                    </div>

                    <div class="panel-modulo-texto">

                        <span class="panel-modulo-etiqueta">
                            REFUGIO
                        </span>

                        <h2>
                            Expedientes y atención animal
                        </h2>

                        <p>
                            Registro, atención y expediente integral de los animales.
                        </p>

                    </div>

                </div>

                <span class="panel-flecha">
                    ▶
                </span>

            </button>


            <div class="panel-modulo-contenido">

                <div class="panel-opciones">


                    <a
                        href="expedientes/ingreso_animal.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">＋</div>

                        <div class="panel-opcion-texto">
                            <h3>Registrar mascota</h3>
                            <p>Realiza el ingreso inicial de un animal.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="expedientes/expediente_animal.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">📁</div>

                        <div class="panel-opcion-texto">
                            <h3>Expediente del animal</h3>
                            <p>Consulta la ficha y expediente digital.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="expedientes/consulta_veterinaria.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">🩺</div>

                        <div class="panel-opcion-texto">
                            <h3>Consulta veterinaria</h3>
                            <p>Registra valoraciones y consultas médicas.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="expedientes/registrar_vacuna.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">💉</div>

                        <div class="panel-opcion-texto">
                            <h3>Registrar vacuna</h3>
                            <p>Agrega una dosis al historial de vacunación.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="expedientes/registrar_desparasitacion.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">💊</div>

                        <div class="panel-opcion-texto">
                            <h3>Registrar desparasitación</h3>
                            <p>Registra una aplicación de desparasitante.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="expedientes/registrar_tratamiento.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">🩹</div>

                        <div class="panel-opcion-texto">
                            <h3>Registrar tratamiento</h3>
                            <p>Registra tratamientos médicos del animal.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="expedientes/registrar_movimiento.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">↔</div>

                        <div class="panel-opcion-texto">
                            <h3>Registrar movimiento</h3>
                            <p>Registra cambios en la situación del animal.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="expedientes/registrar_seguimiento.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">✓</div>

                        <div class="panel-opcion-texto">
                            <h3>Registrar seguimiento</h3>
                            <p>Registra información de seguimiento.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>


                </div>

            </div>

        </section>



        <!-- =====================================================
             3. ADOPCIONES
        ====================================================== -->

        <section class="panel-modulo">

            <button
                type="button"
                class="panel-modulo-cabecera"
                aria-expanded="false"
            >

                <div class="panel-modulo-identidad">

                    <div class="panel-modulo-icono">
                        ♥
                    </div>

                    <div class="panel-modulo-texto">

                        <span class="panel-modulo-etiqueta">
                            ADOPCIONES
                        </span>

                        <h2>
                            Gestión de adopciones
                        </h2>

                        <p>
                            Solicitudes, candidatos y formalización de adopciones.
                        </p>

                    </div>

                </div>

                <span class="panel-flecha">
                    ▶
                </span>

            </button>


            <div class="panel-modulo-contenido">

                <div class="panel-opciones">


                    <a
                        href="adopciones/solicitud_adopcion.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">📝</div>

                        <div class="panel-opcion-texto">
                            <h3>Solicitud de adopción</h3>
                            <p>Accede al formulario de solicitud.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/solicitudes_revision.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">📥</div>

                        <div class="panel-opcion-texto">
                            <h3>Solicitudes por revisar</h3>
                            <p>Consulta mascotas con solicitudes recibidas.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/solicitudes_mascota.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">📚</div>

                        <div class="panel-opcion-texto">
                            <h3>Solicitudes por mascota</h3>
                            <p>Consulta las solicitudes recibidas para una mascota.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/revisar_solicitud.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">🔍</div>

                        <div class="panel-opcion-texto">
                            <h3>Revisar solicitud</h3>
                            <p>Evalúa individualmente una solicitud.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/comparar_candidatos.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">⚖</div>

                        <div class="panel-opcion-texto">
                            <h3>Comparar candidatos</h3>
                            <p>Compara las solicitudes consideradas viables.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/verificar_candidato.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">✓</div>

                        <div class="panel-opcion-texto">
                            <h3>Verificar candidato</h3>
                            <p>Realiza la verificación del candidato seleccionado.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/formalizar_adopcion.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">🤝</div>

                        <div class="panel-opcion-texto">
                            <h3>Formalizar adopción</h3>
                            <p>Registra la formalización de una adopción.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/registrar_antecedente.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">📌</div>

                        <div class="panel-opcion-texto">
                            <h3>Registrar antecedente</h3>
                            <p>Registra antecedentes relacionados con adoptantes.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="adopciones/malos_adoptantes.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">⚠</div>

                        <div class="panel-opcion-texto">
                            <h3>Antecedentes de adoptantes</h3>
                            <p>Consulta antecedentes registrados.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>


                </div>

            </div>

        </section>



        <!-- =====================================================
             4. ADMINISTRACIÓN
        ====================================================== -->

        <section class="panel-modulo">

            <button
                type="button"
                class="panel-modulo-cabecera"
                aria-expanded="false"
            >

                <div class="panel-modulo-identidad">

                    <div class="panel-modulo-icono">
                        👥
                    </div>

                    <div class="panel-modulo-texto">

                        <span class="panel-modulo-etiqueta">
                            ADMINISTRACIÓN
                        </span>

                        <h2>
                            Usuarios y refugios
                        </h2>

                        <p>
                            Administración de usuarios y refugios del sistema.
                        </p>

                    </div>

                </div>

                <span class="panel-flecha">
                    ▶
                </span>

            </button>


            <div class="panel-modulo-contenido">

                <div class="panel-opciones">


                    <a
                        href="usuarios/alta_usuario.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">👤</div>

                        <div class="panel-opcion-texto">
                            <h3>Alta de usuario</h3>
                            <p>Registra usuarios del sistema.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="usuarios/alta_refugio.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">🏠</div>

                        <div class="panel-opcion-texto">
                            <h3>Alta de refugio</h3>
                            <p>Registra información de un refugio.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>


                </div>

            </div>

        </section>



        <!-- =====================================================
             5. CATÁLOGOS
        ====================================================== -->

        <section class="panel-modulo">

            <button
                type="button"
                class="panel-modulo-cabecera"
                aria-expanded="false"
            >

                <div class="panel-modulo-identidad">

                    <div class="panel-modulo-icono">
                        ⚙
                    </div>

                    <div class="panel-modulo-texto">

                        <span class="panel-modulo-etiqueta">
                            CONFIGURACIÓN
                        </span>

                        <h2>
                            Catálogos
                        </h2>

                        <p>
                            Especies, razas y catálogos auxiliares del sistema.
                        </p>

                    </div>

                </div>

                <span class="panel-flecha">
                    ▶
                </span>

            </button>


            <div class="panel-modulo-contenido">

                <div class="panel-opciones">


                    <a
                        href="usuarios/alta_especie.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">🐾</div>

                        <div class="panel-opcion-texto">
                            <h3>Especies</h3>
                            <p>Registra y consulta especies.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>



                    <a
                        href="usuarios/alta_raza.php"
                        class="panel-opcion"
                    >

                        <div class="panel-opcion-icono">🐕</div>

                        <div class="panel-opcion-texto">
                            <h3>Razas</h3>
                            <p>Registra y consulta razas.</p>
                        </div>

                        <span class="panel-opcion-flecha">→</span>

                    </a>


                </div>

            </div>

        </section>


    </section>

</main>


<?php include 'includes/footer.php'; ?>


<script src="js/panel.js?v=1"></script>

</body>

</html>