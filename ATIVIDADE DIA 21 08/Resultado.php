<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado do Cadastro</h1>

    <p>Nome: <?php echo $produto->getNome(); ?></p>

    <p>Preço unitário: R$ <?php echo $produto->getPrecoUnitario(); ?></p>

    <p>Quantidade: <?php echo $produto->getQuantidade(); ?></p>

    <p>Valor total: R$ <?php echo $valorTotal; ?></p>

    <p>Desconto: <?php echo $descontoPercentual; ?>%</p>

    <p>Valor com desconto: R$ <?php echo $valorComDesconto; ?></p>

    <?php if ($estoqueBaixo) { ?>
        <p><strong>Aviso: estoque baixo! Menos de 5 unidades.</strong></p>
    <?php } ?>

    <br>

    <a href="index.html">Voltar</a>

</body>
</html>
