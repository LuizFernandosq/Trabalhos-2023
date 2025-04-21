<?php

class DAOCliente
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from clientes;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cliente $cliente)
    {
        $sql = 'insert into clientes (codigocli,nome,cpf,estado,cep,cidade,bairro,rua,numcasa,email,telefone) values (?,?,?,?,?,?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getCodigocli());
        $pst->bindValue(2, $cliente->getNome());
        $pst->bindValue(3, $cliente->getCpf());
        $pst->bindValue(4, $cliente->getEstado());
        $pst->bindValue(5, $cliente->getCep());
        $pst->bindValue(6, $cliente->getCidade());
        $pst->bindValue(7, $cliente->getBairro());
        $pst->bindValue(8, $cliente->getRua());
        $pst->bindValue(9, $cliente->getNumcasa());
        $pst->bindValue(10, $cliente->getEmail());
        $pst->bindValue(11, $cliente->getTelefone());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function exclui($codigocli)
    {
        $sql = 'delete from clientes where codigocli = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigocli);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Cliente $cliente)
    {
        $sql = 'update clientes set nome = ?, cpf = ?, estado = ?, cep = ?, cidade = ?, bairro = ?, rua = ?, numcasa = ?,email = ?,telefone = ?    where codigocli = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getCpf());
        $pst->bindValue(3, $cliente->getEstado());
        $pst->bindValue(4, $cliente->getCep());
        $pst->bindValue(5, $cliente->getCidade());
        $pst->bindValue(6, $cliente->getBairro());
        $pst->bindValue(7, $cliente->getRua());
        $pst->bindValue(8, $cliente->getNumcasa());
        $pst->bindValue(9, $cliente->getEmail());
        $pst->bindValue(10, $cliente->getTelefone());
        $pst->bindValue(11, $cliente->getCodigocli());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}