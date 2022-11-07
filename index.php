<?php
require_once 'app/core/core.php';
require_once 'app/controler/homeControler.php';
require_once 'app/controler/ErroControler';
require_once 'app/model/postagem.php';
require_once 'lib/database/conection.php';
require_once 'vendor/autoload.php';

$template = file_get_contents('app/templates/estrutura.html');

ob_start();
    $core = new core;
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();

$tplpronto = str_replace('{{area dinamica}}', $saida, $template);
echo $tplpronto;