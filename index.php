<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/styles.css">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>

<body>
    <!-- Background Container -->
    <div class="background"></div>

    <!-- Content Container -->
    <div class="content">
        <?php include_once 'components/nav.php'; ?>

        <!-- Main Section -->
        <div class="container text-left main-section" id="home">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-md-6 text-content">
                    <h1>Transforme suas ideias em <span class="highlight">projetos de festa</span> incríveis com apenas alguns cliques! 🎉</h1>
                    <p>O CenarioStudio é a única plataforma criada especialmente para decoradores de festas. Fácil, prática e 100% online. Muito melhor que Canva, Photoshop e Corel! 😉</p>
                    <a href="https://cenariostudio.com.br/register/" class="btn btn-primary btn-lg">Teste agora</a>
                </div>
                <!-- Video Content -->
                <div class="col-md-6 video-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6YV9Xe0KMHk?si=8f8KMMNxcMR8iMth" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div id="funcoes" class="container py-5 text-center mt-5">
            <h2>Funcionalidades</h2>
            <p>O que tem dentro da cenario Studio?</p>
        </div>


        <section class="container py-5">
            <div class="row feature-row p-4">
                <!-- Funcionalidade 1 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <img src="/assets/icon/baloes.png" alt="Icon 1" height="50">
                    </div>
                    <h4 class="feature-title">Adicione balões com 1 clique</h4>
                    <p class="feature-description">🎈 Acesse nosso acervo completo com milhares de artes exclusivas da Cenario. Temas incríveis para personalizar cada projeto! 🌟</p>
                </div>

                <!-- Funcionalidade 2 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <img src="/assets/icon/sublimados.png" alt="Icon 2" height="50">
                    </div>
                    <h4 class="feature-title">Acesso a sublimados exclusivos</h4>
                    <p class="feature-description">🎨 Acesse nosso acervo completo com milhares de artes exclusivas da Cenario. Temas incríveis para personalizar cada projeto! 🌟</p>
                </div>

                <!-- Funcionalidade 3 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <img src="/assets/icon/moveis.png" alt="Icon 3" height="50">
                    </div>
                    <h4 class="feature-title">Móveis, displays e objetos</h4>
                    <p class="feature-description">🪑 Explore um banco de imagens repleto de móveis, displays e objetos. Tudo ao alcance de um clique! 🖱️</p>
                </div>

                <!-- Funcionalidade 4 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <img src="/assets/icon/estruturas.png" alt="Icon 4" height="50">
                    </div>
                    <h4 class="feature-title">Estruturas prontas</h4>
                    <p class="feature-description">🛠️ Quer formas incríveis? Use estruturas como arcos romanos, cilindros e muito mais. Basta encaixar suas imagens para um visual impecável. 🎯</p>
                </div>


                <!-- Funcionalidade 5 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <img src="/assets/icon/uploads.png" alt="Icon 5" height="50">
                    </div>
                    <h4 class="feature-title">Uploads personalizados</h4>
                    <p class="feature-description">📸 Use qualquer imagem que desejar! Faça upload de fotos do seu acervo ou use imagens da internet e adapte ao seu projeto. 🔄</p>
                </div>

                <!-- Funcionalidade 6 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <img src="/assets/icon/orcamento.png" alt="Icon 6" height="50">
                    </div>
                    <h4 class="feature-title">Orçamento profissional</h4>
                    <p class="feature-description">💼 Gere um orçamento completo e personalizado com apenas 1 clique! Inclua sua logo e ofereça mais profissionalismo ao seu cliente. ✅</p>
                </div>

                <!-- Adicione mais colunas conforme necessário -->
            </div>
        </section>

        <div id="inspiration" class="container text-center py-5 ">
            <h2>Inspire-se com projetos incríveis</h2>
            <p>Veja alguns dos projetos espetaculares que decoradoras já criaram no CenarioStudio. A sua festa pode ser a próxima a brilhar!</p>
        </div>

        <section class="container py-5">
            <div class="slick-image-carousel">
                <!-- Imagem 1 -->
                <div>
                    <img src="/assets/projects/thumbnail_546.jpg" alt="Imagem 1" class="img-fluid">
                </div>
                <!-- Imagem 2 -->
                <div>
                    <img src="/assets/projects/thumbnail_549.jpg" alt="Imagem 2" class="img-fluid">
                </div>
                <!-- Imagem 3 -->
                <div>
                    <img src="/assets/projects/thumbnail_557.jpg" alt="Imagem 3" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_569.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_573.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_574.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_593.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_596.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_607.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_610.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_683.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Imagem 4 -->
                <div>
                    <img src="/assets/projects/thumbnail_737.jpg" alt="Imagem 4" class="img-fluid">
                </div>
                <!-- Adicione mais imagens conforme necessário -->
            </div>
        </section>

        <!-- Seções adicionais para demonstrar rolagem -->
        <section id="benefits" class="container py-5 text-center">
            <h2>Benefícios</h2>
            <p>Descubra como o CenarioStudio pode transformar sua experiência na criação de festas!</p>
        </section>

        <section class="container py-5">
            <div class="row feature-row p-4">
                <!-- Benefício 1 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <span style="font-size: 40px;">👍</span>
                    </div>
                    <h4 class="feature-title">Fácil de usar</h4>
                    <p class="feature-description">Não precisa de treinamento. Se você tem criatividade e ama decorar festas, você já está pronta para usar o CenarioStudio! Se precisar, temos um canal no YouTube cheio de dicas gratuitas pra te ajudar. 🥰</p>
                </div>

                <!-- Benefício 2 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <span style="font-size: 40px;">⏱️</span>
                    </div>
                    <h4 class="feature-title">Ganhe tempo</h4>
                    <p class="feature-description">Crie projetos incríveis em minutos! Faça alterações com poucos cliques e encante seus clientes! ⚡</p>
                </div>

                <!-- Benefício 3 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <span style="font-size: 40px;">💡</span>
                    </div>
                    <h4 class="feature-title">Muito mais prático (e barato) que Canva ou Photoshop</h4>
                    <p class="feature-description">Criado exclusivamente para decoradoras de festa. Nada se compara em rapidez e praticidade! 🎉</p>
                </div>

                <!-- Benefício 4 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <span style="font-size: 40px;">🤝</span>
                    </div>
                    <h4 class="feature-title">Feche mais contratos</h4>
                    <p class="feature-description">Com um projeto profissional, suas chances de fechar negócio aumentam drasticamente. Mais clientes, mais festas! 💼</p>
                </div>

                <!-- Benefício 5 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <span style="font-size: 40px;">🔄</span>
                    </div>
                    <h4 class="feature-title">Zero erros na montagem</h4>
                    <p class="feature-description">Sua equipe seguirá cada detalhe sem falhas, garantindo uma execução perfeita do seu projeto! ✔️</p>
                </div>

                <!-- Benefício 6 -->
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <div class="feature-icon mb-3">
                        <span style="font-size: 40px;">💰</span>
                    </div>
                    <h4 class="feature-title">Valorize seu trabalho</h4>
                    <p class="feature-description">Com projetos de alta qualidade, seus clientes vão perceber o verdadeiro valor do seu trabalho e pagar o que você merece! 🙌</p>
                </div>
            </div>
        </section>

        <div id="evaluation" class="container py-5 text-center">
            <h2>Avaliações</h2>
            <p>O que nossos clientes dizem</p>
        </div>

        <section class="container">
            <h2 class="text-center mb-4"></h2>
            <div class="slick-carousel">
                <!-- Avaliação 1 -->
                <div class="review-card text-center p-4">
                    <img src="/assets/people/JaquelineFurtado.jpeg" alt="User 2" class="img-fluid rounded-circle mb-3" width="80">
                    <h5 class="review-user">Jaqueline Emke</h5>
                    <p class="review-text">"Meninaaaaaa, fui fazer projeto aqui na plataforma de vocês e QUE MARAVILHA. Extremamente prático e fácil de usar, um projeto que demorava 1h-1h30 pra fazer em outro lugar, na de vocês fiz em 25min"</p>
                </div>
                <!-- Avaliação 2 -->
                <div class="review-card text-center p-4">
                    <img src="/assets/people/jdDecoracoes.jpeg" alt="User 2" class="img-fluid rounded-circle mb-3" width="80">
                    <h5 class="review-user">JD Decorações</h5>
                    <p class="review-text">"Me ajudou muito essa plataforma de vcs, pq ai minhas funcionárias não se perdem nas montagens."</p>
                </div>
                <!-- Avaliação 3 -->
                <div class="review-card text-center p-4">
                    <img src="/assets/people/BheatrizSousa.jpg" alt="User 3" class="img-fluid rounded-circle mb-3" width="80">
                    <h5 class="review-user">Bheatriz Sousa</h5>
                    <p class="review-text">"Facilidade em mexer, muito bem dividido, ótimas opções de acessórios. Acho que faltaram um pouco mais de opções de móveis, como mesa, palco, cubo. Fora isso, maravilhoso esse site, minha gratidão."</p>
                </div>
                <!-- Avaliação 3 -->
                <div class="review-card text-center p-4">
                    <img src="/assets/people/FabiolaIeda.jpg" alt="User 3" class="img-fluid rounded-circle mb-3" width="80">
                    <h5 class="review-user">Fabíola Iêda</h5>
                    <p class="review-text">"Amei a ferramenta e só tenho a agradecer. Após meu feedback por WhatsApp, ela melhorou ainda mais! Estão de parabéns, é uma ferramenta prática que nos auxilia muito na nossa vida corrida de decoradora."</p>
                </div>
                <!-- Avaliação 3 -->
                <div class="review-card text-center p-4">
                    <img src="/assets/people/GiseleMoreira.jpg" alt="User 3" class="img-fluid rounded-circle mb-3" width="80">
                    <h5 class="review-user">Gisele Moreira</h5>
                    <p class="review-text">"Muito prática, o trabalho fica lindo, pois antes eu fazia montagens bem grosseiras. Estou aprendendo... adorei!"</p>
                </div>
                <!-- Avaliação 3 -->
                <div class="review-card text-center p-4">
                    <img src="/assets/people/MeninaArteira.jpg" alt="User 3" class="img-fluid rounded-circle mb-3" width="80">
                    <h5 class="review-user">Menina Arteira</h5>
                    <p class="review-text">"Adorei a plataforma, facilidade e utilidade pra nós que é do ramo, muito pratica e fácil de usar, dar pr afazer festas lindas 👏🏻❤️"</p>
                </div>
            </div>
        </section>

        <!-- Main Section -->
        <div class="container text-left main-section" id="test">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-md-6 text-content">
                    <h1>Experimente por <span class="highlight">7 dias</span>  grátis!</h1>
                    <p>Teste o CenarioStudio sem compromisso. Não pedimos cartão de crédito nem pagamento antecipado. Aproveite 7 dias de acesso ilimitado e descubra como é fácil criar projetos de festa que impressionam e fecham negócios! 💳❌</p>
                    <a href="https://cenariostudio.com.br/register/" class="btn btn-primary btn-lg">Teste agora</a>
                </div>
                <!-- Video Content -->
                <div class="col-md-6 ">
                    <img src="/assets/projects/thumbnail_460.jpg" style="width: 100%; border-radius: 20px" alt="">
                </div>
            </div>
        </div>

        <div id="evaluafgtion" class="container py-5 mt-5 text-center">
            <!--<h2>Saiba mais</h2>
            <p>O que nossos clientes dizem</p>-->
        </div>
        

    </div>

    <?php include_once 'components/footer.php'; ?>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Custom JS for Navbar and Smooth Scroll -->
    <script>
        $(document).ready(function() {
            // Navbar scroll effect
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });

            // Smooth scroll for navbar links
            $('.navbar-nav a[href^="#"]').on('click', function(event) {
                event.preventDefault();
                var target = this.hash;
                var $target = $(target);

                $('html, body').animate({
                    'scrollTop': $target.offset().top - 70 // Ajuste para a altura da navbar
                }, 800, 'swing');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slick-carousel').slick({
                dots: true, // Adiciona pontos de navegação
                infinite: true, // Loop infinito
                speed: 300, // Velocidade de transição
                slidesToShow: 3, // Quantidade de slides visíveis
                slidesToScroll: 1, // Quantidade de slides a serem rolados
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.slick-image-carousel').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
                pauseOnHover: true, // Pausa o autoplay ao passar o mouse
                pauseOnFocus: true, // Pausa o autoplay ao focar no slider
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>



</body>

</html>