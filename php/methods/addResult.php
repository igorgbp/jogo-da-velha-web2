<?php

require_once '../dao/daoJogo.php';
require_once '../model/jogo.php';
require_once '../connection.php';

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$jogador1_name = filter_input(INPUT_POST, 'jo1');
$jogador2_name = filter_input(INPUT_POST, 'jo2');
$vencedor_name = filter_input(INPUT_POST, 'venc');

$jogoInst = new Jogo();
$daoJogo = new DaoJogo();
$jogoInst->setJogador1($jogador1_name);
$jogoInst->setJogador2($jogador2_name);
$jogoInst->setVencedor($vencedor_name);

$daoJogo->addResult($jogoInst);

header('Location: ../../game/index.html?jogador1='.$jogador1_name.'&jogador2='.$jogador2_name);
