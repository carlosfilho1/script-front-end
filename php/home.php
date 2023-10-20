<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Estoque</title>
</head>

<body>
    <div class="container-fluid row vh-100">
        <div class="col-md-2" style="background-color: turquoise;">
            <?php
                include './menu.php';
            ?>
        </div>
        <div class="col-md-10">
            <div class="row p-3" style="background-color: blue;"></div>

            <?php

            include './estoqueADD.php';
            include './estoque.php';

            ?>

            <div class="">
                <table class="table table-light table-hover">
                    <thead>
                        <?php
                        include './cabecalho.php'
                        ?>

                    </thead>
                    <tbody>
                        <?php
                        foreach ($estoqueData as $row) {
                            $dataFormatada = date("d-m-Y", strtotime($row["data"])); //  <!-- Formatação da data padrão BR -->
                        ?>
                            <tr>
                                <td><?php echo $row["id_produto"]; ?></td>
                                <td><?php echo $dataFormatada; ?></td>
                                <td><?php echo $row["nota_fiscal"]; ?></td>
                                <td><?php echo $row["descricao_produto"]; ?></td>
                                <td><?php echo $row["codigo_produto"]; ?></td>
                                <td><?php echo $row["categoria"]; ?></td>
                                <td><?php echo $row["quantidade_em_estoque"]; ?></td>
                                <td><?php echo "R$ " . number_format($row["preco_unitario"], 2, ",", "."); ?></td>
                                <td><?php echo "R$ " . number_format($row["valor_total"], 2, ",", "."); ?></td>
                            </tr>
                        <?php };
                        ?>

                    </tbody>
                </table>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="calc.js"></script>
</body>

</html>