<?php
session_start();
require_once __DIR__ . '/../models/Usuario.php';

$acao = $_GET['acao'] ?? '';

if ($acao == 'login') {
    $usuario_form = $_POST['usuario'] ?? '';
    $senha_form = $_POST['senha'] ?? '';

    $usuarioModel = new Usuario();
    $user_id = $usuarioModel->autenticar($usuario_form, $senha_form);

    if ($user_id) {
        // Troca o id da sessão no login para evitar fixação de sessão.
        session_regenerate_id(true);
        $_SESSION['usuario_logado'] = $user_id;
        header("Location: ../controllers/ProdutoController.php?acao=dashboard");
        exit;
    }

    // Mensagem genérica: não revela se o erro foi no usuário ou na senha.
    header("Location: ../views/login.php?erro=1");
    exit;
} elseif ($acao == 'logout') {
    session_destroy();
    header("Location: ../views/login.php");
    exit;
}
