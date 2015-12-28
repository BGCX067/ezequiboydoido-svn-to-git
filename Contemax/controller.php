<?php

/* * *********************************************************** */
/* * ************** FrontControler dos Sistemas ****************** */
/* * ************ Desenvolvido por Antônio Ezequiel ************** */
/* * *********************************************************** */

session_start();
//header("Content-Type: text/html;  charset=ISO-8859-1", true);
// Configurações do sistema
require("configuracao/configurator.php");

//inclusão das bibliotecas do Smarty
require("bibliotecas/Smarty.class.php");

$smarty = new Smarty;

$smarty->template_dir = $configurator["fisico"] . '/view/';
$smarty->compile_dir = $configurator["fisico"] . '/view_c/';
$smarty->config_dir = $configurator["fisico"] . '/configs/';
$smarty->cache_dir = $configurator["fisico"] . '/cache/';
$smarty->caching = false;

if (isset($_GET['pg'])) {
    $controller = $_GET['pg'];
} else {
    $controller = "inicial";
}

if (!file_exists($configurator["controller"] . "/" . $controller . ".php"))
    echo "erro";
else
    include $configurator["controller"] . "/" . $controller . ".php";
?>
