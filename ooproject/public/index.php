<?php 

// var_dump($GLOBALS);
// chage to uri request ?page=blog to /blog
// pretty url --> add .htaccess
// to get uri request value
// var_dump($_SERVER);
/****
*
* URI Reading
*/

define('DD', realpath(__DIR__ . "/..")); 

require DD. "/vendor/autoload.php";



$request_uri = $_SERVER['REQUEST_URI']; 
$script_name = $_SERVER['SCRIPT_NAME'];


//Change to Array (/ ko phae pyit tar)
$e_request_uri = explode("/", $request_uri);
$e_script_name = explode("/", $script_name);
//var_dump($e_request_uri);
//var_dump($e_script_name);


// Aray greater thae ka nae a tae ko note tar
$request_uri = array_diff($e_request_uri, $e_script_name);
//var_dump($request_uri);

$o_request_uri = array_values($request_uri); //array key toe ko seat tar

//var_dump($o_request_uri);


if(empty($o_request_uri)){
	$route = '/';
}else{
	$route = $o_request_uri[0];
	var_dump($route);
}
 
$routes = include DD. "/app/routes.php";





/*$e_routes = explode("@", $routes['']);
var_dump($e_routes);
call_user_func_array([new $e_routes[0], $e_routes[1]], array());*/

// Route Resolving
if(array_key_exists($route, $routes)) {
	array_shift($o_request_uri); // remove controller
	if(Helper::is_routeWithParameters($routes, $route) == Helper::is_uriWithPareamenters($o_request_uri)) {
		$e_routes = explode("@", $routes[$route]['controller']);
	call_user_func_array([new $e_routes[0], $e_routes[1]], $o_request_uri);
	} else {
		echo "404";
	}
} else {
	echo "404";
}