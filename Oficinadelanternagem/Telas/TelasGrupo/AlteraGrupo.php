<?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
        require_once BASE . '\Modelo\Grupo.php';
        require_once BASE . '\Database\Conexao.php';
        require_once BASE . '\DAO\DAOGrupo.php';

        $cg = $_POST['codigogp'];
        $nom = $_POST['nome'];

        $grupo = new Grupo($cg,$nom);
        

        $dao =  new DAOGrupo();
        if($dao->altera($grupo)){
            header ("location: http:/Oficinadelanternagem/Telas/TelasGrupo/ListaGrupo.php");
        } else {
            echo 'Algum erro.';
        }