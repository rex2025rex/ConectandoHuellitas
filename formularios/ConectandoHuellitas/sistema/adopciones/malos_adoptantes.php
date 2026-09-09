<?php


$registros = [

    [
        'folio' => 'MA-2026-0001',
        'nombre' => 'Roberto Sánchez Pérez',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'fecha' => '15/07/2026',
        'motivo' => 'Incumplimiento grave de condiciones de adopción',
        'estatus' => 'Confirmado'
    ],

    [
        'folio' => 'MA-2026-0002',
        'nombre' => 'Andrea Morales Hernández',
        'municipio' => 'Coatepec',
        'estado' => 'Veracruz',
        'fecha' => '03/08/2026',
        'motivo' => 'Antecedente documentado de negligencia',
        'estatus' => 'Confirmado'
    ],

    [
        'folio' => 'MA-2026-0003',
        'nombre' => 'José Luis Ramírez Torres',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'fecha' => '21/08/2026',
        'motivo' => 'Incumplimiento de seguimiento y condiciones acordadas',
        'estatus' => 'Confirmado'
    ]

];

$totalRegistros = count($registros);
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
        Registro de Malos Adoptantes | Conectando Huellitas
    </title>

    <link
        rel="stylesheet"
        href="../css/malos_adoptantes.css"
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



    <section class="encabezado-pagina">

        <div>

            <span class="etiqueta-modulo">
                Adopciones
            </span>

            <h1>
                Registro de Malos Adoptantes
            </h1>

            <p>
                Consulta los antecedentes registrados para apoyar
                la evaluación y prevención de riesgos durante los
                procesos de adopción.
            </p>

        </div>


        <a
            href="registrar_antecedente.php"
            class="btn-nuevo"
        >
            + Registrar antecedente
        </a>

    </section>



    <section class="aviso-privacidad">

        <div class="aviso-icono">
            🔒
        </div>

        <div>

            <strong>
                Información interna y de acceso restringido
            </strong>

            <p>
                Los registros contenidos en este módulo deberán
                utilizarse exclusivamente para apoyar los procesos
                internos de evaluación de adopciones.
            </p>

        </div>

    </section>




    <section class="resumen-registro">

        <div class="tarjeta-resumen">

            <span>
                Registros confirmados
            </span>

            <strong>
                <?php echo $totalRegistros; ?>
            </strong>

            <small>
                Antecedentes registrados
            </small>

        </div>


        <div class="tarjeta-resumen">

            <span>
                Consulta automática
            </span>

            <strong class="texto-activo">
                Activa posteriormente
            </strong>

            <small>
                Se integrará con la revisión de solicitudes
            </small>

        </div>


        <div class="tarjeta-resumen">

            <span>
                Uso del registro
            </span>

            <strong>
                Prevención
            </strong>

            <small>
                Apoyo para la toma de decisiones
            </small>

        </div>

    </section>


    <section class="bloque-busqueda">

        <div class="titulo-busqueda">

            <div class="icono-busqueda">
                🔎
            </div>

            <div>

                <h2>
                    Buscar antecedentes
                </h2>

                <p>
                    La búsqueda deberá considerar distintos datos
                    para reducir el riesgo de confundir personas
                    con nombres similares.
                </p>

            </div>

        </div>


        <form action="#" method="get">

            <div class="grid-busqueda">


                <div class="campo-formulario">

                    <label for="nombre">
                        Nombre o apellidos
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Ej. Roberto Sánchez Pérez"
                    >

                </div>


                <div class="campo-formulario">

                    <label for="telefono">
                        Teléfono
                    </label>

                    <input
                        type="text"
                        id="telefono"
                        name="telefono"
                        placeholder="Ej. 228..."
                    >

                </div>


                <div class="campo-formulario">

                    <label for="correo">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        placeholder="correo@ejemplo.com"
                    >

                </div>


                <div class="campo-formulario">

                    <label for="municipio">
                        Municipio
                    </label>

                    <input
                        type="text"
                        id="municipio"
                        name="municipio"
                        placeholder="Ej. Xalapa"
                    >

                </div>

            </div>


            <div class="acciones-busqueda">

                <button
                    type="reset"
                    class="btn-limpiar"
                >
                    Limpiar
                </button>

                <button
                    type="button"
                    class="btn-buscar"
                >
                    Buscar antecedentes
                </button>

            </div>

        </form>

    </section>



    <section class="criterio-coincidencia">

        <div class="criterio-titulo">

            <strong>
                Criterio de coincidencia
            </strong>

            <span>
                Segunda revisión / lógica futura
            </span>

        </div>


        <div class="niveles-coincidencia">

            <div class="nivel nivel-verde">

                <span class="semaforo">
                    ●
                </span>

                <div>

                    <strong>
                        Sin coincidencias
                    </strong>

                    <p>
                        No se encontraron antecedentes relacionados
                        con los datos consultados.
                    </p>

                </div>

            </div>


            <div class="nivel nivel-amarillo">

                <span class="semaforo">
                    ●
                </span>

                <div>

                    <strong>
                        Posible coincidencia
                    </strong>

                    <p>
                        Existen datos similares y será necesaria
                        una revisión manual.
                    </p>

                </div>

            </div>


            <div class="nivel nivel-rojo">

                <span class="semaforo">
                    ●
                </span>

                <div>

                    <strong>
                        Coincidencia confirmada
                    </strong>

                    <p>
                        La identidad corresponde a una persona
                        registrada con antecedente confirmado.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <section class="bloque-listado">

        <div class="cabecera-listado">

            <div>

                <span class="mini-etiqueta">
                    Uso interno
                </span>

                <h2>
                    Antecedentes registrados
                </h2>

                <p>
                    Consulta los registros existentes y su información
                    de referencia.
                </p>

            </div>

            <span class="contador-registros">
                <?php echo $totalRegistros; ?> registros
            </span>

        </div>


        <div class="tabla-responsive">

            <table>

                <thead>

                    <tr>

                        <th>
                            Folio
                        </th>

                        <th>
                            Persona
                        </th>

                        <th>
                            Municipio
                        </th>

                        <th>
                            Fecha de registro
                        </th>

                        <th>
                            Motivo general
                        </th>

                        <th>
                            Estatus
                        </th>

                        <th>
                            Acción
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php foreach ($registros as $registro): ?>

                        <tr>

                            <td>

                                <strong class="folio">
                                    <?php echo $registro['folio']; ?>
                                </strong>

                            </td>


                            <td>

                                <strong class="nombre-persona">
                                    <?php echo $registro['nombre']; ?>
                                </strong>

                            </td>


                            <td>

                                <?php echo $registro['municipio']; ?>,
                                <?php echo $registro['estado']; ?>

                            </td>


                            <td>

                                <?php echo $registro['fecha']; ?>

                            </td>


                            <td>

                                <span class="motivo">
                                    <?php echo $registro['motivo']; ?>
                                </span>

                            </td>


                            <td>

                                <span class="estatus-confirmado">
                                    ● <?php echo $registro['estatus']; ?>
                                </span>

                            </td>


                            <td>

                                <a
                                    href="detalle_antecedente.php"
                                    class="btn-ver"
                                >
                                    Ver antecedente
                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </section>




    <section class="regla-adopciones">

        <div class="regla-icono">
            !
        </div>

        <div>

            <strong>
                Integración futura con solicitudes de adopción
            </strong>

            <p>
                Cuando se implemente la lógica del sistema, cada
                solicitud será contrastada automáticamente con este
                registro. Una coincidencia confirmada impedirá que
                la solicitud sea clasificada como viable; una posible
                coincidencia requerirá revisión manual.
            </p>

        </div>

    </section>



    <section class="nota-version">

        <strong>
            Primera versión visual.
        </strong>

        La búsqueda por múltiples datos, detección de coincidencias,
        almacenamiento de antecedentes y consulta automática desde
        las solicitudes de adopción.
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