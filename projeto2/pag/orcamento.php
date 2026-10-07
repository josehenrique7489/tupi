<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Orçamento | Tupi Mudanças</title>

    <!-- Bootstrap 5.3 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body {

           
    min-height: 100vh; 
 
    background: 
        linear-gradient( 
            0deg, 
            rgba(37, 37, 37, 0.95) 0%, 
            rgba(58, 58, 58, 0.75) 30%, 
            rgba(255, 255, 255, 0.25) 65%, 
            rgba(255, 255, 255, 0.05) 100% 
        ), 
        url("../img/04.png") center center / cover no-repeat; 
 
    padding-top: 80px; 


            min-height: 100vh;

           background-image:url(../img/04.png) ;

            background-repeat: no-repeat;

            background-size: cover; 

            font-family: Arial, Helvetica, sans-serif;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px 15px;
        }

        .pagina {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .card-orcamento {
            width: 100%;
            max-width: 650px;

            background: #ffffff;

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 15px 40px rgba(13, 65, 120, 0.15);

            border-top: 5px solid #0d6efd;
        }

        .logo {
            color: #0b3d91;

            font-size: 32px;
            font-weight: 800;

            margin-bottom: 5px;
        }

        .subtitulo {
            color: #6c757d;

            font-size: 15px;

            margin-bottom: 25px;
        }

        hr {
            border: 0;

            border-top: 1px solid #dbe7f5;

            margin: 25px 0 30px;
        }

        .form-label {
            color: #173b65;

            font-weight: 600;

            margin-bottom: 8px;
        }

        .form-control {
            min-height: 48px;

            border: 1px solid #cbd8e8;

            border-radius: 10px;

            padding: 10px 14px;

            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #0d6efd;

            box-shadow:
                0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        }

        .form-control::placeholder {
            color: #9aa7b5;
        }

        .btn-orcamento {
            width: 100%;

            min-height: 50px;

            border: none;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #0b3d91,
                    #0d6efd
                );

            color: #ffffff;

            font-size: 17px;

            font-weight: 700;

            transition: 0.3s;

            box-shadow:
                0 6px 15px rgba(13, 110, 253, 0.25);
        }

        .btn-orcamento:hover {
            transform: translateY(-2px);

            box-shadow:
                0 9px 20px rgba(13, 110, 253, 0.35);

            color: #ffffff;
        }

        .voltar {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 45px;
            height: 45px;

            margin-top: 25px;

            border-radius: 50%;

            background: #edf4ff;

            transition: 0.3s;
        }

        .voltar:hover {
            background: #d7e7ff;

            transform: translateX(-3px);
        }

        .voltar img {
            width: 32px;
            height: 32px;

            object-fit: contain;
        }

        .icone {
            color: #0d6efd;

            margin-right: 5px;
        }

        @media (max-width: 576px) {

            body {
                padding: 20px 12px;
            }

            .card-orcamento {
                padding: 25px 20px;

                border-radius: 16px;
            }

            .logo {
                font-size: 27px;
            }

        }

    </style>

</head>

<body>

    <div class="pagina">

        <div class="card-orcamento">

            <!-- Título -->
            <div class="text-center">

                <div class="mb-2">

                    <i class="bi bi-file-earmark-text-fill"
                       style="font-size: 38px; color: #0d6efd;">
                    </i>

                </div>

                <h1 class="logo">
                    FAÇA SEU ORÇAMENTO
                </h1>

                <p class="subtitulo">
                    Preencha seus dados e entraremos em contato.
                </p>

            </div>

            <hr>

            <!-- Formulário -->
            <form action="orcamento1.php" method="POST">

                <!-- Nome -->
                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-person-fill icone"></i>

                        Nome:
                    </label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        placeholder="Digite seu nome"
                        required>

                </div>


                <!-- Telefone -->
                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-telephone-fill icone"></i>

                        Telefone:
                    </label>

                    <input
                        type="tel"
                        name="telefone"
                        class="form-control"
                        placeholder="Digite seu telefone"
                        required>

                </div>


                <!-- WhatsApp -->
                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-whatsapp icone"></i>

                        WhatsApp:
                    </label>

                    <input
                        type="tel"
                        name="whatsapp"
                        class="form-control"
                        placeholder="Digite seu WhatsApp"
                        required>

                </div>


                <!-- Email -->
                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-envelope-fill icone"></i>

                        E-mail:
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Digite seu e-mail"
                        required>

                </div>


                <!-- Botão -->
                <div class="mt-4">

                    <button
                        type="submit"
                        class="btn-orcamento">

                        <i class="bi bi-send-fill me-2"></i>

                        Solicitar Orçamento

                    </button>
<br>
                </div>

            </form>


            <!-- Voltar -->
            <div class="text-center">

            <a href="../index.html" class="btn-voltar">
    ⬅️
</a>
            </div>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>