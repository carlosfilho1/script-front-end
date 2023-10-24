            <?php
            include './modelBody.php';
            // Ler o conteúdo do arquivo "estoque.html"
            //$htmlContent = file_get_contents('../html/estoque.html');

            // Inserir dinamicamente os valores no conteúdo HTML
            // $htmlContent = str_replace('{{DATA}}', $estoqueData[0]["data"], $htmlContent);
            // $htmlContent = str_replace('{{NOTA_FISCAL}}', $estoqueData[0]["nota_fiscal"], $htmlContent);
            // $htmlContent = str_replace('{{DESCRICAO_PRODUTO}}', $estoqueData[0]["descricao_produto"], $htmlContent);
            // $htmlContent = str_replace('{{CODIGO_PRODUTO}}', $estoqueData[0]["codigo_produto"], $htmlContent);
            // $htmlContent = str_replace('{{CATEGORIA}}', $estoqueData[0]["categoria"], $htmlContent);
            // $htmlContent = str_replace('{{QUANTIDADE_EM_ESTOQUE}}', $estoqueData[0]["quantidade_em_estoque"], $htmlContent);
            // $htmlContent = str_replace('{{PRECO_UNITARIO}}', "R$ " . number_format($estoqueData[0]["preco_unitario"], 2, ",", "."), $htmlContent);
            // $htmlContent = str_replace('{{VALOR_TOTAL}}', "R$ " . number_format($estoqueData[0]["valor_total"], 2, ",", "."), $htmlContent);

            // Exibir o conteúdo HTML
            //echo $htmlContent;

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
                        include './conection.php';

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
            
            <?php
            include './modelFooter.php'
            ?>