//Função para calculo estoque
document.addEventListener("DOMContentLoaded", function () {
    const quantidadeEstoque = document.querySelectorAll("td:nth-child(4)");
    const precoUnitario = document.querySelectorAll("td:nth-child(5)");
    const valorTotalEstoque = document.querySelectorAll(".valor-total");

    for (let i = 0; i < quantidadeEstoque.length; i++) {
        const quantidade = parseInt(quantidadeEstoque[i].textContent);
        const preco = parseFloat(precoUnitario[i].textContent.replace("R$ ", "").replace(",", "."));
        const valorTotal = (quantidade * preco).toFixed(2);
        valorTotalEstoque[i].textContent = `R$ ${valorTotal}`;
    }
});