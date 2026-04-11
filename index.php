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
                "Porque onde estiverem dois ou três reunidos em meu nome, aí estou eu no meio deles."<br>
                <span class="small" style="font-style: normal;">— Mateus 18:20</span>
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
            <h2 class="display-6 fw-semibold mb-3">Um lugar de fé, amor e comunidade</h2>
            <p class="text-muted mx-auto" style="max-width: 700px; font-size: 1.1rem;">
                Somos uma comunidade cristã comprometida com a palavra de Deus, o amor ao próximo e a transformação de vidas. Venha fazer parte desta família.
            </p>
        </div>
    </section>

    <section class="bg-hero py-5" style="background-color: var(--cinza-fundo);">
        <div class="container py-4 text-center">
            <h6 class="fw-bold text-uppercase mb-2">Programação</h6>
            <h2 class="fw-semibold mb-5">Nossos Cultos</h2>

            <div class="row g-4 justify-content-center">

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm card-culto bg-white">
                        <div class="card-body py-4">
                            <p class="fw-bold mb-1 text-muted text-uppercase small">Domingo</p>
                            <h3 class="fw-bold text-azul-escuro display-6">09:00</h3>
                            <h5 class="mt-3 mb-1 fw-semibold">Culto Matutino</h5>
                            <p class="text-muted small mb-0">Celebração Principal</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm card-culto bg-white">
                        <div class="card-body py-4">
                            <p class="fw-bold mb-1 text-muted text-uppercase small">Domingo</p>
                            <h3 class="fw-bold text-azul-escuro display-6">18:00</h3>
                            <h5 class="mt-3 mb-1 fw-semibold">Culto da Noite</h5>
                            <p class="text-muted small mb-0">Louvor e Pregação</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm card-culto bg-white">
                        <div class="card-body py-4">
                            <p class="fw-bold mb-1 text-muted text-uppercase small">Quarta</p>
                            <h3 class="fw-bold text-azul-escuro display-6">19:30</h3>
                            <h5 class="mt-3 mb-1 fw-semibold">Estudo Bíblico</h5>
                            <p class="text-muted small mb-0">Estudo Semanal</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm card-culto bg-white">
                        <div class="card-body py-4">
                            <p class="fw-bold mb-1 text-muted text-uppercase small">Sexta</p>
                            <h3 class="fw-bold text-azul-escuro display-6">20:00</h3>
                            <h5 class="mt-3 mb-1 fw-semibold">Culto de Jovens</h5>
                            <p class="text-muted small mb-0">Encontro Jovem</p>
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
            <h2 class="fw-semibold mb-3">Faça parte dessa comunidade</h2>
            <p class="text-muted mb-4">Visite-nos e descubra um lugar de acolhimento, fé e esperança.</p>
            <a href="contato.php" class="btn btn-outline-light btn-lg px-4 rounded-pill text-azul-escuro" style="color: white; border-color: var(--azul-escuro);">
                Como chegar
            </a>
        </div>
    </section>

<?php include 'template/footer.php'; ?>