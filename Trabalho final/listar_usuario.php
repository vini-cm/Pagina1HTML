<?php
require_once "conecxao.php";
$busca = isset($_GET['busca']) ? $_GET['busca'] : null;
$usuarios = pesquisar_usuarios($busca);?>
<form method="GET" action="listar_usuario.php" style="margin-bottom: 20px;">
    <input type="text" name="busca" placeholder="Pesquisar usuário..." 
           value="<?php echo isset($_GET['busca']) ? $_GET['busca'] : ''; ?>">
    <button type="submit">Buscar</button>
</form>
<div class="container">
    <h1>Lista de Usuários</h1>

    <table cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>LOGIN</th>
            <th>EDITAR</th>
        </tr>

        <?php if (!empty($usuarios)): ?>
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
        <?php else: ?>
            <tr>
                <td colspan="4">Nenhum usuário encontrado.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
