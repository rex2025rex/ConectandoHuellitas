<?php

$solicitud = [
    'folio' => 'SOL-0002',
    'fecha' => '01/09/2026',
    'hora' => '10:18',
    'estado' => 'Pendiente',

    'mascota' => [
        'nombre' => 'Luna',
        'clave' => '01-P-L-0001'
    ],

    'solicitante' => [
        'nombre' => 'María López García',
        'edad' => '34 años',
        'telefono' => '228 000 0000',
        'correo' => 'maria.lopez@example.com',
        'estado_civil' => 'Casada',
        'ocupacion' => 'Contadora',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'localidad' => 'Xalapa',
        'colonia' => 'Centro',
        'codigo_postal' => '91000'
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Revisar solicitud | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/revisar_solicitud.css">
</head>

<body>


<header class="header-principal">

    <div class="header-contenedor">

        <div class="logo-area">
            <img
                src="../img/logo-header.png?v=12"
                alt="Conectando Huellitas"
                class="logo-header"
            >
        </div>

        <nav class="menu-principal">
            <a href="../../index.php">Inicio</a>
            <a href="../../portal/quienes_somos.php">Quiénes somos</a>
            <a href="../../portal/contacto.php">Contacto</a>
            <a href="../usuarios/login.php" class="btn-login">Iniciar sesión</a>
        </nav>

    </div>

</header>



<main class="contenedor-principal">

 
    <div class="barra-regreso">

        <a href="solicitudes_mascota.php" class="btn-regresar">
            ← Volver a solicitudes de Luna
        </a>

    </div>


    <section class="encabezado-pagina">

        <span class="etiqueta-modulo">
            Adopciones
        </span>

        <h1>Revisar solicitud de adopción</h1>

        <p>
            Consulta la información proporcionada por la persona solicitante
            y registra el resultado de la revisión.
        </p>

    </section>


 
    <section class="resumen-solicitud">

        <div class="resumen-superior">

            <div>
                <span class="label-resumen">Folio de solicitud</span>
                <strong><?php echo $solicitud['folio']; ?></strong>
            </div>

            <div>
                <span class="label-resumen">Fecha de recepción</span>
                <strong>
                    <?php echo $solicitud['fecha']; ?>
                    ·
                    <?php echo $solicitud['hora']; ?>
                </strong>
            </div>

            <div>
                <span class="label-resumen">Estado actual</span>
                <span class="estado estado-pendiente">
                    Pendiente de revisión
                </span>
            </div>

        </div>

    </section>


    <section class="tarjetas-identificacion">

        <article class="tarjeta-identificacion">

            <div class="icono-identificacion">
                🐾
            </div>

            <div>
                <span class="mini-etiqueta">Mascota solicitada</span>

                <h2>
                    <?php echo $solicitud['mascota']['nombre']; ?>
                </h2>

                <p>
                    Clave:
                    <strong>
                        <?php echo $solicitud['mascota']['clave']; ?>
                    </strong>
                </p>
            </div>

        </article>


        <article class="tarjeta-identificacion">

            <div class="icono-identificacion">
                👤
            </div>

            <div>
                <span class="mini-etiqueta">Persona solicitante</span>

                <h2>
                    <?php echo $solicitud['solicitante']['nombre']; ?>
                </h2>

                <p>
                    <?php echo $solicitud['solicitante']['municipio']; ?>,
                    <?php echo $solicitud['solicitante']['estado']; ?>
                </p>
            </div>

        </article>

    </section>



    <section class="aviso-revision">

        <div class="aviso-icono">ℹ️</div>

        <div>
            <strong>Revisión interna</strong>

            <p>
                La información mostrada corresponde a las respuestas
                proporcionadas por la persona solicitante. En esta primera
                versión la valoración es realizada exclusivamente por el
                personal del refugio.
            </p>
        </div>

    </section>


    <section class="bloque-seccion">

        <div class="titulo-seccion">

            <span class="numero-seccion">1</span>

            <div>
                <h2>Datos del solicitante</h2>
                <p>Información personal y de contacto.</p>
            </div>

        </div>


        <div class="grid-respuestas">

            <div class="respuesta">
                <span>Nombre completo</span>
                <strong>María López García</strong>
            </div>

            <div class="respuesta">
                <span>Edad</span>
                <strong>34 años</strong>
            </div>

            <div class="respuesta">
                <span>Teléfono</span>
                <strong>228 000 0000</strong>
            </div>

            <div class="respuesta">
                <span>Correo electrónico</span>
                <strong>maria.lopez@example.com</strong>
            </div>

            <div class="respuesta">
                <span>Estado civil</span>
                <strong>Casada</strong>
            </div>

            <div class="respuesta">
                <span>Ocupación</span>
                <strong>Contadora</strong>
            </div>

            <div class="respuesta">
                <span>Localidad</span>
                <strong>Xalapa</strong>
            </div>

            <div class="respuesta">
                <span>Municipio</span>
                <strong>Xalapa</strong>
            </div>

            <div class="respuesta">
                <span>Estado</span>
                <strong>Veracruz</strong>
            </div>

            <div class="respuesta">
                <span>Colonia</span>
                <strong>Centro</strong>
            </div>

            <div class="respuesta">
                <span>Código postal</span>
                <strong>91000</strong>
            </div>

        </div>

    </section>


   
    <section class="bloque-seccion">

        <div class="titulo-seccion">

            <span class="numero-seccion">2</span>

            <div>
                <h2>Vivienda, familia y condiciones del hogar</h2>
                <p>
                    Características del domicilio y personas que convivirían
                    con la mascota.
                </p>
            </div>

        </div>


        <div class="grid-respuestas">

            <div class="respuesta">
                <span>Tipo de vivienda</span>
                <strong>Casa</strong>
            </div>

            <div class="respuesta">
                <span>La vivienda es</span>
                <strong>Propia</strong>
            </div>

            <div class="respuesta">
                <span>¿Cuenta con patio?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿El patio está protegido?</span>
                <strong>Sí, completamente cerrado</strong>
            </div>

            <div class="respuesta">
                <span>Personas que viven en el domicilio</span>
                <strong>3 personas</strong>
            </div>

            <div class="respuesta">
                <span>¿Hay menores de edad?</span>
                <strong>Sí, un niño de 9 años</strong>
            </div>

            <div class="respuesta">
                <span>¿Todos están de acuerdo con la adopción?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Tiene pareja?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Su pareja está de acuerdo?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿La pareja vive en el mismo domicilio?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Hay otras mascotas en casa?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta respuesta-amplia">
                <span>Mascotas actuales</span>
                <strong>
                    Un perro mestizo macho de 6 años, esterilizado y con
                    esquema de vacunación actualizado.
                </strong>
            </div>

            <div class="respuesta">
                <span>Horas que la mascota permanecería sola</span>
                <strong>Entre 4 y 5 horas al día</strong>
            </div>

            <div class="respuesta respuesta-amplia">
                <span>¿Dónde permanecería la mascota?</span>
                <strong>
                    Dentro de la vivienda. Tendría acceso al patio cuando
                    hubiera personas en casa.
                </strong>
            </div>

        </div>

    </section>


    
    <section class="bloque-seccion">

        <div class="titulo-seccion">

            <span class="numero-seccion">3</span>

            <div>
                <h2>Experiencia e historial con animales</h2>
                <p>
                    Antecedentes relacionados con tenencia y adopción.
                </p>
            </div>

        </div>


        <div class="grid-respuestas">

            <div class="respuesta">
                <span>¿Ha tenido mascotas anteriormente?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Ha adoptado anteriormente?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>Organización o persona con quien adoptó</span>
                <strong>Rescatista independiente</strong>
            </div>

            <div class="respuesta">
                <span>Lugar y año</span>
                <strong>Xalapa, Veracruz · 2020</strong>
            </div>

            <div class="respuesta">
                <span>¿Conserva actualmente a esa mascota?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta respuesta-amplia">
                <span>Situación actual de esa mascota</span>
                <strong>
                    Vive con la familia y recibe atención veterinaria
                    preventiva.
                </strong>
            </div>

            <div class="respuesta">
                <span>¿Le han rechazado una solicitud de adopción?</span>
                <strong>No</strong>
            </div>

            <div class="respuesta">
                <span>¿Ha devuelto o cedido una mascota?</span>
                <strong>No</strong>
            </div>

            <div class="respuesta">
                <span>¿Ha perdido alguna mascota anteriormente?</span>
                <strong>No</strong>
            </div>

        </div>

    </section>


    <section class="bloque-seccion">

        <div class="titulo-seccion">

            <span class="numero-seccion">4</span>

            <div>
                <h2>Motivación, responsabilidad y compromiso</h2>
                <p>
                    Respuestas relacionadas con el cuidado responsable
                    y permanencia de la adopción.
                </p>
            </div>

        </div>


        <div class="grid-respuestas">

            <div class="respuesta respuesta-amplia">
                <span>¿Por qué desea adoptar?</span>
                <strong>
                    Deseamos integrar otro perro a la familia y preferimos
                    brindar una oportunidad a un animal rescatado en lugar
                    de comprar una mascota.
                </strong>
            </div>

            <div class="respuesta respuesta-amplia">
                <span>
                    ¿Qué haría si la mascota presenta problemas de adaptación?
                </span>

                <strong>
                    Tendríamos paciencia durante el proceso de adaptación y,
                    si fuera necesario, solicitaríamos orientación veterinaria
                    o de un especialista en comportamiento.
                </strong>
            </div>

            <div class="respuesta respuesta-amplia">
                <span>
                    ¿Qué haría si cambia de domicilio?
                </span>

                <strong>
                    Buscaríamos una vivienda donde se permita conservar a
                    nuestras mascotas. La mascota se mudaría con nosotros.
                </strong>
            </div>

            <div class="respuesta respuesta-amplia">
                <span>
                    ¿Qué ocurriría con la mascota en caso de separación
                    de pareja?
                </span>

                <strong>
                    Permanecería conmigo y asumiría la responsabilidad de su
                    cuidado.
                </strong>
            </div>

            <div class="respuesta">
                <span>¿Está dispuesta a cubrir gastos veterinarios?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Acepta seguimiento postadopción?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Acepta esterilización cuando corresponda?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Está de acuerdo con la adopción permanente?</span>
                <strong>Sí</strong>
            </div>

        </div>

    </section>


    <section class="bloque-seccion">

        <div class="titulo-seccion">

            <span class="numero-seccion">5</span>

            <div>
                <h2>Compatibilidad con Luna</h2>
                <p>
                    Información relacionada específicamente con la mascota
                    solicitada.
                </p>
            </div>

        </div>


        <div class="grid-respuestas">

            <div class="respuesta respuesta-amplia">
                <span>¿Por qué desea adoptar específicamente a Luna?</span>

                <strong>
                    Nos llamó la atención su carácter tranquilo y creemos que
                    podría adaptarse bien a nuestro perro actual y a la dinámica
                    familiar.
                </strong>
            </div>

            <div class="respuesta">
                <span>¿Conoce personalmente a Luna?</span>
                <strong>No</strong>
            </div>

            <div class="respuesta">
                <span>¿Está de acuerdo con su tamaño?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta">
                <span>¿Puede atender su nivel de actividad?</span>
                <strong>Sí</strong>
            </div>

            <div class="respuesta respuesta-amplia">
                <span>
                    ¿Estaría dispuesta a trabajar problemas de adaptación
                    o comportamiento?
                </span>

                <strong>
                    Sí. Entiendo que una mascota rescatada puede requerir
                    tiempo y acompañamiento para adaptarse.
                </strong>
            </div>

        </div>

    </section>


    <section class="declaracion">

        <div class="declaracion-icono">
            ✓
        </div>

        <div>
            <h3>Declaración aceptada por la persona solicitante</h3>

            <p>
                La persona solicitante declaró que la información proporcionada
                es verdadera y aceptó que el envío de la solicitud no garantiza
                la aprobación de la adopción.
            </p>
        </div>

    </section>


   
    <section class="bloque-evaluacion">

        <div class="cabecera-evaluacion">

            <div class="icono-evaluacion">
                📝
            </div>

            <div>
                <span class="mini-etiqueta">Uso interno</span>
                <h2>Resultado de la revisión</h2>

                <p>
                    Esta valoración determina si la solicitud continúa al
                    proceso de comparación de candidatos.
                </p>
            </div>

        </div>


        <form action="#" method="post">

            <div class="campo-formulario">

                <label>
                    Resultado de la revisión
                    <span class="obligatorio">*</span>
                </label>

                <div class="opciones-decision">

                    <label class="opcion-decision opcion-viable">

                        <input
                            type="radio"
                            name="resultado"
                            value="viable"
                        >

                        <span class="radio-visual"></span>

                        <div>
                            <strong>Viable</strong>

                            <small>
                                La solicitud cumple las condiciones para
                                continuar al proceso de selección.
                            </small>
                        </div>

                    </label>


                    <label class="opcion-decision opcion-rechazada">

                        <input
                            type="radio"
                            name="resultado"
                            value="rechazada"
                        >

                        <span class="radio-visual"></span>

                        <div>
                            <strong>Rechazada</strong>

                            <small>
                                La solicitud no continuará en este proceso
                                de adopción.
                            </small>
                        </div>

                    </label>

                </div>

            </div>


            <div class="campo-formulario">

                <label for="motivo_rechazo">
                    Motivo del rechazo
                </label>

                <select
                    id="motivo_rechazo"
                    name="motivo_rechazo"
                >

                    <option value="">
                        Seleccionar motivo únicamente si la solicitud es rechazada
                    </option>

                    <option>
                        Condiciones de vivienda no adecuadas
                    </option>

                    <option>
                        Falta de acuerdo entre integrantes del hogar
                    </option>

                    <option>
                        Incompatibilidad con otras mascotas
                    </option>

                    <option>
                        Tiempo insuficiente para atender a la mascota
                    </option>

                    <option>
                        Falta de compromiso con atención veterinaria
                    </option>

                    <option>
                        Falta de compromiso con esterilización
                    </option>

                    <option>
                        Antecedentes que requieren descartar la solicitud
                    </option>

                    <option>
                        Incompatibilidad con las necesidades de la mascota
                    </option>

                    <option>
                        Información inconsistente o insuficiente
                    </option>

                    <option>
                        Otro motivo
                    </option>

                </select>

                <small class="ayuda-campo">
                    Este dato será de uso interno y permitirá conservar el
                    antecedente de la revisión.
                </small>

            </div>


            <div class="campo-formulario">

                <label for="observaciones">
                    Observaciones de la revisión
                </label>

                <textarea
                    id="observaciones"
                    name="observaciones"
                    rows="5"
                    placeholder="Registrar observaciones relevantes para la valoración de esta solicitud..."
                ></textarea>

            </div>


            <div class="nota-importante">

                <strong>Importante:</strong>

                marcar una solicitud como
                <strong>Viable</strong>
                no significa que la adopción haya sido aprobada.
                La persona únicamente continúa a la etapa de comparación
                con los demás candidatos viables para Luna.

            </div>


            <div class="acciones-formulario">

                <a
                    href="solicitudes_mascota.php"
                    class="btn-secundario"
                >
                    Cancelar
                </a>

                <button
                    type="button"
                    class="btn-guardar"
                >
                    Guardar revisión
                </button>

            </div>

        </form>

    </section>


 
    <section class="nota-version">

        <strong>Primera versión visual.</strong>

        La precalificación automática, alertas de riesgo y consulta al
        Registro de Malos Adoptantes se incorporarán posteriormente.
        La decisión final continuará siendo responsabilidad del personal
        autorizado del refugio.

    </section>

</main>



<footer class="footer-principal">

    <p>
        Conectando Huellitas
        <span>•</span>
        La red que salva vidas
        <span>•</span>
        2026
    </p>

</footer>

</body>
</html>