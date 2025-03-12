<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }
        form {
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 90%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #e0e0e0; /* Cinza claro */
        }
        .radio-group input, .checkbox-group input {
            width: auto;
            margin-right: 5px;
        }
        .radio-group label, .checkbox-group label {
            display: inline-block;
            padding: 5px;
            background: #007bff; /* Azul */
            color: white;
            border-radius: 5px;
            margin-right: 5px;
            cursor: pointer;
        }
        button {
            background: green;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover {
            background: darkgreen;
        }
    </style>
</head>
<body>

    <h2>Formulário de Contato</h2>
    <form id="whatsappForm">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" required>

        <label for="email">Email:</label>
        <input type="email" id="email" required>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" required>

        <label>Cor:</label>
        <div class="radio-group">
            <input type="radio" name="cor" value="Vermelho" id="corVermelho" required>
            <label for="corVermelho">Vermelho</label>

            <input type="radio" name="cor" value="Azul" id="corAzul">
            <label for="corAzul">Azul</label>

            <input type="radio" name="cor" value="Verde" id="corVerde">
            <label for="corVerde">Verde</label>
        </div>

        <label>Tamanho:</label>
        <div class="radio-group">
            <input type="radio" name="tamanho" value="P" id="tamanhoP" required>
            <label for="tamanhoP">P</label>

            <input type="radio" name="tamanho" value="M" id="tamanhoM">
            <label for="tamanhoM">M</label>

            <input type="radio" name="tamanho" value="G" id="tamanhoG">
            <label for="tamanhoG">G</label>
        </div>

        <label>Opções Adicionais:</label>
        <div class="checkbox-group">
            <input type="checkbox" name="opcoes" value="Embalagem especial" id="opcao1">
            <label for="opcao1">Embalagem especial</label>

            <input type="checkbox" name="opcoes" value="Entrega expressa" id="opcao2">
            <label for="opcao2">Entrega expressa</label>
        </div>

        <button type="button" onclick="enviarWhatsApp()">Enviar para WhatsApp</button>
    </form>

    <script>
        function enviarWhatsApp() {
            let nome = document.getElementById("nome").value;
            let telefone = document.getElementById("telefone").value;
            let email = document.getElementById("email").value;
            let endereco = document.getElementById("endereco").value;

            let corSelecionada = document.querySelector('input[name="cor"]:checked')?.value || "Não informado";
            let tamanhoSelecionado = document.querySelector('input[name="tamanho"]:checked')?.value || "Não informado";

            let opcoesSelecionadas = [];
            document.querySelectorAll('input[name="opcoes"]:checked').forEach((el) => {
                opcoesSelecionadas.push(el.value);
            });
            let opcoesTexto = opcoesSelecionadas.length > 0 ? opcoesSelecionadas.join(", ") : "Nenhuma";

            let mensagem = `*Novo contato via formulário*\n\nNome: ${nome}\nTelefone: ${telefone}\nEmail: ${email}\nEndereço: ${endereco}\n\n*Detalhes do Pedido*\nCor: ${corSelecionada}\nTamanho: ${tamanhoSelecionado}\nOpções: ${opcoesTexto}`;

            let telefoneAdmin = "5511999999999"; // Substitua pelo número que deve receber o WhatsApp
            let url = `https://api.whatsapp.com/send?phone=${telefoneAdmin}&text=${encodeURIComponent(mensagem)}`;

            window.open(url, "_blank");
        }
    </script>

</body>
</html>
