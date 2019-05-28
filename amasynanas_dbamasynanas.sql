-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-05-2019 a las 15:02:27
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amasynanas_dbamasynanas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_amascasa`
--

CREATE TABLE `avs_amascasa` (
  `ac_id` int(11) NOT NULL,
  `ac_tserv` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ac_horario` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ac_direc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `ac_oserv` varchar(135) COLLATE utf8_spanish_ci NOT NULL,
  `ac_ginstruc` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ac_obs` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ac_tarifa` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_asistente_personal`
--

CREATE TABLE `avs_asistente_personal` (
  `ap_id` int(11) NOT NULL,
  `ap_tservi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ap_horario` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ap_direc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `ap_oserv` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ap_carac` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ap_ginstruc` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ap_obs` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ap_tarifa` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_auxiliar`
--

CREATE TABLE `avs_auxiliar` (
  `id_aux` int(11) NOT NULL,
  `aux_nom` varchar(100) NOT NULL,
  `aux_tip` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_auxiliar`
--

INSERT INTO `avs_auxiliar` (`id_aux`, `aux_nom`, `aux_tip`) VALUES
(1, 'NATURAL', 'TIP'),
(2, 'JURIDICA', 'TIP'),
(3, 'EMPRESA', 'M'),
(4, 'SI', 'DIS'),
(5, 'NO', 'DIS'),
(6, 'F', 'SEX'),
(7, 'M', 'SEX'),
(8, 'BOLETA', 'COM'),
(9, 'FACTURA', 'COM'),
(10, 'DOM', 'http://localhost:85/vision2020/'),
(11, 'D.N.I.', 'TIDE'),
(12, 'CARNET ESTRANGERIA', 'TIDE'),
(13, 'Soltero(a)', 'EC'),
(14, 'Casado(a)', 'EC'),
(15, 'Viudo(a)', 'EC'),
(16, 'Separado(a)/Divorciado', 'EC'),
(17, 'Redes Sociales', 'MK'),
(18, 'Periodico', 'MK'),
(19, 'Otros', 'MK'),
(20, 'Blog', 'MK'),
(21, 'Niguna', 'NIVE'),
(22, 'Primaria', 'NIVE'),
(23, 'Secundaria Completa', 'NIVE'),
(24, 'Superior Terminado', 'NIVE'),
(25, 'Superior Incompleto', 'NIVE'),
(26, 'CUIDADO DE MASCOTAS', 'SERV'),
(27, 'SI', 'AFI'),
(28, 'NO', 'AFI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_boss`
--

CREATE TABLE `avs_boss` (
  `bos_id` int(10) NOT NULL,
  `bos_name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `bos_lname` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `bos_mlname` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `bos_province_id` int(11) NOT NULL,
  `bos_district_id` int(11) NOT NULL,
  `bos_address` varchar(170) COLLATE utf8_spanish_ci NOT NULL,
  `bos_zip` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `bos_rdate` varchar(160) COLLATE utf8_spanish_ci NOT NULL,
  `bos_bio` text COLLATE utf8_spanish_ci NOT NULL,
  `bos_email` text COLLATE utf8_spanish_ci NOT NULL,
  `bos_password` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `bos_cemail` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `bos_phone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `bos_photo` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `bos_status` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `bos_membership_plan` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `bos_creditcar` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `bos_enabled` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `bos_hdyh` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `bos_gender` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avs_boss`
--

INSERT INTO `avs_boss` (`bos_id`, `bos_name`, `bos_lname`, `bos_mlname`, `bos_province_id`, `bos_district_id`, `bos_address`, `bos_zip`, `bos_rdate`, `bos_bio`, `bos_email`, `bos_password`, `bos_cemail`, `bos_phone`, `bos_photo`, `bos_status`, `bos_membership_plan`, `bos_creditcar`, `bos_enabled`, `bos_hdyh`, `bos_gender`) VALUES
(1, 'Mack', 'swe', 'flores', 1, 1, '1', '1', '1', '1', 'informes@frsystem.com.pe', '123456', '', '1', '1', '1', '1', '1', 'SI', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_category`
--

CREATE TABLE `avs_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_category`
--

INSERT INTO `avs_category` (`cat_id`, `cat_name`) VALUES
(1, 'Childcare'),
(2, 'Senior care'),
(3, 'Pet care'),
(4, 'Home Care');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_departamento`
--

CREATE TABLE `avs_departamento` (
  `depa_id` int(11) NOT NULL,
  `depa_nom` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avs_departamento`
--

INSERT INTO `avs_departamento` (`depa_id`, `depa_nom`) VALUES
(1, 'AMAZONAS'),
(2, 'ANCASH'),
(3, 'APURIMAC'),
(4, 'AREQUIPA'),
(5, 'AYACUCHO'),
(6, 'CAJAMARCA'),
(7, 'CALLAO'),
(8, 'CUSCO'),
(9, 'HUANCAVELICA'),
(10, 'HUANUCO'),
(11, 'ICA'),
(12, 'JUNIN'),
(13, 'LA LIBERTAD'),
(14, 'LAMBAYEQUE'),
(15, 'LIMA'),
(16, 'LORETO'),
(17, 'MADRE DE DIOS'),
(18, 'MOQUEGUA'),
(19, 'PASCO'),
(20, 'PIURA'),
(21, 'PUNO'),
(22, 'SAN MARTIN'),
(23, 'TACNA'),
(24, 'TUMBES'),
(25, 'UCAYALI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_distritos`
--

CREATE TABLE `avs_distritos` (
  `distri_id` int(11) NOT NULL,
  `distri_nom` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_distritos`
--

INSERT INTO `avs_distritos` (`distri_id`, `distri_nom`) VALUES
(1, 'Cercado de Lima'),
(2, 'Ate'),
(3, 'Barranco'),
(4, 'Brena'),
(5, 'Comas'),
(6, 'Chorrillos'),
(7, 'El Agustino'),
(8, 'Jesus Maria'),
(9, 'La Molina'),
(10, 'La Victoria'),
(11, 'Lince'),
(12, 'Magdalena del Mar'),
(13, 'Miraflores'),
(14, 'Pueblo Libre'),
(15, 'Puente Piedra'),
(16, 'Rimac'),
(17, 'San Isidro'),
(18, 'Independencia'),
(19, 'San Juan de Miraflores'),
(20, 'San Luis'),
(21, 'San Martin de Porres'),
(22, 'San Miguel'),
(23, 'Santiago de Surco'),
(24, 'Surquillo'),
(25, 'Villa Maria del Triunfo'),
(26, 'San Juan de Lurigancho'),
(27, 'Santa Rosa'),
(28, 'Los Olivos'),
(29, 'San Borja'),
(30, 'Villa El Savador'),
(31, 'Santa Anita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_employee`
--

CREATE TABLE `avs_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `emp_lname` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `emp_mlname` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `emp_gender` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_inumber` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `emp_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `emp_password` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_phone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `emp_mobile` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `emp_salary` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `emp_province_id` int(11) NOT NULL,
  `emp_district_id` int(11) NOT NULL,
  `emp_address` varchar(170) COLLATE utf8_spanish_ci NOT NULL,
  `emp_zip` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_rdate` date NOT NULL,
  `emp_cstatus` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `emp_photo` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_experience` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emp_profession` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emp_birthday` date NOT NULL,
  `emp_age` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `emp_rphone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `emp_scproducts` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_cwpets` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_wtravel` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_hcequipment` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_nsmoker` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_bio` text COLLATE utf8_spanish_ci NOT NULL,
  `emp_crecods` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_precords` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_vfacebook` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_vphone` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_cpayment` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_bdpay` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_enabled` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_service` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ctravel` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emp_cemail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `emp_hdyh` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ccst` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ccsick` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_etwins` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ecespecial` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ghe1` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ghe2` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ghe3` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ghe4` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ghe5` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `emp_leduc` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `emp_ptitle` varchar(170) COLLATE utf8_spanish_ci NOT NULL,
  `emp_leducation` varchar(170) COLLATE utf8_spanish_ci NOT NULL,
  `emp_language` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avs_employee`
--

INSERT INTO `avs_employee` (`emp_id`, `emp_name`, `emp_lname`, `emp_mlname`, `emp_gender`, `emp_inumber`, `emp_email`, `emp_password`, `emp_phone`, `emp_mobile`, `emp_salary`, `emp_province_id`, `emp_district_id`, `emp_address`, `emp_zip`, `emp_rdate`, `emp_cstatus`, `emp_photo`, `emp_experience`, `emp_profession`, `emp_birthday`, `emp_age`, `emp_rphone`, `emp_scproducts`, `emp_cwpets`, `emp_wtravel`, `emp_hcequipment`, `emp_nsmoker`, `emp_bio`, `emp_crecods`, `emp_precords`, `emp_vfacebook`, `emp_vphone`, `emp_cpayment`, `emp_bdpay`, `emp_enabled`, `emp_service`, `emp_ctravel`, `emp_cemail`, `emp_hdyh`, `emp_ccst`, `emp_ccsick`, `emp_etwins`, `emp_ecespecial`, `emp_ghe1`, `emp_ghe2`, `emp_ghe3`, `emp_ghe4`, `emp_ghe5`, `emp_leduc`, `emp_ptitle`, `emp_leducation`, `emp_language`) VALUES
(1, 'Mck', 'flores', '', 'F', '', 'oswaldoelflori@gmail.com', '123', '', '', '2000', 0, 0, 'Av. Garcilaso de la Vega 1260 of. 6', '', '2019-05-22', 'Soltera(a)', 'noimageperfil.png', '3', '', '1994-06-08', '', '', '', '', 'NO', '', '', 'LoremLorsemLoremLoremLoremLorem', '', '', '', '', 'SI', 'SI', 'SI', '1', '', '', 'Periodico', '5', 'NO', 'SI', 'NO', 'SI', 'SI', 'SI', 'SI', '', '', 'Soy especialista en niños', 'Secundaria Completa', 1),
(2, 'Mck', 'flores', '', 'F', '', 'informes@frsystem.com.pe', '123', '', '', '1500', 0, 0, 'Av. Garcilaso de la Vega 1260 of. 6', '', '2019-05-22', 'Soltera(a)', 'noimageperfil.png', '3', '', '1992-03-13', '', '', '', '', 'NO', '', '', 'ddedeeee', '', '', '', '', 'SI', 'SI', 'SI', '5', '', '', 'Periodico', '2', 'NO', 'NO', 'NO', 'SI', 'SI', '', '', '', '', 'Soy especialista en niños', 'Superior Terminado', 2),
(3, 'Mckenneth', 'Flores', '', 'F', '', 'frsystemperu@gmail.com', 'Nosotros21', '', '', '1200', 0, 0, 'Av. Garcilaso de la Vega 1260 of. 6', '', '2019-05-22', 'Soltera(a)', 'noimageperfil.png', '2', '', '1994-05-17', '', '', '', '', 'SI', '', '', 'Hola soy m', '', '', '', '', 'SI', 'SI', 'SI', '1', '', '', 'Redes Sociales', '2', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', '', 'Niñera', 'Primaria', 1),
(4, 'test', 'test', '', 'M', '', 'renjithaim05@gmail.com', 'renjithaim05@gmail.com', '', '', '120', 0, 0, 'test', '', '2019-05-22', 'Soltera(a)', 'noimageperfil.png', '1', '', '1993-02-02', '', '', '', '', 'NO', '', '', 'test', '', '', '', '', '', '', 'SI', '1', '', '', 'Otros', '', 'NO', 'NO', 'NO', 'SI', '', '', '', '', '', 'test', 'Superior Incompleto', 2),
(5, 'test', 'test', '', 'M', '', 'maxinantony007@gmail.com', 'maxinantony007@gmail.com', '', '', '120', 0, 0, 'Twixt Technologies', '', '2019-05-24', 'Soltera(a)', 'noimageperfil.png', '1', '', '1993-02-19', '', '', '', '', 'NO', '', '', 'test', '', '', '', '', '', '', 'SI', '2', '', '', 'Blog', '', 'NO', 'NO', 'NO', 'SI', '', '', '', '', '', 'test', 'Primaria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j1_child_nana`
--

CREATE TABLE `avs_j1_child_nana` (
  `na1_id` int(11) NOT NULL,
  `na1_jobtype` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `na1_province` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `na1_district_id` int(11) NOT NULL,
  `na1_address` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `na1_zip` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `na1_kids1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age1` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age2` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age3` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age4` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age5` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age6` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age7` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age8` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age9` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_age10` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_lhousekeeping` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_mpreparation` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_laundry` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_hhelp` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_egshopping` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_icwpets` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_hacdegree` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_fatrained` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_dnsmoke` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `na1_salary` decimal(20,0) NOT NULL,
  `na1_date` date NOT NULL,
  `na1_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j1_home_housekeeper`
--

CREATE TABLE `avs_j1_home_housekeeper` (
  `hou_id` int(11) NOT NULL,
  `hou_jobtype` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_province` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_district_id` int(11) NOT NULL,
  `hou_address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_zip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_hou_type` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_bathcleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_kcleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_bchanging` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_ocleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_rcleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_ccleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_dishes` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_wwashing` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_spolishing` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_carcleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_ftreatment` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_wallwashing` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_laundry` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_pcare` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_pcleanup` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_pacandunpack` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_acleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_bcleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_hsitting` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_organization` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_edulevel_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_title` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hou_salary` decimal(10,0) NOT NULL,
  `hou_date` date NOT NULL,
  `hou_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j1_pet_petsitter`
--

CREATE TABLE `avs_j1_pet_petsitter` (
  `ps_id` int(11) NOT NULL,
  `ps_jobtype` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_date_start` date NOT NULL,
  `ps_date_end` date NOT NULL,
  `ps_msdiflexible` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_sun` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_mon` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_tue` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_wed` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_thurs` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_fri` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_sat` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_msmvary` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_district_id` int(11) NOT NULL,
  `ps_province` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_zip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_pnumber` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype4` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype5` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype6` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype7` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype8` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype9` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_atype10` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_pexercise` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_boarding` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_walking` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_grooming` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_wcleanup` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_feeding` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_training` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_madministration` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_ocare` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_hacdegree` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_hotransportation` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_dnsmoke` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ps_salary` decimal(10,0) NOT NULL,
  `ps_date` date NOT NULL,
  `ps_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j1_senior_companion_a`
--

CREATE TABLE `avs_j1_senior_companion_a` (
  `sc_id` int(11) NOT NULL,
  `sc_jobtype` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_date_start` date NOT NULL,
  `sc_date_end` date NOT NULL,
  `sc_msdiflexible` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_sun` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_mon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_tue` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_wed` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_thurs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_fri` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_sat` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_msmvary` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_province` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_district_id` int(100) NOT NULL,
  `sc_address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_zip` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_age` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_relationship` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_mlosfalzheimers` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_feeding` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_bdressing` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_companionship` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_mpreparation` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_eshopping` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_lhousekeeping` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_mprompting` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_massistance` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_hspactive` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_icwpets` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_hacdegree` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_fatrained` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_dnsmoke` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_eoahlift` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_ewadementia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_salary` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sc_date` date NOT NULL,
  `sc_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j2_child_daycare`
--

CREATE TABLE `avs_j2_child_daycare` (
  `dc_id` int(11) NOT NULL,
  `dc_nchilds` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont4` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear4` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont5` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear5` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont6` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear6` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont7` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear7` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont8` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear8` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont9` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear9` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_bmont10` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_byear10` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_mon` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_tues` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_wed` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_thur` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_fri` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_tneeded` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_mem` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_pnumber` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_ndc` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_kilometers` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_address_boss` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_comments` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dc_date` date DEFAULT NULL,
  `dc_boss_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j2_home_hcleaning`
--

CREATE TABLE `avs_j2_home_hcleaning` (
  `hc_id` int(11) NOT NULL,
  `hc_jobtype` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_frequency` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_date_start` date NOT NULL,
  `hc_date_end` date NOT NULL,
  `hc_hstart` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_haopstart` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_hend` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_hout_amopm_end` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_province` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_district_id` int(11) NOT NULL,
  `hc_address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_zip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_nobedrooms` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_nobathrooms` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_mhhpets` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_hlchange` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_rcleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_ocleaning` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_deishes` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_laundry` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_icabinets` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_iwindows` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_iwalls` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_pocsupplies` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_pocequipment` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_abtapply` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_elevel` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_salary` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_comments` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hc_date` date NOT NULL,
  `hc_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j2_pet_groomer`
--

CREATE TABLE `avs_j2_pet_groomer` (
  `gr_id` int(11) NOT NULL,
  `gr_jobtype` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `gr_date_start` date NOT NULL,
  `gr_date_end` date NOT NULL,
  `gr_msdiflexible` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_sun` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_tue` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_wed` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_thurs` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_fri` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_sat` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_msmvary` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_province` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_district_id` int(11) NOT NULL,
  `gr_address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_zip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_pnumber` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype4` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype5` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype6` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype7` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype8` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype9` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_atype10` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_pexercise` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_boarding` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_walking` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_grooming` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_wcleanup` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_feeding` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_training` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_madministration` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_ocare` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_hacdegree` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_hotransportation` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_dnsmoke` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gr_salary` decimal(10,0) NOT NULL,
  `gr_date` date NOT NULL,
  `gr_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j2_senior_companion_b`
--

CREATE TABLE `avs_j2_senior_companion_b` (
  `scb_id` int(11) NOT NULL,
  `scb_jobtype` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `scb_date_start` date NOT NULL,
  `scb_date_end` date NOT NULL,
  `scb_start_time` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_end_time` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_msmvary` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_province` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_district_id` int(100) NOT NULL,
  `scb_address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_zip` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_pnumber` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_age` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_relationship` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_mlosfalzheimers` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_feeding` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_bdressing` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_companionship` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_mpreparation` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_eshopping` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_lhousekeeping` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_mprompting` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_massistance` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_hspactive` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_icwpets` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_hacdegree` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_fatrained` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_dnsmoke` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_eoahlift` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_ewadementia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_salary` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `scb_date` date NOT NULL,
  `scb_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j3_child_tutoring_a`
--

CREATE TABLE `avs_j3_child_tutoring_a` (
  `tl_id` int(11) NOT NULL,
  `tl_jobtype` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_hour_start` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_hour_end` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_sdflexible` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_sun` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_mon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_tue` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_wed` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_thurs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_fri` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_sat` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_msmvary` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_province` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_district_id` int(11) NOT NULL,
  `tl_address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_zip` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_letters` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_computers` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_english` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_math` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_science` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_sstudies` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_seducation` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_tprep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_art` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_csewing` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_dance` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_minstruments` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_sfitness` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_other` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_cwpets` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_hcdegree` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_dnsmoke` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_salary` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl_date` date NOT NULL,
  `tl_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j3_child_tutoring_b`
--

CREATE TABLE `avs_j3_child_tutoring_b` (
  `tlb_id` int(11) NOT NULL,
  `tlb_jobtype` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tlb_date_start` date NOT NULL,
  `tlb_date_end` date NOT NULL,
  `tlb_hour_start` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tlb_hour_end` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_msmv` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl3_province` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_district_id` int(100) NOT NULL,
  `tl2_address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_zip` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_letters` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_computers` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_english` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_math` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_science` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_social` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_seducation` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_tprep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_other` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_cwpets` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_hcdegree` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_dnsmoke` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tl2_date` date NOT NULL,
  `tl2_boos_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j3_home_passintant`
--

CREATE TABLE `avs_j3_home_passintant` (
  `pa_id` int(11) NOT NULL,
  `pa_jobtype` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_date_start` date NOT NULL,
  `pa_date_end` date NOT NULL,
  `pa_msdiflexible` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_sun` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_mon` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_tue` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_wed` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_thurs` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_fri` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_sat` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_msmvary` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_province` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_district_id` int(11) NOT NULL,
  `pa_address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_zip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_gerrands` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_shopping` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_vservices` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_pevents` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_mservices` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_hacdegree` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_icwpets` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_dnsmoke` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pa_date` date NOT NULL,
  `pa_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j4_child_sneeds`
--

CREATE TABLE `avs_j4_child_sneeds` (
  `sn_id` int(11) NOT NULL,
  `sn_date_start` date NOT NULL,
  `sn_date_end` date NOT NULL,
  `sn_msdiflexible` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_sun` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_mon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_tue` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_wed` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_thurs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_fri` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_sat` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_msmv` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_province` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_district_id` int(100) NOT NULL,
  `sn_address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_zip` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_infant` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_adult` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_youth` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_senior` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_teen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_add` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_adhd` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_aspergers` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_sthma` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_autism` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_asdisorder` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_bvimpairment` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_cancer` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_capdisorder` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_cpalsy` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_cdisabilities` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_deafness` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_ddelays` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_diabetes` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_dsyndrome` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_dyslexia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_epilepsy` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_fallergies` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_hdefects` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_hydrocephaly` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_millness` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_mchallenges` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_msclerosis` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_mdystrophy` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_obesity` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_pddisorder` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_sdisorder` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_idisorder` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_sdelay` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_cinjury` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_tcondition` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_other` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_lhousekeeping` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_mpreparation` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_laundry` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_hhelp` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_egshopping` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_scwpets` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_sacdegree` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_cfatrained` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_dnsmoke` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_salary` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sn_date` date NOT NULL,
  `sn_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_j4_home_errandsojobs`
--

CREATE TABLE `avs_j4_home_errandsojobs` (
  `eoj_id` int(11) NOT NULL,
  `eoj_jobtype` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_date_start` date NOT NULL,
  `eoj_date_end` date NOT NULL,
  `eoj_msdiflexible` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_sun` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_mon` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_tue` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_wed` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_thurs` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_fri` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_sat` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_msmvary` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_district_id` int(11) NOT NULL,
  `eoj_address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_zip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_gerrands` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_shopping` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_vservices` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_pevents` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_mservices` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_hacdegree` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_icwpets` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_dnsmoke` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `eoj_date` date NOT NULL,
  `eoj_boss_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_jobmessage`
--

CREATE TABLE `avs_jobmessage` (
  `pjm_id` int(11) NOT NULL,
  `pjm_title` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pjm_description` text COLLATE utf8_spanish_ci NOT NULL,
  `pjm_salary` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `pjm_date` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `pjm_category` date NOT NULL,
  `pjm_boss_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_language`
--

CREATE TABLE `avs_language` (
  `lang_id` int(11) NOT NULL,
  `lang_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_language`
--

INSERT INTO `avs_language` (`lang_id`, `lang_name`) VALUES
(1, 'English'),
(2, 'Spanish');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_menu`
--

CREATE TABLE `avs_menu` (
  `id_menu` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `col` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  `nl` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_menu`
--

INSERT INTO `avs_menu` (`id_menu`, `nombre`, `col`, `ord`, `nl`) VALUES
(1, 'GESTION', 1, 1, 1),
(2, 'DATOS', 2, 1, 1),
(3, 'SISTEMA', 4, 1, 1),
(4, 'REPORTES', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_menus`
--

CREATE TABLE `avs_menus` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `sm` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `orden` float NOT NULL,
  `nl` int(11) NOT NULL,
  `np` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_menus`
--

INSERT INTO `avs_menus` (`id`, `id_menu`, `sm`, `url`, `orden`, `nl`, `np`) VALUES
(2, 1, 'Servicios', 'clientes.php', 2, 1, NULL),
(3, 2, 'Personal', 'servicios.php', 1, 1, NULL),
(4, 2, 'Clientes', 'atenciones.php?KT=1', 2, 1, NULL),
(5, 3, 'Salir', 'salir.php', 2, 1, NULL),
(6, 3, 'Usuarios', 'avs_adm_usuarios.php', 1, 1, NULL),
(10, 4, 'Todos', 'reporte_con_sin.php?LNK=1', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_personal_info1`
--

CREATE TABLE `avs_personal_info1` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avs_personal_info1`
--

INSERT INTO `avs_personal_info1` (`id`, `descripcion`) VALUES
(1, 'Noche de cita'),
(2, 'Limpieza ligera'),
(3, 'Comestibles / mandados'),
(4, 'Ayuda con mascotas\r\n'),
(5, 'Cuidado de compañia'),
(6, 'Organizar / Lavandería'),
(7, 'Embalaje / Mudanza'),
(8, 'Preparacion de comida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_personal_info2`
--

CREATE TABLE `avs_personal_info2` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avs_personal_info2`
--

INSERT INTO `avs_personal_info2` (`id`, `descripcion`) VALUES
(1, 'Limpieza de baños'),
(2, 'Limpieza de cocina'),
(3, 'Limpieza del horno'),
(4, 'Lavado de ventanas'),
(5, 'Limpieza de desechos de mascotas'),
(6, 'Limpieza general de habitaciones'),
(7, 'Limpieza del refrigerador'),
(8, 'Limpieza de alfombras'),
(9, 'Lavado de pared'),
(10, 'Limpieza de gabinetes'),
(11, 'Cambio de ropa de cama'),
(12, 'Limpieza de sótanos'),
(13, 'Lavandería'),
(14, 'Aspirar y / o trapear'),
(15, 'Limpiar el polvo'),
(16, 'Limpieza de mudanzas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_provincia`
--

CREATE TABLE `avs_provincia` (
  `prov_id` int(10) NOT NULL,
  `prov_nom` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_reviews`
--

CREATE TABLE `avs_reviews` (
  `avvs_revi_id` int(11) NOT NULL,
  `avvs_revi_per_id` int(11) NOT NULL,
  `avvs_revi_jefe_id` int(11) NOT NULL,
  `avvs_revi_nom` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avs_reviews`
--

INSERT INTO `avs_reviews` (`avvs_revi_id`, `avvs_revi_per_id`, `avvs_revi_jefe_id`, `avvs_revi_nom`) VALUES
(1, 1, 2, 'Buen Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_service`
--

CREATE TABLE `avs_service` (
  `ser_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ser_name` varchar(135) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avs_service`
--

INSERT INTO `avs_service` (`ser_id`, `cat_id`, `ser_name`) VALUES
(1, 1, 'Nanas'),
(2, 1, 'Guarderia'),
(3, 1, 'Tutoria'),
(4, 1, 'Necesidades Especiales'),
(5, 2, 'Cuidado de Adulto Mayor'),
(6, 2, 'Hands on care'),
(7, 3, 'Cuidado de macotas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_usuarios`
--

CREATE TABLE `avs_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `hab` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_usuarios`
--

INSERT INTO `avs_usuarios` (`id_usuario`, `nom`, `pass`, `hab`) VALUES
(1, 'sys', 'mkzf2018', 'SI'),
(2, 'sys1', '2018', 'SI'),
(3, 'admin', 'admin', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avs_usuarios_menus`
--

CREATE TABLE `avs_usuarios_menus` (
  `id_usuario` int(11) NOT NULL,
  `id_sm` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avs_usuarios_menus`
--

INSERT INTO `avs_usuarios_menus` (`id_usuario`, `id_sm`, `valor`) VALUES
(1, 6, 1),
(1, 5, 1),
(1, 4, 1),
(1, 3, 1),
(1, 2, 1),
(1, 1, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(2, 6, 1),
(2, 7, 1),
(4, 1, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(4, 6, 0),
(4, 7, 1),
(1, 7, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_avs_mem`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_avs_mem` (
`IDM` int(11)
,`ME` varchar(255)
,`COL` int(11)
,`IDU` int(11)
,`VA` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_avs_men`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_avs_men` (
`IDM` int(11)
,`ME` varchar(255)
,`COL` int(11)
,`MO` int(11)
,`ML` int(11)
,`IDS` int(11)
,`SM` varchar(255)
,`UR` varchar(255)
,`SO` float
,`SL` int(11)
,`VA` int(11)
,`IDU` int(11)
,`USU` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_avvs_jefe_mensaje`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_avvs_jefe_mensaje` (
`distri_id` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `view_avs_mem`
--
DROP TABLE IF EXISTS `view_avs_mem`;

CREATE VIEW `view_avs_mem`  AS  select `avs_menu`.`id_menu` AS `IDM`,`avs_menu`.`nombre` AS `ME`,`avs_menu`.`col` AS `COL`,`avs_usuarios_menus`.`id_usuario` AS `IDU`,`avs_usuarios_menus`.`valor` AS `VA` from (((`avs_menus` join `avs_menu` on((`avs_menu`.`id_menu` = `avs_menus`.`id_menu`))) join `avs_usuarios_menus` on((`avs_menus`.`id` = `avs_usuarios_menus`.`id_sm`))) join `avs_usuarios` on((`avs_usuarios`.`id_usuario` = `avs_usuarios_menus`.`id_usuario`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_avs_men`
--
DROP TABLE IF EXISTS `view_avs_men`;

CREATE VIEW `view_avs_men`  AS  select `avs_menu`.`id_menu` AS `IDM`,`avs_menu`.`nombre` AS `ME`,`avs_menu`.`col` AS `COL`,`avs_menu`.`ord` AS `MO`,`avs_menu`.`nl` AS `ML`,`avs_menus`.`id` AS `IDS`,`avs_menus`.`sm` AS `SM`,`avs_menus`.`url` AS `UR`,`avs_menus`.`orden` AS `SO`,`avs_menus`.`nl` AS `SL`,`avs_usuarios_menus`.`valor` AS `VA`,`avs_usuarios_menus`.`id_usuario` AS `IDU`,`avs_usuarios`.`nom` AS `USU` from (((`avs_usuarios_menus` join `avs_menus` on((`avs_menus`.`id` = `avs_usuarios_menus`.`id_sm`))) join `avs_menu` on((`avs_menus`.`id_menu` = `avs_menu`.`id_menu`))) join `avs_usuarios` on((`avs_usuarios_menus`.`id_usuario` = `avs_usuarios`.`id_usuario`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_avvs_jefe_mensaje`
--
DROP TABLE IF EXISTS `view_avvs_jefe_mensaje`;

CREATE VIEW `view_avvs_jefe_mensaje`  AS  select `avs_distritos`.`distri_id` AS `distri_id` from `avs_distritos` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avs_amascasa`
--
ALTER TABLE `avs_amascasa`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indices de la tabla `avs_asistente_personal`
--
ALTER TABLE `avs_asistente_personal`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indices de la tabla `avs_auxiliar`
--
ALTER TABLE `avs_auxiliar`
  ADD PRIMARY KEY (`id_aux`);

--
-- Indices de la tabla `avs_boss`
--
ALTER TABLE `avs_boss`
  ADD PRIMARY KEY (`bos_id`);

--
-- Indices de la tabla `avs_category`
--
ALTER TABLE `avs_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `avs_departamento`
--
ALTER TABLE `avs_departamento`
  ADD PRIMARY KEY (`depa_id`);

--
-- Indices de la tabla `avs_distritos`
--
ALTER TABLE `avs_distritos`
  ADD PRIMARY KEY (`distri_id`);

--
-- Indices de la tabla `avs_employee`
--
ALTER TABLE `avs_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indices de la tabla `avs_j1_child_nana`
--
ALTER TABLE `avs_j1_child_nana`
  ADD PRIMARY KEY (`na1_id`);

--
-- Indices de la tabla `avs_j1_home_housekeeper`
--
ALTER TABLE `avs_j1_home_housekeeper`
  ADD PRIMARY KEY (`hou_id`);

--
-- Indices de la tabla `avs_j1_pet_petsitter`
--
ALTER TABLE `avs_j1_pet_petsitter`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indices de la tabla `avs_j2_child_daycare`
--
ALTER TABLE `avs_j2_child_daycare`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indices de la tabla `avs_j2_pet_groomer`
--
ALTER TABLE `avs_j2_pet_groomer`
  ADD PRIMARY KEY (`gr_id`);

--
-- Indices de la tabla `avs_j3_child_tutoring_a`
--
ALTER TABLE `avs_j3_child_tutoring_a`
  ADD PRIMARY KEY (`tl_id`);

--
-- Indices de la tabla `avs_j3_child_tutoring_b`
--
ALTER TABLE `avs_j3_child_tutoring_b`
  ADD PRIMARY KEY (`tlb_id`);

--
-- Indices de la tabla `avs_j3_home_passintant`
--
ALTER TABLE `avs_j3_home_passintant`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indices de la tabla `avs_j4_child_sneeds`
--
ALTER TABLE `avs_j4_child_sneeds`
  ADD PRIMARY KEY (`sn_id`);

--
-- Indices de la tabla `avs_j4_home_errandsojobs`
--
ALTER TABLE `avs_j4_home_errandsojobs`
  ADD PRIMARY KEY (`eoj_id`);

--
-- Indices de la tabla `avs_jobmessage`
--
ALTER TABLE `avs_jobmessage`
  ADD PRIMARY KEY (`pjm_id`);

--
-- Indices de la tabla `avs_language`
--
ALTER TABLE `avs_language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indices de la tabla `avs_menu`
--
ALTER TABLE `avs_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `avs_menus`
--
ALTER TABLE `avs_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avs_personal_info1`
--
ALTER TABLE `avs_personal_info1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avs_personal_info2`
--
ALTER TABLE `avs_personal_info2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avs_provincia`
--
ALTER TABLE `avs_provincia`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indices de la tabla `avs_reviews`
--
ALTER TABLE `avs_reviews`
  ADD PRIMARY KEY (`avvs_revi_id`);

--
-- Indices de la tabla `avs_service`
--
ALTER TABLE `avs_service`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indices de la tabla `avs_usuarios`
--
ALTER TABLE `avs_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avs_amascasa`
--
ALTER TABLE `avs_amascasa`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `avs_asistente_personal`
--
ALTER TABLE `avs_asistente_personal`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `avs_boss`
--
ALTER TABLE `avs_boss`
  MODIFY `bos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `avs_departamento`
--
ALTER TABLE `avs_departamento`
  MODIFY `depa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `avs_language`
--
ALTER TABLE `avs_language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `avs_personal_info1`
--
ALTER TABLE `avs_personal_info1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `avs_personal_info2`
--
ALTER TABLE `avs_personal_info2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `avs_provincia`
--
ALTER TABLE `avs_provincia`
  MODIFY `prov_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `avs_reviews`
--
ALTER TABLE `avs_reviews`
  MODIFY `avvs_revi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
