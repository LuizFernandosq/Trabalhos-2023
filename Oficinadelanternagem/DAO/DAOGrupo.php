<?php

class DAOGrupo{
    
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from grupo;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Grupo $grupo){
        $sql = 'insert into grupo (codigogp,nome) values (?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$grupo->getCodigogp());
        $pst->bindValue(2,$grupo->getNome());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($codigogp)
    {
        $sql = 'delete from grupo where codigogp = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigogp);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Grupo $grupo)
    {
        $sql = 'update grupo set nome = ?  where codigogp = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $grupo->getNome());
        $pst->bindValue(2, $grupo->getCodigogp());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}