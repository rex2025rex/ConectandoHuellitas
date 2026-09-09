<?php


$nombreUsuario = 'Elizabeth Orozco';
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
        Reportar mascota perdida | Conectando Huellitas
    </title>

    <!-- CSS GENERAL -->
    <link
        rel="stylesheet"
        href="../css/sistema.css?v=12"
    >

    <!-- CSS DEL FORMULARIO -->
    <link
        rel="stylesheet"
        href="../css/reportar_perdido.css?v=1"
    >

</head>

<body class="login-body">


<?php include '../includes/header.php'; ?>


<main class="perdido-main">

    <section class="perdido-card">


        <div class="perdido-encabezado">

            <span class="perdido-etiqueta">
                MASCOTAS PERDIDAS
            </span>

            <h1>
                Reportar mascota perdida
            </h1>

            <div class="detalle-perdido">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Registra la información de la mascota extraviada para
                apoyar su búsqueda y publicación.
            </p>

        </div>



        <!-- =====================================================
             AVISO DE PRIVACIDAD
        ====================================================== -->

        <div class="aviso-privacidad-reporte">

            <div class="aviso-icono">
                ⓘ
            </div>

            <div>

                <strong>
                    Información protegida
                </strong>

                <p>
                    Los datos personales del reportante y las señas
                    particulares reservadas no se mostrarán públicamente.
                    Esta información se utilizará para apoyar la validación
                    de posibles coincidencias.
                </p>

            </div>

        </div>



        <!-- =====================================================
             FORMULARIO
        ====================================================== -->

        <form
            action="#"
            method="post"
            enctype="multipart/form-data"
            onsubmit="return false;"
        >


            <!-- =================================================
                 1. IDENTIFICACIÓN
            ================================================== -->

            <section class="perdido-seccion">

                <h2>
                    IDENTIFICACIÓN DE LA MASCOTA
                </h2>

                <div class="perdido-grid">


                    <div class="campo-perdido campo-completo">

                        <label for="fotografia">
                            Fotografía de la mascota
                            <span>*</span>
                        </label>

                        <input
                            type="file"
                            id="fotografia"
                            name="fotografia"
                            accept="image/*"
                            required
                        >

                        <small>
                            Utiliza una fotografía clara y reciente.
                        </small>

                    </div>



                    <div class="campo-perdido">

                        <label for="nombre">
                            Nombre
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Ej. Luna"
                        >

                    </div>



                    <div class="campo-perdido">

                        <label for="especie">
                            Especie
                            <span>*</span>
                        </label>

                        <select
                            id="especie"
                            name="especie"
                            required
                        >

                            <option value="">
                                Seleccionar especie
                            </option>

                            <option value="perro">
                                Perro
                            </option>

                            <option value="gato">
                                Gato
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <div class="campo-perdido">

                        <label for="raza">
                            Raza
                        </label>

                        <select
                            id="raza"
                            name="raza"
                        >

                            <option value="">
                                Seleccionar raza
                            </option>

                            <option value="mestizo">
                                Mestizo
                            </option>

                            <option value="sin_raza">
                                Sin raza definida
                            </option>

                            <option value="otra">
                                Otra
                            </option>

                        </select>

                    </div>



                    <div class="campo-perdido">

                        <label for="sexo">
                            Sexo
                            <span>*</span>
                        </label>

                        <select
                            id="sexo"
                            name="sexo"
                            required
                        >

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="macho">
                                Macho
                            </option>

                            <option value="hembra">
                                Hembra
                            </option>

                            <option value="desconocido">
                                No determinado
                            </option>

                        </select>

                    </div>



                    <div class="campo-perdido">

                        <label for="edad">
                            Edad aproximada
                        </label>

                        <input
                            type="number"
                            id="edad"
                            name="edad"
                            min="0"
                            placeholder="Ej. 3"
                        >

                    </div>



                    <div class="campo-perdido">

                        <label for="unidad_edad">
                            Unidad
                        </label>

                        <select
                            id="unidad_edad"
                            name="unidad_edad"
                        >

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="meses">
                                Meses
                            </option>

                            <option value="anos">
                                Años
                            </option>

                        </select>

                    </div>



                    <div class="campo-perdido">

                        <label for="tamano">
                            Tamaño
                            <span>*</span>
                        </label>

                        <select
                            id="tamano"
                            name="tamano"
                            required
                        >

                            <option value="">
                                Seleccionar tamaño
                            </option>

                            <option value="pequeno">
                                Pequeño
                            </option>

                            <option value="mediano">
                                Mediano
                            </option>

                            <option value="grande">
                                Grande
                            </option>

                        </select>

                    </div>



                    <div class="campo-perdido">

                        <label for="color">
                            Color(es)
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="color"
                            name="color"
                            placeholder="Ej. Café con pecho blanco"
                            required
                        >

                    </div>


                </div>

            </section>



            <!-- =================================================
                 2. DATOS DE LA PÉRDIDA
            ================================================== -->

            <section class="perdido-seccion">

                <h2>
                    DATOS DE LA PÉRDIDA
                </h2>

                <div class="perdido-grid">


                    <div class="campo-perdido">

                        <label for="fecha_perdida">
                            Fecha en que se perdió
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="fecha_perdida"
                            name="fecha_perdida"
                            required
                        >

                    </div>



                    <div class="campo-perdido">

                        <label for="estado">
                            Estado
                            <span>*</span>
                        </label>

                        <select
                            id="estado"
                            name="estado"
                            required
                        >

                            <option value="">
                                Seleccionar estado
                            </option>

                            <option value="veracruz">
                                Veracruz
                            </option>

                        </select>

                    </div>



                    <div class="campo-perdido">

                        <label for="municipio">
                            Municipio
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="municipio"
                            name="municipio"
                            placeholder="Ej. Xalapa"
                            required
                        >

                    </div>



                    <div class="campo-perdido">

                        <label for="localidad">
                            Localidad
                        </label>

                        <input
                            type="text"
                            id="localidad"
                            name="localidad"
                            placeholder="Ej. Xalapa-Enríquez"
                        >

                    </div>



                    <div class="campo-perdido">

                        <label for="colonia">
                            Colonia o zona
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="colonia"
                            name="colonia"
                            placeholder="Ej. Centro"
                            required
                        >

                    </div>



                    <div class="campo-perdido">

                        <label for="referencia">
                            Referencia aproximada
                        </label>

                        <input
                            type="text"
                            id="referencia"
                            name="referencia"
                            placeholder="Ej. Cerca del parque principal"
                        >

                    </div>



                    <div class="campo-perdido campo-completo">

                        <div class="nota-ubicacion">

                            <strong>
                                Ubicación pública
                            </strong>

                            <p>
                                Para proteger la seguridad del reportante,
                                la publicación mostrará únicamente una ubicación
                                aproximada y no una dirección particular.
                            </p>

                        </div>

                    </div>


                </div>

            </section>



            <!-- =================================================
                 3. IDENTIFICACIÓN RESERVADA
            ================================================== -->

            <section class="perdido-seccion">

                <h2>
                    INFORMACIÓN PARA IDENTIFICACIÓN
                </h2>

                <div class="perdido-grid">


                    <div class="campo-perdido campo-completo">

                        <label for="accesorios">
                            Collar, placa, ropa o accesorios
                        </label>

                        <textarea
                            id="accesorios"
                            name="accesorios"
                            placeholder="Ej. Collar rojo con placa metálica"
                        ></textarea>

                    </div>



                    <div class="campo-perdido campo-completo">

                        <label for="senas_particulares">
                            Señas particulares reservadas
                        </label>

                        <textarea
                            id="senas_particulares"
                            name="senas_particulares"
                            placeholder="Ej. Cicatriz, manchas, características especiales..."
                        ></textarea>

                        <small class="texto-reservado">
                            Esta información no se mostrará en el cartel ni
                            en la publicación pública.
                        </small>

                    </div>



                    <div class="campo-perdido campo-completo">

                        <label for="observaciones">
                            Observaciones adicionales
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Registra información adicional que pueda ayudar en la búsqueda"
                        ></textarea>

                    </div>


                </div>

            </section>



            <!-- =================================================
                 4. DATOS DEL REPORTE
            ================================================== -->

            <section class="perdido-seccion">

                <h2>
                    DATOS DEL REPORTE
                </h2>

                <div class="usuario-reporte">

                    <div>

                        <span>
                            Reportado por
                        </span>

                        <strong>
                            <?php echo htmlspecialchars($nombreUsuario); ?>
                        </strong>

                    </div>

                    <div>

                        <span>
                            Tipo de reporte
                        </span>

                        <strong class="tipo-reporte">
                            Mascota perdida
                        </strong>

                    </div>

                </div>

                <div class="nota-contacto">

                    El contacto con posibles personas que tengan información
                    sobre la mascota será gestionado mediante Conectando Huellitas.
                    Los datos personales del reportante no se mostrarán públicamente.

                </div>

            </section>



            <!-- =================================================
                 5. CARTEL AUTOMÁTICO
            ================================================== -->

            <section class="cartel-info">

                <div class="cartel-icono">
                    📄
                </div>

                <div>

                    <strong>
                        Cartel automático
                    </strong>

                    <p>
                        Al registrar el reporte, el sistema podrá generar
                        posteriormente un cartel para imprimir o compartir
                        con fotografía, sexo, tamaño, colores, fecha,
                        ubicación aproximada y estatus de la mascota.
                    </p>

                </div>

            </section>



            <!-- =================================================
                 BOTONES
            ================================================== -->

            <div class="perdido-botones">


                <button
                    type="button"
                    class="btn-guardar-perdido"
                >
                    🐾 Guardar reporte
                </button>


                <button
                    type="reset"
                    class="btn-cancelar-perdido"
                >
                    Cancelar
                </button>


                <a
                    href="../panel.php"
                    class="btn-regresar-perdido"
                >
                    ← Regresar al panel
                </a>


            </div>


        </form>


    </section>

</main>


<?php include '../includes/footer.php'; ?>


</body>

</html>