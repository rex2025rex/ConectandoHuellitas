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
        Reportar mascota encontrada | Conectando Huellitas
    </title>

    <!-- CSS GENERAL -->
    <link
        rel="stylesheet"
        href="../css/sistema.css?v=12"
    >

    <!-- CSS DEL FORMULARIO -->
    <link
        rel="stylesheet"
        href="../css/reportar_encontrado.css?v=1"
    >

</head>

<body class="login-body">


<?php include '../includes/header.php'; ?>


<main class="encontrado-main">

    <section class="encontrado-card">



        <div class="encontrado-encabezado">

            <span class="encontrado-etiqueta">
                MASCOTAS ENCONTRADAS
            </span>

            <h1>
                Reportar mascota encontrada
            </h1>

            <div class="detalle-encontrado">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Registra la información de la mascota localizada para
                apoyar su identificación y posible reunificación.
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
                    de posibles propietarios.
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

            <section class="encontrado-seccion">

                <h2>
                    IDENTIFICACIÓN DE LA MASCOTA
                </h2>

                <div class="encontrado-grid">


                    <div class="campo-encontrado campo-completo">

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
                            Utiliza una fotografía clara de la mascota encontrada.
                        </small>

                    </div>



                    <div class="campo-encontrado">

                        <label for="nombre_temporal">
                            Nombre temporal
                        </label>

                        <input
                            type="text"
                            id="nombre_temporal"
                            name="nombre_temporal"
                            placeholder="Ej. Pelusa"
                        >

                        <small>
                            Solo si deseas identificarla temporalmente.
                        </small>

                    </div>



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

                        <label for="edad">
                            Edad aproximada
                        </label>

                        <input
                            type="number"
                            id="edad"
                            name="edad"
                            min="0"
                            placeholder="Ej. 2"
                        >

                    </div>



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

                        <label for="color">
                            Color(es)
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="color"
                            name="color"
                            placeholder="Ej. Negro con pecho blanco"
                            required
                        >

                    </div>


                </div>

            </section>



            <!-- =================================================
                 2. DATOS DEL HALLAZGO
            ================================================== -->

            <section class="encontrado-seccion">

                <h2>
                    DATOS DEL HALLAZGO
                </h2>

                <div class="encontrado-grid">


                    <div class="campo-encontrado">

                        <label for="fecha_hallazgo">
                            Fecha en que fue encontrada
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="fecha_hallazgo"
                            name="fecha_hallazgo"
                            required
                        >

                    </div>



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

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



                    <div class="campo-encontrado">

                        <label for="referencia">
                            Referencia aproximada
                        </label>

                        <input
                            type="text"
                            id="referencia"
                            name="referencia"
                            placeholder="Ej. Frente al parque principal"
                        >

                    </div>



                    <div class="campo-encontrado campo-completo">

                        <div class="nota-ubicacion">

                            <strong>
                                Ubicación pública
                            </strong>

                            <p>
                                La publicación mostrará únicamente una ubicación
                                aproximada del hallazgo y no una dirección particular.
                            </p>

                        </div>

                    </div>


                </div>

            </section>



            <!-- =================================================
                 3. CONDICIÓN Y RESGUARDO
            ================================================== -->

            <section class="encontrado-seccion">

                <h2>
                    CONDICIÓN Y RESGUARDO
                </h2>

                <div class="encontrado-grid">


                    <div class="campo-encontrado">

                        <label for="condicion">
                            Condición al momento del hallazgo
                            <span>*</span>
                        </label>

                        <select
                            id="condicion"
                            name="condicion"
                            required
                        >

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="aparentemente_sano">
                                Aparentemente sano
                            </option>

                            <option value="lesionado">
                                Lesionado
                            </option>

                            <option value="enfermo">
                                Enfermo
                            </option>

                            <option value="grave">
                                Estado grave
                            </option>

                            <option value="desconocido">
                                Por determinar
                            </option>

                        </select>

                    </div>



                    <div class="campo-encontrado">

                        <label for="resguardo">
                            Situación actual de la mascota
                            <span>*</span>
                        </label>

                        <select
                            id="resguardo"
                            name="resguardo"
                            required
                        >

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="reportante">
                                Permanece bajo resguardo del reportante
                            </option>

                            <option value="refugio">
                                Fue entregada a un refugio
                            </option>

                            <option value="veterinaria">
                                Fue trasladada a una veterinaria
                            </option>

                            <option value="hogar_temporal">
                                Se encuentra en hogar temporal
                            </option>

                            <option value="sin_resguardo">
                                Ya no se encuentra bajo resguardo
                            </option>

                            <option value="otro">
                                Otra situación
                            </option>

                        </select>

                    </div>



                    <div class="campo-encontrado campo-completo">

                        <label for="detalle_resguardo">
                            Información adicional sobre el resguardo
                        </label>

                        <textarea
                            id="detalle_resguardo"
                            name="detalle_resguardo"
                            placeholder="Ej. La mascota permanece en un domicilio temporal mientras se localiza a su propietario"
                        ></textarea>

                        <small>
                            No registres aquí una dirección particular que deba
                            mostrarse públicamente.
                        </small>

                    </div>


                </div>

            </section>



            <!-- =================================================
                 4. IDENTIFICACIÓN RESERVADA
            ================================================== -->

            <section class="encontrado-seccion">

                <h2>
                    INFORMACIÓN PARA IDENTIFICACIÓN
                </h2>

                <div class="encontrado-grid">


                    <div class="campo-encontrado campo-completo">

                        <label for="accesorios">
                            Collar, placa, ropa o accesorios
                        </label>

                        <textarea
                            id="accesorios"
                            name="accesorios"
                            placeholder="Ej. Collar azul con placa metálica"
                        ></textarea>

                    </div>



                    <div class="campo-encontrado campo-completo">

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



                    <div class="campo-encontrado campo-completo">

                        <label for="observaciones">
                            Observaciones adicionales
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Registra información adicional que pueda ayudar a identificar a la mascota o a su propietario"
                        ></textarea>

                    </div>


                </div>

            </section>



            <!-- =================================================
                 5. DATOS DEL REPORTE
            ================================================== -->

            <section class="encontrado-seccion">

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

                        <strong class="tipo-reporte-encontrado">
                            Mascota encontrada
                        </strong>

                    </div>

                </div>


                <div class="nota-contacto">

                    El contacto con posibles propietarios será gestionado
                    mediante Conectando Huellitas. Los datos personales del
                    reportante no se mostrarán públicamente.

                </div>

            </section>



            <!-- =================================================
                 6. CARTEL AUTOMÁTICO
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

            <div class="encontrado-botones">


                <button
                    type="button"
                    class="btn-guardar-encontrado"
                >
                    🐾 Guardar reporte
                </button>


                <button
                    type="reset"
                    class="btn-cancelar-encontrado"
                >
                    Cancelar
                </button>


                <a
                    href="../panel.php"
                    class="btn-regresar-encontrado"
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