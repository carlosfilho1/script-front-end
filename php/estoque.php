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
                        <tr>
                            <th>ID do Produto</th>
                            <th>Data</th>
                            <th>Nº Nota Fiscal</th>
                            <th>Descrição do Produto</th>
                            <th>Codigo do Produto</th>
                            <th>Categoria</th>
                            <th>Quantidade em Estoque</th>
                            <th>Preço Unitário</th>
                            <th>Valor Total em Estoque</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include './conection.php';

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $sql = "SELECT * FROM estoque";
                        $result = $conn->query($sql);

                        $estoqueData = array();

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Calcular o valor total em estoque
                                $valorTotal = $row["quantidade_em_estoque"] * $row["preco_unitario"];
                                $row["valor_total"] = $valorTotal;
                                $estoqueData[] = $row;
                            }
                        };

                        $itemsPorPagina = 12;
                        $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

                        $inicio = ($paginaAtual - 1) * $itemsPorPagina;
                        $fim = $paginaAtual * $itemsPorPagina;
                        for ($i = $inicio; $i < $fim && $i < count($estoqueData); $i++) {
                            $row = $estoqueData[$i];

                            //foreach ($estoqueData as $row) {
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
                        <?php }; //}

                        ?>
                    </tbody>
                </table>
            </div>

            <nav aria-label="...">
                <ul class="pagination">
                    <?php
                    $totalPaginas = ceil(count($estoqueData) / $itemsPorPagina);

                    if ($paginaAtual > 1) {
                        echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaAtual - 1) . '">Previous</a></li>';
                    }

                    for ($i = 1; $i <= $totalPaginas; $i++) {
                        $classeAtiva = $paginaAtual == $i ? 'active' : '';
                        echo '<li class="page-item ' . $classeAtiva . '"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
                    }

                    if ($paginaAtual < $totalPaginas) {
                        echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaAtual + 1) . '">Next</a></li>';
                    }
                    ?>
                </ul>
            </nav>

            <?php
            include './modelFooter.php'
            ?>