
<?php

include_once("../conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
    $Whatsapp = $_POST["Whatsapp"] ?? "";
    $email = $_POST["email"] ?? "";

    // Evita problemas com aspas e caracteres especiais
    $nome = mysqli_real_escape_string($conexao, $nome);
    $telefone = mysqli_real_escape_string($conexao, $telefone);
    $Whatsapp = mysqli_real_escape_string($conexao, $Whatsapp);
    $email = mysqli_real_escape_string($conexao, $email);

    // Insere os dados no banco
    $sql = "INSERT INTO cliente
            (nome, telefone, Whatsapp, email)
            VALUES
            ('$nome', '$telefone', '$Whatsapp', '$email')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {

        // Cadastro realizado com sucesso
        header("Location: enviado.html");
        exit;

    } else {

        echo "Erro ao salvar o orçamento: " . mysqli_error($conexao);
    }

} else {

    echo "Acesso inválido.";
}
?>

