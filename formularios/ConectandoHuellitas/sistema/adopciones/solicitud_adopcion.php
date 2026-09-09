<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solicitud de adopción | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css?v=12">
    <link rel="stylesheet" href="../css/solicitud_adopcion.css?v=1">
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

            <a href="../../portal/index.php" class="login-nav-link">
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

            <a href="../usuarios/login.php"
               class="login-nav-login">
                <span class="nav-icono">👤</span>
                <span>Iniciar sesión</span>
            </a>

        </nav>

    </div>

</header>


<main class="solicitud-main">

    <section class="solicitud-card">

        <div class="solicitud-encabezado">

            <h1>Solicitud de adopción</h1>

            <div class="detalle-solicitud">
                <span></span>
                <strong>♥</strong>
                <span></span>
            </div>

            <p>
                Ayúdanos a conocer el hogar que deseas ofrecerle.
                La información será utilizada para valorar la compatibilidad
                y bienestar de la mascota.
            </p>

        </div>



        <div class="mascota-solicitada">

            <div class="mascota-foto">
                🐶
            </div>

            <div class="mascota-info">

                <span class="mascota-etiqueta">
                    DESEO ADOPTAR A
                </span>

                <h2>Luna</h2>

                <p>
                    <strong>Clave:</strong>
                    01-P-L-0001
                </p>

            </div>

        </div>


        <div class="aviso-solicitud">

            <span>ⓘ</span>

            <p>
                Presentar esta solicitud no garantiza la adopción.
                El refugio evaluará cada solicitud considerando principalmente
                el bienestar y las necesidades de la mascota.
            </p>

        </div>


        <form action="#" method="post" onsubmit="return false;">


           

            <div class="solicitud-seccion">

                <h2>
                    <span>1</span>
                    DATOS DEL SOLICITANTE
                </h2>

                <div class="solicitud-grid">

                    <div class="campo-solicitud">
                        <label for="nombres">
                            Nombre(s) <span>*</span>
                        </label>
                        <input type="text" id="nombres" name="nombres" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="apellido_paterno">
                            Apellido paterno <span>*</span>
                        </label>
                        <input type="text" id="apellido_paterno" name="apellido_paterno" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="apellido_materno">
                            Apellido materno
                        </label>
                        <input type="text" id="apellido_materno" name="apellido_materno">
                    </div>

                    <div class="campo-solicitud">
                        <label for="fecha_nacimiento">
                            Fecha de nacimiento <span>*</span>
                        </label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="telefono">
                            Teléfono <span>*</span>
                        </label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="correo">
                            Correo electrónico <span>*</span>
                        </label>
                        <input type="email" id="correo" name="correo" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="estado_civil">
                            Estado civil <span>*</span>
                        </label>

                        <select id="estado_civil" name="estado_civil" required>
                            <option value="">Seleccionar</option>
                            <option>Soltero(a)</option>
                            <option>Casado(a)</option>
                            <option>Unión libre</option>
                            <option>Divorciado(a)</option>
                            <option>Viudo(a)</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="pareja_acuerdo">
                            Si tiene pareja, ¿está de acuerdo con la adopción?
                        </label>

                        <select id="pareja_acuerdo" name="pareja_acuerdo">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="pareja_domicilio">
                            ¿Su pareja vivirá en el mismo domicilio que la mascota?
                        </label>

                        <select id="pareja_domicilio" name="pareja_domicilio">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                </div>


                <h3>Domicilio</h3>

                <div class="solicitud-grid">

                    <div class="campo-solicitud campo-completo">
                        <label for="calle">
                            Calle y número <span>*</span>
                        </label>
                        <input type="text" id="calle" name="calle" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="colonia">
                            Colonia <span>*</span>
                        </label>
                        <input type="text" id="colonia" name="colonia" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="localidad">
                            Localidad <span>*</span>
                        </label>
                        <input type="text" id="localidad" name="localidad" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="municipio">
                            Municipio <span>*</span>
                        </label>
                        <input type="text" id="municipio" name="municipio" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="estado">
                            Estado <span>*</span>
                        </label>
                        <input type="text" id="estado" name="estado" required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="codigo_postal">
                            Código postal <span>*</span>
                        </label>
                        <input type="text" id="codigo_postal" name="codigo_postal">
                    </div>

                </div>

            </div>


            

            <div class="solicitud-seccion">

                <h2>
                    <span>2</span>
                    VIVIENDA, FAMILIA Y CONDICIONES DEL HOGAR
                </h2>

                <div class="solicitud-grid">

                    <div class="campo-solicitud">
                        <label for="tipo_vivienda">
                            Tipo de vivienda <span>*</span>
                        </label>

                        <select id="tipo_vivienda" name="tipo_vivienda" required>
                            <option value="">Seleccionar</option>
                            <option>Casa</option>
                            <option>Departamento</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="propiedad_vivienda">
                            La vivienda es <span>*</span>
                        </label>

                        <select id="propiedad_vivienda" name="propiedad_vivienda" required>
                            <option value="">Seleccionar</option>
                            <option>Propia</option>
                            <option>Rentada</option>
                            <option>Prestada</option>
                            <option>Otra</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="permiso_mascotas">
                            Si es rentada, ¿el propietario permite mascotas?
                        </label>

                        <select id="permiso_mascotas" name="permiso_mascotas">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="personas_hogar">
                            ¿Cuántas personas viven en el domicilio?
                            <span>*</span>
                        </label>

                        <input type="number"
                               id="personas_hogar"
                               name="personas_hogar"
                               min="1"
                               required>
                    </div>

                    <div class="campo-solicitud">
                        <label for="familia_acuerdo">
                            ¿Todas están de acuerdo con la adopción?
                            <span>*</span>
                        </label>

                        <select id="familia_acuerdo" name="familia_acuerdo" required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="menores">
                            ¿Hay menores de edad en el hogar?
                        </label>

                        <select id="menores" name="menores">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="edades_menores">
                            Si hay menores, indique sus edades
                        </label>

                        <input type="text"
                               id="edades_menores"
                               name="edades_menores"
                               placeholder="Ej. 5 y 12 años">
                    </div>

                    <div class="campo-solicitud">
                        <label for="adultos_mayores">
                            ¿Hay adultos mayores en el hogar?
                        </label>

                        <select id="adultos_mayores" name="adultos_mayores">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="alergias">
                            ¿Alguna persona tiene alergia a los animales?
                        </label>

                        <select id="alergias" name="alergias">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>No sabe</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="mascotas_actuales">
                            ¿Actualmente tiene otras mascotas?
                            <span>*</span>
                        </label>

                        <select id="mascotas_actuales" name="mascotas_actuales" required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="lugar_mascota">
                            ¿Dónde permanecerá principalmente la mascota?
                            <span>*</span>
                        </label>

                        <select id="lugar_mascota" name="lugar_mascota" required>
                            <option value="">Seleccionar</option>
                            <option>Dentro de casa</option>
                            <option>Patio o jardín</option>
                            <option>Ambos</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="dormira">
                            ¿Dónde dormirá?
                            <span>*</span>
                        </label>

                        <select id="dormira" name="dormira" required>
                            <option value="">Seleccionar</option>
                            <option>Dentro de casa</option>
                            <option>Patio o jardín</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="horas_solo">
                            Horas aproximadas que permanecerá sola al día
                        </label>

                        <input type="number"
                               id="horas_solo"
                               name="horas_solo"
                               min="0"
                               max="24">
                    </div>

                    <div class="campo-solicitud">
                        <label for="espacio_seguro">
                            ¿El domicilio cuenta con espacio seguro para evitar escapes?
                            <span>*</span>
                        </label>

                        <select id="espacio_seguro" name="espacio_seguro" required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="acceso_calle">
                            ¿Tendrá acceso libre a la calle sin supervisión?
                            <span>*</span>
                        </label>

                        <select id="acceso_calle" name="acceso_calle" required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="area_protegida">
                            ¿El área exterior está delimitada y protegida?
                        </label>

                        <select id="area_protegida" name="area_protegida">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                </div>

            </div>


           

            <div class="solicitud-seccion">

                <h2>
                    <span>3</span>
                    EXPERIENCIA E HISTORIAL CON ANIMALES
                </h2>

                <div class="solicitud-grid">

                    <div class="campo-solicitud">
                        <label for="cantidad_mascotas">
                            Si tiene mascotas actualmente, ¿cuántas?
                        </label>
                        <input type="number"
                               id="cantidad_mascotas"
                               name="cantidad_mascotas"
                               min="0">
                    </div>

                    <div class="campo-solicitud">
                        <label for="tipo_animales">
                            ¿Qué animales tiene?
                        </label>

                        <input type="text"
                               id="tipo_animales"
                               name="tipo_animales"
                               placeholder="Ej. 2 perros y 1 gato">
                    </div>

                    <div class="campo-solicitud">
                        <label for="esterilizados">
                            ¿Están esterilizados?
                        </label>

                        <select id="esterilizados" name="esterilizados">
                            <option value="">Seleccionar</option>
                            <option>Todos</option>
                            <option>Algunos</option>
                            <option>Ninguno</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="vacunacion">
                            ¿Tienen vacunación vigente?
                        </label>

                        <select id="vacunacion" name="vacunacion">
                            <option value="">Seleccionar</option>
                            <option>Todos</option>
                            <option>Algunos</option>
                            <option>Ninguno</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="mascotas_anteriores">
                            ¿Ha tenido mascotas anteriormente?
                            <span>*</span>
                        </label>

                        <select id="mascotas_anteriores"
                                name="mascotas_anteriores"
                                required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="que_ocurrio">
                            Si ha tenido mascotas anteriormente,
                            ¿qué ocurrió con ellas?
                        </label>

                        <textarea id="que_ocurrio"
                                  name="que_ocurrio"
                                  placeholder="Cuéntenos brevemente sobre sus mascotas anteriores y qué ocurrió con ellas."></textarea>
                    </div>

                    <div class="campo-solicitud">
                        <label for="adopcion_anterior">
                            ¿Ha adoptado anteriormente en un refugio,
                            asociación o con un rescatista?
                            <span>*</span>
                        </label>

                        <select id="adopcion_anterior"
                                name="adopcion_anterior"
                                required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="refugio_anterior">
                            Nombre del refugio, asociación o rescatista
                        </label>

                        <input type="text"
                               id="refugio_anterior"
                               name="refugio_anterior">
                    </div>

                    <div class="campo-solicitud">
                        <label for="lugar_adopcion_anterior">
                            Lugar donde realizó la adopción
                        </label>

                        <input type="text"
                               id="lugar_adopcion_anterior"
                               name="lugar_adopcion_anterior"
                               placeholder="Localidad / Municipio / Estado">
                    </div>

                    <div class="campo-solicitud">
                        <label for="anio_adopcion">
                            Año aproximado
                        </label>

                        <input type="number"
                               id="anio_adopcion"
                               name="anio_adopcion"
                               min="1980"
                               max="2030">
                    </div>

                    <div class="campo-solicitud">
                        <label for="conserva_adoptado">
                            ¿Actualmente conserva al animal adoptado?
                        </label>

                        <select id="conserva_adoptado"
                                name="conserva_adoptado">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="destino_adoptado">
                            Si ya no está con usted, explique qué ocurrió
                        </label>

                        <textarea id="destino_adoptado"
                                  name="destino_adoptado"></textarea>
                    </div>

                    <div class="campo-solicitud">
                        <label for="devolvio_mascota">
                            ¿Alguna vez ha devuelto una mascota a un refugio o rescatista?
                        </label>

                        <select id="devolvio_mascota"
                                name="devolvio_mascota">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="cedio_mascota">
                            ¿Alguna vez ha regalado, cedido o entregado una mascota?
                        </label>

                        <select id="cedio_mascota"
                                name="cedio_mascota">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="mascota_extraviada">
                            ¿Alguna de sus mascotas se ha extraviado?
                        </label>

                        <select id="mascota_extraviada"
                                name="mascota_extraviada">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="solicitud_rechazada">
                            ¿Alguna vez le han rechazado una solicitud de adopción?
                        </label>

                        <select id="solicitud_rechazada"
                                name="solicitud_rechazada">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="antecedentes_explicacion">
                            Si respondió afirmativamente a alguna de las preguntas anteriores,
                            explique brevemente qué ocurrió
                        </label>

                        <textarea id="antecedentes_explicacion"
                                  name="antecedentes_explicacion"></textarea>
                    </div>

                </div>

            </div>


            

            <div class="solicitud-seccion">

                <h2>
                    <span>4</span>
                    MOTIVACIÓN, RESPONSABILIDAD Y COMPROMISO
                </h2>

                <div class="solicitud-grid">

                    <div class="campo-solicitud campo-completo">
                        <label for="motivo_adopcion">
                            ¿Por qué desea adoptar una mascota?
                            <span>*</span>
                        </label>

                        <textarea id="motivo_adopcion"
                                  name="motivo_adopcion"
                                  required></textarea>
                    </div>

                    <div class="campo-solicitud">
                        <label for="decision_adopcion">
                            ¿Quién tomó principalmente la decisión de adoptar?
                        </label>

                        <select id="decision_adopcion"
                                name="decision_adopcion">
                            <option value="">Seleccionar</option>
                            <option>Yo</option>
                            <option>Mi pareja</option>
                            <option>Toda la familia</option>
                            <option>Otra persona</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="responsable_cuidados">
                            ¿Quién será el principal responsable de sus cuidados?
                        </label>

                        <input type="text"
                               id="responsable_cuidados"
                               name="responsable_cuidados">
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="expectativas">
                            ¿Qué espera de la mascota que desea adoptar?
                        </label>

                        <textarea id="expectativas"
                                  name="expectativas"></textarea>
                    </div>

                    <div class="campo-solicitud">
                        <label for="gastos_basicos">
                            ¿Está dispuesto(a) a cubrir alimentación,
                            vacunas y atención veterinaria?
                            <span>*</span>
                        </label>

                        <select id="gastos_basicos"
                                name="gastos_basicos"
                                required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="gastos_imprevistos">
                            ¿Cubriría gastos veterinarios ante enfermedad o accidente?
                            <span>*</span>
                        </label>

                        <select id="gastos_imprevistos"
                                name="gastos_imprevistos"
                                required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="esterilizacion_compromiso">
                            ¿Acepta esterilizar al animal si estuviera pendiente?
                        </label>

                        <select id="esterilizacion_compromiso"
                                name="esterilizacion_compromiso">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>Ya está esterilizado</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="acepta_seguimiento">
                            ¿Acepta los seguimientos posteriores a la adopción?
                            <span>*</span>
                        </label>

                        <select id="acepta_seguimiento"
                                name="acepta_seguimiento"
                                required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="acepta_evidencia">
                            ¿Acepta proporcionar fotografías o videos durante el seguimiento?
                        </label>

                        <select id="acepta_evidencia"
                                name="acepta_evidencia">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                </div>


                <h3>Situaciones hipotéticas</h3>

                <div class="solicitud-grid">

                    <div class="campo-solicitud campo-completo">
                        <label for="problemas_adaptacion">
                            Si la mascota tarda en adaptarse, rompe objetos,
                            hace sus necesidades dentro de casa o presenta
                            problemas de comportamiento, ¿qué haría?
                        </label>

                        <textarea id="problemas_adaptacion"
                                  name="problemas_adaptacion"></textarea>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="cambio_domicilio">
                            Si cambia de domicilio, ¿qué haría con la mascota?
                        </label>

                        <textarea id="cambio_domicilio"
                                  name="cambio_domicilio"></textarea>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="cambio_familiar">
                            Si cambia su situación familiar o alguna persona
                            del hogar deja de aceptar a la mascota, ¿qué haría?
                        </label>

                        <textarea id="cambio_familiar"
                                  name="cambio_familiar"></textarea>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="problema_economico">
                            Si atraviesa dificultades económicas y la mascota
                            necesita atención veterinaria, ¿qué haría?
                        </label>

                        <textarea id="problema_economico"
                                  name="problema_economico"></textarea>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="no_puede_conservar">
                            Si por alguna circunstancia ya no pudiera conservarla,
                            ¿qué haría?
                        </label>

                        <textarea id="no_puede_conservar"
                                  name="no_puede_conservar"></textarea>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="motivo_devolucion">
                            ¿En qué circunstancias considera que devolvería
                            al animal al refugio?
                        </label>

                        <textarea id="motivo_devolucion"
                                  name="motivo_devolucion"></textarea>
                    </div>

                </div>

            </div>


            

            <div class="solicitud-seccion">

                <h2>
                    <span>5</span>
                    COMPATIBILIDAD CON LA MASCOTA SOLICITADA
                </h2>

                <div class="solicitud-grid">

                    <div class="campo-solicitud campo-completo">
                        <label for="porque_esta_mascota">
                            ¿Por qué eligió específicamente a esta mascota?
                            <span>*</span>
                        </label>

                        <textarea id="porque_esta_mascota"
                                  name="porque_esta_mascota"
                                  required></textarea>
                    </div>

                    <div class="campo-solicitud">
                        <label for="conoce_mascota">
                            ¿La conoce personalmente?
                        </label>

                        <select id="conoce_mascota"
                                name="conoce_mascota">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="convivio_mascota">
                            ¿Ha convivido o interactuado con ella?
                        </label>

                        <select id="convivio_mascota"
                                name="convivio_mascota">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="periodo_adaptacion">
                            ¿Está dispuesto(a) a respetar su periodo de adaptación?
                            <span>*</span>
                        </label>

                        <select id="periodo_adaptacion"
                                name="periodo_adaptacion"
                                required>
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="caracteristicas">
                            ¿Está de acuerdo con su tamaño y nivel de actividad?
                        </label>

                        <select id="caracteristicas"
                                name="caracteristicas">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="necesidades">
                            ¿Conoce las necesidades particulares informadas por el refugio?
                        </label>

                        <select id="necesidades"
                                name="necesidades">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="cuidados_especiales">
                            ¿Atendería necesidades médicas o cuidados especiales previamente informados?
                        </label>

                        <select id="cuidados_especiales"
                                name="cuidados_especiales">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>No aplica</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="conducta">
                            ¿Está dispuesto(a) a trabajar problemas de comportamiento?
                        </label>

                        <select id="conducta"
                                name="conducta">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud">
                        <label for="orientacion">
                            ¿Aceptaría orientación profesional ante problemas de adaptación o conducta?
                        </label>

                        <select id="orientacion"
                                name="orientacion">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="campo-solicitud campo-completo">
                        <label for="otra_mascota">
                            Si esta mascota no fuera considerada compatible
                            con su hogar, ¿consideraría adoptar otro animal?
                        </label>

                        <select id="otra_mascota"
                                name="otra_mascota">
                            <option value="">Seleccionar</option>
                            <option>Sí</option>
                            <option>No</option>
                            <option>Tal vez</option>
                        </select>
                    </div>

                </div>

            </div>


            

            <div class="declaracion">

                <label>

                    <input type="checkbox"
                           name="declaracion"
                           required>

                    <span>
                        Declaro que la información proporcionada es verdadera
                        y entiendo que presentar esta solicitud no garantiza
                        la adopción. La asignación dependerá de la evaluación
                        realizada por el refugio, considerando el bienestar
                        y las necesidades de la mascota.
                    </span>

                </label>

            </div>


            <div class="nota-privacidad">

                <span>🔒</span>

                <p>
                    La información proporcionada será utilizada únicamente
                    para el proceso de adopción y será tratada como información
                    privada. La verificación documental se realizará únicamente
                    si la persona resulta seleccionada para continuar con el
                    proceso de adopción.
                </p>

            </div>


            <div class="solicitud-botones">

                <button type="button"
                        class="btn-guardar">
                    🐾 Enviar solicitud
                </button>

                <button type="reset"
                        class="btn-cancelar">
                    Limpiar formulario
                </button>

                <a href="../../portal/index.php"
                   class="btn-regresar">
                    ← Regresar
                </a>

            </div>

        </form>

    </section>

</main>


<footer class="login-footer">

    <div class="footer-izquierda">
        <span>🐾 Conectando Huellitas</span>
        <span>•</span>
        <span>La red que salva vidas</span>
        <span>•</span>
        <span>2026</span>
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