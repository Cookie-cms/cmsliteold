<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
require_once $_SERVER['DOCUMENT_ROOT'] . "/define.php";

session_start();


require_once __ML__ . "/configs/config.inc.php";


try {
    global $debugSetting, $developmentSetting;
    
    $debugSetting = $DEBUG['debug'];
    $developmentSetting = $DEBUG['development'];

    // Rest of your code using the settings
} catch (Exception $e) {
    echo 'Exception caught: ' . $e->getMessage();
}

$requestUri = $_SERVER['REQUEST_URI'];
$uriSegments = explode('/', trim($requestUri, '/'));
$page = isset($uriSegments[0]) && $uriSegments[0] !== '' ? $uriSegments[0] : 'index';


$templatePath = __DIR__ . "/template/pages/{$page}.php";
$corePagePath = __DIR__ . "/engine/pages/{$page}.php";



// $corePagePath = __DIR__ . "/core/{$page}/main.php";

 if ($debugSetting) {
    echo "Template Path: {$templatePath}<br>"; // Debug: Check the path to the page
    echo "Core Page Path: {$corePagePath}<br>"; // Debug: Check the path to the core page
    echo "Requested URI: {$requestUri}<br>"; // Debug: Output the requested URI
 }



    if (file_exists($templatePath)) {
        include $corePagePath;
        include __TD__ . 'inc/header.php';
        include $templatePath;
        include __TD__ . 'inc/footer.php';

    } else {
        echo '404 - Page Not Found';
    }

?>
