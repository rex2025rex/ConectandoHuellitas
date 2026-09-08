-- CONECTANDO HUELLITAS
-- Base de datos - Primera iteración
-- MariaDB / MySQL (XAMPP)
-- Fecha: 2026-09-04

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP DATABASE IF EXISTS conectando_huellitas;
CREATE DATABASE conectando_huellitas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE conectando_huellitas;

-- BLOQUE 1. ADMINISTRACIÓN, REFUGIOS, USUARIOS Y SEGURIDAD
CREATE TABLE municipios (
 id_municipio INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 estado VARCHAR(50) NOT NULL DEFAULT 'Veracruz',
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_municipio_estado (nombre,estado)
) ENGINE=InnoDB;

CREATE TABLE especies (
 id_especie INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(80) NOT NULL,
 descripcion VARCHAR(255),
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_especie_nombre (nombre)
) ENGINE=InnoDB;

CREATE TABLE refugios (
 id_refugio INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 clave_refugio VARCHAR(20) NOT NULL,
 nombre_refugio VARCHAR(150) NOT NULL,
 responsable VARCHAR(150) NOT NULL,
 telefono VARCHAR(30),
 telefono_contacto_adopciones VARCHAR(30),
 correo VARCHAR(150),
 redes_sociales TEXT,
 capacidad_aproximada INT UNSIGNED,
 observaciones TEXT,
 estado VARCHAR(50) NOT NULL DEFAULT 'Veracruz',
 id_municipio INT UNSIGNED NOT NULL,
 localidad VARCHAR(120),
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 fecha_baja DATETIME NULL,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_refugio_clave (clave_refugio),
 CONSTRAINT fk_refugio_municipio FOREIGN KEY (id_municipio) REFERENCES municipios(id_municipio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE roles (
 id_rol INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(80) NOT NULL,
 codigo VARCHAR(80) NOT NULL,
 descripcion VARCHAR(255),
 es_global TINYINT(1) NOT NULL DEFAULT 0,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_rol_nombre (nombre),
 UNIQUE KEY uq_rol_codigo (codigo)
) ENGINE=InnoDB;

CREATE TABLE permisos (
 id_permiso INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 codigo VARCHAR(120) NOT NULL,
 modulo VARCHAR(80) NOT NULL,
 accion VARCHAR(80) NOT NULL,
 descripcion VARCHAR(255),
 delegable TINYINT(1) NOT NULL DEFAULT 1,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_permiso_codigo (codigo)
) ENGINE=InnoDB;

CREATE TABLE usuarios (
 id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 apellido_paterno VARCHAR(100) NOT NULL,
 apellido_materno VARCHAR(100),
 correo VARCHAR(150) NOT NULL,
 telefono VARCHAR(30),
 password_hash VARCHAR(255) NOT NULL,
 estado VARCHAR(50) NOT NULL DEFAULT 'Veracruz',
 id_municipio INT UNSIGNED NULL,
 localidad VARCHAR(120),
 colonia VARCHAR(120),
 calle VARCHAR(150),
 numero VARCHAR(30),
 codigo_postal VARCHAR(10),
 estatus ENUM('ACTIVO','INACTIVO','BLOQUEADO') NOT NULL DEFAULT 'ACTIVO',
 intentos_fallidos SMALLINT UNSIGNED NOT NULL DEFAULT 0,
 bloqueado_hasta DATETIME NULL,
 ultimo_acceso DATETIME NULL,
 fecha_baja DATETIME NULL,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_usuario_correo (correo),
 CONSTRAINT fk_usuario_municipio FOREIGN KEY (id_municipio) REFERENCES municipios(id_municipio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE refugio_especies (
 id_refugio_especie INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_refugio INT UNSIGNED NOT NULL,
 id_especie INT UNSIGNED NOT NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 asignado_por INT UNSIGNED NULL,
 fecha_asignacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_refugio_especie (id_refugio,id_especie),
 CONSTRAINT fk_re_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_re_especie FOREIGN KEY (id_especie) REFERENCES especies(id_especie) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE usuario_roles (
 id_usuario_rol INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario INT UNSIGNED NOT NULL,
 id_rol INT UNSIGNED NOT NULL,
 id_refugio INT UNSIGNED NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 asignado_por INT UNSIGNED NULL,
 fecha_asignacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 fecha_baja DATETIME NULL,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_usuario_rol_contexto (id_usuario,id_rol,id_refugio),
 CONSTRAINT fk_ur_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ur_rol FOREIGN KEY (id_rol) REFERENCES roles(id_rol) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ur_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE rol_permisos (
 id_rol_permiso INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_rol INT UNSIGNED NOT NULL,
 id_permiso INT UNSIGNED NOT NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 asignado_por INT UNSIGNED NULL,
 fecha_asignacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_rol_permiso (id_rol,id_permiso),
 CONSTRAINT fk_rp_rol FOREIGN KEY (id_rol) REFERENCES roles(id_rol) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_rp_permiso FOREIGN KEY (id_permiso) REFERENCES permisos(id_permiso) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE usuario_permisos (
 id_usuario_permiso INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario INT UNSIGNED NOT NULL,
 id_permiso INT UNSIGNED NOT NULL,
 id_refugio INT UNSIGNED NULL,
 tipo_asignacion ENUM('OTORGADO','RESTRINGIDO') NOT NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 otorgado_por INT UNSIGNED NULL,
 fecha_asignacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_usuario_permiso_contexto (id_usuario,id_permiso,id_refugio),
 CONSTRAINT fk_up_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_up_permiso FOREIGN KEY (id_permiso) REFERENCES permisos(id_permiso) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_up_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE bitacora_auditoria (
 id_bitacora BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario INT UNSIGNED NULL,
 id_refugio INT UNSIGNED NULL,
 accion VARCHAR(100) NOT NULL,
 modulo VARCHAR(100) NOT NULL,
 tabla_afectada VARCHAR(100),
 id_registro BIGINT UNSIGNED NULL,
 descripcion_cambio TEXT,
 fecha_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 ip_origen VARCHAR(45),
 KEY idx_bitacora_usuario_fecha (id_usuario,fecha_hora),
 KEY idx_bitacora_refugio_fecha (id_refugio,fecha_hora),
 CONSTRAINT fk_ba_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ba_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

-- BLOQUE 2. ANIMALES, INGRESOS Y MOVIMIENTOS
CREATE TABLE estatus_animales (
 id_estatus_animal INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 codigo VARCHAR(60) NOT NULL,
 nombre VARCHAR(100) NOT NULL,
 descripcion VARCHAR(255),
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 UNIQUE KEY uq_estatus_animal_codigo (codigo)
) ENGINE=InnoDB;

CREATE TABLE razas (
 id_raza INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_especie INT UNSIGNED NOT NULL,
 nombre VARCHAR(100) NOT NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 UNIQUE KEY uq_raza_especie_nombre (id_especie,nombre),
 CONSTRAINT fk_raza_especie FOREIGN KEY (id_especie) REFERENCES especies(id_especie) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE colores (
 id_color INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(80) NOT NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 UNIQUE KEY uq_color_nombre (nombre)
) ENGINE=InnoDB;

CREATE TABLE animales (
 id_animal INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 clave_animal VARCHAR(40) NOT NULL,
 id_refugio_actual INT UNSIGNED NULL,
 id_especie INT UNSIGNED NOT NULL,
 id_raza INT UNSIGNED NULL,
 nombre VARCHAR(100),
 sexo ENUM('MACHO','HEMBRA','NO_DETERMINADO') NOT NULL DEFAULT 'NO_DETERMINADO',
 edad_aproximada SMALLINT UNSIGNED NULL,
 unidad_edad ENUM('DIAS','SEMANAS','MESES','ANOS') NULL,
 tamano ENUM('PEQUENO','MEDIANO','GRANDE','NO_DETERMINADO') NOT NULL DEFAULT 'NO_DETERMINADO',
 fotografia_principal VARCHAR(255),
 senas_particulares TEXT,
 id_estatus_actual INT UNSIGNED NOT NULL,
 tipo_ubicacion_actual ENUM('REFUGIO','VETERINARIA','HOGAR_TEMPORAL','ADOPTANTE','OTRO') NULL,
 id_ubicacion_actual INT UNSIGNED NULL,
 activo TINYINT(1) NOT NULL DEFAULT 1,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_animal_clave (clave_animal),
 CONSTRAINT fk_animal_refugio FOREIGN KEY (id_refugio_actual) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_animal_especie FOREIGN KEY (id_especie) REFERENCES especies(id_especie) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_animal_raza FOREIGN KEY (id_raza) REFERENCES razas(id_raza) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_animal_estatus FOREIGN KEY (id_estatus_actual) REFERENCES estatus_animales(id_estatus_animal) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE animal_colores (
 id_animal_color INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_color INT UNSIGNED NOT NULL,
 es_principal TINYINT(1) NOT NULL DEFAULT 0,
 UNIQUE KEY uq_animal_color (id_animal,id_color),
 CONSTRAINT fk_ac_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ac_color FOREIGN KEY (id_color) REFERENCES colores(id_color) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE ingresos_animales (
 id_ingreso INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_refugio INT UNSIGNED NOT NULL,
 id_reporte_origen INT UNSIGNED NULL,
 fecha_ingreso DATETIME NOT NULL,
 tipo_ingreso ENUM('RESCATE','ENTREGA_CIUDADANO','ENCONTRADO','TRASLADO','REINCORPORACION','OTRO') NOT NULL,
 nombre_persona_entrega VARCHAR(150),
 telefono_persona_entrega VARCHAR(30),
 id_municipio_hallazgo INT UNSIGNED NULL,
 localidad_hallazgo VARCHAR(120),
 colonia_zona VARCHAR(120),
 calle_hallazgo VARCHAR(150),
 calles_aledanas VARCHAR(200),
 referencias_lugar TEXT,
 condicion_ingreso TEXT,
 peso_ingreso DECIMAL(7,2) NULL,
 temperamento_inicial VARCHAR(120),
 convive_perros ENUM('SI','NO','NO_DETERMINADO') NULL,
 convive_gatos ENUM('SI','NO','NO_DETERMINADO') NULL,
 convive_ninos ENUM('SI','NO','NO_DETERMINADO') NULL,
 collar_objetos TEXT,
 destino_inicial ENUM('REFUGIO','VETERINARIA','HOGAR_TEMPORAL','OTRO') NOT NULL DEFAULT 'REFUGIO',
 observaciones TEXT,
 estatus_ingreso ENUM('ACTIVO','CERRADO','CANCELADO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 cancelado_por INT UNSIGNED NULL,
 fecha_cancelacion DATETIME NULL,
 motivo_cancelacion TEXT,
 CONSTRAINT fk_ingreso_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ingreso_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ingreso_municipio FOREIGN KEY (id_municipio_hallazgo) REFERENCES municipios(id_municipio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE movimientos_animales (
 id_movimiento BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 tipo_movimiento ENUM('INGRESO','TRASLADO','CAMBIO_VETERINARIA','REGRESO_REFUGIO','ADOPCION','REINCORPORACION','REUNIFICACION','FALLECIMIENTO','CAMBIO_RESGUARDO','OTRO') NOT NULL,
 fecha_movimiento DATETIME NOT NULL,
 tipo_origen ENUM('REFUGIO','VETERINARIA','HOGAR_TEMPORAL','ADOPTANTE','OTRO') NULL,
 id_origen INT UNSIGNED NULL,
 tipo_destino ENUM('REFUGIO','VETERINARIA','HOGAR_TEMPORAL','ADOPTANTE','OTRO') NULL,
 id_destino INT UNSIGNED NULL,
 id_estatus_anterior INT UNSIGNED NULL,
 id_estatus_nuevo INT UNSIGNED NULL,
 motivo TEXT,
 observaciones TEXT,
 autorizado_por INT UNSIGNED NULL,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 cancelado_por INT UNSIGNED NULL,
 fecha_cancelacion DATETIME NULL,
 motivo_cancelacion TEXT,
 KEY idx_movimiento_animal_fecha (id_animal,fecha_movimiento),
 CONSTRAINT fk_mov_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_mov_estatus_ant FOREIGN KEY (id_estatus_anterior) REFERENCES estatus_animales(id_estatus_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_mov_estatus_nuevo FOREIGN KEY (id_estatus_nuevo) REFERENCES estatus_animales(id_estatus_animal) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

-- BLOQUE 3. VETERINARIA Y SALUD
CREATE TABLE veterinarias (
 id_veterinaria INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre_veterinaria VARCHAR(150) NOT NULL,
 telefono VARCHAR(30),
 telefono_urgencias VARCHAR(30),
 correo VARCHAR(150),
 id_municipio INT UNSIGNED NULL,
 direccion_referencia VARCHAR(255),
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_veterinaria_municipio FOREIGN KEY (id_municipio) REFERENCES municipios(id_municipio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE veterinarios (
 id_veterinario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_veterinaria INT UNSIGNED NOT NULL,
 nombre_veterinario VARCHAR(150) NOT NULL,
 cedula_profesional VARCHAR(50),
 telefono VARCHAR(30),
 correo VARCHAR(150),
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_veterinario_veterinaria FOREIGN KEY (id_veterinaria) REFERENCES veterinarias(id_veterinaria) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE refugio_veterinarias (
 id_refugio_veterinaria INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_refugio INT UNSIGNED NOT NULL,
 id_veterinaria INT UNSIGNED NOT NULL,
 es_principal TINYINT(1) NOT NULL DEFAULT 0,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_refugio_veterinaria (id_refugio,id_veterinaria),
 CONSTRAINT fk_rv_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_rv_veterinaria FOREIGN KEY (id_veterinaria) REFERENCES veterinarias(id_veterinaria) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE consultas_veterinarias (
 id_consulta INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_veterinaria INT UNSIGNED NULL,
 id_veterinario INT UNSIGNED NULL,
 fecha_consulta DATETIME NOT NULL,
 tipo_consulta ENUM('VALORACION_INICIAL','SUBSECUENTE','URGENCIA','OTRA') NOT NULL,
 motivo_consulta TEXT,
 peso DECIMAL(7,2) NULL,
 diagnostico TEXT,
 indicaciones TEXT,
 observaciones TEXT,
 proxima_consulta DATE NULL,
 estatus_consulta ENUM('REGISTRADA','CANCELADA') NOT NULL DEFAULT 'REGISTRADA',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 cancelado_por INT UNSIGNED NULL,
 fecha_cancelacion DATETIME NULL,
 motivo_cancelacion TEXT,
 CONSTRAINT fk_cv_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_cv_veterinaria FOREIGN KEY (id_veterinaria) REFERENCES veterinarias(id_veterinaria) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_cv_veterinario FOREIGN KEY (id_veterinario) REFERENCES veterinarios(id_veterinario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE vacunas (
 id_vacuna INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre_vacuna VARCHAR(120) NOT NULL,
 descripcion VARCHAR(255),
 id_especie INT UNSIGNED NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_vacuna_especie_nombre (id_especie,nombre_vacuna),
 CONSTRAINT fk_vacuna_especie FOREIGN KEY (id_especie) REFERENCES especies(id_especie) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE vacunaciones (
 id_vacunacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_consulta INT UNSIGNED NULL,
 id_vacuna INT UNSIGNED NOT NULL,
 fecha_aplicacion DATETIME NOT NULL,
 dosis VARCHAR(100),
 numero_dosis SMALLINT UNSIGNED NULL,
 proxima_dosis DATE NULL,
 id_veterinaria INT UNSIGNED NULL,
 id_veterinario INT UNSIGNED NULL,
 observaciones TEXT,
 estatus ENUM('REGISTRADA','CANCELADA') NOT NULL DEFAULT 'REGISTRADA',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 cancelado_por INT UNSIGNED NULL,
 fecha_cancelacion DATETIME NULL,
 motivo_cancelacion TEXT,
 CONSTRAINT fk_vac_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vac_consulta FOREIGN KEY (id_consulta) REFERENCES consultas_veterinarias(id_consulta) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vac_vacuna FOREIGN KEY (id_vacuna) REFERENCES vacunas(id_vacuna) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vac_veterinaria FOREIGN KEY (id_veterinaria) REFERENCES veterinarias(id_veterinaria) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vac_veterinario FOREIGN KEY (id_veterinario) REFERENCES veterinarios(id_veterinario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE productos_desparasitantes (
 id_producto_desparasitante INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre_producto VARCHAR(150) NOT NULL,
 descripcion VARCHAR(255),
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_producto_desparasitante (nombre_producto)
) ENGINE=InnoDB;

CREATE TABLE desparasitaciones (
 id_desparasitacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_consulta INT UNSIGNED NULL,
 id_producto_desparasitante INT UNSIGNED NULL,
 fecha_aplicacion DATETIME NOT NULL,
 dosis VARCHAR(100),
 via_administracion ENUM('ORAL','TOPICA','INYECTABLE','OTRA') NULL,
 proxima_dosis DATE NULL,
 id_veterinaria INT UNSIGNED NULL,
 id_veterinario INT UNSIGNED NULL,
 observaciones TEXT,
 estatus ENUM('REGISTRADA','CANCELADA') NOT NULL DEFAULT 'REGISTRADA',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 cancelado_por INT UNSIGNED NULL,
 fecha_cancelacion DATETIME NULL,
 motivo_cancelacion TEXT,
 CONSTRAINT fk_des_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_des_consulta FOREIGN KEY (id_consulta) REFERENCES consultas_veterinarias(id_consulta) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_des_producto FOREIGN KEY (id_producto_desparasitante) REFERENCES productos_desparasitantes(id_producto_desparasitante) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_des_veterinaria FOREIGN KEY (id_veterinaria) REFERENCES veterinarias(id_veterinaria) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_des_veterinario FOREIGN KEY (id_veterinario) REFERENCES veterinarios(id_veterinario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE tratamientos (
 id_tratamiento INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_consulta_origen INT UNSIGNED NULL,
 fecha_inicio DATE NOT NULL,
 fecha_fin_prevista DATE NULL,
 fecha_fin_real DATE NULL,
 diagnostico_relacionado TEXT,
 estatus ENUM('ACTIVO','FINALIZADO','SUSPENDIDO','CANCELADO') NOT NULL DEFAULT 'ACTIVO',
 fecha_suspension DATE NULL,
 motivo_suspension TEXT,
 suspendido_por INT UNSIGNED NULL,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_trat_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_trat_consulta FOREIGN KEY (id_consulta_origen) REFERENCES consultas_veterinarias(id_consulta) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE tratamiento_detalles (
 id_tratamiento_detalle INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_tratamiento INT UNSIGNED NOT NULL,
 fecha_indicacion DATETIME NOT NULL,
 medicamento VARCHAR(180) NOT NULL,
 dosis VARCHAR(100),
 frecuencia VARCHAR(100),
 via_administracion VARCHAR(80),
 duracion_indicada VARCHAR(100),
 indicaciones TEXT,
 motivo_cambio TEXT,
 id_veterinario INT UNSIGNED NULL,
 id_veterinaria INT UNSIGNED NULL,
 estatus ENUM('VIGENTE','SUSTITUIDO','FINALIZADO','CANCELADO') NOT NULL DEFAULT 'VIGENTE',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_td_tratamiento FOREIGN KEY (id_tratamiento) REFERENCES tratamientos(id_tratamiento) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_td_veterinario FOREIGN KEY (id_veterinario) REFERENCES veterinarios(id_veterinario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_td_veterinaria FOREIGN KEY (id_veterinaria) REFERENCES veterinarias(id_veterinaria) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

-- BLOQUE 4. ADOPCIONES
CREATE TABLE solicitudes_adopcion (
 id_solicitud INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 folio_solicitud VARCHAR(40) NOT NULL,
 id_usuario_solicitante INT UNSIGNED NOT NULL,
 id_animal INT UNSIGNED NOT NULL,
 id_refugio INT UNSIGNED NOT NULL,
 fecha_solicitud DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 estatus_solicitud ENUM('RECIBIDA','EN_REVISION','VIABLE','NO_VIABLE','SELECCIONADA','EN_VERIFICACION','CERRADA','CANCELADA') NOT NULL DEFAULT 'RECIBIDA',
 motivo_rechazo TEXT,
 motivo_cancelacion TEXT,
 fecha_cancelacion DATETIME NULL,
 cancelado_por INT UNSIGNED NULL,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_solicitud_folio (folio_solicitud),
 CONSTRAINT fk_sol_usuario FOREIGN KEY (id_usuario_solicitante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_sol_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_sol_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE solicitud_adopcion_detalle (
 id_solicitud_detalle INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_solicitud INT UNSIGNED NOT NULL,
 tipo_vivienda VARCHAR(80),
 vivienda_propiedad ENUM('PROPIA','RENTADA','OTRA') NULL,
 permiso_mascotas ENUM('SI','NO','NO_APLICA') NULL,
 numero_personas_hogar SMALLINT UNSIGNED NULL,
 hay_ninos TINYINT(1) NULL,
 otras_mascotas TEXT,
 experiencia_previa TEXT,
 tiempo_solo VARCHAR(120),
 lugar_dormir TEXT,
 motivo_adopcion TEXT,
 compromiso_esterilizacion TINYINT(1) NULL,
 acepta_seguimiento TINYINT(1) NULL,
 snapshot_datos_personales JSON NULL,
 observaciones TEXT,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_solicitud_detalle (id_solicitud),
 CONSTRAINT fk_sad_solicitud FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE historial_solicitud (
 id_historial BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_solicitud INT UNSIGNED NOT NULL,
 estatus_anterior VARCHAR(50),
 estatus_nuevo VARCHAR(50) NOT NULL,
 motivo TEXT,
 cambiado_por INT UNSIGNED NULL,
 fecha_cambio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_hs_solicitud FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE evaluaciones_solicitud (
 id_evaluacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_solicitud INT UNSIGNED NOT NULL,
 version_evaluacion SMALLINT UNSIGNED NOT NULL DEFAULT 1,
 fecha_evaluacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 evaluado_por INT UNSIGNED NULL,
 resultado ENUM('PENDIENTE','VIABLE','NO_VIABLE') NOT NULL DEFAULT 'PENDIENTE',
 compatibilidad_mascota ENUM('ALTA','MEDIA','BAJA','NO_EVALUADA') NOT NULL DEFAULT 'NO_EVALUADA',
 condiciones_vivienda ENUM('ADECUADAS','PARCIALES','NO_ADECUADAS','NO_EVALUADAS') NOT NULL DEFAULT 'NO_EVALUADAS',
 experiencia_mascotas ENUM('FAVORABLE','NEUTRAL','INSUFICIENTE','NO_EVALUADA') NOT NULL DEFAULT 'NO_EVALUADA',
 tiempo_disponible ENUM('ADECUADO','LIMITADO','INSUFICIENTE','NO_EVALUADO') NOT NULL DEFAULT 'NO_EVALUADO',
 convivencia_familiar ENUM('FAVORABLE','REQUIERE_REVISION','NO_FAVORABLE','NO_EVALUADA') NOT NULL DEFAULT 'NO_EVALUADA',
 otras_mascotas ENUM('COMPATIBLE','REQUIERE_REVISION','NO_COMPATIBLE','NO_EVALUADO') NOT NULL DEFAULT 'NO_EVALUADO',
 acepta_seguimiento TINYINT(1) NULL,
 observaciones TEXT,
 motivo_no_viable TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_evaluacion_version (id_solicitud,version_evaluacion),
 CONSTRAINT fk_eval_solicitud FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE criterios_desempate (
 id_criterio INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(150) NOT NULL,
 descripcion TEXT,
 prioridad SMALLINT UNSIGNED NULL,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL
) ENGINE=InnoDB;

CREATE TABLE selecciones_candidato (
 id_seleccion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_solicitud INT UNSIGNED NOT NULL,
 fecha_seleccion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 seleccionado_por INT UNSIGNED NULL,
 justificacion TEXT NOT NULL,
 hubo_empate TINYINT(1) NOT NULL DEFAULT 0,
 estatus_seleccion ENUM('SELECCIONADO','EN_VERIFICACION','NO_APROBADO','SUSTITUIDO','CONFIRMADO') NOT NULL DEFAULT 'SELECCIONADO',
 motivo_cambio TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_sel_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_sel_solicitud FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE seleccion_criterios (
 id_seleccion_criterio INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_seleccion INT UNSIGNED NOT NULL,
 id_criterio INT UNSIGNED NOT NULL,
 valoracion VARCHAR(120),
 observaciones TEXT,
 registrado_por INT UNSIGNED NULL,
 fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_seleccion_criterio (id_seleccion,id_criterio),
 CONSTRAINT fk_sc_seleccion FOREIGN KEY (id_seleccion) REFERENCES selecciones_candidato(id_seleccion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_sc_criterio FOREIGN KEY (id_criterio) REFERENCES criterios_desempate(id_criterio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE requisitos_verificacion (
 id_requisito INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(150) NOT NULL,
 descripcion TEXT,
 obligatorio TINYINT(1) NOT NULL DEFAULT 1,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL
) ENGINE=InnoDB;

CREATE TABLE verificaciones_candidato (
 id_verificacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_seleccion INT UNSIGNED NOT NULL,
 id_solicitud INT UNSIGNED NOT NULL,
 fecha_inicio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 fecha_finalizacion DATETIME NULL,
 verificado_por INT UNSIGNED NULL,
 resultado ENUM('PENDIENTE','APROBADO','NO_APROBADO','REQUIERE_MAS_INFORMACION') NOT NULL DEFAULT 'PENDIENTE',
 motivo_no_aprobacion TEXT,
 observaciones TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_ver_sel FOREIGN KEY (id_seleccion) REFERENCES selecciones_candidato(id_seleccion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ver_sol FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE verificacion_detalle (
 id_detalle INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_verificacion INT UNSIGNED NOT NULL,
 id_requisito INT UNSIGNED NOT NULL,
 resultado ENUM('PENDIENTE','CUMPLE','NO_CUMPLE','NO_APLICA') NOT NULL DEFAULT 'PENDIENTE',
 observaciones TEXT,
 verificado_por INT UNSIGNED NULL,
 fecha_verificacion DATETIME NULL,
 UNIQUE KEY uq_verificacion_requisito (id_verificacion,id_requisito),
 CONSTRAINT fk_vd_verificacion FOREIGN KEY (id_verificacion) REFERENCES verificaciones_candidato(id_verificacion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vd_requisito FOREIGN KEY (id_requisito) REFERENCES requisitos_verificacion(id_requisito) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE tipos_documento_adopcion (
 id_tipo_documento INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre_documento VARCHAR(150) NOT NULL,
 descripcion TEXT,
 requiere_vigencia TINYINT(1) NOT NULL DEFAULT 0,
 requiere_firma TINYINT(1) NOT NULL DEFAULT 0,
 obligatorio TINYINT(1) NOT NULL DEFAULT 1,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_tipo_doc_adopcion (nombre_documento)
) ENGINE=InnoDB;

CREATE TABLE plantillas_documentos (
 id_plantilla INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_tipo_documento INT UNSIGNED NOT NULL,
 nombre VARCHAR(150) NOT NULL,
 version VARCHAR(30) NOT NULL,
 fecha_vigencia_desde DATE NOT NULL,
 fecha_vigencia_hasta DATE NULL,
 archivo_plantilla VARCHAR(255),
 estatus ENUM('ACTIVA','INACTIVA') NOT NULL DEFAULT 'ACTIVA',
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_plantilla_version (id_tipo_documento,version),
 CONSTRAINT fk_pd_tipo FOREIGN KEY (id_tipo_documento) REFERENCES tipos_documento_adopcion(id_tipo_documento) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE adopciones (
 id_adopcion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_animal INT UNSIGNED NOT NULL,
 id_usuario_adoptante INT UNSIGNED NOT NULL,
 id_solicitud INT UNSIGNED NOT NULL,
 id_seleccion INT UNSIGNED NOT NULL,
 id_verificacion INT UNSIGNED NOT NULL,
 id_refugio INT UNSIGNED NOT NULL,
 fecha_adopcion DATETIME NOT NULL,
 estatus_adopcion ENUM('VIGENTE','REINCORPORADA','CANCELADA','CONCLUIDA') NOT NULL DEFAULT 'VIGENTE',
 responsable_autoriza INT UNSIGNED NULL,
 observaciones TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_adop_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_adop_usuario FOREIGN KEY (id_usuario_adoptante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_adop_solicitud FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_adop_seleccion FOREIGN KEY (id_seleccion) REFERENCES selecciones_candidato(id_seleccion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_adop_verificacion FOREIGN KEY (id_verificacion) REFERENCES verificaciones_candidato(id_verificacion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_adop_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE documentos_adopcion (
 id_documento_adopcion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_adopcion INT UNSIGNED NOT NULL,
 id_tipo_documento INT UNSIGNED NOT NULL,
 nombre_original VARCHAR(255) NOT NULL,
 nombre_interno VARCHAR(255) NOT NULL,
 ruta_archivo VARCHAR(255) NOT NULL,
 mime_type VARCHAR(100),
 tamano_bytes BIGINT UNSIGNED NULL,
 hash_sha256 CHAR(64) NULL,
 fecha_documento DATE NULL,
 fecha_vigencia DATE NULL,
 estatus_verificacion ENUM('PENDIENTE','VERIFICADO','RECHAZADO','SUSTITUIDO') NOT NULL DEFAULT 'PENDIENTE',
 verificado_por INT UNSIGNED NULL,
 fecha_verificacion DATETIME NULL,
 observaciones TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_da_adopcion FOREIGN KEY (id_adopcion) REFERENCES adopciones(id_adopcion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_da_tipo FOREIGN KEY (id_tipo_documento) REFERENCES tipos_documento_adopcion(id_tipo_documento) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE firmas_adopcion (
 id_firma INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_adopcion INT UNSIGNED NOT NULL,
 id_documento_adopcion INT UNSIGNED NOT NULL,
 id_usuario_adoptante INT UNSIGNED NOT NULL,
 version_documento VARCHAR(30) NOT NULL,
 fecha_firma DATETIME NOT NULL,
 tipo_firma ENUM('MANUSCRITA','DIGITAL','ACEPTACION_ELECTRONICA','OTRA') NOT NULL,
 estatus ENUM('VIGENTE','ANULADA') NOT NULL DEFAULT 'VIGENTE',
 registrado_por INT UNSIGNED NULL,
 fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_fa_adopcion FOREIGN KEY (id_adopcion) REFERENCES adopciones(id_adopcion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_fa_doc FOREIGN KEY (id_documento_adopcion) REFERENCES documentos_adopcion(id_documento_adopcion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_fa_usuario FOREIGN KEY (id_usuario_adoptante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE entregas_adopcion (
 id_entrega INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_adopcion INT UNSIGNED NOT NULL,
 id_animal INT UNSIGNED NOT NULL,
 fecha_programada DATETIME NULL,
 fecha_entrega_real DATETIME NULL,
 tipo_entrega ENUM('DOMICILIO_ADOPTANTE','REFUGIO','OTRO_AUTORIZADO') NOT NULL,
 estatus_entrega ENUM('PROGRAMADA','REALIZADA','REPROGRAMADA','CANCELADA') NOT NULL DEFAULT 'PROGRAMADA',
 recibido_por INT UNSIGNED NULL,
 entregado_por INT UNSIGNED NULL,
 condicion_animal_entrega TEXT,
 documentacion_entregada TEXT,
 observaciones TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_ea_adopcion FOREIGN KEY (id_adopcion) REFERENCES adopciones(id_adopcion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ea_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE seguimientos_adopcion (
 id_seguimiento INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_adopcion INT UNSIGNED NOT NULL,
 fecha_seguimiento DATETIME NOT NULL,
 tipo_seguimiento ENUM('LLAMADA','MENSAJE','VISITA','VIDEOLLAMADA','OTRO') NOT NULL,
 resultado ENUM('SATISFACTORIO','REQUIERE_ATENCION','NO_LOCALIZADO','INCUMPLIMIENTO') NOT NULL,
 estado_animal TEXT,
 adaptacion TEXT,
 alimentacion TEXT,
 salud TEXT,
 convivencia TEXT,
 cumplimiento_compromisos ENUM('CUMPLE','PARCIAL','NO_CUMPLE') NULL,
 requiere_nuevo_seguimiento TINYINT(1) NOT NULL DEFAULT 0,
 fecha_proximo_seguimiento DATE NULL,
 genera_alerta TINYINT(1) NOT NULL DEFAULT 0,
 observaciones TEXT,
 realizado_por INT UNSIGNED NULL,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_seg_adopcion FOREIGN KEY (id_adopcion) REFERENCES adopciones(id_adopcion) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE reincorporaciones_adopcion (
 id_reincorporacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_adopcion INT UNSIGNED NOT NULL,
 id_animal INT UNSIGNED NOT NULL,
 fecha_reincorporacion DATETIME NOT NULL,
 motivo VARCHAR(180) NOT NULL,
 descripcion_motivo TEXT,
 condicion_regreso TEXT,
 id_refugio_receptor INT UNSIGNED NOT NULL,
 requiere_valoracion TINYINT(1) NOT NULL DEFAULT 1,
 genera_revision_antecedente TINYINT(1) NOT NULL DEFAULT 0,
 responsable_recibe INT UNSIGNED NULL,
 observaciones TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_reinc_adopcion FOREIGN KEY (id_adopcion) REFERENCES adopciones(id_adopcion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_reinc_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_reinc_refugio FOREIGN KEY (id_refugio_receptor) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE antecedentes_adoptantes (
 id_antecedente INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario_adoptante INT UNSIGNED NOT NULL,
 id_refugio_origen INT UNSIGNED NOT NULL,
 id_adopcion INT UNSIGNED NULL,
 id_seguimiento INT UNSIGNED NULL,
 tipo_antecedente VARCHAR(120) NOT NULL,
 nivel_gravedad ENUM('INFORMATIVO','MODERADO','GRAVE') NOT NULL,
 descripcion TEXT NOT NULL,
 fecha_hecho DATETIME NOT NULL,
 impide_adopcion TINYINT(1) NOT NULL DEFAULT 0,
 vigente TINYINT(1) NOT NULL DEFAULT 1,
 evidencia_disponible TINYINT(1) NOT NULL DEFAULT 0,
 estatus ENUM('EN_REVISION','CONFIRMADO','RECTIFICADO','SIN_EFECTO') NOT NULL DEFAULT 'EN_REVISION',
 registrado_por INT UNSIGNED NULL,
 fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 autorizado_por INT UNSIGNED NULL,
 fecha_autorizacion DATETIME NULL,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_aa_usuario FOREIGN KEY (id_usuario_adoptante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_aa_refugio FOREIGN KEY (id_refugio_origen) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_aa_adopcion FOREIGN KEY (id_adopcion) REFERENCES adopciones(id_adopcion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_aa_seguimiento FOREIGN KEY (id_seguimiento) REFERENCES seguimientos_adopcion(id_seguimiento) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE consultas_antecedentes (
 id_consulta_antecedente BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario_adoptante INT UNSIGNED NOT NULL,
 id_solicitud INT UNSIGNED NOT NULL,
 id_refugio_consultante INT UNSIGNED NOT NULL,
 consultado_por INT UNSIGNED NOT NULL,
 fecha_consulta DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 resultado_consulta VARCHAR(255),
 CONSTRAINT fk_ca_usuario FOREIGN KEY (id_usuario_adoptante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ca_solicitud FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ca_refugio FOREIGN KEY (id_refugio_consultante) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ca_consultado_por FOREIGN KEY (consultado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE autorizaciones_datos_adoptante (
 id_autorizacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario_adoptante INT UNSIGNED NOT NULL,
 id_refugio INT UNSIGNED NOT NULL,
 id_solicitud INT UNSIGNED NOT NULL,
 autoriza_datos_perfil TINYINT(1) NOT NULL DEFAULT 0,
 autoriza_historial_adopciones TINYINT(1) NOT NULL DEFAULT 0,
 fecha_autorizacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 estatus ENUM('VIGENTE','REVOCADA','CONCLUIDA') NOT NULL DEFAULT 'VIGENTE',
 fecha_revocacion DATETIME NULL,
 fecha_conclusion DATETIME NULL,
 medio_autorizacion VARCHAR(100),
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_autorizacion_solicitud_refugio (id_usuario_adoptante,id_refugio,id_solicitud),
 CONSTRAINT fk_ada_usuario FOREIGN KEY (id_usuario_adoptante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ada_refugio FOREIGN KEY (id_refugio) REFERENCES refugios(id_refugio) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ada_solicitud FOREIGN KEY (id_solicitud) REFERENCES solicitudes_adopcion(id_solicitud) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

-- BLOQUE 5. MASCOTAS PERDIDAS Y ENCONTRADAS
CREATE TABLE reportes_mascotas (
 id_reporte INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 folio_reporte VARCHAR(40) NOT NULL,
 id_usuario_reportante INT UNSIGNED NOT NULL,
 tipo_reporte ENUM('PERDIDO','ENCONTRADO') NOT NULL,
 id_especie INT UNSIGNED NOT NULL,
 id_raza INT UNSIGNED NULL,
 sexo ENUM('MACHO','HEMBRA','NO_DETERMINADO') NOT NULL DEFAULT 'NO_DETERMINADO',
 tamano ENUM('PEQUENO','MEDIANO','GRANDE','NO_DETERMINADO') NOT NULL DEFAULT 'NO_DETERMINADO',
 fotografia_principal VARCHAR(255),
 fecha_evento DATETIME NOT NULL,
 id_municipio INT UNSIGNED NOT NULL,
 localidad VARCHAR(120),
 colonia_zona VARCHAR(120),
 referencia_aproximada VARCHAR(255),
 senas_particulares_reservadas TEXT,
 estatus_reporte ENUM('ACTIVO','POSIBLE_COINCIDENCIA','EN_VALIDACION','RESUELTO','CANCELADO') NOT NULL DEFAULT 'ACTIVO',
 motivo_cancelacion TEXT,
 cancelado_por INT UNSIGNED NULL,
 fecha_cancelacion DATETIME NULL,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_reporte_folio (folio_reporte),
 KEY idx_reporte_tipo_estatus (tipo_reporte,estatus_reporte),
 KEY idx_reporte_municipio_fecha (id_municipio,fecha_evento),
 CONSTRAINT fk_rm_usuario FOREIGN KEY (id_usuario_reportante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_rm_especie FOREIGN KEY (id_especie) REFERENCES especies(id_especie) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_rm_raza FOREIGN KEY (id_raza) REFERENCES razas(id_raza) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_rm_municipio FOREIGN KEY (id_municipio) REFERENCES municipios(id_municipio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

ALTER TABLE ingresos_animales
 ADD CONSTRAINT fk_ingreso_reporte_origen FOREIGN KEY (id_reporte_origen) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT;

CREATE TABLE detalle_reporte_perdido (
 id_detalle_perdido INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 nombre_mascota VARCHAR(100),
 edad_aproximada SMALLINT UNSIGNED NULL,
 unidad_edad ENUM('DIAS','SEMANAS','MESES','ANOS') NULL,
 fecha_ultima_vez_vista DATETIME NULL,
 lugar_ultima_vez_vista VARCHAR(255),
 traia_collar TINYINT(1) NULL,
 descripcion_collar TEXT,
 esta_esterilizada ENUM('SI','NO','NO_SE_SABE') NULL,
 requiere_medicamento TINYINT(1) NULL,
 informacion_medica_reservada TEXT,
 observaciones TEXT,
 UNIQUE KEY uq_detalle_perdido_reporte (id_reporte),
 CONSTRAINT fk_drp_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE detalle_reporte_encontrado (
 id_detalle_encontrado INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 nombre_temporal VARCHAR(100),
 edad_aproximada SMALLINT UNSIGNED NULL,
 unidad_edad ENUM('DIAS','SEMANAS','MESES','ANOS') NULL,
 condicion_al_encontrarlo TEXT,
 traia_collar TINYINT(1) NULL,
 descripcion_collar TEXT,
 tipo_resguardo ENUM('REPORTANTE','REFUGIO','VETERINARIA','HOGAR_TEMPORAL','SIN_RESGUARDO','OTRO') NULL,
 detalle_resguardo TEXT,
 requiere_atencion TINYINT(1) NULL,
 observaciones TEXT,
 UNIQUE KEY uq_detalle_encontrado_reporte (id_reporte),
 CONSTRAINT fk_dre_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE reporte_colores (
 id_reporte_color INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 id_color INT UNSIGNED NOT NULL,
 es_principal TINYINT(1) NOT NULL DEFAULT 0,
 UNIQUE KEY uq_reporte_color (id_reporte,id_color),
 CONSTRAINT fk_rc_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_rc_color FOREIGN KEY (id_color) REFERENCES colores(id_color) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE coincidencias_reportes (
 id_coincidencia INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte_perdido INT UNSIGNED NOT NULL,
 id_reporte_encontrado INT UNSIGNED NOT NULL,
 fecha_deteccion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 origen_coincidencia ENUM('MANUAL','SISTEMA') NOT NULL,
 nivel_coincidencia ENUM('BAJA','MEDIA','ALTA') NOT NULL,
 estatus_coincidencia ENUM('PENDIENTE','EN_REVISION','CONFIRMADA','DESCARTADA') NOT NULL DEFAULT 'PENDIENTE',
 motivo_coincidencia TEXT,
 revisado_por INT UNSIGNED NULL,
 fecha_revision DATETIME NULL,
 resultado_revision ENUM('CONFIRMADA','NO_COINCIDE','REQUIERE_MAS_INFORMACION') NULL,
 observaciones TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 UNIQUE KEY uq_coincidencia_par (id_reporte_perdido,id_reporte_encontrado),
 CONSTRAINT fk_cr_perdido FOREIGN KEY (id_reporte_perdido) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_cr_encontrado FOREIGN KEY (id_reporte_encontrado) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE coincidencia_criterios (
 id_coincidencia_criterio INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_coincidencia INT UNSIGNED NOT NULL,
 criterio VARCHAR(100) NOT NULL,
 valor_perdido VARCHAR(255),
 valor_encontrado VARCHAR(255),
 coincide ENUM('SI','NO','PARCIAL') NULL,
 CONSTRAINT fk_cc_coincidencia FOREIGN KEY (id_coincidencia) REFERENCES coincidencias_reportes(id_coincidencia) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE tipos_evidencia_propiedad (
 id_tipo_evidencia INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(150) NOT NULL,
 descripcion TEXT,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 UNIQUE KEY uq_tipo_evidencia_nombre (nombre)
) ENGINE=InnoDB;

CREATE TABLE validaciones_propiedad (
 id_validacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_coincidencia INT UNSIGNED NULL,
 id_reporte_perdido INT UNSIGNED NOT NULL,
 id_reporte_encontrado INT UNSIGNED NULL,
 id_usuario_solicitante INT UNSIGNED NOT NULL,
 fecha_inicio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 fecha_finalizacion DATETIME NULL,
 resultado ENUM('PENDIENTE','CONFIRMADA','NO_CONFIRMADA','REQUIERE_MAS_EVIDENCIA') NOT NULL DEFAULT 'PENDIENTE',
 motivo_resultado TEXT,
 validado_por INT UNSIGNED NULL,
 observaciones TEXT,
 creado_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_vp_coincidencia FOREIGN KEY (id_coincidencia) REFERENCES coincidencias_reportes(id_coincidencia) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vp_perdido FOREIGN KEY (id_reporte_perdido) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vp_encontrado FOREIGN KEY (id_reporte_encontrado) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_vp_usuario FOREIGN KEY (id_usuario_solicitante) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE validacion_evidencias (
 id_evidencia INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_validacion INT UNSIGNED NOT NULL,
 id_tipo_evidencia INT UNSIGNED NOT NULL,
 descripcion_presentada TEXT,
 coincide ENUM('SI','NO','PARCIAL','PENDIENTE') NOT NULL DEFAULT 'PENDIENTE',
 nivel_confianza ENUM('BAJO','MEDIO','ALTO') NULL,
 observaciones TEXT,
 verificado_por INT UNSIGNED NULL,
 fecha_verificacion DATETIME NULL,
 CONSTRAINT fk_ve_validacion FOREIGN KEY (id_validacion) REFERENCES validaciones_propiedad(id_validacion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ve_tipo FOREIGN KEY (id_tipo_evidencia) REFERENCES tipos_evidencia_propiedad(id_tipo_evidencia) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE reunificaciones (
 id_reunificacion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_validacion INT UNSIGNED NOT NULL,
 id_reporte_perdido INT UNSIGNED NOT NULL,
 id_reporte_encontrado INT UNSIGNED NULL,
 id_animal INT UNSIGNED NULL,
 fecha_reunificacion DATETIME NOT NULL,
 lugar_entrega VARCHAR(255),
 entregado_por INT UNSIGNED NULL,
 recibido_por INT UNSIGNED NOT NULL,
 condicion_animal_entrega TEXT,
 observaciones TEXT,
 registrado_por INT UNSIGNED NULL,
 fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 modificado_por INT UNSIGNED NULL,
 fecha_modificacion DATETIME NULL,
 CONSTRAINT fk_reu_validacion FOREIGN KEY (id_validacion) REFERENCES validaciones_propiedad(id_validacion) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_reu_perdido FOREIGN KEY (id_reporte_perdido) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_reu_encontrado FOREIGN KEY (id_reporte_encontrado) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_reu_animal FOREIGN KEY (id_animal) REFERENCES animales(id_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_reu_recibido FOREIGN KEY (recibido_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE resoluciones_reporte (
 id_resolucion INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 tipo_resolucion ENUM('REUNIFICACION','INGRESO_REFUGIO','PROPIETARIO_LOCALIZADO','OTRA') NOT NULL,
 fecha_resolucion DATETIME NOT NULL,
 descripcion TEXT,
 registrado_por INT UNSIGNED NULL,
 fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_rr_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE carteles_reporte (
 id_cartel INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 version SMALLINT UNSIGNED NOT NULL DEFAULT 1,
 fecha_generacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 ruta_archivo VARCHAR(255),
 hash_sha256 CHAR(64) NULL,
 generado_por INT UNSIGNED NULL,
 estatus ENUM('VIGENTE','SUSTITUIDO','ANULADO') NOT NULL DEFAULT 'VIGENTE',
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 UNIQUE KEY uq_cartel_version (id_reporte,version),
 CONSTRAINT fk_cartel_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE historial_estatus_reporte (
 id_historial BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 estatus_anterior VARCHAR(50),
 estatus_nuevo VARCHAR(50) NOT NULL,
 motivo TEXT,
 cambiado_por INT UNSIGNED NULL,
 fecha_cambio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_her_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE avisos_reportes (
 id_aviso INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 id_usuario INT UNSIGNED NULL,
 fecha_aviso DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 descripcion TEXT NOT NULL,
 id_municipio INT UNSIGNED NULL,
 colonia_zona VARCHAR(120),
 medio_contacto VARCHAR(100),
 estatus ENUM('RECIBIDO','EN_REVISION','ATENDIDO','DESCARTADO') NOT NULL DEFAULT 'RECIBIDO',
 atendido_por INT UNSIGNED NULL,
 fecha_atencion DATETIME NULL,
 observaciones TEXT,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_ar_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ar_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_ar_municipio FOREIGN KEY (id_municipio) REFERENCES municipios(id_municipio) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE evidencias_reporte (
 id_evidencia INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_reporte INT UNSIGNED NOT NULL,
 id_validacion INT UNSIGNED NULL,
 tipo_evidencia VARCHAR(100),
 nombre_original VARCHAR(255),
 nombre_interno VARCHAR(255),
 ruta_archivo VARCHAR(255) NOT NULL,
 mime_type VARCHAR(100),
 tamano_bytes BIGINT UNSIGNED NULL,
 hash_sha256 CHAR(64) NULL,
 descripcion TEXT,
 nivel_confidencialidad ENUM('PUBLICO','INTERNO','RESERVADO') NOT NULL DEFAULT 'INTERNO',
 subido_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 CONSTRAINT fk_er_reporte FOREIGN KEY (id_reporte) REFERENCES reportes_mascotas(id_reporte) ON UPDATE CASCADE ON DELETE RESTRICT,
 CONSTRAINT fk_er_validacion FOREIGN KEY (id_validacion) REFERENCES validaciones_propiedad(id_validacion) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

-- BLOQUE 6. TRANSVERSALES
CREATE TABLE documentos (
 id_documento BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 tipo_entidad VARCHAR(80) NOT NULL,
 id_entidad BIGINT UNSIGNED NOT NULL,
 tipo_documento VARCHAR(100),
 nombre_original VARCHAR(255),
 nombre_interno VARCHAR(255) NOT NULL,
 ruta_archivo VARCHAR(255) NOT NULL,
 mime_type VARCHAR(100),
 tamano_bytes BIGINT UNSIGNED NULL,
 hash_sha256 CHAR(64) NULL,
 nivel_confidencialidad ENUM('PUBLICO','INTERNO','RESERVADO') NOT NULL DEFAULT 'INTERNO',
 descripcion TEXT,
 subido_por INT UNSIGNED NULL,
 fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 estatus ENUM('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
 KEY idx_documento_entidad (tipo_entidad,id_entidad)
) ENGINE=InnoDB;

CREATE TABLE notificaciones (
 id_notificacion BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario INT UNSIGNED NOT NULL,
 tipo_notificacion VARCHAR(80) NOT NULL,
 titulo VARCHAR(180) NOT NULL,
 mensaje TEXT NOT NULL,
 fecha_programada DATETIME NULL,
 fecha_generacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 fecha_lectura DATETIME NULL,
 estatus ENUM('PENDIENTE','GENERADA','LEIDA','CANCELADA') NOT NULL DEFAULT 'PENDIENTE',
 tipo_entidad_relacionada VARCHAR(80) NULL,
 id_entidad_relacionada BIGINT UNSIGNED NULL,
 CONSTRAINT fk_not_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE sesiones_usuario (
 id_sesion BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 id_usuario INT UNSIGNED NOT NULL,
 token_hash CHAR(64) NOT NULL,
 fecha_inicio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 fecha_ultima_actividad DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 fecha_expiracion DATETIME NOT NULL,
 fecha_cierre DATETIME NULL,
 ip_origen VARCHAR(45),
 user_agent VARCHAR(255),
 estatus ENUM('ACTIVA','CERRADA','EXPIRADA','REVOCADA') NOT NULL DEFAULT 'ACTIVA',
 UNIQUE KEY uq_sesion_token_hash (token_hash),
 KEY idx_sesion_usuario_estatus (id_usuario,estatus),
 CONSTRAINT fk_sesion_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

-- FOREIGN KEYS DE TRAZABILIDAD DEL NÚCLEO
ALTER TABLE especies
 ADD CONSTRAINT fk_especie_creado_por FOREIGN KEY (creado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_especie_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE refugios
 ADD CONSTRAINT fk_refugio_creado_por FOREIGN KEY (creado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_refugio_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE usuarios
 ADD CONSTRAINT fk_usuario_creado_por FOREIGN KEY (creado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_usuario_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE roles
 ADD CONSTRAINT fk_rol_creado_por FOREIGN KEY (creado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_rol_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE permisos
 ADD CONSTRAINT fk_permiso_creado_por FOREIGN KEY (creado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_permiso_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE refugio_especies
 ADD CONSTRAINT fk_re_asignado_por FOREIGN KEY (asignado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_re_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE usuario_roles
 ADD CONSTRAINT fk_ur_asignado_por FOREIGN KEY (asignado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_ur_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE rol_permisos
 ADD CONSTRAINT fk_rp_asignado_por FOREIGN KEY (asignado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

ALTER TABLE usuario_permisos
 ADD CONSTRAINT fk_up_otorgado_por FOREIGN KEY (otorgado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
 ADD CONSTRAINT fk_up_modificado_por FOREIGN KEY (modificado_por) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

-- DATOS INICIALES
INSERT INTO municipios (nombre,estado) VALUES
('Xalapa','Veracruz'),
('Coatepec','Veracruz'),
('Banderilla','Veracruz');

INSERT INTO especies (nombre,descripcion) VALUES
('Perro','Canino doméstico'),
('Gato','Felino doméstico'),
('Conejo','Conejo doméstico'),
('Hurón','Hurón doméstico'),
('Tlacuache','Fauna silvestre / rescate'),
('Otro','Otra especie');

INSERT INTO colores (nombre) VALUES
('Negro'),('Blanco'),('Café'),('Gris'),('Dorado'),('Crema'),('Naranja'),('Manchado'),('Atigrado'),('Otro');

INSERT INTO estatus_animales (codigo,nombre,descripcion) VALUES
('EN_VALORACION','En valoración','Animal pendiente o en proceso de valoración'),
('EN_TRATAMIENTO','En tratamiento','Animal con tratamiento médico activo'),
('EN_RESGUARDO','En resguardo','Animal bajo resguardo'),
('DISPONIBLE_ADOPCION','Disponible para adopción','Animal apto para proceso de adopción'),
('EN_PROCESO_ADOPCION','En proceso de adopción','Animal con proceso de adopción abierto'),
('ADOPTADO','Adoptado','Animal entregado en adopción'),
('REUNIFICADO','Reunificado','Animal reunificado con su familia'),
('FALLECIDO','Fallecido','Animal fallecido');

INSERT INTO roles (nombre,codigo,descripcion,es_global) VALUES
('Superadministrador','SUPERADMINISTRADOR','Acceso global al sistema',1),
('Administrador de refugio','ADMINISTRADOR_REFUGIO','Administra un refugio específico',0),
('Personal / Trabajador','PERSONAL','Operación diaria del refugio',0),
('Voluntario','VOLUNTARIO','Acceso operativo limitado',0),
('Usuario externo','USUARIO_EXTERNO','Usuario no perteneciente al personal del refugio',1);

INSERT INTO criterios_desempate (nombre,descripcion,prioridad) VALUES
('Compatibilidad con la mascota','Mayor compatibilidad con las necesidades específicas del animal',1),
('Historial favorable de adopciones','Adopciones previas satisfactorias y sin incidencias relevantes',2),
('Seguimientos satisfactorios','Cumplimiento favorable de seguimientos anteriores',3),
('Estabilidad de condiciones','Condiciones de vivienda, tiempo y convivencia favorables',4),
('Antigüedad de la solicitud','Fecha y hora de recepción, solo como criterio posterior de desempate',5);

INSERT INTO requisitos_verificacion (nombre,descripcion,obligatorio) VALUES
('Identificación oficial','Verificación de identidad del candidato',1),
('Comprobante de domicilio','Comprobación del domicilio declarado',1),
('Permiso de vivienda','Cuando la vivienda es rentada y se requiere autorización',0),
('Información familiar','Verificación de la información del hogar',1),
('Referencias','Referencias cuando el procedimiento las requiera',0);

INSERT INTO tipos_documento_adopcion
(nombre_documento,descripcion,requiere_vigencia,requiere_firma,obligatorio) VALUES
('Identificación oficial','Documento de identidad vigente',1,0,1),
('Comprobante de domicilio','Comprobante de domicilio reciente',1,0,1),
('Contrato de adopción','Contrato formal de adopción',0,1,1),
('Carta compromiso','Compromisos asumidos por el adoptante',0,1,1);

INSERT INTO tipos_evidencia_propiedad (nombre,descripcion) VALUES
('Seña particular reservada','Descripción de una característica no publicada'),
('Fotografía previa','Fotografía anterior de la mascota con su familia'),
('Documento veterinario','Cartilla, receta o documento veterinario'),
('Collar o accesorio','Descripción verificable de accesorios'),
('Microchip','Identificación mediante microchip'),
('Información médica específica','Información médica reservada'),
('Otra evidencia','Otra evidencia relevante');

-- El Superadministrador inicial se crea después mediante un alta controlada.
-- En esa cuenta bootstrap, creado_por puede ser NULL.

SET FOREIGN_KEY_CHECKS = 1;
