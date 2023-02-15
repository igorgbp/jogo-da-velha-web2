<?php

class Jogo {
    private $id;
    private $jogador1;
    private $jogador2;
    private $vencedor;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of jogador1
     */ 
    public function getJogador1()
    {
        return $this->jogador1;
    }

    /**
     * Set the value of jogador1
     *
     * @return  self
     */ 
    public function setJogador1($jogador1)
    {
        $this->jogador1 = $jogador1;

        return $this;
    }

    /**
     * Get the value of jogador2
     */ 
    public function getJogador2()
    {
        return $this->jogador2;
    }

    /**
     * Set the value of jogador2
     *
     * @return  self
     */ 
    public function setJogador2($jogador2)
    {
        $this->jogador2 = $jogador2;

        return $this;
    }

    /**
     * Get the value of vencedor
     */ 
    public function getVencedor()
    {
        return $this->vencedor;
    }

    /**
     * Set the value of vencedor
     *
     * @return  self
     */ 
    public function setVencedor($vencedor)
    {
        $this->vencedor = $vencedor;

        return $this;
    }
}