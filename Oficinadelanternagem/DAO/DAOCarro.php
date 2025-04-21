<?php

class DAOCarro
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from carros;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(Carro $carro)
    {
        $sql = 'insert into carros (codigocar,marca,modelo,placa,chassi,cor,anodefabricacao,proprietario) values (?,?,?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $carro->getCodigocar());
        $pst->bindValue(2, $carro->getMarca());
        $pst->bindValue(3, $carro->getModelo());
        $pst->bindValue(4, $carro->getPlaca());
        $pst->bindValue(5, $carro->getChassi());
        $pst->bindValue(6, $carro->getCor());
        $pst->bindValue(7, $carro->getAnodefabricacao());
        $pst->bindValue(8, $carro->getProprietario());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function exclui($codigocar)
    {
        $sql = 'delete from carros where codigocar = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigocar);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Carro $carro)
    {
        $sql = 'update carros set marca = ?, modelo = ?, placa = ?, chassi = ?, cor = ?, anodefabricacao = ?, proprietario = ?  where codigocar = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $carro->getMarca());
        $pst->bindValue(2, $carro->getModelo());
        $pst->bindValue(3, $carro->getPlaca());
        $pst->bindValue(4, $carro->getChassi());
        $pst->bindValue(5, $carro->getCor());
        $pst->bindValue(6, $carro->getAnodefabricacao());
        $pst->bindValue(7, $carro->getProprietario());
        $pst->bindValue(8, $carro->getCodigocar());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}