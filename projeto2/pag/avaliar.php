
<?php
session_start();

include_once("../conexao.php");

mysqli_set_charset($conexao, "utf8mb4");

$mensagem = "";
$tipoMensagem = "";

$nome = "";
$nota = 5;
$comentario = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = trim($_POST["nome"] ?? "");
    $nota = filter_var(
        $_POST["nota"] ?? null,
        FILTER_VALIDATE_INT
    );
    $comentario = trim($_POST["comentario"] ?? "");

    if (
        $nome === "" ||
        mb_strlen($nome) > 100 ||
        $nota === false ||
        $nota === null ||
        $nota < 1 ||
        $nota > 5 ||
        $comentario === "" ||
        mb_strlen($comentario) > 2000
    ) {
        $mensagem = "Preencha todos os campos corretamente. A nota deve ser de 1 a 5 estrelas.";
        $tipoMensagem = "danger";

    } else {

        $sql = "INSERT INTO avaliacoes
                (nome, nota, comentario, status)
                VALUES (?, ?, ?, 'pendente')";

        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {

            mysqli_stmt_bind_param(
                $stmt,
                "sis",
                $nome,
                $nota,
                $comentario
            );

            if (mysqli_stmt_execute($stmt)) {

                $mensagem = "Sua avaliação foi enviada com sucesso! Ela será publicada após a aprovação da nossa equipe.";
                $tipoMensagem = "success";

                $nome = "";
                $nota = 5;
                $comentario = "";

            } else {

                $mensagem = "Não foi possível enviar sua avaliação. Tente novamente.";
                $tipoMensagem = "danger";
            }

            mysqli_stmt_close($stmt);

        } else {

            $mensagem = "Não foi possível preparar o envio. Verifique a configuração do banco de dados.";
            $tipoMensagem = "danger";
        }
    }
}

