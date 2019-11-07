<?php
//Funciona psr7 moveiendo loss archovos a la raiz de htdocs
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::create(__DIR__.'/..');
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
  'driver'    => 'mysql',
  'host'      => getenv('DB_HOST'),
  'database'  => getenv('DB_NAME'),
  'username'  => getenv('DB_USER'),
  'password'  => getenv('DB_PASS'),
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
]);
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
  $_SERVER,
  $_GET,
  $_POST,
  $_COOKIE,
  $_FILES
);

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();

$map->get('index', '/', [
  'controller' => 'App\Controllers\IndexController',
  'action' => 'indexAction'
]);
$map->get('addJobs', '/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJoobAction'
]);
$map->post('saveJobs', '/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJoobAction'
]);


$map->get('addUsers', '/users/add', [
  'controller' => 'App\Controllers\UserController',
  'action' => 'getAddUser'
]);
$map->post('saveUser', '/users/add', [
  'controller' => 'App\Controllers\UserController',
  'action' => 'postSaveUser'
]);

$map->get('loginForm', '/login', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'getLogin'
]);
$map->get('logout', '/logout', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'getLogout'
]);
$map->post('auth', '/auth', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'postLogin'
]);
$map->get('admin', '/admin', [
  'controller' => 'App\Controllers\AdminController',
  'action' => 'getIndex',
  'auth' => true
]);




function printElement($el)
{
  // if($job->visible == false) {
  //   return;
  //}
  echo '<li class="work-position">';
  echo '<h5>' . $el->title . '</h5>';
  echo '<p>' . $el->description . '</p>';
  echo '<p>' . $el->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route) {
  // get the first of the best-available non-matched routes
  echo ('No hay ruta');
} else {
  $handlerData = $route->handler;
  $controllerName = $handlerData['controller'];
  $actionName =  $handlerData['action'];

  $needsAuth = $handlerData['auth'] ?? false;
  $sessionUserId = $_SESSION['userId'] ?? null;

  if ($needsAuth && !$sessionUserId) {
    echo 'protected route';
  }

  $controller = new $controllerName;
  $response = $controller->$actionName($request);

  foreach ($response->getHeaders() as $name => $values) {
    foreach ($values as $value) {
      header(sprintf('%s: %s', $name, $value), false);
    }
  }
  http_response_code($response->getStatusCode());
  echo $response->getBody();
}
