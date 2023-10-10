<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/* Aqui se asigna la ruta por defecto, en este caso es 'Proyecto_controllers' */

$route['default_controller'] = 'proyecto_controller';

$route['index'] = 'proyecto_controller';

/**$route['consulta'] = 'proyecto_controller/contacto';**/

$route['registrar'] = 'usuarios_controller/registrar_usuario';
$route['inicio_sesion'] = 'usuarios_controller/login';
$route['ingresar'] = 'usuarios_controller/iniciar_sesion';
$route['salir'] = 'usuarios_controller/cerrar_sesion';

$route['administrador'] = 'admin_controller/usuario_admin';

$route['agregar'] = 'libro_controller/form_agregar_libro';
$route['insertar_libro'] = 'libro_controller/registrar_libro';

$route['gestionar'] = 'libro_controller/gestionar_libros';

$route['productos'] = 'proyecto_controller/catalogo';

$route['contacto'] = 'consultas_controller/contacto';
$route['consultar'] = 'consultas_controller/realizar_consulta';
$route['listarCons'] = 'consultas_controller/listar_consultas';

$route['carrito'] = 'carrito_controller/ver_carrito';
$route['listarVen'] = 'ventas_controller/ver_ventas';


$route ['editar'] = 'libro_controller/editar_libro/$row -> libro_id';
$route['actualizar'] = 'libro_controller/actualizar_libro/$libro_id';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



