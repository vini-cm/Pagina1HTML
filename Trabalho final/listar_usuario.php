<?php
require_once "conexao.php";
$usuarios = get_usuarios();
?>
<div class="container">
    <h1>Lista de Usuario</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>LOGIN</th>
            <th>EDITAR</th>
        </tr>
        <?php foreach ($usuarios as $usuarios): ?>
        <tr>
            <td><?php echo htmlspecialchars($usuario['id']); ?></td>
            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
            <td><?php echo htmlspecialchars($usuario['login']); ?></td>
            <td><a href="editar_usuario.php?id=<?php echo urlencode($usuarios['id'])?>"></a></td>
        </tr>
        <?php endforeach; ?>
    </table>