<?php 
    $pagina_atual = 'sobre';
    include 'template/header.php'; 
?>
    <section class="bg-hero py-5 text-center">
        <div class="container py-4">
            <p class="text-uppercase small fw-bold text-white tracking-wider mb-2" style="letter-spacing: 2px;">
                Institucional
            </p>
            <h1 class="display-5 fw-bold text-white mb-3" style="font-family: Georgia, serif;">Sobre a Igreja</h1>
            <p class="lead text-white mx-auto" style="max-width: 600px;">
                Conheça nossa história, missão e os valores que nos guiam como comunidade de fé.
            </p>
        </div>
    </section>

    <section class="py-5 border-top">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h6 class="fw-bold text-azul-escuro mb-2">Nossa História</h6>
                    <h2 class="fw-bold mb-4">Mais de 6 anos de fé e serviço</h2>

                    <p class="text-muted mb-3">
                        A igreja Batista reformada Navegantes começou através do trabalho do pastor Bruno César Bülau, quem iniciou a plantação da igreja em meados de 2020, apoiado pelo Igreja Batista Nações Unidas. Inicialmente os cultos eram realizados na casa do pastor Bruno, porém eventualmente com a adesão de mais pessoas os cultos passaram a serem realizados em outros locais locados para esse fim.
                    </p>
                    <p class="text-muted mb-3">
                        Em Janeiro de 2025 a liderança da igreja passou para o pastor Andrey Naumann. Durante o pastoreio do Andrey o local dos cultos se moveu para o atual endereço, que fica no primeiro andar do endereço Av. Prefeito José Juvenal Mafra 1681. Durante todo esse período a igreja tentou servir a Deus e a comunidade local com a pregação do evangelho do Senhor Jesus Cristo.
                    </p>
                    <p class="text-muted">
                        O principal objetivo da igreja é servir ao Deus e pai do Senhor Jesus Cristo, proclamando as boas novas do evangelho do seu Filho, enquanto vivem em comunhão com Deus e uns com os outros através da obra do Espírito Santo de Deus, ouvindo e meditando na palavra de Deus encontrada na Bíblia Sagrada, e buscando viver uma vida de santidade, amor e serviço ao próximo, para a glória de Deus.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="foto-placeholder shadow-sm">
                        <img src="imagens/congregacao.jpeg" alt="Foto da Congregação" style="width: 100%; height: auto; border-radius: 8px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-hero py-5" style="background-color: var(--cinza-fundo);">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-5">Missão, Visão e Valores</h2>

            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="card h-100 border-0 bg-transparent card-mvv">
                        <div class="card-body text-white">
                            <div class="icon-circulo shadow-sm">
                                <i class="bi bi-heart fs-2"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Missão</h4>
                            <p class="small text-white">
                                Proclamar o evangelho de Jesus Cristo, promovendo a transformação de vidas através do amor, da fé e do serviço ao próximo.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card h-100 border-0 bg-transparent card-mvv">
                        <div class="card-body text-white">
                            <div class="icon-circulo shadow-sm">
                                <i class="bi bi-eye fs-2"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Visão</h4>
                            <p class="small text-white">
                                Ser uma comunidade cristã referência em acolhimento, formação espiritual e impacto social, alcançando vidas em toda a cidade.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card h-100 border-0 bg-transparent card-mvv">
                        <div class="card-body text-white">
                            <div class="icon-circulo shadow-sm">
                                <i class="bi bi-star fs-2"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Valores</h4>
                            <p class="small text-white">
                                Amor ao próximo, integridade, oração, comunhão, serviço, ensino bíblico e compromisso com a justiça social.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-5 text-azul-escuro">Nossa Liderança</h2>

            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="avatar-iniciais shadow-sm">AN</div>
                    <h5 class="fw-bold mb-1">Andrey Naumann</h5>
                    <p class="text-muted small">Pastor Titular</p>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="avatar-iniciais shadow-sm">AN</div>
                    <h5 class="fw-bold mb-1">Andrey Naumann</h5>
                    <p class="text-muted small">Pastor Titular</p>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="avatar-iniciais shadow-sm">DM</div>
                    <h5 class="fw-bold mb-1">Pr. Daniel Moreira</h5>
                    <p class="text-muted small">Coordenador de Missões</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'template/footer.php'; ?>