function e($valor) {
    return htmlspecialchars(
        (string) $valor,
        ENT_QUOTES,
        "UTF-8"
    );
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avalie sua Experiência | Tupi Mudanças</title>

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
            --azul: #0645a5;
            --azul-escuro: #1b2b4b;
            --azul-medio: #3c5e9f;
            --fundo: #f5f6f8;
            --texto: #607087;
            --dourado: #f0ae36;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--azul-escuro);
            background: var(--fundo);
        }

        /* MENU */
        .navbar {
            background: #fff;
            min-height: 72px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
        }

        .navbar-brand {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--azul-escuro);
        }

        .navbar-brand i {
            color: var(--azul);
        }

        .navbar .nav-link {
            color: #555;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--azul-medio);
        }

        .btn-orcamento {
            color: white;
            background: var(--azul-medio);
            border-radius: 30px;
            padding: 10px 20px;
        }

        .btn-orcamento:hover {
            color: white;
            background: var(--azul-escuro);
        }

        /* CABEÇALHO */
        .hero {
            padding: 65px 0 75px;
            color: white;
            background: linear-gradient(
                110deg,
                #1b2b4b,
                #293f6c 55%,
                #3c5e9f
            );
        }

        .hero-selo {
            display: inline-block;
            padding: 8px 14px;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 30px;
            font-size: .8rem;
            font-weight: 700;
        }

        .hero h1 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1.2;
        }

        .hero h1 span {
            color: #83a8ff;
        }

        .hero p {
            max-width: 680px;
            margin: 18px 0 0;
            color: #eef3ff;
            line-height: 1.8;
        }

        /* FORMULÁRIO */
        .secao-formulario {
            padding: 65px 0 75px;
        }

        .formulario-card {
            max-width: 760px;
            margin: 0 auto;
            padding: 38px;
            background: #fff;
            border: 1px solid #edf0f4;
            border-radius: 22px;
            box-shadow: 0 12px 35px rgba(27, 43, 75, .08);
        }

        .icone-principal {
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: #e5edfc;
            color: var(--azul-medio);
            font-size: 2.1rem;
        }

        .formulario-card h2 {
            text-align: center;
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .descricao {
            color: var(--texto);
            text-align: center;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .form-label {
            color: var(--azul-escuro);
            font-weight: 700;
            margin-bottom: 9px;
        }

        .form-control {
            padding: 13px 15px;
            border: 1px solid #dce3ee;
            border-radius: 12px;
        }

        .form-control:focus {
            border-color: var(--azul-medio);
            box-shadow: 0 0 0 .2rem rgba(60, 94, 159, .12);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* ESTRELAS */
        .avaliacao-estrelas {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            gap: 8px;
            margin: 15px 0;
        }

        .avaliacao-estrelas input {
            position: absolute;
            opacity: 0;
            width: 1px;
            height: 1px;
        }

        .avaliacao-estrelas label {
            cursor: pointer;
            color: #d4d9e1;
            font-size: clamp(2.3rem, 6vw, 3rem);
            transition: color .15s, transform .15s;
        }

        .avaliacao-estrelas label:hover {
            transform: scale(1.12);
        }

        .avaliacao-estrelas label:hover,
        .avaliacao-estrelas label:hover ~ label,
        .avaliacao-estrelas input:checked ~ label {
            color: var(--dourado);
        }

        .avaliacao-estrelas input:focus-visible + label {
            outline: 2px solid var(--azul);
            outline-offset: 4px;
            border-radius: 4px;
        }

        .texto-nota {
            color: var(--texto);
            font-size: .95rem;
            text-align: center;
            min-height: 24px;
        }

        .btn-enviar {
            width: 100%;
            padding: 14px 20px;
            color: white;
            background: var(--azul-medio);
            border: none;
            border-radius: 30px;
            font-weight: 700;
            transition: background .2s, transform .2s;
        }

        .btn-enviar:hover {
            color: white;
            background: var(--azul-escuro);
            transform: translateY(-2px);
        }

        .aviso-privacidade {
            margin-top: 20px;
            color: var(--texto);
            font-size: .88rem;
            line-height: 1.7;
            text-align: center;
        }

        .aviso-privacidade i {
            color: var(--azul-medio);
        }

        /* MENSAGENS */
        .alert {
            border-radius: 12px;
            line-height: 1.6;
        }

        /* RODAPÉ */
        footer {
            padding: 22px 0;
            background: white;
            border-top: 1px solid #e9edf3;
            color: var(--texto);
            text-align: center;
            font-size: .9rem;
        }

        @media (max-width: 767px) {
            .hero {
                padding: 48px 0 55px;
            }

            .secao-formulario {
                padding: 40px 0 50px;
            }

            .formulario-card {
                padding: 27px 20px;
                border-radius: 18px;
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="quemsomos.php">Quem Somos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="servicos.php">Serviços</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="diferenciais.php">Diferenciais</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="avaliacoes.php">Avaliações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Fale Conosco</a>
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

    <!-- CABEÇALHO -->
    <header class="hero">
        <div class="container">

            <div class="hero-selo">
                <i class="bi bi-star-fill me-2"></i>
                SUA OPINIÃO É IMPORTANTE
            </div>

            <h1>
                Avalie sua experiência:
                <span>sua voz faz a diferença.</span>
            </h1>

            <p>
                Conte como foi sua mudança com a Tupi Mudanças.
                Sua avaliação nos ajuda a melhorar nossos serviços
                e a oferecer uma experiência cada vez melhor.
            </p>

        </div>
    </header>

    <!-- FORMULÁRIO -->
    <main>
        <section class="secao-formulario">
            <div class="container">

                <div class="formulario-card">

                    <div class="icone-principal">
                        <i class="bi bi-chat-square-heart"></i>
                    </div>

                    <h2>Deixe sua avaliação</h2>

                    <p class="descricao">
                        Sua opinião é muito importante para nós.
                        Preencha os campos abaixo para compartilhar
                        sua experiência.
                    </p>

                    <?php if ($mensagem !== ""): ?>
                        <div class="alert alert-<?= e($tipoMensagem) ?>"
                             role="alert"
                             aria-live="polite">

                            <i class="bi <?= $tipoMensagem === "success"
                                ? "bi-check-circle-fill"
                                : "bi-exclamation-triangle-fill" ?> me-2"></i>

                            <?= e($mensagem) ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="avaliar.php">

                        <!-- NOME -->
                        <div class="mb-4">
                            <label for="nome" class="form-label">
                                Seu nome
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nome"
                                name="nome"
                                placeholder="Digite seu nome"
                                maxlength="100"
                                autocomplete="name"
                                value="<?= e($nome) ?>"
                                required>
                        </div>

                        <!-- NOTA -->
                        <div class="mb-4">

                            <label class="form-label d-block text-center">
                                Como você avalia nosso serviço?
                            </label>

                            <div class="avaliacao-estrelas">

                                <input type="radio"
                                       id="estrela5"
                                       name="nota"
                                       value="5"
                                       <?= (int)$nota === 5 ? "checked" : "" ?>
                                       required>

                                <label for="estrela5"
                                       title="5 estrelas: excelente"
                                       aria-label="5 estrelas">
                                    <i class="bi bi-star-fill"></i>
                                </label>

                                <input type="radio"
                                       id="estrela4"
                                       name="nota"
                                       value="4"
                                       <?= (int)$nota === 4 ? "checked" : "" ?>>

                                <label for="estrela4"
                                       title="4 estrelas: muito bom"
                                       aria-label="4 estrelas">
                                    <i class="bi bi-star-fill"></i>
                                </label>

                                <input type="radio"
                                       id="estrela3"
                                       name="nota"
                                       value="3"
                                       <?= (int)$nota === 3 ? "checked" : "" ?>>

                                <label for="estrela3"
                                       title="3 estrelas: bom"
                                       aria-label="3 estrelas">
                                    <i class="bi bi-star-fill"></i>
                                </label>

                                <input type="radio"
                                       id="estrela2"
                                       name="nota"
                                       value="2"
                                       <?= (int)$nota === 2 ? "checked" : "" ?>>

                                <label for="estrela2"
                                       title="2 estrelas: regular"
                                       aria-label="2 estrelas">
                                    <i class="bi bi-star-fill"></i>
                                </label>

                                <input type="radio"
                                       id="estrela1"
                                       name="nota"
                                       value="1"
                                       <?= (int)$nota === 1 ? "checked" : "" ?>>

                                <label for="estrela1"
                                       title="1 estrela: precisa melhorar"
                                       aria-label="1 estrela">
                                    <i class="bi bi-star-fill"></i>
                                </label>

                            </div>

                            <div class="texto-nota" id="textoNota" aria-live="polite">
                                Excelente! 5 estrelas.
                            </div>

                        </div>

                        <!-- COMENTÁRIO -->
                        <div class="mb-4">
                            <label for="comentario" class="form-label">
                                Conte como foi sua experiência
                            </label>

                            <textarea
                                class="form-control"
                                id="comentario"
                                name="comentario"
                                rows="5"
                                maxlength="2000"
                                placeholder="Fale sobre nosso atendimento, pontualidade, cuidado com seus pertences..."
                                required><?= e($comentario) ?></textarea>

                            <div class="form-text text-end">
                                Até 2.000 caracteres.
                            </div>
                        </div>

                        <!-- ENVIAR -->
                        <button type="submit" class="btn btn-enviar">
                            <i class="bi bi-send-fill me-2"></i>
                            Enviar minha avaliação
                        </button>

                        <div class="aviso-privacidade">
                            <i class="bi bi-shield-check me-1"></i>
                            Sua avaliação será analisada antes de ser
                            publicada na página de avaliações.
                        </div>

                    </form>

                </div>

            </div>
        </section>
    </main>

    <!-- RODAPÉ -->
    <footer>
        <div class="container">
            &copy; 2026 Tupi Mudanças. Todos os direitos reservados.
        </div>
    </footer>

    <script>
        const radios = document.querySelectorAll(
            '.avaliacao-estrelas input[name="nota"]'
        );

        const textoNota = document.getElementById("textoNota");

        const descricoes = {
            1: "Precisamos melhorar. 1 estrela.",
            2: "Regular. 2 estrelas.",
            3: "Bom! 3 estrelas.",
            4: "Muito bom! 4 estrelas.",
            5: "Excelente! 5 estrelas."
        };

        function atualizarNota() {
            const selecionada = document.querySelector(
                '.avaliacao-estrelas input[name="nota"]:checked'
            );

            if (selecionada) {
                textoNota.textContent = descricoes[selecionada.value];
            }
        }

        radios.forEach(function (radio) {
            radio.addEventListener("change", atualizarNota);
        });

        atualizarNota();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
