<?php
class Grupo{
    private $codigogp;
    private $nome;

    public function __construct($cgp,$nom = null){
        $this->codigogp = $cgp;
        $this->nome = $nom;

    }

	/**
	 * @return mixed
	 */
	public function getCodigogp() {
		return $this->codigogp;
	}
	
	/**
	 * @param mixed $codigogp 
	 * @return self
	 */
	public function setCodigogp($codigogp): self {
		$this->codigogp = $codigogp;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
}