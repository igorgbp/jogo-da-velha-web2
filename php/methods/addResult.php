<?php
echo (integer)ini_get('display_errors');
$jogador1_name = filter_input(INPUT_POST, 'jo1');
$jogador2_name = filter_input(INPUT_POST, 'jo2');
$venc_name = filter_input(INPUT_POST, 'venc');
echo ($jogador1_name );

require_once('../dao/daoJogo.php');
require_once('../model/jogo.php');



$j = new Jogo();
$j -> setJogador1($jogador1_name);
$j -> setJogador2($jogador2_name);
$j -> setVencedor($venc_name);
$daoj = new DaoJogo();
$daoj -> addResult($j);


header('Location: ../../game/index.html');