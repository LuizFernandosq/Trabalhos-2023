<?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
        require_once BASE . '\Modelo\Carro.php';
        require_once BASE . '\Database\Conexao.php';
        require_once BASE . '\DAO\DAOCarro.php';

        $cc = $_POST['codigocar'];
        $mar = $_POST['marca'];
        $mod = $_POST['modelo'];
        $pla = $_POST['placa'];
        $cha = $_POST['chassi'];
        $cor = $_POST['cor'];
        $adf = $_POST['anodefabricacao'];
        $pro = $_POST['proprietario'];

        $carro = new Carro($cc,$mar,$mod,$pla,$cha,$cor,$adf,$pro);
        

        $dao =  new DAOCarro();
        if($dao->altera($carro)){
            header ("location: http:/Oficinadelanternagem/Telas/TelasCarros/ListaCarro.php");
        } else {
            echo 'Algum erro.';
        }