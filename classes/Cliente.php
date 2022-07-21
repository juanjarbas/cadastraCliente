<?php

require_once('Conexao.php');

class Cliente
{
    private $idCliente;
    private $nomeCliente;
    private $cpfCliente;
    private $celularCliente;


    // GETRS

    public function getIdCliente()
    {
        return $this->idCliente;
    }
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }
    public function getCelularCliente()
    {
        return $this->celularCliente;
    }


    // SETRS

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }


    public function setCelularCliente($celularCliente)
    {
        $this->celularCliente = $celularCliente;
    }



    public function cadastrar($cliente)
    {
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbCliente(nomeCliente, celularCliente) 
                    VALUES (?, ?)");
        $stmt->bindValue(1, $cliente->getNomeCliente());
        $stmt->bindValue(2, $cliente->getCelularCliente());
        $stmt->execute();
    }

    public function listar()
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idCliente, nomeCliente, celularCliente FROM tbCliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listarCliente($id)
    {
        $conexao = Conexao::conectar();

        $querySelect = "SELECT idCliente, nomeCliente, celularCliente FROM tbCliente WHERE idCliente = $id LIMIT 1";

        $result = $conexao->query($querySelect);

        $lista = $result->fetch(PDO::FETCH_BOTH);
        return $lista;
    }


    public function update($cliente)
    {
        $conexao = Conexao::conectar();

        $id = $cliente->getIdCliente();

        $stmt = $conexao->prepare("UPDATE tbCliente 
                                        SET nomeCliente =?, celularCliente =?
                                            WHERE idCliente = '$id'  ");

        $stmt->bindValue(1, $cliente->getNomeCliente());
        $stmt->bindValue(2, $cliente->getCelularCliente());
        $stmt->execute();
    }




    public function delete($idCliente)
    {
        $conexao = Conexao::conectar();

        $stmt = $conexao->prepare("DELETE FROM tbCliente
                                WHERE idCliente = ?");
        $stmt->bindValue(1, $idCliente);
        $stmt->execute();
    }
}
