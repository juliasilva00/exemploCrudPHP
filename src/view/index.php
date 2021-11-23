<?php
include "header.php";
include "modalCliente.php";
require "../controller/clienteController.php";


?>

<body class="container-fluid">

    <h1>Cadastro de Cliente</h1>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#cadCliente">Cadastrar</button>

    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($objCli = $dados->fetch_object()) {


                ?>
                    <tr>
                        <th scope="row"><?php echo $objCli->codigo; ?></th>
                        <td><?php echo $objCli->nome; ?></td>
                        <td><?php echo $objCli->endereco; ?></td>
                        <td><?php echo $objCli->telefone; ?></td>
                        <td>Editar| Excluir</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>