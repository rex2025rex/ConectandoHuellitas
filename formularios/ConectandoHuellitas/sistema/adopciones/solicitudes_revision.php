<?php

$mascotas = [
    [
        'nombre' => 'Luna',
        'solicitudes' => 10,
        'primera_solicitud' => '01/09/2026',
        'cierre' => '03/09/2026',
        'pendientes' => 3,
        'viables' => 4,
        'rechazadas' => 3
    ],
    [
        'nombre' => 'Max',
        'solicitudes' => 4,
        'primera_solicitud' => '29/08/2026',
        'cierre' => '03/09/2026',
        'pendientes' => 2,
        'viables' => 1,
        'rechazadas' => 1
    ],
    [
        'nombre' => 'Toby',
        'solicitudes' => 3,
        'primera_solicitud' => '25/08/2026',
        'cierre' => '28/08/2026',
        'pendientes' => 0,
        'viables' => 0,
        'rechazadas' => 3
    ]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solicitudes de adopción por revisar | Conectando Huellitas</title>

    <link rel="stylesheet" href="../css/sistema.css">
    <link rel="stylesheet" href="../css/solicitudes_revision.css">
</head>

<body>

<?php include '../includes/header.php'; ?>

<main class="contenido-principal">

    <section class="contenedor-solicitudes">

        
        <div class="encabezado-pagina">

            <div>
                <span class="etiqueta-modulo">ADOPCIONES</span>

                <h1>Solicitudes de adopción por revisar</h1>

                <p>
                    Consulta las mascotas que han recibido solicitudes de adopción
                    y da seguimiento al proceso de evaluación de candidatos.
                </p>
            </div>

        </div>

        <!-- RESUMEN -->
        <div class="resumen-solicitudes">

            <div class="tarjeta-resumen">
                <span class="numero-resumen">3</span>
                <span class="texto-resumen">Mascotas con solicitudes</span>
            </div>

            <div class="tarjeta-resumen">
                <span class="numero-resumen">17</span>
                <span class="texto-resumen">Solicitudes recibidas</span>
            </div>

            <div class="tarjeta-resumen pendiente">
                <span class="numero-resumen">5</span>
                <span class="texto-resumen">Pendientes de revisar</span>
            </div>

            <div class="tarjeta-resumen viable">
                <span class="numero-resumen">5</span>
                <span class="texto-resumen">Solicitudes viables</span>
            </div>

        </div>

        <!-- TABLA -->
        <div class="contenedor-tabla">

            <table class="tabla-solicitudes">

                <thead>
                    <tr>
                        <th>Mascota</th>
                        <th>Solicitudes<br>recibidas</th>
                        <th>Fecha de recepción de<br>la primera solicitud</th>
                        <th>Fecha de cierre<br>de solicitudes</th>
                        <th>Pendientes<br>de revisar</th>
                        <th>Viables</th>
                        <th>Rechazadas</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <tbody>

                <?php foreach ($mascotas as $mascota): ?>

                    <tr>

                        <!-- MASCOTA -->
                        <td class="columna-mascota">

                            <div class="mascota-info">

                                <div class="avatar-mascota">
                                    🐾
                                </div>

                                <div>
                                    <strong>
                                        <?php echo htmlspecialchars($mascota['nombre']); ?>
                                    </strong>

                                    <?php if (
                                        $mascota['pendientes'] == 0 &&
                                        $mascota['viables'] == 0
                                    ): ?>

                                        <span class="aviso-sin-viables">
                                            Sin candidatos viables
                                        </span>

                                    <?php endif; ?>

                                </div>

                            </div>

                        </td>

                        <!-- RECIBIDAS -->
                        <td>
                            <span class="contador contador-recibidas">
                                <?php echo $mascota['solicitudes']; ?>
                            </span>
                        </td>

                        <!-- PRIMERA SOLICITUD -->
                        <td>
                            <?php echo $mascota['primera_solicitud']; ?>
                        </td>

                        <!-- CIERRE -->
                        <td>
                            <?php echo $mascota['cierre']; ?>
                        </td>

                        <!-- PENDIENTES -->
                        <td>

                            <?php if ($mascota['pendientes'] > 0): ?>

                                <span class="contador contador-pendientes">
                                    <?php echo $mascota['pendientes']; ?>
                                </span>

                            <?php else: ?>

                                <span class="contador contador-cero">
                                    0
                                </span>

                            <?php endif; ?>

                        </td>

                        <!-- VIABLES -->
                        <td>

                            <?php if ($mascota['viables'] > 0): ?>

                                <span class="contador contador-viables">
                                    <?php echo $mascota['viables']; ?>
                                </span>

                            <?php else: ?>

                                <span class="contador contador-cero">
                                    0
                                </span>

                            <?php endif; ?>

                        </td>

                        <!-- RECHAZADAS -->
                        <td>

                            <?php if ($mascota['rechazadas'] > 0): ?>

                                <span class="contador contador-rechazadas">
                                    <?php echo $mascota['rechazadas']; ?>
                                </span>

                            <?php else: ?>

                                <span class="contador contador-cero">
                                    0
                                </span>

                            <?php endif; ?>

                        </td>

                        <!-- ACCIÓN -->
                        <td>

                            <a href="#"
                               class="boton-ver">
                                Ver solicitudes
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

        <!-- NOTA -->
        <div class="nota-sistema">

            <span class="icono-nota">ⓘ</span>

            <p>
                La recepción de solicitudes se cerrará al cumplirse el plazo
                establecido por el refugio o al alcanzar un máximo de
                <strong>10 solicitudes</strong>, lo que ocurra primero.
            </p>

        </div>

        <!-- REGRESAR -->
        <div class="acciones-inferiores">

            <a href="../index.php" class="boton-regresar">
                ← Regresar al panel
            </a>

        </div>

    </section>

</main>

<?php include '../includes/footer.php'; ?>

</body>
</html>