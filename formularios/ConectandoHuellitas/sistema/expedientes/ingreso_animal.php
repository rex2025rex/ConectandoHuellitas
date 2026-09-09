<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Ingreso de animal | Conectando Huellitas
    </title>

   
    <link rel="stylesheet"
          href="../css/sistema.css?v=12">

    
    <link rel="stylesheet"
          href="../css/animales.css?v=1">

</head>


<body class="login-body">


<?php include '../includes/header.php'; ?>




<main class="animal-main">

    <section class="animal-card">



        <div class="animal-encabezado">

            <h1>
                Ingreso de animal al refugio
            </h1>


            <div class="detalle-animal">

                <span></span>
                <strong>♥</strong>
                <span></span>

            </div>


            <p>
                Registro inicial y creación del expediente digital
            </p>

        </div>



        <form
            action="#"
            method="post"
            enctype="multipart/form-data"
            onsubmit="return false;">




            <div class="animal-seccion">

                <h2>
                    IDENTIFICACIÓN DEL ANIMAL
                </h2>


                <div class="animal-grid">


                    <!-- CLAVE AUTOMÁTICA -->

                    <div class="campo-animal campo-completo">

                        <div class="aviso-clave-animal">

                            <strong>
                                Clave única del animal
                            </strong>

                            <span>
                                Se generará automáticamente al registrar el animal.
                                Ejemplo: 01-P-L-0001
                            </span>

                        </div>

                    </div>



                    <!-- FOTO -->

                    <div class="campo-animal campo-completo">

                        <label for="fotografia">

                            Fotografía del animal
                            <span>*</span>

                        </label>

                        <input
                            type="file"
                            id="fotografia"
                            name="fotografia"
                            accept="image/*"
                            required>

                    </div>



                    <!-- NOMBRE -->

                    <div class="campo-animal">

                        <label for="nombre">
                            Nombre
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Si aún no tiene nombre, dejar vacío">

                    </div>



                    <!-- ESPECIE -->

                    <div class="campo-animal">

                        <label for="especie">

                            Especie
                            <span>*</span>

                        </label>

                        <select
                            id="especie"
                            name="especie"
                            required>

                            <option value="">
                                Seleccionar especie
                            </option>

                            <option value="perro">
                                Perro
                            </option>

                            <option value="gato">
                                Gato
                            </option>

                            <option value="huron">
                                Hurón
                            </option>

                            <option value="conejo">
                                Conejo
                            </option>

                            <option value="tlacuache">
                                Tlacuache
                            </option>

                        </select>

                    </div>



                    <!-- RAZA -->

                    <div class="campo-animal">

                        <label for="raza">
                            Raza
                        </label>

                        <select
                            id="raza"
                            name="raza">

                            <option value="">
                                Seleccionar raza
                            </option>

                            <option value="mestizo">
                                Mestizo
                            </option>

                            <option value="sin_raza">
                                Sin raza definida
                            </option>

                            <option value="labrador">
                                Labrador Retriever
                            </option>

                            <option value="pastor">
                                Pastor Alemán
                            </option>

                            <option value="siames">
                                Siamés
                            </option>

                        </select>

                    </div>



                    <!-- SEXO -->

                    <div class="campo-animal">

                        <label for="sexo">

                            Sexo
                            <span>*</span>

                        </label>

                        <select
                            id="sexo"
                            name="sexo"
                            required>

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



                    <!-- EDAD -->

                    <div class="campo-animal">

                        <label for="edad">
                            Edad aproximada
                        </label>

                        <input
                            type="number"
                            id="edad"
                            name="edad"
                            min="0"
                            placeholder="Ej. 3">

                    </div>



                    <!-- UNIDAD EDAD -->

                    <div class="campo-animal">

                        <label for="unidad_edad">
                            Unidad
                        </label>

                        <select
                            id="unidad_edad"
                            name="unidad_edad">

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="dias">
                                Días
                            </option>

                            <option value="semanas">
                                Semanas
                            </option>

                            <option value="meses">
                                Meses
                            </option>

                            <option value="anos">
                                Años
                            </option>

                        </select>

                    </div>



                    <!-- TAMAÑO -->

                    <div class="campo-animal">

                        <label for="tamano">

                            Tamaño
                            <span>*</span>

                        </label>

                        <select
                            id="tamano"
                            name="tamano"
                            required>

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



                    <!-- COLOR -->

                    <div class="campo-animal">

                        <label for="color">

                            Color(es)
                            <span>*</span>

                        </label>

                        <input
                            type="text"
                            id="color"
                            name="color"
                            placeholder="Ej. Café con pecho blanco"
                            required>

                    </div>

                </div>

            </div>




            <div class="animal-seccion">

                <h2>
                    DATOS DE INGRESO
                </h2>


                <div class="animal-grid">


                    <!-- FECHA -->

                    <div class="campo-animal">

                        <label for="fecha_ingreso">

                            Fecha de ingreso
                            <span>*</span>

                        </label>

                        <input
                            type="date"
                            id="fecha_ingreso"
                            name="fecha_ingreso"
                            required>

                    </div>



                    <!-- TIPO INGRESO -->

                    <div class="campo-animal">

                        <label for="tipo_ingreso">

                            Tipo de ingreso
                            <span>*</span>

                        </label>

                        <select
                            id="tipo_ingreso"
                            name="tipo_ingreso"
                            required>

                            <option value="">
                                Seleccionar
                            </option>

                            <option value="rescate">
                                Rescate directo
                            </option>

                            <option value="ciudadano">
                                Entregado por ciudadano
                            </option>

                            <option value="encontrado">
                                Animal encontrado
                            </option>

                            <option value="traslado">
                                Traslado de otro refugio
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <!-- PERSONA -->

                    <div class="campo-animal">

                        <label for="persona_entrega">
                            Persona que rescata o entrega
                        </label>

                        <input
                            type="text"
                            id="persona_entrega"
                            name="persona_entrega"
                            placeholder="Nombre de la persona">

                    </div>



                    <!-- TELÉFONO -->

                    <div class="campo-animal">

                        <label for="telefono_entrega">
                            Teléfono de contacto
                        </label>

                        <input
                            type="tel"
                            id="telefono_entrega"
                            name="telefono_entrega"
                            placeholder="228 000 0000">

                    </div>



                    <!-- DESTINO INICIAL -->

                    <div class="campo-animal">

                        <label for="destino_inicial">

                            Destino inicial
                            <span>*</span>

                        </label>

                        <select
                            id="destino_inicial"
                            name="destino_inicial"
                            required>

                            <option value="refugio">
                                Refugio
                            </option>

                            <option value="veterinaria">
                                Clínica veterinaria
                            </option>

                            <option value="hogar_temporal">
                                Hogar temporal
                            </option>

                            <option value="otro">
                                Otro
                            </option>

                        </select>

                    </div>



                    <!-- ESTATUS -->

                    <div class="campo-animal">

                        <label for="estatus">

                            Estatus inicial
                            <span>*</span>

                        </label>

                        <select
                            id="estatus"
                            name="estatus"
                            required>

                            <option value="valoracion">
                                En valoración
                            </option>

                            <option value="tratamiento">
                                En tratamiento
                            </option>

                            <option value="resguardo">
                                En resguardo
                            </option>

                            <option value="disponible">
                                Disponible para adopción
                            </option>

                        </select>

                    </div>

                </div>

            </div>




            <div class="animal-seccion">

                <h2>
                    LUGAR DONDE FUE ENCONTRADO
                </h2>


                <div class="animal-grid">


                    <!-- ESTADO -->

                    <div class="campo-animal">

                        <label for="estado">
                            Estado
                        </label>

                        <select
                            id="estado"
                            name="estado">

                            <option value="">
                                Seleccionar estado
                            </option>

                            <option value="veracruz">
                                Veracruz
                            </option>

                        </select>

                    </div>



                    <!-- MUNICIPIO -->

                    <div class="campo-animal">

                        <label for="municipio">
                            Municipio
                        </label>

                        <input
                            type="text"
                            id="municipio"
                            name="municipio"
                            placeholder="Ej. Xalapa">

                    </div>



                    <!-- LOCALIDAD -->

                    <div class="campo-animal">

                        <label for="localidad">
                            Localidad
                        </label>

                        <input
                            type="text"
                            id="localidad"
                            name="localidad"
                            placeholder="Ej. Xalapa-Enríquez">

                    </div>



                    <!-- COLONIA -->

                    <div class="campo-animal">

                        <label for="colonia">
                            Colonia
                        </label>

                        <input
                            type="text"
                            id="colonia"
                            name="colonia"
                            placeholder="Nombre de la colonia">

                    </div>



                    <!-- CALLE -->

                    <div class="campo-animal">

                        <label for="calle">
                            Calle
                        </label>

                        <input
                            type="text"
                            id="calle"
                            name="calle"
                            placeholder="Calle donde fue encontrado">

                    </div>



                    <!-- NÚMERO -->

                    <div class="campo-animal">

                        <label for="numero">
                            Número o altura aproximada
                        </label>

                        <input
                            type="text"
                            id="numero"
                            name="numero"
                            placeholder="Ej. Frente al número 25">

                    </div>



                    <!-- ENTRE CALLES -->

                    <div class="campo-animal campo-completo">

                        <label for="entre_calles">
                            Calles aledañas / Entre calles
                        </label>

                        <input
                            type="text"
                            id="entre_calles"
                            name="entre_calles"
                            placeholder="Ej. Entre Juárez y Clavijero">

                    </div>



                    <!-- REFERENCIAS -->

                    <div class="campo-animal campo-completo">

                        <label for="referencias">
                            Referencias del lugar
                        </label>

                        <textarea
                            id="referencias"
                            name="referencias"
                            placeholder="Ej. Frente al parque, junto a una farmacia"></textarea>

                    </div>

                </div>

            </div>



            <div class="animal-seccion">

                <h2>
                    IDENTIFICACIÓN Y CONDICIÓN AL INGRESO
                </h2>


                <div class="animal-grid">


                    <!-- SEÑAS PARTICULARES -->

                    <div class="campo-animal campo-completo">

                        <label for="senas_particulares">
                            Señas particulares
                        </label>

                        <textarea
                            id="senas_particulares"
                            name="senas_particulares"
                            placeholder="Ej. Ojo derecho verde, ojo izquierdo café; cicatriz en la oreja izquierda"></textarea>

                    </div>



                    <!-- ACCESORIOS -->

                    <div class="campo-animal campo-completo">

                        <label for="accesorios">
                            Accesorios u objetos al momento del ingreso
                        </label>

                        <textarea
                            id="accesorios"
                            name="accesorios"
                            placeholder="Ej. Collar naranja con placa metálica"></textarea>

                    </div>



                    <!-- PESO -->

                    <div class="campo-animal">

                        <label for="peso">
                            Peso aproximado
                        </label>

                        <input
                            type="number"
                            id="peso"
                            name="peso"
                            min="0"
                            step="0.01"
                            placeholder="Ej. 8.5">

                    </div>



                    <!-- CONDICIÓN -->

                    <div class="campo-animal">

                        <label for="condicion">
                            Condición general al ingreso
                        </label>

                        <select
                            id="condicion"
                            name="condicion">

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



                    <!-- OBSERVACIONES -->

                    <div class="campo-animal campo-completo">

                        <label for="observaciones">
                            Observaciones adicionales
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Registra cualquier información adicional relevante al momento del ingreso"></textarea>

                    </div>

                </div>

            </div>



            <div class="animal-botones">


                <button
                    type="button"
                    class="btn-guardar-animal">

                    🐾 Registrar animal

                </button>


                <button
                    type="reset"
                    class="btn-cancelar-animal">

                    Cancelar

                </button>


                <a href="../panel.php"
                   class="btn-regresar-animal">

                    ⌂ Regresar al panel

                </a>


            </div>


        </form>

    </section>

</main>



<?php include '../includes/footer.php'; ?>


</body>

</html>