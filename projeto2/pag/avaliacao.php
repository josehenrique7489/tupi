
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avaliações dos Clientes | Tupi Mudanças</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">

    <style>
        :root {
            --azul: #0645a5;
            --azul-escuro: #1b2b4b;
            --azul-claro: #e5efff;
            --cinza: #dedede;
            --texto: #394d68;
            --dourado: #f0ae36;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f6f8;
            color: var(--azul-escuro);
        }

        /* MENU */
        .navbar {
            background: #fff;
            min-height: 72px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
        }

        .navbar-brand {
            color: var(--azul-escuro);
            font-size: 1.3rem;
            font-weight: 800;
        }

        .navbar-brand i {
            color: var(--azul);
        }

        .navbar .nav-link {
            color: #555;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--azul);
        }

        .btn-orcamento {
            color: #fff;
            background: #3c5e9f;
            border-radius: 30px;
            padding: 10px 20px;
        }

        .btn-orcamento:hover {
            color: #fff;
            background: var(--azul-escuro);
        }

        /* ÁREA DAS AVALIAÇÕES */
        .avaliacoes {
            position: relative;
            overflow: hidden;
            isolation: isolate;
            min-height: 85vh;
            padding: 75px 0 90px;
            background: var(--cinza);
        }

        /* Formas azuis decorativas */
        .onda {
            position: absolute;
            z-index: -1;
            pointer-events: none;
        }

        .onda-topo {
            top: 0;
            left: 0;
            width: 100%;
            height: 350px;
        }

        .onda-base {
            bottom: 0;
            left: 0;
            width: 100%;
            height: 300px;
        }

        .titulo-avaliacoes {
            text-align: center;
            margin-bottom: 45px;
            position: relative;
        }

        .titulo-avaliacoes h1 {
            color: #080808;
            font-size: clamp(2.3rem, 6vw, 4.5rem);
            font-weight: 800;
            letter-spacing: 5px;
            margin-bottom: 0;
        }

        .titulo-avaliacoes .subtitulo {
            color: #171717;
            font-family: Georgia, serif;
            font-style: italic;
            font-size: clamp(2rem, 5vw, 3.4rem);
            margin-top: -5px;
        }

        .titulo-avaliacoes p {
            max-width: 650px;
            margin: 20px auto 0;
            color: #374761;
            line-height: 1.8;
        }

        /* CARTÃO */
        .avaliacao-card {
            max-width: 850px;
            margin: 0 auto;
            padding: 0 0 25px;
            position: relative;
        }

        .avatar {
            width: 100px;
            height: 100px;
            margin: 0 auto -8px;
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: white;
            border: 6px solid #fff;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .1);
            color: var(--azul);
            font-size: 2.5rem;
        }

        .moldura-avaliacao {
            padding: 24px;
            background: #a7a7a7;
            border-radius: 45px;
            box-shadow: 0 20px 22px rgba(0, 0, 0, .18);
        }

        .conteudo-avaliacao {
            padding: 25px 30px;
            background: #fff;
            border-radius: 4px;
        }

        .nome-cliente {
            color: #333;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .detalhes-avaliacao {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 22px;
        }

        .informacoes-cliente {
            border-right: 1px solid #ccc;
            padding-right: 15px;
            color: #666;
            font-size: .92rem;
            line-height: 1.9;
        }

        .informacoes-cliente strong {
            color: #454545;
        }

        .notas-cliente {
            color: #777;
            font-size: .92rem;
        }

        .linha-nota {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            margin-bottom: 8px;
        }

        .estrelas {
            color: var(--dourado);
            white-space: nowrap;
            letter-spacing: 1px;
        }

        .comentario {
            color: #222;
            font-size: 1.05rem;
            font-weight: 600;
            line-height: 1.75;
            overflow-wrap: anywhere;
            margin: 0;
        }

        .data-avaliacao {
            margin-top: 15px;
            color: #7186a2;
            font-size: .88rem;
        }

        /* QUANDO NÃO HÁ AVALIAÇÕES */
        .sem-avaliacoes {
            max-width: 650px;
            margin: 0 auto;
            padding: 35px 25px;
            background: white;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        }

        .sem-avaliacoes i {
            color: var(--azul);
            font-size: 3rem;
        }

        .sem-avaliacoes h2 {
            font-size: 1.5rem;
            font-weight: 800;
            margin-top: 15px;
        }

        .sem-avaliacoes p {
            color: #68788d;
            line-height: 1.7;
        }

        /* CHAMADA FINAL */
        .chamada-final {
            position: relative;
            margin-top: 55px;
            padding: 28px;
            border-radius: 18px;
            color: white;
            background: linear-gradient(110deg, #0645a5, #1b2b4b);
            box-shadow: 0 12px 25px rgba(0, 0, 0, .12);
        }

        .chamada-final h2 {
            font-size: clamp(1.3rem, 3vw, 2rem);
            font-weight: 800;
        }

        .chamada-final p {
            color: #e1eaff;
            margin: 0;
        }

        .chamada-final .btn {
            background: white;
            color: var(--azul);
            border-radius: 30px;
            padding: 12px 20px;
            font-weight: 700;
        }

        footer {
            padding: 22px 0;
            background: white;
            color: #68788d;
            text-align: center;
            font-size: .9rem;
        }

        @media (max-width: 767px) {
            .avaliacoes {
                padding: 55px 0;
            }

            .titulo-avaliacoes h1 {
                letter-spacing: 2px;
            }

            .moldura-avaliacao {
                padding: 12px;
                border-radius: 28px;
            }

            .conteudo-avaliacao {
                padding: 22px 18px;
            }

            .detalhes-avaliacao {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .informacoes-cliente {
                border-right: 0;
                border-bottom: 1px solid #ddd;
                padding-bottom: 12px;
            }

            .linha-nota {
                justify-content: flex-start;
            }

            .chamada-final {
                text-align: center;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">
                <i class="bi bi-truck-front-fill me-2"></i>
                TUPI <span class="text-dark">MUDANÇAS</span>
            </a>

            <button class="navbar-toggler"
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
                        <a class="nav-link" href="quemsomos.php">Quem Somos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="servicos.php">Serviços</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="diferencial.php">Diferenciais</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="avaliacoes.php">
                            Avaliações
                        </a>
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
                        <a class="btn btn-orcamento" href="orcamento.php">
                            <i class="bi bi-calculator me-2"></i>
                            Orçamento
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- AVALIAÇÕES -->
    <main>
        <section class="avaliacoes">

            <!-- Ondas decorativas superiores -->
            <svg class="onda onda-topo"
                 viewBox="0 0 1440 400"
                 preserveAspectRatio="none"
                 aria-hidden="true">

                <path d="M0 0 H1440 V80
                         C1200 170 1080 0 850 40
                         S450 240 0 100 Z"
                      fill="#0645a5"/>

                <path d="M0 10 C250 150 400 0 650 100
                         S1050 240 1440 70"
                      fill="none" stroke="#9bb6df"
                      stroke-width="1.5"/>

                <path d="M0 25 C250 165 400 15 650 115
                         S1050 255 1440 85"
                      fill="none" stroke="#9bb6df"
                      stroke-width="1.5"/>

                <path d="M0 40 C250 180 400 30 650 130
                         S1050 270 1440 100"
                      fill="none" stroke="#9bb6df"
                      stroke-width="1.5"/>

                <path d="M0 55 C250 195 400 45 650 145
                         S1050 285 1440 115"
                      fill="none" stroke="#9bb6df"
                      stroke-width="1.5"/>
            </svg>

            <div class="container position-relative">

                <!-- TÍTULO -->
                <div class="titulo-avaliacoes">
                    <h1>FEEDBACK</h1>
                    <div class="subtitulo">dos clientes</div>

                    <p>
                        A confiança dos nossos clientes é a nossa maior
                        conquista. Confira as avaliações sobre a experiência
                        de mudar com a Tupi Mudanças.
                    </p>
                </div>

                

                <!-- CARTÃO DEMONSTRATIVO
                     Remova este cartão quando ativar a consulta ao banco. -->
                <article class="avaliacao-card">

                    <div class="avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>

                    <div class="moldura-avaliacao">
                        <div class="conteudo-avaliacao">

                            <h2 class="nome-cliente">
                                Cliente da Tupi
                            </h2>

                            <div class="detalhes-avaliacao">

                                <div class="informacoes-cliente">
                                    <strong>Serviço:</strong> Mudança<br>
                                    <strong>Atendimento:</strong> Tupi Mudanças<br>
                                    <strong>Nota:</strong> Excelente
                                </div>

                                <div class="notas-cliente">

                                    <div class="linha-nota">
                                        <span>Pontualidade</span>
                                        <span class="estrelas">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                    </div>

                                    <div class="linha-nota">
                                        <span>Agilidade</span>
                                        <span class="estrelas">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                    </div>

                                    <div class="linha-nota">
                                        <span>Cuidado</span>
                                        <span class="estrelas">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                    </div>

                                </div>
                            </div>

                            <p class="comentario">
                                A Tupi Mudanças busca oferecer um atendimento
                                cuidadoso e organizado, com atenção aos
                                pertences dos clientes durante todas as
                                etapas da mudança.
                            </p>

                            <div class="data-avaliacao">
                                Exemplo de apresentação de depoimento
                            </div>

                        </div>
                    </div>
                </article>

                <!-- CHAMADA FINAL -->
                <div class="chamada-final">
                    <div class="row align-items-center g-4">

                        <div class="col-12 col-md-8">
                            <h2>
                                Sua opinião também é importante!
                            </h2>

                            <p>
                                Compartilhe sua experiência com a Tupi Mudanças.
                            </p>
                        </div>

                        <div class="col-12 col-md-4 text-md-end">
                            <a href="avaliar.php" class="btn">
                                <i class="bi bi-star-fill me-2"></i>
                                Avaliar nosso serviço
                            </a>
                        </div>
                        <a
                    href="../index.html"
                    class="btn btn-light btn-lg rounded-pill px-4 mt-3 fw-semibold"
                       style="color: #203f70;">

                    ← Home

                </a>
                    </div>
                </div>

            </div>

            <!-- Ondas decorativas inferiores -->
            <svg class="onda onda-base"
                 viewBox="0 0 1440 350"
                 preserveAspectRatio="none"
                 aria-hidden="true">

                <path d="M0 100
                         C180 20 160 260 390 260
                         S650 350 850 300
                         S1200 180 1440 250
                         V350 H0 Z"
                      fill="#0645a5"/>

                <path d="M0 180 C250 20 350 300 650 180
                         S1050 80 1440 230"
                      fill="none" stroke="#9bb6df"
                      stroke-width="1.5"/>

                <path d="M0 195 C250 35 350 315 650 195
                         S1050 95 1440 245"
                      fill="none" stroke="#9bb6df"
                      stroke-width="1.5"/>

                <path d="M0 210 C250 50 350 330 650 210
                         S1050 110 1440 260"
                      fill="none" stroke="#9bb6df"
                      stroke-width="1.5"/>
            </svg>

        </section>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
