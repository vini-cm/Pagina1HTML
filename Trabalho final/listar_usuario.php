<?php
require_once "conecxao.php";
$usuarios = get_usuarios();
?>

<div class="container">
    <h1>Lista de Usuários</h1>

    <table cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>LOGIN</th>
            <th>EDITAR</th>
        </tr>

        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= htmlspecialchars($usuario['id']); ?></td>
            <td><?= htmlspecialchars($usuario['nome']); ?></td>
            <td><?= htmlspecialchars($usuario['login']); ?></td>
            <td>
                <a href="editar_usuario.php?id=<?= urlencode($usuario['id']); ?>">
                    Editar
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
