<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <a href="index.php?controle=usuarioController&metodo=inserir">Novo Usuario</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>

        <?php
            foreach($retorno as $dados)
            {
                echo " <tr>
                       <td>$dados</td>
                       <td><a href='index.php?controle=usuarioController&metodo=alterar'>Alterar</a></td>
                       <td><a href='index.php?controle=usuarioController&metodo=excluir'>Excluir</a></td>
                       </tr>";
            }
        ?>
       
    </table>
</body>
</html>