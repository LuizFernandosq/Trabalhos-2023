<?php
class DAOFuncionario{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from funcionarios;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(Funcionario $funcionario)
    {
        $sql = 'insert into funcionarios (codigofun,nome,salario,cpf,especializacao,telefone,estado,cep,cidade,bairro,rua,numcasa,email,datadeingresso) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getCodigofun());
        $pst->bindValue(2, $funcionario->getNome());
        $pst->bindValue(3, $funcionario->getSalario());
        $pst->bindValue(4, $funcionario->getCpf());
        $pst->bindValue(5, $funcionario->getEspecializacao());
        $pst->bindValue(6, $funcionario->getTelefone());
        $pst->bindValue(7, $funcionario->getEstado());
        $pst->bindValue(8, $funcionario->getCep());
        $pst->bindValue(9, $funcionario->getCidade());
        $pst->bindValue(10, $funcionario->getBairro());
        $pst->bindValue(11, $funcionario->getRua());
        $pst->bindValue(12, $funcionario->getNumcasa());
        $pst->bindValue(13, $funcionario->getEmail());
        $pst->bindValue(14, $funcionario->getDatadeingresso());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function exclui($codigofun)
    {
        $sql = 'delete from funcionarios where codigofun = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $codigofun);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Funcionario $funcionario)
    {
        $sql = 'update funcionarios set nome = ?, salario = ?, cpf = ?, especializacao = ?, telefone = ?, estado = ?, cep = ?, cidade = ?, bairro = ?, rua = ?, numcasa = ?, email = ?, datadeingresso = ?  where codigofun = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getSalario());
        $pst->bindValue(3, $funcionario->getCpf());
        $pst->bindValue(4, $funcionario->getEspecializacao());
        $pst->bindValue(5, $funcionario->getTelefone());
        $pst->bindValue(6, $funcionario->getEstado());
        $pst->bindValue(7, $funcionario->getCep());
        $pst->bindValue(8, $funcionario->getCidade());
        $pst->bindValue(9, $funcionario->getBairro());
        $pst->bindValue(10, $funcionario->getRua());
        $pst->bindValue(11, $funcionario->getNumcasa());
        $pst->bindValue(12, $funcionario->getEmail());
        $pst->bindValue(13, $funcionario->getDatadeingresso());
        $pst->bindValue(14, $funcionario->getCodigofun());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}