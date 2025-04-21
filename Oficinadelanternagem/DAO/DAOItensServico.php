<?php

class DAOItensServico{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from itens_servico;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(ItensServico $itensServico)
    {
        $sql = 'insert into itens_servico (codigoids,codigota,codigoser,codigogp,codigosg,codigofun,situacao,valor) values (?,?,?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itensServico->getCodigoids());
        $pst->bindValue(2, $itensServico->getCodigota());
        $pst->bindValue(3, $itensServico->getCodigoser());
        $pst->bindValue(4, $itensServico->getCodigogp());
        $pst->bindValue(5, $itensServico->getCodigosg());
        $pst->bindValue(6, $itensServico->getCodigofun());
        $pst->bindValue(7, $itensServico->getSituacao());
        $pst->bindValue(8, $itensServico->getValor());
        

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function exclui($codigoids)
    {
        $sql = 'delete from itens_servico where codigoids = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigoids);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(ItensServico $itensservico)
    {
        $sql = 'update itens_servico set codigota = ?, codigoser = ?, codigogp = ?, codigosg = ?, codigofun = ?, situacao = ?, valor = ? where codigoids = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itensservico->getCodigota());
        $pst->bindValue(2, $itensservico->getCodigoser());
        $pst->bindValue(3, $itensservico->getCodigogp());
        $pst->bindValue(4, $itensservico->getCodigosg());
        $pst->bindValue(5, $itensservico->getCodigofun());
        $pst->bindValue(6, $itensservico->getSituacao());
        $pst->bindValue(7, $itensservico->getValor());
        $pst->bindValue(8, $itensservico->getCodigoids());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function listaitens($codigoser)
    {
        $sql = 'SELECT * FROM itens WHERE codigoser = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigoser);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}