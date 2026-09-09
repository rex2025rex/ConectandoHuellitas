<?php


$mascota = [
    'nombre' => 'Luna',
    'clave' => '01-P-L-0001',
    'solicitudes' => 10,
    'viables' => 3
];

$candidatos = [

    [
        'orden' => 1,
        'folio' => 'SOL-0002',
        'nombre' => 'María López García',
        'fecha' => '01/09/2026',
        'hora' => '10:18',
        'municipio' => 'Xalapa',
        'vivienda' => 'Casa propia',
        'familia' => '3 personas',
        'otras_mascotas' => 'Sí · 1 perro',
        'horas_sola' => '4 a 5 horas',
        'experiencia' => 'Sí',
        'seguimiento' => 'Sí',
        'observacion' => 'Cuenta con experiencia previa y condiciones adecuadas para continuar en el proceso.'
    ],

    [
        'orden' => 2,
        'folio' => 'SOL-0004',
        'nombre' => 'Carlos Hernández Ruiz',
        'fecha' => '01/09/2026',
        'hora' => '12:46',
        'municipio' => 'Xalapa',
        'vivienda' => 'Casa rentada',
        'familia' => '2 personas',
        'otras_mascotas' => 'No',
        'horas_sola' => '3 horas',
        'experiencia' => 'Sí',
        'seguimiento' => 'Sí',
        'observacion' => 'Solicitud viable. Manifiesta disposición para atender las necesidades de adaptación de Luna.'
    ],

    [
        'orden' => 3,
        'folio' => 'SOL-0007',
        'nombre' => 'Laura Martínez Pérez',
        'fecha' => '02/09/2026',
        'hora' => '09:15',
        'municipio' => 'Coatepec',
        'vivienda' => 'Casa propia',
        'familia' => '4 personas',
        'otras_mascotas' => 'Sí · 1 gato',
        'horas_sola' => '2 a 3 horas',
        'experiencia' => 'Sí',
        'seguimiento' => 'Sí',
        'observacion' => 'Familia de acuerdo con la adopción y disponibilidad para seguimiento postadopción.'
    ]

];

$totalViables = count($candidatos);
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
        Candidatos viables | Conectando Huellitas
    </title>

    <link
        rel="stylesheet"
        href="../css/comparar_candidatos.css"
    >

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

            <a href="../../index.php">
                Inicio
            </a>

            <a href="../../portal/quienes_somos.php">
                Quiénes somos
            </a>

            <a href="../../portal/contacto.php">
                Contacto
            </a>

            <a
                href="../usuarios/login.php"
                class="btn-login"
            >
                Iniciar sesión
            </a>

        </nav>

    </div>

</header>



