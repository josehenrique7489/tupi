```html
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

        * {
            box-sizing: border-box;
        }

        body {

            min-height: 100vh;

            margin: 0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:

                linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.78),
                    rgba(255, 255, 255, 0.45),
                    rgba(255, 255, 255, 0.25)
                ),

                url("../img/04.png")
                center center /
                cover
                no-repeat
                fixed;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px 15px;

        }


        /* ÁREA PRINCIPAL */

        .pagina {

            width: 100%;

            display: flex;

            justify-content: center;

        }


        /* CARD */

        .card-orcamento {

            width: 100%;

            max-width: 650px;

            background:

                rgba(255, 255, 255, 0.96);

            backdrop-filter: blur(10px);

            -webkit-backdrop-filter: blur(10px);

            border-radius: 24px;

            padding: 42px;

            border: 1px solid
                rgba(255, 255, 255, 0.8);

            border-top:
                5px solid #0d6efd;

            box-shadow:

                0 25px 70px
                rgba(0, 0, 0, 0.30);

        }


        /* ÍCONE PRINCIPAL */

        .icone-principal {

            width: 75px;

            height: 75px;

            margin: 0 auto 18px;

            border-radius: 20px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:

                linear-gradient(
                    135deg,
                    #0b3d91,
                    #0d6efd
                );

            color: white;

            font-size: 35px;

            box-shadow:

                0 10px 25px
                rgba(13, 110, 253, 0.30);

        }


        /* TÍTULO */

        .logo {

            color: #0b3d91;

            font-size: 30px;

            font-weight: 800;

            letter-spacing: 0.5px;

            margin-bottom: 8px;

        }


        .subtitulo {

            color: #6c757d;

            font-size: 15px;

            margin: 0;

        }


        /* LINHA */

        hr {

            border: 0;

            height: 1px;

            background:

                linear-gradient(
                    90deg,
                    transparent,
                    #d5e2f2,
                    transparent
                );

            margin:
                30px 0;

        }


        /* LABEL */

        .form-label {

            color: #173b65;

            font-weight: 700;

            font-size: 15px;

            margin-bottom: 8px;

        }


        .icone {

            color: #0d6efd;

            margin-right: 5px;

        }


        /* INPUT */

        .form-control {

            min-height: 50px;

            border:

                1px solid #d4dfec;

            border-radius: 12px;

            padding:

                11px 15px;

            color: #173b65;

            background: #ffffff;

            transition:
                all 0.25s ease;

        }


        .form-control:hover {

            border-color: #9db9dc;

        }


        .form-control:focus {

            border-color: #0d6efd;

            background: #ffffff;

            box-shadow:

                0 0 0 4px
                rgba(13, 110, 253, 0.12);

        }


        .form-control::placeholder {

            color: #a1adba;

        }


        /* BOTÃO */

        .btn-orcamento {

            width: 100%;

            min-height: 54px;

            border: none;

            border-radius: 12px;

            background:

                linear-gradient(
                    135deg,
                    #0b3d91,
                    #0d6efd
                );

            color: #ffffff;

            font-size: 16px;

            font-weight: 700;

            letter-spacing: 0.2px;

            transition:
                all 0.25s ease;

            box-shadow:

                0 8px 20px
                rgba(13, 110, 253, 0.25);

        }


        .btn-orcamento:hover {

            transform:
                translateY(-2px);

            background:

                linear-gradient(
                    135deg,
                    #082f70,
                    #0b5ed7
                );

            box-shadow:

                0 12px 28px
                rgba(13, 110, 253, 0.35);

            color: #ffffff;

        }


        .btn-orcamento:active {

            transform:
                translateY(0);

        }


        /* BOTÃO VOLTAR */

        .btn-voltar {

            width: 46px;

            height: 46px;

            margin-top: 25px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            text-decoration: none;

            font-size: 21px;

            border-radius: 50%;

            color: #0b3d91;

            background: #edf4ff;

            border:
                1px solid #d6e5f8;

            transition:
                all 0.25s ease;

        }


        .btn-voltar:hover {

            background: #0d6efd;

            color: #ffffff;

            transform:
                translateX(-4px);

            box-shadow:

                0 6px 15px
                rgba(13, 110, 253, 0.25);

        }


        /* TEXTO INFORMATIVO */

        .seguranca {

            margin-top: 18px;

            color: #8996a5;

            font-size: 12px;

        }


        .seguranca i {

            color: #198754;

            margin-right: 4px;

        }


        /* RESPONSIVO */

        @media (max-width: 576px) {

            body {

                padding:
                    25px 12px;

            }


            .card-orcamento {

                padding:
                    30px 20px;

                border-radius:
                    20px;

            }


            .icone-principal {

                width: 65px;

                height: 65px;

                font-size: 30px;

                border-radius: 17px;

            }


            .logo {

                font-size: 24px;

            }


            .subtitulo {

                font-size: 14px;

            }


            .form-control {

                min-height: 48px;

            }

        }

    </style>

</head>


<body>


    <div class="pagina">

        <div class="card-orcamento">


            <!-- CABEÇALHO -->

            <div class="text-center">

                <div class="icone-principal">

                    <i class="bi bi-file-earmark-text-fill"></i>

                </div>


                <h1 class="logo">

                    FAÇA SEU ORÇAMENTO

                </h1>


                <p class="subtitulo">

                    Preencha seus dados e nossa equipe
                    entrará em contato.

                </p>

            </div>


            <hr>


            <!-- FORMULÁRIO -->

            <form
                action="orcamento1.php"
                method="POST">


                <!-- NOME -->

                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-person-fill icone"></i>

                        Nome

                    </label>


                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        placeholder="Digite seu nome completo"
                        autocomplete="name"
                        required>

                </div>


                <!-- TELEFONE -->

                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-telephone-fill icone"></i>

                        Telefone

                    </label>


                    <input
                        type="tel"
                        name="telefone"
                        class="form-control"
                        placeholder="(00) 00000-0000"
                        autocomplete="tel"
                        required>

                </div>


                <!-- WHATSAPP -->

                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-whatsapp icone"></i>

                        WhatsApp

                    </label>


                    <input
                        type="tel"
                        name="whatsapp"
                        class="form-control"
                        placeholder="(00) 00000-0000"
                        autocomplete="tel"
                        required>

                </div>


                <!-- E-MAIL -->

                <div class="mb-4">

                    <label class="form-label">

                        <i class="bi bi-envelope-fill icone"></i>

                        E-mail

                    </label>


                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Digite seu melhor e-mail"
                        autocomplete="email"
                        required>

                </div>


                <!-- BOTÃO -->

                <div class="mt-4">

                    <button
                        type="submit"
                        class="btn-orcamento">

                        <i class="bi bi-send-fill me-2"></i>

                        Solicitar Orçamento

                    </button>

                </div>


            </form>


            <!-- SEGURANÇA -->

            <div class="text-center seguranca">

                <i class="bi bi-shield-check"></i>

                Seus dados serão utilizados apenas
                para contato sobre o orçamento.

            </div>


            <!-- VOLTAR -->

            <div class="text-center">

                <a
                    href="../index.html"
                    class="btn-voltar"
                    title="Voltar">

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
```
