<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ConectaJá - Recomendação de Infraestrutura</title>
</head>
<body>

    <h2>Consultoria ConectaJá</h2>
    <form action="Atividade02.php" method="POST">
        <label for="ambiente">Tamanho do ambiente:</label>
        <select name="ambiente" id="ambiente" required>
            <option value="">-- Selecione --</option>
            <option value="residencial">Casa / Apartamento</option>
            <option value="pequeno_escritorio">Pequeno Escritório (Até 24 pontos)</option>
            <option value="data_center">Data Center Corporation</option>
        </select>
        <br><br>
        <button type="submit">Ver Recomendação</button>
    </form>

    <hr> <?php
    // 1. Verificamos se o formulário foi enviado através do método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 2. Capturamos o valor selecionado no campo 'ambiente'
        $ambiente = $_POST['ambiente'];

        // 3. Estrutura Switch para decidir a recomendação
        switch ($ambiente) {
            case 'residencial':
                echo "<h3>Recomendação da ConectaJá:</h3>";
                echo "<strong>Equipamento Indicado:</strong> Roteador Wireless (SOHO).<br>";
                echo "<em>Para ambientes residenciais, um roteador Wi-Fi padrão é suficiente para conectar smartphones, TVs e notebooks.</em>";
                break;

            case 'pequeno_escritorio':
                echo "<h3>Recomendação da ConectaJá:</h3>";
                echo "<strong>Equipamento Indicado:</strong> Switch Gerenciável de 24 Portas.<br>";
                echo "<em>Para um escritório, recomendamos o uso de um Switch para conectar os computadores via cabo, garantindo estabilidade e segurança na rede local (LAN).</em>";
                break;

            case 'data_center':
                echo "<h3>Recomendação da ConectaJá:</h3>";
                echo "<strong>Equipamento Indicado:</strong> Roteador de Borda e Switch Layer 3.<br>";
                echo "<em>Para Data Centers, é necessária uma infraestrutura robusta com equipamentos de alta capacidade para lidar com grande tráfego de dados e roteamento avançado.</em>";
                break;

            default:
                // Caso o usuário clique em enviar sem selecionar nada ou ocorra erro
                echo "<p style='color: red;'>Erro: Ambiente não reconhecido em nosso banco de dados.</p>";
                break;
        }
    }
    ?>

</body>
</html>