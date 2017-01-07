-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2016 a las 12:17:00
-- Versión del servidor: 5.0.96-community
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `webevolu_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bancos`
--

CREATE TABLE IF NOT EXISTS `Bancos` (
  `Id` int(6) NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  `Activo` varchar(100) NOT NULL,
  `Muestra` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Bancos`
--

INSERT INTO `Bancos` (`Id`, `Nombre`, `Activo`, `Muestra`) VALUES
(3, 'BANCOLOMBIA', '', ''),
(4, 'PAYPAL', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Celcontacto` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Observaciones` text NOT NULL,
  `Retencion` double NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `TipoCuenta` varchar(20) NOT NULL,
  `NumeroCuenta` varchar(100) NOT NULL,
  `Titular` varchar(100) NOT NULL,
  `Identificacion` varchar(100) NOT NULL,
  `FormaPago` varchar(100) NOT NULL,
  `Banco` varchar(100) NOT NULL,
  `Hosting` int(11) NOT NULL,
  `FechaOrigenH` date NOT NULL,
  `FechaVenceH` date NOT NULL,
  `EmpresaH` varchar(255) NOT NULL,
  `UsuarioH` varchar(255) NOT NULL,
  `ContrasenaH` varchar(255) NOT NULL,
  `FechaOrigenD` varchar(255) NOT NULL,
  `FechaVenceD` varchar(255) NOT NULL,
  `EmpresaD` varchar(255) NOT NULL,
  `UsuarioD` varchar(255) NOT NULL,
  `ContrasenaD` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`Id`, `Nombre`, `Cedula`, `Ciudad`, `Dir`, `Telefono`, `Celular`, `Contacto`, `Celcontacto`, `Email`, `Observaciones`, `Retencion`, `Contrasena`, `TipoCuenta`, `NumeroCuenta`, `Titular`, `Identificacion`, `FormaPago`, `Banco`, `Hosting`, `FechaOrigenH`, `FechaVenceH`, `EmpresaH`, `UsuarioH`, `ContrasenaH`, `FechaOrigenD`, `FechaVenceD`, `EmpresaD`, `UsuarioD`, `ContrasenaD`, `Usuario`, `Muestra`) VALUES
(1, 'PRUEBA', 'prueba', 'PRUEBA', 'PRUEBA', '0', '0', 'PRUEBA', '0', 'prueba@gmail.com', '', 0, 'prueba', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 1),
(2, 'ACADEMIA IFBB COLOMBIA', 'ACADEMIA IFBB COLOMBIA', 'CHIA, BOGOTA', 'CHIA, COLOMBIA', '3107095442', '3107095442', 'WILBERT PEREZ', '3107095442', 'academiaifbbcolombia@gmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(3, 'AEROBUZON', 'AEROBUZON', 'BOGOTA ', 'CARRERA 118 NO. 80A – 65 INT 3 OF. 501', '57(1) 485 0240', '0', '', '0', 'info@aerobuzon.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(4, 'ALMACEN EL PEZ', 'ALMACEN EL PEZ', 'MEDELLIN', 'PASAJE COMERCIAL LA BOLSA CR 50 # 50 - 44 | LOCAL 147 (PARQUE DE BERRIO)', '(054) 293 17 26', '0', '', '0', 'info@almacenelpez.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(5, 'ANDRES ANGEL SAS', 'ANDRES ANGEL SAS', 'MEDELLIN', 'CALLE 5 A NO. 39 ? 194. OFICINA 801', '(574) 444 9106', '', 'ANDRES ANGEL', '313 653 0326', 'info@andresangel.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(6, 'ANDRES VALENCIA ABOGADOS', 'ANDRES VALENCIA ABOGADOS', 'MEDELLIN', 'CL. 37B #84-39, MEDELLÍN, ANTIOQUIA', '448 22 28', '', 'ANDRES VALENCIA', '3006174194', 'info@andresvalenciaabogados.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(7, 'AROMAS DE COLOMBIA LTDA', 'AROMAS DE COLOMBIA LTDA', 'MEDELLIN', '', '2358520', '', '', '', 'info@aromasdecolombia.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(8, 'AR PLATAFORMA EXPRESS', 'AR PLATAFORMA EXPRESS', 'MEDELLIN ', 'TRANS 93 # 53-32 BODEGA 27', '5897668', '316 6290610', 'DANIEL OCAMPO', '316 6290610', 'daniel@arexpressusa.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(9, 'ASMECON', 'ASEGURAMIENTO METROLOGICO Y CONTROL (ASMECON)', 'MEDELLIN', 'CALLE 48 Nº 65-10 EDIFICIO SAUZALITO 2 OFICINA 204', '(057-4) 260-96-58 ', '', '', '', 'info@asmecon.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(10, 'ATLANTIC PACK INC', 'ATLANTIC PACK INC', 'MIAMI', ' 7569 N.W 70 ST. MIAMI,FL . 33166', '305-883-4944', '', 'MARTIN ', '786-704-602', 'martin@atlanticpack.net', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(11, 'AURA AREIZA', 'AURA AREIZA', 'MEDELLIN', 'CARRERA 83 C NÚMERO 33 27', ' (4) 2 50 89 28', '', '', '300 778 97 41', 'info@auraareiza.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(12, 'AUTO PARTES DIESEL', 'AUTO PARTES DIESEL', 'MEDELLIN', 'CRA 46 # 32-04 MEDELLÍN, ANTIOQUIA', '(574) 604 59 90', '', '', '', ' info@autodicol.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(13, 'BETOMAQUINAS', '811. 038. 383-2', 'MEDELLIN', 'CRA 71 NO. 44 A -41', '57- 4- 4114674 // 2506685', '', '', '', 'info@betomaquinas.net', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(14, 'BLOQUES MULTI NUTRICIONALES', '811.023.764-1', 'ITAGUI', 'CARRERA 51 #83 - 153 ITAGUI, ANTIOQUIA', '+ 57 (4) 285 40 43 ', '', '', '', 'info@bloquesmultinutricionales.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(15, 'BRIPO CONFECCIONES', 'BRIPO CONFECCIONES', 'BOGOTA ', 'CR73 # 74-95 BOGOTÁ, COLOMBIA', '(57) (1) 4307245', '', '', '', 'info@bripo.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(16, 'CASILLEROS USA', 'CASILLEROS USA', 'MIAMI', '7569 NW 70TH ST. MIAMI, FL, 33166', '786-664-9270', '', 'ESTIVEN', '3113798341', 'info@usscargo.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(17, 'CASILLERO VIRTUAL', 'CASILLERO VIRTUAL', 'MIAMI', '7418 NW 55 TH STREET MIAMI, FLORIDA 33166', '786 325 6990 - 57(1) 485 0240', '', '', '', 'miami@casillerovirtual.us', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(18, 'CAZAJA', 'CAZAJA', 'MIAMI', '4589 STREET FL, 7858 - 7897, MIAMI', '305 684 4305', '', 'LUIS CARDONA ', '', 'info@cazaja.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(19, 'CONTINENTAL CARGO EXPRESS', 'CONTINENTAL CARGO EXPRESS', 'MIAMI', '8615 NW 54TH ST. MIAMI, FL 33166', '+1 786-261-4354', '', '', '', 'info@ccexpress.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(20, 'COLOCAR COURIER CANADA', 'COLOCAR COURIER CANADA', 'CANADA', '380 ALLIANCE AVE, ZC : M6N2H8 TORONTO ONTARIO', '6473862410', '', '', '', 'colocarcargo@colocarcourier.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(21, 'COMERCIALIZADORA GENERAL', '900.355.110-0', 'MEDELLIN', 'CARRERA 51 N 41 – 104', '(057 - 4) 448 67 69', '', 'MARTIN ', '301 237 94 38', 'info@comercializadorageneral.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(22, 'COMUTEC S.A.S', '900.192.441-2', 'ENVIGADO', 'CR 43A N 37 SUR 19 OF 403', '(574) 4481021 ', '', '', '314 814 51 45', 'info@comutec.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(23, 'CONACEROS ', 'CONACEROS ', 'MEDELLIN', 'CALLE 97B NO. 40 A 90 ', '444 59 77 ', '', '', '320 698 98 03', 'info@conaceros.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(24, 'CONEXIÓN HOTELES', 'CONEXIÓN HOTELES', 'MEDELLIN', 'CALLE 44 A #68 A 98 LOCAL 101 ', '+57 2607303', '', '', '318 401 4518', 'Info@conexionhoteles.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(25, 'CONTROVERSIA MODELOS', 'CONTROVERSIA MODELOS', 'MEDELLIN', 'CRA 43 # 10-40 PISO 3', '312 83 62', '', '', '321 645 57 56', 'controversiamodelos@hotmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(26, 'CONFEDERACION SUDAMERICANA DE FISICO CULTURISMO Y FITNESS', 'CONFEDERACION SUDAMERICANA DE FISICO CULTURISMO Y FITNESS', 'QUITO', 'CARANQUI OE6-110 Y AV. MARISCAL SUCRE EDIFICIO FEGAL 3 PISO LA MAGDALENA', '(593) 2650872', '', '', '99614465', 'info@csff-ifbb.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(27, 'DEPORTEKA', '811.008.830-5', 'MEDELLIN', 'CENTRO COMERCIAL MONTERREY LOCAL 346 PISO 2', '(054) 444 3278', '', '', ' (054) 268 4993', 'ventas@deporteka.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(28, 'DR. DIEGO PEREZ ', '911.006.830-5', 'MEDELLIN', 'CALLE 7 # 39 107 TORRE MEDICAL CONSULTORIO 803', '(+57 4) 311 6677', '', 'DIEGO PEREZ', '(+57) 321 635 0493', 'info@diegoperez.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(29, 'DIGITAL BOOM GRAPHIC', 'DIGITAL BOOM GRAPHIC', 'BOGOTA ', 'CALLE 94 A # 58-25  RIO NEGRO - COLOMBIA ', '(057) 601 0093 ', '', '', ' (313) 421 8178', 'info@digitalboom.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(30, 'DISTRIBUIDORA EL AMAZONAS ', 'DISTRIBUIDORA EL AMAZONAS ', 'SABANETA', 'CARRERA 49 NO. 61 SUR - 540 BODEGA 156 SABANETA - ANTIOQUIA - COLOMBIA', '(4) 301-03-15', '', '', '(4) 285-06-07', 'info@disamazonas.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(31, 'DR. EDUARDO LONDOÑO M', 'DR. EDUARDO LONDOÑO M', 'MEDELLIN', 'CARRERA 45 N 6 - 95 PATIO BONITO - EL POBLADO', '(054) 268-65-53', '', '', '', 'info@doctoreduardolondono.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(32, 'EMPAQUETADURAS AMERICA ', '', 'BELLO', 'DIAGONAL 51 # 42 - 120 BELLO (ANT)   ', '483 39 87  ', '', '', '312 288 10 60', 'info@empaquetadurasamerica.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(33, 'EMPAQUETADURAS TAMAYO', 'EMPAQUETADURAS TAMAYO', 'MEDELLIN', 'CARRERA 46 Nº 32-04', '604 59 90', '', '', '313 746 19 20', 'info@empaquetadurastamayo.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(34, 'EO CENTRO', 'EO CENTRO', 'MEDELLIN', 'CRA 41 NO 9 ? 60 CONSULTORIO 202', '(057) 4 266 27 20', '', '', '314 678 47 28', 'info@eocentro.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(35, 'ESE HOSPITAL SANTA ISABEL ', '800014405-2', 'SAN PEDRO DE LOS MILAGROS ', 'CALLE 43 N 52 A 109 ', ' 8687-610', '', '', '', 'info@esesantaisabel.gov.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(36, 'EURO PERSIANAS ', 'EURO PERSIANAS ', 'ITAGUI', ' CLL 85 # 48 - 110 ITAGÜÍ', '', '', '', '(314) 520 3954', 'info@europersianas.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(37, 'EXPRESS TIRE DISTRIBUTOR', 'EXPRESS TIRE DISTRIBUTOR', 'MIAMI', '10080 INTERCOM DR.UNIT A-4 FORT MYER, FL 33912.', '(239) 561 2810', '', '', '', 'info@expresstiredistributor.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(38, 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', 'MIAMI', '8615 NW 54 STREET MIAMI, FL 3316', '+17862776486 | +17868006888', '', '', '', 'info@fccargoexpress.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(39, 'FLORES DE LA CAMPIÑA', '800160435-8', 'EL CARMEN DE VIBORAL ', 'CRA 60 N 49 A 20 ', '057 543 90 50', '', 'MARIA EUGENIA GARCIA', '314 718 1371', 'sales2flocampi@une.net.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(40, 'GESINCO ABOGADOS', 'GESINCO ABOGADOS', 'MEDELLIN', 'CALLE 37 B Nº 84 A - 39 LAURELES', '057 (4) 448 22 28', '', '', '', 'info@gesincoabogados.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(41, 'GODIVA SEX SHOP ', 'GODIVA SEX SHOP ', 'MEDELLIN', 'CLL 33 NO. 76 - 54', '(054) 581-5036 ', '', '', '', 'info@godivasexshop.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(42, 'GRABAFER', '900.348.748-1', 'MEDELLIN', 'CARRERA 45 NO 39 – 75 (EL PALO) ', '448 44 41', '', '', '', 'grabafer@une.net.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(43, 'IEB - INGENIERIA ESPECIALIZADA S.A ', '800.068.234-1', 'MEDELLIN', 'CALLE 8B NO. 65-191 / C.E PUERTO SECO. OF 331', '+57 (4) 604 32 72 ', '', '', '', 'comercial@ieb.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(44, 'IGT COMPONENTES INDUSTRIALES', 'IGT COMPONENTES INDUSTRIALES', 'SABANETA', 'CALLE 52 SUR NO.44 - 21', '57 4 3014448', '', '', '', 'info@igtcomponentes.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(45, 'INDUSTRIAS FAMEC', 'INDUSTRIAS FAMEC', 'MEDELLIN', 'CARRERA 55 N° 29 B 72', '+57 (4) 444-2364', '', '', '+57 (313) 732-8451', 'info@industriasfamec.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(46, 'INDUSTRIAS OVELMA', '890.938.664-6', 'MEDELLIN', ' CALLE 25A # 43B - 150', '(4) 403 80 20 ', '', '', '', 'info@industriasovelma.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(47, 'INSER INSTITUTO DE FERTILIDAD HUMANA', 'INSER INSTITUTO DE FERTILIDAD HUMANA', 'MEDELLIN', 'CALLE 12 NO. 39-60 SECTOR EL POBLADO.', '+57(4) 268 8000', '', '', '', 'info@inser.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(48, 'IP MACH ', 'IP MACH ', 'MIAMI', '7549 NW 70 ST MIAMI, FL 33166', ' (+1) 786 252 1928', '', '', '', 'ipmach@ipmach.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(49, 'LABORALES MEDELLIN ', '890920929-3', 'MEDELLIN', 'CALLE 25 A N 43 B 33', '(574) 262 55 33 Ext. 117', '', 'SANDRA MARÍA PEÑUELA GALLEGO', '', 'dircomercial@laborales.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(50, 'LABORATORIO SOLUNA', '70.063.260', 'COPACABANA', 'KM 6.5 N 1 - 14', '(57)(4)408 10 10', '', '', '311 630 38 69', 'info@laboratoriosoluna.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(51, 'LA CASA DE SIRIO ', 'LA CASA DE SIRIO ', 'MEDELLIN', 'CRA. 32 #1 SUR-61, MEDELLÍN', '', '', 'RAUL YEPES ', '+57 314 678 47 28', 'info@lacasadesirio.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(52, 'LAS DELCIAS DE LA ABUELA ', 'LAS DELCIAS DE LA ABUELA ', 'ATLANTA', '5499 BUFORD HWY NE,  ATLANTA, GA 30340', '770 356 4451', '', '', '', 'info@lasdeliciasdelaabuelaatl.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(53, 'LC TURISMO ', 'LC TURISMO ', 'MEDELLIN', 'CRA 43ª # 1 ? 85 OFICINA 202 ED. BANCO CAJA SOCIAL', '57-4-3113161', '', '', '', 'operaciones@lcturismo.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(54, 'LETS TALK SPANISH', 'LETS TALK SPANISH', 'CALIFORNIA, USA', '', '925-339-3088 ', '', 'FLAVIO VERA ', '', 'info@letstalkspanishca.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(55, 'LINAZA Y SUS DERIVADOS', '8391258-9', 'MEDELLIN', 'CALLE 56 # 37 - 38 ', '', '', '', '', 'info@linazasa.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(56, 'LOS REDIMIDOS - IGLESIA CENTRO FAMILIAR CRISTIANO', '800.164.908-8', 'MEDELLIN', 'CALLE 50 # 80 - 20 CALAZANS ', '252-01-94', '301 737 3807', 'JOEL', '301 737 3807', 'jadltr@gmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(57, 'MA EXPRESS', 'MA EXPRESS', 'MIAMI', '2153 NW 79TH AVE, MIAMI, 33122', '+1 817 477 7457', '', '', '', 'info@maexpress.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(58, 'MANUFACTURAS GITANO', 'MANUFACTURAS GITANO', 'MEDELLIN', 'CARRERA 50D - NO 61 - 42', '254 56 54 - 291 27 73', '', '', '', 'info@manufacturasgitano.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(59, 'MARRES ARTICULOS DECORATIVOS ', 'MARRES ARTICULOS DECORATIVOS ', 'RIONEGRO', 'VÍA MEDELLÍN - BOGOTÁ KM 32.600 MT / RETORNO 10 - 11', '57(4) 520 74 30', '', '', '', 'ventasnal@marres.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(60, 'MEDICION Y CONTROL ', 'MEDICION Y CONTROL ', 'MEDELLIN', 'CALLE 11 C SUR # 48 B - 06 ', '(57 4) 4482986', '', '', '', 'medicionyc@medicionycontrol.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(61, 'NCARGO EXPRESS', 'NCARGO EXPRESS', 'MIAMI, USA', '7418 NW 55TH STREET MIAMI, FLORIDA 33166', '786 325 6990', '', '', '', 'miami@ncargo.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(62, 'NOVUS CLIP ', 'NOVUS CLIP ', 'FLORIDA, USA', '12771 METRO PARKWAY  UNIT #1 – FORT MYERS FL, 33966', '239-333-8880', '', '', '', 'info@novusclip.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(63, 'NUTRI SERVICIAL', 'NUTRI SERVICIAL', 'MEDELLIN', 'CLL 51 NO 79 - 17 INTERIOR 402 , BARRIO LOS COLORES', '421 79 83 ', '', '', '', 'info@nutriservicial.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(64, 'PERSIANAS MADRID', 'PERSIANAS MADRID', 'SABANETA', 'CALLE 52 SUR 43 A 57 SABANETA, COLOMBIA', '321 846 3943', '', '', '312 804 9892', 'info@persianasmadrid.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(65, 'PROMOTORA DE GASES DEL SUR - PROGASUR', '800170118-0', 'BOGOTA', 'CARRERA 50 NO. 18 A – 75 PUENTE ARANDA.', '5935992', '', '', '', 'ccontrol@progasur.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(66, 'PROINCOL  S.A.S', '811045223-1', 'ENVIGADO', 'DIAGONAL 33 NO.34B SUR - 4', '(57) 4 – 2764284 / 2768797', '', '', '', 'info@proincol.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(67, 'PROPIEDADES Y PROPIEDADES ', 'PROPIEDADES Y PROPIEDADES ', 'BELLO', '', '310 4447282', '', 'JOHN JAIRO ORTIZ GIL', '300 6096664', 'propiedadesypropiedades@hotmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(68, 'RYME SOLUCIONES ELECTRONICAS ', '900.705.846-5 ', 'MEDELLIN', 'CARRERA 63 NO. 35 A 15, APTO. 101 ED. LA SOCIEDAD ', '(574) 235 78 80 ', '', '', '(57) 311 357 10 50', 'info@ryme.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(69, 'SELLADOS Y COSNTURAS', 'SELLADOS Y COSNTURAS', 'MEDELLIN', 'CARRERA 50D - NO 61 - 42 MEDELLÍN, ANTIOQUIA', '+(054) 2912773', '', '', '+(301) 3381724', 'produccion@selladosycosturas.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(70, 'SERVINDUSTRIA  S.A', '890.931.565-3', 'ITAGUI', 'CR 41 C # 50 - 50  CENTRO MULTIPLE DEL SUR ', '277 56 26 ', '', '', '', 'contacto@servindustria.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(71, 'SOHINCO ', 'SOHINCO ', 'MEDELLIN', 'CARRERA 43 Nº 14 – 130', '(57) (4) 311 98 08', '', '', '', 'contacto@sohinco.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(72, 'SUMINISTROS ALIMENTICIOS', '800105244-4', 'MEDELLIN', ' CRA 66 A # 34 B 8 ', '57- 4 - 265 79 98 ', '', '', '', 'Info@suministrosalimenticios.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(73, 'SYSTELEMATIC', '800.152.232-6', 'MEDELLIN', 'CL 35 # 80 A - 21', '413 79 79', '', '', '', 'info@systelematic.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(74, 'TECNICENTRO LOS COLORES', 'TECNICENTRO LOS COLORES', 'MEDELLIN', 'CALLE 50 # 66-20', '(4)460 04 00 -  (4)230 22 99', '', '', '', 'autofullcol@une.net.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(75, 'TNT EXPRESS ', 'TNT EXPRESS ', 'MEDELLIN', 'CARRERA 50 # 25 - 213 ', '+57 444 68 95', '', '', '', 'info@tntexpress.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(76, 'TRANSLOGIC', 'TRANSLOGIC', 'ITAGUI', 'CLL. 51 NO. 41 – 133 ', '57- 4 - 444 48 95', '3153327242', 'MARIO ROJAS', '3153327242', 'info@translogic.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(77, 'TU GOL EN LA RED', 'TU GOL EN LA RED', 'MEDELLIN', '', '312-2033985', '', '', '300-2152009 ', 'tugolenlared@hotmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(78, 'VIAGGI TURISMO', '900411112-5', 'MEDELLIN', 'CALLE 7D NRO 43C - 134 INT 203', '+57 (4) 448 -0855', '', '', '+57 (318) 520 23 97', 'viaggiturismosas@gmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(79, 'VIKINGOS RESTAURANT', 'VIKINGOS RESTAURANT', 'FLORIDA, USA', '26880 OLD 41 RD UNIT 9, BONITA SPRINGS, FL, 34135', '239-992-1265 - 239-867-4368', '', '', '', 'info@vikingosrestaurant.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(80, 'VIVERO SOL ROJO', '811.032.272-6', 'MEDELLIN', '', '(57) 315 8113525', '', 'PABLO BARRIOS', '', 'pbarrios@viverosolrojo.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(81, 'WEB EVOLUTION', '71.216.799-2', 'MEDELLIN', 'CALLE', '596 55 87', '', 'JUAN ALEJANDRO', '301 724 72 56', 'info@juanalejandro.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(82, 'AYC ASESORIAS Y CONSULTORIAS', '7121678555', 'MEDELLIN', 'MEDELLIN', '444 6740', '444 6740', 'ADRIANA CARDONA', '444 6740', 'asesoriayconsultorias@gmail.com', 'AMIGA DE FABIO GALLEGO', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(83, 'GENESIS INGENIERIA S.A.S', '8110176722', 'MEDELLIN', 'CALLE 13 # 43 D 36', '311 3035607', '', 'JUAN CAMILO RESTREPO', '311 3035607', 'juan.restrepo@ieb.com.co', 'SITIO WEB DE GENESIS, HOSTING', 0, '(y%wOol_5U~x', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(84, 'WE ARE PAULOWNIA', '7121675452', 'MEDELLIN', 'CRA 86A # 42C44', '318 3367001', '', 'SANTIAGO VELEZ', '318 3367001', 'santiagovelez0914@gmail.com', 'DISEÑO DE SITIO WEB', 0, '9fsONIqF[MwI', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(85, 'DOMA INMOBILIARIA', '324969410', 'MEDELLIN', 'CRA 25 # 1 A SUR 155 OFC. 1325', '444 9106', '', 'LUCIA ANGEL', '310 425 7395', 'lucia@domainmobiliaria.com', 'HERMANA DE ANDRES ANGEL', 0, 'gm)Ou!wWXmD{', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(86, 'RENE CANO', '1232123', 'JERUSALEM', 'ISRAEL', '972 58-651-5666', '', '972 58-651-5666', '972 58-651-5666', 'shelomo.caro@gmail.com', 'RENE', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(87, 'CSFF', '71216794', 'QUITO', 'CARANQUI OE6-110 Y AV. MARISCAL SUCRE', '2650872', '', 'WILBERT PEREZ', '3107095442', 'willperez71@gmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(88, 'LAMBDA INGENIERIA', '54565445', 'MEDELLIN', '7569 NW 70TH ST', '311 7090422', '', 'HERNAN VILLEGAS', '311 7090422', 'hvillegas@lambdaingenieria.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(89, 'ENVIA MI PAQUETE', '45455457', 'MIAMI', '7569 NW 70TH ST ', '7863660912 ', '', 'DIEGO', '7863660912 ', 'info@enviamipaquete.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(90, 'WILBERT PEREZ', '3107095442', 'BOGOTA', 'CHIA, COLOMBIA', '3107095442', '', '3107095442', '3107095442', 'willperez71@gmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(91, 'COMIENZA ONLINE', '71216785547', 'SAN FRANCISCO', 'CALIFORNIA', '415368-3390', '', 'JUAN PABLO OBANDO', '415368-3390', 'jpobandoa@gmail.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(92, 'ENERSAFE S.A', '900191122-3', 'MEDELLIN', 'CL 8B NO. 65-191 OFICINA 209 ', ' 3113035607', '', 'JUAN CAMILO RESTREPO', ' 3113035607', 'juan.restrepo@ieb.com.co', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(93, 'ALUMBRADO PUBLICO TURBO S.A', '900092051-4', 'MEDELLIN', 'CRA 43 B 16-41 OF 1007', '6041847', '', 'CAROLINA LUNA', '6041847', 'asistente@opr.com.co', 'PROPIETARIOS SISTEMADEGESTION.CO', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(94, 'TRANSPORTES LOGITICOS DE COLOMBIA S.A', '830110727-9', 'BOGOTA - FONTIBON', 'CL 17 # 115 - 10 BODEGA 4', '313 3333706', '', 'JAVIER RODRIGUEZ', '313 3333706', 'jrodriguez@trascol.com', 'RENOVACION SISTEMA OCR', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(95, 'JS SUMINISTROS LTDA', '829000208-2', 'BARRANCABERMEJA', 'CALLE 74 # 24 - 106', '316 8747135', '', 'JAIME RODRIGUEZ ', '316 8747135', 'gerenciatecnica@jssuministros.com', '', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(96, 'YAMILE ATEHORTUA', '61216799', 'MEDELLIN', 'CRA 53 NRO. 25 - 75', '3006136237', '', 'YAMILE ATEHORTUA', '3006136237', 'info@juanalejandro.com', 'SITIO WEB', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(97, 'X-FITSPORTS', '733216799', 'MIAMI', '7569 NW 70TH ST', '7863899762', '', 'STEVEN SOTO', '7863899762', 'steve@usscargo.com', 'DESARROLLO SITIO WEB HOSTING + DOMINIO', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(98, 'SYTECSA S.A.S.', '830.074.672-8', 'MEDELLIN', 'CALLE 18 SUR # 26 - 42', '448 0370 ', '', 'FABIO GALLEGO', '320 6688451', 'f.gallego@sytecsa.com', 'DESARROLLO SITIO WEB', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(99, 'TECHNICAL PARTS SAS', '900971222-9', 'MEDELLIN', 'OFICINA IP MACH', '311 6499018', '', 'MAURICIO GALVIS', '311 6499018', 'info@juanalejandro.com', 'NINGUNA', 0, '123456', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conceptos`
--

CREATE TABLE IF NOT EXISTS `Conceptos` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `Conceptos`
--

INSERT INTO `Conceptos` (`Id`, `Nombre`, `Muestra`) VALUES
(1, 'SALARIOS WEB', 0),
(2, 'SERVIDOR KNOWNHOST', 0),
(3, 'CLARO OFICINA', 0),
(4, 'CLARO HOGAR', 0),
(5, 'RENTA OFICINA', 0),
(6, 'RENTA CASA', 0),
(7, 'PRESTAMOS PERSONALES', 0),
(8, 'HOSTING', 0),
(9, 'DOMINIO', 0),
(10, 'DECLARACION IVA', 0),
(11, 'HOSTING + DOMINIO', 0),
(12, 'SALUD COOMEVA', 0),
(13, 'GASTOS VARIOS', 0),
(14, 'SALUD EMI', 0),
(15, 'TARJETA CREDITO VISA', 0),
(16, 'TARJETA CREDITO MASTERCARD', 0),
(17, 'PROYECTO PORTO LETICIA', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ctaspagar`
--

CREATE TABLE IF NOT EXISTS `Ctaspagar` (
  `Id` int(5) unsigned zerofill NOT NULL auto_increment,
  `Idobra` int(11) NOT NULL,
  `Idprov` int(11) NOT NULL,
  `Obra` varchar(255) NOT NULL,
  `Proveedor` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Factura` varchar(255) NOT NULL,
  `Fechavence` date NOT NULL,
  `Valor` double NOT NULL,
  `Rte` double NOT NULL,
  `Total` double NOT NULL,
  `Comentarios` longtext NOT NULL,
  `Estado` int(11) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Fechacrea` date NOT NULL,
  `Anulado` int(11) NOT NULL,
  `Fechaanula` date NOT NULL,
  `Usuarioanula` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cuentas`
--

CREATE TABLE IF NOT EXISTS `Cuentas` (
  `Id` int(11) NOT NULL auto_increment,
  `Idforma` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Cuenta` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `Cuentas`
--

INSERT INTO `Cuentas` (`Id`, `Idforma`, `Nombre`, `Cuenta`, `Muestra`, `Pos`) VALUES
(6, 5, 'CUENTA AHORROS', '10787041689', 0, 0),
(7, 5, 'TARJETA MASTERCARD', '5303713926723009', 0, 0),
(8, 8, 'EFECTIVO', '10787041688', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CuentasCobrar`
--

CREATE TABLE IF NOT EXISTS `CuentasCobrar` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `TipoCuenta` int(11) NOT NULL,
  `NumeroFactura` varchar(100) NOT NULL,
  `Idobra` int(11) NOT NULL,
  `Idcliente` int(11) NOT NULL,
  `Obra` varchar(100) NOT NULL,
  `Cliente` varchar(100) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Periocidad` varchar(100) NOT NULL,
  `Valor` varchar(250) NOT NULL,
  `ValorAbonado` int(11) NOT NULL,
  `Concepto` varchar(250) NOT NULL,
  `Fecha` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `CuentaContable` varchar(100) NOT NULL,
  `Observaciones` varchar(150) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CuentasPagar`
--

CREATE TABLE IF NOT EXISTS `CuentasPagar` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `TipoCuenta` int(11) NOT NULL,
  `NumeroFactura` varchar(100) NOT NULL,
  `Idobra` int(11) NOT NULL,
  `Idproveedor` int(11) NOT NULL,
  `Obra` varchar(100) NOT NULL,
  `Proveedor` varchar(100) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Periocidad` varchar(100) NOT NULL,
  `Retencion` varchar(20) NOT NULL,
  `Valor` varchar(250) NOT NULL,
  `ValorRetencion` varchar(250) NOT NULL,
  `ValorAbonado` varchar(250) NOT NULL,
  `Concepto` varchar(250) NOT NULL,
  `Fecha` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `Usuario` varchar(100) NOT NULL,
  `MotivoAnulacion` varchar(200) NOT NULL,
  `UsuarioAnula` varchar(100) NOT NULL,
  `FechaAnulacion` date NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Volcado de datos para la tabla `CuentasPagar`
--

INSERT INTO `CuentasPagar` (`Id`, `TipoCuenta`, `NumeroFactura`, `Idobra`, `Idproveedor`, `Obra`, `Proveedor`, `FechaInicio`, `FechaFin`, `Periocidad`, `Retencion`, `Valor`, `ValorRetencion`, `ValorAbonado`, `Concepto`, `Fecha`, `Usuario`, `MotivoAnulacion`, `UsuarioAnula`, `FechaAnulacion`, `Estado`) VALUES
(000001, 1, '123456', 22, 6, 'EBEL - INVENTARIOS', 'JUAN ALEJANDRO ZAPATA', '2016-01-11', '2016-01-15', '', '0.0', '100000.00', '100000', '', 'PRUEBA', '2016-01-13 14:11:37', '71216799', 'PRUEBA', '71216799', '2016-01-13', 2),
(000002, 1, '12232888888888', 1, 5, 'PRUEBA', 'JUAN FELIPE LARA', '2016-01-04', '2016-01-26', '', '0.0', '6000000.00', '6000000', '', 'PRUEBA', '2016-01-13 15:34:59', '71216799', 'PRUEBA', '71216799', '2016-01-14', 2),
(000003, 1, '5752', 1, 4, 'PRUEBA', 'MATEO GUZMAN', '2016-01-19', '2016-02-04', '20', '0.0', '100000000.00', '100000000', '15222.22', 'PRUEBA', '2016-01-13 15:50:21', '71216799', '', '', '0000-00-00', 2),
(000004, 1, '107870', 1, 5, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-01-15', '2016-01-15', '15', '0.0', '400000.00', '400000', '400000', 'PAGO DE SALARIO', '2016-01-14 13:33:20', '71216799', '', '', '0000-00-00', 1),
(000005, 1, '107870', 1, 4, 'SALARIOS WEB', 'MATEO GUZMAN', '2016-01-15', '2016-01-15', '15', '0.0', '400000.00', '400000', '400000.00', 'SALARIO WEB', '2016-01-14 13:34:29', '71216799', '', '', '0000-00-00', 1),
(000006, 1, '0685', 5, 8, 'RENTA OFICINA', 'CONSTRUCTORA BRIMARC S.A.S', '2016-01-03', '2016-01-04', '', '0.0', '750000.00', '750000', '750000.00', 'PAGO RENTA ENERO', '2016-01-14 13:42:10', '71216799', '', '', '0000-00-00', 1),
(000007, 1, '107870', 6, 10, 'RENTA CASA', 'ARRENDAMIENTOS NUTIBARA', '2016-01-03', '2016-01-03', '', '0.0', '637200.00', '637200', '', 'PAGO RENTA ENERO', '2016-01-14 13:54:28', '71216799', 'ES RECURRENTE', '71216799', '2016-01-14', 2),
(000008, 1, '107870', 6, 10, 'RENTA CASA', 'ARRENDAMIENTOS NUTIBARA', '2016-01-03', '2016-01-03', '30', '0.0', '637200.00', '637200', '637200.00', 'PAGO RENTA ENERO', '2016-01-14 13:55:36', '71216799', '', '', '0000-00-00', 1),
(000009, 1, '75980557', 3, 9, 'CLARO OFICINA', 'CLARO', '2016-01-15', '2016-01-16', '', '0.0', '126493.00', '126493', '126493.00', 'PAGO INTERNET OFICINA', '2016-01-23 13:58:52', '71216799', '', '', '0000-00-00', 1),
(000010, 1, '', 7, 11, 'PRESTAMOS PERSONALES', 'PABLO GUEVARA', '2016-01-22', '2016-01-29', '', '0.0', '336000.00', '336000', '336000.00', 'PRESTAMO TARJETA CREDITO - APPLE DEVELOPERS', '2016-01-23 14:07:56', '71216799', '', '', '0000-00-00', 1),
(000011, 1, '', 7, 13, 'PRESTAMOS PERSONALES', 'ALEJANDRA LARA', '2016-01-18', '2016-01-29', '', '0.0', '650000.00', '650000', '', 'PRESTAMO DE TARJETA DE CREDITO', '2016-01-23 14:10:10', '71216799', '', '', '0000-00-00', 0),
(000012, 1, '', 7, 13, 'PRESTAMOS PERSONALES', 'WILTON ALVAREZ', '2016-01-01', '2016-02-29', '', '0.0', '800000.00', '800000', '16000.00', 'PRESTAMO', '2016-01-23 14:17:09', '71216799', '', '', '0000-00-00', 4),
(000013, 1, '', 9, 14, 'DOMINIO', 'MI COM CO', '2016-01-22', '2016-01-22', '', '0.0', '49900.00', '49900', '49900.00', 'RENOVACION HOSTING - LC TURISMO', '2016-01-23 14:21:37', '71216799', '', '', '0000-00-00', 1),
(000014, 1, '', 1, 4, 'SALARIOS WEB', 'MATEO GUZMAN', '2016-01-30', '2016-01-30', '', '0.0', '400000.00', '400000', '400000.00', 'SALARIO SEGUNDA QUINCENA ENERO', '2016-01-23 14:22:25', '71216799', '', '', '0000-00-00', 1),
(000015, 1, '', 1, 5, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-01-30', '2016-01-30', '', '0.0', '400000.00', '400000', '400000.00', 'SALARIO SEGUNDA QUINCENA ENERO', '2016-01-23 14:22:54', '71216799', '', '', '0000-00-00', 1),
(000016, 1, '', 5, 8, 'RENTA OFICINA', 'CONSTRUCTORA BRIMARC S.A.S', '2016-02-03', '2016-02-03', '', '0.0', '750000.00', '750000', '750000.00', 'RENTA OFICINA ENERO', '2016-01-23 14:23:30', '71216799', '', '', '0000-00-00', 1),
(000017, 1, '', 6, 10, 'RENTA CASA', 'ARRENDAMIENTOS NUTIBARA', '2016-02-03', '2016-02-03', '', '0.0', '637200.00', '637200', '637200.00', 'PAGO RENTA FEBRERO', '2016-01-23 14:37:50', '71216799', '', '', '0000-00-00', 1),
(000018, 1, '784544', 4, 12, 'CLARO HOGAR', 'ALEJANDRA LARA', '2016-01-20', '2016-01-20', '', '0.0', '142600.00', '142600', '142600.00', 'PAGO CLARO HOGAR', '2016-01-23 14:46:51', '71216799', '', '', '0000-00-00', 1),
(000019, 1, '54454545', 10, 16, 'DECLARACION IVA', 'DIAN', '2016-01-25', '2016-01-25', '', '0.00', '1600000.00', '1600000', '1600000.00', 'DECLARACION IVA CUOTA FINAL 2015', '2016-01-23 16:04:10', '71216799', '', '', '0000-00-00', 1),
(000020, 1, '', 2, 7, 'SERVIDOR KNOWNHOST', 'KNOWNHOST', '2016-01-25', '2016-01-26', '', '0.00', '413500.00', '413500', '413500.00', 'RENOVACION ENERO SERVIDOR', '2016-01-25 13:21:01', '71216799', '', '', '0000-00-00', 1),
(000021, 1, '', 7, 11, 'PRESTAMOS PERSONALES', 'PABLO GUEVARA', '2016-01-27', '2016-02-05', '', '0.00', '413500.00', '413500', '413500.00', 'PRESTAMO TARJETA PAGO KNOWNHOST', '2016-01-30 14:00:19', '71216799', '', '', '0000-00-00', 1),
(000022, 1, '', 9, 14, 'DOMINIO', 'MI COM CO', '2016-01-30', '2016-01-30', '', '0.00', '49900.00', '49900', '49900.00', 'DOMINIO WEB EVOLUTION', '2016-01-30 14:03:00', '71216799', '', '', '0000-00-00', 1),
(000023, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-01-30', '2016-01-30', '', '0.00', '49900.00', '49900', '49900.00', 'RENOVACION DOMINIO CSFF-IFBB.COM', '2016-01-30 14:08:19', '71216799', '', '', '0000-00-00', 1),
(000024, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-01-30', '2016-01-30', '', '0.00', '49900.00', '49900', '49900.00', 'RENOVACION DOMINIO ACADEMIAIFBBCOLOMBIA.COM', '2016-01-30 14:08:53', '71216799', '', '', '0000-00-00', 1),
(000025, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-01-30', '2016-01-30', '', '0.00', '49900.00', '49900', '49900.00', 'LAMBDAINGENIERIA.COM', '2016-01-30 14:09:17', '71216799', '', '', '0000-00-00', 1),
(000026, 1, '455445', 12, 13, 'SALUD COOMEVA', 'COOMEVA', '2016-01-30', '2016-01-30', '', '0.00', '204100.00', '204100', '204100.00', 'SALUD Y PENSION MES DE ENERO', '2016-01-30 14:15:48', '71216799', '', '', '0000-00-00', 1),
(000027, 1, '', 1, 6, 'SALARIOS WEB', 'JUAN ALEJANDRO ZAPATA', '2016-02-15', '2016-02-15', '', '0.00', '4000000.00', '4000000', '', 'QUINCENA 1 DE FEBRERO 2016', '2016-01-30 14:23:30', '71216799', 'PRUEBA SISTEMA', '71216799', '2016-01-30', 2),
(000028, 1, '', 1, 4, 'SALARIOS WEB', 'MATEO GUZMÁN', '2016-02-15', '2016-02-15', '', '0.00', '400000.00', '400000', '400000.00', 'PAGO SALARIO 1RA QUINCENA FEBRERO', '2016-02-02 13:48:10', '71216799', '', '', '0000-00-00', 1),
(000029, 1, '', 1, 5, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-02-15', '2016-02-15', '', '0.00', '400000.00', '400000', '400000.00', 'PAGO SALARIO 1RA QUINCENA FEBRERO', '2016-02-02 13:48:34', '71216799', '', '', '0000-00-00', 1),
(000030, 1, '', 7, 11, 'PRESTAMOS PERSONALES', 'PABLO GUEVARA', '2016-02-16', '2016-02-19', '', '0.00', '160000.00', '160000', '160000.00', 'PRESTAMO AJUSTE RENTA OFICINA', '2016-02-16 13:46:26', '71216799', '', '', '0000-00-00', 1),
(000031, 1, '', 7, 18, 'PRESTAMOS PERSONALES', 'JUAN DAVID OSPINA', '2016-02-16', '2016-02-16', '', '0.00', '1000000.00', '1000000', '1000000.00', 'PRESTAMO DOÑA MERY', '2016-02-17 14:35:41', '71216799', '', '', '0000-00-00', 1),
(000032, 1, '', 13, 19, 'GASTOS VARIOS', 'VEHICULO', '2016-03-28', '2016-03-29', '', '0.00', '315650.00', '315650', '315650.00', 'PAGO SEGURO VEHICULO', '2016-03-05 14:38:43', '71216799', '', '', '0000-00-00', 1),
(000033, 1, '', 1, 5, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-03-29', '2016-03-29', '', '0.00', '400000.00', '400000', '400000', 'SALARIO 2DA QUINCENA DE FEBRERO', '2016-03-05 14:39:25', '71216799', '', '', '0000-00-00', 1),
(000034, 1, '', 1, 4, 'SALARIOS WEB', 'MATEO GUZMÁN', '2016-03-29', '2016-03-29', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO 2DA QUINCENA DE FEBRERO', '2016-03-05 14:39:48', '71216799', '', '', '0000-00-00', 1),
(000035, 1, '', 1, 4, 'SALARIOS WEB', 'MATEO GUZMÁN', '2016-03-15', '2016-03-15', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO 1RA QUINCENA DE MARZO', '2016-03-05 14:40:19', '71216799', '', '', '0000-00-00', 1),
(000036, 1, '', 1, 5, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-03-15', '2016-03-15', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO 1RA QUINCENA DE MARZO', '2016-03-05 14:40:40', '71216799', '', '', '0000-00-00', 1),
(000037, 1, '', 5, 8, 'RENTA OFICINA', 'CONSTRUCTORA BRIMARC S.A.S', '2016-03-03', '2016-03-04', '', '0.00', '750000.00', '750000', '750000.00', 'RENTA OFICINA MARZO', '2016-03-05 14:41:18', '71216799', '', '', '0000-00-00', 1),
(000038, 1, '', 6, 10, 'RENTA CASA', 'ARRENDAMIENTOS NUTIBARA', '2016-03-03', '2016-03-10', '', '0.00', '637200.00', '637200', '637200.00', 'PAGO RENTA CASA MARZO', '2016-03-05 14:42:13', '71216799', '', '', '0000-00-00', 1),
(000039, 1, '', 7, 13, 'PRESTAMOS PERSONALES', 'WILTON ALVAREZ', '2016-02-23', '2016-03-11', '', '0.00', '150000.00', '150000', '150000.00', 'PRESTAMO', '2016-03-05 14:45:53', '71216799', '', '', '0000-00-00', 1),
(000040, 1, '', 9, 14, 'DOMINIO', 'MI COM CO', '2016-03-01', '2016-03-03', '', '0.00', '49900.00', '49900', '49900.00', 'PAGO DOMINIO VIAGGITURISMO.COM.CO', '2016-03-05 14:50:24', '71216799', '', '', '0000-00-00', 1),
(000041, 1, '', 2, 7, 'SERVIDOR KNOWNHOST', 'KNOWNHOST', '2016-03-26', '2016-03-28', '', '0.00', '440000.00', '440000', '440000.00', 'RENOVACION SERVIDOR MARZO', '2016-03-05 14:50:57', '71216799', '', '', '0000-00-00', 1),
(000042, 1, '', 3, 9, 'CLARO OFICINA', 'CLARO', '2016-03-07', '2016-03-15', '', '0.00', '258367.00', '258367', '258367', 'FACTURAS ACUMULADAS OFICINA', '2016-03-07 14:00:46', '71216799', '', '', '0000-00-00', 1),
(000043, 1, '', 4, 9, 'CLARO HOGAR', 'CLARO', '2016-03-07', '2016-03-15', '', '0.00', '291027.00', '291027', '291027', 'FACTURAS ACUMULADAS HOGAR', '2016-03-07 14:02:00', '71216799', '', '', '0000-00-00', 1),
(000044, 1, '', 12, 17, 'SALUD COOMEVA', 'COOMEVA', '2016-02-29', '2016-02-29', '', '0.00', '200313.00', '200313', '200313.00', 'SALUD FEBRERO', '2016-03-14 21:18:48', '71216799', '', '', '0000-00-00', 1),
(000045, 1, '', 1, 4, 'SALARIOS WEB', 'MATEO GUZMÁN', '2016-03-30', '2016-03-30', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO SEGUNDA QUINCENA MARZO', '2016-03-14 21:20:51', '71216799', '', '', '0000-00-00', 1),
(000046, 1, '', 1, 5, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-03-30', '2016-03-30', '', '0.00', '400000.00', '400000', '400000', 'SALARIO SEGUNDA QUINCENA MARZO', '2016-03-14 21:21:17', '71216799', '', '', '0000-00-00', 1),
(000047, 1, '', 7, 18, 'PRESTAMOS PERSONALES', 'JUAN DAVID OSPINA', '2016-03-15', '2016-03-15', '', '0.00', '50000.00', '50000', '50000.00', 'INTERESES POR PRESTAMO DE 1 MILLON', '2016-03-19 15:08:47', '71216799', '', '', '0000-00-00', 1),
(000048, 1, '', 2, 7, 'SERVIDOR KNOWNHOST', 'KNOWNHOST', '2016-03-14', '2016-03-14', '', '0.00', '40000.00', '40000', '40000.00', 'RESTAURACION SITIO DR DIEGO PEREZ', '2016-03-19 15:13:38', '71216799', '', '', '0000-00-00', 1),
(000049, 1, '', 11, 15, 'HOSTING + DOMINIO', 'GODADDY', '2016-03-19', '2016-03-19', '', '0.00', '126708.00', '126708', '126708.00', 'PAGO DOMINIO Y HOSTING LOS REDIMIDOS Y SISTEMA DE GESTION', '2016-03-19 15:14:57', '71216799', '', '', '0000-00-00', 1),
(000050, 1, '', 2, 7, 'SERVIDOR KNOWNHOST', 'KNOWNHOST', '2016-03-26', '2016-03-26', '', '0.00', '410000.00', '410000', '410000.00', 'PAGO MARZO SERVIDOR', '2016-03-28 13:54:53', '71216799', '', '', '0000-00-00', 1),
(000051, 1, '', 7, 13, 'PRESTAMOS PERSONALES', 'TRANSLOGIC S.A', '2016-03-15', '2017-05-17', '', '0.00', '9900000.00', '9900000', '1959660', 'PRESTAMO APTO', '2016-04-01 18:21:08', '71216799', '', '', '0000-00-00', 4),
(000052, 1, '', 6, 10, 'RENTA CASA', 'ARRENDAMIENTOS NUTIBARA', '2016-04-03', '2016-04-10', '', '0.00', '637200.00', '637200', '637200.00', 'RENTA MES DE ABRIL', '2016-04-02 16:32:52', '71216799', '', '', '0000-00-00', 1),
(000053, 1, '', 5, 8, 'RENTA OFICINA', 'CONSTRUCTORA BRIMARC S.A.S', '2016-04-01', '2016-04-05', '', '0.00', '750000.00', '750000', '750000.00', 'RENTA OFICINA ABRIL', '2016-04-02 16:33:32', '71216799', '', '', '0000-00-00', 1),
(000054, 1, '', 1, 5, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-04-15', '2016-04-15', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO 1RA QUINCENA ABRIL', '2016-04-02 16:34:19', '71216799', '', '', '0000-00-00', 1),
(000055, 1, '', 1, 4, 'SALARIOS WEB', 'MATEO GUZMÁN', '2016-04-15', '2016-04-15', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO 1RA QUINCENA ABRIL', '2016-04-02 16:34:42', '71216799', '', '', '0000-00-00', 1),
(000056, 1, '', 2, 13, 'SERVIDOR KNOWNHOST', 'KNOWNHOST', '2016-04-26', '2016-04-27', '', '0.00', '440000.00', '440000', '440000.00', 'SERVIDOR MES DE ABRIL', '2016-04-02 16:35:37', '71216799', '', '', '0000-00-00', 1),
(000057, 1, '', 3, 9, 'CLARO OFICINA', 'CLARO', '2016-04-09', '2016-04-09', '', '0.00', '270606.00', '270606', '270606.00', 'PAGO CLARO HOGAR Y OFICINA - MES DE ABRIL', '2016-04-11 15:49:37', '71216799', '', '', '0000-00-00', 1),
(000058, 1, '', 14, 21, 'SALUD EMI', 'EMI', '2016-04-01', '2016-04-01', '', '0.00', '300000.00', '300000', '300000.00', 'PAGO EMI 3 MESES', '2016-04-11 15:58:15', '71216799', '', '', '0000-00-00', 1),
(000059, 1, '', 16, 22, 'TARJETA CREDITO MASTERCARD', 'BANCOLOMBIA', '2016-04-02', '2016-04-02', '', '0.00', '450000.00', '450000', '450000.00', 'PAGO TARJETA', '2016-04-11 16:03:07', '71216799', '', '', '0000-00-00', 1),
(000060, 1, '', 16, 22, 'TARJETA CREDITO MASTERCARD', 'BANCOLOMBIA', '2016-04-04', '2016-04-04', '', '0.00', '364000.00', '364000', '364000.00', 'INTERESES TARJETA CREDITO', '2016-04-11 16:04:02', '71216799', '', '', '0000-00-00', 1),
(000061, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-04-11', '2016-04-11', '', '0.00', '46975.00', '46975', '46975.00', 'DOMINIO SELLADOSYCOSTURAS.COM', '2016-04-11 16:07:00', '71216799', '', '', '0000-00-00', 1),
(000062, 1, '', 17, 23, 'PROYECTO PORTO LETICIA', 'CORFICOLOMBIANA', '2016-04-13', '2016-04-13', '', '0.00', '1300000.00', '1300000', '1300000.00', 'PAGO APTO', '2016-04-13 12:21:50', '71216799', '', '', '0000-00-00', 1),
(000063, 1, '', 12, 17, 'SALUD COOMEVA', 'COOMEVA', '2016-04-13', '2016-04-13', '', '0.00', '200113.00', '200113', '200113.00', 'PAGO SALUD ABRIL', '2016-04-13 20:34:10', '71216799', '', '', '0000-00-00', 1),
(000064, 1, '', 13, 6, 'GASTOS VARIOS', 'JUAN ALEJANDRO ZAPATA', '2016-04-18', '2016-04-18', '', '0.00', '200000.00', '200000', '200000.00', 'PARTE PICO Y PLACA', '2016-04-19 14:03:30', '71216799', '', '', '0000-00-00', 1),
(000065, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-04-19', '2016-04-19', '', '0.00', '46000.00', '46000', '46000.00', 'RENOVACION DOMINIO MANUFACTURASGITANO.COM', '2016-04-19 14:04:49', '71216799', '', '', '0000-00-00', 1),
(000066, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-04-19', '2016-04-19', '', '0.00', '37000.00', '37000', '37000.00', 'DOMONIO X-FITSPORTS.COM  PARA STEVEN', '2016-04-19 14:30:23', '71216799', '', '', '0000-00-00', 1),
(000067, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-04-23', '2016-04-23', '', '0.00', '128000.00', '128000', '128000.00', 'RENOVACION DOMINIOS EDUARDO LONDOÑO Y FLORES DE LA CAMPIÑA', '2016-04-23 14:48:11', '71216799', '', '', '0000-00-00', 1),
(000068, 1, '', 1, 13, 'SALARIOS WEB', 'JUAN FELIPE LARA', '2016-03-30', '2016-03-30', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO 2DA QUINCENA ABRIL', '2016-04-23 14:49:40', '71216799', '', '', '0000-00-00', 1),
(000069, 1, '', 1, 4, 'SALARIOS WEB', 'MATEO GUZMÁN', '2016-04-30', '2016-04-30', '', '0.00', '400000.00', '400000', '400000.00', 'SALARIO 2DA QUINCENA ABRIL', '2016-04-23 14:50:05', '71216799', '', '', '0000-00-00', 1),
(000070, 1, '', 5, 8, 'RENTA OFICINA', 'CONSTRUCTORA BRIMARC S.A.S', '2016-05-04', '2016-05-04', '', '0.00', '750000.00', '750000', '750000.00', 'RENTA OFICINA MAYO', '2016-04-23 14:51:04', '71216799', '', '', '0000-00-00', 1),
(000071, 1, '', 12, 17, 'SALUD COOMEVA', 'COOMEVA', '2016-04-25', '2016-04-25', '', '0.00', '190000.00', '190000', '190000.00', 'PAGO SALUD ABRIL', '2016-04-23 14:51:52', '71216799', '', '', '0000-00-00', 1),
(000072, 1, '', 14, 21, 'SALUD EMI', 'EMI', '2016-04-25', '2016-04-25', '', '0.00', '90000.00', '90000', '90000.00', 'PAGO SALUD EMI ABRIL', '2016-04-23 14:52:34', '71216799', '', '', '0000-00-00', 1),
(000073, 1, '', 6, 10, 'RENTA CASA', 'ARRENDAMIENTOS NUTIBARA', '2016-05-04', '2016-05-04', '', '0.00', '637200.00', '637200', '637200.00', 'RENTA CASA MES DE MAYO', '2016-04-23 14:53:29', '71216799', '', '', '0000-00-00', 1),
(000074, 1, '', 9, 15, 'DOMINIO', 'GODADDY', '2016-05-11', '2016-05-11', '', '0.00', '40000.00', '40000', '40000.00', 'DOMINIO GESINCOABOGADOS.COM', '2016-05-11 13:35:12', '71216799', '', '', '0000-00-00', 1),
(000075, 1, '', 14, 21, 'SALUD EMI', 'EMI', '2016-05-17', '2016-05-17', '', '0.00', '180000.00', '180000', '180000.00', 'PAGO EMI', '2016-05-28 17:15:22', '71216799', '', '', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Descripcion`
--

CREATE TABLE IF NOT EXISTS `Descripcion` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Unidad` varchar(20) NOT NULL,
  `ValorUnidad` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Dominio`
--

CREATE TABLE IF NOT EXISTS `Dominio` (
  `Id` int(10) unsigned NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Proveedor` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=175 ;

--
-- Volcado de datos para la tabla `Dominio`
--

INSERT INTO `Dominio` (`Id`, `Idcliente`, `Nombre`, `Url`, `Proveedor`, `Fecha`, `Usuario`, `Contrasena`) VALUES
(17, 1, 'prueba', 'prueba', 'prueba', '0000-00-00', '', 'prueba'),
(157, 2, 'academiaifbbcolombia.com', 'academiaifbbcolombia.com', 'GO DADDY ', '2016-02-03', 'Prueba', ''),
(43, 3, '', '', '', '0000-00-00', '', ''),
(44, 4, '', '', '', '0000-00-00', '', ''),
(45, 5, 'ANDRESANGELSAS.COM', 'http://andresangelsas.com/', 'GO DADDY ', '09/10/2016', '', ''),
(50, 6, 'andresvalenciaabogados.com', 'andresvalenciaabogados.com', 'GO DADDY ', '02/09/2016', '', ''),
(49, 6, 'LEGALSERVICESGROUP.CO', 'LEGALSERVICESGROUP.CO', 'GO DADDY', '20/08/2016', '', ''),
(46, 6, 'LEGALCONSULTINGGROUP.CO', 'LEGALCONSULTINGGROUP.CO', 'GO DADDY', '18/02/2016', '', ''),
(48, 6, 'COACHINGLEGAL.CO', 'COACHINGLEGAL.CO', 'GO DADDY', '19/02/2016', '', ''),
(18, 1, 'prueba', 'prueba', 'prueba', '0000-00-00', '', 'prueba'),
(47, 6, 'andresvalenciajaramilloabogados.co', 'andresvalenciajaramilloabogados.co', 'GO DADDY', '20/08/2016', '', ''),
(51, 7, '', '', '', '', '', ''),
(154, 8, 'arplataforma.com', 'arplataforma.com', 'GO DADDY ', '', '', ''),
(156, 9, '', '', '', '', '', ''),
(54, 10, 'atlanticpack.net', 'atlanticpack.net', 'GO DADDY ', '19/06/2016', '', ''),
(55, 11, 'auraareiza.com', 'auraareiza.com', 'GO DADDY ', '18/08/2016', '', ''),
(57, 12, 'autopartesdiesel.com', 'autopartesdiesel.com', 'GO DADDY ', '31/05/2016', '', ''),
(58, 12, 'AUTODICOL.COM', 'AUTODICOL.COM', 'GO DADDY ', '05/06/2016', '', ''),
(59, 13, 'betomaquinas.com', 'betomaquinas.com', 'GO DADDY ', '26/08/2016', '', ''),
(60, 13, 'BETOMAQUINAS.NET', 'BETOMAQUINAS.NET', 'GO DADDY ', '30/08/2016', '', ''),
(61, 14, 'bloquesmultinutricionales.com', 'bloquesmultinutricionales.com', 'GO DADDY ', '24/03/2016', '', ''),
(62, 15, 'bripo.co', 'bripo.co', 'GO DADDY ', '31/08/2016', '', ''),
(63, 16, 'CASILLEROSUSA.COM', 'CASILLEROSUSA.COM', 'GO DADDY ', '27/09/2016', '', ''),
(64, 17, '', '', '', '', '', ''),
(66, 18, 'cazaja.com', 'cazaja.com', 'GO DADDY ', '06/08/2016', '', ''),
(67, 19, 'ccexpress.co', 'ccexpress.co', 'GO DADDY ', '27/11/2015', '', ''),
(68, 19, 'CONTINENTALCARGOEXPRESS.COM', 'CONTINENTALCARGOEXPRESS.COM', 'GO DADDY', '28/11/2015', '', ''),
(69, 20, 'colocarcourier.ca', 'colocarcourier.ca', 'GO DADDY ', '11/06/2016', '', ''),
(70, 21, 'comercializadorageneral.com', 'comercializadorageneral.com', 'GO DADDY ', '27/10/2016', '', ''),
(71, 22, 'COMUTEC.COM.CO', 'COMUTEC.COM.CO', 'GO DADDY ', '05/12/2015', '', ''),
(72, 23, 'CONACEROS.COM', 'CONACEROS.COM', 'GO DADDY ', '08/08/2016', '', ''),
(73, 24, 'CONEXIONHOTELES.COM.CO', 'CONEXIONHOTELES.COM.CO', 'GO DADDY ', '10/12/2015', '', ''),
(74, 25, 'controversiamodelos.com', 'controversiamodelos.com', 'GO DADDY ', '21/10/2016', '', ''),
(75, 26, 'CSFFIFBB.COM', 'CSFFIFBB.COM', 'GO DADDY ', '29/01/2016', '', ''),
(76, 27, '', '', '', '', '', ''),
(77, 28, 'DIEGOPEREZ.COM.CO', 'DIEGOPEREZ.COM.CO', 'GO DADDY ', '07/08/2016', '', ''),
(78, 28, 'DIEGOPEREZ.CO', 'DIEGOPEREZ.CO', 'GO DADDY ', '07/08/2016', '', ''),
(79, 29, 'DIGITALBOOM.CO', 'DIGITALBOOM.CO', 'GO DADDY ', '02/05/2016', '', ''),
(80, 30, 'disamazonas.com.co', 'disamazonas.com.co', 'MI.COM.CO', '29/10/2016', '', ''),
(81, 31, 'DOCTOREDUARDOLONDONO.COM', 'DOCTOREDUARDOLONDONO.COM', 'GO DADDY ', '23/04/2016', '', ''),
(82, 31, 'EDUARDOLONDONO.COM', 'EDUARDOLONDONO.COM', 'GO DADDY ', '23/04/2016', '', ''),
(83, 32, 'EMPAQUETADURASAMERICA.COM', 'EMPAQUETADURASAMERICA.COM', 'GO DADDY ', '07/10/2016', '', ''),
(84, 33, 'EMPAQUETADURASTAMAYO.COM', 'EMPAQUETADURASTAMAYO.COM', 'GO DADDY ', '17/05/2016', '', ''),
(85, 34, 'EOCENTRO.COM', 'EOCENTRO.COM', 'GO DADDY ', '09/10/2016', '', ''),
(86, 35, '', '', '', '', '', ''),
(87, 36, 'europersianas.com.co', 'europersianas.com.co', 'MI.COM.CO', '13/01/2016', '', ''),
(88, 37, '', '', '', '', '', ''),
(89, 38, 'FCCARGOEXPRESS.COM', 'FCCARGOEXPRESS.COM', 'GO DADDY ', '17/02/2016', '', ''),
(90, 39, 'FLORESDELACAMPINA.COM', 'FLORESDELACAMPINA.COM', 'GO DADDY ', '27/04/2016', '', ''),
(91, 40, 'GESINCOABOGADOS.COM', 'GESINCOABOGADOS.COM', 'GO DADDY ', '12/05/2016', '', ''),
(92, 41, '', '', '', '', '', ''),
(93, 42, 'GRABAFER.COM', 'GRABAFER.COM', 'GO DADDY ', '10/10/2016', '', ''),
(94, 43, '', '', '', '', '', ''),
(95, 44, 'IGTCOMPONENTES.COM', 'IGTCOMPONENTES.COM', 'GO DADDY ', '25/08/2016', '', ''),
(96, 45, '', '', '', '', '', ''),
(97, 46, '', '', '', '', '', ''),
(98, 47, 'INSER.COM.CO', 'INSER.COM.CO', 'GO DADDY ', '29/05/2016', '', ''),
(99, 48, 'IPMACH.COM', 'IPMACH.COM', 'GO DADDY ', '05/01/2016', '', ''),
(100, 49, '', '', '', '', '', ''),
(101, 50, 'LABORATORIOSOLUNA.COM', 'LABORATORIOSOLUNA.COM', 'GO DADDY ', '11/12/2015', '', ''),
(102, 51, 'LACASADESIRIO.COM', 'LACASADESIRIO.COM', 'GO DADDY ', '09/10/2016', '', ''),
(103, 51, 'LAHELICEDEESKIL.COM', 'LAHELICEDEESKIL.COM', 'GO DADDY ', '16/10/2016', '', ''),
(104, 51, 'LAPLACADEANU.COM', 'LAPLACADEANU.COM', 'GO DADDY', '16/10/2016', '', ''),
(105, 51, 'raulyepes.com', 'raulyepes.com', 'GO DADDY', '15/11/2016', '', ''),
(106, 52, 'LASDELICIASDELAABUELAATL.COM', 'LASDELICIASDELAABUELAATL.COM', 'GO DADDY ', '02/09/2016', '', ''),
(107, 53, '', '', '', '', '', ''),
(108, 54, 'LETSTALKSPANISHCA.COM', 'LETSTALKSPANISHCA.COM', 'GO DADDY ', '12/08/2016', '', ''),
(109, 55, '', '', '', '', '', ''),
(167, 56, 'LOSREDIMIDOS.COM', 'LOSREDIMIDOS.COM', 'GO DADDY ', '', '', ''),
(111, 57, 'MAEXPRESS.CO', 'MAEXPRESS.CO', 'GO DADDY ', '07/02/2016', '', ''),
(112, 58, 'MANUFACTURASGITANO.COM', 'MANUFACTURASGITANO.COM', 'GO DADDY ', '21/04/2016', '', ''),
(113, 59, '', '', '', '', '', ''),
(114, 60, '', '', '', '', '', ''),
(115, 61, '', '', '', '', '', ''),
(116, 62, 'NOVUSCLIP.COM', 'NOVUSCLIP.COM', 'GO DADDY ', '24/06/2016', '', ''),
(117, 63, 'NUTRISERVICIAL.COM', 'NUTRISERVICIAL.COM', 'GO DADDY ', '13/09/2016', '', ''),
(118, 64, 'PERSIANASMADRID.COM.CO', 'PERSIANASMADRID.COM.CO', 'GO DADDY ', '21/02/2016', '', ''),
(119, 65, '', '', '', '', '', ''),
(120, 66, 'proincol.com.co', 'proincol.com.co', 'MI.COM.CO', '09/05/2016', '', ''),
(121, 67, 'propiedadesypropiedades.com', 'propiedadesypropiedades.com', 'GO DADDY ', '23/10/2016', '', ''),
(122, 68, 'ryme.com.co', 'ryme.com.co', 'MI.COM.CO', '24/09/2018', '', ''),
(123, 69, 'SELLADOSYCOSTURAS.COM', 'SELLADOSYCOSTURAS.COM', 'GO DADDY ', '11/04/2016', '', ''),
(124, 70, '', '', '', '', '', ''),
(125, 71, '', '', '', '', '', ''),
(126, 72, 'suministrosalimenticios.com', 'suministrosalimenticios.com', '26/10/2016', '26/10/2016', '', ''),
(127, 73, 'SYSTELEMATIC.COM', 'SYSTELEMATIC.COM', 'GO DADDY ', '06/12/2015', '', ''),
(128, 74, '', '', '', '', '', ''),
(129, 75, 'TNTEXPRESS.CO', 'TNTEXPRESS.CO', 'GO DADDY ', '13/05/2016', '', ''),
(140, 76, 'translogic.com.co', 'translogic.com.co', 'MI.COM.CO', '29/03/2016', '', ''),
(131, 77, 'TUGOLENLARED.COM', 'TUGOLENLARED.COM', 'GO DADDY ', '31/07/2016', '', ''),
(132, 78, 'viaggiturismo.com.co', 'viaggiturismo.com.co', 'MI.COM.CO', '03/03/2016', '', ''),
(133, 79, 'VIKINGOSRESTAURANT.COM', 'VIKINGOSRESTAURANT.COM', 'GO DADDY ', '09/06/2016', '', ''),
(134, 80, 'VIVEROSOLROJO.COM', 'VIVEROSOLROJO.COM', 'GO DADDY ', '03/09/2016', '', ''),
(152, 81, 'VALERIAZAPATA.COM', 'VALERIAZAPATA.COM', 'GO DADDY ', '', '', ''),
(151, 81, 'webevolution.com.co', 'webevolution.com.co', 'MI.COM.CO', '', '', ''),
(165, 82, '', '', '', '', '', ''),
(143, 83, '', '', '', '', '', ''),
(145, 84, 'wearepaulownia.com', 'godaddy.com', 'godaddy', '', '', ''),
(146, 85, '', '', '', '', '', ''),
(153, 86, 'besimja.com', 'godaddy.com', 'godaddy', '2016-01-20', 'besimja', ')[5xF+JZT@c_'),
(158, 87, 'csff', 'csff-ifbb.com', 'godaddy', '2016-01-26', '123456', '123456'),
(159, 88, 'LAMBDA INGENIERIA', 'lambdaingenieria.com', 'Godaddy', '2016-01-29', '123456', '123456'),
(164, 89, '', '', '', '', '', ''),
(161, 90, '', '', '', '', '', ''),
(163, 91, '', '', '', '', '', ''),
(166, 92, '', '', '', '', '', ''),
(168, 93, 'sistemadegestion.co', '', '', '', '', ''),
(169, 94, 'sistemaocer.com', 'sistemaocer.com', '', '', '', ''),
(170, 95, 'jssuministros.com', '', '', '', '', ''),
(171, 96, '', '', '', '', '', ''),
(172, 97, 'x-fitsports', 'x-fitsports.com', 'godaddy', '2016-04-19', '123456', '123456'),
(173, 98, '', '', '', '', '', ''),
(174, 99, 'tchparts.com', 'tchparts.com', 'GODADDY', '2016-06-03', 'MIUSER', 'MIUSER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleados`
--

CREATE TABLE IF NOT EXISTS `Empleados` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Celcontacto` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Retencion` varchar(20) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `TipoCuenta` varchar(100) NOT NULL,
  `NumeroCuenta` varchar(100) NOT NULL,
  `Titular` varchar(100) NOT NULL,
  `Identificacion` varchar(100) NOT NULL,
  `FormaPago` varchar(100) NOT NULL,
  `Banco` varchar(100) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturacion`
--

CREATE TABLE IF NOT EXISTS `Facturacion` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Idobra` varchar(20) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Fechafact` date NOT NULL,
  `Fechalim` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `ValInicial` varchar(255) NOT NULL,
  `Valor` double NOT NULL,
  `Total` double NOT NULL,
  `Iva` double NOT NULL,
  `IvaTemp` int(11) NOT NULL,
  `Retencion` varchar(30) NOT NULL,
  `ReteICA` varchar(30) NOT NULL,
  `ValorCobrado` varchar(200) NOT NULL,
  `ValorReal` varchar(100) NOT NULL,
  `Estado` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Auto` int(11) NOT NULL,
  `Recurrente` int(11) NOT NULL,
  `Periodicidad` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `MotivoAnulacion` text NOT NULL,
  `UsuarioAnula` int(100) NOT NULL,
  `FechaAnulacion` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5199 ;

--
-- Volcado de datos para la tabla `Facturacion`
--

INSERT INTO `Facturacion` (`Id`, `Idcliente`, `Idobra`, `Razon`, `Nit`, `Direccion`, `Ciudad`, `Fechafact`, `Fechalim`, `Descripcion`, `ValInicial`, `Valor`, `Total`, `Iva`, `IvaTemp`, `Retencion`, `ReteICA`, `ValorCobrado`, `ValorReal`, `Estado`, `Muestra`, `Auto`, `Recurrente`, `Periodicidad`, `Usuario`, `Fecha`, `MotivoAnulacion`, `UsuarioAnula`, `FechaAnulacion`) VALUES
(005126, 76, '00022', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-01-06', '2016-01-06', 'ME EFECTUAN EL 6% DE RETENCION', '', 1420000, 1420000, 0, 0, '', '', '1420000.00', '1334800', 1, 0, 1, 0, '', '71216799', '2016-01-06 17:23:34', '', 0, '0000-00-00'),
(005127, 74, '00023', 'TECNICENTRO LOS COLORES', 'TECNICENTRO LOS COLORES', 'CALLE 50 # 66-20', 'MEDELLIN', '2016-01-04', '2016-01-04', 'RENOVACION HOSTING', '', 185600, 185600, 0, 0, '', '', '185600.00', '185600', 1, 0, 0, 0, '', '71216799', '2016-01-06 17:39:37', '', 0, '0000-00-00'),
(005128, 48, '00025', 'IP MACH ', 'IP MACH ', '7549 NW 70 ST MIAMI, FL 33166', 'MIAMI', '2016-01-10', '2016-01-15', 'RENOVACION HOSTING SIN IVA', '', 160000, 160000, 0, 0, '', '', '160000.00', '160000', 1, 0, 0, 0, '', '71216799', '2016-01-13 09:05:01', '', 0, '0000-00-00'),
(005129, 84, '00030', 'WE ARE PAULOWNIA', '7121675452', 'CRA 86A # 42C44', 'MEDELLIN', '2016-01-08', '2016-01-29', 'PAGO EN EFECTIVO SIN IVA NI RETENCION', '', 700000, 700000, 0, 0, '', '', '700000', '700000', 1, 0, 0, 0, '', '71216799', '2016-01-14 08:03:40', '', 0, '0000-00-00'),
(005130, 85, '00031', 'DOMA INMOBILIARIA', '324969410', 'CRA 25 # 1 A SUR 155 OFC. 1325', 'MEDELLIN', '2015-11-09', '2015-11-11', 'DISEÑO DE SITIO WEB', '', 1200000, 1209600, 16, 0, '', '', '696000.00', '696000', 4, 0, 0, 0, '', '71216799', '2016-01-14 08:13:24', '', 0, '0000-00-00'),
(005131, 81, '00032', 'WEB EVOLUTION', '71.216.799-2', 'calle', 'MEDELLIN', '2016-01-21', '2016-01-22', 'PRUEBA', '', 1000000, 1100000, 10, 0, '', '', '0', '0', 2, 0, 0, 0, '', '71216799', '2016-01-14 14:31:29', 'ANULADA', 71216799, '2016-02-03'),
(005132, 81, '0', 'WEB EVOLUTION', '71.216.799-2', 'CALLE', 'MEDELLIN', '2016-01-15', '2016-01-30', 'PRUEBA', '', 10000, 10000, 0, 0, '', '', '10000', '10000', 1, 0, 0, 0, '', '71216799', '2016-01-15 15:10:31', '', 0, '0000-00-00'),
(005133, 53, '0', 'LC TURISMO ', 'LC TURISMO ', 'CRA 43ª # 1 ? 85 OFICINA 202 ED. BANCO CAJA SOCIAL', 'MEDELLIN', '2016-01-14', '2016-01-22', 'RENOVACION HOSTING - LC TURISMO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '178800', 1, 0, 0, 0, '', '71216799', '2016-01-23 08:51:06', '', 0, '0000-00-00'),
(005134, 8, '0', 'AR PLATAFORMA EXPRESS', 'AR PLATAFORMA EXPRESS', 'TRANS 93 # 53-32 BODEGA 27', 'MEDELLIN ', '2016-01-02', '2016-01-04', 'SISTEMA AR PLATAFORMA', '', 300000, 348000, 48000, 16, '', '', '348000.00', '339000.0', 1, 0, 0, 0, '', '71216799', '2016-01-23 09:51:09', '', 0, '0000-00-00'),
(005135, 83, '00029', 'GENESIS INGENIERIA S.A.S', '8110176722', 'CALLE 13 # 43 D 36', 'MEDELLIN', '2016-01-21', '2016-01-22', 'DISEÑO DE SITIO WEB GENESIS', '', 1300000, 1508000, 208000, 16, '', '', '1508000.00', '1462500', 1, 0, 0, 0, '', '71216799', '2016-01-23 10:59:43', '', 0, '0000-00-00'),
(005136, 2, '0', 'ACADEMIA IFBB COLOMBIA', 'ACADEMIA IFBB COLOMBIA', 'CHIA, COLOMBIA', 'CHIA, BOGOTA', '2016-01-26', '2016-01-26', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '215296', 1, 0, 0, 0, '', '71216799', '2016-01-27 08:00:01', '', 0, '0000-00-00'),
(005137, 87, '0', 'CSFF', '71216794', 'CARANQUI OE6-110 Y AV. MARISCAL SUCRE', 'QUITO', '2016-01-26', '2016-01-26', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '215296', 1, 0, 0, 0, '', '71216799', '2016-01-27 08:00:26', '', 0, '0000-00-00'),
(005138, 88, '0', 'LAMBDA INGENIERIA', '54565445', '7569 NW 70TH ST', 'MEDELLIN', '2016-01-28', '2016-01-29', 'RENOVACION HOSTING Y DOMINIO', '', 150000, 174000, 24000, 16, '', '', '174000.00', '201840', 1, 0, 0, 0, '', '71216799', '2016-01-29 10:44:43', '', 0, '0000-00-00'),
(005139, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-01-28', '2016-01-30', 'PAGO MENSUAL TRANSWEB', '', 1026000, 1026000, 0, 0, '', '', '1026000', '968133.6', 1, 0, 0, 0, '', '71216799', '2016-01-30 09:17:32', '', 0, '0000-00-00'),
(005140, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-01-28', '2016-01-30', 'MATENIMIENTO PLATAFORMAS CAM 18 Y 01', '', 767400, 767400, 0, 0, '', '', '767400', '724118.64', 1, 0, 0, 0, '', '71216799', '2016-01-30 09:18:47', '', 0, '0000-00-00'),
(005141, 8, '00035', 'AR PLATAFORMA EXPRESS', 'AR PLATAFORMA EXPRESS', 'TRANS 93 # 53-32 BODEGA 27', 'MEDELLIN ', '2016-02-02', '2016-02-05', 'MANTENIMIENTO AR PLATAFORMA', '', 300000, 348000, 48000, 16, '', '', '348000', '358500', 1, 0, 0, 0, '', '71216799', '2016-02-02 08:35:14', '', 0, '0000-00-00'),
(005142, 38, '0', 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', '8615 NW 54 STREET MIAMI, FL 3316', 'MIAMI', '2016-02-02', '2016-02-05', 'MENSUALIDAD RAPIBOX', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-02-02 08:36:10', '', 0, '0000-00-00'),
(005143, 89, '0', 'ENVIA MI PQUETE', '45455457', '7569 NW 70TH ST ', 'MIAMI', '2016-02-02', '2016-02-05', 'MENSUALIDAD RAPIBOX', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-02-02 08:38:19', '', 0, '0000-00-00'),
(005144, 57, '0', 'MA EXPRESS', 'MA EXPRESS', '2153 NW 79TH AVE, MIAMI, 33122', 'MIAMI', '2016-02-02', '2016-02-05', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '185600', 1, 0, 0, 0, '', '71216799', '2016-02-02 08:38:52', '', 0, '0000-00-00'),
(005145, 19, '00038', 'CONTINENTAL CARGO EXPRESS', 'CONTINENTAL CARGO EXPRESS', '8615 NW 54TH ST. MIAMI, FL 33166', 'MIAMI', '2016-02-12', '2016-02-13', 'APP PARA IPHONE', '', 1200000, 1200000, 0, 0, '', '', '1200000.00', '1200000', 1, 0, 0, 0, '', '71216799', '2016-02-13 09:02:50', '', 0, '0000-00-00'),
(005146, 68, '0', 'RYME SOLUCIONES ELECTRONICAS ', '900.705.846-5 ', 'CARRERA 63 NO. 35 A 15, APTO. 101 ED. LA SOCIEDAD ', 'MEDELLIN', '2016-02-09', '2016-02-09', 'RENOVACION HOSTING', '', 150000, 174000, 24000, 16, '', '', '174000.00', '174000', 1, 0, 0, 0, '', '71216799', '2016-02-13 09:05:25', '', 0, '0000-00-00'),
(005147, 38, '0', 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', '8615 NW 54 STREET MIAMI, FL 3316', 'MIAMI', '2016-02-11', '2016-02-11', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '185600', 1, 0, 0, 0, '', '71216799', '2016-02-13 09:06:44', '', 0, '0000-00-00'),
(005148, 40, '0', 'GESINCO ABOGADOS', 'GESINCO ABOGADOS', 'CALLE 37 B Nº 84 A - 39 LAURELES', 'MEDELLIN', '2016-02-16', '2016-02-16', 'RENOVACION DOMINIO COACHINLEGAL.CO', '', 150000, 174000, 24000, 16, '', '', '174000.00', '174000', 1, 0, 0, 0, '', '71216799', '2016-02-16 09:02:27', '', 0, '0000-00-00'),
(005153, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-03-26', '2016-03-26', 'SISTEMA TRANSWEB', '', 1026000, 1026000, 0, 0, '', '', '1026000.00', '964440', 1, 0, 0, 0, '', '71216799', '2016-03-05 09:16:22', '', 0, '0000-00-00'),
(005152, 90, '00042', 'WILBERT PEREZ', '3107095442', 'CHIA, COLOMBIA', 'BOGOTA', '2016-02-25', '2016-03-11', 'SITIO WEB IFBBCOLOMBIA.COM', '', 750000, 750000, 0, 0, '', '', '301000.00', '301000', 4, 0, 0, 0, '', '71216799', '2016-02-27 10:03:32', '', 0, '0000-00-00'),
(005151, 78, '0', 'VIAGGI TURISMO', '900411112-5', 'CALLE 7D NRO 43C - 134 INT 203', 'MEDELLIN', '2016-02-22', '2016-02-22', 'RENOVACION DE DOMINIO', '', 70000, 81200, 11200, 16, '', '', '81200.00', '81200', 1, 0, 0, 0, '', '71216799', '2016-02-23 09:02:14', '', 0, '0000-00-00'),
(005154, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-03-26', '2016-03-29', 'SISTEMA EBEL', '', 845850, 845850, 0, 0, '', '', '845850.00', '795099', 1, 0, 0, 0, '', '71216799', '2016-03-05 09:17:27', '', 0, '0000-00-00'),
(005155, 89, '0', 'ENVIA MI PQUETE', '45455457', '7569 NW 70TH ST ', 'MIAMI', '2016-03-01', '2016-03-02', 'RENOVACION RAPIBOX', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-03-05 09:19:34', '', 0, '0000-00-00'),
(005156, 38, '0', 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', '8615 NW 54 STREET MIAMI, FL 3316', 'MIAMI', '2016-03-01', '2016-03-02', 'RENOVACION RAPIBOX', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-03-05 09:19:52', '', 0, '0000-00-00'),
(005157, 15, '00039', 'BRIPO CONFECCIONES', 'BRIPO CONFECCIONES', 'CR73 # 74-95 BOGOTÁ, COLOMBIA', 'BOGOTA ', '2016-03-01', '2016-03-11', 'PAGO SALDO BRIPO', '', 200000, 200000, 0, 0, '', '', '200000.00', '200000', 1, 0, 0, 0, '', '71216799', '2016-03-05 09:27:10', '', 0, '0000-00-00'),
(005158, 82, '00028', 'AYC ASESORIAS Y CONSULTORIAS', '7121678555', 'MEDELLIN', 'MEDELLIN', '2016-03-01', '2016-03-08', 'DISEÑO SITIO WEB - PAGO FINAL', '', 400000, 400000, 0, 0, '', '', '400000.00', '400000', 1, 0, 0, 0, '', '71216799', '2016-03-05 09:26:47', '', 0, '0000-00-00'),
(005159, 34, '00024', 'EO CENTRO', 'EO CENTRO', 'CRA 41 NO 9 ? 60 CONSULTORIO 202', 'MEDELLIN', '2016-03-01', '2016-03-08', 'PAGO FINAL MODIFICACIONES - BLOG - OPT IN', '', 650000, 650000, 0, 0, '', '', '650000.00', '650000', 1, 0, 0, 0, '', '71216799', '2016-03-05 09:28:42', '', 0, '0000-00-00'),
(005160, 92, '00043', 'ENERSAFE S.A', '900191122-3', 'CL 8B NO. 65-191 OFICINA 209 ', 'MEDELLIN', '2016-03-09', '2016-03-11', 'SITIO WEB ENERSAFE', '', 1400000, 1624000, 224000, 16, '', '', '1624000.00', '1568000', 1, 0, 0, 0, '', '71216799', '2016-03-10 08:43:23', '', 0, '0000-00-00'),
(005161, 81, '0', 'WEB EVOLUTION', '71.216.799-2', 'CALLE', 'MEDELLIN', '2016-03-17', '2016-03-17', 'PAGO WILTON DE CASA ', '', 10000000, 10000000, 0, 0, '', '', '10000000.00', '10000000', 1, 0, 0, 0, '', '71216799', '2016-03-17 11:25:10', '', 0, '0000-00-00'),
(005162, 43, '0', 'IEB - INGENIERIA ESPECIALIZADA S.A ', '800.068.234-1', 'CALLE 8B NO. 65-191 / C.E PUERTO SECO. OF 331', 'MEDELLIN', '2016-03-17', '2016-03-18', 'SITIO WEB IEB', '', 2400000, 2784000, 384000, 16, '', '', '2784000.00', '2688000', 1, 0, 0, 0, '', '71216799', '2016-03-17 11:26:30', '', 0, '0000-00-00'),
(005163, 93, '0', 'ALUMBRADO PUBLICO TURBO S.A', '900092051-4', 'CRA 43 B 16-41 OF 1007', 'MEDELLIN', '2016-03-14', '2016-03-18', 'RENOVACION HOSTING + DOMINIO SISTEMA DE GESTION', '', 300000, 348000, 48000, 16, '', '', '348000.00', '348000', 1, 0, 0, 0, '', '71216799', '2016-03-19 09:57:19', '', 0, '0000-00-00'),
(005164, 56, '0', 'LOS REDIMIDOS - IGLESIA CENTRO FAMILIAR CRISTIANO', '800.164.908-8', 'CALLE 50 # 80 - 20 CALAZANS ', 'MEDELLIN', '2016-03-14', '2016-03-15', 'RENOVACION HOSTING + DOMINIO', '', 180000, 208800, 28800, 16, '', '', '208800.00', '208800', 1, 0, 0, 0, '', '71216799', '2016-03-19 10:01:34', '', 0, '0000-00-00'),
(005165, 94, '0', 'TRANSPORTES LOGITICOS DE COLOMBIA S.A', '830110727-9', 'CL 17 # 115 - 10 BODEGA 4', 'BOGOTA - FONTIBON', '2016-03-14', '2016-03-15', 'RENOVACION SISTEMA OCR', '', 360000, 417600, 57600, 16, '', '', '417600.00', '417600', 1, 0, 0, 0, '', '71216799', '2016-03-19 10:06:47', '', 0, '0000-00-00'),
(005166, 28, '0', 'DR. DIEGO PEREZ ', '911.006.830-5', 'CALLE 7 # 39 107 TORRE MEDICAL CONSULTORIO 803', 'MEDELLIN', '2016-03-19', '2016-03-19', 'DISEÑO SITIO WEB, ANTICIPO 50%', '', 900000, 900000, 0, 0, '', '', '900000', '450000', 1, 0, 0, 0, '', '71216799', '2016-03-21 17:37:30', '', 0, '0000-00-00'),
(005167, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-03-31', '2016-03-31', 'MENSUALIDAD TRANSWEB', '', 1026000, 1026000, 0, 0, '', '', '1026000.00', '995220', 1, 0, 0, 0, '', '71216799', '2016-04-01 08:21:25', '', 0, '0000-00-00'),
(005168, 89, '0', 'ENVIA MI PAQUETE', '45455457', '7569 NW 70TH ST ', 'MIAMI', '2016-03-31', '2016-03-31', 'MENSUALIDAD RAPIBOX MARZO', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-04-01 08:44:15', '', 0, '0000-00-00'),
(005169, 38, '0', 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', '8615 NW 54 STREET MIAMI, FL 3316', 'MIAMI', '2016-03-31', '2016-03-31', 'MENSUALIDAD RAPIBOX MARZO', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-04-01 08:50:48', '', 0, '0000-00-00'),
(005170, 19, '00045', 'CONTINENTAL CARGO EXPRESS', 'CONTINENTAL CARGO EXPRESS', '8615 NW 54TH ST. MIAMI, FL 33166', 'MIAMI', '2016-04-01', '2016-04-01', 'MODIFICACIONES WEB', '', 150000, 150000, 0, 0, '', '', '150000.00', '150000', 1, 0, 0, 0, '', '71216799', '2016-04-01 08:51:57', '', 0, '0000-00-00'),
(005171, 8, '00035', 'AR PLATAFORMA EXPRESS', 'AR PLATAFORMA EXPRESS', 'TRANS 93 # 53-32 BODEGA 27', 'MEDELLIN ', '2016-04-01', '2016-04-05', 'MENSUALIDAD MARZO', '', 300000, 348000, 48000, 16, '', '', '348000.00', '337500', 1, 0, 0, 0, '', '71216799', '2016-04-01 08:52:31', '', 0, '0000-00-00'),
(005172, 14, '0', 'BLOQUES MULTI NUTRICIONALES', '811.023.764-1', 'CARRERA 51 #83 - 153 ITAGUI, ANTIOQUIA', 'ITAGUI', '2016-04-01', '2016-04-05', 'RENOVACION HOSTING + DOMINIO', '', 180000, 208800, 28800, 16, '', '', '208800.00', '200700', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:22:13', '', 0, '0000-00-00'),
(005173, 69, '0', 'SELLADOS Y COSNTURAS', 'SELLADOS Y COSNTURAS', 'CARRERA 50D - NO 61 - 42 MEDELLÍN, ANTIOQUIA', 'MEDELLIN', '2016-04-10', '2016-04-14', 'RENOVACION HOSTING + DOMINIO', '', 230000, 266800, 36800, 16, '', '', '266800.00', '266800', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:23:01', '', 0, '0000-00-00'),
(005174, 35, '0', 'ESE HOSPITAL SANTA ISABEL ', '800014405-2', 'CALLE 43 N 52 A 109 ', 'SAN PEDRO DE LOS MILAGROS ', '2016-04-10', '2016-04-14', 'RENOVACION HOSTING', '', 160000, 185600, 25600, 16, '', '', '185600.00', '157760', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:23:36', '', 0, '0000-00-00'),
(005175, 39, '0', 'FLORES DE LA CAMPIÑA', '800160435-8', 'CRA 60 N 49 A 20 ', 'EL CARMEN DE VIBORAL ', '2016-04-10', '2016-04-14', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '181600', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:24:03', '', 0, '0000-00-00'),
(005176, 95, '0', 'JS SUMINISTROS LTDA', '829000208-2', 'CALLE 74 # 24 - 106', 'BARRANCABERMEJA', '2016-04-10', '2016-04-14', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '179200', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:28:30', '', 0, '0000-00-00'),
(005177, 66, '0', 'PROINCOL  S.A.S', '811045223-1', 'DIAGONAL 33 NO.34B SUR - 4', 'ENVIGADO', '2016-04-14', '2016-04-17', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '179200', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:29:15', '', 0, '0000-00-00'),
(005178, 31, '0', 'DR. EDUARDO LONDOÑO M', 'DR. EDUARDO LONDOÑO M', 'CARRERA 45 N 6 - 95 PATIO BONITO - EL POBLADO', 'MEDELLIN', '2016-04-20', '2016-04-22', 'RENOVACION HOSTING + DOMINIO', '', 210000, 210000, 0, 0, '', '', '210000.00', '210000', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:29:48', '', 0, '0000-00-00'),
(005179, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-04-04', '2016-04-06', 'TRANSWEB APARTADO - QUIBDO + DOMINIO', '', 889950, 889950, 0, 0, '', '', '889950.00', '889950', 1, 0, 0, 0, '', '71216799', '2016-04-02 11:45:53', '', 0, '0000-00-00'),
(005180, 96, '00046', 'YAMILE ATEHORTUA', '61216799', 'CRA 53 NRO. 25 - 75', 'MEDELLIN', '2016-04-18', '2016-05-07', 'DESARROLLO SITIO WEB', '', 900000, 900000, 0, 0, '', '', '500000.00', '500000', 4, 0, 0, 0, '', '71216799', '2016-04-19 08:54:31', '', 0, '0000-00-00'),
(005181, 97, '00047', 'X-FITSPORTS', '733216799', '7569 NW 70TH ST', 'MIAMI', '2016-04-19', '2016-05-06', 'DISEÑO SITIO WEB Y FACTURA', '', 900000, 900000, 0, 0, '', '', '450000.00', '450000', 4, 0, 0, 0, '', '71216799', '2016-04-23 09:20:59', '', 0, '0000-00-00'),
(005182, 38, '0', 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', '8615 NW 54 STREET MIAMI, FL 3316', 'MIAMI', '2016-04-20', '2016-04-21', 'MODIFICACIONES SITIO WEB', '', 200000, 200000, 0, 0, '', '', '200000.00', '200000', 1, 0, 0, 0, '', '71216799', '2016-04-23 09:21:54', '', 0, '0000-00-00'),
(005183, 98, '00049', 'SYTECSA S.A.S.', '830.074.672-8', 'CALLE 18 SUR # 26 - 42', 'MEDELLIN', '2016-04-26', '2016-04-29', 'DISEÑO SITIO WEB', '', 1400000, 1624000, 224000, 16, '', '', '', '', 2, 0, 0, 0, '', '71216799', '2016-04-26 08:34:09', 'CAMBIO DE FACTURA', 71216799, '2016-04-26'),
(005184, 98, '00049', 'SYTECSA S.A.S.', '830.074.672-8', 'CALLE 18 SUR # 26 - 42', 'MEDELLIN', '2016-04-26', '2016-04-30', 'DESARROLLO SITIO WEB + INTRANET', '', 2200000, 2552000, 352000, 16, '', '', '2310000', '2310000', 4, 0, 0, 0, '', '71216799', '2016-04-26 10:32:12', '', 0, '0000-00-00'),
(005185, 38, '0', 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', '8615 NW 54 STREET MIAMI, FL 3316', 'MIAMI', '2016-04-30', '2016-04-30', 'MENSUALIDAD RAPIBOX ABRIL', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-04-29 10:05:40', '', 0, '0000-00-00'),
(005186, 89, '0', 'ENVIA MI PAQUETE', '45455457', '7569 NW 70TH ST ', 'MIAMI', '2016-04-30', '2016-04-30', 'MENSUALIDAD RAPIBOX ABRIL', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-04-29 10:06:23', '', 0, '0000-00-00'),
(005187, 8, '00035', 'AR PLATAFORMA EXPRESS', 'AR PLATAFORMA EXPRESS', 'TRANS 93 # 53-32 BODEGA 27', 'MEDELLIN ', '2016-04-30', '2016-04-30', 'MANTENIMIENTO AR PLATAFORMA', '', 300000, 348000, 48000, 16, '', '', '348000.00', '337500', 1, 0, 0, 0, '', '71216799', '2016-04-29 10:06:58', '', 0, '0000-00-00'),
(005188, 40, '', 'GESINCO ABOGADOS', 'GESINCO ABOGADOS', 'CALLE 37 B Nº 84 A - 39 LAURELES', 'MEDELLIN', '2016-05-10', '2016-05-10', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '185600.00', '185600', 1, 0, 0, 0, '', '71216799', '2016-04-29 10:10:33', '', 0, '0000-00-00'),
(005189, 29, 'add-pagar-expo.php', 'DIGITAL BOOM GRAPHIC', 'DIGITAL BOOM GRAPHIC', 'CALLE 94 A # 58-25  RIO NEGRO - COLOMBIA ', 'BOGOTA ', '2016-05-05', '2016-05-05', 'RENOVACION HOSTING + DOMINIO', '', 160000, 185600, 25600, 16, '', '', '', '', 2, 0, 0, 0, '', '71216799', '2016-04-29 10:10:07', 'NO PAGO', 71216799, '2016-05-28'),
(005190, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-04-30', '2016-04-30', 'MENSUALIDAD TRANSWEB', '', 1026000, 1026000, 0, 0, '', '', '1026000.00', '964440', 1, 0, 0, 0, '', '71216799', '2016-05-11 08:20:09', '', 0, '0000-00-00'),
(005191, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-05-12', '2016-05-12', 'CUENTA COBRO SERVIDOR', '', 330000, 330000, 0, 0, '', '', '330000.00', '330000', 1, 0, 0, 0, '', '71216799', '2016-05-16 08:34:33', '', 0, '0000-00-00'),
(005192, 76, '0', 'TRANSLOGIC', 'TRANSLOGIC', 'CLL. 51 NO. 41 – 133 ', 'ITAGUI', '2016-05-12', '2016-05-17', 'MATENIMIENTO PLATAFORMAS', '', 830700, 830700, 0, 0, '', '', '830700.00', '780858', 1, 0, 0, 0, '', '71216799', '2016-05-16 08:36:10', '', 0, '0000-00-00'),
(005193, 12, '0', 'AUTO PARTES DIESEL', 'AUTO PARTES DIESEL', 'CRA 46 # 32-04 MEDELLÍN, ANTIOQUIA', 'MEDELLIN', '2016-05-17', '2016-05-17', 'RENOVACION, EMPAQUETADURAS TAMAYO, AUTODICOL Y AUTOPARTES', '', 400000, 464000, 64000, 16, '', '', '464000.00', '448000', 1, 0, 0, 0, '', '71216799', '2016-05-23 13:14:40', '', 0, '0000-00-00'),
(005194, 41, '0', 'GODIVA SEX SHOP ', 'GODIVA SEX SHOP ', 'CLL 33 NO. 76 - 54', 'MEDELLIN', '2016-05-23', '2016-05-27', 'RENOVACION HOSTING', '', 110000, 127600, 17600, 16, '', '', '127600.00', '127600', 1, 0, 0, 0, '', '71216799', '2016-05-23 13:18:15', '', 0, '0000-00-00'),
(005195, 8, '00035', 'AR PLATAFORMA EXPRESS', 'AR PLATAFORMA EXPRESS', 'TRANS 93 # 53-32 BODEGA 27', 'MEDELLIN ', '2016-05-30', '2016-05-30', 'MENSUALIDAD AR EXPRESS', '', 300000, 348000, 48000, 16, '', '', '348000.00', '337500', 1, 0, 0, 0, '', '71216799', '2016-05-28 12:23:00', '', 0, '0000-00-00'),
(005196, 38, '0', 'FC CARGO EXPRESS', 'FC CARGO EXPRESS', '8615 NW 54 STREET MIAMI, FL 3316', 'MIAMI', '2016-05-30', '2016-05-30', 'MENSUALIDAD RAPIBOX', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-05-28 12:23:30', '', 0, '0000-00-00'),
(005197, 89, '0', 'ENVIA MI PAQUETE', '45455457', '7569 NW 70TH ST ', 'MIAMI', '2016-05-30', '2016-05-30', 'MENSUALIDAD RAPIBOX', '', 100000, 100000, 0, 0, '', '', '100000.00', '100000', 1, 0, 0, 0, '', '71216799', '2016-05-28 12:23:50', '', 0, '0000-00-00'),
(005198, 99, '00051', 'TECHNICAL PARTS SAS', '900971222-9', 'OFICINA IP MACH', 'MEDELLIN', '2016-06-03', '2016-06-03', 'SISTEMA Y PAGINA WEB', '', 1900000, 1900000, 0, 0, '', '', '1900000.00', '1900000', 1, 0, 0, 0, '', '71216799', '2016-06-03 14:16:27', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturacionmov`
--

CREATE TABLE IF NOT EXISTS `Facturacionmov` (
  `Id` int(11) NOT NULL auto_increment,
  `Idfact` int(6) unsigned zerofill NOT NULL,
  `Idobra` int(5) unsigned zerofill NOT NULL,
  `Cant` int(11) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Neto` double NOT NULL,
  `Valor` double NOT NULL,
  `Iva` varchar(150) NOT NULL,
  `ValorCobrado` varchar(200) NOT NULL,
  `ValorReal` varchar(100) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Volcado de datos para la tabla `Facturacionmov`
--

INSERT INTO `Facturacionmov` (`Id`, `Idfact`, `Idobra`, `Cant`, `Descripcion`, `Neto`, `Valor`, `Iva`, `ValorCobrado`, `ValorReal`, `Pos`) VALUES
(1, 005126, 00022, 1, 'SISTEMA DE INVENTARIOS PARA EBEL', 1420000, 1420000, '0', '1420000.00', '1334800', 0),
(2, 005127, 00023, 1, 'RENOVACION HOSTING', 185600, 185600, '0', '185600.00', '185600', 0),
(3, 005128, 00025, 1, 'RENOVACION HOSTING', 160000, 160000, '0', '160000.00', '160000', 0),
(4, 005129, 00030, 1, 'DISEÑO SITIO WEB', 700000, 700000, '0', '700000', '700000', 0),
(5, 005130, 00031, 1, 'DISEÑO SITIO WEB + HOSTING', 1200000, 1200000, '192000', '696000.00', '696000', 0),
(6, 005131, 00032, 1, 'PRUEBA', 1000000, 1000000, '100000', '0', '0', 0),
(7, 005132, 00000, 1, 'PRUEBA', 10000, 10000, '0', '10000', '10000', 0),
(8, 005133, 00000, 1, 'RENOVACION HOSTING - DOMINIO', 160000, 160000, '25600', '160000.00', '178800', 0),
(9, 005134, 00000, 1, 'MANTENIMIENTO AR PLATAFORMA', 300000, 300000, '48000', '300000.00', '339000.0', 0),
(10, 005135, 00029, 1, 'DISEÑO SITIO WEB', 1300000000, 1300000000, '208000000', '1508000.00', '1462500', 0),
(11, 005136, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '215296', 0),
(12, 005137, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '215296', 0),
(13, 005138, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 150000, 150000, '24000', '174000.00', '201840', 0),
(14, 005139, 00000, 1, 'SISTEMA TRANSWEB', 1026000, 1026000, '0', '1026000', '968133.6', 0),
(15, 005140, 00000, 1, 'MATENIMIENTO PLATAFORMAS', 767400, 767400, '0', '767400', '724118.64', 0),
(16, 005141, 00035, 1, 'MANTENIMIENTO AR PLATAFORMA', 300000, 300000, '48000', '348000', '358500', 0),
(17, 005142, 00000, 1, 'MENSUALIDAD RAPIBOX', 100000, 100000, '0', '100000.00', '100000', 0),
(18, 005143, 00000, 1, 'MENSUALIDAD RAPIBOX', 100000, 100000, '0', '100000.00', '100000', 0),
(19, 005144, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '185600', 0),
(20, 005145, 00038, 1, 'APP PARA IPHONE / 50% FINAL', 1200000, 1200000, '0', '1200000.00', '1200000', 0),
(21, 005146, 00000, 1, 'RENOVACION HOSTING', 150000, 150000, '24000', '174000.00', '174000', 0),
(22, 005147, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '185600', 0),
(23, 005148, 00000, 1, 'RENOVACION DOMINIO COACHINLEGAL.CO', 150000, 150000, '24000', '174000.00', '174000', 0),
(27, 005152, 00042, 1, 'DISEÑO SITIO WEB + HOSTING Y DOMINIO', 750000, 750000, '0', '301000.00', '301000', 0),
(26, 005151, 00000, 1, 'RENOVACION DOMINIO', 70000, 70000, '11200', '81200.00', '81200', 0),
(28, 005153, 00000, 1, 'SISTEMA TRANSWEB', 1026000, 1026000, '0', '1026000.00', '964440', 0),
(29, 005154, 00000, 1, 'SISTEMA EBEL', 845850, 845850, '0', '845850.00', '795099', 0),
(30, 005155, 00000, 1, 'RENOVACION RAPIBOX', 100000, 100000, '0', '100000.00', '100000', 0),
(31, 005156, 00000, 1, 'RENOVACION RAPIBOX', 100000, 100000, '0', '100000.00', '100000', 0),
(34, 005157, 00039, 1, 'DISEÑO SITIO WEB', 200000, 200000, '0', '200000.00', '200000', 0),
(33, 005158, 00028, 1, 'DISEÑO SITIO WEB', 400000, 400000, '0', '400000.00', '400000', 0),
(35, 005159, 00024, 1, 'MODIFICACIONES SITIO WEB', 750000, 750000, '0', '650000.00', '650000', 0),
(36, 005160, 00043, 1, 'DISEÑO SITIO WEB', 1400000, 1400000, '224000', '1624000.00', '1568000', 0),
(37, 005161, 00000, 1, 'PAGO WILTON DE CASA ', 10000000, 10000000, '0', '10000000.00', '10000000', 0),
(38, 005162, 00000, 1, 'DISEÑO SITIO WEB', 2400000, 2400000, '384000', '2784000.00', '2688000', 0),
(39, 005163, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 300000, 300000, '48000', '348000.00', '348000', 0),
(40, 005164, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 180000, 180000, '28800', '208800.00', '208800', 0),
(41, 005165, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 360000, 360000, '57600', '417600.00', '417600', 0),
(42, 005166, 00000, 1, 'DISEÑO SITIO WEB', 900000, 900000, '0', '900000', '450000', 0),
(43, 005167, 00000, 1, 'MENSUALIDAD TRANSWEB', 1026000, 1026000, '0', '1026000.00', '995220', 0),
(44, 005168, 00000, 1, 'MENSUALIDAD RAPIBOX MARZO', 100000, 100000, '0', '100000.00', '100000', 0),
(45, 005169, 00000, 1, 'MENSUALIDAD RAPIBOX MARZO', 100000, 100000, '0', '100000.00', '100000', 0),
(46, 005170, 00045, 1, 'MODIFICACIONES WEB', 150000, 150000, '0', '150000.00', '150000', 0),
(47, 005171, 00035, 1, 'MENSUALIDAD MARZO', 300000, 300000, '48000', '348000.00', '337500', 0),
(48, 005172, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 180000, 180000, '28800', '208800.00', '200700', 0),
(49, 005173, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 230000, 230000, '36800', '266800.00', '266800', 0),
(50, 005174, 00000, 1, 'RENOVACION HOSTING', 160000, 160000, '25600', '185600.00', '157760', 0),
(51, 005175, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '181600', 0),
(52, 005176, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '179200', 0),
(53, 005177, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '179200', 0),
(54, 005178, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 210000, 210000, '33600', '210000.00', '210000', 0),
(55, 005179, 00000, 1, 'TRANSWEB APARTADO - QUIBDO + DOMINIO', 889950, 889950, '0', '889950.00', '889950', 0),
(56, 005180, 00046, 1, 'DISEÑO SITIO WEB', 900000, 900000, '0', '500000.00', '500000', 0),
(57, 005181, 00047, 1, 'DISEÑO SITIO WEB', 900000, 900000, '0', '450000.00', '450000', 0),
(58, 005182, 00000, 1, 'MODIFICACIONES SITIO WEB', 200000, 200000, '0', '200000.00', '200000', 0),
(59, 005183, 00049, 1, 'DISEÑO SITIO WEB', 1400000, 1400000, '224000', '', '', 0),
(60, 005184, 00049, 1, 'DESARROLLO SITIO WEB + INTRANET', 2200000, 2200000, '352000', '2310000', '2310000', 0),
(61, 005185, 00000, 1, 'MENSUALIDAD RAPIBOX ABRIL', 100000, 100000, '0', '100000.00', '100000', 0),
(62, 005186, 00000, 1, 'MENSUALIDAD RAPIBOX ABRIL', 100000, 100000, '0', '100000.00', '100000', 0),
(63, 005187, 00035, 1, 'MANTENIMIENTO AR PLATAFORMA', 300000, 300000, '48000', '348000.00', '337500', 0),
(66, 005188, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '185600.00', '185600', 0),
(65, 005189, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 160000, 160000, '25600', '', '', 0),
(67, 005190, 00000, 1, 'MENSUALIDAD TRANSWEB', 1026000, 1026000, '0', '1026000.00', '964440', 0),
(68, 005191, 00000, 1, 'SERVIDOR DEDICADO', 330000, 330000, '0', '330000.00', '330000', 0),
(69, 005192, 00000, 1, 'MATENIMIENTO PLATAFORMAS', 830700, 830700, '0', '830700.00', '780858', 0),
(70, 005193, 00000, 1, 'RENOVACION HOSTING + DOMINIO', 400000, 400000, '64000', '464000.00', '448000', 0),
(71, 005194, 00000, 1, 'RENOVACION HOSTING', 110000, 110000, '17600', '127600.00', '127600', 0),
(72, 005195, 00035, 1, 'MENSUALIDAD AR EXPRESS', 300000, 300000, '48000', '348000.00', '337500', 0),
(73, 005196, 00000, 1, 'MENSUALIDAD RAPIBOX', 100000, 100000, '0', '100000.00', '100000', 0),
(74, 005197, 00000, 1, 'MENSUALIDAD RAPIBOX', 100000, 100000, '0', '100000.00', '100000', 0),
(75, 005198, 00051, 1, 'SISTEMA Y PAGINA WEB', 1900000, 1900000, '0', '1900000.00', '1900000', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturado`
--

CREATE TABLE IF NOT EXISTS `Facturado` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Idobra` varchar(20) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Fechafact` date NOT NULL,
  `Fechalim` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `ValInicial` varchar(255) NOT NULL,
  `Valor` double NOT NULL,
  `Total` double NOT NULL,
  `Iva` double NOT NULL,
  `Retencion` varchar(30) NOT NULL,
  `ReteICA` varchar(30) NOT NULL,
  `ValorCobrado` varchar(200) NOT NULL,
  `ValorReal` varchar(100) NOT NULL,
  `Estado` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `MotivoAnulacion` text NOT NULL,
  `UsuarioAnula` int(100) NOT NULL,
  `FechaAnulacion` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Facturado`
--

INSERT INTO `Facturado` (`Id`, `Idcliente`, `Idobra`, `Razon`, `Nit`, `Direccion`, `Ciudad`, `Fechafact`, `Fechalim`, `Descripcion`, `ValInicial`, `Valor`, `Total`, `Iva`, `Retencion`, `ReteICA`, `ValorCobrado`, `ValorReal`, `Estado`, `Muestra`, `Usuario`, `Fecha`, `MotivoAnulacion`, `UsuarioAnula`, `FechaAnulacion`) VALUES
(000001, 89, '', 'ENVIA MI PQUETE', '45455457', '7569 NW 70TH ST ', 'MIAMI', '2016-03-01', '2016-03-02', 'RENOVACION RAPIBOX', '', 100000, 100000, 0, '', '', '', '', 0, 0, '71216799', '2016-03-05 09:22:52', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturadomov`
--

CREATE TABLE IF NOT EXISTS `Facturadomov` (
  `Id` int(11) NOT NULL auto_increment,
  `Idfact` int(6) unsigned zerofill NOT NULL,
  `Idobra` int(5) unsigned zerofill NOT NULL,
  `Cant` int(11) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Neto` double NOT NULL,
  `Valor` double NOT NULL,
  `Iva` varchar(150) NOT NULL,
  `ValorCobrado` varchar(200) NOT NULL,
  `ValorReal` varchar(100) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Facturadomov`
--

INSERT INTO `Facturadomov` (`Id`, `Idfact`, `Idobra`, `Cant`, `Descripcion`, `Neto`, `Valor`, `Iva`, `ValorCobrado`, `ValorReal`, `Pos`) VALUES
(1, 000001, 00000, 1, 'RENOVACION RAPIBOX', 100000, 100000, '0', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Formas`
--

CREATE TABLE IF NOT EXISTS `Formas` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Activo` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `Formas`
--

INSERT INTO `Formas` (`Id`, `Nombre`, `Activo`, `Muestra`, `Pos`) VALUES
(5, 'TRANSFERENCIA', 0, 0, 0),
(6, 'PAGO EN LINEA PAYPAL', 0, 0, 0),
(7, 'EFECTIVO', 0, 0, 0),
(8, 'CHEQUE', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HistorialCobros`
--

CREATE TABLE IF NOT EXISTS `HistorialCobros` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idcuenta` int(6) unsigned zerofill NOT NULL,
  `Abono` varchar(250) NOT NULL,
  `ValorReal` varchar(100) NOT NULL,
  `Retencion` varchar(20) NOT NULL,
  `FechaAbono` date NOT NULL,
  `CuentaContable` varchar(150) NOT NULL,
  `Observaciones` varchar(500) NOT NULL,
  `Cuota` int(11) NOT NULL,
  `MotivoAnulacion` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Volcado de datos para la tabla `HistorialCobros`
--

INSERT INTO `HistorialCobros` (`Id`, `Idcuenta`, `Abono`, `ValorReal`, `Retencion`, `FechaAbono`, `CuentaContable`, `Observaciones`, `Cuota`, `MotivoAnulacion`, `Muestra`) VALUES
(000001, 005126, '1420000.00', '1334800.00', '0.06', '2016-01-06', '6', 'ABONO DE LA FACTURA NRO. 000001 | 2016-01-06', 1, '', 0),
(000002, 005127, '185600.00', '185600.00', '0.0', '2016-01-06', '6', 'ABONO DE LA FACTURA NRO. 005127 | 2016-01-06', 1, '', 0),
(000003, 005128, '160000.00', '160000.00', '0.0', '2016-01-13', '6', 'ABONO DE LA FACTURA NRO. 005128 | 2016-01-13', 1, '', 0),
(000004, 005129, '350000.00', '350000.00', '0.0', '2016-01-08', '8', 'ABONO DE LA FACTURA NRO. 005129 | 2016-01-14', 1, '', 0),
(000005, 005130, '696000.00', '696000.00', '0.0', '2015-11-11', '6', 'ABONO DE LA FACTURA NRO. 005130 | 2016-01-14', 1, '', 0),
(000006, 005131, '10000.00', '10000.00', '0.0', '2016-01-14', '8', 'ABONO DE LA FACTURA NRO. 005131 | 2016-01-14', 1, 'ANULA', 1),
(000007, 005132, '5000.00', '5000.00', '0.0', '2016-01-15', '6', 'ABONO DE LA FACTURA NRO. 005132 | 2016-01-15', 1, '', 0),
(000008, 005132, '5000.00', '5000.00', '0.0', '2016-01-21', '7', 'ABONO DE LA FACTURA NRO. 005132 | 2016-01-15', 2, '', 0),
(000009, 005133, '160000.00', '178800.00', '0.04', '2016-01-22', '8', 'ABONO DE LA FACTURA NRO. 005133 | 2016-01-23', 1, '', 0),
(000010, 005134, '300000.00', '339000.00', '0.03', '2016-01-13', '6', 'ABONO DE LA FACTURA NRO. 005134 | 2016-01-23', 1, '', 0),
(000011, 005137, '185600.00', '215296.00', '0.00', '2016-01-26', '6', 'ABONO DE LA FACTURA NRO. 005137 | 2016-01-27', 1, '', 0),
(000012, 005136, '185600.00', '215296.00', '0.00', '2016-01-26', '6', 'ABONO DE LA FACTURA NRO. 005136 | 2016-01-27', 1, '', 0),
(000013, 005138, '174000.00', '201840.00', '0.00', '2016-01-28', '6', 'ABONO DE LA FACTURA NRO. 005138 | 2016-01-29', 1, '', 0),
(000014, 005139, '964440.00', '906573.60', '0.06', '2016-01-30', '6', 'ABONO DE LA FACTURA NRO. 005139 | 2016-01-30', 1, '', 0),
(000015, 005140, '721356.00', '678074.64', '0.06', '2016-02-02', '6', 'ABONO DE LA FACTURA NRO. 005140 | 2016-02-03', 1, '', 0),
(000016, 005143, '100000.00', '100000.00', '0.00', '2016-02-05', '6', 'ABONO DE LA FACTURA NRO. 005143 | 2016-02-09', 1, '', 0),
(000017, 005142, '100000.00', '100000.00', '0.00', '2016-02-05', '6', 'ABONO DE LA FACTURA NRO. 005142 | 2016-02-09', 1, '', 0),
(000018, 005144, '185000.00', '185000.00', '0.00', '2016-02-09', '6', 'ABONO DE LA FACTURA NRO. 005144 | 2016-02-13', 1, 'NO CARGO EL VALOR CORRECTO', 1),
(000019, 005144, '185600.00', '185600.00', '0.00', '2016-02-09', '6', 'ABONO DE LA FACTURA NRO. 005144 | 2016-02-13', 1, '', 0),
(000020, 005141, '337500.00', '348000.00', '0.035', '2016-02-09', '6', 'ABONO DE LA FACTURA NRO. 005141 | 2016-02-13', 1, '', 0),
(000021, 005145, '1200000.00', '1200000.00', '0.00', '2016-02-12', '6', 'ABONO DE LA FACTURA NRO. 005145 | 2016-02-13', 1, '', 0),
(000022, 005147, '185600.00', '185600.00', '0.00', '2016-02-11', '6', 'ABONO DE LA FACTURA NRO. 005147 | 2016-02-13', 1, '', 0),
(000023, 005146, '174000.00', '174000.00', '0.00', '2016-02-09', '6', 'ABONO DE LA FACTURA NRO. 005146 | 2016-02-13', 1, '', 0),
(000024, 005148, '174000.00', '174000.00', '0.00', '2016-02-16', '6', 'ABONO DE LA FACTURA NRO. 005148 | 2016-02-16', 1, '', 0),
(000028, 005140, '46044.00', '46044.00', '0.00', '2016-02-02', '6', 'ABONO DE LA FACTURA NRO. 005140 | 2016-02-17', 2, '', 0),
(000027, 005141, '10500.00', '10500.00', '0.00', '2016-02-09', '6', 'ABONO DE LA FACTURA NRO. 005141 | 2016-02-17', 2, '', 0),
(000029, 005139, '61560.00', '61560.00', '0.00', '2016-01-31', '6', 'ABONO DE LA FACTURA NRO. 005139 | 2016-02-17', 2, '', 0),
(000030, 005151, '81200.00', '81200.00', '0.00', '2016-02-22', '6', 'ABONO DE LA FACTURA NRO. 005151 | 2016-02-23', 1, '', 0),
(000031, 005129, '350000.00', '350000.00', '0.00', '2016-02-25', '6', 'ABONO DE LA FACTURA NRO. 005129 | 2016-02-27', 2, '', 0),
(000032, 005152, '301000.00', '301000.00', '0.00', '2016-02-25', '6', 'ABONO DE LA FACTURA NRO. 005152 | 2016-02-27', 1, '', 0),
(000033, 005156, '100000.00', '100000.00', '0.00', '2016-03-02', '6', 'ABONO DE LA FACTURA NRO. 005156 | 2016-03-05', 1, '', 0),
(000034, 005155, '100000.00', '100000.00', '0.00', '2016-03-03', '6', 'ABONO DE LA FACTURA NRO. 005155 | 2016-03-05', 1, '', 0),
(000035, 005154, '845850.00', '795099.00', '0.06', '2016-03-01', '6', 'ABONO DE LA FACTURA NRO. 005154 | 2016-03-05', 1, '', 0),
(000036, 005153, '1026000.00', '964440.00', '0.06', '2016-02-28', '6', 'ABONO DE LA FACTURA NRO. 005153 | 2016-03-05', 1, '', 0),
(000037, 005158, '400000.00', '400000.00', '0.00', '2016-03-06', '6', 'ABONO DE LA FACTURA NRO. 005158 | 2016-03-07', 1, '', 0),
(000038, 005157, '200000.00', '200000.00', '0.00', '2016-03-07', '6', 'ABONO DE LA FACTURA NRO. 005157 | 2016-03-08', 1, '', 0),
(000039, 005159, '650000.00', '650000.00', '0.00', '2016-03-09', '6', 'ABONO DE LA FACTURA NRO. 005159 | 2016-03-10', 1, '', 0),
(000040, 005163, '348000.00', '348000.00', '0.00', '2016-03-18', '6', 'ABONO DE LA FACTURA NRO. 005163 | 2016-03-19', 1, '', 0),
(000041, 005164, '208800.00', '208800.00', '0.00', '2016-03-15', '6', 'ABONO DE LA FACTURA NRO. 005164 | 2016-03-19', 1, '', 0),
(000042, 005161, '10000000.00', '10000000.00', '0.00', '2016-03-17', '6', 'ABONO DE LA FACTURA NRO. 005161 | 2016-03-19', 1, '', 0),
(000043, 005166, '450000.00', '.', '0.00', '2016-03-19', '6', 'ABONO DE LA FACTURA NRO. 005166 | 2016-03-21', 1, '', 0),
(000044, 005165, '417600.00', '417600.00', '0.00', '2016-04-29', '6', 'ABONO DE LA FACTURA NRO. 005165 | 2016-04-01', 1, '', 0),
(000045, 005170, '150000.00', '150000.00', '0.00', '2016-04-01', '6', 'ABONO DE LA FACTURA NRO. 005170 | 2016-04-01', 1, '', 0),
(000046, 005168, '100000.00', '100000.00', '0.00', '2016-03-31', '6', 'ABONO DE LA FACTURA NRO. 005168 | 2016-04-01', 1, '', 0),
(000047, 005169, '100000.00', '100000.00', '0.00', '2016-04-02', '6', 'ABONO DE LA FACTURA NRO. 005169 | 2016-04-02', 1, '', 0),
(000048, 005167, '1026000.00', '995220.00', '0.03', '2016-03-31', '6', 'ABONO DE LA FACTURA NRO. 005167 | 2016-04-02', 1, '', 0),
(000049, 005172, '208800.00', '200700.00', '0.045', '2016-04-05', '6', 'ABONO DE LA FACTURA NRO. 005172 | 2016-04-05', 1, '', 0),
(000050, 005173, '266800.00', '266800.00', '0.00', '2016-04-07', '6', 'ABONO DE LA FACTURA NRO. 005173 | 2016-04-11', 1, '', 0),
(000051, 005179, '889950.00', '889950.00', '0.00', '2016-04-11', '6', 'ABONO DE LA FACTURA NRO. 005179 | 2016-04-12', 1, '', 0),
(000052, 005176, '185600.00', '179200.00', '0.04', '2016-04-11', '6', 'ABONO DE LA FACTURA NRO. 005176 | 2016-04-12', 1, '', 0),
(000053, 005171, '348000.00', '337500.00', '0.035', '2016-04-12', '6', 'ABONO DE LA FACTURA NRO. 005171 | 2016-04-12', 1, '', 0),
(000054, 005162, '2784000.00', '2688000.00', '0.04', '2016-04-12', '6', 'ABONO DE LA FACTURA NRO. 005162 | 2016-04-13', 1, '', 0),
(000055, 005174, '185600.00', '157760.00', '0.174', '2016-04-15', '6', 'ABONO DE LA FACTURA NRO. 005174 | 2016-04-16', 1, '', 0),
(000056, 005180, '500000.00', '500000.00', '0.00', '2016-04-18', '6', 'ABONO DE LA FACTURA NRO. 005180 | 2016-04-19', 1, '', 0),
(000057, 005178, '210000.00', '210000.00', '0.00', '2016-04-22', '6', 'ABONO DE LA FACTURA NRO. 005178 | 2016-04-23', 1, '', 0),
(000058, 005166, '450000.00', '450000.00', '0.00', '2016-04-20', '6', 'ABONO DE LA FACTURA NRO. 005166 | 2016-04-23', 2, '', 0),
(000059, 005182, '200000.00', '200000.00', '0.00', '2016-04-20', '6', 'ABONO DE LA FACTURA NRO. 005182 | 2016-04-23', 1, '', 0),
(000060, 005181, '450000.00', '450000.00', '0.00', '2016-04-25', '6', 'ABONO DE LA FACTURA NRO. 005181 | 2016-04-26', 1, '', 0),
(000061, 005175, '185600.00', '181600.00', '0.025', '2016-04-25', '6', 'ABONO DE LA FACTURA NRO. 005175 | 2016-04-26', 1, '', 0),
(000062, 005184, '1276000.00', '1276000.00', '0.00', '2016-04-29', '6', 'ABONO DE LA FACTURA NRO. 005184 | 2016-05-04', 1, '', 0),
(000063, 005186, '100000.00', '100000.00', '0.00', '2016-05-06', '6', 'ABONO DE LA FACTURA NRO. 005186 | 2016-05-06', 1, '', 0),
(000064, 005185, '100000.00', '100000.00', '0.00', '2016-05-06', '6', 'ABONO DE LA FACTURA NRO. 005185 | 2016-05-06', 1, '', 0),
(000065, 005177, '185600.00', '179200.00', '0.04', '2016-05-06', '6', 'ABONO DE LA FACTURA NRO. 005177 | 2016-05-06', 1, '', 0),
(000066, 005190, '1026000.00', '964440.00', '0.06', '2016-04-30', '6', 'ABONO DE LA FACTURA NRO. 005190 | 2016-05-11', 1, '', 0),
(000067, 005188, '185600.00', '185600.00', '0.00', '2016-05-11', '6', 'ABONO DE LA FACTURA NRO. 005188 | 2016-05-11', 1, '', 0),
(000068, 005187, '348000.00', '337500.00', '0.035', '2016-05-12', '6', 'ABONO DE LA FACTURA NRO. 005187 | 2016-05-13', 1, '', 0),
(000069, 005191, '330000.00', '330000.00', '0.00', '2016-05-14', '6', 'ABONO DE LA FACTURA NRO. 005191 | 2016-05-16', 1, '', 0),
(000070, 005192, '830700.00', '780858.00', '0.06', '2016-05-16', '6', 'ABONO DE LA FACTURA NRO. 005192 | 2016-05-23', 1, '', 0),
(000071, 005160, '1624000.00', '1568000.00', '0.04', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO. 005160 | 2016-05-23', 1, '', 0),
(000072, 005193, '464000.00', '448000.00', '0.04', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO. 005193 | 2016-05-23', 1, '', 0),
(000073, 005135, '1508000.00', '1462500.00', '0.035', '2016-05-26', '6', 'ABONO DE LA FACTURA NRO. 005135 | 2016-05-28', 1, '', 0),
(000074, 005197, '100000.00', '100000.00', '0.00', '2016-06-01', '6', 'ABONO DE LA FACTURA NRO. 005197 | 2016-06-03', 1, '', 0),
(000075, 005196, '100000.00', '100000.00', '0.00', '2016-06-02', '6', 'ABONO DE LA FACTURA NRO. 005196 | 2016-06-03', 1, '', 0),
(000076, 005194, '127600.00', '127600.00', '0.00', '2016-05-31', '6', 'ABONO DE LA FACTURA NRO. 005194 | 2016-06-03', 1, '', 0),
(000077, 005184, '1034000.00', '1034000.00', '0.00', '2016-05-31', '6', 'ABONO DE LA FACTURA NRO. 005184 | 2016-06-03', 2, '', 0),
(000078, 005198, '1900000.00', '1900000.00', '0.00', '2016-06-03', '6', 'ABONO DE LA FACTURA NRO. 005198 | 2016-06-03', 1, '', 0),
(000079, 005195, '348000.00', '337500.00', '0.035', '2016-06-13', '6', 'ABONO DE LA FACTURA NRO. 005195 | 2016-06-13', 1, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HistorialPagos`
--

CREATE TABLE IF NOT EXISTS `HistorialPagos` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idcuenta` int(6) unsigned zerofill NOT NULL,
  `Abono` varchar(250) NOT NULL,
  `FechaAbono` date NOT NULL,
  `CuentaContable` varchar(200) NOT NULL,
  `Observaciones` varchar(500) NOT NULL,
  `Cuota` int(11) NOT NULL,
  `MotivoAnulacion` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Volcado de datos para la tabla `HistorialPagos`
--

INSERT INTO `HistorialPagos` (`Id`, `Idcuenta`, `Abono`, `FechaAbono`, `CuentaContable`, `Observaciones`, `Cuota`, `MotivoAnulacion`, `Muestra`) VALUES
(000001, 000003, '10000.00', '2016-01-22', '6', 'ABONO DE LA FACTURA NRO. 5752 | 2016-01-13', 1, '', 0),
(000002, 000003, '5222.22', '2016-01-22', '7', 'ABONO DE LA FACTURA NRO. 5752 | 2016-01-13', 2, '', 0),
(000003, 000006, '750000.00', '2016-01-08', '6', 'ABONO DE LA FACTURA NRO. 0685 | 2016-01-14', 1, '', 0),
(000004, 000005, '400000.00', '2016-01-16', '6', 'ABONO DE LA FACTURA NRO. 107870 | 2016-01-23', 1, '', 0),
(000005, 000004, '200000.00', '2016-01-16', '6', 'ABONO DE LA FACTURA NRO. 107870 | 2016-01-23', 1, '', 0),
(000006, 000020, '413500.00', '2016-01-27', '6', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000007, 000015, '400000.00', '2016-01-29', '6', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000008, 000014, '400000.00', '2016-01-29', '6', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000009, 000013, '49900.00', '2016-01-22', '6', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000010, 000004, '200000.00', '2016-01-16', '6', 'ABONO DE LA FACTURA NRO. 107870 | 2016-01-30', 2, '', 0),
(000011, 000009, '126493.00', '2016-01-28', '6', 'ABONO DE LA FACTURA NRO. 75980557 | 2016-01-30', 1, '', 0),
(000012, 000018, '142600.00', '2016-01-28', '6', 'ABONO DE LA FACTURA NRO. 784544 | 2016-01-30', 1, '', 0),
(000013, 000025, '49900.00', '2016-01-30', '7', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000014, 000024, '49900.00', '2016-01-30', '7', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000015, 000023, '49900.00', '2016-01-30', '7', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000016, 000022, '49900.00', '2016-01-30', '7', 'ABONO DE LA FACTURA NRO.  | 2016-01-30', 1, '', 0),
(000017, 000017, '637200.00', '2016-02-12', '6', 'ABONO DE LA FACTURA NRO.  | 2016-02-13', 1, '', 0),
(000018, 000008, '637200.00', '2016-02-12', '6', 'ABONO DE LA FACTURA NRO. 107870 | 2016-02-13', 1, '', 0),
(000019, 000016, '750000.00', '2016-02-16', '6', 'ABONO DE LA FACTURA NRO.  | 2016-02-16', 1, '', 0),
(000020, 000029, '400000.00', '2016-02-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-02-17', 1, '', 0),
(000021, 000028, '400000.00', '2016-02-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-02-17', 1, '', 0),
(000022, 000030, '160000.00', '2016-02-25', '6', 'ABONO DE LA FACTURA NRO.  | 2016-02-27', 1, '', 0),
(000023, 000032, '315650.00', '2016-03-29', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-05', 1, '', 0),
(000024, 000034, '400000.00', '2016-03-03', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-05', 1, '', 0),
(000025, 000033, '200000.00', '2016-03-11', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-05', 1, '', 0),
(000026, 000041, '440000.00', '2016-03-28', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-05', 1, '', 0),
(000027, 000040, '49900.00', '2016-03-07', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-07', 1, '', 0),
(000028, 000042, '160000.00', '2016-03-07', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-07', 1, '', 0),
(000029, 000033, '200000.00', '2016-03-07', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-08', 2, '', 0),
(000030, 000043, '160000.00', '2016-03-09', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-09', 1, '', 0),
(000031, 000037, '750000.00', '2016-03-10', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-10', 1, '', 0),
(000032, 000036, '400000.00', '2016-03-13', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-14', 1, '', 0),
(000033, 000044, '200313.00', '2016-03-14', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-14', 1, '', 0),
(000034, 000026, '204100.00', '2016-03-14', '6', 'ABONO DE LA FACTURA NRO. 455445 | 2016-03-14', 1, '', 0),
(000035, 000021, '413500.00', '2016-03-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-17', 1, '', 0),
(000036, 000035, '400000.00', '2016-03-15', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-17', 1, '', 0),
(000037, 000031, '1000000.00', '2016-03-15', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-19', 1, '', 0),
(000038, 000047, '50000.00', '2016-03-15', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-19', 1, '', 0),
(000039, 000038, '637200.00', '2016-03-19', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-19', 1, '', 0),
(000040, 000049, '126708.00', '2016-03-19', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-19', 1, '', 0),
(000041, 000048, '40000.00', '2016-03-19', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-19', 1, '', 0),
(000042, 000046, '100000.00', '2016-03-27', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-28', 1, '', 0),
(000043, 000050, '410000.00', '2016-03-26', '6', 'ABONO DE LA FACTURA NRO.  | 2016-03-28', 1, '', 0),
(000044, 000046, '300000.00', '2016-03-30', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-01', 2, '', 0),
(000045, 000045, '400000.00', '2016-03-30', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-01', 1, '', 0),
(000046, 000051, '995220.00', '2016-03-31', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-02', 1, '', 0),
(000047, 000019, '1600000.00', '2016-04-04', '6', 'ABONO DE LA FACTURA NRO. 54454545 | 2016-04-06', 1, '', 0),
(000048, 000043, '131027.00', '2016-04-09', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 2, '', 0),
(000049, 000042, '98367.00', '2016-04-09', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 2, '', 0),
(000050, 000057, '270606.00', '2016-04-09', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 1, '', 0),
(000051, 000058, '300000.00', '2016-04-01', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 1, '', 0),
(000052, 000039, '150000.00', '2016-04-08', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 1, '', 0),
(000053, 000012, '16000.00', '2016-04-08', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 1, '', 0),
(000054, 000060, '364000.00', '2016-04-04', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 1, '', 0),
(000055, 000059, '450000.00', '2016-04-02', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 1, '', 0),
(000056, 000061, '46975.00', '2016-04-11', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-11', 1, '', 0),
(000057, 000053, '750000.00', '2016-04-12', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-12', 1, '', 0),
(000058, 000010, '336000.00', '2016-04-13', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-13', 1, '', 0),
(000059, 000062, '1300000.00', '2016-04-13', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-13', 1, '', 0),
(000060, 000063, '200113.00', '2016-04-13', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-13', 1, '', 0),
(000061, 000055, '400000.00', '2016-04-15', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-15', 1, '', 0),
(000062, 000054, '400000.00', '2016-04-15', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-15', 1, '', 0),
(000063, 000064, '200000.00', '2016-04-18', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-19', 1, '', 0),
(000064, 000065, '46000.00', '2016-04-19', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-19', 1, '', 0),
(000065, 000066, '37000.00', '2016-04-19', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-19', 1, '', 0),
(000066, 000052, '637200.00', '2016-04-21', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-23', 1, '', 0),
(000067, 000067, '128000.00', '2016-04-23', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-23', 1, '', 0),
(000068, 000056, '440000.00', '2016-04-27', '6', 'ABONO DE LA FACTURA NRO.  | 2016-04-27', 1, '', 0),
(000069, 000051, '964440.00', '2016-04-30', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-11', 2, '', 0),
(000070, 000074, '40000.00', '2016-05-11', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-11', 1, '', 0),
(000071, 000073, '637200.00', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-28', 1, '', 0),
(000072, 000072, '90000.00', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-28', 1, '', 0),
(000073, 000071, '190000.00', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-28', 1, '', 0),
(000074, 000075, '180000.00', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-28', 1, '', 0),
(000075, 000070, '750000.00', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-28', 1, '', 0),
(000076, 000069, '400000.00', '2016-05-17', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-28', 1, '', 0),
(000077, 000068, '400000.00', '2016-04-30', '6', 'ABONO DE LA FACTURA NRO.  | 2016-05-28', 1, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Hosting`
--

CREATE TABLE IF NOT EXISTS `Hosting` (
  `Id` int(10) unsigned NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Proveedor` varchar(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

--
-- Volcado de datos para la tabla `Hosting`
--

INSERT INTO `Hosting` (`Id`, `Idcliente`, `Nombre`, `Url`, `Proveedor`, `Fecha`, `Usuario`, `Contrasena`) VALUES
(159, 2, 'academiaifbbcolo', 'academiaifbbcolombia.com', '', '2016-02-03', 'Prueba', '&lP[?%WT+xsy'),
(46, 3, 'aerobuzo', 'aerobuzon.com', '', '07/02/2016', '', 'QcI,Wb]38V*0'),
(47, 4, 'almacene', 'almacenelpez.com', '', '02/02/2016', '', 'czf3l9tr99'),
(48, 5, 'andresan', 'http://andresangelsas.com/', '', '05/06/2016', '', 'bK##eRx+)cR;'),
(54, 7, 'aromasde', 'aromasdecolombia.com', '', '14/06/2016', '', 'webevolution'),
(53, 6, 'legalconsultingg', 'LEGALCONSULTINGGROUP.CO', '', '19/02/2016', '', 'wI$?z0.@(l,w'),
(50, 6, 'coachinglegal', 'COACHINGLEGAL.CO', '', '20/02/2016', '', 'K023oWPqZ]UX'),
(51, 6, 'legalservicesgro', 'LEGALSERVICESGROUP.CO', '', '21/08/2016', '', '4k-@VNgW}o(('),
(19, 1, 'prueba', 'prueba', '', '0000-00-00', '', 'prueba'),
(18, 1, 'prueba', 'prueba', '', '0000-00-00', '', 'prueba'),
(20, 1, 'TEST', 'TEST', '', 'TEST', '', 'TEST'),
(21, 1, 'TEST', 'TEST', '', 'TEST', '', 'TEST'),
(52, 6, 'andrexvalenciaab', 'andresvalenciaabogados.com', '', '02/09/2016', '', 'Te_!EG,5^=_b'),
(49, 6, 'andresvalenciaja', 'andresvalenciajaramilloabogados.co', '', '21/08/2016', '', '4k-@VNgW}o(('),
(156, 8, 'arplataforma', 'arplataforma.com', '', '', '', '}^*#!X!IGN9#'),
(158, 9, 'asmecon', 'asmecon.com', '', '', '', '4g7wx0lwzn'),
(57, 10, 'atlantic', 'atlanticpack.net', '', '14/07/2016', '', 'ymvtok7ue9'),
(58, 11, 'auraarei', 'auraareiza.com', '', '07/06/2016', '', 'glkpmgxc'),
(60, 12, 'autopart ', 'autopartesdiesel.com', '', '29/05/2016', '', 'h7fwo7qes2'),
(61, 13, 'betomaqu', 'betomaquinas.com', '', '07/06/2016', '', 'qbeskupn'),
(62, 14, 'bloquesm', 'bloquesmultinutricionales.com', '', '20/03/2016', '', 'kgnkijnl'),
(63, 15, 'bripo', 'bripo.co', '', '31/08/2016', '', '&ZAReSqQ)F3i'),
(64, 16, 'kasiller', 'CASILLEROSUSA.COM', '', '30/09/2016', '', 'bx6gp5mvwi'),
(65, 16, 'usscargo', 'USSCARGO.COM', '', '08/11/2016', '', '2lNOT+N94?5X'),
(66, 17, 'casiller', 'casillerovirtual.net', '', '17/07/2016', '', 'qa9veq2t9x'),
(68, 18, 'cazaja', 'cazaja.com', '', '14/08/2016', '', '5qOE58)*eVIb'),
(69, 18, 'lucaos', 'lucaos.com', '', '20/10/2016', '', 'yS!V2rZp6rbT'),
(70, 18, 'yupipr5', 'yupiproducts.com', '', '14/04/2016', '', '?H7L+1hKcy;V'),
(71, 19, 'ccexpres', 'ccexpress.co', '', '28/11/2016', '', 'pukeemth8y'),
(72, 20, 'colocarc', 'colocarcourier.ca', '', '11/06/2016', '', 'O,z]}+w.a[ge'),
(73, 21, 'comercializadora', 'comercializadorageneral.com', '', '27/10/2016', '', 'b2.]*beo%{Ik'),
(74, 22, 'comutecl', 'COMUTEC.COM.CO', '', '04/03/2016', '', 'kpmkaynh'),
(75, 23, 'conacero', 'CONACEROS.COM', '', '05/06/2016', '', '%eg]hT*6M(&.'),
(76, 24, 'conexioh', 'CONEXIONHOTELES.COM.CO', '', '11/12/2016', '', '[p@H;yl4Nz7'),
(77, 25, 'controve', 'controversiamodelos.com', '', '20/03/2016', '', 'bzsiketz'),
(78, 26, 'csffifbb', 'CSFFIFBB.COM', '', '29/01/2016', '', '@fCoH[u&N[]k'),
(79, 27, 'deportek', 'deporteka.com.co', '', '01/06/2016', '', 'nzsxagix'),
(80, 28, 'diegoper', 'DIEGOPEREZ.COM.CO', '', '08/08/2016', '', 'pigz6nu2ql'),
(81, 29, 'digitalb', 'DIGITALBOOM.CO', '', '03/05/2016', '', 'bro15fo4s2'),
(82, 30, '', '', '', '', '', ''),
(83, 31, 'doctored', 'DOCTOREDUARDOLONDONO.COM', '', '23/04/2016', '', 'peot6utxro'),
(84, 32, 'empaquet', 'EMPAQUETADURASAMERICA.COM', '', '08/10/2016', '', 'mrrajxad'),
(85, 33, 'empaqcom', 'EMPAQUETADURASTAMAYO.COM', '', '27/05/2016', '', 'vcbubzbd'),
(86, 34, 'eocentro', 'EOCENTRO.COM', '', '10/10/2016', '', 'pAl^F0pCapb('),
(87, 35, 'esesanta', 'esesantaisabel.gov.co', '', '20/03/2016', '', 'Ex.nQy)#**m)'),
(88, 36, '', '', '', '', '', ''),
(89, 37, 'expresstiredistr', 'expresstiredistributor.com', '', '16/04/2016', '', 'fz]z}?[5wO]x'),
(90, 38, 'fccargoexpress', 'FCCARGOEXPRESS.COM', '', '17/02/2016', '', '=N!CaRnH@8kH'),
(91, 39, 'floresde', 'FLORESDELACAMPINA.COM', '', '23/01/2016', '', 'qxydujls'),
(92, 40, 'gesincoa', 'GESINCOABOGADOS.COM', '', '07/06/2016', '', 'hrnrsirb'),
(93, 41, 'godivase', 'godivasexshop.com', '', '18/06/2016', '', 'ziurgyab'),
(94, 42, 'grabafer', 'GRABAFER.COM', '', '17/11/2016', '', 'grprint1992lfcb'),
(95, 43, 'iebcom', 'ieb.com.co', '', '28/05/2016', '', '{T%VZC}v=N9?'),
(96, 44, 'igtcompo', 'IGTCOMPONENTES.COM', '', '26/08/2016', '', '6zynim880i'),
(97, 45, 'industri', 'industriasfamec.com', '', '28/05/2016', '', 'famec009'),
(98, 46, 'industr2', 'industriasovelma.com', '', '29/11/2016', '', 'zwobvpqa'),
(99, 47, 'inserco', 'INSER.COM.CO', '', '18/02/2016', '', 'wc$O%NtEFaM('),
(100, 47, 'insermed', 'insermedellin.com', '', '24/09/2016', '', 'fertilidad2013!'),
(101, 48, 'ipmach', 'IPMACH.COM', '', '13/03/2016', '', 'trxDA3oJua'),
(102, 49, 'laborale', 'laborales.com.co', '', '05/10/2016', '', 'fqdnlbcl'),
(103, 50, 'laborato', 'LABORATORIOSOLUNA.COM', '', '17/01/2016', '', 'sethkoyl'),
(104, 51, 'lacasade', 'LACASADESIRIO.COM', '', '28/10/2016', '', 'lacasa009'),
(105, 51, 'lahelice', 'LAHELICEDEESKIL.COM', '', '29/09/2016', '', 'E8.-ISnK,=~0'),
(106, 51, 'laplacad', 'LAPLACADEANU.COM', '', '05/08/2016', '', 'bVHJT)g^d6u0'),
(107, 51, 'raulyepe', 'raulyepes.com', '', '15/11/2016', '', 'n8r5c0mg1c'),
(108, 52, 'laxdeliciasdelaa', 'LASDELICIASDELAABUELAATL.COM', '', '02/09/2016', '', 'X@?4$E!8-?%o'),
(109, 53, 'lcturism', 'lcturismo.com.co', '', '01/02/2016', '', 'hsupifsn'),
(110, 54, 'letstalk', 'LETSTALKSPANISHCA.COM', '', '12/08/2016', '', '^@bb+.hH,eur'),
(111, 55, 'linazasa', 'linazasa.com', '', '20/03/2016', '', 'kybgzvko'),
(169, 56, 'losredim ', 'LOSREDIMIDOS.COM', '', '', '', 'cgisldbd '),
(113, 57, 'maexpres', 'MAEXPRESS.CO', '', '08/02/2016', '', 'lca2yo3e0w'),
(114, 58, 'manufacturasgita', 'MANUFACTURASGITANO.COM', '', '16/03/2016', '', 'iZ{q+EM@?6!s'),
(115, 59, 'marrescom', 'marres.com.co', '', '26/06/2016', '', 'EA#3da(wWJa$'),
(116, 60, 'medicion', 'medicionycontrol.com.co', '', '13/06/2016', '', 'ndzshlpngg'),
(117, 61, 'ncargo', 'ncargo.co', '', '02/04/2016', '', 'vzm8ws2hdk'),
(118, 62, 'novusclip', 'NOVUSCLIP.COM', '', '21/01/2016', '', 'E6H9@=E{AA,r'),
(119, 63, 'nutriser', 'NUTRISERVICIAL.COM', '', '14/09/2016', '', 'icapecgh'),
(120, 64, 'persianasmadridc', 'PERSIANASMADRID.COM.CO', '', '22/02/2016', '', 'w,B==SAiqW#0'),
(121, 65, 'progasurcom', 'progasur.com.co', '', '08/06/2016', '', 'Nm4F{+u.ko6~'),
(122, 66, 'proincol', 'proincol.com.co', '', '27/05/2016', '', '8dnmkickkk'),
(123, 67, 'propides', 'propiedadesypropiedades.com', '', '26/10/2016', '', 'ykktbpch'),
(124, 68, 'rymesolu', 'ryme.com.co', '', '11/12/2016', '', 'p3f2rzmomc'),
(125, 69, 'sellados', 'SELLADOSYCOSTURAS.COM', '', '11/04/2016', '', 's*TBb;D*~~2n'),
(126, 70, 'servindu ', 'servindustria.com.co', '', '04/04/2016', '', 'sx8n36p295 '),
(127, 71, 'sohinco', 'sohinco.com', '', '21/11/2013', '', 'I^F!2SQJLskU'),
(128, 72, 'suminist', 'suministrosalimenticios.com', '', '20/03/2016', '', 'lttfugbq'),
(129, 73, 'imcaltda', 'SYSTELEMATIC.COM', '', '20/03/2016', '', 'yiqhfkac'),
(130, 74, 'tecnicen', 'tecnicentroloscolores.com', '', '30/07/2016', '', 'hhb2gx1tru'),
(131, 75, 'tntexpre', 'TNTEXPRESS.CO', '', '14/05/2016', '', '^HCEGdGASSVc'),
(142, 76, 'translog', 'translogic.com.co', '', '27/05/2016', '', 'qodxqtfx'),
(133, 77, 'tugolenl', 'TUGOLENLARED.COM', '', '07/06/2016', '', '6_@B[ee_%+#v'),
(134, 78, 'viaggitu', 'viaggiturismo.com.co', '', '28/05/2016', '', 'turismo009'),
(135, 79, 'vikingos', 'VIKINGOSRESTAURANT.COM', '', '30/03/2016', '', '7S4fr]R6P('),
(136, 80, 'viveroso ', 'VIVEROSOLROJO.COM', '', '01/06/2016', '', 'ewelhrhd '),
(154, 81, 'valeriaz', 'VALERIAZAPATA.COM', '', '', '', 'zapata009'),
(153, 81, 'webevolu', 'webevolution.com.co', '', '', '', 'zxjbvlzb'),
(167, 82, 'asesoriayconsultorias.com', 'asesoriayconsultorias.com/cpanel asesoriayconsult', '', '', '', '.(=9sTElH69Z'),
(145, 83, 'knownhost', 'http://genesisingenierias.com', '', '', '', '(y%wOol_5U~x'),
(147, 84, 'knownhost', 'wearepaulownia.com', '', '', '', '9fsONIqF[MwI'),
(148, 85, 'knownhost', 'http://domainmobiliaria.com/', '', '', '', 'gm)Ou!wWXmD{'),
(155, 86, 'Besimja', 'besimja.com', '', '2016-01-20', 'besimja', ')[5xF+JZT@c_'),
(160, 87, 'knownhost', 'csff-ifbb.com', '', '2016-01-25', '123456', '123456'),
(161, 88, 'LAMBDA INGENIERIA', 'lambdaingenieria.com', '', '2016-01-29', '123456', '123456'),
(166, 89, '', '', '', '', '', ''),
(163, 90, '', '', '', '', '', ''),
(165, 91, '', '', '', '', '', ''),
(168, 92, '', '', '', '', '', ''),
(170, 93, 'sistemadegestion.co', '', '', '', '', ''),
(171, 94, 'sistemaocer.com', 'sistemaocer.com', '', '', '', ''),
(172, 95, 'jssuministros.com', '', '', '', '', ''),
(173, 96, '', '', '', '', '', ''),
(174, 97, 'x-fitsports', 'x-fitsports.com', '', '2016-04-19', 'x-fitsports.com', 'x-fitsports.com'),
(175, 98, '', '', '', '', '', ''),
(176, 99, 'tchparts.com', 'tchparts.com', '', '2016-06-03', 'tchparts', 'p%0Flyk$r*V3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Impuestos`
--

CREATE TABLE IF NOT EXISTS `Impuestos` (
  `Id` int(11) NOT NULL auto_increment,
  `Iva` double NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informacion`
--

CREATE TABLE IF NOT EXISTS `Informacion` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Identificacion` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pais` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Urlseguimiento` longtext NOT NULL,
  `PieFactura` text NOT NULL,
  `Banco` varchar(255) NOT NULL,
  `Tipocuenta` varchar(255) NOT NULL,
  `Nrocuenta` varchar(255) NOT NULL,
  `Nombrecuenta` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Casillero` text NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Informacion`
--

INSERT INTO `Informacion` (`Id`, `Nombre`, `Identificacion`, `Email`, `Pais`, `Ciudad`, `Dir`, `Codigo`, `Telefono`, `Celular`, `Logo`, `Url`, `Urlseguimiento`, `PieFactura`, `Banco`, `Tipocuenta`, `Nrocuenta`, `Nombrecuenta`, `Nit`, `Casillero`) VALUES
(1, 'WEB EVOLUTION', '', 'info@webevolution.com.co', 'COLOMBIA', 'MEDELLÍN,', 'GBHH', '', 'GT20', '21023', '1.jpg', '', 'www.webevolution.com.co', 'Esta factura de venta es un titulo valor, ley 1231 de 2008 y se asimila en todos sus efectos a una letra de cambio según el articulo 774 del código de comercio.\r\n\r\nCalle 48C No. 66 - 07 Oficina 203 / Telefax: 596 55 87 / Medellín - Antioquia \r\nCelular: 301 724 72 56 / Web: www.webevolution.com.co / Email: info@webevolution.com.co', '', '', '', '', '62102', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Interes`
--

CREATE TABLE IF NOT EXISTS `Interes` (
  `Id` int(11) NOT NULL auto_increment,
  `Texto1` longtext NOT NULL,
  `Texto2` longtext NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `Id` int(11) NOT NULL auto_increment,
  `Usuario` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=314 ;

--
-- Volcado de datos para la tabla `Login`
--

INSERT INTO `Login` (`Id`, `Usuario`, `Fecha`) VALUES
(77, '1', '2015-09-11 13:26:32'),
(78, '1', '2015-09-14 09:00:17'),
(79, '1', '2015-09-21 09:53:48'),
(80, '1', '2015-09-22 09:25:56'),
(81, '3', '2015-09-22 13:58:38'),
(82, '1', '2015-09-22 13:59:01'),
(83, '1', '2015-09-23 09:00:35'),
(84, '1', '2015-09-24 09:10:45'),
(85, '1', '2015-09-30 12:46:38'),
(86, '1', '2015-10-01 09:07:02'),
(87, '1', '2015-10-02 08:57:46'),
(88, '1', '2015-10-05 09:03:25'),
(89, '1', '2015-10-06 09:01:15'),
(90, '1', '2015-10-06 15:04:08'),
(91, '1', '2015-10-07 09:24:01'),
(92, '1', '2015-10-08 09:07:13'),
(93, '1', '2015-10-09 09:06:58'),
(94, '1', '2015-10-09 09:25:54'),
(95, '1', '2015-10-11 10:41:15'),
(96, '1', '2015-10-13 09:12:13'),
(97, '1', '2015-10-14 09:11:16'),
(98, '1', '2015-10-15 09:23:46'),
(99, '1', '2015-10-30 12:29:40'),
(100, '1', '2015-11-06 09:09:45'),
(101, '1', '2015-11-06 09:21:04'),
(102, '1', '2015-11-06 09:36:08'),
(103, '3', '2015-11-06 09:58:15'),
(104, '3', '2015-11-06 11:05:58'),
(105, '1', '2015-11-06 14:32:12'),
(106, '1', '2015-11-06 15:04:23'),
(107, '1', '2015-11-06 15:52:26'),
(108, '1', '2015-11-09 09:19:37'),
(109, '1', '2015-11-09 09:23:33'),
(110, '3', '2015-11-09 09:54:14'),
(111, '1', '2015-11-16 14:43:04'),
(112, '1', '2015-11-25 12:25:59'),
(113, '1', '2015-11-25 13:09:40'),
(114, '1', '2016-01-06 17:01:11'),
(115, '1', '2016-01-11 19:03:44'),
(116, '1', '2016-01-13 08:35:50'),
(117, '1', '2016-01-13 09:23:54'),
(118, '1', '2016-01-14 07:38:36'),
(119, '1', '2016-01-14 08:54:39'),
(120, '1', '2016-01-15 09:01:28'),
(121, '1', '2016-01-15 09:04:28'),
(122, '3', '2016-01-15 11:48:31'),
(123, '3', '2016-01-15 12:18:44'),
(124, '4', '2016-01-15 12:30:16'),
(125, '4', '2016-01-15 12:43:57'),
(126, '1', '2016-01-15 18:42:51'),
(127, '1', '2016-01-15 19:07:39'),
(128, '1', '2016-01-18 07:58:55'),
(129, '1', '2016-01-18 09:48:15'),
(130, '4', '2016-01-18 10:06:35'),
(131, '1', '2016-01-18 13:37:23'),
(132, '1', '2016-01-18 15:15:02'),
(133, '4', '2016-01-19 10:11:54'),
(134, '1', '2016-01-19 11:00:18'),
(135, '4', '2016-01-19 13:25:06'),
(136, '4', '2016-01-20 10:19:05'),
(137, '1', '2016-01-20 13:42:50'),
(138, '1', '2016-01-20 16:10:07'),
(139, '1', '2016-01-21 09:53:28'),
(140, '4', '2016-01-21 16:30:17'),
(141, '1', '2016-01-23 08:49:40'),
(142, '1', '2016-01-23 10:48:29'),
(143, '1', '2016-01-25 07:58:48'),
(144, '1', '2016-01-25 09:10:13'),
(145, '4', '2016-01-25 10:11:45'),
(146, '1', '2016-01-25 11:16:17'),
(147, '1', '2016-01-26 09:03:02'),
(148, '4', '2016-01-26 13:44:57'),
(149, '1', '2016-01-27 07:48:20'),
(150, '4', '2016-01-27 11:36:10'),
(151, '1', '2016-01-27 13:47:17'),
(152, '1', '2016-01-29 09:26:14'),
(153, '4', '2016-01-29 10:08:07'),
(154, '1', '2016-01-29 10:39:30'),
(155, '1', '2016-01-29 10:49:06'),
(156, '4', '2016-01-29 13:37:45'),
(157, '1', '2016-01-30 08:42:28'),
(158, '4', '2016-02-01 10:00:28'),
(159, '1', '2016-02-02 08:17:07'),
(160, '4', '2016-02-02 10:12:40'),
(161, '1', '2016-02-02 15:40:08'),
(162, '4', '2016-02-03 10:01:48'),
(163, '1', '2016-02-03 12:20:24'),
(164, '1', '2016-02-03 14:24:12'),
(165, '1', '2016-02-03 15:35:49'),
(166, '1', '2016-02-04 09:00:29'),
(167, '4', '2016-02-04 10:04:48'),
(168, '4', '2016-02-04 10:04:49'),
(169, '1', '2016-02-04 13:13:26'),
(170, '1', '2016-02-05 09:13:53'),
(171, '4', '2016-02-05 10:00:16'),
(172, '1', '2016-02-08 09:58:31'),
(173, '4', '2016-02-08 10:17:56'),
(174, '1', '2016-02-08 10:28:06'),
(175, '1', '2016-02-09 08:57:56'),
(176, '4', '2016-02-09 09:58:04'),
(177, '4', '2016-02-09 17:56:34'),
(178, '1', '2016-02-10 09:57:50'),
(179, '1', '2016-02-10 10:01:29'),
(180, '1', '2016-02-10 10:13:12'),
(181, '4', '2016-02-10 10:26:18'),
(182, '1', '2016-02-10 12:30:47'),
(183, '1', '2016-02-10 15:44:59'),
(184, '4', '2016-02-11 09:33:22'),
(185, '1', '2016-02-11 10:44:01'),
(186, '1', '2016-02-12 11:36:56'),
(187, '1', '2016-02-12 12:51:09'),
(188, '4', '2016-02-12 14:19:40'),
(189, '1', '2016-02-13 08:57:59'),
(190, '4', '2016-02-15 09:52:56'),
(191, '1', '2016-02-16 08:17:34'),
(192, '4', '2016-02-16 09:55:19'),
(193, '1', '2016-02-17 09:19:22'),
(194, '1', '2016-02-17 09:20:36'),
(195, '1', '2016-02-17 09:32:56'),
(196, '4', '2016-02-17 12:18:07'),
(197, '1', '2016-02-18 08:51:45'),
(198, '4', '2016-02-19 10:19:26'),
(199, '1', '2016-02-20 10:52:30'),
(200, '1', '2016-02-20 19:11:52'),
(201, '1', '2016-02-22 08:39:30'),
(202, '4', '2016-02-22 10:26:12'),
(203, '1', '2016-02-23 09:01:01'),
(204, '4', '2016-02-23 11:20:48'),
(205, '4', '2016-02-24 11:52:57'),
(206, '4', '2016-02-25 09:41:06'),
(207, '1', '2016-02-25 14:53:17'),
(208, '4', '2016-02-26 10:11:57'),
(209, '1', '2016-02-26 10:25:37'),
(210, '4', '2016-02-26 17:02:32'),
(211, '1', '2016-02-27 09:58:47'),
(212, '4', '2016-02-29 10:05:35'),
(213, '1', '2016-03-02 08:55:09'),
(214, '4', '2016-03-02 10:18:25'),
(215, '4', '2016-03-03 15:24:15'),
(216, '1', '2016-03-03 20:49:18'),
(217, '1', '2016-03-04 18:35:44'),
(218, '1', '2016-03-05 09:06:52'),
(219, '1', '2016-03-07 08:34:34'),
(220, '4', '2016-03-07 10:02:08'),
(221, '1', '2016-03-07 15:51:00'),
(222, '1', '2016-03-07 19:00:10'),
(223, '1', '2016-03-08 13:32:41'),
(224, '4', '2016-03-08 15:17:59'),
(225, '1', '2016-03-09 16:08:23'),
(226, '1', '2016-03-10 08:01:16'),
(227, '1', '2016-03-10 08:34:42'),
(228, '4', '2016-03-14 10:13:43'),
(229, '4', '2016-03-14 13:33:23'),
(230, '1', '2016-03-14 13:46:59'),
(231, '1', '2016-03-14 16:16:15'),
(232, '1', '2016-03-17 11:06:00'),
(233, '1', '2016-03-19 09:53:08'),
(234, '1', '2016-03-21 17:34:08'),
(235, '1', '2016-03-22 09:04:12'),
(236, '4', '2016-03-22 10:31:51'),
(237, '4', '2016-03-22 17:34:12'),
(238, '4', '2016-03-23 10:25:57'),
(239, '1', '2016-03-28 08:53:06'),
(240, '4', '2016-03-28 11:32:12'),
(241, '4', '2016-03-29 10:35:48'),
(242, '1', '2016-04-01 08:17:50'),
(243, '4', '2016-04-01 15:41:22'),
(244, '1', '2016-04-02 11:17:59'),
(245, '4', '2016-04-05 10:15:29'),
(246, '4', '2016-04-05 10:15:30'),
(247, '1', '2016-04-05 12:36:41'),
(248, '1', '2016-04-06 07:38:12'),
(249, '4', '2016-04-06 10:25:49'),
(250, '1', '2016-04-08 13:08:33'),
(251, '1', '2016-04-11 10:28:04'),
(252, '1', '2016-04-12 07:54:12'),
(253, '4', '2016-04-12 10:26:18'),
(254, '1', '2016-04-12 13:29:39'),
(255, '1', '2016-04-13 07:14:08'),
(256, '4', '2016-04-13 10:15:07'),
(257, '1', '2016-04-13 17:55:09'),
(258, '1', '2016-04-15 13:42:55'),
(259, '1', '2016-04-15 13:43:17'),
(260, '1', '2016-04-16 09:51:08'),
(261, '1', '2016-04-16 19:10:12'),
(262, '4', '2016-04-18 10:42:41'),
(263, '1', '2016-04-19 08:50:29'),
(264, '4', '2016-04-19 10:25:25'),
(265, '1', '2016-04-20 08:08:47'),
(266, '1', '2016-04-22 17:26:18'),
(267, '1', '2016-04-23 08:56:32'),
(268, '4', '2016-04-25 14:18:32'),
(269, '1', '2016-04-26 07:39:01'),
(270, '4', '2016-04-26 10:18:29'),
(271, '1', '2016-04-27 07:48:42'),
(272, '4', '2016-04-27 09:55:19'),
(273, '4', '2016-04-27 15:31:08'),
(274, '1', '2016-04-27 18:12:49'),
(275, '4', '2016-04-28 10:26:20'),
(276, '1', '2016-04-28 15:02:49'),
(277, '1', '2016-04-29 10:03:20'),
(278, '4', '2016-04-29 11:29:06'),
(279, '4', '2016-05-02 13:11:15'),
(280, '1', '2016-05-02 17:40:37'),
(281, '4', '2016-05-03 11:25:05'),
(282, '4', '2016-05-04 10:35:58'),
(283, '4', '2016-05-04 10:36:06'),
(284, '1', '2016-05-04 13:02:22'),
(285, '4', '2016-05-05 09:44:47'),
(286, '1', '2016-05-06 09:17:39'),
(287, '1', '2016-05-10 09:24:56'),
(288, '1', '2016-05-10 11:12:26'),
(289, '4', '2016-05-10 11:43:41'),
(290, '1', '2016-05-10 13:21:47'),
(291, '1', '2016-05-11 08:17:35'),
(292, '1', '2016-05-11 08:38:31'),
(293, '4', '2016-05-11 10:25:44'),
(294, '1', '2016-05-13 07:59:29'),
(295, '1', '2016-05-16 08:22:26'),
(296, '1', '2016-05-16 15:19:16'),
(297, '4', '2016-05-16 17:00:26'),
(298, '4', '2016-05-16 17:56:46'),
(299, '4', '2016-05-17 10:04:49'),
(300, '4', '2016-05-23 10:15:52'),
(301, '1', '2016-05-23 13:08:19'),
(302, '1', '2016-05-23 15:41:58'),
(303, '1', '2016-05-28 12:09:44'),
(304, '1', '2016-05-28 12:20:42'),
(305, '4', '2016-05-31 10:02:15'),
(306, '1', '2016-05-31 13:34:23'),
(307, '1', '2016-06-03 13:37:27'),
(308, '1', '2016-06-03 15:09:58'),
(309, '4', '2016-06-08 10:12:14'),
(310, '1', '2016-06-13 14:20:50'),
(311, '1', '2016-06-15 15:50:35'),
(312, '4', '2016-06-15 15:50:52'),
(313, '4', '2016-06-16 09:29:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mensajes`
--

CREATE TABLE IF NOT EXISTS `Mensajes` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Fecha` datetime NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Menu`
--

CREATE TABLE IF NOT EXISTS `Menu` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `Menu`
--

INSERT INTO `Menu` (`Id`, `Nombre`, `Url`, `Pos`) VALUES
(1, 'Inicio', 'zona.php', 1),
(2, 'Maestros', '#', 2),
(3, 'Proyectos', '#', 3),
(4, 'Movimientos', '#', 5),
(5, 'Facturación', '#', 4),
(6, 'Seguimiento', '#', 6),
(7, 'Reportes', '#', 7),
(8, 'Prospectos', '#', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Menuopc`
--

CREATE TABLE IF NOT EXISTS `Menuopc` (
  `Id` int(11) NOT NULL auto_increment,
  `Idmenu` int(11) NOT NULL,
  `Idsub` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `Menuopc`
--

INSERT INTO `Menuopc` (`Id`, `Idmenu`, `Idsub`, `Nombre`, `Url`, `Pos`) VALUES
(1, 2, 2, 'Ingresar', 'add-tipo.php', 1),
(2, 2, 2, 'Actualizar / Eliminar', 'act-tipo.php', 2),
(3, 2, 2, 'Permisos', 'act-permisos.php', 3),
(4, 2, 3, 'Ingresar', 'ing-usuario.php', 1),
(5, 2, 3, 'Actualizar / Eliminar', 'act-usuario.php', 2),
(6, 2, 4, 'Ingresar', 'ing-cliente.php', 1),
(7, 2, 4, 'Actualizar / Eliminar', 'act-cliente.php', 2),
(8, 2, 9, 'Ingresar', 'ing-banco.php', 1),
(9, 2, 9, 'Actualizar / Eliminar', 'act-bancos.php', 2),
(10, 2, 10, 'Ingresar', 'add-cuenta.php', 1),
(11, 2, 10, 'Actualizar / Eliminar', 'act-cuenta.php', 2),
(12, 2, 11, 'Ingresar', 'add-tipocuenta.php', 1),
(13, 2, 11, 'Actualizar / Eliminar', 'act-tipocuenta.php', 2),
(14, 2, 13, 'Ingresar', 'add-retencion.php', 1),
(15, 2, 13, 'Actualizar / Eliminar', 'act-retencion.php', 2),
(16, 2, 14, 'Ingresar', 'add-forma.php', 1),
(17, 2, 14, 'Actualizar / Eliminar', 'act-forma.php\r\n', 2),
(18, 2, 15, 'Ingresar', 'ing-proveedor.php', 1),
(19, 2, 15, 'Actualizar / Eliminar', 'act-proveedor.php', 2),
(20, 4, 7, 'Ingresar', 'add-pagar-expo.php', 1),
(21, 4, 7, 'Actualizar / Eliminar', 'act-pagos.php', 2),
(22, 4, 7, 'Pago a Proveedor', 'pagar.php', 3),
(23, 4, 7, 'Historico egresos', 'abono-pago.php', 4),
(24, 4, 8, 'Recibo de Caja', 'cobrar.php', 1),
(25, 4, 8, 'Histórico ingresos', 'abono-cobro.php', 2),
(26, 4, 7, 'Recurrentes', 'add-pagar-recu.php', 1),
(27, 2, 29, 'Ingresar', 'ing-concepto.php', 1),
(28, 2, 29, 'Actualizar / Eliminar', 'act-conceptos.php', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Menusub`
--

CREATE TABLE IF NOT EXISTS `Menusub` (
  `Id` int(11) NOT NULL auto_increment,
  `Idmenu` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `Menusub`
--

INSERT INTO `Menusub` (`Id`, `Idmenu`, `Nombre`, `Url`, `Pos`) VALUES
(1, 2, 'Información', 'informacion.php', 1),
(2, 2, 'Tipo de usuarios', '#', 2),
(3, 2, 'Usuarios', '#', 3),
(4, 2, 'Clientes', '#', 4),
(5, 3, 'Nuevo Proyecto', 'ing-proyecto.php', 1),
(6, 3, 'Actualizar Proyecto', 'act-proyecto.php', 2),
(7, 4, 'Cuentas por pagar', '#', 1),
(8, 4, 'Cuentas por cobrar', '#', 2),
(9, 2, 'Bancos', '#', 5),
(10, 2, 'Cuentas contables', '#', 6),
(11, 2, 'Tipo de cuentas', '#', 7),
(15, 2, 'Proveedores', '#', 4),
(13, 2, 'Retención', '#', 9),
(14, 2, 'Formas de pago', '#', 8),
(16, 5, 'Crear recibo de caja', 'add-factura.php', 1),
(17, 5, 'Modificar recibo de caja', 'act-factura.php', 2),
(18, 6, 'Ingresar seguimiento', 'ing-seguimiento.php', 1),
(19, 6, 'Actualizar / Eliminar', 'act-seguimiento.php', 2),
(20, 7, 'Por cobrar', 'reporte-cobrar.php', 1),
(21, 7, 'Cobradas', 'reporte-cobrado.php', 2),
(22, 7, 'Por pagar', 'reporte-pagar.php', 3),
(23, 7, 'Pagado', 'reporte-pagado.php', 4),
(24, 5, 'Facturas', 'facturadas.php', 3),
(25, 5, 'Recurrentes', 'add-factura-recu.php', 1),
(26, 8, 'Ingresar', 'ing-prospecto.php', 1),
(27, 8, 'Actualizar / Eliminar', 'act-prospecto.php', 2),
(28, 7, 'Prospectos', 'reporte-prospectos.php', 5),
(29, 2, 'Conceptos', '#', 10),
(30, 3, 'Seguimiento de proyectos', 'seg-proyectos.php', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Movacta`
--

CREATE TABLE IF NOT EXISTS `Movacta` (
  `Id` int(11) NOT NULL auto_increment,
  `Idacta` int(11) NOT NULL,
  `Idobra` int(11) NOT NULL,
  `Idproveedor` int(11) NOT NULL,
  `Cant` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Unidad` varchar(30) NOT NULL,
  `Neto` varchar(50) NOT NULL,
  `Valor` varchar(100) NOT NULL,
  `Iva` varchar(50) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Notificaciones`
--

CREATE TABLE IF NOT EXISTS `Notificaciones` (
  `Id` int(11) NOT NULL auto_increment,
  `Mensaje` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Obras`
--

CREATE TABLE IF NOT EXISTS `Obras` (
  `Id` int(5) unsigned zerofill NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Fechainicio` date NOT NULL,
  `Fechafin` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Valor` double NOT NULL,
  `Utilidad` double NOT NULL,
  `Estado` int(11) NOT NULL,
  `Fechareal` date NOT NULL,
  `Usuariofin` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Permisos`
--

CREATE TABLE IF NOT EXISTS `Permisos` (
  `Id` int(11) NOT NULL auto_increment,
  `Idtipo` int(11) NOT NULL,
  `Men` int(11) NOT NULL,
  `Submenu` int(11) NOT NULL,
  `Opciones` int(11) NOT NULL,
  `Mos` int(11) NOT NULL,
  `Agr` int(11) NOT NULL,
  `Act` int(11) NOT NULL,
  `Del` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2012 ;

--
-- Volcado de datos para la tabla `Permisos`
--

INSERT INTO `Permisos` (`Id`, `Idtipo`, `Men`, `Submenu`, `Opciones`, `Mos`, `Agr`, `Act`, `Del`) VALUES
(1360, 1, 7, 23, 0, 1, 1, 1, 1),
(1359, 1, 7, 22, 0, 1, 1, 1, 1),
(1358, 1, 7, 21, 0, 1, 1, 1, 1),
(1357, 1, 7, 20, 0, 1, 1, 1, 1),
(1356, 1, 7, 0, 0, 1, 0, 0, 0),
(1355, 1, 6, 19, 0, 1, 1, 1, 1),
(1354, 1, 6, 18, 0, 1, 1, 1, 1),
(1353, 1, 6, 0, 0, 1, 0, 0, 0),
(1352, 1, 4, 8, 25, 1, 1, 1, 1),
(1351, 1, 4, 8, 24, 1, 1, 1, 1),
(1350, 1, 4, 8, 0, 1, 0, 0, 0),
(1349, 1, 4, 7, 23, 1, 1, 1, 1),
(1348, 1, 4, 7, 22, 1, 1, 1, 1),
(1347, 1, 4, 7, 21, 1, 1, 1, 1),
(1346, 1, 4, 7, 26, 1, 1, 1, 1),
(1345, 1, 4, 7, 20, 1, 1, 1, 1),
(1344, 1, 4, 7, 0, 1, 0, 0, 0),
(1343, 1, 4, 0, 0, 1, 0, 0, 0),
(1342, 1, 5, 24, 0, 1, 1, 1, 1),
(1341, 1, 5, 17, 0, 1, 1, 1, 1),
(1340, 1, 5, 25, 0, 1, 1, 1, 1),
(1339, 1, 5, 16, 0, 1, 1, 1, 1),
(1338, 1, 5, 0, 0, 1, 0, 0, 0),
(1337, 1, 8, 27, 0, 1, 1, 1, 1),
(1336, 1, 8, 26, 0, 1, 1, 1, 1),
(1335, 1, 8, 0, 0, 1, 0, 0, 0),
(1334, 1, 3, 30, 0, 1, 1, 1, 1),
(1333, 1, 3, 6, 0, 1, 1, 1, 1),
(1332, 1, 3, 5, 0, 1, 1, 1, 1),
(1331, 1, 3, 0, 0, 1, 0, 0, 0),
(1330, 1, 2, 29, 28, 1, 1, 1, 1),
(1329, 1, 2, 29, 27, 1, 1, 1, 1),
(1328, 1, 2, 29, 0, 1, 0, 0, 0),
(1327, 1, 2, 13, 15, 1, 1, 1, 1),
(1326, 1, 2, 13, 14, 1, 1, 1, 1),
(1325, 1, 2, 13, 0, 1, 0, 0, 0),
(1324, 1, 2, 14, 17, 1, 1, 1, 1),
(1323, 1, 2, 14, 16, 1, 1, 1, 1),
(1322, 1, 2, 14, 0, 1, 0, 0, 0),
(1321, 1, 2, 11, 13, 1, 1, 1, 1),
(1320, 1, 2, 11, 12, 1, 1, 1, 1),
(1319, 1, 2, 11, 0, 1, 0, 0, 0),
(1318, 1, 2, 10, 11, 1, 1, 1, 1),
(1317, 1, 2, 10, 10, 1, 1, 1, 1),
(1316, 1, 2, 10, 0, 1, 0, 0, 0),
(1315, 1, 2, 9, 9, 1, 1, 1, 1),
(2011, 3, 7, 28, 0, 0, 0, 0, 0),
(2010, 3, 7, 23, 0, 0, 0, 0, 0),
(2009, 3, 7, 22, 0, 0, 0, 0, 0),
(2008, 3, 7, 21, 0, 0, 0, 0, 0),
(2007, 3, 7, 20, 0, 0, 0, 0, 0),
(2006, 3, 7, 0, 0, 0, 0, 0, 0),
(2005, 3, 6, 19, 0, 0, 0, 0, 0),
(2004, 3, 6, 18, 0, 0, 0, 0, 0),
(2003, 3, 6, 0, 0, 0, 0, 0, 0),
(2002, 3, 4, 8, 25, 0, 0, 0, 0),
(2001, 3, 4, 8, 24, 0, 0, 0, 0),
(2000, 3, 4, 8, 0, 0, 0, 0, 0),
(1999, 3, 4, 7, 23, 0, 0, 0, 0),
(1998, 3, 4, 7, 22, 0, 0, 0, 0),
(1997, 3, 4, 7, 21, 0, 0, 0, 0),
(1996, 3, 4, 7, 26, 0, 0, 0, 0),
(1995, 3, 4, 7, 20, 0, 0, 0, 0),
(1994, 3, 4, 7, 0, 0, 0, 0, 0),
(1993, 3, 4, 0, 0, 0, 0, 0, 0),
(1992, 3, 5, 24, 0, 0, 0, 0, 0),
(1991, 3, 5, 17, 0, 0, 0, 0, 0),
(1990, 3, 5, 25, 0, 0, 0, 0, 0),
(1989, 3, 5, 16, 0, 0, 0, 0, 0),
(1988, 3, 5, 0, 0, 0, 0, 0, 0),
(1987, 3, 8, 27, 0, 0, 0, 0, 0),
(1986, 3, 8, 26, 0, 0, 0, 0, 0),
(1985, 3, 8, 0, 0, 0, 0, 0, 0),
(1984, 3, 3, 30, 0, 1, 0, 1, 0),
(1983, 3, 3, 6, 0, 0, 0, 0, 0),
(1982, 3, 3, 5, 0, 0, 0, 0, 0),
(1981, 3, 3, 0, 0, 1, 0, 0, 0),
(1980, 3, 2, 29, 28, 0, 0, 0, 0),
(1979, 3, 2, 29, 27, 0, 0, 0, 0),
(1978, 3, 2, 29, 0, 0, 0, 0, 0),
(1977, 3, 2, 13, 15, 0, 0, 0, 0),
(1976, 3, 2, 13, 14, 0, 0, 0, 0),
(1975, 3, 2, 13, 0, 0, 0, 0, 0),
(1974, 3, 2, 14, 17, 0, 0, 0, 0),
(1973, 3, 2, 14, 16, 0, 0, 0, 0),
(1972, 3, 2, 14, 0, 0, 0, 0, 0),
(1971, 3, 2, 11, 13, 0, 0, 0, 0),
(1970, 3, 2, 11, 12, 0, 0, 0, 0),
(1969, 3, 2, 11, 0, 0, 0, 0, 0),
(1968, 3, 2, 10, 11, 0, 0, 0, 0),
(1967, 3, 2, 10, 10, 0, 0, 0, 0),
(1966, 3, 2, 10, 0, 0, 0, 0, 0),
(1314, 1, 2, 9, 8, 1, 1, 1, 1),
(1313, 1, 2, 9, 0, 1, 0, 0, 0),
(1312, 1, 2, 15, 19, 1, 1, 1, 1),
(1311, 1, 2, 15, 18, 1, 1, 1, 1),
(1310, 1, 2, 15, 0, 1, 0, 0, 0),
(1309, 1, 2, 4, 7, 1, 1, 1, 1),
(1308, 1, 2, 4, 6, 1, 1, 1, 1),
(1307, 1, 2, 4, 0, 1, 0, 0, 0),
(1306, 1, 2, 3, 5, 1, 1, 1, 1),
(1305, 1, 2, 3, 4, 1, 1, 1, 1),
(1304, 1, 2, 3, 0, 1, 0, 0, 0),
(1303, 1, 2, 2, 3, 1, 1, 1, 1),
(1302, 1, 2, 2, 2, 1, 1, 1, 1),
(1301, 1, 2, 2, 1, 1, 1, 1, 1),
(1300, 1, 2, 2, 0, 1, 0, 0, 0),
(1965, 3, 2, 9, 9, 0, 0, 0, 0),
(1964, 3, 2, 9, 8, 0, 0, 0, 0),
(1963, 3, 2, 9, 0, 0, 0, 0, 0),
(1962, 3, 2, 15, 19, 0, 0, 0, 0),
(1961, 3, 2, 15, 18, 0, 0, 0, 0),
(1960, 3, 2, 15, 0, 0, 0, 0, 0),
(1959, 3, 2, 4, 7, 0, 0, 0, 0),
(1958, 3, 2, 4, 6, 0, 0, 0, 0),
(1957, 3, 2, 4, 0, 0, 0, 0, 0),
(1956, 3, 2, 3, 5, 0, 0, 0, 0),
(1955, 3, 2, 3, 4, 0, 0, 0, 0),
(1954, 3, 2, 3, 0, 0, 0, 0, 0),
(1953, 3, 2, 2, 3, 0, 0, 0, 0),
(1952, 3, 2, 2, 2, 0, 0, 0, 0),
(1951, 3, 2, 2, 1, 0, 0, 0, 0),
(1299, 1, 2, 1, 0, 1, 1, 1, 1),
(1298, 1, 2, 0, 0, 1, 0, 0, 0),
(1297, 1, 1, 0, 0, 1, 1, 1, 1),
(1361, 1, 7, 28, 0, 1, 1, 1, 1),
(1950, 3, 2, 2, 0, 0, 0, 0, 0),
(1949, 3, 2, 1, 0, 0, 0, 0, 0),
(1948, 3, 2, 0, 0, 0, 0, 0, 0),
(1947, 3, 1, 0, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Prospectos`
--

CREATE TABLE IF NOT EXISTS `Prospectos` (
  `Id` int(5) unsigned zerofill NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Fechainicio` date NOT NULL,
  `Fechafin` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Valor` double NOT NULL,
  `Utilidad` double NOT NULL,
  `Estado` int(11) NOT NULL,
  `Fechareal` date NOT NULL,
  `Usuariofin` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Prospectos`
--

INSERT INTO `Prospectos` (`Id`, `Idcliente`, `Nombre`, `Fechainicio`, `Fechafin`, `Descripcion`, `Ubicacion`, `Valor`, `Utilidad`, `Estado`, `Fechareal`, `Usuariofin`, `Muestra`) VALUES
(00001, 7, '', '2015-10-20', '0000-00-00', 'PRUEBA', '', 0, 0, 0, '0000-00-00', '', 1),
(00002, 8, '', '2015-12-05', '0000-00-00', 'PRUEBA PROSPECTO', '', 1480000, 0, 0, '0000-00-00', '', 0),
(00003, 7, '', '2015-11-07', '0000-00-00', 'PRUEBA 2', '', 50000000, 0, 0, '0000-00-00', '', 0),
(00004, 28, '', '2016-03-19', '0000-00-00', 'DISEÑO SITIO WEB', '', 900000, 0, 0, '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Prospectosmov`
--

CREATE TABLE IF NOT EXISTS `Prospectosmov` (
  `Id` int(11) NOT NULL auto_increment,
  `Idfact` int(6) unsigned zerofill NOT NULL,
  `Idobra` int(5) unsigned zerofill NOT NULL,
  `Cant` int(11) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Neto` double NOT NULL,
  `Valor` double NOT NULL,
  `Iva` varchar(150) NOT NULL,
  `ValorCobrado` varchar(200) NOT NULL,
  `ValorReal` varchar(100) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `Prospectosmov`
--

INSERT INTO `Prospectosmov` (`Id`, `Idfact`, `Idobra`, `Cant`, `Descripcion`, `Neto`, `Valor`, `Iva`, `ValorCobrado`, `ValorReal`, `Pos`) VALUES
(1, 000000, 00000, 5, '20', 100000, 500000, '0', '', '', 0),
(2, 000001, 00000, 40, 'MELO', 10000, 400000, '0', '', '', 0),
(17, 000002, 00000, 20, '2000', 2000, 40000, '0', '', '', 0),
(16, 000002, 00000, 20, '20', 22000, 440000, '0', '', '', 0),
(15, 000002, 00000, 10, 'PRUEBA', 100000, 1000000, '0', '', '', 0),
(18, 000003, 00000, 500, 'APENAS ES', 100000, 50000000, '0', '', '', 0),
(19, 000004, 00000, 1, 'DISEÑO SITIO WEB', 900000, 900000, '0', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedores`
--

CREATE TABLE IF NOT EXISTS `Proveedores` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Celcontacto` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Retencion` varchar(20) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `TipoCuenta` varchar(100) NOT NULL,
  `NumeroCuenta` varchar(255) NOT NULL,
  `Titular` varchar(100) NOT NULL,
  `Identificacion` varchar(100) NOT NULL,
  `FormaPago` varchar(100) NOT NULL,
  `Banco` varchar(100) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `Proveedores`
--

INSERT INTO `Proveedores` (`Id`, `Nombre`, `Cedula`, `Ciudad`, `Dir`, `Telefono`, `Celular`, `Contacto`, `Celcontacto`, `Email`, `Retencion`, `Contrasena`, `TipoCuenta`, `NumeroCuenta`, `Titular`, `Identificacion`, `FormaPago`, `Banco`, `Muestra`) VALUES
(4, 'MATEO GUZMÁN', '562001', 'MEDELLIN', '450404401', '3063620', '3122989844', '501050', '3122989844', 'mateo@webevolution.com.co', '0.0', 'zxjbvlzb', 'CONTABLE', '23644608204', 'GBFG', 'GG6026', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(5, 'JUAN FELIPE LARA', '0512106', 'MEDELLIN', 'SANTA ANA', '4518567', '2147483647', 'JUAN FELIPE LARA', '2147483647', 'jlara@webevolution.com.co', '0.0', 'zxjbvlzb', 'AHORROS', '31128142153', 'JUAN FELIPE LARA', '20505', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(6, 'JUAN ALEJANDRO ZAPATA', '71216799', 'MEDELLIN', 'CRA 53 # 25 - 75', '4627846', '3017247256', 'ALEJANDRA LARA', '3014560501', 'info@juanalejandro.com', '0.0', 'cusumbo009', 'AHORROS', '10787041689', 'JUAN ALEJANDRO ZAPATA', '71216799', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(7, 'KNOWNHOST', '54454545454', 'TEXAS', '1379 DILWORTHTOWN CROSSING', '(866) 332-9894', '(866) 332-9894', 'KNOWNHOST', '(866) 332-9894', 'info@knownhost.com', '0.0', '123456', 'CREDITO', '54545445545445', 'KNOWNHOST', '54454545454', 'PAGO EN LINEA PAYPAL', 'PAYPAL', 0),
(8, 'CONSTRUCTORA BRIMARC S.A.S', '9002691238', 'MEDELLIN', 'CALLE 48 # 65 - 10', '2601297', '5844327', 'SARA', '5844327', 'constructorabrimarc@hotmail.com', '0.0', '123456', 'AHORROS', '24585002336', 'CONSTRUCTORA BRIMARC', '9002691238', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(9, 'CLARO', '1078704123', 'MEDELLIN', 'CRA 52 # 25 - 71', '3017247255', '3017247255', 'CLARO', '3017247255', 'info@juanalejandro.com', '0.0', '123456', 'AHORROS', '3017247255', 'CLARO', '3017247255', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(10, 'ARRENDAMIENTOS NUTIBARA', '82449319', 'MEDELLIN', 'CRA 51 # 50 - 21', '5112855', '5112855', 'HUMBERTO EDGAR CORRALES', '5112855', 'info@juanalejandro.com', '0.0', '82449319', 'AHORROS', '82449319', 'HUMBERTO EDGAR CORRALES', '82449319', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(11, 'PABLO GUEVARA', '71216854', 'MEDELLIN', 'URB, PLAZA BONITA', '4216852', '300 4570930', 'PABLO GUEVARA', '300 4570930', 'pablo76@outlook.com', '0.0', '123456', 'AHORROS', '25730201471', 'PABLO GUEVARA', 'pablo76@outlook.com', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(12, 'ALEJANDRA LARA', '43997819', 'MEDELLIN', 'CRA 53 NRO. 25 - 75', '3014560501', '3014560501', 'ALEJANDRA LARA', '43997819', 'laraarcila@gmail.com', '0.0', '123456', 'AHORROS', '51146404735', 'ALEJANDRA LARA', '43997819', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(13, 'WILTON ALVAREZ', '10132670279', 'MEDELLIN', 'CL 27 A # 58 BB 81', '4560009', '315 3216214', 'WILTON ALVAREZ', '315 3216214', 'js.castillo@hotmail.com', '0.0', '123456', 'AHORROS', '10132670279', 'WILTON ALVAREZ', '10132670279', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(14, 'MI COM CO', '900293637 - 2', 'BOGOTA', 'CALLE 93 B 11 A - 84. LC 409', '3792500', '3792500', 'MI COM CO', '3792500', 'info@mi.com.co', '0.0', '123456', 'AHORROS', '123456', 'MI COM CO', '900293637 ', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(15, 'GODADDY', '12121121', 'ATLANTA', 'ESTADOS UNIDOS', '382-6761', '382-6761', 'GODADDY', '382-6761', 'info@godaddy.com', '0.0', '123456', 'CREDITO', '107870416588', 'GODADDY', '12121121', 'PAGO EN LINEA PAYPAL', 'PAYPAL', 0),
(16, 'DIAN', '214522222', 'MEDELLIN', 'DIAN', '3017247256', '3017247256', 'DIAN', '3017247256', 'info@juanalejandro.com', '0.00', '123456', 'AHORROS', '331128142153', 'DIAN', '331128142153', 'EFECTIVO', 'BANCOLOMBIA', 0),
(17, 'COOMEVA', '5445544554', 'MEDELLIN', 'CRA 53 NRO. 25 - 75', '3017247256', '3017247256', 'COOMEVA', '3153327242', 'info@juanalejandro.com', '0.00', '1234567', 'AHORROS', '31124442157', 'COOMEVA', '5445544554', 'EFECTIVO', 'BANCOLOMBIA', 0),
(18, 'JUAN DAVID OSPINA', '712165478', 'MEDELLIN', 'CL 27 A # 58 BB 81', '4518563', '3113816354', 'PIÑA', '3113816354', 'jpuan22@hotmail.com', '0.00', '123456', 'AHORROS', '334428142153', 'PIÑA', '712165478', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(19, 'VEHICULO', '712167995', 'MEDELLIN', 'CR 53 # 25 - 75', '3017247256', '30172472563017247256', 'ALEJANDRA LARA', '3017247256', 'info@juanalejandro.com', '0.00', '123456', 'AHORROS', '3017247256', 'JUAN ALEJANDRO ZAPATA', '71216799', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(20, 'TRANSLOGIC S.A', 'TRANSLOGIC', 'MEDELLIN', 'CLL. 51 NO. 41 – 133 ', '3153327242', '3153327242', 'MARIO ROJAS', '3153327242', 'info@translogic.com.co', '0.00', '123456', 'AHORROS', '31128142153SSS', 'MARIO ROJAS', '31128142153SSS', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(21, 'EMI', '7121679911', 'MEDELLIN', 'CRA 53 NRO. 25 - 75', '3017247256', '3017247256', 'EMI', '3153327242', 'info@juanalejandro.com', '0.00', '123456', 'AHORROS', '31128142153', 'EMI', '7121679911', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(22, 'BANCOLOMBIA', '712167900', 'MEDELLIN', 'CRA 53 NRO. 25 - 75', '3017247256', '3017247256', 'JUAN ALEJANDRO ZAPATA', '3153327242', 'info@juanalejandro.com', '0.00', '33166-2815', 'AHORROS', '712167900', 'JUAN ALEJANDRO ZAPATA', '712167900', 'TRANSFERENCIA', 'BANCOLOMBIA', 0),
(23, 'CORFICOLOMBIANA', '8121678555', 'MEDELLIN', 'CRA 53 NRO. 25 - 75', '8121678555', '8121678555', 'JUAN ALEJANDRO ZAPATA', '8121678555', 'info@juanalejandro.com', '0.00', '33166-2815', 'AHORROS', '8121678555', 'JUAN ZAPATA', '8121678555', 'TRANSFERENCIA', 'BANCOLOMBIA', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proyectoprov`
--

CREATE TABLE IF NOT EXISTS `Proyectoprov` (
  `Id` int(6) NOT NULL auto_increment,
  `Idproyect` int(11) NOT NULL,
  `Proveedor` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Volcado de datos para la tabla `Proyectoprov`
--

INSERT INTO `Proyectoprov` (`Id`, `Idproyect`, `Proveedor`, `Muestra`) VALUES
(5, 20, 4, 0),
(4, 19, 4, 0),
(9, 21, 5, 0),
(8, 21, 4, 0),
(10, 22, 6, 0),
(11, 23, 7, 0),
(12, 24, 5, 0),
(13, 24, 6, 0),
(15, 25, 7, 0),
(16, 26, 6, 0),
(17, 27, 6, 0),
(18, 27, 5, 0),
(19, 28, 5, 0),
(20, 29, 5, 0),
(21, 30, 5, 0),
(22, 30, 7, 0),
(23, 31, 5, 0),
(24, 31, 7, 0),
(45, 34, 4, 0),
(75, 0, 0, 0),
(49, 32, 4, 0),
(31, 33, 5, 0),
(46, 34, 7, 0),
(47, 34, 5, 0),
(50, 35, 6, 0),
(51, 35, 7, 0),
(52, 35, 15, 0),
(53, 36, 4, 0),
(54, 36, 7, 0),
(55, 36, 6, 0),
(56, 36, 15, 0),
(57, 37, 4, 0),
(58, 37, 6, 0),
(59, 38, 6, 0),
(60, 39, 5, 0),
(62, 40, 5, 0),
(67, 41, 6, 0),
(66, 41, 5, 0),
(68, 42, 7, 0),
(69, 42, 5, 0),
(70, 42, 15, 0),
(71, 43, 5, 0),
(72, 43, 6, 0),
(73, 44, 5, 0),
(74, 45, 5, 0),
(76, 46, 7, 0),
(77, 46, 5, 0),
(78, 46, 15, 0),
(79, 47, 7, 0),
(80, 47, 5, 0),
(81, 47, 15, 0),
(82, 48, 5, 0),
(83, 49, 5, 0),
(84, 49, 6, 0),
(85, 50, 5, 0),
(86, 51, 5, 0),
(87, 51, 6, 0),
(88, 51, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proyectos`
--

CREATE TABLE IF NOT EXISTS `Proyectos` (
  `Id` int(5) unsigned zerofill NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Fechainicio` date NOT NULL,
  `Fechafin` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Valor` double NOT NULL,
  `Utilidad` double NOT NULL,
  `Estado` int(11) NOT NULL,
  `Fechareal` date NOT NULL,
  `Usuariofin` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `Proyectos`
--

INSERT INTO `Proyectos` (`Id`, `Idcliente`, `Nombre`, `Fechainicio`, `Fechafin`, `Descripcion`, `Ubicacion`, `Valor`, `Utilidad`, `Estado`, `Fechareal`, `Usuariofin`, `Muestra`) VALUES
(00018, 6, 'ASMECON SYSTEM', '2015-09-14', '2015-10-03', 'SISTEMA PARA ASMECON', 'MEDELLIN', 250000000, 100, 0, '0000-00-00', '', 1),
(00019, 6, 'ASMECON SISTEMA', '2015-09-17', '2015-10-10', 'SISTEMA DE ASMECON', '', 600000, 53, 0, '0000-00-00', '', 1),
(00020, 6, 'PROYECTO', '2015-09-17', '2015-09-26', 'PRUEBA', '', 400000, 51, 0, '0000-00-00', '', 1),
(00021, 7, 'SITIO DE INGENIERIA', '2015-09-15', '2015-10-09', 'PROYECTO FREELANCER', '', 500000, 41, 0, '0000-00-00', '', 1),
(00022, 76, 'EBEL - INVENTARIOS', '2016-01-01', '2016-01-06', 'PROYECTO DE INVENTARIADOS PARA EBEL', '', 1420000, 50, 3, '0000-00-00', '', 0),
(00023, 74, 'RENOVACION HOSTING', '2016-01-04', '2016-01-04', 'RENOVACION DE HOSTING 5GB', '', 185600, 50, 3, '0000-00-00', '', 0),
(00024, 34, 'ADAPTACIONES SITIO WEB - BLOG', '2015-12-28', '2016-01-15', 'CATEGORIZACION DE PRODUCTOS, BOTON OPT IN, PAGOS EN LINEA Y BLOG', '', 0, 50, 3, '0000-00-00', '', 0),
(00025, 48, 'RENOVACION HOSTING IPMACH', '2016-01-08', '2016-01-15', 'RENOVACION HOSTING + DOMINIO', '', 160000, 50, 3, '0000-00-00', '', 0),
(00026, 77, 'VIDEOS YOUTBE', '2015-12-25', '2016-01-22', 'REDISEÑO DEL SITIO CON CANAL DE YOUTUBE', '', 150000, 50, 0, '0000-00-00', '', 0),
(00027, 34, 'OPT IN', '2015-12-23', '2016-01-22', 'BLOG, OPT IN, CATEGORIZACION DE PRODUCTOS', '', 750000, 50, 3, '0000-00-00', '', 0),
(00028, 82, 'DISEÑO SITIO WEB', '2015-12-01', '2016-01-22', 'DISEÑO DE SITIO WEB Y LOGOTIPO', '', 800000, 50, 3, '0000-00-00', '', 0),
(00029, 83, 'DISEÑO SITIO WEB', '2015-11-01', '2016-01-15', 'DISEÑO DE SITIO WEB, HOSTING', '', 1300000, 50, 0, '0000-00-00', '', 0),
(00030, 84, 'DISEÑO SITIO WEB', '2016-01-08', '2016-01-29', 'DISEÑO DE SITIO WEB', '', 700000, 50, 3, '0000-00-00', '', 0),
(00031, 85, 'DISEÑO SITIO WEB', '2015-11-09', '2016-01-22', 'DISEÑO DE SITIO WEB', '', 1200000, 50, 0, '0000-00-00', '', 0),
(00032, 81, 'WEBEVOLUTION SYSTEM', '2016-01-14', '2016-01-31', 'SISTEMA INTERNO', '', 0, 0, 0, '0000-00-00', '', 0),
(00033, 68, 'CAMBIO DIRECCION', '2016-01-15', '2016-01-15', 'CAMBIO DE DIRECCION EN GOOGLE MAPS EN SITIO RYME.', '', 0, 0, 3, '0000-00-00', '', 0),
(00034, 86, 'SITIO WEB', '2016-01-20', '2016-02-21', 'CREACION DE SITIO WEB', '', 0, 0, 0, '0000-00-00', '', 0),
(00035, 8, 'SISTEMA AR PLATAFORMA', '2015-11-01', '2017-01-31', 'DESARROLLO CONTINUO AR PLATAFORMA', '', 2000000, 0, 0, '0000-00-00', '', 0),
(00036, 23, 'SISTEMA CONACEROS', '2015-12-15', '2016-02-29', 'SISTEMA CONACEROS', '', 0, 0, 0, '0000-00-00', '', 0),
(00037, 9, 'SISTEMA DE METROLOGIA', '2015-11-29', '2016-03-31', 'SISTEMA DE METROLOGIA', '', 0, 0, 0, '0000-00-00', '', 0),
(00038, 19, 'APP CONTINENTAL', '2015-12-15', '2016-01-28', 'APP CONTINENTAL', '', 1200000, 20, 3, '0000-00-00', '', 0),
(00039, 15, 'SITIO WEB', '2016-01-01', '2016-01-30', 'SITIO WEB BRIPO', '', 0, 0, 3, '0000-00-00', '', 0),
(00040, 90, 'WEB SANDRA MARTINEZ', '2016-02-10', '2016-02-29', 'CREACION SITIO WEB', '', 750000, 60, 0, '0000-00-00', '', 0),
(00041, 91, 'SITIO WEB', '2016-02-18', '2016-02-29', 'SITIO WEB JUAN PABLO DE SAN FRANCISCO. EL VALOR FUE DE  $550 USD, ANTICIPO DE $660.000 PESOS EL 13 DE JULIO DE 2015', '', 660000, 50, 0, '0000-00-00', '', 0),
(00042, 90, 'IFBB COLOMBIA', '2016-02-26', '2016-03-11', 'SITIO WEB', '', 750000, 0, 0, '0000-00-00', '', 0),
(00043, 92, 'SITIO WEB', '2016-03-11', '2016-03-25', 'SITIO WEB ENERSAFE', '', 1400000, 50, 0, '0000-00-00', '', 0),
(00044, 43, 'SITIO WEB', '2016-03-01', '2016-03-30', 'DESARROLLO SITIO WEB IEB', '', 2400000, 50, 0, '0000-00-00', '', 0),
(00045, 19, 'MODIFICACIONES CC EXPRESS', '2016-03-15', '2016-03-25', 'MODIFICACIONES SITIO WEB CC EXPRESS', '', 100000, 50, 0, '0000-00-00', '', 0),
(00046, 96, 'SITIO WEB', '2016-04-19', '2016-05-07', 'DESARROLLO DE SITIO WEB', '', 900000, 0, 0, '0000-00-00', '', 0),
(00047, 97, 'DISEÑO SITIO WEB', '2016-04-19', '2016-05-06', 'DESARROLLO SITIO WEB Y LOGO', '', 90000, 50, 0, '0000-00-00', '', 0),
(00048, 38, 'MODIFICACIONES WEB', '2016-04-25', '2016-04-26', 'MODIFICACIONES EN EL SITIO WEB', '', 200000, 50, 3, '0000-00-00', '', 0),
(00049, 98, 'DISEÑO SITIO WEB', '2016-04-29', '2016-05-27', 'DISEÑO DE SITIO WEB', '', 1400000, 50, 0, '0000-00-00', '', 0),
(00050, 52, 'NUEVA SEDE', '2016-04-27', '2016-04-27', 'CAMBIOS EN EL SITIO WEB', '', 0, 0, 0, '0000-00-00', '', 0),
(00051, 99, 'SITIO WEB Y SISTEMA', '2016-06-03', '2016-07-07', 'SISTEMA BASADO EN IPMACH', '', 0, 0, 0, '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Retenciones`
--

CREATE TABLE IF NOT EXISTS `Retenciones` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  `Valor` varchar(100) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `Retenciones`
--

INSERT INTO `Retenciones` (`Id`, `Nombre`, `Valor`, `Muestra`) VALUES
(7, '20%', '0.020', 0),
(8, '0%', '0.00', 0),
(9, '6 %', '0.06', 0),
(10, 'J', '', 1),
(11, '4%', '0.04', 0),
(12, '10%', '0.10', 0),
(13, '2.5%', '0.025', 0),
(14, '3.5%', '0.035', 0),
(15, '1.5%', '0.015', 0),
(16, '0.1%', '0.01', 1),
(17, '1%', '0.01', 0),
(18, '7%', '0.07', 0),
(19, '11%', '0.011', 0),
(20, '2%', '0.02', 0),
(21, '3%', '0.03', 0),
(22, '4.5%', '0.045', 0),
(23, '5%', '0.05', 0),
(24, '5.5%', '0.055', 0),
(25, '7.5 %', '0.075', 0),
(26, '8%', '0.08', 0),
(27, '8.5%', '0.085', 0),
(28, '9%', '0.09', 0),
(29, '9.5%', '0.095', 0),
(30, '10%', '0.010', 1),
(31, '10.5%', '0.105', 0),
(32, '11%', '0.11', 0),
(33, '11.5%', '0.115', 0),
(34, '12%', '0.12', 0),
(35, '12.5%', '0.125', 0),
(36, '13%', '0.13', 0),
(37, '13.5%', '0.135', 0),
(38, '14%', '0.14', 0),
(39, '14.5%', '0.145', 0),
(40, '15%', '0.15', 0),
(41, '14.3%', '0.143', 0),
(42, '15.5%', '0.155', 0),
(43, '16%', '0.16', 0),
(44, '16.5%', '0.165', 0),
(45, '17%', '0.17', 0),
(46, '17.5%', '0.175', 0),
(47, '18%', '0.18', 0),
(48, '17.2%', '0.172', 0),
(49, '17.3%', '0.173', 0),
(50, '17.4%', '0.174', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SalasChat`
--

CREATE TABLE IF NOT EXISTS `SalasChat` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` text NOT NULL,
  `Clave` varchar(255) NOT NULL,
  `Privada` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `SalasChat`
--

INSERT INTO `SalasChat` (`Id`, `Nombre`, `Descripcion`, `Clave`, `Privada`, `Muestra`) VALUES
(1, 'Teo_WebEvolution123456', 'Prueba', '123456', 1, 0),
(2, 'Test_WebEvolutionhhhhhh', 'Prueba', 'hhhhhh', 1, 0),
(3, 'Bien_WebEvolution15:28:43', 'prueba', '852585', 1, 0),
(4, 'Ensayo_WebEvolution', 'Ensayando', '', 0, 0),
(5, 'Ensayo_WebEvolution', 'Ensayando', '', 1, 0),
(6, 'Ready_WebEvolution153156', 'let''s go', '852585', 1, 0),
(7, 'jAJA_WebEvolution153344', 'Jaja', '563214', 1, 0),
(8, 'Jsaja_WebEvolution153502', '4104', '123456', 1, 0),
(9, 'RRR_WebEvolution155419', 'RRR', 'RRRRRR', 1, 0),
(10, 'KK_WebEvolution161753', 'TEST', '951236', 1, 0),
(11, 'Prueba_WebEvolution100118', '123456', '123456', 1, 0),
(12, 'Testing_WebEvolution121911', 'test', '951159', 1, 0),
(13, 'nUIEVO_WebEvolution155054', 'Nuevo', '123456', 1, 0),
(14, 'prueba_WebEvolution103545', 'prueba', '123456', 1, 0),
(15, 'prueba_WebEvolution103546', 'prueba', '123456', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seguimiento`
--

CREATE TABLE IF NOT EXISTS `Seguimiento` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Detalles` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Seguimiento`
--

INSERT INTO `Seguimiento` (`Id`, `Idcliente`, `Fecha`, `Detalles`, `Archivo`, `Muestra`) VALUES
(1, 7, '2015-09-17', 'SEGUIMIENTO PROYECTO', '1.php', 1),
(2, 6, '2015-10-10', 'EDITANDO SEGUIMIENTO', '2.php', 1),
(3, 6, '2015-09-23', 'TERMINAMOS SISTEMA', '3.php', 0),
(4, 8, '2015-10-01', 'PRUEBA', '4.php', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seg_proyecto`
--

CREATE TABLE IF NOT EXISTS `Seg_proyecto` (
  `Id` int(11) NOT NULL auto_increment,
  `Idproyecto` int(11) NOT NULL,
  `Inicio` date NOT NULL,
  `Fin` date NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Nota` text NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Proveedor` int(11) NOT NULL,
  `Estado` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Volcado de datos para la tabla `Seg_proyecto`
--

INSERT INTO `Seg_proyecto` (`Id`, `Idproyecto`, `Inicio`, `Fin`, `Titulo`, `Nota`, `Archivo`, `Proveedor`, `Estado`, `Muestra`) VALUES
(1, 32, '2016-01-13', '2016-01-16', 'SEGUIMIENTO CAMBIO', 'CAMBIO TODO', '1.php', 4, 1, 0),
(3, 32, '2016-01-10', '2016-01-16', 'TERMINÉ LA PARTE DE SEGUIMIENTO', 'SE TERMINÓ LA PARTE DEL SEGUIMIENTO DEL SISTEMA DE WEB CON ÉXITO.', '', 4, 1, 0),
(2, 32, '2016-01-13', '2016-01-14', 'LISTO EL SEGUIMIENTO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tellus leo, semper a metus sed, porta hendrerit est. Aenean in tristique risus. Donec tempor dignissim pulvinar. Praesent ut vehicula mauris. Quisque posuere ante ex, vel feugiat lacus vulputate at. Duis lorem augue, auctor eu orci sed, fermentum eleifend purus. Quisque nec ipsum neque. Vestibulum vitae efficitur tortor. Duis porta accumsan nulla, vel maximus arcu. Nunc nec viverra mi..', '2.html', 4, 1, 0),
(4, 31, '2016-01-15', '2016-01-19', 'RANGOS BUSCADOR', 'AGREGAR EN BUSCADORES: PRECIO MÍNIMO DE $200.000.000 Y MÁXIMO DE 10.000.000', '', 5, 1, 0),
(5, 31, '2016-01-15', '2016-01-19', 'CELULAR', 'AGREGAR CELULAR 3206977900', '', 5, 1, 0),
(6, 31, '2016-01-15', '2016-01-19', 'CAMBIO DIRECCION', 'OIFICNA ES 1352, ESTA 1325', '', 5, 1, 0),
(7, 31, '2016-01-15', '2016-01-19', 'NOMBRE INMUEBLES', 'A LAS PROPIEDADES QUITAR EL NOMBRE DEL INMUEBLE. EJ. EDIFICIO SAUZALITO.', '', 5, 1, 0),
(8, 31, '2016-01-01', '2016-01-02', 'CODIGO DEL INMUEBLE', 'AGREGAR CAMPO PARA CODIGO DEL INMUEBLE', '', 5, 1, 0),
(9, 31, '2016-01-15', '2016-01-19', 'BUSCADOR', 'UBICACION: MEDELLIN, SABANETA, ENVIGADO Y LOCALIZACIÓN CAMBIAR POR SECTOR. EJ: EL CAMPESTRE, LAS PALMAS, ETC', '', 5, 1, 0),
(10, 31, '2016-01-15', '2016-01-19', 'BUSCADOR CAMPOS', 'QUITAR OPCION DE ESTADO YA QUE SOLO USAN VENTA, EN TIPO AGREGAR BODEGA.', '', 5, 1, 0),
(11, 31, '2016-01-15', '2016-01-19', 'RESULTADOS DE BUSQUEDA', 'QUITAR BUSCADOR INTERNO, QUITAR ORDENAR POR PRECIO, Y PONER BOTON DE REALIZAR NUEVA BUSQUEDA DONDE APARECERIA EL BUSCADOR.', '', 5, 1, 0),
(12, 31, '2016-01-15', '2016-01-19', 'ICONOS PROPIEDADES', 'EN LOS ICONOS DE PROPIEDAD ORDENAR ASI: AREA - HABITACIONES, BAÑOS, GARAJE.\r\nSI LA PROPIEDAD ES BODEGA O LOCAL O OFICINA, NO MOSTRAR BAÑOS, NI HABITACIONES. QUITAR ICONO DE PISCINA.', '', 5, 1, 0),
(13, 31, '2016-01-15', '2016-01-19', 'CANTIDAD DE INMUEBLES', 'REVISAR QUE SI COINCIDA LA CANTIDAD DE INMUEBLES EN EL SITIO WEB CON LOS SUMINISTRADOS.', '', 5, 1, 0),
(14, 31, '2016-01-15', '2016-01-19', 'COMODIDADES INMUEBLES', 'AL AMPLIAR CADA INMUEBLE QUITAR COMODIDADES Y PONES SOLO DESCRIPCIÓN.  EN DESCRIPCION SOLO PONER EL TEXTO SUMINISTRADO Y NO LAS OPCIONES CHULEADAS DE PISCINA, GARAGE, ETC.', '', 5, 1, 0),
(15, 31, '2016-01-15', '2016-01-19', 'BOTON FORMULARIOS', 'EL BOTON DE ENVIAR FORMULARIOS DENTRO DE CADA INMUEBLE ESTA MOCHO.', '', 5, 1, 0),
(16, 31, '2016-01-15', '2016-01-19', 'FORMULARIO INMUEBLES', 'EN EL FORMULARIO DE INMUEBLES VERIFICAR EL LOGO QUE APARECE, PONERLO UN POCO MAS GRANDE Y TRATAR DE QUE QUEDE EN FONDO BLANCO.', '', 5, 1, 0),
(17, 31, '2016-01-15', '2016-01-19', 'CONSIGNE SU INMUEBLE', 'CAMBIAR FOTO QUE APARECE Y PONER UNA QUE SEA MAS GENÉRICA, O COLLAGE DE CASA, APTO, BODEGA, ETC.\r\n\r\nAGREGAR EN EL FORMULARIO, LAS OPCIONES QUE FALTAN COMO BODEGA, FINCA, Y DEJAR LA PALABRA LOTE, SIN CASA LOTE.\r\n\r\nTAMBIEN EN EL TEXTO QUITAR LO QUE DICE VENDER O ARRENDAR Y DEJAR SOLO VENDER.\r\n\r\nDONDE DICE: PROMOCIÓN DE SU INMUEBLE A TRAVÉS DE NUESTRA RED DE 9 INMOBILIARIAS ALIADAS, QUITAR EL 9.\r\n\r\nDONDE DICE: PUBLICACIÓN DE SU INMUEBLE EN WWW.DOMAINMOBILIARIA.COM Y NUESTRAS REDES SOCIALES Y EL PORTAL DE LA UNIÓN INMOBILIARIA DE COLOMBIA ENTRE OTROS. QUITAR ESO DE Y EL PORTAL DE LA UNIÓN INMOBILIARIA DE COLOMBIA.', '', 5, 1, 0),
(18, 31, '2016-01-15', '2016-01-19', 'BARRA LATERAL', 'AL AMPLIAR UN INMUEBLE EN LA BARRA LATERAL APARECE CONSIGNE UN INMUEBLE Y ABAJO EL BUSCADOR. PONER TAMBIEN TITULO DE BUSCAR UN INMUEBLE PARA QUE NO SE CONFUNDA QUE HACE PARTE DE CONSIGNAR INMUEBLE.', '', 5, 1, 0),
(19, 31, '2016-01-15', '2016-01-19', 'TIENES PREGUNTAS', 'EN EL ICONO ? QUE APARECE EN EL LATERAL DERECHO, AGREGAR EL NUEVO CELULAR TAMBIEN Y CAMBIAR LA FOTO POR UNA QUE NO SEA TAN DE OFICINA.', '', 5, 1, 0),
(20, 31, '2016-01-15', '2016-01-19', 'REDES SOCIALES', 'SOLO MANEJAR FACEBOOK E INSTAGRAM. REVISAR QUE NO APAREZCAN TODOS LOS ICONOS EN EL FOOTER.', '', 5, 1, 0),
(21, 31, '2016-01-15', '2016-01-19', 'BUSCADOR LATERAL', 'REALIZAR TODOS LOS CAMBIOS IGUAL QUE EN EL PRINCIPAL Y QUITAR ABREVIATURA EN HABITACIONES.', '', 5, 1, 0),
(22, 31, '2016-01-15', '2016-01-19', 'CONTACTO', 'CAMBIAR EL CORREO EN TODAS PARTES SIEMPRE POR INFO. \r\n\r\nAGREGAR EL NUEVO CELULAR.\r\n\r\nEN EL MAPA NO APARECE EL PUNTO DE DONDE ESTAN UBICADOS.\r\n\r\nHOY QUEREMOS HACER MÁS ALIANZAS COMO GRUPOS COMO USTEDES.  QUITAR ESE TEXTO.\r\n\r\nCAMBIAR LA FOTO QUE APARECE.', '', 5, 1, 0),
(23, 31, '2016-01-15', '2016-01-18', 'VERSION INGLES', 'AGREGAR PLUGIN DE VERSION EN INGLES', '', 5, 1, 0),
(24, 33, '2016-01-15', '2016-01-15', 'CAMBIO EN MAPA', 'CAMBIO EN DIRECCION MAPA RYME.\r\nHTTP://RYME.COM.CO/ADMON/ USUARIO: RYME - CLAVE: 123456\r\n\r\nDIAGONAL 80A #45-116, MEDELLÍN.', '', 5, 1, 0),
(25, 32, '2016-01-13', '2016-01-14', 'TERMINÉ CON LA PARTE DE PROVEEDORES', 'ESTÁ LISTA LA PARTE DE PROVEEDORES, "PRUEBA"', '', 4, 1, 0),
(26, 33, '2016-01-15', '2016-01-15', 'MAPA ACTUALIZADO', '<IFRAME SRC="HTTPS://WWW.GOOGLE.COM/MAPS/EMBED?PB=!1M18!1M12!1M3!1D3966.075870586294!2D-75.6028172846522!3D6.253734427974152!2M3!1F0!2F0!3F0!3M2!1I1024!2I768!4F13.1!3M3!1M2!1S0X8E442974647A7A17%3A0XCF86D2FC47E34347!2SDG.+80A+%2345-116%2C+MEDELL%C3%ADN%2C+ANTIOQUIA!5E0!3M2!1SEN!2SCO!4V1452887332784" WIDTH="600" HEIGHT="450" FRAMEBORDER="0" STYLE="BORDER:0" ALLOWFULLSCREEN></IFRAME>', '', 5, 1, 0),
(27, 29, '2016-01-18', '2016-01-19', 'CARGAR SITIO WEB Y CONFIGURACION', 'LINK:\r\nHTTP://CP.ENTERDEV.COM.CO/PSOFT/SERVLET/PSOFT.HSPHERE.CP \r\n\r\nUSUARIO: GENESISINGENIERIAS\r\n\r\nXXX: FORESTAL', '', 5, 1, 0),
(28, 34, '2016-01-20', '2016-01-21', 'LOGOTIPO', 'CREAR LOGOTIPO, SOLO FUENTE, O CON ALGUN SIMBOLO DE ISRAEL COMO LA MENORA O SILUETA DE ALGUIEN REZANDO.', '', 5, 2, 0),
(29, 34, '2016-01-21', '2016-01-25', 'PROPUESTAS GRAFICAS', 'PROPUESTA GRAFICA, FULL SCREEN, HTTP://THEMEFOREST.NET/ITEM/ALAMAK-RESPONSIVE-ONE-PAGE-PORTFOLIO/6366889?S_PHRASE=&S_RANK=899\r\n\r\nADJUNTO EL TEMPLATE.\r\n\r\nREVISAR QUE NO FUNCIONA AL ABRIR CADA ITEM COMO EN LA PROPUESTA ORIGINAL.\r\n\r\n', '29.zip', 5, 2, 0),
(30, 30, '2016-01-21', '2016-01-22', 'MONTAJE PROPUESTA', 'SE APROBO LA PROPUESTA 1. CAMBIEMOS LAS IMÁGENES DEL CULTIVO Y LA DE LA PENCA  DEJAMOS LAS DE LAS FLORES Y LA DEL ALOE VERA PARTIDO,\r\n\r\nMONTAR DE LOS LOGOS ENVIADOS EL QUE MEJOR SE VEA.\r\n\r\nCREAR EN EL MENU OPCION DE MULTIMEDIA: VIDEOS E IMAGENES.\r\n', '', 5, 2, 0),
(31, 32, '2016-01-25', '2016-01-25', 'CUENTAS POR PAGAR', 'HAY UN PROBLEMA EN CUENTAS POR PAGAR. SI LA CUENTA A PAGAR ES DE 100.000 + IVA DEL 16% EL TOTAL A COBRAR ES DE 116.000. SI EL CLIENTE AL REALIZAR EL PAGO REALIZA UNA RETENCION DEL 10% ENTONCES REALMENTE PAGA 106.000. EN EL MOMENTO DE REALIZAR EL ABONO SE INGRESAN LOS 106.000 QUE ES LO QUE REALMENTE PAGO. PERO EL SISTEMA DEBE SUMARLE A ESE PAGO LA RETENCION SELECCIONADA YA QUE SINO QUEDA SIEMPRE CON UN SALDO PENDIENTE POR PAGAR.', '', 4, 1, 0),
(32, 32, '2016-01-25', '2016-01-25', 'REPORTES', 'EN CUENTAS POR PAGAR Y COBRAR, NO MUESTRA TODO LO PENDIENTE POR PAGAR NI POR COBRAR, SOLO MUESTRA AL PARECER LO QUE TIENE ABONOS.', '', 4, 1, 0),
(33, 35, '2016-01-25', '2016-01-25', 'CODIGO POSTAL', 'REVISAR FUNCIONAMIENTO DE CARGA CODIGO POSTAL', '', 6, 1, 0),
(34, 35, '2016-01-25', '2016-01-25', 'ASIGNACION DE GUIAS', 'AL INGRESAR UNA GUIA QUE NO EXISTE NO ESTA MOSTRANDO SU ESTATUS NORMAL.\r\nCUANDO SE CARGAN VARIAS GUIAS Y SON COD MUCHOS MENSAJES DE ALERTA', '', 6, 1, 0),
(35, 35, '2016-01-25', '2016-01-25', 'RECEPCION DE GUIAS', 'CARGA DESDE EXCEL NO FUNCIONA', '', 6, 1, 0),
(36, 35, '2016-01-26', '2016-02-01', 'CONTROL BOX', 'VINCULAR AR PLATAFORMA CON CONTROL BOX', '', 6, 2, 0),
(38, 34, '2016-01-29', '2016-01-29', 'NUEVO LOGOTIPO', 'MUESTRAS DE LOGOS E ICONOS', '38.rar', 5, 2, 0),
(37, 35, '2016-01-27', '2016-01-29', 'MODULO CONTROL CONTABLE', 'CARGA DE DATOS CONTABLES DESDE CONTROLBOX', '', 6, 1, 0),
(39, 34, '2016-01-29', '2016-01-29', 'FUENTES LOGO', 'ENSAYAR ESTAS FUENTES', '39.rar', 5, 2, 0),
(40, 31, '2016-02-01', '2016-02-01', 'QUIENES SOMOS', 'UN DOMA ES UN ESTADO SUBLIME DE BIENESTAR, DE AHÍ NUESTRO NOMBRE, SOMOS UNA EMPRESA INMOBILIARIA DEDICADA A BUSCAR TANTO PARA NOSOTROS, COMO PARA  NUESTROS CLIENTES Y ALIADOS, CONFIANZA, SEGURIDAD Y EL LOGRO DE SUS INTENCIONES DE COMPRA.\r\n \r\nTENEMOS EXPERIENCIA, HEMOS AFINADO NUESTRO OJO PARA CONOCER A NUESTROS CLIENTES Y PODER OFRECERLES SIEMPRE UN SERVICIO ACORDE A SUS NECESIDADES, GUSTOS Y ASPIRACIONES.\r\n \r\nEN NUESTRO TRABAJO SOMOS PUNTUALES, ASERTIVOS, ACERTADOS, ÁGILES, ABIERTOS, ALEGRAS, SINGULARES, RECURSIVOS, PRUDENTES Y SIEMPRE HONESTOS.\r\n \r\nTRABAJAMOS DE LA MANO DE OTRAS EMPRESAS Y PERSONAS QUE SE DEDICAN AL NEGOCIO INMOBILIARIO, DE ESTA MANERA ESTAMOS SIEMPRE ACTUALIZADOS EN LO QUE ESTÁ SUCEDIENDO Y PODEMOS CONSEGUIR LO QUE BUSCAMOS.  \r\n \r\nAUNQUE NUESTRO TRABAJO ACTUAL SE CENTRA PRINCIPALMENTE EN EL VALLE DE ABURRA Y ORIENTE ANTIOQUEÑO, ESTAMOS SIEMPRE ABIERTOS A BUSCAR, RECIBIR Y TRABAJAR CON PERSONAS Y PROPIEDADES DE TODAS PARTES.\r\n', '', 5, 1, 0),
(41, 34, '2016-02-02', '2016-02-03', 'LOGO BESIMJA', 'UTILIZAR ESTE LOGO', '41.png', 5, 2, 0),
(42, 35, '2016-02-03', '2016-02-05', 'GUIA MANUAL', 'AGREGAR CAMPOS NUEVOS', '', 6, 1, 0),
(43, 35, '2016-02-03', '2016-02-10', 'GUIAS HIJAS', 'IMPRIMIR GUIA HIJA CON PARAMETROS NUEVOS Y AGREGAR TERMINOS  CONDICIONES EN MAESTROS.\r\n\r\nENVIOS URGENTES < 200 / \r\nFLETE INFERIOR A 5 KG\r\nFLETE SUPERIOR A 5 KG\r\nELSE\r\nTRANSPORTE DE CARGA\r\n\r\nDONDE DICE CAJERO: AR EXPRESS PLATAFORMA\r\nRECAUDO BANCARIO\r\nFLETE INTERNACIONAL - AGREGAR PARA EDICION DE GUIAS\r\nOTROS CARGOS Y OTROS TERCEROS(IMPUESTOS)\r\n', '', 6, 1, 0),
(44, 30, '2016-02-08', '2016-02-10', 'IMAGENES PAULOWNIA', 'HTTPS://WWW.DROPBOX.COM/SC/PAASAXBBIOALDFK/AABNCUYEFH6J1FP-_QNQ8RMGA', '', 5, 1, 0),
(45, 30, '2016-02-08', '2016-02-10', 'CARGA CONTENIDOS', 'CARGAR CONTENIDOS ENVIADOS VIA  EMAIL', '', 5, 1, 0),
(46, 40, '2016-02-10', '2016-02-12', 'PROPUESTAS GRAFICAS', 'ESTO NOS ENVIA QUIEN LA DISEÑO ANTERIORMENTE, DE ALLI VAMOS A SACAR MUCHO DEL CONTENIDO DE LA WEB.... HTTPS://WEB.ARCHIVE.ORG/WEB/20110521053334/HTTP://WWW.SANDRAMARTINEZMD.COM/ EL DOMINIO  SANDRAMARTINEZMD.COM LO TIENE ELLOS AUN.\r\n\r\nESTE FUE EL EJEMPLO DE LO QUE QUEREMOS  HTTP://WWW.JAIMEMOLINA-MD.COM/ \r\n', '', 5, 2, 0),
(47, 31, '2016-02-10', '2016-02-12', 'NUEVO DISEÑO', 'CREAR NUEVO DISEÑO BASADO EN: HTTP://WWW.HARRISONSTREET.COM \r\nMIRAR CUAL DE ESTAS OPCIONES PODEMOS ADAPTAR:\r\n\r\nHTTP://THEMEFOREST.NET/ITEM/APARTMENT-HTML-REAL-ESTATE-MULTISINGLE-PROPERTY/13604585?S_PHRASE=&S_RANK=18\r\n\r\nHTTP://WPMINES.COM/DEMOS/REALTOR/INDEX.HTML\r\n\r\nHTTP://THEMEFOREST.NET/ITEM/REALESTAST-REAL-ESTATE-HTML-TEMPLATE/4580367?S_PHRASE=REAL%20ESTATE&S_RANK=12\r\n\r\n', '', 5, 1, 0),
(48, 30, '2016-02-10', '2016-02-12', 'NUEVOS TEXTOS', 'TE ENVIO AL FINAL DEL DOCUMENTO NUEVA INFO LA DE LA EMPRESA LOS PRODCUTOS QUE VENDEMOS Y NUESTROS ALIADOS ', '48.docx', 5, 1, 0),
(49, 35, '2016-02-08', '2016-02-10', 'BUSCAR POR REMESAS', 'BUSCAR POR REMESA\r\nAL EDITAR GUIA SIEMPRE SALE SOLUCIONADO, CREAR NUEVO STATUS\r\n\r\nPOR QUE SU CARGA NO SE PESA EN LIBRAS, BAJO EL LOGO', '', 6, 2, 0),
(50, 39, '2016-02-11', '2016-02-12', 'CONTENIDOS', 'EN LA PARTE DE CONTACTO  DONDE DICE  BRIPO CONFECCIONES POR FAVOR COLOCAR ESTE TEXTO\r\n\r\n\r\nBRIPO, ES UNA EMPRESA DE CONFECCIONES, FUNDADA EN EL AÑO 2005,  EN LA CIUDAD DE BOGOTÁ D.C., CON UN GRAN CARISMA DE DESARROLLO FAMILIAR Y EMPRESARIAL. LA EVOLUCIÓN DE CRECIMIENTO HA SIDO GRADUAL, SIEMPRE TENIENDO EN CUENTA LA PERSONA COMO CENTRO DE VALORES HUMANOS Y DE PRODUCTIVIDAD EN RELACIÓN CON LAS NECESIDADES Y REQUISITOS DE CALIDAD QUE EXIGEN NUESTROS CLIENTES.\r\n\r\nESTAMOS REVIZANDO  LA INFORMACION CARGADA, POR AHORA  LA DIRECCION ES  CALLE 94A  NUMERO 58-25\r\nBARRIO RIONEGRO    BOGOTA  -  COLOMBIA  PBX  6010093   CELULAR 3143939441.\r\n', '', 5, 1, 0),
(51, 30, '2016-02-12', '2016-02-15', 'CAMBIOS WEB', 'ESE CUADRO BLANCO DONDE APARECE EL LOGO INICIO Y LOS DEMAS TITULOS NO ME GUSTA ASI BLANCO NO SE QUE OPCIONES TEGAMOS O SI SE P[UEDE SOLO LAS LETRAS ENCIMA DE LA IMAGEN.\r\n\r\nEN PRODUCTOS VAMOS A COLOCAR OTROS DOS ITEMS.  UNO QUE DICE AGROBILOGICOS Y OTRO QUE DICE SERVICIOS. Y QUEDARIAN ASI :\r\n\r\nAGROBIOLOGICOS : EN WAP ESTAMOS COMPROMETIDOS CON EL ESTABLECIMIENTO Y DESARROLLO DE PROYECTOS AGROFORESTALES AMIGABLES CON EL MEDIO AMBIENTE, DE LA MANO DE AGROBIOLOGICOS SAFER OFERTAMOS PAQUETES DE FERTILIZACION Y CONTROL 100 % ORGANICOS. TODAS LAS PLANTAS Y ARBOLES POSEEN DIVERSAS  NECESIDADES DE NUTRICION. PERMITANOS AYUDARLO EN EL MEJORAMIENTO DE SU CULTIVO.\r\n \r\nSERVICIOS:\r\n•	ASISTENCIA TECNICA, ESTABLECIMIENTO Y MANEJO DE CULTIVOS AGROFORESTALES.\r\n•	ASESORIA EN CONSTRUCCION DE VIVEROS.\r\n•	PAISAJISMO.\r\n•	SISTEMAS DE RIEGO.\r\n•	CONTROL DE EROSION.\r\n•	MANEJO DE AGUAS.\r\n', '', 5, 1, 0),
(52, 31, '2016-02-16', '2016-02-16', 'UBICACIONES', 'VALLE DE ABURRA\r\nABURRA NORTE\r\nABURRA SUR\r\nSUROESTE ANTIOQUEÑO\r\nORIENTE ANTIOQUEÑO\r\nOCCIDENTE ANTIOQUEÑO\r\nOTRAS CIUDADES', '', 5, 1, 0),
(53, 31, '2016-02-16', '2016-02-16', 'ITEMS MENU', 'INICIO\r\nQUIENES SOMOS\r\nPROPIEDADES EN VENTA\r\nCONSIGNE SU INMUEBLE\r\nCONTACTO', '', 5, 1, 0),
(54, 31, '2016-02-16', '2016-02-16', 'NUESTRO EQUIPO', 'PONER FOTOS DE SILUETAS . NOMBRE 1. LUCIA ANGEL - 2. LUCIA ANGEL. PONER DOS VECES EL MISMO NOMBRE.', '', 5, 1, 0),
(55, 31, '2016-02-16', '2016-02-16', 'BOTONES EN EL HOME.', '4 CUADROS:\r\n1. VIVIENDA EN LA CIUDAD: AL HACER OVERMOUSE: ENCUENTRA AQUI CASAS, APARTAMENTOS, APARTAESTUDIOS, PROYECTOS NUEVOS.\r\n2. INDUSTRIALES  Y CONSTRUCTORES: AL HACER OVERMOUSE:  ENCUENTRE AQUI LOTES PARA CONSTRUCCION.\r\n3. BODEGAS, OFICINAS Y LOCALES: AL HACER OVERMOUSE: ENCUENTRE AQUI, BODEGAS, OFICINAS, CONSULTORIOS, LOCALES.\r\n4. LOTES Y FINCAS: AL HACER OVERMOUSE: ENCUENTRE AQUI LOTES Y FINCAS.\r\n\r\nPONER IMAGENES REFERENTES A CADA TEMA', '', 5, 1, 0),
(56, 31, '2016-02-16', '2016-02-16', 'CONTACTO Y CONSIGNE SU INMUEBLE', 'QUITAR MAPA EN CONTACTO. \r\nPONER IMAGEN DE FONDO EN CONTACTO Y EN CONSIGNE SU INMUEBLE.', '', 5, 1, 0),
(57, 30, '2016-02-17', '2016-02-17', 'MOVIL', 'NO SE VE EL MENU COMPLETO EN DISPOSITIVOS MOVILES. VER MENU PRODUCTOS', '', 5, 1, 0),
(58, 39, '2016-02-17', '2016-02-17', 'LOGO ADECCO', 'QUITAR EL LOGO DE ADECO DONDE APAREZCA', '', 5, 1, 0),
(59, 28, '2016-02-25', '2016-02-26', 'CAMBIOS AYC', '[10:52, 25/2/2016] FABIO GALLEGO: PARCE EN VEZ DE ALIANZAS, QUE DIGA NUESTROS CLIENTES\r\n[10:57, 25/2/2016] FABIO GALLEGO: EN SERVICIOS:\r\n[10:57, 25/2/2016] FABIO GALLEGO: EL ORDEN SERIA:\r\n[10:57, 25/2/2016] FABIO GALLEGO: IMPREMENTACION NIIF\r\n[10:57, 25/2/2016] FABIO GALLEGO: REVISORIA FISCAL\r\n[10:58, 25/2/2016] FABIO GALLEGO: AUDITORIA\r\n[10:58, 25/2/2016] FABIO GALLEGO: CONTBILIDAD\r\n[10:59, 25/2/2016] FABIO GALLEGO: EN LA BIENVENIDA APARECE COMO ASESORIA Y CONSULTORIA\r\n[11:00, 25/2/2016] FABIO GALLEGO: LE FALTA LA S A CONSULTORIAS\r\n[11:22, 25/2/2016] FABIO GALLEGO: MANDAME EL LOGO PLISSS\r\n\r\nMONTAR UNA PAGINA ADICIONAL QUE DIJERA, SITIOS DE INTERES\r\n\r\n[11:27, 25/2/2016] FABIO GALLEGO: PARA PONER LOS ENLACES DE LA DIAN\r\n[11:27, 25/2/2016] FABIO GALLEGO: CAMARA DE COMERCIO\r\n[11:27, 25/2/2016] FABIO GALLEGO: ETC\r\n\r\nOPCION PARA BORRAR IMAGENES', '', 5, 1, 0),
(60, 42, '2016-02-26', '2016-02-29', 'PROPUESTAS WEB', 'INICIO\r\nIFBB\r\nNOTICIAS\r\nEVENTOS:\r\n- CALENDARIO DE EVENTOS\r\n- RESULTADOS\r\nGALERIA DE IMAGENES\r\nREGLAMENTOS\r\nSECCIÓN DE PATROCINADORES\r\n', '60.png', 5, 2, 0),
(61, 31, '2016-03-02', '2016-03-03', 'MODIFICACIONES DOMA', 'EN HOME PONER QUE SE PUEDA BAJAR NO FULL SCREEN\r\nCUADROS DE PROPIEDADES COMO EN LA WEB DE MUESTRA.\r\nBANNER CAMBIE MAS LENTO.\r\nLISTA DE PROPIEDADES EN CAJONCITO\r\n\r\n\r\n\r\n', '', 5, 1, 0),
(62, 29, '2016-03-07', '2016-03-07', 'MODIFICACIONES', 'ORGANIZAR LAS VIÑETAS EN CADA DESCRIPCION DE SERVICIOS Y EN NUESTRA EMPRESA NUESTROS SERVICIOS.\r\n\r\nREVISAR EL BROCHURE ADJUNTO DONDE ALGUNOS SERVICIOS SE MODIFICARON Y CAMBIARON DE CATEGORIA', '62.pdf', 5, 2, 0),
(63, 44, '2016-03-22', '2016-03-22', 'MODIFICACIONES', 'EN IDIOMA SE VEA COMO BOTON Y MAS APARTE Y TRATAR DE QUE SEA EN EL FOOTER\r\nPONER SELECCION DE SEDES', '', 5, 1, 0),
(64, 45, '2016-03-22', '2016-03-22', 'MODIFICACION IMAGENES', 'CAMBIAR IMAGENES BANNER, VER CORREO\r\nCAMBIAR IMAGENES EN LAS SECCIONES DEL SITIO, VER CORREO', '', 5, 1, 0),
(65, 34, '2016-04-12', '2016-04-14', 'CAMBIOS BESIMJA', 'INGRESAR TEXTO QUIENES SOMOS\r\n\r\nCAMBIAR  SITIOS DE ORACION POR EL KOTEL, SOLO SE MANEJARA ESTE LUGAR DE ORACION\r\n\r\nAGREGAR TEXTO DE COMO FUNCIONA\r\n\r\nEN CONTACTO PONER UN BOTON  DE DONACIONES.\r\n\r\nAGREGAR FRASES', '65.docx', 5, 1, 0),
(66, 48, '2016-04-25', '2016-04-26', 'MODIFICACIONES', '- CARGAR NUEVO LOGO.\r\n- AGREGAR IGUAL EN CONTINENTAL WIDGET DE INSTAGRAM\r\n- PONER CARUSEL DEL MALL VIRTUAL EN MOVIMIENTO COMO EN CONTINENTAL\r\n- ACTUALIZAR IMAGENES DEL BANNER POR UNAS MAS LLAMATIVAS.\r\n- PONER BACKGROUND AL SITIO WEB O MIRAR SI SE PUEDE QUITAR QUE NO SEA BOXED.\r\n- PONER EN MALL NIKE Y ADIDAS.\r\n- FACEBOOK FC CARGO EXPRESS.\r\n- INSTAGRAM FC_CARGO_EXPRESS.\r\n- REVISAR REDES SOCIALES, QUITAR TWITTER Y SKYPE.\r\n\r\n', '66.jpg', 5, 2, 0),
(67, 44, '2016-04-26', '2016-04-27', 'MODIFICACIONES IEB', '- PONER EL COPY DEBAJO DEL LOGO. ADJUNTO ARCHIVO DE ILLUSTRATOR PARA QUE LO TOMES DE ALLÍ.\r\n- EN LA BARRA CON TRANSPARENCIAS QUE APARECE EN LAS FOTOS DEL HOME DICE: INGENIERIA PARA LA SOSTENIBILIDAD DE LA VIDA. PORFA VAMOS A PONERLE LA PALABRA “HACEMOS” ARRIBA DE LA FRASE Y MÁS PEQUEÑA.\r\n- EL MAPA DE PRESENCIA HA CAMBIADO UN POCO. TE LO ADJUNTO PARA REEMPLAZARLO PORFA.\r\n', '67.rar', 5, 2, 0),
(68, 47, '2016-04-26', '2016-04-26', 'LOGO FIT', 'UTILIZAR EL LOGO ADJUNTO CON LAS SIGUIENTES VARIACIONES:\r\n- LA PALABRA SPORTS QUE TAMBIÉN ESTE EN CURSIVA\r\n- CREAR PROPUESTAS CON DIFERENTES COLORES ( VERDE, AZUL, NARANJA, AMARILLO)', '68.png', 5, 1, 0),
(69, 50, '2016-04-27', '2016-04-27', 'NUEVA SEDE', 'AGREGAR NUEVA SEDE\r\n\r\nLAS DELICIAS DE LA ABUELA "DULUTH"\r\n1630 PLEASANT HILL RD #240, DULUTH, GA 30096\r\n(678) 691-5593\r\nHTTPS://WWW.FACEBOOK.COM/LAABUELADULUTH/\r\n\r\nADJUNTO FOTO', '69.jpg', 5, 2, 0),
(70, 49, '2016-05-02', '2016-05-06', 'PROPUESTAS GRAFICAS', 'REALIZAR 3 O 4 PROPUESTAS GRAFICAS.\r\nEL SITIO WEB ACTUAL ES SYTECSA.COM\r\nEL LOGO FUE ENVIADO AL CORREO', '', 5, 2, 0),
(71, 29, '2016-05-11', '2016-05-13', 'CAMBIOS WEB', '1. EN EL LINK NUESTROS SERVICIOS, Y LUEGO EN EL LINK MONTAJES E INSTALACIONES ELECTRICAS, FALTÓ LISTAR EL PUNTO DENOMINADO "CONSTRUCCIÓN DE OBRAS DE INGENIERÍA ELÉCTRICA Y DE INSTRUMENTACIÓN EN AMBIENTES INDUSTRIALES". ESTE PUNTO SE PUEDE VER EN EL BROCHURE. \r\n\r\nEN ESTE LINK (EL DE MONTAJES E INTALACIONES ELECTRICAS) SE PUEDEN VER CUATRO (4) FOTOS PERO HAY DOS ESPACIOS EN BLANCO. FALTAN DOS (2) IMAGENES. TAMBIEN HAY QUE CAMBIAR LA DE LA MALLA. ESTA NO DICE NADA. ADEMÁS LAS OTRAS TRES (3) FOTOS SOLO SE REFIEREN A INSTALAICONES DE POTENCIA. SE DEBERÍAN INCLUIR OTRAS TRES FOTOS (CONTANDO LA DE LA MALLA QUE HABRIA QUE QUITARLA, MAS LOS DOS ESPACIOS EN BLANCO) DE INSTALACIONES ELECTRICAS AL INTERIOR DE EDIFICACIONES E INSTALACIONES EN AMBIENTES INDUSTRIALES.\r\n\r\n2. EN EL LINK SERVICIOS ADICIONALES PARA OBRAS DE EDIFICACION, EN EL LINK SISTEMAS DE OFICINA ABIERTA, SE PODRÍA INCLUIR, DEBAJO DE LAS DOS FOTOS QUE APARECEN ALLÍ, UNA FOTO, EN PROFUNDIDAD DE ARCHIVOS RODANTES. CREO RECORDAR QUE CARLOS TOBÓN TOMÓ UNA EXCELENTE FOTO EN EL MINISTERIO SOBRE ESTE TEMA. LA FOTO PUEDE QUEDAR DEBAJO DE LAS DOS QUE YA ESTÁN ALLÍ, DE MODO QUE LA FOTO INCLUIDA QUEDE CON UN ANCHO IGUAL AL QUE TIENEN LAS DOS QUE YA ESTÁN. NO SE SI ESTOY SIENDO CLARO. SI NO SE ENTIENDE, LO HABLAMOS TELEFÓNICAMENTE.\r\n\r\n3. EN EL MISMO LINK DE SERVICIOS ADICIONALES PARA OBRAS DE EDIFICACION, EN EL LINK SISTEMAS DE VIDEO Y TELECONFERENCIA, LAS FOTOS HAY QUE CAMBIARLAS: \r\n\r\nA. LA FOTO GRANDE ES MUY FLOJA\r\nB. LAS DOS FOTOS PEQUEÑAS NO CORRESPONDEN A VIDEO Y TELECONFERENCIA, SINO MAS BIEN A LOS SISTEMAS DE CONTROL DE ACCESO.\r\n\r\n4. LOS CURSORES QUE SE DENOMINAN NEXT, CLOSE Y PREV, TIENEN PROBLEMAS:\r\n\r\nA. EL CURSOR CLOSE FUNCIONA PERFECTAMENTE\r\nB. LOS CURSORES NEXT Y PREV DEBERÍAN LLEVAR AL USUARIO AL LINK ANTERIOR EN EL LISTADO EN EL QUE SE ENCUENTRA, POR EJEMPLO, SI EL USUARIO ESTÁ EN EL LINK SISTEMAS DE VIDEO Y TELECONFERENCIA, SI PULSA EL CURSOR PREV, LA PAGINA QUE APAREZCA DEBERÍA SER SISTEMAS DE OFICINA ABIERTA, IGUALMENTE, SI EL USUARIO ESTÁ EN EL LINK SISTEMAS DE VIDEO Y TELECONFERENCIA, Y PULSA EL CURSOR NEXT, LA PAGINA QUE DEBERÍA APARECER ES LA SIGUIENTE EN EL ORDEN INICIAL DE ESTA CATEGORIA. COMO SISTEMAS DE VIDEO Y TELECONFERENCIA ES LA "ULTIMA" DE SU LISTADO, EL SISTEMA DEBERÍA REGRESAR AL LINK SUPERIOR DE LA CATEGORIA, O SEA, EN ESTA CASO, DEBERÍA VOLVER A SERVICIOS ADICIONALES PARA OBRAS DE EDIFICACIÓN. SI HAY DUDAS EN ESTE PUNTO TAMBIEN LAS SOLUCIONAMOS TELEFONICAMENTE.\r\n', '', 5, 2, 0),
(72, 31, '2016-05-11', '2016-05-11', 'CAMBIOS WEB', 'IMAGEN DE INICIO MISMO TAMAÑO E INGRESO AL SISTEMA \r\n\r\nCARGO --- CAMBIAR POR CELULAR EN NUESTRO EQUIPO \r\n\r\nFILTROS EN UBICACIÓN Y LOCALIZACIÓN AL INGRESAR UNA PROPIEDAD\r\n\r\nINDUSTRIALES Y CONSTRUCTORES INFORMACIÓN DE CONTACTO DOÑA LUCIA\r\n\r\nESTADÍSTICAS DE PAGINA\r\n', '', 5, 1, 0),
(73, 31, '2016-05-17', '2016-05-17', 'CAMBIOS FINALES', 'EN LA PAGINA DE INICIO AL LADO IZQUIERDO SUPERIOR ESTAN LOS NUMEROS DE LA OFICINA Y UN  CELULAR QUE ES DE TERE ROBLES . AHI AGREGAR EL DE LUCIA\r\n\r\nY EN NUESTRO EQUIPO EN QUIENES SOMOS COLOCAR PRIMERO LA FOTO DE LUCIA . LUEGO TERE Y LUEGO CLAUDIA\r\n\r\nTAMBIEN EN EL EQUIPO PONERLE A CADA UNA EL TEL DE LA OFICINA', '', 5, 1, 0),
(74, 35, '2016-05-01', '2016-05-30', 'CONTROL SISTEMA', '* OBSERVACIONES A GUIA....HISTORICO.\r\n\r\n* SI ES COD NO SE CAMBIA PESO AL REALIZAR CARGUE\r\n\r\n* CREAR REPORTE OBSERVACIONES - EN REPORTE MOSTRAR/BUSCAR OBSERVACIONES\r\nGENERA - USUARIO - CIUDAD DESTI - DEPARTAM DESTIN - PAGO - FECHAS - PESOS\r\n\r\n* EN IMPRESION DEL RUTERO PARA EL CLIENTE NO MOSTRAR OBSERVACIONES.\r\n\r\n*EN REPORTES: GUIAS EN BLOQUE:\r\n*IMPRESION DE SOPORTE DE GUIAS EN BLOQUE - TIPO CARRITO\r\n\r\n*AGREGAR MENU  EN CONTROL CONTABLE: CONTROL DE FACTURACION\r\n*SOLO SE FACTURA LO QUE ES COD\r\n*LISTADO DE GUIAS Y AGREGAR NRO DE FACTURA.\r\n*MOSTRAR SIEMPRE SI LA GUIA ESTA FACTURADA O NO\r\n\r\n*EN CONTROL CONTABLE:\r\n*MODIFICAR CODIGO CONTROL X PESO PARA: CONTABILIDAD - ADMINISTRATIVO Y *DESPACHOS\r\n\r\n\r\nGUIAS EN BLOQUE.\r\nDESPUES DE SELECCIONAR GUIAS PARA IMPRIMIR GUIAS HIJAS Y REALZAR UNA NUEVA BUSQUEDA NO ARROJA RESULTADOS\r\n\r\nCONTROL FACTURACION, MISMO PROBLEMA GUIAS BLOQUE\r\n\r\nAGREGAR EN CONSULTA POR GUIAS AGREGAR SI ES FACTURADA O NO Y NRO DE FACTURA.\r\n\r\nAGREGAR LA TRM DEL DIA Y AGREGAR EN REPORTES Y EXPORTAR A EXCEL\r\n', '', 6, 2, 0),
(75, 51, '2016-06-15', '2016-06-30', 'PROPUESTAS WEB', 'VER LOGO Y CREAR PROPUESTAS...TRABAJAN EMPAQUES Y SELLOS DE MARCAS HERCULES, MAQUINARIA PESADA', '75.png', 5, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoCuenta`
--

CREATE TABLE IF NOT EXISTS `TipoCuenta` (
  `Id` int(11) unsigned NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `TipoCuenta`
--

INSERT INTO `TipoCuenta` (`Id`, `Nombre`, `Tipo`) VALUES
(4, 'CORRIENTE', ''),
(5, 'AHORROS', ''),
(6, 'CREDITO', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipouser`
--

CREATE TABLE IF NOT EXISTS `Tipouser` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Activo` int(11) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Tipouser`
--

INSERT INTO `Tipouser` (`Id`, `Nombre`, `Activo`, `Pos`) VALUES
(1, 'ADMINISTRADOR', 0, 0),
(3, 'EMPLEADO', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Unidades`
--

CREATE TABLE IF NOT EXISTS `Unidades` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Valor` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Clave` varchar(10) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Id`, `Nombre`, `Cedula`, `Email`, `Clave`, `Tipo`, `Muestra`) VALUES
(1, 'JUAN ALEJANDRO ZAPATA', '71216799', 'info@juanalejandro.com', 'cusumbo009', 1, 0),
(2, 'JUANCHO', '987654', 'juancho@web.com', '123456', 3, 1),
(3, 'JUAN FELIPE LARA', '123456', 'jlara@webevolution.com.co', '123456', 3, 1),
(4, 'JUAN FELIPE LARA', '1128441536', 'jlara@webevolution.com.co', 'jlara009', 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
