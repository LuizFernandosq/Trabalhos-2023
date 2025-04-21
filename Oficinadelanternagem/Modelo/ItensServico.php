<?php

class ItensServico{
    private $codigoids;
    private $codigota;
    private $codigoser;
    private $codigogp;
    private $codigosg;
    private $codigofun;
	private $situacao;
    private $valor;

    public function __construct($cids,$cta,$cser,$cgp,$csg,$cfun,$sit,$val = null){
        $this->codigoids = $cids;
        $this->codigota = $cta;
        $this->codigoser = $cser;
        $this->codigogp = $cgp;
        $this->codigosg = $csg;
        $this->codigofun = $cfun;
		$this->situacao = $sit;
        $this->valor = $val;

    }

	/**
	 * @return mixed
	 */
	public function getCodigoids() {
		return $this->codigoids;
	}
	
	/**
	 * @param mixed $codigoids 
	 * @return self
	 */
	public function setCodigoids($codigoids): self {
		$this->codigoids = $codigoids;
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

	/**
	 * @return mixed
	 */
	public function getCodigoser() {
		return $this->codigoser;
	}
	
	/**
	 * @param mixed $codigoser 
	 * @return self
	 */
	public function setCodigoser($codigoser): self {
		$this->codigoser = $codigoser;
		return $this;
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
	public function getCodigosg() {
		return $this->codigosg;
	}
	
	/**
	 * @param mixed $codigosg 
	 * @return self
	 */
	public function setCodigosg($codigosg): self {
		$this->codigosg = $codigosg;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCodigofun() {
		return $this->codigofun;
	}
	
	/**
	 * @param mixed $codigofun 
	 * @return self
	 */
	public function setCodigofun($codigofun): self {
		$this->codigofun = $codigofun;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValor() {
		return $this->valor;
	}
	
	/**
	 * @param mixed $valor 
	 * @return self
	 */
	public function setValor($valor): self {
		$this->valor = $valor;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSituacao() {
		return $this->situacao;
	}
	
	/**
	 * @param mixed $situacao 
	 * @return self
	 */
	public function setSituacao($situacao): self {
		$this->situacao = $situacao;
		return $this;
	}
}