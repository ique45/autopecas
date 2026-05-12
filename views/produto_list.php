<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Peças em Estoque - Auto Peças do Baiano</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="header">
        <a href="../controllers/ProdutoController.php?acao=dashboard" class="logo">AUTO PEÇAS <span>do Baiano</span></a>
        <a href="../controllers/AuthController.php?acao=logout" class="logout">Sair do Sistema</a>
    </div>

    <div class="container">
        <div class="top-bar">
            <span class="page-title">Peças em Estoque</span>
            <a href="../controllers/ProdutoController.php?acao=novo" class="btn btn-primary">+ Nova Peça</a>
        </div>

        <div class="card" style="padding: 0; overflow: hidden;">
            <div class="table-wrapper">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Estoque</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach ($produtos as $p): ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><?= htmlspecialchars($p['codigo_peca']) ?></td>
                            <td><?= htmlspecialchars($p['nome']) ?></td>
                            <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                            <td><?= $p['quantidade_estoque'] ?></td>
                            <td>
                                <a href="../controllers/ProdutoController.php?acao=editar&id=<?= $p['id'] ?>" class="action-link">Editar</a>
                                &nbsp;|&nbsp;
                                <a href="../controllers/ProdutoController.php?acao=excluir&id=<?= $p['id'] ?>" class="action-link delete" onclick="return confirm('Tem certeza que deseja excluir esta peça?');">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
