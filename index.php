<?php
  header("Location: public/views/login.php");
  exit;
// Cargar archivo de configuración de la base de datos
require_once 'database/db.php';

// Incluir el autoloader y otros archivos necesarios
require_once 'config/ClassLoader.php';

// Incluir archivo de configuración

require_once 'config.php';

// Obtener la ruta solicitada y el verbo HTTP
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Definir la URL base de tu aplicación
$baseUrl = '/Programas/TesisPa';

// Extraer la parte relativa de la URI eliminando la base URL
$request = str_replace($baseUrl, '', $request);

// Definir las rutas y los controladores correspondientes
require_once 'config/routes.php';

// Verificar si la ruta solicitada existe en las rutas definidas
if (!empty($request) and !empty($routes) && !empty($routes[$request])) {
    $route = $routes[$request];

    // Obtener el nombre del controlador y el método correspondiente a la ruta solicitada
    $controllerName = $route['controller'];
    $methodName = $route['method'];

    // Verificar si el verbo HTTP es compatible con la ruta
    if (in_array($method, $route['verbs'])) {
        // Incluir el archivo del controlador
        require_once 'controllers/' . $controllerName . '.php';

        // Crear una instancia del controlador
        $controller = new $controllerName();

        // Verificar si el método existe en el controlador
        if (method_exists($controller, $methodName)) {
            // Ejecutar el método correspondiente en el controlador
            $controller->$methodName();
        } else {
            // Método no encontrado en el controlador
            echo 'Error: Método no encontrado';
        }
    } else {
        // Verbo HTTP no compatible con la ruta
        echo 'Error: Verbo HTTP no compatible con la ruta';
    }
} else {
    // Mostrar una página de error o redireccionar a una página predeterminada
    echo '404';
}
