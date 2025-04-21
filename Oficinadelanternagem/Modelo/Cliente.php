<?php

class Cliente

{
    private $codigocli;
    private $cpf;
    private $nome;
    private $estado;
    private $cep;
    private $cidade;
    private $bairro;
    private $rua;
    private $numcasa;
    private $email;
    private $telefone;
    
    public function __construct($ccli,$cp,$nom,$est,$cep,$cid,$bai,$rua,$num,$ema,$tel = null){
		$this-> codigocli = $ccli;
        $this->cpf = $cp;
        $this->nome = $nom;
        $this->estado = $est;
        $this->cep = $cep;
        $this->cidade = $cid;
        $this->bairro = $bai;
        $this->rua = $rua;
        $this->numcasa = $num;
        $this->email = $ema;
        $this->telefone =$tel;
    }
    


	/**

	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
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

	/**
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}
	
	/**
	 * @param mixed $estado 
	 * @return self
	 */
	public function setEstado($estado): self {
		$this->estado = $estado;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCep() {
		return $this->cep;
	}
	
	/**
	 * @param mixed $cep 
	 * @return self
	 */
	public function setCep($cep): self {
		$this->cep = $cep;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}
	
	/**
	 * @param mixed $cidade 
	 * @return self
	 */
	public function setCidade($cidade): self {
		$this->cidade = $cidade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBairro() {
		return $this->bairro;
	}
	
	/**
	 * @param mixed $bairro 
	 * @return self
	 */
	public function setBairro($bairro): self {
		$this->bairro = $bairro;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRua() {
		return $this->rua;
	}
	
	/**
	 * @param mixed $rua 
	 * @return self
	 */
	public function setRua($rua): self {
		$this->rua = $rua;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumcasa() {
		return $this->numcasa;
	}
	
	/**
	 * @param mixed $numcasa 
	 * @return self
	 */
	public function setNumcasa($numcasa): self {
		$this->numcasa = $numcasa;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return self
	 */
	public function setTelefone($telefone): self {
		$this->telefone = $telefone;
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
}