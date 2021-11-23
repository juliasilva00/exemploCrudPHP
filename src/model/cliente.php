<?php
class Cliente
{
    //atributos
    private $codigo;
    private $nome;
    private $endereco;
    private $telefone;


    //getters e setters

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }



    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }



    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }






    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function listarTodos($conexao)
    {
        //consulta banco de dados e traz todos os regritros do cliente
        $comandosql = "Select * from cliente order by nome";
        $dados = $conexao->query($comandosql);
        return $dados;
    }

    public function fecharConexao($conexao, $dados)
    {
        $dados->free_result();
        $conexao->close();
    }

    public function inserirCliente($conexao, $obj)
    {
        $comandosql = "Insert into cliente(nome,endereco,telefone) values 
        (null, '$obj->nome', '$obj->endereco', '$obj->telefone')";
        if ($conexao->query($comandosql)) {
            return true;
        }
    }

    public function listarPorCodigo($conexao, $codigo)
    {
        $comandosql = "Select * from cliente where codigo=$codigo";
        $dados = $conexao->query($comandosql);
        return $dados;
    }


    public function atualizarCliente($conexao, $obj)
    {
        $comandosql = "Update cliente set nome = '$obj->nome',
            endereco = '$obj->endereco', telefone = '$obj->telefone' where codido=$obj->codigo";
        if ($conexao->query($comandosql)) {
            return true;
        }
    }

    public function excluirCliente($conexao, $codigo)
    {
        $comandosql = "Delete from cliente where codigo = $codigo";
        if ($conexao->query($comandosql)) {
            return true;
        }
    }
}
