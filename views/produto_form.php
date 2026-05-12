<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Peça - Auto Peças do Baiano</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="header">
        <a href="../controllers/ProdutoController.php?acao=dashboard" class="logo">AUTO PEÇAS <span>do Baiano</span></a>
        <a href="../controllers/AuthController.php?acao=logout" class="logout">Sair do Sistema</a>
    </div>

    <div class="container">
        <span class="page-title"><?= isset($produto) ? 'Editar Peça' : 'Nova Peça' ?></span>

        <div class="card">
            <form action="../controllers/ProdutoController.php?acao=salvar" method="POST">
                <input type="hidden" name="id" value="<?= $produto['id'] ?? '' ?>">

                <div class="form-group">
                    <label>Código da Peça</label>
                    <input type="text" name="codigo_peca" value="<?= htmlspecialchars($produto['codigo_peca'] ?? '') ?>" required placeholder="Ex: BP-0041">
                </div>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome'] ?? '') ?>" required placeholder="Ex: Pastilha de Freio Dianteira">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao" placeholder="Informações adicionais sobre a peça..."><?= htmlspecialchars($produto['descricao'] ?? '') ?></textarea>
                </div>
                <div class="form-group">
                    <label>Preço (R$)</label>
                    <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?? '' ?>" required placeholder="0,00">
                </div>
                <div class="form-group">
                    <label>Quantidade em Estoque</label>
                    <input type="number" name="quantidade_estoque" value="<?= $produto['quantidade_estoque'] ?? '' ?>" required placeholder="0">
                </div>

                <div style="display:flex; gap:12px; margin-top:8px;">
                    <button type="submit" class="btn btn-primary">Salvar Dados</button>
                    <a href="../controllers/ProdutoController.php?acao=listar" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
