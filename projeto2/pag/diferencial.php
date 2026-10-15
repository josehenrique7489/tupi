
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Diferenciais | Tupi Mudanças</title>

    <!-- Bootstrap 5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>
        :root {
            --azul-escuro: #1b2b4b;
            --azul-principal: #3c5e9f;
            --azul-claro: #83a8ff;
            --fundo: #f6f7f9;
            --texto: #607087;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--fundo);
            color: var(--azul-escuro);
        }

        /* MENU */
        .navbar {
            background-color: #fff;
            min-height: 72px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .navbar-brand {
            color: var(--azul-escuro);
            font-size: 1.35rem;
            font-weight: 800;
        }

        .navbar-brand i {
            color: var(--azul-principal);
        }

        .navbar .nav-link {
            color: #555;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--azul-principal);
        }

        .btn-orcamento {
            background: var(--azul-principal);
            color: white;
            border-radius: 30px;
            padding: 10px 22px;
            border: none;
        }

        .btn-orcamento:hover {
            background: var(--azul-escuro);
            color: white;
        }

        /* CABEÇALHO */
        .hero-diferenciais {
            background: linear-gradient(
                110deg,
                #1b2b4b 0%,
                #293f6c 55%,
                #3c5e9f 100%
            );
            color: white;
            padding: 85px 0;
        }

        .hero-selo {
            display: inline-block;
            padding: 7px 14px;
            margin-bottom: 22px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.12);
            border-radius: 30px;
            font-size: 0.78rem;
            font-weight: 700;
        }

        .hero-diferenciais h1 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .hero-diferenciais h1 span {
            color: var(--azul-claro);
        }

        .hero-diferenciais p {
            max-width: 720px;
            font-size: 1.05rem;
            line-height: 1.9;
            margin-bottom: 0;
        }

        /* SEÇÃO */
        .secao-diferenciais {
            padding: 65px 0 75px;
            background: var(--fundo);
        }

        .secao-selo {
            display: inline-block;
            background: #e5edfc;
            color: var(--azul-principal);
            padding: 7px 15px;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .titulo-secao {
            color: var(--azul-escuro);
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            font-weight: 800;
            margin-bottom: 15px;
        }

        .descricao-secao {
            max-width: 650px;
            margin: 0 auto;
            color: var(--texto);
            line-height: 1.8;
        }

        /* CARDS */
        .card-diferencial {
            height: 100%;
            background: #fff;
            border: 1px solid #edf0f4;
            border-radius: 17px;
            padding: 28px;
            box-shadow: 0 4px 15px rgba(26, 43, 75, 0.035);
            transition: transform 0.25s ease,
                        box-shadow 0.25s ease;
        }

        .card-diferencial:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(26, 43, 75, 0.09);
        }

        .icone-card {
            width: 78px;
            height: 78px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: #e6edfb;
            color: var(--azul-principal);
            font-size: 2.2rem;
        }

        .card-diferencial h3 {
            font-size: 1.22rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 12px;
            color: var(--azul-escuro);
        }

        .card-diferencial p {
            color: var(--texto);
            font-size: 0.95rem;
            line-height: 1.8;
            margin: 0;
        }

        /* BANNER FINAL */
        .banner-final {
            padding: 35px;
            border-radius: 18px;
            color: #fff;
            background: linear-gradient(
                110deg,
                #1b2b4b,
                #3c5e9f
            );
        }

        .banner-final .icone-banner {
            font-size: 3.7rem;
            color: #b4ccff;
        }

        .banner-final h2 {
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 800;
            margin-bottom: 8px;
        }

        .banner-final p {
            color: #dce7ff;
            font-size: 1.15rem;
            margin: 0;
        }

        .banner-final .btn {
            color: var(--azul-escuro);
            background: #fff;
            font-weight: 700;
            border-radius: 30px;
            padding: 12px 22px;
        }

        .banner-final .btn:hover {
            background: #e5edfc;
        }

        /* RODAPÉ */
        footer {
            background: #fff;
            color: var(--texto);
            padding: 22px 0;
            border-top: 1px solid #e9edf3;
            font-size: 0.9rem;
        }

        @media (max-width: 767px) {
            .hero-diferenciais {
                padding: 60px 0;
            }

            .secao-diferenciais {
                padding: 45px 0;
            }

            .card-diferencial {
                padding: 25px;
            }

            .banner-final {
                padding: 28px 20px;
                text-align: center;
            }

            .banner-final .icone-banner {
                font-size: 3rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .card-diferencial {
                transition: none;
            }
        }
    </style>
</head>

<body>

    <!-- MENU PRINCIPAL -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">
                <i class="bi bi-bus-front-fill me-2"></i>
                TUPI <span class="text-dark">MUDANÇAS</span>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Abrir menu">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="quemsomos.php">
                            Quem Somos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="servicos.php">
                            Serviços
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active"
                           aria-current="page"
                           href="">
                            Diferenciais
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Avaliacao.php">Avaliação</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="https://wa.me/5561996877021?text=Olá!%20Gostaria%20de%20mais%20informações%20sobre%20os%20serviços%20da%20Tupi%20Mudanças."
                           target="_blank"
                           rel="noopener noreferrer">
                            <i class="bi bi-whatsapp me-1"></i>
                            Fale Conosco
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-orcamento"
                           href="orcamento.php">
                            <i class="bi bi-calculator me-2"></i>
                            Orçamento
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- CABEÇALHO -->
    <header class="hero-diferenciais">
        <div class="container">

            <div class="hero-selo">
                <i class="bi bi-truck me-2"></i>
                TUPI MUDANÇAS E TRANSPORTES
            </div>

            <h1>
                Nossos Diferenciais:
                <span>cuidado em cada mudança.</span>
            </h1>

            <p>
                Mais do que transportar seus pertences, cuidamos de
                cada detalhe para proporcionar uma mudança com
                praticidade, segurança e tranquilidade.
            </p>

        </div>
    </header>

    <!-- DIFERENCIAIS -->
    <main>
        <section class="secao-diferenciais">
            <div class="container">

                <div class="text-center mb-5">

                    <span class="secao-selo">
                        POR QUE NOS ESCOLHER
                    </span>

                    <h2 class="titulo-secao">
                        Uma mudança feita para você
                    </h2>

                    <p class="descricao-secao">
                        Na Tupi Mudanças, cada mudança é tratada com
                        cuidado, responsabilidade e compromisso.
                        Conheça os diferenciais que tornam nosso
                        atendimento especial.
                    </p>

                </div>

                <div class="row g-4">

                    <!-- CARD 1 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card-diferencial">

                            <div class="icone-card">
                                <i class="bi bi-truck-front"></i>
                            </div>

                            <h3>Experiência e confiança</h3>

                            <p>
                                Mais de 9 anos de experiência no mercado
                                de mudanças residenciais e empresariais,
                                com compromisso e profissionalismo.
                            </p>

                        </article>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card-diferencial">

                            <div class="icone-card">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <h3>Segurança em cada etapa</h3>

                            <p>
                                Cuidado com seus móveis e pertences
                                durante a embalagem, o transporte e
                                a entrega no destino.
                            </p>

                        </article>
                    </div>

                    <!-- CARD 3 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card-diferencial">

                            <div class="icone-card">
                                <i class="bi bi-stopwatch"></i>
                            </div>

                            <h3>Agilidade e pontualidade</h3>

                            <p>
                                Planejamento e organização para tornar
                                sua mudança mais rápida, eficiente e
                                tranquila.
                            </p>

                        </article>
                    </div>

                    <!-- CARD 4 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card-diferencial">

                            <div class="icone-card">
                                <i class="bi bi-box-seam"></i>
                            </div>

                            <h3>Cuidado com seus pertences</h3>

                            <p>
                                Atenção aos detalhes para preservar
                                seus móveis e objetos pessoais em
                                todas as etapas do processo.
                            </p>

                        </article>
                    </div>

                    <!-- CARD 5 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card-diferencial">

                            <div class="icone-card">
                                <i class="bi bi-people"></i>
                            </div>

                            <h3>Atendimento personalizado</h3>

                            <p>
                                Cada cliente recebe atenção especial,
                                com soluções adequadas às suas
                                necessidades e ao tipo de mudança.
                            </p>

                        </article>
                    </div>

                    <!-- CARD 6 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="card-diferencial">

                            <div class="icone-card">
                                <i class="bi bi-heart"></i>
                            </div>

                            <h3>Compromisso com a satisfação</h3>

                            <p>
                                Trabalhamos para oferecer qualidade,
                                transparência e tranquilidade do início
                                ao fim da sua mudança.
                            </p>

                        </article>
                    </div>

                </div>






                <section id="contato" class="py-5">
            <div class="container py-3">

                <div class="text-white text-center rounded-4 shadow p-4 p-md-5"
                     style="background: linear-gradient(110deg, #142846 0%, #203f70 55%, #315b9b 100%);">

                    <i class="bi bi-house-heart display-2"></i>

                    <h2 class="fw-bold mt-3">
                    Tupi Mudanças
                    </h2>

                    <p class="lead mx-auto mt-3"
                       style="max-width: 700px;">
                       Sua mudança em boas mãos!
                    </p>

                    <a href="orcamento.php"
                       class="btn btn-light btn-lg rounded-pill px-4 mt-3 fw-semibold"
                       style="color: #203f70;">

                        <i class="bi bi-calculator me-2"></i>
                        Solicitar orçamento

                    </a>
                    <a
                    href="../index.html"
                    class="btn btn-light btn-lg rounded-pill px-4 mt-3 fw-semibold"
                       style="color: #203f70;">

                    ← Home

                </a>


            </div>
        </section>







                <!-- BANNER FINAL -->
                
    </main>

    <!-- RODAPÉ -->
    <footer class="text-white text-center py-4"
            style="background: linear-gradient(110deg, #142846 0%, #203f70 55%, #315b9b 100%);">

        <div class="container">

            <a href="../index.html"
               class="text-white text-decoration-none fw-bold fs-5">
                <i class="bi bi-truck-front-fill me-2"></i>
                TUPI MUDANÇAS
            </a>

            <hr class="border-light opacity-25 my-3">

            <p class="mb-0 text-white-50">
                © 2026 Tupi Mudanças. Todos os direitos reservados.
            </p>

        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
