<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igreja Batista Reformada Navegantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="template/styles.css">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php">Igreja Batista Reformada Navegantes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_atual == 'inicio') ? 'active fw-bold text-azul-escuro' : ''; ?>" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_atual == 'sobre') ? 'active fw-bold text-azul-escuro' : ''; ?>" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_atual == 'programacao') ? 'active fw-bold text-azul-escuro' : ''; ?>" href="programacao.php">Programação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_atual == 'contato') ? 'active fw-bold text-azul-escuro' : ''; ?>" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>