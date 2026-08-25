# Auto Peças do Baiano — Sistema de Gestão de Estoque

Sistema web de controle de estoque para uma loja de autopeças: login de
funcionário e CRUD completo das peças. Feito em **PHP puro, sem framework**,
com arquitetura MVC montada à mão.

O ponto do projeto é justamente esse: entender o caminho que uma requisição
faz — da tela para o controller, do controller para o model, do model para o
banco e de volta — antes de deixar um framework fazer isso por você.

## Stack

PHP 8 · MySQL · PDO · HTML · CSS

## Arquitetura

```
index.php              front controller: decide entre login e dashboard
config/database.php    conexão PDO com o MySQL
models/                regras de negócio e acesso ao banco
  Usuario.php            autenticação
  Produto.php            CRUD das peças
controllers/           recebem a requisição e escolhem a view
  AuthController.php     login e logout
  ProdutoController.php  listar, cadastrar, editar, excluir
views/                 as telas
assets/style.css       identidade visual
autopecas_db.sql       schema do banco
```

O fluxo de uma edição, por exemplo: `produto_list.php` → `ProdutoController.php?acao=editar`
→ `Produto::buscarPorId()` → `produto_form.php` → `?acao=salvar` → `Produto::atualizar()`.

## Segurança

- **SQL Injection:** toda query usa prepared statement com PDO. Nenhum valor de
  formulário é concatenado no SQL.
- **Senhas:** gravadas com `password_hash()` e conferidas com `password_verify()`.
  O banco nunca guarda a senha em texto puro.
- **XSS:** todo dado vindo do banco é escapado com `htmlspecialchars()` antes de
  ir para a tela.
- **Sessão:** o `ProdutoController` bloqueia qualquer ação sem sessão ativa, e o
  id da sessão é regenerado no login para evitar fixação de sessão.

## Como rodar

Pré-requisitos: PHP 8+ e MySQL.

```bash
# 1. cria o banco e as tabelas
mysql -u root -p < autopecas_db.sql

# 2. sobe o servidor embutido do PHP
php -S localhost:8000
```

Acesse <http://localhost:8000>.

**Credenciais padrão:** usuário `admin`, senha `123456` — definidas no
`autopecas_db.sql` apenas para teste local.

Se o seu MySQL tiver senha de root, ajuste `config/database.php`.

## Origem e o que é meu

O projeto nasceu de um laboratório da disciplina de desenvolvimento web na ETEC,
cujo enunciado especificava a estrutura MVC e as telas em HTML puro.

O que fiz além do enunciado:

- **Implementei o `Produto::atualizar()`**, que o roteiro deixava de fora — sem
  ele a edição de peças abria o formulário mas não salvava nada.
- **Criei toda a identidade visual** (`assets/style.css`), embora o enunciado
  pedisse HTML sem estilização.
- **Reforcei a segurança** além do que era pedido: escape de saída, regeneração
  de sessão no login e mensagem de erro genérica no login.
