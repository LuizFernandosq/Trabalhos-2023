<?php
class Servico{
	private $codigoser;

	private $acrescimo;

	private $soma;
    private $valorfinal;
    private $descricao;
    private $codigocar;
    private $codigocli;
    private $datadeentrada;
	private $previsaodesaida;
    private $datadesaida;
    private $terceirizacao;

    public function __construct($cser,$acre,$soma,$val,$des,$ccar,$ccli,$dent,$pres,$dsai,$ter){
        $this->codigoser = $cser;
		$this->acrescimo = $acre;
		$this->soma = $soma;
		$this->valorfinal = $val;
        $this->descricao = $des;
        $this->codigocar = $ccar;
        $this->codigocli = $ccli;
        $this->datadeentrada = $dent;
		$this->previsaodesaida = $pres;
        $this->datadesaida = $dsai;
        $this->terceirizacao = $ter;


    }


	/**
	 * @return mixed
	 */
	public function getValorfinal() {
		return $this->valorfinal;
	}
	
	/**
	 * @param mixed $valorfinal 
	 * @return self
	 */
	public function setValorfinal($valorfinal): self {
		$this->valorfinal = $valorfinal;
		return $this;
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
	public function getCodigocli() {
		return $this->codigocli;
	}
	
	/**
	 * @param mixed $codigocli 
	 * @return self
	 */
	public function setCodigocli($codigocli): self {
		$this->codigocli = $codigocli;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDatadeentrada() {
		return $this->datadeentrada;
	}
	
	/**
	 * @param mixed $datadeentrada 
	 * @return self
	 */
	public function setDatadeentrada($datadeentrada): self {
		$this->datadeentrada = $datadeentrada;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDatadesaida() {
		return $this->datadesaida;
	}
	
	/**
	 * @param mixed $datadesaida 
	 * @return self
	 */
	public function setDatadesaida($datadesaida): self {
		$this->datadesaida = $datadesaida;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTerceirizacao() {
		return $this->terceirizacao;
	}
	
	/**
	 * @param mixed $terceirizacao 
	 * @return self
	 */
	public function setTerceirizacao($terceirizacao): self {
		$this->terceirizacao = $terceirizacao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPrevisaodesaida() {
		return $this->previsaodesaida;
	}
	
	/**
	 * @param mixed $previsaodesaida 
	 * @return self
	 */
	public function setPrevisaodesaida($previsaodesaida): self {
		$this->previsaodesaida = $previsaodesaida;
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
	public function getSoma() {
		return $this->soma;
	}
	
	/**
	 * @param mixed $soma 
	 * @return self
	 */
	public function setSoma($soma): self {
		$this->soma = $soma;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAcrescimo() {
		return $this->acrescimo;
	}
	
	/**
	 * @param mixed $acrescimo 
	 * @return self
	 */
	public function setAcrescimo($acrescimo): self {
		$this->acrescimo = $acrescimo;
		return $this;
	}
}