<main class="contenedor-principal">



    <div class="barra-regreso">

        <a
            href="solicitudes_mascota.php"
            class="btn-regresar"
        >
            ← Volver a solicitudes de Luna
        </a>

    </div>



    <section class="encabezado-pagina">

        <span class="etiqueta-modulo">
            Adopciones
        </span>

        <h1>
            Candidatos viables para Luna
        </h1>

        <p>
            Compara las solicitudes que superaron la revisión
            y selecciona a la persona que continuará a la
            etapa de verificación.
        </p>

    </section>




    <section class="tarjeta-mascota">

        <div class="icono-mascota">
            🐾
        </div>

        <div class="datos-mascota">

            <span class="mini-etiqueta">
                Mascota
            </span>

            <h2>
                <?php echo $mascota['nombre']; ?>
            </h2>

            <p>
                Clave:
                <strong>
                    <?php echo $mascota['clave']; ?>
                </strong>
            </p>

        </div>


        <div class="estadisticas-mascota">

            <div>

                <span>
                    Solicitudes recibidas
                </span>

                <strong>
                    <?php echo $mascota['solicitudes']; ?>
                </strong>

            </div>


            <div>

                <span>
                    Candidatos viables
                </span>

                <strong>
                    <?php echo $totalViables; ?>
                </strong>

            </div>

        </div>

    </section>



  

    <section class="aviso-seleccion">

        <div class="aviso-icono">
            ℹ️
        </div>

        <div>

            <strong>
                Selección del candidato
            </strong>

            <p>
                La condición de viable no significa que la adopción
                esté aprobada. El personal del refugio deberá comparar
                a los candidatos y seleccionar a quien considere más
                adecuado para las necesidades y bienestar de Luna.
            </p>

        </div>

    </section>




    <section class="criterio-desempate">

        <strong>
            Criterio de desempate:
        </strong>

        cuando dos o más candidatos sean considerados igualmente
        idóneos, tendrá preferencia la solicitud recibida primero.

    </section>




    <section class="bloque-candidatos">

        <div class="titulo-listado">

            <div>

                <span class="mini-etiqueta">
                    Comparación
                </span>

                <h2>
                    <?php echo $totalViables; ?>
                    candidatos viables
                </h2>

            </div>

            <span class="indicador-orden">
                Ordenados por fecha y hora de solicitud
            </span>

        </div>



        <?php if ($totalViables > 0): ?>


            <div class="lista-candidatos">


                <?php foreach ($candidatos as $candidato): ?>


                    <article class="tarjeta-candidato">


                        

                        <div class="cabecera-candidato">

                            <div class="orden-candidato">

                                <?php
                                    echo $candidato['orden'];
                                ?>

                            </div>


                            <div class="identidad-candidato">

                                <span class="folio">
                                    <?php
                                        echo $candidato['folio'];
                                    ?>
                                </span>

                                <h3>
                                    <?php
                                        echo $candidato['nombre'];
                                    ?>
                                </h3>

                                <p>

                                    Solicitud recibida:

                                    <strong>
                                        <?php
                                            echo $candidato['fecha'];
                                        ?>
                                    </strong>

                                    ·

                                    <?php
                                        echo $candidato['hora'];
                                    ?>

                                </p>

                            </div>


                            <span class="estado-viable">
                                ✓ Viable
                            </span>

                        </div>



                      

                        <div class="grid-datos">


                            <div class="dato">

                                <span>
                                    Municipio
                                </span>

                                <strong>
                                    <?php
                                        echo $candidato['municipio'];
                                    ?>
                                </strong>

                            </div>


                            <div class="dato">

                                <span>
                                    Vivienda
                                </span>

                                <strong>
                                    <?php
                                        echo $candidato['vivienda'];
                                    ?>
                                </strong>

                            </div>


                            <div class="dato">

                                <span>
                                    Integrantes del hogar
                                </span>

                                <strong>
                                    <?php
                                        echo $candidato['familia'];
                                    ?>
                                </strong>

                            </div>


                            <div class="dato">

                                <span>
                                    Otras mascotas
                                </span>

                                <strong>
                                    <?php
                                        echo $candidato['otras_mascotas'];
                                    ?>
                                </strong>

                            </div>


                            <div class="dato">

                                <span>
                                    Horas que Luna estaría sola
                                </span>

                                <strong>
                                    <?php
                                        echo $candidato['horas_sola'];
                                    ?>
                                </strong>

                            </div>


                            <div class="dato">

                                <span>
                                    Experiencia con mascotas
                                </span>

                                <strong>
                                    <?php
                                        echo $candidato['experiencia'];
                                    ?>
                                </strong>

                            </div>


                            <div class="dato">

                                <span>
                                    Acepta seguimiento
                                </span>

                                <strong>
                                    <?php
                                        echo $candidato['seguimiento'];
                                    ?>
                                </strong>

                            </div>


                        </div>



                        <div class="observacion-revision">

                            <span>
                                Observaciones de la revisión
                            </span>

                            <p>
                                <?php
                                    echo $candidato['observacion'];
                                ?>
                            </p>

                        </div>



                        <div class="acciones-candidato">


                            <a
                                href="revisar_solicitud.php"
                                class="btn-ver"
                            >
                                Ver solicitud completa
                            </a>


                            <label class="seleccionar-candidato">

                                <input
                                    type="radio"
                                    name="candidato"
                                    value="<?php echo $candidato['folio']; ?>"
                                >

                                <span class="radio-personalizado"></span>

                                <strong>
                                    Seleccionar candidato
                                </strong>

                            </label>


                        </div>


                    </article>


                <?php endforeach; ?>


            </div>


        <?php else: ?>



            <div class="sin-candidatos">

                <div class="sin-candidatos-icono">
                    🐾
                </div>

                <h3>
                    No existen candidatos viables
                </h3>

                <p>
                    Ninguna de las solicitudes revisadas continúa
                    actualmente en el proceso de adopción.
                </p>

            </div>


        <?php endif; ?>


    </section>




    <?php if ($totalViables > 0): ?>

        <section class="bloque-confirmacion">

            <div class="confirmacion-texto">

                <span class="mini-etiqueta">
                    Siguiente etapa
                </span>

                <h2>
                    Confirmar candidato seleccionado
                </h2>

                <p>
                    La persona seleccionada continuará a la
                    verificación correspondiente antes de formalizar
                    la adopción.
                </p>

            </div>


            <div class="nota-confirmacion">

                <strong>
                    Importante:
                </strong>

                seleccionar a una persona en esta pantalla
                <strong>
                    todavía no significa que la adopción haya sido formalizada.
                </strong>

                La adopción continuará sujeta a la verificación
                correspondiente.

            </div>


            <div class="acciones-finales">

                <a
                    href="solicitudes_mascota.php"
                    class="btn-secundario"
                >
                    Volver
                </a>


                <button
                    type="button"
                    class="btn-continuar"
                >
                    Confirmar y continuar
                </button>

            </div>

        </section>

    <?php endif; ?>



    <section class="nota-version">

        <strong>
            Primera versión visual.
        </strong>

        La selección final corresponde al personal autorizado
        del refugio. El sistema no seleccionará automáticamente
        al adoptante.

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