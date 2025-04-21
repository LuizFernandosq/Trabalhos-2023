<?php

class Carro
{
    private $codigocar;
    private $marca;
    private $modelo;
    private $placa;
    private $chassi;
    private $cor;
    private $anodefabricacao;
    private $proprietario;
    

    public function __construct($ccar,$mar,$mod,$pla,$cha,$cor,$ano,$pro = null){
		$this->codigocar = $ccar;
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->placa = $pla;
		$this->chassi = $cha;
        $this->cor = $cor;
        $this -> anodefabricacao = $ano;
        $this -> proprietario = $pro;
    }

	/**
	 * @return mixed
	 */
	public function getCodigocar() {
		return $this->codigocar;
	}
	
	/**
	 * @param mixed $codigocar 
	 * @return self
	 */
	public function setCodigocar($codigocar): self {
		$this->codigocar = $codigocar;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMarca() {
		return $this->marca;
	}
	
	/**
	 * @param mixed $marca 
	 * @return self
	 */
	public function setMarca($marca): self {
		$this->marca = $marca;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getModelo() {
		return $this->modelo;
	}
	
	/**
	 * @param mixed $modelo 
	 * @return self
	 */
	public function setModelo($modelo): self {
		$this->modelo = $modelo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPlaca() {
		return $this->placa;
	}
	
	/**
	 * @param mixed $placa 
	 * @return self
	 */
	public function setPlaca($placa): self {
		$this->placa = $placa;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getChassi() {
		return $this->chassi;
	}
	
	/**
	 * @param mixed $chassi 
	 * @return self
	 */
	public function setChassi($chassi): self {
		$this->chassi = $chassi;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCor() {
		return $this->cor;
	}
	
	/**
	 * @param mixed $cor 
	 * @return self
	 */
	public function setCor($cor): self {
		$this->cor = $cor;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAnodefabricacao() {
		return $this->anodefabricacao;
	}
	
	/**
	 * @param mixed $anodefabricacao 
	 * @return self
	 */
	public function setAnodefabricacao($anodefabricacao): self {
		$this->anodefabricacao = $anodefabricacao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getProprietario() {
		return $this->proprietario;
	}
	
	/**
	 * @param mixed $proprietario 
	 * @return self
	 */
	public function setProprietario($proprietario): self {
		$this->proprietario = $proprietario;
		return $this;
	}
}
