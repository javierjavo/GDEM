-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2018 a las 23:33:07
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `probem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguaje`
--

CREATE TABLE `lenguaje` (
  `ID` int(11) NOT NULL,
  `en` varchar(10000) NOT NULL,
  `es` varchar(10000) NOT NULL,
  `page` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lenguaje`
--

INSERT INTO `lenguaje` (`ID`, `en`, `es`, `page`) VALUES
(1, 'welcome', 'Bienvenido', 'home'),
(2, 'Show/Hide', 'Mostrar/Ocultar', 'index'),
(3, 'Welcome', 'Bienvenido', 'index'),
(4, 'Private Policy', 'Aviso de Privacidad', 'pie'),
(5, 'All rights reserved', 'Todos los derechos reservados', 'pie'),
(6, 'The Binational Program of Migrant Education in the State, through the implementation of lines of action and development of educational strategies, promotes access to greater and better opportunities so that migrant students do not interrupt the continuity and achieve the conclusion of their studies and be incorporated in an appropriate and timely manner to basic education schools in the state.', 'El Programa Binacional de Educación Migrante en el Estado, a través de la implementación de líneas de acción y desarrollo de estrategias educativas, promueve el acceso a mayores y mejores oportunidades para que los alumnos migrantes no interrumpan la continuidad y logren la conclusión de sus estudios y se incorporen de manera adecuada y oportuna a las escuelas de educación básica en la entidad.', 'que'),
(7, 'History', 'Historia', 'historia'),
(56, 'Objectives', 'Objetivos', 'objetivo'),
(57, 'National Objectives', 'Objetivos Nacionales', 'objetivo'),
(58, 'what is PROBEMJal?', '¿Que es PROBEMJal?', 'que'),
(59, 'Home', 'Inicio', 'header'),
(60, 'What is PROBEMJal?', '¿Que es PROBEMJal?', 'header'),
(61, 'History', 'Historia', 'header'),
(62, 'Objectives', 'Objetivos', 'header'),
(63, 'Students', 'Estudiantes', 'header'),
(64, 'Themes', 'Ejes Tematicos', 'header'),
(65, 'Information and sharing', 'Informaci&oacuten y difusi&oacuten', 'header'),
(66, 'Schools Access ', 'Acceso a las escuelas', 'header'),
(67, 'Education Support', 'Apoyos Academicos', 'header'),
(68, 'Training and exchanges', 'Capacitaci&oacuten e Intercambios', 'header'),
(69, 'Teachers', 'Maestros', 'header'),
(70, 'Success cases', 'Casos de exito', 'header'),
(71, 'PROBEM Directory', 'Directorio PROBEM', 'header'),
(72, 'Contact us', 'Contactanos', 'header'),
(73, 'Show/Hide', 'Mostrar/Ocultar', 'header'),
(74, 'Home', 'Inicio', 'home'),
(8, 'Mission', 'Misi&oacuten', 'misionVision'),
(9, 'The Binational Migrant Education Program Mexico-United States PROBEM through its ethical sense and vocation of service:', 'El Programa Binacional de Educación Migrante México-Estados\r\nUnidos PROBEM a través de su sentido ético y vocación de servicio:', 'misionVision'),
(10, 'It provides diverse educational, social and cultural support to this population in a situation of vulnerability.', 'Proporciona apoyos educativos, sociales y culturales diversos a\r\nesta población en situación de vulnerabilidad.', 'misionVision'),
(11, 'It provides the continuity, access, permanence and completion of\r\nstudies to migrant students between Mexico and the United States of\r\nAmerica.', 'Facilita la continuidad, acceso, permanencia y culminación de los\r\nestudios a los alumnos migrantes entre México y Estados Unidos de\r\nAmérica.', 'misionVision'),
(12, 'It fosters spaces for reflection and exchange of experiences between\r\nteachers and administrators of Jalisco and the United States of America\r\nfocused on strengthening the identity, values ??and self-esteem of\r\nbinational migrant students improving their performance\r\nacademic and quality of life with equity and relevance.', 'Propicia espacios de reflexión e intercambio de experiencias entre\r\ndocentes y administradores de Jalisco y Estados Unidos de América\r\nenfocados al fortalecimiento de la identidad, valores y autoestima de\r\nlos estudiantes migrantes binacionales mejorando su rendimiento\r\nacadémico y calidad de vida con equidad y pertinencia.', 'misionVision'),
(13, 'Vision', 'Visión', 'misionVision'),
(14, 'To be an institutional program that through its projects, strategies and lines of action be recognized for offering support to facilitate\r\ncontinuity, access, permanence and completion\r\nof basic education, upper secondary and higher education for the \r\nbinational migrant population; that allows them to receive\r\nan integral education in multicultural environments,\r\nwith quality, equity and relevance without having to suffer\r\nrejections, mistreatment, discrimination and / or \r\nunnecessary bureaucratic procedures', 'Ser un programa institucional que a través de sus\r\nproyectos, estrategias y líneas de acción sea\r\nreconocido por ofrecer apoyos para facilitar la\r\ncontinuidad, el acceso, la permanencia y culminación\r\nde la educación básica, media superior y superior de la\r\npoblación migrante binacional; que les permita recibir\r\nuna educación integral en ambientes multiculturales,\r\ncon calidad, equidad y pertinencia sin tener que sufrir\r\nrechazos, maltrato, discriminación y/o trámites\r\nburocráticos innecesarios.', 'misionVision'),
(15, 'Contribute to guarantee the educational attention of students and binational migrant families Mexico-United States, to ensure with\r\nequity, quality and relevance; continuity, access, permanence and completion of their Basic Education, Higher and Higher Education in the State of Jalisco.', 'Contribuir a garantizar la atención educativa de\r\nestudiantes y familias migrantes binacionales\r\nMéxico-Estados Unidos, para asegurar con\r\nequidad, calidad y pertinencia; la continuidad,\r\nacceso, permanencia y culminación de su\r\nEducación Básica, Media Superior y Superior en\r\nel Estado de Jalisco.', 'objetivo'),
(16, 'Carry out actions that ensure the continuity of children, youth and adults at school\r\nmigrants from both countries.', 'Realizar acciones que aseguren la continuidad escolar de los niños, jóvenes y adultos\nmigrantes de ambos países.', 'objetivo'),
(17, 'Contribute to be offered to children and young people who migrate between Mexico and the United States\r\nUnited of America quality education, equity and relevance.', 'Contribuir para que se ofrezca a los niños y jóvenes que migran entre México y Estados\nUnidos de América una educación de calidad, equidad y pertinencia.', 'objetivo'),
(18, 'Strengthen educational and sociocultural relations between Mexico and the United States of\r\nAmerica through the exchange of cultural and academic experiences with the\r\neducational authorities and teachers of both countries.', 'Fortalecer las relaciones educativas y socioculturales entre México y Estados Unidos de\r\nAmérica a través del intercambio de experiencias culturales y académicas con las\r\nautoridades educativas y docentes de ambos países.', 'objetivo'),
(19, 'Strengthen knowledge of history, culture, values ??and national traditions,\r\nin students of Mexican origin who migrate between Mexico and the United States of America.', 'Reforzar el conocimiento de la historia, la cultura, los valores y las tradiciones nacionales,\r\nen los alumnos de origen mexicano que migran entre México y Estados Unidos de América.', 'objetivo'),
(20, 'Conduct educational research to develop pedagogical proposals, strategies and\r\nactions for the benefit of the migrant population.', 'Realizar investigaciones educativas para desarrollar propuestas pedagógicas, estrategias y acciones en beneficio de la población migrante.', 'objetivo'),
(21, 'Permanently disseminate the objectives and actions of PROBEM among students, Teachers, parents, state, municipal and district authorities and organizations educational and social issues of both countries.', 'Difundir permanentemente los objetivos y acciones del PROBEM entre educandos,\r\ndocentes, padres de familia, autoridades estatales, municipales, distritales y organizaciones educativas y sociales de ambos países.', 'objetivo'),
(22, 'To permanently and comprehensively evaluate the fulfillment of its objectives in order to\r\nguarantee, quantitatively and qualitatively, its functionality and educational impact in the\r\ntarget population of the Program.', 'Evaluar de forma permanente e integral el cumplimiento de sus objetivos a fin de garantizar, cuantitativa y cualitativamente, su funcionalidad e impacto educativo en la\r\npoblación objetivo del Programa.', 'objetivo'),
(23, 'Actions', 'Acciones', 'infoDifusion'),
(24, 'Prepare the annual work schedule for the development and achievement of\r\nthe objectives of the project.', 'Elaborar la programacion anual de trabajo para el desarrollo y logro de los objetivos del proyecto.', 'infoDifusion'),
(25, 'Disseminate permanently the results and advances of the projects and actions of the PROBEM in the Entity and promote\r\nsocial participation to increase the use of the Document of Transfer of the Binational Migrant Student Mexico-USA.', 'Difundir de manera permanente los resultados y avances de los proyectos y acciones del PROBEM en la Entidad y promover la participacion social para incrementar el uso del Documento de Transferencia del estudiante Migrante Binacional Mexico-EUA.', 'infoDifusion'),
(26, 'Design, edit, promote and distribute graphic materials to give know the programs that the PROBEM has for the population\r\nbinational migrant, teachers, educational structure and society in\r\ngeneral', 'Disenar, editar, promover y distribuir materiales graficos para dar a\nconocer los programas con que cuenta el PROBEM a la poblacion\nmigrante binacional, docentes, estructura educativa y sociedad en\ngeneral.', 'infoDifusion'),
(27, 'Promote and disseminate in mass media and electronic\r\n(press, radio and television) and through the educational structure, the\r\nservices granted by the Jalisco Secretary of Education within the framework of\r\nPROBEM, for the benefit of the binational migrant population.', 'Promover y difundir en medios de comunicacion masiva y electronicos (prensa, radio y television) y a traves de la estructura educativa, los servicios que otorga la Secretaria de Educacion Jalisco en el marco del PROBEM, en beneficio de la poblacion migrante binacional.', 'infoDifusion'),
(28, 'To produce radio and television spots.', 'Producir spots radiofonicos y televisivos.', 'infoDifusion'),
(29, 'Promote the holding of press conferences and meetings\r\nof radio and television spaces (interviews or notes\r\ninformation within news programs or educational programs,\r\nprogrammed in the medium term), in coordination with the\r\nSocial Communication Department of the SEJ and the Council\r\nMexican of the PROBEM.', 'Promover la realizacion de ruedas de prensa y concertacion de espacios de radio y television (entrevistas o notas informativas dentro de noticiarios o programas educativos, programadas a mediano plazo), en coordinacion con la Direccion de Comunicacion Social de la SEJ y el Consejo Mexicano del PROBEM.', 'infoDifusion'),
(30, 'Organize and participate in exhibitions, congresses and\r\nPROBEM meetings.', 'Organizar y participar en exposiciones, congresos y reuniones del PROBEM.', 'infoDifusion'),
(31, 'Collaborate with state and federal authorities, as well as SRE and the SEP in the creation of communication products\r\nof the PROBEM.', 'Colaborar con autoridades estatales y federales, asi como la SRE y la SEP en la creacion de productos comunicacionales del PROBEM.', 'infoDifusion'),
(32, 'Sort, analyze and edit graphic video material\r\nrelated to the sociocultural context of the population\r\nbinational migrant Mexico - USA', 'Clasificar, analizar y editar material video grafico relacionado con el contexto sociocultural de la poblacion migrante binacional Mexico - EUA.', 'infoDifusion'),
(33, 'Prepare the proposal for permanent updating of the Web page of PROBEMJAL on the WEB site of the Secretariat\r\nof Education Jalisco and the SEP.', 'Elaborar la propuesta de actualizacion permanente de la pagina Web del PROBEMJAL en el sitio WEB de la Secretaria de Educacion Jalisco y de la SEP.', 'infoDifusion'),
(34, 'Attend and keep updated the Social Networks', 'Atender y mantener actualizadas las Redes Sociales', 'infoDifusion'),
(35, 'Keep systematic record and submit quarterly report and\r\nof the activities carried out, to the State Coordination\r\nof the Program.', 'Llevar registro sistematico y presentar informe trimestral y\nanual de las actividades realizadas, a la Coordinacion Estatal\ndel Programa.', 'infoDifusion'),
(36, 'The others entrusted by the Coordination of\r\nPROBEMJAL, depending on the needs of support to the\r\nown coordination and other institutional projects.', 'Las demas que encomiende la Coordinacion del\nPROBEMJAL, en funcion de las necesidades de apoyo a la\npropia coordinacion y demas proyectos institucionales.', 'infoDifusion'),
(37, 'Objective', 'Objetivo', 'capacitacion'),
(38, 'Strengthen the participation of Mexican teachers in the programs\r\nof the Mexico-USA Educational Collaboration in order to promote\r\nformative experience that contributes to improve school performance\r\nof binational migrant students both in the schools of\r\nour country like the United States of America.', 'Fortalecer la participacion de los maestros mexicanos en los programas\nde Colaboracion educativa México-EUA a fin de propiciarles una\nexperiencia formativa que contribuya a mejorar el rendimiento escolar\nde los estudiantes migrantes binacionales tanto en las escuelas de\nnuestro pais como de Estados Unidos de America.', 'capacitacion'),
(39, 'Actions', 'Acciones', 'capacitacion'),
(40, 'Prepare the annual work schedule for the development and achievement of the\r\nproject objectives.', 'Elaborar la programacion anual de trabajo para el desarrollo y logro de los\nobjetivos del proyecto.', 'capacitacion'),
(41, 'Present to the Coordination of PROBEM proposals for the development of\r\nworkshops, courses, seminars and training and updating exhibitions\r\nwith specific theme for the educational community that serves students\r\nbinational migrants and groups interested in the migratory phenomenon.', 'Presentar a la Coordinacion del PROBEM propuestas para el desarrollo de\ntalleres, cursos, seminarios y exposiciones de capacitacion y actualizacion\ncon tematica específica para la comunidad educativa que atiende a alumnos\nmigrantes binacionales y grupos interesados en el fenomeno migratorio.', 'capacitacion'),
(42, 'Support in the development of technical administrative activities for the\r\noperability of training, updating, exchange and\r\nhiring teachers.', 'Apoyar en el desarrollo de actividades tecnico administrativas para la\noperatividad de las acciones de capacitacion, actualizacion, intercambio y\ncontratacion de maestros.', 'capacitacion'),
(43, 'Receive from the State Coordination the national calls for\r\nstructure the state programs corresponding to the \"Exchange programs\"\r\nTeachers Mexico - United States \"and\" Teacher Visitors Mexico - USA \".', 'Recibir de la Coordinacion Estatal las convocatorias nacionales para\nestructurar las estatales correspondientes a los Programas de ”Intercambio de\nMaestros Mexico – Estados Unidos” y “Maestros Visitantes Mexico – EUA”.', 'capacitacion'),
(44, 'Support the necessary actions for the efficient and timely dissemination and\r\ndistribution of the calls to the corresponding levels of the\r\neducational structure in the State.', 'Apoyar las acciones necesarias para la eficiente y oportuna difusión y\r\ndistribución de las convocatorias a los niveles correspondientes de la\r\nestructura educativa en el Estado.', 'capacitacion'),
(45, 'Operationalize the general guidelines for the reception, review of applications and integration of files.', 'Operativizar los lineamientos generales para la recepción, revisión de solicitudes e integración de expedientes.', 'capacitacion'),
(46, 'Application of evaluation instruments to applicants and\r\nprocessing of the resulting information.', 'Aplicación de instrumentos de evaluación a los solicitantes y\r\nprocesamiento de la información resultante.', 'capacitacion'),
(47, 'Participate in the organization, realization and evaluation of the Workshops of\r\nState and National Training, for the participants in the programs of\r\n\"Teacher Exchange Mexico - United States\" and \"Visiting Teachers\r\nMexico- USA \".', 'Participar en la organización, realización y evaluación de los Talleres de\r\nCapacitación Estatal y Nacional, para los participantes en los programas de\r\n“Intercambio de Maestros México – Estados Unidos” y “Maestros Visitantes\r\nMéxico- EUA”.', 'capacitacion'),
(48, 'Conduct state, regional and other workshops that are necessary for\r\ninform and train teachers that serve migrant population\r\nbinational Jalisco-USA.', 'Realizar talleres estatales, regionales y demás que sean necesarios para\r\ninformar y capacitar a maestros que atienden población migrante\r\nbinacional Jalisco-EUA.', 'capacitacion'),
(49, 'Perform the administrative procedures of the participating teachers in the\r\nPrograms of \"Teacher Exchange Mexico-United States\" and\r\n\"Mexico-US Visitors Teachers Program\", for assistance to\r\ninstitutions and the corresponding School Districts.', 'Realizar los trámites administrativos de los maestros participantes en los Programas de “Intercambio de Maestros México- Estados Unidos” y “Programa de Maestros Visitantes México-EUA”, para la asistencia a las instituciones y los Distritos Escolares correspondientes', 'capacitacion'),
(50, 'Participate in state and national evaluation meetings of the Program of\r\nTeacher Exchange Mexico-USA.', 'Participar en las reuniones de evaluación estatal y nacional del Programa de\r\nIntercambio de Maestros México-EUA.', 'capacitacion'),
(51, 'Receive and integrate reports of the participation of teacher representatives\r\nof the Jalisco Educational System in the \"Teacher Exchange\" programs\r\nMexico-United States \"and\" Mexico-US Visitors Teachers \".', 'Recibir e integrar los informes de la participación de los maestros representantes\r\ndel Sistema Educativo Jalisciense en los programas de “Intercambio de Maestros\r\nMéxico-Estados Unidos” y “Maestros Visitantes México-EUA”.', 'capacitacion'),
(52, 'Coordinate the administrative activities and logistics of the Second Part of the\r\nMexico-US Teacher Exchange Program (assistance to US teachers)\r\nwho visit Jalisco in reciprocity).', 'Coordinar las actividades administrativas y la logística de la Segunda Parte del\r\nPrograma de Intercambio de Maestros México-EUA (atención a maestros de EUA\r\nque visitan Jalisco en reciprocidad).', 'capacitacion'),
(53, 'Keep a systematic record and submit a quarterly and annual report of the\r\nactivities carried out, to the State Program Coordination.', 'Llevar registro sistemático y presentar Informe trimestral y anual de las\r\nactividades realizadas, a la Coordinación Estatal del Programa.', 'capacitacion'),
(54, 'The others entrusted by the Coordination of PROBEMJAL, depending on the\r\nneeds to support the coordination itself and other projects\r\ninstitutional', 'Las demás que encomiende la Coordinación del PROBEMJAL, en función de las\r\nnecesidades de apoyo a la propia coordinación y demás proyectos\r\ninstitucionales.', 'capacitacion'),
(55, 'It arises with the objective of covering the demand of bilingual teachers that are required to attend\r\nthe educational needs of the community of Mexican origin in the United States; strengthen the\r\nknowledge of the History, Culture, Values ??and Mexican traditions in the students of origin\r\nMexican who reside in the United States; support permanent communication between teachers\r\nAmericans and Mexicans in order to share experiences in educational work;\r\npromote a training experience in Mexican teachers that allows programs to be established\r\nof educational collaboration that enrich Mexican schoolchildren in both countries; favor\r\nthe exchange of ideas, experiences and information between the educators of both countries; Y\r\nsensitize educators about educational problems that due to migratory flows,\r\nthey share Mexico and the United States.', 'Surge con el objetivo de cubrir la demanda de maestros bilingües que se requieren para atender\nlas necesidades educativas de la comunidad de origen mexicano en Estados Unidos; fortalecer el\nconocimiento de la Historia, Cultura, Valores y tradiciones mexicanas en los alumnos de origen\nmexicano que radican en Estados Unidos; apoyar la comunicación permanente entre profesores\nestadounidenses y mexicanos con el fin de compartir experiencias en el quehacer educativo;\npropiciar una experiencia formativa en los maestros mexicanos que permita establecer programas de colaboración educativa que enriquezcan a los escolares mexicanos en ambos países; favorecer\nel intercambio de ideas, experiencias e información entre los educadores de ambos países; y\nsensibilizar a los educadores sobre la problemática educativa que debido a los flujos migratorios,\ncomparten México y Estados Unidos.', 'historia'),
(75, 'welcome', 'Bienvenido', 'infoDifusionPage'),
(76, 'Home', 'Inicio', 'infoDifusionPage'),
(77, 'Information and Sharing', 'Informacion y difusion', 'infoDifusionPage'),
(78, 'welcome', 'Bienvenido', 'capacitacionPage'),
(79, 'Home', 'Inicio', 'capacitacionPage'),
(80, 'Training and Exchanges', 'Capacitacion e Intercambios', 'capacitacionPage'),
(81, 'welcome', 'Bienvenido', 'accesoEscuelas'),
(82, 'Home', 'Inicio', 'accesoEscuelas'),
(83, 'Schools Access ', 'Acceso a Escuela', 'accesoEscuelas'),
(84, 'welcome', 'Bienvenido', 'apoyosEducativos'),
(85, 'Home', 'Inicio', 'apoyosEducativos'),
(86, 'Education Support', 'Apoyo Adademico', 'apoyosEducativos'),
(87, 'Position', 'Cargo', 'directorio'),
(88, 'Contact Information', 'Informacion de contacto', 'directorio'),
(89, 'PROBEM Department Manager Mexico', 'Jefe del departamento PROBEM Mexico', 'directorio'),
(90, 'PROBEM Department Manager Jalisco', 'Jefe del departamento PROBEM Jalisco', 'directorio'),
(91, 'PROBEM Department Manager Baja California', 'Jefe del departamento PROBEM Baja California', 'directorio'),
(92, 'PROBEM Department Manager USA', 'Jefe del departamento PROBEM USA', 'directorio'),
(93, 'Directory', 'Directorio', 'directorio'),
(94, 'Contact', 'Contacto', 'contacto'),
(95, 'Name or Nickname', 'Nombre o Pseudonimo', 'contacto'),
(96, 'Current state of residence', 'Estado de residencia', 'contacto'),
(97, 'Comments', 'Comentarios', 'contacto'),
(98, 'Send Comments', 'Enviar Comentarios', 'contacto'),
(99, 'Mission & Vision', 'Mision & Vision', 'header');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
