<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBSA', 'crudphp');

function __autoload($Class) {

    $cDir = ['Conexao'];
    $iDir = null;

    foreach ($cDir as $dirName) {
        if (!$iDir && file_exists("..\\" . __DIR__ . "\\{$dirName}\\{$Class}.class.php") && !is_dir(__DIR__ . "\\{$dirName}\\{$Class}.class.php")) {
            include_once("..\\" . __DIR__ . "\\{$dirName}\\{$Class}.class.php");
            $iDir = true;
        }
    }

    if (!$iDir) {
        trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
        die;
    }
}
?>