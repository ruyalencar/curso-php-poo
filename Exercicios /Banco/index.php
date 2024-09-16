<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Criar Conta</h1>
    <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <h2>Criar Conta⬇️</h2>
        <label for="usuario"><strong>Nome</strong></label>
        <input type="text" name="nome" id="nome">
        <label for="usuario"><strong>Tipo de conta</strong> ("CC" ou "CP")</label>
        <input type="text" name="tipo" id="tipo">
        <label for="usuario"><strong>Número da conta</strong></label>
        <input type="number" name="numc" id="numc">
        <input type="submit" value="Criar Conta">
    </form>
    <pre>
    <?php 
    require_once 'Banco.php';
    $nome = $_GET['nome'];
    $ti = $_GET['tipo'];
    $numc = $_GET['numc'];

    $ps1 = new ContaBanco($nome,$ti,$numc);
    $ps1->abrirConta($ti);
    $ps1->depositar(1000);
    $ps1->pagarMensal();
    print_r($ps1);
    ?>
    </pre></main>
</body>
</html>