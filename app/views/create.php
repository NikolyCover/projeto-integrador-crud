<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bp Generator</title>
</head>
<body>
    <header>
        <h1>Bp Generator</h1>
        <a href="../views/create.php">Criar proposta comercial</a>
    </header>
    <main>

        <form action="../controllers/businessProposalController.php?action=create" method="POST">
            <div>
                <label>Título:</label>
                <input name="title" type="text" >
            </div>
            <div>
                <label>Número:</label>
                <input name="number" type="text" >
            </div>
            <div>
                <label>Data:</label>
                <input name="date" type="date" >
            </div>
            <div>
                <label>Responsável pela proposta PTI:</label>
                <input name="proposalHandler" type="date" >
            </div>
            <div>
                <label>Empresa:</label>
                <input name="company" type="text" >
            </div>
            <div>
                <label>Cnpj;</label>
                <input name="cnpj" type="text" >
            </div>
            <div>
                <label>Responsável da empresa:</label>
                <input name="recipient" type="text" >
            </div>
            <div>
                <label>Apresentação:</label>
                <textarea name="proposalPresentationText" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Escopo:</label>
                <textarea name="scope" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Confidencialidade:</label>
                <textarea name="confidentialityText" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Tributos:</label>
                <textarea name="tributesText" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Condições gerais:</label>
                <textarea name="generalConditionText" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Resultados finais:</label>
                <textarea name="finalResultsText" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Resultados finais:</label>
                <textarea name="finalResultsText" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Cronograma:</label>
                <textarea name="scheduleText" rows="4" cols="128"></textarea>
            </div>
            <div>
                <label>Valor:</label>
                <input name="value" type="number" >
            </div>
            <div>
                <label>Tipo de pagamento:</label>
                <input name="paymentType" type="text" >
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </main>

    <footer>

    </footer>
</body>
</html>