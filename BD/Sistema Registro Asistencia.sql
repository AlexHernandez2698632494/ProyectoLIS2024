CREATE database sistemaasistencia;
use sistemaasistencia;

CREATE TABLE Administrador(
idadministrador int primary key auto_increment,
nombreAdministrador varchar(255) not null,
apellidoAdministrador varchar(255) not null,
duiAdministrador varchar(10) not null,
telefonoAdministrador varchar(10) not null,
correoAdministrador text default  NULL,
estadoEliminacion int not null default 1 );

CREATE TABLE Estudiante(
idEstudiante int primary key auto_increment,
nombreEstudiante varchar(255) not null,
apellidoEstudiante varchar(255) not null,
duiEstudiante varchar(10) not null,
telefonoEstudiante varchar(10) not null,
correoEstudiante text default  NULL,
carrera text default  null,
direccion text default  null,
estadoEliminacion int not null default 1 );

CREATE TABLE InvitadoInstitucion(
idInvitadoInstitucion int primary key auto_increment,
nombreInvitadoInstitucion varchar(255) not null,
apellidoInvitadoInstitucion varchar(255) not null,
duiInvitadoInstitucion varchar(10) not null,
telefonoInvitadoInstitucion varchar(10) not null,
correoInvitadoInstitucion text default  NULL,
direccionInvitadoInstitucion text default  null,
nombreinstitucion text default  null,
estadoEliminacion int not null default 1 );

CREATE TABLE Invitado(
idInvitado int primary key auto_increment,
nombreInvitado varchar(255) not null,
apellidoInvitado varchar(255) not null,
duiInvitado varchar(10) not null,
telefonoInvitado varchar(10) not null,
correoInvitado text default  NULL,
direccionInvitado text default  null,
estadoEliminacion int not null default 1 );

CREATE TABLE Eventos(
idInvitado int primary key auto_increment,
NombreEvento varchar(255) not null,
lugar text default null,
fecha DATE NOT NULL,
hora TIME NOT NULL ,
descripcion text default null,
precio varchar(8) not null,
imagen varchar(255) not null ,
estadoEliminacion int not null default 1 ); 

CREATE TABLE `Usuario`
(
  `idUsuario` varchar(10) PRIMARY KEY,
  `usuario` varchar(500) NOT NULL,
  `password` text NOT NULL,
  `nivel` int
);

CREATE TABLE GRUPO(
nombreInstitucion text default null,
telefono varchar(10) not null,
descripcion text default null,
logo varchar(255) not null,
ninos int not null,
ninas int not null,
acompanantes int not null ); 

CREATE TABLE RESERVA(
idSolicitud int primary key not null auto_increment,
`idUsuario` varchar(10) not null,
fecha date not null,
estado int not null default 1 ); 