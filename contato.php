<?php 
    $pagina_atual = 'contato';
    include 'template/header.php'; 
?>

<main style="background-color: var(--cinza-fundo); flex-grow: 1;">
    
    <section class="bg-hero py-5 text-center">
        <div class="container py-4">
            <p class="text-uppercase small fw-bold text-white tracking-wider mb-2" style="letter-spacing: 2px;">
                Contato
            </p>
            <h1 class="display-5 fw-bold text-white mb-3" style="font-family: Georgia, serif;">Fale Conosco</h1>
            <p class="lead text-white mx-auto" style="max-width: 600px;">
                Estamos aqui para ouvir você.<br>Entre em contato ou visite-nos pessoalmente.
            </p>
        </div>
    </section>

    <section class="pb-5 mb-5 py-5">
        <div class="container">
            <div class="row justify-content-center g-5">
                
                <div class="col-12 col-lg-5">
                    
                    <div class="d-flex mb-4">
                        <div class="icon-contato me-3 shadow-sm">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Endereço</h6>
                            <p class="text-muted small mb-0">Av. Prefeito José Juvenal Mafra, 1681<br>Centro, Navegantes, SC</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="icon-contato me-3 shadow-sm">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Telefone</h6>
                            <p class="text-muted small mb-0">(47) 9700-0705</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="icon-contato me-3 shadow-sm">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">WhatsApp</h6>
                            <a href="https://wa.me/554797360105" target="_blank" class="text-muted small text-decoration-none border-bottom border-secondary">(47) 9736-0105</a>
                        </div>
                    </div>

                    <div class="d-flex mb-5">
                        <div class="icon-contato me-3 shadow-sm">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">E-mail</h6>
                            <a href="mailto:andreynaumann09@gmail.com" class="text-muted small text-decoration-none border-bottom border-secondary">andreynaumann09@gmail.com</a>
                        </div>
                    </div>

                    <div class="mt-4">
                        <iframe class="w-100 shadow-sm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.5348716485523!2d-48.6460138!3d-26.8865151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8cc23989ffc23%3A0xd455f5ac27896a49!2sAv.%20Pref.%20Jos%C3%A9%20Juvenal%20Mafra%2C%201681%20-%20Centro%2C%20Navegantes%20-%20SC%2C%2088372-080!5e0!3m2!1spt-BR!2sbr!4v1775776305451!5m2!1spt-BR!2sbr" height="300" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-1">
                    <h4 class="fw-bold mb-4 text-azul-escuro">Envie sua mensagem</h4>

                    <?php if (isset($_GET['erro'])): ?>
                        <?php elseif ($_GET['erro'] == 'nome'): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!</strong> Por favor, insira seu nome.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php if ($_GET['erro'] == 'email'): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!</strong> Por favor, insira um endereço de e-mail válido.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php elseif ($_GET['erro'] == 'tamanho'): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!</strong> Sua mensagem deve conter entre 1 e 500 caracteres.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <form action="enviar_wpp.php" method="POST">
    
                        <div class="mb-4">
                            <label for="nome" class="form-label fw-semibold small mb-1">Nome</label>
                            <input type="text" name="nome" class="form-control form-control-linha" id="nome" placeholder="Seu nome completo" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold small mb-1">E-mail</label>
                            <input type="email" name="email" class="form-control form-control-linha" id="email" placeholder="seu@email.com" required>
                        </div>

                        <div class="mb-5">
                            <label for="mensagem" class="form-label fw-semibold small mb-1">Mensagem</label>
                            <textarea name="mensagem" class="form-control form-control-linha" id="mensagem" rows="4" placeholder="Como podemos ajudar?" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-secondary px-4 py-2 bg-white text-dark fw-medium border-2" style="border-radius: 6px;">
                            Enviar mensagem no WhatsApp
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'template/footer.php'; ?>