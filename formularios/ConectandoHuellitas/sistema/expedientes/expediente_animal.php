<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Expediente Digital Único | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/expediente_animal.css?v=1">
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




<main class="expediente-main">

    <section class="expediente-card">



        <div class="expediente-titulo">

            <h1>Expediente Digital Único</h1>

            <div class="detalle-expediente">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Información e historial del animal
            </p>

        </div>



    

        <div class="ficha-animal">

            <div class="foto-animal">


                <div class="foto-placeholder">
                    🐶
                </div>

            </div>


            <div class="datos-principales">

                <span class="etiqueta-expediente">
                    EXPEDIENTE
                </span>

                <h2>Luna</h2>

                <div class="clave-animal">
                    01-P-L-0001
                </div>


                <div class="animal-datos-rapidos">

                    <span>
                        <strong>Especie:</strong>
                        Perro
                    </span>

                    <span>
                        <strong>Sexo:</strong>
                        Hembra
                    </span>

                    <span>
                        <strong>Edad aprox.:</strong>
                        3 meses
                    </span>

                </div>

            </div>


            <div class="estado-animal">

                <span class="estado-titulo">
                    ESTATUS ACTUAL
                </span>

                <span class="estado-badge">
                    Disponible para adopción
                </span>

                <p>
                    <strong>Ubicación actual:</strong><br>
                    Refugio Bélier
                </p>

            </div>

        </div>




        <div class="alertas-expediente">

            <div class="alerta-item">
                <span class="alerta-icono">💉</span>

                <div>
                    <strong>Próxima vacuna</strong>
                    <span>24/09/2026</span>
                </div>
            </div>


            <div class="alerta-item">
                <span class="alerta-icono">🩺</span>

                <div>
                    <strong>Próxima desparasitación</strong>
                    <span>03/10/2026</span>
                </div>
            </div>


            <div class="alerta-item">
                <span class="alerta-icono">📋</span>

                <div>
                    <strong>Última consulta</strong>
                    <span>02/09/2026</span>
                </div>
            </div>

        </div>



        <div class="pestanas-contenedor">

            <button
                type="button"
                class="pestana activa"
                data-tab="datos">
                Datos
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="ingreso">
                Ingreso
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="veterinaria">
                Veterinaria
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="vacunacion">
                Vacunación
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="desparasitacion">
                Desparasitación
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="tratamientos">
                Tratamientos
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="movimientos">
                Movimientos
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="adopcion">
                Adopción
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="seguimiento">
                Seguimiento
            </button>

            <button
                type="button"
                class="pestana"
                data-tab="bitacora">
                Bitácora
            </button>

        </div>



        <div class="contenido-tab activo" id="datos">

            <div class="tab-encabezado">

                <div>
                    <h3>Datos generales</h3>
                    <p>
                        Información permanente de identificación del animal.
                    </p>
                </div>

                <button type="button" class="btn-secundario">
                    Editar datos
                </button>

            </div>


            <div class="datos-grid">

                <div class="dato">
                    <span>Nombre</span>
                    <strong>Luna</strong>
                </div>

                <div class="dato">
                    <span>Clave única</span>
                    <strong>01-P-L-0001</strong>
                </div>

                <div class="dato">
                    <span>Especie</span>
                    <strong>Perro</strong>
                </div>

                <div class="dato">
                    <span>Raza</span>
                    <strong>Mestizo</strong>
                </div>

                <div class="dato">
                    <span>Sexo</span>
                    <strong>Hembra</strong>
                </div>

                <div class="dato">
                    <span>Edad aproximada</span>
                    <strong>3 meses</strong>
                </div>

                <div class="dato">
                    <span>Tamaño</span>
                    <strong>Pequeño</strong>
                </div>

                <div class="dato">
                    <span>Color(es)</span>
                    <strong>Café claro y blanco</strong>
                </div>

                <div class="dato dato-completo">
                    <span>Señas particulares</span>
                    <strong>
                        Mancha blanca en pecho y punta de las patas delanteras.
                    </strong>
                </div>

            </div>

        </div>



        <div class="contenido-tab" id="ingreso">

            <div class="tab-encabezado">

                <div>
                    <h3>Información de ingreso</h3>
                    <p>
                        Datos correspondientes al ingreso inicial del animal.
                    </p>
                </div>

            </div>


            <div class="datos-grid">

                <div class="dato">
                    <span>Fecha de ingreso</span>
                    <strong>01/09/2026</strong>
                </div>

                <div class="dato">
                    <span>Tipo de ingreso</span>
                    <strong>Rescate directo</strong>
                </div>

                <div class="dato">
                    <span>Destino inicial</span>
                    <strong>Refugio</strong>
                </div>

                <div class="dato">
                    <span>Estatus inicial</span>
                    <strong>En valoración</strong>
                </div>

                <div class="dato">
                    <span>Municipio</span>
                    <strong>Xalapa</strong>
                </div>

                <div class="dato">
                    <span>Estado</span>
                    <strong>Veracruz</strong>
                </div>

                <div class="dato">
                    <span>Colonia</span>
                    <strong>Centro</strong>
                </div>

                <div class="dato">
                    <span>Lugar aproximado</span>
                    <strong>Calle Revolución</strong>
                </div>

                <div class="dato dato-completo">
                    <span>Condición al ingreso</span>
                    <strong>
                        Cachorra aparentemente sana.
                        Se mantiene en valoración preventiva.
                    </strong>
                </div>

            </div>

        </div>




        <div class="contenido-tab" id="veterinaria">

            <div class="tab-encabezado">

                <div>
                    <h3>Historial veterinario</h3>
                    <p>
                        Consultas y valoraciones médicas registradas.
                    </p>
                </div>

                <a
                    href="consulta_veterinaria.php"
                    class="btn-principal">
                    + Nueva consulta
                </a>

            </div>


            <div class="historial-lista">


                <article class="historial-item">

                    <div class="historial-fecha">
                        02
                        <span>SEP 2026</span>
                    </div>


                    <div class="historial-contenido">

                        <div class="historial-titulo">

                            <h4>Valoración inicial</h4>

                            <span class="badge-apto">
                                Apto para adopción
                            </span>

                        </div>


                        <p>
                            <strong>Veterinario:</strong>
                            MVZ Juan Pérez García
                        </p>

                        <p>
                            <strong>Veterinaria / Clínica:</strong>
                            Clínica Veterinaria San Francisco
                        </p>

                        <p>
                            <strong>Valoración:</strong>
                            Cachorra aparentemente sana,
                            sin alteraciones evidentes.
                        </p>


                        <button
                            type="button"
                            class="btn-ver-detalle">
                            Ver consulta completa
                        </button>

                    </div>

                </article>


            </div>

        </div>




        <div class="contenido-tab" id="vacunacion">

            <div class="tab-encabezado">

                <div>
                    <h3>Historial de vacunación</h3>
                    <p>
                        Vacunas aplicadas y próximas dosis.
                    </p>
                </div>

                <button type="button" class="btn-principal">
                    + Registrar vacuna
                </button>

            </div>


            <div class="tabla-responsive">

                <table class="tabla-expediente">

                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Vacuna</th>
                            <th>Dosis</th>
                            <th>Próxima dosis</th>
                            <th>Origen</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>02/09/2026</td>
                            <td>Vacuna múltiple</td>
                            <td>Primera dosis</td>
                            <td>
                                <span class="fecha-proxima">
                                    24/09/2026
                                </span>
                            </td>
                            <td>Consulta veterinaria</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>



        <div class="contenido-tab" id="desparasitacion">

            <div class="tab-encabezado">

                <div>
                    <h3>Historial de desparasitación</h3>
                    <p>
                        Aplicaciones realizadas y próximas fechas.
                    </p>
                </div>

                <button type="button" class="btn-principal">
                    + Registrar desparasitación
                </button>

            </div>


            <div class="tabla-responsive">

                <table class="tabla-expediente">

                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Producto / tipo</th>
                            <th>Próxima aplicación</th>
                            <th>Origen</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>02/09/2026</td>
                            <td>Desparasitación interna</td>
                            <td>
                                <span class="fecha-proxima">
                                    03/10/2026
                                </span>
                            </td>
                            <td>Consulta veterinaria</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>




        <div class="contenido-tab" id="tratamientos">

            <div class="tab-encabezado">

                <div>
                    <h3>Tratamientos médicos</h3>
                    <p>
                        Tratamientos indicados durante la atención del animal.
                    </p>
                </div>

            </div>


            <div class="estado-vacio">

                <div class="estado-vacio-icono">
                    ♡
                </div>

                <h4>Sin tratamientos registrados</h4>

                <p>
                    Actualmente este animal no tiene
                    tratamientos médicos registrados.
                </p>

            </div>

        </div>


        <div class="contenido-tab" id="movimientos">

            <div class="tab-encabezado">

                <div>
                    <h3>Movimientos</h3>
                    <p>
                        Historial de cambios de ubicación y destino.
                    </p>
                </div>

                <button type="button" class="btn-principal">
                    + Registrar movimiento
                </button>

            </div>


            <div class="linea-tiempo">

                <div class="movimiento">

                    <div class="movimiento-punto"></div>

                    <div class="movimiento-contenido">

                        <span class="movimiento-fecha">
                            01/09/2026
                        </span>

                        <strong>Ingreso al refugio</strong>

                        <p>
                            Ubicación: Refugio Bélier
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <div class="contenido-tab" id="adopcion">

            <div class="tab-encabezado">

                <div>
                    <h3>Proceso de adopción</h3>
                    <p>
                        Información relacionada con solicitudes
                        y adopción del animal.
                    </p>
                </div>

                <button type="button" class="btn-principal">
                    Iniciar proceso de adopción
                </button>

            </div>


            <div class="estado-vacio">

                <div class="estado-vacio-icono">
                    🏠
                </div>

                <h4>Sin proceso de adopción iniciado</h4>

                <p>
                    Luna se encuentra disponible para adopción,
                    pero todavía no tiene un proceso activo.
                </p>

            </div>

        </div>



        <div class="contenido-tab" id="seguimiento">

            <div class="tab-encabezado">

                <div>
                    <h3>Seguimiento postadopción</h3>
                    <p>
                        Seguimientos realizados después
                        de concretar una adopción.
                    </p>
                </div>

            </div>


            <div class="estado-vacio">

                <div class="estado-vacio-icono">
                    🐾
                </div>

                <h4>Aún no existen seguimientos</h4>

                <p>
                    Esta sección comenzará a utilizarse
                    después de que el animal sea adoptado.
                </p>

            </div>

        </div>



    
        <div class="contenido-tab" id="bitacora">

            <div class="tab-encabezado">

                <div>
                    <h3>Bitácora del expediente</h3>
                    <p>
                        Historial de eventos y cambios relevantes.
                    </p>
                </div>

            </div>


            <div class="bitacora-lista">

                <div class="bitacora-item">

                    <div class="bitacora-fecha">
                        02/09/2026
                    </div>

                    <div>
                        <strong>
                            Estado actualizado
                        </strong>

                        <p>
                            De “En valoración” a
                            “Disponible para adopción”.
                        </p>
                    </div>

                </div>


                <div class="bitacora-item">

                    <div class="bitacora-fecha">
                        02/09/2026
                    </div>

                    <div>
                        <strong>
                            Consulta veterinaria registrada
                        </strong>

                        <p>
                            Valoración inicial del animal.
                        </p>
                    </div>

                </div>


                <div class="bitacora-item">

                    <div class="bitacora-fecha">
                        01/09/2026
                    </div>

                    <div>
                        <strong>
                            Expediente creado
                        </strong>

                        <p>
                            Alta inicial del animal con clave
                            01-P-L-0001.
                        </p>
                    </div>

                </div>

            </div>

        </div>



        <div class="expediente-acciones">

            <a href="../index.php" class="btn-regresar">
                ← Regresar al panel
            </a>

        </div>


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




<script>

    const pestanas = document.querySelectorAll('.pestana');
    const contenidos = document.querySelectorAll('.contenido-tab');

    pestanas.forEach(function(pestana) {

        pestana.addEventListener('click', function() {

            const tabSeleccionada =
                pestana.getAttribute('data-tab');

            pestanas.forEach(function(item) {
                item.classList.remove('activa');
            });

            contenidos.forEach(function(contenido) {
                contenido.classList.remove('activo');
            });

            pestana.classList.add('activa');

            document
                .getElementById(tabSeleccionada)
                .classList
                .add('activo');

        });

    });

</script>


</body>
</html>