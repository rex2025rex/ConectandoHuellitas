<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Alta de refugio | Conectando Huellitas</title>

    <!-- CSS GENERAL DEL SISTEMA -->
    <link rel="stylesheet"
          href="../css/sistema.css?v=12">

    <!-- CSS DEL FORMULARIO DE REFUGIO -->
    <link rel="stylesheet"
          href="../css/refugios.css?v=1">

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

            <a href="../../portal/index.php"
               class="login-nav-link">

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


            <a href="login.php"
               class="login-nav-login">

                <span class="nav-icono">👤</span>
                <span>Iniciar sesión</span>

            </a>

        </nav>

    </div>

</header>




<main class="refugio-main">

    <section class="refugio-card">


        <!-- ENCABEZADO -->

        <div class="refugio-encabezado">

            <h1>Alta de refugio</h1>

            <div class="detalle-refugio">

                <span></span>
                <strong>♥</strong>
                <span></span>

            </div>

            <p>
                Registra un nuevo refugio en Conectando Huellitas
            </p>

        </div>




        <form class="refugio-formulario"
              action="#"
              method="post"
              onsubmit="return false;">


            <div class="refugio-seccion">

                <h2>DATOS GENERALES</h2>

                <div class="refugio-grid">


                    <div class="campo-refugio campo-completo">

                        <label for="nombre_refugio">

                            Nombre del refugio
                            <span>*</span>

                        </label>

                        <input
                            type="text"
                            id="nombre_refugio"
                            name="nombre_refugio"
                            placeholder="Ingresa el nombre del refugio"
                            required>

                    </div>


             

                    <div class="campo-refugio campo-completo">

                        <div class="aviso-clave">

                            <strong>
                                Clave del refugio
                            </strong>

                            <span>
                                Se generará automáticamente al registrar el refugio.
                            </span>

                        </div>

                    </div>

                </div>

            </div>




            <div class="refugio-seccion">

                <h2>RESPONSABLE</h2>

                <div class="refugio-grid">


                    <div class="campo-refugio campo-completo">

                        <label for="responsable">

                            Nombre del responsable
                            <span>*</span>

                        </label>

                        <input
                            type="text"
                            id="responsable"
                            name="responsable"
                            placeholder="Nombre completo del responsable"
                            required>

                    </div>


                    <div class="campo-refugio">

                        <label for="telefono">

                            Teléfono
                            <span>*</span>

                        </label>

                        <input
                            type="tel"
                            id="telefono"
                            name="telefono"
                            placeholder="228 000 0000"
                            required>

                    </div>


                    <div class="campo-refugio">

                        <label for="correo">

                            Correo electrónico
                            <span>*</span>

                        </label>

                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            placeholder="correo@ejemplo.com"
                            required>

                    </div>

                </div>

            </div>




            <div class="refugio-seccion">

                <h2>UBICACIÓN</h2>

                <div class="refugio-grid">


                    <!-- ESTADO -->

                    <div class="campo-refugio">

                        <label for="estado">

                            Estado
                            <span>*</span>

                        </label>

                        <select
                            id="estado"
                            name="estado"
                            required>

                            <option value="">
                                Seleccionar estado
                            </option>

                            <option value="veracruz">
                                Veracruz
                            </option>

                        </select>

                    </div>


                    <!-- MUNICIPIO -->

                    <div class="campo-refugio">

                        <label for="municipio">

                            Municipio
                            <span>*</span>

                        </label>

                        <input
                            type="text"
                            id="municipio"
                            name="municipio"
                            placeholder="Ej. Xalapa"
                            required>

                    </div>


                    <!-- LOCALIDAD -->

                    <div class="campo-refugio">

                        <label for="localidad">

                            Localidad
                            <span>*</span>

                        </label>

                        <input
                            type="text"
                            id="localidad"
                            name="localidad"
                            placeholder="Ingresa la localidad"
                            required>

                    </div>


                    <!-- COLONIA -->

                    <div class="campo-refugio">

                        <label for="colonia">
                            Colonia
                        </label>

                        <input
                            type="text"
                            id="colonia"
                            name="colonia"
                            placeholder="Ingresa la colonia">

                    </div>


                    <!-- CALLE -->

                    <div class="campo-refugio campo-completo">

                        <label for="calle">
                            Calle
                        </label>

                        <input
                            type="text"
                            id="calle"
                            name="calle"
                            placeholder="Nombre de la calle">

                    </div>


                    <!-- NÚMERO EXTERIOR -->

                    <div class="campo-refugio">

                        <label for="numero_exterior">
                            Número exterior
                        </label>

                        <input
                            type="text"
                            id="numero_exterior"
                            name="numero_exterior"
                            placeholder="Núm. exterior">

                    </div>


                    <!-- NÚMERO INTERIOR -->

                    <div class="campo-refugio">

                        <label for="numero_interior">
                            Número interior
                        </label>

                        <input
                            type="text"
                            id="numero_interior"
                            name="numero_interior"
                            placeholder="Núm. interior">

                    </div>


                    <!-- CÓDIGO POSTAL -->

                    <div class="campo-refugio">

                        <label for="codigo_postal">
                            Código postal
                        </label>

                        <input
                            type="text"
                            id="codigo_postal"
                            name="codigo_postal"
                            placeholder="Ej. 91000"
                            maxlength="5">

                    </div>


                    <!-- REFERENCIAS -->

                    <div class="campo-refugio campo-completo">

                        <label for="referencias">
                            Referencias de ubicación
                        </label>

                        <textarea
                            id="referencias"
                            name="referencias"
                            placeholder="Agrega alguna referencia para facilitar la ubicación"></textarea>

                    </div>

                </div>

            </div>



            <div class="refugio-seccion">

                <h2>INFORMACIÓN DEL REFUGIO</h2>

                <div class="refugio-grid">


                    <!-- CAPACIDAD -->

                    <div class="campo-refugio">

                        <label for="capacidad">

                            Capacidad total
                            <span>*</span>

                        </label>

                        <input
                            type="number"
                            id="capacidad"
                            name="capacidad"
                            min="1"
                            placeholder="Ej. 50"
                            required>

                    </div>


                    <!-- ESTADO DEL REGISTRO -->

                    <div class="campo-refugio">

                        <label for="estado_refugio">

                            Estado del refugio
                            <span>*</span>

                        </label>

                        <select
                            id="estado_refugio"
                            name="estado_refugio"
                            required>

                            <option value="activo">
                                Activo
                            </option>

                            <option value="inactivo">
                                Inactivo
                            </option>

                        </select>

                    </div>


                    <!-- ESPECIES -->

                    <div class="campo-refugio campo-completo">

                        <label>

                            Especies admitidas
                            <span>*</span>

                        </label>

                        <div class="especies-refugio">


                            <label class="opcion-especie">

                                <input
                                    type="checkbox"
                                    name="especies[]"
                                    value="perros">

                                <span>
                                    🐶 Perros
                                </span>

                            </label>


                            <label class="opcion-especie">

                                <input
                                    type="checkbox"
                                    name="especies[]"
                                    value="gatos">

                                <span>
                                    🐱 Gatos
                                </span>

                            </label>


                        </div>

                    </div>


                    <!-- OBSERVACIONES -->

                    <div class="campo-refugio campo-completo">

                        <label for="observaciones">
                            Observaciones
                        </label>

                        <textarea
                            id="observaciones"
                            name="observaciones"
                            placeholder="Información adicional sobre el refugio"></textarea>

                    </div>

                </div>

            </div>


            <div class="refugio-botones">


                <button
                    type="button"
                    class="btn-guardar-refugio">

                    🐾 Guardar refugio

                </button>


                <button
                    type="reset"
                    class="btn-cancelar-refugio">

                    Cancelar

                </button>


                <a href="../index.php"
                   class="btn-regresar-refugio">

                    ⌂ Regresar al panel

                </a>


            </div>


        </form>

    </section>

</main>




<footer class="login-footer">

    <div class="footer-izquierda">

        <span>
            🐾 Conectando Huellitas
        </span>

        <span>•</span>

        <span>
            La red que salva vidas
        </span>

        <span>•</span>

        <span>
            2026
        </span>

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


</body>

</html>