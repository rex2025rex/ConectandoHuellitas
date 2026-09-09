<?php


$folioAntecedente = 'MA-2026-0004';
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar antecedente | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/registrar_antecedente.css">

</head>

<body>

<header class="header-principal">

    <div class="header-contenedor">

        <img
            src="../img/logo-header.png?v=12"
            alt="Conectando Huellitas"
            class="logo-header"
        >

        <nav class="menu-principal">

            <a href="../../index.php">Inicio</a>

            <a href="../../portal/quienes_somos.php">
                Quiénes somos
            </a>

            <a href="../../portal/contacto.php">
                Contacto
            </a>

            <a href="../usuarios/login.php" class="btn-login">
                Iniciar sesión
            </a>

        </nav>

    </div>

</header>


<main class="contenedor-principal">



    <a href="malos_adoptantes.php" class="volver">
        ← Volver al Registro de Malos Adoptantes
    </a>


  

    <section class="encabezado-pagina">

        <span class="etiqueta-modulo">
            Adopciones
        </span>

        <h1>Registrar antecedente</h1>

        <p>
            Registra un antecedente documentado para incorporarlo al
            Registro de Malos Adoptantes.
        </p>

    </section>


  

    <section class="barra-folio">

        <div>
            <span>FOLIO DEL ANTECEDENTE</span>
            <strong><?php echo $folioAntecedente; ?></strong>
        </div>

        <div>
            <span>TIPO DE REGISTRO</span>
            <strong>Antecedente</strong>
        </div>

        <div>
            <span>ESTATUS INICIAL</span>
            <strong class="estado-revision">En revisión</strong>
        </div>

    </section>


   

    <section class="aviso-importante">

        <div class="aviso-icono">!</div>

        <div>

            <strong>
                Registro de uso interno
            </strong>

            <p>
                La incorporación de una persona a este registro deberá
                sustentarse en hechos y evidencias. Una devolución,
                rechazo de solicitud o situación desfavorable no constituye
                por sí misma motivo suficiente para clasificar a una persona
                como mal adoptante.
            </p>

        </div>

    </section>


    <form action="#" method="post" enctype="multipart/form-data">



        <section class="seccion-formulario">

            <div class="titulo-seccion">

                <span class="numero">1</span>

                <div>
                    <h2>Origen del antecedente</h2>
                    <p>
                        Indica si la persona ya forma parte de un proceso
                        de adopción registrado en Conectando Huellitas.
                    </p>
                </div>

            </div>


            <div class="opciones-origen">

                <label class="tarjeta-opcion">

                    <input
                        type="radio"
                        name="origen"
                        value="adoptante"
                    >

                    <div>

                        <strong>
                            Adoptante registrado en el sistema
                        </strong>

                        <span>
                            La persona realizó una adopción mediante
                            Conectando Huellitas y posteriormente se
                            documentó un antecedente.
                        </span>

                    </div>

                </label>


                <label class="tarjeta-opcion">

                    <input
                        type="radio"
                        name="origen"
                        value="externo"
                    >

                    <div>

                        <strong>
                            Persona con antecedente externo
                        </strong>

                        <span>
                            El refugio conoce un antecedente documentado
                            de una persona que no cuenta con una adopción
                            registrada en el sistema.
                        </span>

                    </div>

                </label>

            </div>


            <div class="nota-logica">

                <strong>Funcionamiento posterior:</strong>

                si se selecciona un adoptante registrado, el sistema
                recuperará automáticamente sus datos personales,
                identificación, adopción y mascota relacionada.

            </div>

        </section>



        <section class="seccion-formulario">

            <div class="titulo-seccion">

                <span class="numero">2</span>

                <div>

                    <h2>
                        Vinculación con una adopción
                    </h2>

                    <p>
                        Esta información aplicará cuando el antecedente
                        corresponda a un adoptante registrado.
                    </p>

                </div>

            </div>


            <div class="grid-2">

                <div class="campo">

                    <label>
                        Buscar adoptante registrado
                    </label>

                    <input
                        type="text"
                        placeholder="Nombre, folio de adopción o folio de solicitud"
                    >

                </div>


                <div class="campo boton-campo">

                    <label>&nbsp;</label>

                    <button
                        type="button"
                        class="btn-buscar"
                    >
                        Buscar adoptante
                    </button>

                </div>

            </div>


            <div class="adoptante-ejemplo">

                <div class="icono-persona">
                    👤
                </div>

                <div class="datos-adoptante">

                    <span>
                        EJEMPLO DE INFORMACIÓN RECUPERADA
                    </span>

                    <strong>
                        María López García
                    </strong>

                    <small>
                        Folio adopción: ADO-2026-0001
                    </small>

                </div>


                <div class="datos-mascota">

                    <span>
                        MASCOTA RELACIONADA
                    </span>

                    <strong>
                        Luna
                    </strong>

                    <small>
                        Clave: 01-P-L-0001
                    </small>

                </div>

            </div>


            <div class="nota-visual">

                Este bloque es únicamente demostrativo. 

            </div>

        </section>



        <section class="seccion-formulario">

            <div class="titulo-seccion">

                <span class="numero">3</span>

                <div>

                    <h2>
                        Identificación de la persona
                    </h2>

                    <p>
                        Datos utilizados para identificar correctamente
                        a la persona y disminuir el riesgo de homónimos.
                    </p>

                </div>

            </div>


            <div class="grid-2">

                <div class="campo">

                    <label>
                        Nombre completo <b>*</b>
                    </label>

                    <input
                        type="text"
                        placeholder="Nombre completo"
                    >

                </div>


                <div class="campo">

                    <label>
                        Fecha de nacimiento
                    </label>

                    <input type="date">

                </div>


                <div class="campo">

                    <label>
                        Teléfono
                    </label>

                    <input
                        type="tel"
                        placeholder="Número telefónico"
                    >

                </div>


                <div class="campo">

                    <label>
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        placeholder="correo@ejemplo.com"
                    >

                </div>


                <div class="campo campo-completo">

                    <label>
                        Domicilio
                    </label>

                    <input
                        type="text"
                        placeholder="Calle, número, colonia o referencia registrada"
                    >

                </div>


                <div class="campo">

                    <label>
                        Municipio
                    </label>

                    <input
                        type="text"
                        placeholder="Ej. Xalapa"
                    >

                </div>


                <div class="campo">

                    <label>
                        Estado
                    </label>

                    <input
                        type="text"
                        value="Veracruz"
                    >

                </div>

            </div>

        </section>



        <section class="seccion-formulario">

            <div class="titulo-seccion">

                <span class="numero">4</span>

                <div>

                    <h2>
                        Elementos de identificación
                    </h2>

                    <p>
                        Evidencias de identidad para apoyar la correcta
                        identificación de la persona.
                    </p>

                </div>

            </div>


            <div class="aviso-restringido">

                🔒

                <div>

                    <strong>
                        Información de acceso restringido
                    </strong>

                    <p>
                        La fotografía de la persona y la identificación
                        oficial no deberán mostrarse en consultas públicas.
                    </p>

                </div>

            </div>


            <div class="grid-documentos">


                <!-- FOTO -->

                <div class="documento-card">

                    <div class="documento-cabecera">

                        <span class="documento-icono">
                            📷
                        </span>

                        <div>

                            <strong>
                                Fotografía de la persona
                            </strong>

                            <small>
                                Apoya la identificación visual.
                            </small>

                        </div>

                    </div>


                    <label>
                        Fotografía
                    </label>

                    <input type="file" accept="image/*">


                    <p class="nota-archivo">
                        Primera versión visual. El archivo aún no será almacenado.
                    </p>

                </div>



                <!-- INE -->

                <div class="documento-card">

                    <div class="documento-cabecera">

                        <span class="documento-icono">
                            🪪
                        </span>

                        <div>

                            <strong>
                                Identificación oficial (INE)
                            </strong>

                            <small>
                                Documento utilizado para corroborar identidad.
                            </small>

                        </div>

                    </div>


                    <label>
                        Imagen o archivo de la INE
                    </label>

                    <input
                        type="file"
                        accept="image/*,.pdf"
                    >


                    <div class="verificaciones">

                        <label>
                            <input type="checkbox">
                            INE presentada
                        </label>

                        <label>
                            <input type="checkbox">
                            Datos legibles
                        </label>

                        <label>
                            <input type="checkbox">
                            Identidad corroborada
                        </label>

                    </div>

                </div>

            </div>


            <div class="nota-logica">

                En la versión funcional, estos elementos deberán almacenarse
                con acceso restringido y servirán como apoyo para confirmar
                coincidencias, evitando depender únicamente del nombre.

            </div>

        </section>



     
        <section class="seccion-formulario">

            <div class="titulo-seccion">

                <span class="numero">5</span>

                <div>

                    <h2>
                        Información del antecedente
                    </h2>

                    <p>
                        Documenta el hecho que origina la incorporación
                        de la persona al registro.
                    </p>

                </div>

            </div>


            <div class="grid-2">

                <div class="campo">

                    <label>
                        Fecha del incidente <b>*</b>
                    </label>

                    <input type="date">

                </div>


                <div class="campo">

                    <label>
                        Forma en que se conoció el caso <b>*</b>
                    </label>

                    <select>

                        <option value="">
                            Seleccionar
                        </option>

                        <option>
                            Seguimiento postadopción
                        </option>

                        <option>
                            Visita al domicilio
                        </option>

                        <option>
                            Reporte recibido por el refugio
                        </option>

                        <option>
                            Animal recuperado por el refugio
                        </option>

                        <option>
                            Información proporcionada por otro refugio
                        </option>

                        <option>
                            Asociación o rescatista
                        </option>

                        <option>
                            Otro
                        </option>

                    </select>

                </div>


                <div class="campo campo-completo">

                    <label>
                        Motivo del antecedente <b>*</b>
                    </label>

                    <select>

                        <option value="">
                            Seleccionar motivo
                        </option>

                        <option>
                            Negligencia grave
                        </option>

                        <option>
                            Maltrato comprobado
                        </option>

                        <option>
                            Abandono del animal
                        </option>

                        <option>
                            Incumplimiento grave de condiciones de adopción
                        </option>

                        <option>
                            Entrega o cesión no autorizada del animal
                        </option>

                        <option>
                            Condiciones que pusieron en riesgo al animal
                        </option>

                        <option>
                            Otro antecedente documentado
                        </option>

                    </select>

                </div>


                <div class="campo campo-completo">

                    <label>
                        Descripción detallada del antecedente <b>*</b>
                    </label>

                    <textarea
                        rows="6"
                        placeholder="Describe objetivamente los hechos, circunstancias y elementos relevantes del caso..."
                    ></textarea>

                </div>

            </div>

        </section>




        <section class="seccion-formulario">

            <div class="titulo-seccion">

                <span class="numero">6</span>

                <div>

                    <h2>
                        Evidencias del antecedente
                    </h2>

                    <p>
                        Registra los elementos que respaldan el caso.
                    </p>

                </div>

            </div>


            <div class="grid-2">

                <div class="campo">

                    <label>
                        Fotografías
                    </label>

                    <input
                        type="file"
                        accept="image/*"
                        multiple
                    >

                </div>


                <div class="campo">

                    <label>
                        Documentos u otras evidencias
                    </label>

                    <input
                        type="file"
                        accept="image/*,.pdf"
                        multiple
                    >

                </div>


                <div class="campo campo-completo">

                    <label>
                        Descripción de las evidencias
                    </label>

                    <textarea
                        rows="4"
                        placeholder="Describe brevemente las evidencias que respaldan el antecedente..."
                    ></textarea>

                </div>

            </div>


            <div class="nota-visual">

                Las evidencias serán almacenadas y protegidas posteriormente
                mediante la lógica del sistema y MySQL.

            </div>

        </section>


        <section class="seccion-formulario">

            <div class="titulo-seccion">

                <span class="numero">7</span>

                <div>

                    <h2>
                        Valoración interna
                    </h2>

                    <p>
                        Registra la conclusión del personal responsable
                        después de revisar el caso.
                    </p>

                </div>

            </div>


            <div class="campo campo-completo">

                <label>
                    Observaciones internas
                </label>

                <textarea
                    rows="5"
                    placeholder="Registrar observaciones, aclaraciones o información adicional..."
                ></textarea>

            </div>


            <div class="resultado-registro">

                <span class="mini-etiqueta">
                    Resultado
                </span>

                <h3>
                    Estatus del antecedente
                </h3>


                <div class="opciones-resultado">


                    <label class="resultado resultado-revision">

                        <input
                            type="radio"
                            name="estatus"
                            value="revision"
                        >

                        <div>

                            <strong>
                                En revisión
                            </strong>

                            <span>
                                Aún falta información o evidencia para
                                determinar si procede el registro.
                            </span>

                        </div>

                    </label>


                    <label class="resultado resultado-confirmado">

                        <input
                            type="radio"
                            name="estatus"
                            value="confirmado"
                        >

                        <div>

                            <strong>
                                Antecedente confirmado
                            </strong>

                            <span>
                                Existen elementos suficientes para
                                incorporar a la persona al registro.
                            </span>

                        </div>

                    </label>


                    <label class="resultado resultado-descartado">

                        <input
                            type="radio"
                            name="estatus"
                            value="descartado"
                        >

                        <div>

                            <strong>
                                Descartado
                            </strong>

                            <span>
                                La revisión determinó que el caso no
                                justifica su incorporación al registro.
                            </span>

                        </div>

                    </label>

                </div>

            </div>

        </section>



        <section class="confirmacion-final">

            <div class="confirmacion-cabecera">

                <span>⚠️</span>

                <div>

                    <small>
                        CONFIRMACIÓN
                    </small>

                    <h2>
                        Registro del antecedente
                    </h2>

                </div>

            </div>


            <label class="declaracion">

                <input type="checkbox">

                <span>
                    Confirmo que la información registrada corresponde
                    al caso revisado y que los datos y evidencias
                    disponibles han sido verificados antes de determinar
                    el estatus del antecedente.
                </span>

            </label>


            <div class="advertencia-final">

                <strong>Importante:</strong>

                únicamente los antecedentes con estatus
                <b>Confirmado</b> deberán producir una coincidencia
                confirmada que impida clasificar como viable una futura
                solicitud de adopción.

            </div>


            <div class="acciones-finales">

                <a
                    href="malos_adoptantes.php"
                    class="btn-cancelar"
                >
                    Cancelar
                </a>

                <button
                    type="button"
                    class="btn-guardar"
                >
                    Guardar antecedente
                </button>

            </div>

        </section>


        <div class="nota-version">

            <strong>Primera versión visual.</strong>

            La recuperación automática de adoptantes, almacenamiento de
            documentos, fotografías y evidencias, validación de identidad,
            generación del folio y consulta de coincidencias.
        </div>


    </form>

</main>


<footer class="footer-principal">

    Conectando Huellitas
    <span>•</span>
    La red que salva vidas
    <span>•</span>
    2026

</footer>

</body>
</html>