<?php


$mascota = [
    'nombre' => 'Luna',
    'clave' => '01-P-L-0001',
    'total_solicitudes' => 10,
    'primera_solicitud' => '01/09/2026 09:14',
    'cierre_solicitudes' => '03/09/2026 18:42'
];



$solicitudes = [
    [
        'orden' => 1,
        'folio' => 'SOL-0001',
        'solicitante' => 'Ana Pérez Hernández',
        'fecha' => '01/09/2026',
        'hora' => '09:14',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'resultado' => 'Viable'
    ],
    [
        'orden' => 2,
        'folio' => 'SOL-0002',
        'solicitante' => 'María López García',
        'fecha' => '01/09/2026',
        'hora' => '11:32',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'resultado' => 'Pendiente'
    ],
    [
        'orden' => 3,
        'folio' => 'SOL-0003',
        'solicitante' => 'José Martínez Ruiz',
        'fecha' => '01/09/2026',
        'hora' => '16:05',
        'municipio' => 'Banderilla',
        'estado' => 'Veracruz',
        'resultado' => 'Rechazada'
    ],
    [
        'orden' => 4,
        'folio' => 'SOL-0004',
        'solicitante' => 'Laura Hernández Díaz',
        'fecha' => '02/09/2026',
        'hora' => '08:47',
        'municipio' => 'Coatepec',
        'estado' => 'Veracruz',
        'resultado' => 'Viable'
    ],
    [
        'orden' => 5,
        'folio' => 'SOL-0005',
        'solicitante' => 'Carlos Ramírez Soto',
        'fecha' => '02/09/2026',
        'hora' => '10:21',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'resultado' => 'Pendiente'
    ],
    [
        'orden' => 6,
        'folio' => 'SOL-0006',
        'solicitante' => 'Patricia Gómez Luna',
        'fecha' => '02/09/2026',
        'hora' => '12:56',
        'municipio' => 'Emiliano Zapata',
        'estado' => 'Veracruz',
        'resultado' => 'Viable'
    ],
    [
        'orden' => 7,
        'folio' => 'SOL-0007',
        'solicitante' => 'Ricardo Sánchez Mora',
        'fecha' => '02/09/2026',
        'hora' => '15:18',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'resultado' => 'Rechazada'
    ],
    [
        'orden' => 8,
        'folio' => 'SOL-0008',
        'solicitante' => 'Gabriela Torres Cruz',
        'fecha' => '03/09/2026',
        'hora' => '09:03',
        'municipio' => 'Coatepec',
        'estado' => 'Veracruz',
        'resultado' => 'Viable'
    ],
    [
        'orden' => 9,
        'folio' => 'SOL-0009',
        'solicitante' => 'Fernando Ortiz Vega',
        'fecha' => '03/09/2026',
        'hora' => '14:27',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'resultado' => 'Pendiente'
    ],
    [
        'orden' => 10,
        'folio' => 'SOL-0010',
        'solicitante' => 'Daniela Flores Reyes',
        'fecha' => '03/09/2026',
        'hora' => '18:42',
        'municipio' => 'Xalapa',
        'estado' => 'Veracruz',
        'resultado' => 'Rechazada'
    ]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Solicitudes de <?php echo htmlspecialchars($mascota['nombre']); ?>
        | Conectando Huellitas
    </title>

    <link rel="stylesheet" href="../css/sistema.css">
    <link rel="stylesheet" href="../css/solicitudes_mascota.css">
</head>

<body>

<?php include '../includes/header.php'; ?>

<main class="contenido-principal">

    <section class="contenedor-solicitudes">

        
        <div class="encabezado-pagina">

            <div>
                <span class="etiqueta-modulo">
                    ADOPCIONES
                </span>

                <h1>
                    Solicitudes recibidas para
                    <?php echo htmlspecialchars($mascota['nombre']); ?>
                </h1>

                <p>
                    Revisa las solicitudes en el orden en que fueron recibidas
                    y determina cuáles pueden continuar en el proceso de adopción.
                </p>
            </div>

        </div>


        
        <div class="tarjeta-mascota">

            <div class="mascota-principal">

                <div class="avatar-mascota">
                    🐾
                </div>

                <div>
                    <span class="texto-pequeno">
                        MASCOTA
                    </span>

                    <h2>
                        <?php echo htmlspecialchars($mascota['nombre']); ?>
                    </h2>

                    <span class="clave-mascota">
                        <?php echo htmlspecialchars($mascota['clave']); ?>
                    </span>
                </div>

            </div>

            <div class="datos-proceso">

                <div class="dato-proceso">
                    <span class="dato-etiqueta">
                        Solicitudes recibidas
                    </span>

                    <strong>
                        <?php echo $mascota['total_solicitudes']; ?>
                    </strong>
                </div>

                <div class="dato-proceso">
                    <span class="dato-etiqueta">
                        Primera solicitud
                    </span>

                    <strong>
                        <?php echo $mascota['primera_solicitud']; ?>
                    </strong>
                </div>

                <div class="dato-proceso">
                    <span class="dato-etiqueta">
                        Cierre de recepción
                    </span>

                    <strong>
                        <?php echo $mascota['cierre_solicitudes']; ?>
                    </strong>
                </div>

            </div>

        </div>


      

        <div class="resumen">

            <div class="tarjeta-resumen">
                <span class="numero">10</span>
                <span class="descripcion">Recibidas</span>
            </div>

            <div class="tarjeta-resumen pendiente">
                <span class="numero">3</span>
                <span class="descripcion">Pendientes</span>
            </div>

            <div class="tarjeta-resumen viable">
                <span class="numero">4</span>
                <span class="descripcion">Viables</span>
            </div>

            <div class="tarjeta-resumen rechazada">
                <span class="numero">3</span>
                <span class="descripcion">Rechazadas</span>
            </div>

        </div>



        <div class="nota-orden">

            <span class="icono-nota">
                ⓘ
            </span>

            <p>
                Las solicitudes se muestran de la más antigua a la más reciente.
                En caso de existir candidatos igualmente idóneos, tendrá
                preferencia la solicitud recibida primero.
            </p>

        </div>


        <div class="contenedor-tabla">

            <table class="tabla-solicitudes">

                <thead>

                    <tr>
                        <th>Orden</th>
                        <th>Folio</th>
                        <th>Solicitante</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Municipio</th>
                        <th>Estado de revisión</th>
                        <th>Acción</th>
                    </tr>

                </thead>

                <tbody>

                <?php foreach ($solicitudes as $solicitud): ?>

                    <tr>

                        <!-- ORDEN -->
                        <td>
                            <span class="numero-orden">
                                <?php echo $solicitud['orden']; ?>
                            </span>
                        </td>


                        <!-- FOLIO -->
                        <td class="folio">
                            <?php echo htmlspecialchars($solicitud['folio']); ?>
                        </td>


                        <!-- SOLICITANTE -->
                        <td class="solicitante">

                            <strong>
                                <?php echo htmlspecialchars($solicitud['solicitante']); ?>
                            </strong>

                        </td>


                        <!-- FECHA -->
                        <td>
                            <?php echo $solicitud['fecha']; ?>
                        </td>


                        <!-- HORA -->
                        <td>
                            <?php echo $solicitud['hora']; ?>
                        </td>


                        <!-- MUNICIPIO -->
                        <td>

                            <?php echo htmlspecialchars($solicitud['municipio']); ?>

                            <span class="estado-geografico">
                                <?php echo htmlspecialchars($solicitud['estado']); ?>
                            </span>

                        </td>


                        <!-- RESULTADO -->
                        <td>

                            <?php if ($solicitud['resultado'] === 'Pendiente'): ?>

                                <span class="estado estado-pendiente">
                                    Pendiente
                                </span>

                            <?php elseif ($solicitud['resultado'] === 'Viable'): ?>

                                <span class="estado estado-viable">
                                    Viable
                                </span>

                            <?php else: ?>

                                <span class="estado estado-rechazada">
                                    Rechazada
                                </span>

                            <?php endif; ?>

                        </td>


                        <!-- ACCIÓN -->
                        <td>

                            <a href="#"
                               class="boton-revisar">

                                <?php if ($solicitud['resultado'] === 'Pendiente'): ?>

                                    Revisar solicitud

                                <?php else: ?>

                                    Ver solicitud

                                <?php endif; ?>

                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>


      

        <div class="aviso-precalificacion">

            <strong>Primera versión del proceso:</strong>

            la evaluación de cada solicitud será realizada por el personal del
            refugio. 

        </div>


        

        <div class="acciones-inferiores">

            <a href="solicitudes_revision.php"
               class="boton-regresar">

                ← Regresar a solicitudes por revisar

            </a>

        </div>

    </section>

</main>

<?php include '../includes/footer.php'; ?>

</body>
</html>