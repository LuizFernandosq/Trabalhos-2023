<?php

class DAOTarefa{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from tarefas;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Tarefa $tarefas){
        $sql = 'insert into tarefas (codigota,descricao) values (?,?);';
        $pst = Conexao:: getPreparedStatement($sql);
        $pst->bindValue(1,$tarefas->getCodigota());
        $pst->bindValue(2,$tarefas->getDescricao());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($codigota)
    {
        $sql = 'delete from tarefas where codigota = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigota);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Tarefa $tarefa)
    {
        $sql = 'update tarefas set descricao = ?  where codigota = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst = Conexao :: getPreparedStatement($sql);
        $pst-> bindValue(1, $tarefa-> getDescricao());
        $pst-> bindValue(2, $tarefa-> getCodigota());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }

    }
}