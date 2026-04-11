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
                    
                    <h4 class="fw-bold text-azul-escuro mb-4">Programação Semanal</h4>
                    
                    <div class="d-flex flex-column gap-3 mb-5">
                        
                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <span class="text-uppercase fw-bold text-muted small">Domingo</span><br>
                                        <span class="text-azul-escuro fw-bold fs-5">09:00 - 10:30</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-1">Culto Matutino</h5>
                                        <p class="text-muted mb-0 small">Culto principal com louvor, pregação e Santa Ceia no primeiro domingo do mês.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <span class="text-uppercase fw-bold text-muted small">Domingo</span><br>
                                        <span class="text-azul-escuro fw-bold fs-5">18:00 - 19:30</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-1">Culto da Noite</h5>
                                        <p class="text-muted mb-0 small">Celebração com louvor contemporâneo e mensagem especial.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <span class="text-uppercase fw-bold text-muted small">Terça</span><br>
                                        <span class="text-azul-escuro fw-bold fs-5">19:30 - 21:00</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-1">Oração e Intercessão</h5>
                                        <p class="text-muted mb-0 small">Momento de oração coletiva e intercessão pelas necessidades da comunidade.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <span class="text-uppercase fw-bold text-muted small">Quarta</span><br>
                                        <span class="text-azul-escuro fw-bold fs-5">19:30 - 21:00</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-1">Estudo Bíblico</h5>
                                        <p class="text-muted mb-0 small">Estudo aprofundado das Escrituras, aberto a todos os níveis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <span class="text-uppercase fw-bold text-muted small">Sexta</span><br>
                                        <span class="text-azul-escuro fw-bold fs-5">20:00 - 22:00</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-1">Culto de Jovens</h5>
                                        <p class="text-muted mb-0 small">Encontro dinâmico voltado para jovens e adolescentes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm card-lista">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-3 mb-2 mb-md-0">
                                        <span class="text-uppercase fw-bold text-muted small">Sábado</span><br>
                                        <span class="text-azul-escuro fw-bold fs-5">09:00 - 11:00</span>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <h5 class="fw-bold mb-1">Escola Bíblica Dominical</h5>
                                        <p class="text-muted mb-0 small">Aulas para todas as faixas etárias: crianças, adolescentes e adultos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h4 class="fw-bold text-azul-escuro mb-4 mt-5">Eventos Especiais</h4>
                    
                    <div class="row g-4">
                        
                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow-sm h-100 card-evento">
                                <div class="card-body p-4">
                                    <p class="text-muted small fw-bold mb-1">Todo 1º Domingo</p>
                                    <h5 class="fw-bold mb-2">Santa Ceia</h5>
                                    <p class="text-muted small mb-0">Celebração da ceia do Senhor durante o culto matutino.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow-sm h-100 card-evento">
                                <div class="card-body p-4">
                                    <p class="text-muted small fw-bold mb-1">Março / 2026</p>
                                    <h5 class="fw-bold mb-2">Semana Santa</h5>
                                    <p class="text-muted small mb-0">Programação especial de Páscoa com cultos diários e cantata.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow-sm h-100 card-evento">
                                <div class="card-body p-4">
                                    <p class="text-muted small fw-bold mb-1">Junho / 2026</p>
                                    <h5 class="fw-bold mb-2">Conferência de Família</h5>
                                    <p class="text-muted small mb-0">Três dias de palestras e workshops sobre vida familiar.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow-sm h-100 card-evento">
                                <div class="card-body p-4">
                                    <p class="text-muted small fw-bold mb-1">Dezembro / 2026</p>
                                    <h5 class="fw-bold mb-2">Cantata de Natal</h5>
                                    <p class="text-muted small mb-0">Apresentação musical celebrando o nascimento de Cristo.</p>
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