<?php

define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');

function WSErro($ErrMsg, $ErrNo, $ErrDie = null){
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT
           : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class='trigger {$CssClass}'>{$ErrMsg}<span class='ajax_close'></span></p>";
    
    if($ErrDie){
        die;
    }
}

function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
 $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
 echo "<p class='trigger {$CssClass}'>";
 echo "<b> Erro na linha: {$ErrLine} ::</b> {$ErrMsg}<br>";
 echo "<small>{$ErrFile}</small><p>";
 echo "<span class='ajax_close'></span></p>";

    
    if( $ErrNo == E_USER_ERROR){
        die;
    }
    
    set_error_handler('PHPErro');
}
?>