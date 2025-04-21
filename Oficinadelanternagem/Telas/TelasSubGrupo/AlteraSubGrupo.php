<?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
        require_once BASE . '\Modelo\SubGrupo.php';
        require_once BASE . '\Database\Conexao.php';
        require_once BASE . '\DAO\DAOSubGrupo.php';

        $csg = $_POST['codigosg'];
        $cgp = $_POST['codigogp'];
        $nom = $_POST['nome'];
        

        $subgrupo = new SubGrupo($csg,$cgp,$nom);
        

        $dao =  new DAOSubGrupo();
        if($dao->altera($subgrupo)){
            header ("location: http:/Oficinadelanternagem/Telas/TelasSubGrupo/ListaSubGrupo.php");
        } else {
            echo 'Algum erro.';
        }