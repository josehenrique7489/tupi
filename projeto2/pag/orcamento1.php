<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Orçamento Enviado | Tupi Mudanças</title>

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

            margin: 0;

            font-family: Arial, Helvetica, sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #eaf3ff,
                    #ffffff,
                    #dcecff
                );

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 25px;

        }


        .pagina {

            width: 100%;

            display: flex;

            justify-content: center;

        }


        .card-sucesso {

            width: 100%;

            max-width: 600px;

            background: rgba(255, 255, 255, 0.94);

            border-radius: 22px;

            padding: 45px 35px;

            text-align: center;

            box-shadow:
                0 15px 40px rgba(13, 65, 120, 0.15);

            border-top: 5px solid #0d6efd;

        }


        .icone-sucesso {

            width: 90px;

            height: 90px;

            margin: 0 auto 25px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #0b3d91,
                    #0d6efd
                );

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 45px;

            box-shadow:
                0 8px 20px rgba(13, 110, 253, 0.25);

        }


        h1 {

            color: #0b3d91;

            font-weight: 800;

            margin-bottom: 15px;

        }


        .texto {

            color: #5f6f82;

            font-size: 17px;

            line-height: 1.6;

            margin-bottom: 30px;

        }


        .mensagem {

            background: #f1f7ff;

            border-radius: 12px;

            padding: 18px;

            color: #24476b;

            margin-bottom: 30px;

        }


        .btn-voltar {

            display: inline-block;

            background:
                linear-gradient(
                    135deg,
                    #0b3d91,
                    #0d6efd
                );

            color: white;

            text-decoration: none;

            padding: 13px 30px;

            border-radius: 10px;

            font-weight: 700;

            transition: 0.3s;

        }


        .btn-voltar:hover {

            color: white;

            transform: translateY(-2px);

            box-shadow:
                0 8px 18px rgba(13, 110, 253, 0.3);

        }


        @media (max-width: 576px) {

            body {

                padding: 15px;

            }

            .card-sucesso {

                padding: 35px 22px;

            }

            h1 {

                font-size: 27px;

            }

            .texto {

                font-size: 15px;

            }

        }

    </style>

</head>

<body>

    <div class="pagina">

        <div class="card-sucesso">

            <!-- Ícone -->
            <div class="icone-sucesso">

                <i class="bi bi-check-lg"></i>

            </div>


            <!-- Título -->
            <h1>
                Orçamento enviado!
            </h1>


            <!-- Texto -->
            <p class="texto">

                Recebemos suas informações com sucesso.

                <br>

                Nossa equipe da
                <strong>Tupi Mudanças</strong>
                entrará em contato com você em breve.

            </p>


            <!-- Mensagem -->
            <div class="mensagem">

                <i class="bi bi-info-circle-fill me-2"></i>

                Obrigado por escolher a
                <strong>Tupi Mudanças</strong>!

            </div>


            <!-- Botão -->
            <a
                href="../index.html"
                class="btn-voltar">

                <i class="bi bi-house-fill me-2"></i>

                Voltar para o início

            </a>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>