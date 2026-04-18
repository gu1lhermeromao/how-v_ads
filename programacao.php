<?php 
    $pagina_atual = 'programacao';
    include 'template/header.php'; 
?>

<main style="background-color: var(--cinza-fundo); min-height: calc(100vh - 350px);">
    
    <section class="py-5 text-center bg-hero border-bottom">
        <div class="container py-4">
            <p class="text-uppercase small fw-bold text-white tracking-wider mb-2" style="letter-spacing: 2px;">
                Programação
            </p>
            <h1 class="display-5 fw-bold text-white mb-3" style="font-family: Georgia, serif;">Cultos & Horários</h1>
            <p class="lead text-white mx-auto" style="max-width: 600px;">
                Confira nossa programação semanal e eventos especiais.<br>Todos são bem-vindos!
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    
                    <h4 class="fw-bold text-azul-escuro mb-4">Eventos especiais</h4>
                    
                    <div class="d-flex flex-column gap-3 mb-5">
                        
                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <p class="text-muted small fw-bold mb-1">TODO 1º DOMINGO</p>
                                        <span class="text-azul-escuro fw-bold fs-5">18:00 - 19:30</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-2">Santa Ceia</h5>
                                        <p class="text-muted small mb-0">Celebração da ceia do Senhor durante o culto.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <p class="text-muted small fw-bold mb-1">TODO 2° SÁBADO</p>
                                        <span class="text-azul-escuro fw-bold fs-5">17:00 - 18:30</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-2">Encontro de Mulheres</h5>
                                        <p class="text-muted small mb-0">Reunião mensal para mulheres da igreja.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <h4 class="fw-bold text-azul-escuro mb-4 mt-5">Programação semanal</h4>
                    
                    <div class="row g-4">
                        
                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow-sm h-100 card-evento">
                                <div class="card-body p-4">
                                    <p class="text-muted small fw-bold mb-1">DOMINGO | 18:00 - 19:30</p>
                                    <h5 class="fw-bold mb-2">Culto</h5>
                                    <p class="text-muted small mb-0">Culto dominical com louvores e pregação.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow-sm h-100 card-evento">
                                <div class="card-body p-4">
                                    <p class="text-muted small fw-bold mb-1">QUINTA-FEIRA | 19:30 - 21:00</p>
                                    <h5 class="fw-bold mb-2">Discipulado</h5>
                                    <p class="text-muted small mb-0">Reunião semanal para discipulado.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'template/footer.php'; ?>