<?php


$candidato = [
    'folio' => 'SOL-0002',
    'nombre' => 'María López García',
    'telefono' => '228 000 0000',
    'correo' => 'maria.lopez@example.com',
    'municipio' => 'Xalapa',
    'estado' => 'Veracruz'
];

$mascota = [
    'nombre' => 'Luna',
    'clave' => '01-P-L-0001'
];
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
        Verificación del candidato | Conectando Huellitas
    </title>

    <link
        rel="stylesheet"
        href="../css/verificar_candidato.css"
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
            href="comparar_candidatos.php"
            class="btn-regresar"
        >
            ← Volver a candidatos viables
        </a>

    </div>




    <section class="encabezado-pagina">

        <span class="etiqueta-modulo">
            Adopciones
        </span>

        <h1>
            Verificación del candidato seleccionado
        </h1>

        <p>
            Verifica la documentación de la persona seleccionada
            antes de continuar con la formalización de la adopción.
        </p>

    </section>




    <section class="resumen-proceso">

        <div>

            <span>
                Folio de solicitud
            </span>

            <strong>
                <?php echo $candidato['folio']; ?>
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
                Clave
            </span>

            <strong>
                <?php echo $mascota['clave']; ?>
            </strong>

        </div>


        <div>

            <span>
                Etapa actual
            </span>

            <strong class="estado-proceso">
                Verificación
            </strong>

        </div>

    </section>




    <section class="tarjetas-identificacion">


        <article class="tarjeta-identificacion">

            <div class="icono-identificacion">
                👤
            </div>

            <div>

                <span class="mini-etiqueta">
                    Candidato seleccionado
                </span>

                <h2>
                    <?php echo $candidato['nombre']; ?>
                </h2>

                <p>
                    <?php echo $candidato['municipio']; ?>,
                    <?php echo $candidato['estado']; ?>
                </p>

            </div>

        </article>



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


    </section>




    <section class="aviso-verificacion">

        <div class="aviso-icono">
            ℹ️
        </div>

        <div>

            <strong>
                Verificación previa a la formalización
            </strong>

            <p>
                La selección del candidato no constituye todavía una
                adopción formalizada. Antes de continuar deberán
                verificarse los documentos requeridos.
            </p>

        </div>

    </section>



    <section class="bloque-seccion">

        <div class="titulo-seccion">

            <span class="numero-seccion">
                1
            </span>

            <div>

                <h2>
                    Datos del candidato
                </h2>

                <p>
                    Información de referencia de la persona seleccionada.
                </p>

            </div>

        </div>


        <div class="grid-datos">

            <div class="dato">

                <span>
                    Nombre completo
                </span>

                <strong>
                    <?php echo $candidato['nombre']; ?>
                </strong>

            </div>


            <div class="dato">

                <span>
                    Teléfono
                </span>

                <strong>
                    <?php echo $candidato['telefono']; ?>
                </strong>

            </div>


            <div class="dato">

                <span>
                    Correo electrónico
                </span>

                <strong>
                    <?php echo $candidato['correo']; ?>
                </strong>

            </div>


            <div class="dato">

                <span>
                    Municipio y estado
                </span>

                <strong>
                    <?php echo $candidato['municipio']; ?>,
                    <?php echo $candidato['estado']; ?>
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
                    Verificación documental
                </h2>

                <p>
                    Revisa los documentos requeridos para continuar
                    con el proceso de adopción.
                </p>

            </div>

        </div>



        <article class="documento">

            <div class="cabecera-documento">

                <div class="icono-documento">
                    🪪
                </div>

                <div>

                    <h3>
                        Identificación oficial (INE)
                    </h3>

                    <p>
                        Debe encontrarse vigente y corresponder
                        a la persona seleccionada.
                    </p>

                </div>

                <span class="requerido">
                    Requerido
                </span>

            </div>


            <div class="contenido-documento">


                <div class="campo-archivo">

                    <label for="ine">
                        Documento presentado
                    </label>

                    <input
                        type="file"
                        id="ine"
                        name="ine"
                        accept=".pdf,.jpg,.jpeg,.png"
                    >

                    <small>
                        Primera versión visual. El archivo todavía
                        no se almacenará.
                    </small>

                </div>


                <div class="verificaciones-documento">

                    <label class="check-item">

                        <input
                            type="checkbox"
                            name="ine_presentada"
                        >

                        <span>
                            INE presentada
                        </span>

                    </label>


                    <label class="check-item">

                        <input
                            type="checkbox"
                            name="ine_vigente"
                        >

                        <span>
                            INE vigente
                        </span>

                    </label>


                    <label class="check-item">

                        <input
                            type="checkbox"
                            name="ine_coincide"
                        >

                        <span>
                            Los datos corresponden al candidato
                        </span>

                    </label>

                </div>

            </div>

        </article>




        <article class="documento">

            <div class="cabecera-documento">

                <div class="icono-documento">
                    🏠
                </div>

                <div>

                    <h3>
                        Comprobante de domicilio
                    </h3>

                    <p>
                        El comprobante deberá tener una antigüedad
                        no mayor a 2 meses.
                    </p>

                </div>

                <span class="requerido">
                    Requerido
                </span>

            </div>


            <div class="contenido-documento">


                <div class="campo-archivo">

                    <label for="comprobante">
                        Documento presentado
                    </label>

                    <input
                        type="file"
                        id="comprobante"
                        name="comprobante"
                        accept=".pdf,.jpg,.jpeg,.png"
                    >

                    <small>
                        Primera versión visual. El archivo todavía
                        no se almacenará.
                    </small>

                </div>


                <div class="verificaciones-documento">

                    <label class="check-item">

                        <input
                            type="checkbox"
                            name="comprobante_presentado"
                        >

                        <span>
                            Comprobante presentado
                        </span>

                    </label>


                    <label class="check-item">

                        <input
                            type="checkbox"
                            name="comprobante_vigente"
                        >

                        <span>
                            Antigüedad no mayor a 2 meses
                        </span>

                    </label>


                    <label class="check-item">

                        <input
                            type="checkbox"
                            name="domicilio_coincide"
                        >

                        <span>
                            Domicilio consistente con la solicitud
                        </span>

                    </label>

                </div>

            </div>

        </article>


    </section>



    <section class="bloque-resultado">

        <div class="cabecera-resultado">

            <div class="icono-resultado">
                ✓
            </div>

            <div>

                <span class="mini-etiqueta">
                    Uso interno
                </span>

                <h2>
                    Resultado de la verificación
                </h2>

                <p>
                    Registra si el candidato puede continuar
                    a la formalización de la adopción.
                </p>

            </div>

        </div>


        <form action="#" method="post">


            <div class="campo-formulario">

                <label>
                    Resultado
                    <span class="obligatorio">*</span>
                </label>


                <div class="opciones-resultado">


                    <label class="opcion-resultado opcion-satisfactoria">

                        <input
                            type="radio"
                            name="resultado"
                            value="satisfactoria"
                        >

                        <span class="radio-visual"></span>

                        <div>

                            <strong>
                                Verificación satisfactoria
                            </strong>

                            <small>
                                La documentación cumple con los
                                requisitos y el candidato puede continuar.
                            </small>

                        </div>

                    </label>



                    <label class="opcion-resultado opcion-no-procede">

                        <input
                            type="radio"
                            name="resultado"
                            value="no_procede"
                        >

                        <span class="radio-visual"></span>

                        <div>

                            <strong>
                                No procede
                            </strong>

                            <small>
                                La verificación presenta una situación
                                que impide continuar con este candidato.
                            </small>

                        </div>

                    </label>


                </div>

            </div>




            <div class="campo-formulario">

                <label for="motivo">
                    Motivo por el que no procede
                </label>

                <select
                    id="motivo"
                    name="motivo"
                >

                    <option value="">
                        Seleccionar únicamente cuando la verificación no proceda
                    </option>

                    <option>
                        No presentó identificación oficial
                    </option>

                    <option>
                        Identificación oficial no vigente
                    </option>

                    <option>
                        Datos de identificación inconsistentes
                    </option>

                    <option>
                        No presentó comprobante de domicilio
                    </option>

                    <option>
                        Comprobante de domicilio con antigüedad mayor a 2 meses
                    </option>

                    <option>
                        Domicilio inconsistente con la solicitud
                    </option>

                    <option>
                        Información o documentación inconsistente
                    </option>

                    <option>
                        El candidato decidió no continuar
                    </option>

                    <option>
                        Otro motivo
                    </option>

                </select>

            </div>



            <div class="campo-formulario">

                <label for="observaciones">
                    Observaciones de la verificación
                </label>

                <textarea
                    id="observaciones"
                    name="observaciones"
                    rows="5"
                    placeholder="Registrar observaciones relevantes sobre la documentación o el proceso de verificación..."
                ></textarea>

            </div>



            <div class="nota-importante">

                <strong>
                    Importante:
                </strong>

                si el candidato seleccionado no supera la verificación,
                la mascota no deberá regresar automáticamente a recepción
                de nuevas solicitudes.

                El personal podrá volver a los
                <strong>
                    candidatos viables restantes
                </strong>
                y seleccionar a otra persona.

            </div>



            <div class="acciones-formulario">

                <a
                    href="comparar_candidatos.php"
                    class="btn-secundario"
                >
                    Volver
                </a>


                <button
                    type="button"
                    class="btn-continuar"
                >
                    Guardar y continuar
                </button>

            </div>


        </form>

    </section>




    <section class="siguiente-paso">

        <div class="siguiente-icono">
            →
        </div>

        <div>

            <strong>
                ¿Qué sigue?
            </strong>

            <p>
                Si la verificación es satisfactoria, el proceso
                continuará a la formalización de la adopción.
                En esa etapa se registrarán los documentos y
                condiciones correspondientes a la entrega.
            </p>

        </div>

    </section>



    <section class="nota-version">

        <strong>
            Primera versión visual.
        </strong>

        La validación, almacenamiento de documentos y reglas
        automáticas se implementarán posteriormente con MySQL
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