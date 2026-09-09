<?php

$adoptante = [
    'folio_solicitud' => 'SOL-0002',
    'nombre' => 'María López García',
    'telefono' => '228 000 0000',
    'correo' => 'maria.lopez@example.com',
    'municipio' => 'Xalapa',
    'estado' => 'Veracruz',
    'verificacion' => 'Satisfactoria'
];

$mascota = [
    'nombre' => 'Luna',
    'clave' => '01-P-L-0001',
    'sexo' => 'Hembra',
    'edad' => '2 años aproximadamente',
    'esterilizacion' => 'Pendiente'
];

$folioAdopcion = 'ADO-2026-0001';
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
        Formalizar adopción | Conectando Huellitas
    </title>

    <link
        rel="stylesheet"
        href="../css/formalizar_adopcion.css"
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
            href="verificar_candidato.php"
            class="btn-regresar"
        >
            ← Volver a verificación
        </a>

    </div>



    <section class="encabezado-pagina">

        <span class="etiqueta-modulo">
            Adopciones
        </span>

        <h1>
            Formalizar adopción
        </h1>

        <p>
            Registra los elementos necesarios para formalizar
            la adopción de la mascota con el candidato previamente
            seleccionado y verificado.
        </p>

    </section>



    <section class="resumen-proceso">

        <div>

            <span>
                Folio de adopción
            </span>

            <strong>
                <?php echo $folioAdopcion; ?>
            </strong>

        </div>

        <div>

            <span>
                Mascota
            </span>

            <strong>
                <?php echo $mascota['nombre']; ?>
            </strong>

        </div>

        <div>

            <span>
                Adoptante
            </span>

            <strong>
                <?php echo $adoptante['nombre']; ?>
            </strong>

        </div>

        <div>

            <span>
                Etapa actual
            </span>

            <strong class="estado-proceso">
                Formalización
            </strong>

        </div>

    </section>



    <section class="tarjetas-identificacion">

        <article class="tarjeta-identificacion">

            <div class="icono-identificacion">
                🐾
            </div>

            <div>

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

        </article>


        <article class="tarjeta-identificacion">

            <div class="icono-identificacion">
                👤
            </div>

            <div>

                <span class="mini-etiqueta">
                    Adoptante verificado
                </span>

                <h2>
                    <?php echo $adoptante['nombre']; ?>
                </h2>

                <p>
                    <?php echo $adoptante['municipio']; ?>,
                    <?php echo $adoptante['estado']; ?>
                </p>

            </div>

        </article>

    </section>



    <section class="aviso-formalizacion">

        <div class="aviso-icono">
            ℹ️
        </div>

        <div>

            <strong>
                Etapa final del proceso de adopción
            </strong>

            <p>
                La adopción deberá formalizarse únicamente después
                de que el candidato seleccionado haya superado
                satisfactoriamente la etapa de verificación.
            </p>

        </div>

    </section>


    <form action="#" method="post">




        <section class="bloque-seccion">

            <div class="titulo-seccion">

                <span class="numero-seccion">
                    1
                </span>

                <div>

                    <h2>
                        Datos de la adopción
                    </h2>

                    <p>
                        Información general de la mascota y del adoptante.
                    </p>

                </div>

            </div>


            <div class="grid-datos">

                <div class="dato">

                    <span>
                        Folio de adopción
                    </span>

                    <strong>
                        <?php echo $folioAdopcion; ?>
                    </strong>

                </div>


                <div class="dato">

                    <span>
                        Folio de solicitud
                    </span>

                    <strong>
                        <?php echo $adoptante['folio_solicitud']; ?>
                    </strong>

                </div>


                <div class="dato">

                    <span>
                        Clave de la mascota
                    </span>

                    <strong>
                        <?php echo $mascota['clave']; ?>
                    </strong>

                </div>


                <div class="dato">

                    <span>
                        Adoptante
                    </span>

                    <strong>
                        <?php echo $adoptante['nombre']; ?>
                    </strong>

                </div>


                <div class="dato">

                    <span>
                        Verificación
                    </span>

                    <strong class="texto-verde">
                        ✓ <?php echo $adoptante['verificacion']; ?>
                    </strong>

                </div>


                <div class="dato">

                    <span>
                        Estado de esterilización
                    </span>

                    <strong class="texto-naranja">
                        <?php echo $mascota['esterilizacion']; ?>
                    </strong>

                </div>

            </div>

        </section>



        <section class="bloque-seccion">

            <div class="titulo-seccion">

                <span class="numero-seccion">
                    2
                </span>

                <div>

                    <h2>
                        Contrato de adopción
                    </h2>

                    <p>
                        Registra la firma del contrato correspondiente
                        a la adopción.
                    </p>

                </div>

            </div>


            <article class="documento-formal">

                <div class="cabecera-documento">

                    <div class="icono-documento">
                        📄
                    </div>

                    <div>

                        <h3>
                            Contrato de adopción firmado
                        </h3>

                        <p>
                            El adoptante deberá aceptar y firmar
                            las condiciones establecidas por el refugio.
                        </p>

                    </div>

                    <span class="requerido">
                        Requerido
                    </span>

                </div>


                <div class="contenido-documento">

                    <div class="campo-archivo">

                        <label for="contrato">
                            Documento firmado
                        </label>

                        <input
                            type="file"
                            id="contrato"
                            name="contrato"
                            accept=".pdf,.jpg,.jpeg,.png"
                        >

                        <small>
                            Primera versión visual. El documento todavía
                            no se almacenará.
                        </small>

                    </div>


                    <div class="checks-documento">

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="contrato_firmado"
                            >

                            <span>
                                Contrato firmado por el adoptante
                            </span>

                        </label>


                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="condiciones_aceptadas"
                            >

                            <span>
                                Condiciones de adopción aceptadas
                            </span>

                        </label>

                    </div>

                </div>

            </article>

        </section>



        <section class="bloque-seccion">

            <div class="titulo-seccion">

                <span class="numero-seccion">
                    3
                </span>

                <div>

                    <h2>
                        Fotografía del adoptante
                    </h2>

                    <p>
                        Evidencia privada correspondiente a la
                        formalización de la adopción.
                    </p>

                </div>

            </div>


            <div class="campo-foto">

                <div class="foto-icono">
                    📷
                </div>

                <div class="foto-contenido">

                    <label for="foto_adoptante">
                        Fotografía del adoptante
                        <span class="obligatorio">*</span>
                    </label>

                    <input
                        type="file"
                        id="foto_adoptante"
                        name="foto_adoptante"
                        accept=".jpg,.jpeg,.png"
                    >

                    <small>
                        Esta fotografía será de uso interno y deberá
                        mantenerse con acceso restringido.
                    </small>

                </div>

            </div>

        </section>



        <section class="bloque-seccion">

            <div class="titulo-seccion">

                <span class="numero-seccion">
                    4
                </span>

                <div>

                    <h2>
                        Entrega de la mascota
                    </h2>

                    <p>
                        La entrega deberá realizarse en el domicilio
                        del adoptante.
                    </p>

                </div>

            </div>


            <div class="grid-formulario">

                <div class="campo-formulario">

                    <label for="fecha_entrega">
                        Fecha de entrega
                        <span class="obligatorio">*</span>
                    </label>

                    <input
                        type="date"
                        id="fecha_entrega"
                        name="fecha_entrega"
                    >

                </div>


                <div class="campo-formulario">

                    <label for="hora_entrega">
                        Hora aproximada de entrega
                    </label>

                    <input
                        type="time"
                        id="hora_entrega"
                        name="hora_entrega"
                    >

                </div>


                <div class="campo-formulario campo-completo">

                    <label class="check-entrega">

                        <input
                            type="checkbox"
                            name="entrega_domicilio"
                        >

                        <span>
                            Confirmo que la mascota fue entregada
                            en el domicilio del adoptante.
                        </span>

                    </label>

                </div>


                <div class="campo-formulario campo-completo">

                    <label for="observaciones_entrega">
                        Observaciones de la entrega
                    </label>

                    <textarea
                        id="observaciones_entrega"
                        name="observaciones_entrega"
                        rows="4"
                        placeholder="Registrar observaciones relevantes sobre la entrega de la mascota..."
                    ></textarea>

                </div>

            </div>


            <div class="nota-entrega">

                <strong>
                    Importante:
                </strong>

                la entrega en domicilio permite confirmar de manera
                práctica el lugar donde vivirá la mascota y observar
                las condiciones generales de recepción.
            </div>

        </section>



        <section class="bloque-seccion">

            <div class="titulo-seccion">

                <span class="numero-seccion">
                    5
                </span>

                <div>

                    <h2>
                        Esterilización
                    </h2>

                    <p>
                        Revisa la situación de esterilización
                        antes de concluir la adopción.
                    </p>

                </div>

            </div>


            <div class="estado-esterilizacion">

                <div class="esterilizacion-icono">
                    ✚
                </div>

                <div>

                    <span>
                        Estado actual de Luna
                    </span>

                    <strong>
                        Esterilización pendiente
                    </strong>

                    <p>
                        En este caso deberá firmarse una carta compromiso
                        de esterilización.
                    </p>

                </div>

            </div>


            <article class="documento-formal documento-compromiso">

                <div class="cabecera-documento">

                    <div class="icono-documento">
                        ✍️
                    </div>

                    <div>

                        <h3>
                            Carta compromiso de esterilización
                        </h3>

                        <p>
                            Aplica únicamente cuando la mascota se entrega
                            sin haber sido esterilizada.
                        </p>

                    </div>

                    <span class="requerido">
                        Requerido en este caso
                    </span>

                </div>


                <div class="contenido-documento">

                    <div class="campo-archivo">

                        <label for="carta_esterilizacion">
                            Carta compromiso firmada
                        </label>

                        <input
                            type="file"
                            id="carta_esterilizacion"
                            name="carta_esterilizacion"
                            accept=".pdf,.jpg,.jpeg,.png"
                        >

                        <small>
                            La carta será almacenada posteriormente
                            junto con la información de la adopción.
                        </small>

                    </div>


                    <div class="checks-documento">

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="carta_firmada"
                            >

                            <span>
                                Carta compromiso firmada
                            </span>

                        </label>

                    </div>

                </div>


                <div class="grid-formulario compromiso-fechas">

                    <div class="campo-formulario">

                        <label for="fecha_compromiso">
                            Fecha compromiso de esterilización
                        </label>

                        <input
                            type="date"
                            id="fecha_compromiso"
                            name="fecha_compromiso"
                        >

                    </div>

                </div>

            </article>


            <div class="nota-esterilizacion">

                Cuando posteriormente se confirme la esterilización,
                deberá actualizarse el
                <strong>
                    Expediente Digital Único de Luna
                </strong>
                y registrarse el cumplimiento del compromiso.
            </div>

        </section>



        <section class="bloque-final">

            <div class="cabecera-final">

                <div class="icono-final">
                    ♥
                </div>

                <div>

                    <span class="mini-etiqueta">
                        Confirmación
                    </span>

                    <h2>
                        Formalización de la adopción
                    </h2>

                    <p>
                        Revisa la información antes de concluir
                        el proceso de adopción.
                    </p>

                </div>

            </div>


            <div class="contenido-final">

                <div class="campo-formulario">

                    <label for="observaciones_finales">
                        Observaciones finales
                    </label>

                    <textarea
                        id="observaciones_finales"
                        name="observaciones_finales"
                        rows="5"
                        placeholder="Registrar cualquier observación relevante antes de formalizar la adopción..."
                    ></textarea>

                </div>


                <label class="declaracion-final">

                    <input
                        type="checkbox"
                        name="confirmacion_final"
                    >

                    <span>
                        Confirmo que se han revisado los requisitos
                        correspondientes y que procede la formalización
                        de la adopción.
                    </span>

                </label>


                <div class="nota-final">

                    Al formalizar la adopción, Luna pasará de
                    <strong>
                        “En proceso de adopción”
                    </strong>
                    a
                    <strong>
                        “Adoptada”
                    </strong>
                    y posteriormente iniciará su calendario de
                    seguimiento postadopción.
                </div>


                <div class="acciones-formulario">

                    <a
                        href="verificar_candidato.php"
                        class="btn-secundario"
                    >
                        Volver
                    </a>

                    <button
                        type="button"
                        class="btn-formalizar"
                    >
                        Formalizar adopción
                    </button>

                </div>

            </div>

        </section>

    </form>

    <section class="nota-version">

        <strong>
            Primera versión visual.
        </strong>

        El folio automático, almacenamiento de documentos,
        actualización del expediente, cambio de estatus y generación
        del seguimiento se implementarán posteriormente con MySQL
        y la lógica del sistema.

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