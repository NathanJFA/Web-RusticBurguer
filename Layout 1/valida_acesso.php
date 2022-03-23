<?php

#verifica se o CLIENTE está autenticado -> prevenção de acesso indevido
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'true'){
    header('Location: ../login_cliente.php?login_cliente=erro_acesso_indevido');
}

?>