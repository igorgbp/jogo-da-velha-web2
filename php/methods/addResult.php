<?php
echo (integer)ini_get('display_errors');
$jogador1_name = filter_input(INPUT_POST, 'jogador1');
$jogador2_name = filter_input(INPUT_POST, 'jogador2');
echo ($jogador1_name );

header('Location: ../../game/index.html');
