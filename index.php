<?php 
    $pagina_atual = 'inicio';
    include 'template/header.php'; 
?>
    <section class="bg-hero py-5 text-center">
        <div class="container py-5">
            <p class="text-uppercase small tracking-wider mb-3" style="letter-spacing: 2px; color: #a3b8cc;">
                Igreja Cristã
            </p>
            <h1 class="display-4 fw-bold mb-4">Igreja Batista Reformada Navegantes</h1>

            <p class="lead font-italic mb-5 mx-auto" style="color: #cbd5e1; max-width: 700px;">
                “Assim, já não sois estrangeiros e peregrinos, mas concidadãos dos santos, e sois da família de Deus, edificados sobre o fundamento dos apóstolos e dos profetas, sendo ele mesmo, Cristo Jesus, a pedra angular.”<br>
                <span class="small" style="font-style: normal;">— Efésios 2:19-20</span>
            </p>

            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="contato.php" class="btn btn-outline-light btn-lg px-4 rounded-pill">Visite-nos</a>
                <a href="sobre.php" class="btn btn-light btn-lg px-4 rounded-pill text-azul-escuro fw-semibold">Conheça a igreja</a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <h6 class="fw-bold text-azul-escuro text-uppercase mb-2">Bem-vindo</h6>
            <h2 class="display-6 fw-semibold mb-3">Um lugar de fé, esperança e amor</h2>
            <p class="text-muted mx-auto" style="max-width: 700px; font-size: 1.1rem;">
                Somos uma comunidade cristã centrada no evangelho de Jesus Cristo.
            </p>
        </div>
    </section>

    <section class="bg-hero py-5" style="background-color: var(--cinza-fundo);">
        <div class="container py-4 text-center">
            <h6 class="fw-bold text-uppercase mb-2">Programação</h6>
            <h2 class="fw-semibold mb-5">Nossas Reuniões</h2>

            <div class="row g-4 justify-content-center">

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm card-culto bg-white">
                        <div class="card-body py-4">
                            <p class="fw-bold mb-1 text-muted text-uppercase small">Domingo</p>
                            <h3 class="fw-bold text-azul-escuro display-6">18:00</h3>
                            <h5 class="mt-3 mb-1 fw-semibold">Culto</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm card-culto bg-white">
                        <div class="card-body py-4">
                            <p class="fw-bold mb-1 text-muted text-uppercase small">Quinta-feira</p>
                            <h3 class="fw-bold text-azul-escuro display-6">19:30</h3>
                            <h5 class="mt-3 mb-1 fw-semibold">Discipulado</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm card-culto bg-white">
                        <div class="card-body py-4">
                            <p class="fw-bold mb-1 text-muted text-uppercase small">2º Sábado</p>
                            <h3 class="fw-bold text-azul-escuro display-6">17:00</h3>
                            <h5 class="mt-3 mb-1 fw-semibold">Encontro de Mulheres</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-5">
                <a href="programacao.php" class="btn btn-light btn-lg px-4 rounded-pill text-azul-escuro fw-semibold">
                    Ver Programação Completa &rarr;
                </a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white mb-5">
        <div class="container py-4 text-center">
            <h2 class="fw-semibold mb-3">Venha nos visitar</h2>
            <p class="text-muted mx-auto" style="max-width: 700px; font-size: 1.1rem;">
                Visitantes são bem-vindos.
            </p>
            <a href="contato.php" class="btn btn-outline-light btn-lg px-4 rounded-pill text-azul-escuro" style="color: white; border-color: var(--azul-escuro);">
                Como chegar
            </a>
        </div>
    </section>

<?php include 'template/footer.php'; ?>