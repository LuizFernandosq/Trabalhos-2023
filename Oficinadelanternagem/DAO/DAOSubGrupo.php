<?php

class DAOSubGrupo{
    
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from sub_grupo;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(SubGrupo $subGrupo){
        $sql = 'insert into sub_grupo (codigosg,codigogp,nome) values (?,?,?);';
        $pst = Conexao:: getPreparedStatement($sql);
        $pst->bindValue(1,$subGrupo->getCodigosg());
        $pst->bindValue(2,$subGrupo->getCodigogp());
        $pst->bindValue(3,$subGrupo->getNome());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
       
    }
    public function exclui($codigosg)
    {
        $sql = 'delete from sub_grupo where codigosg = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigosg);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
        
    }
    public function altera(SubGrupo $subgrupo)
    {
        $sql = 'update sub_grupo set codigogp = ?, nome = ?  where codigosg = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $subgrupo->getCodigogp());
        $pst->bindValue(2, $subgrupo->getNome());
        $pst->bindValue(3, $subgrupo->getCodigosg());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}