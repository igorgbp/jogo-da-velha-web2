<?php
class DaoJogo
{
    public function addResult (Jogo $jogo ) {
        $sql = 'insert into jogo (jogador1, jogador2, vencedor) values (?,?,?)';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1, $jogo->getJogador1());
        $pst -> bindValue(2, $jogo->getJogador2());
        $pst -> bindValue(3, $jogo->getVencedor());
        if ($pst -> execute ()) {
            return true;
        }   else {
            return false;
        }
    }
}