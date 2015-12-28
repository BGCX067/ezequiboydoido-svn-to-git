<?php

/* * *********************************************************** */
/* * *********** Arquivo de Configuração dos Sistemas ************ */
/* * ************ Desenvolvido por Antônio Ezequiel ************** */
/* * *********************************************************** */

// Configurações do sistema
require("configuracao/configurator.php");
header("location:" . $configurator["site"] . "/inicial.t&f");
?>
