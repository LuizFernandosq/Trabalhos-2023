<?php
class Tarefa{
	private $codigota;
    private $descricao;
    public function __construct($cta,$des = null){
        $this->codigota = $cta;
		$this->descricao = $des;
    }

	/**
	 * @return mixed
	 */
	public function getDescricao() {
		return $this->descricao;
	}
	
	/**
	 * @param mixed $descricao 
	 * @return self
	 */
	public function setDescricao($descricao): self {
		$this->descricao = $descricao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCodigota() {
		return $this->codigota;
	}
	
	/**
	 * @param mixed $codigota 
	 * @return self
	 */
	public function setCodigota($codigota): self {
		$this->codigota = $codigota;
		return $this;
	}
}