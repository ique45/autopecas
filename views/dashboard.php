<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Auto Peças do Baiano</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="header">
        <a href="../controllers/ProdutoController.php?acao=dashboard" class="logo">AUTO PEÇAS <span>do Baiano</span></a>
        <a href="../controllers/AuthController.php?acao=logout" class="logout">Sair do Sistema</a>
    </div>

    <div class="container">
        <span class="page-title">Painel de Controle</span>

        <div class="dash-grid">
            <a href="../controllers/ProdutoController.php?acao=listar" class="dash-card">
                <h3>Estoque de Peças</h3>
                <p>Visualize e gerencie todas as peças cadastradas</p>
            </a>
            <a href="../controllers/ProdutoController.php?acao=novo" class="dash-card">
                <h3>Cadastrar Peça</h3>
                <p>Adicione uma nova peça ao estoque</p>
            </a>
        </div>
    </div>
</body>
</html>
