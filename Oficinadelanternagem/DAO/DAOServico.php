<?php

class DAOServico{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from servico;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(Servico $servico)
    {
        $sql = 'insert into servico (acrescimo,descricao,codigocar,codigocli,datadeentrada,previsaodesaida,datadesaida,terceirizacao)  values (?,?,?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $servico->getAcrescimo());
        $pst->bindValue(2, $servico->getDescricao());
        $pst->bindValue(3, $servico->getCodigocar());
        $pst->bindValue(4, $servico->getCodigocli());
        $pst->bindValue(5, $servico->getDatadeentrada());
        $pst->bindValue(6, $servico->getPrevisaodesaida());
        $pst->bindValue(7, $servico->getDatadesaida());
        $pst->bindValue(8, $servico->getTerceirizacao());
        

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function exclui($codigoser)
    {
        $sql = 'delete from servico where codigoser = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigoser);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Servico $servico)
    {
        $sql = 'update servico set acrescimo = ?, descricao = ?, codigocar = ?, codigocli = ?, datadeentrada = ?, previsaodesaida = ?, datadesaida = ?, terceirizacao = ?  where codigoser = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $servico->getAcrescimo());
        $pst->bindValue(2, $servico->getDescricao());
        $pst->bindValue(3, $servico->getCodigocar());
        $pst->bindValue(4, $servico->getCodigocli());
        $pst->bindValue(5, $servico->getDatadeentrada());
        $pst->bindValue(6, $servico->getPrevisaodesaida());
        $pst->bindValue(7, $servico->getDatadesaida());
        $pst->bindValue(8, $servico->getTerceirizacao());
        $pst->bindValue(9, $servico->getCodigoser());
       
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function ordenar(string $servico)
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from ordem;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}