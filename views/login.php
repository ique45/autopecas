<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Auto Peças do Baiano</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <div class="login-logo">
                <h1>AUTO PEÇAS</h1>
                <p>do Baiano — Sistema de Gestão</p>
            </div>
            <?php if (isset($_GET['erro'])): ?>
                <div class="alert-erro">Usuário ou senha inválidos.</div>
            <?php endif; ?>
            <form action="../controllers/AuthController.php?acao=login" method="POST">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" required placeholder="Digite seu usuário">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" required placeholder="Digite sua senha">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%; margin-top:8px;">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>
