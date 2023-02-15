<?php
require_once '../dao/daoJogo.php';
require_once '../model/jogo.php';
require_once '../connection.php';
error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    // require_once( "sample.php" );
$jogador1_name = filter_input(INPUT_POST, 'jogador1');
$jogador2_name = filter_input(INPUT_POST, 'jogador2');
echo ($jogador1_name );
var_dump($jogador1_name);


$jogoInst = new Jogo();
$daoJogo = new DaoJogo();
$b = strval($jogador1_name);
$jogoInst->setJogador1($b);
$jogoInst->setJogador2('jogador2_name');
$jogoInst->setVencedor('asdf');

$daoJogo->addResult($jogoInst);

// header('Location: ../../game/index.html');
