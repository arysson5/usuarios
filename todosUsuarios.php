<?php
include_once "getUsuarios.php";

$usuarios= getUsuarios();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <p>Seja bem vindo</p>

    <h2>Listar usuarios</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">

        <tr>
            <th>identificador</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $usuario):
            ?>
            <tr>
                <td><?php echo $usuario['id'] ?></td>
                <td><?php echo $usuario['usuario'] ?></td>
                <td><?php echo $usuario['email'] ?></td>
                <td>
                <a class="btn btn-primary" href="editarUsuario.php?id=<?php echo $usuario['id'] ?>">Editar</a>
                <a class="btn btn-danger" href="excluirUsuario.php?id=<?php echo $usuario['id'] ?>">Excluir</a>

                </td>
            </tr>
            <?php endforeach;?>
            
        </tbody>


    </table>
    </div>
    
</body>
</html>