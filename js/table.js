// Adicionar linha na tabela
var rowCount = 1;
function addRowButton(idTabela) {
    var table = document.getElementById(idTabela);
    var newRow = table.rows.length;
    var row = table.insertRow(newRow)
    rowCount++;
    row.innerHTML = "<td name= 'codigo' contenteditable='false' class='disabled table-light'>" + rowCount + "</td><td name='descricaoProduto' contenteditable='true'></td><td name='quantidade' contenteditable='true'></td><td name='precoUnitario' contenteditable='true'></td><td name='precoTotal' contenteditable='true'></td><td contenteditable='false'><i onclick='deleteRow(this)' class='bi bi-x-circle-fill btn btn-danger'></i></td>";
}
/* <button class='deleteRow' onclick='deleteRow(this)'>Excluir</button> */


function deleteRow(button) {
    var row = button.parentNode.parentNode;
    var table = row.parentNode;
    table.deleteRow(row.rowIndex - 1);
    rowCount--;
    var rows = table.rows;
    for (var i = 1; i < rows.length; i++) {
        var numberCell = rows[i].cells[0];
        numberCell.textContent = i + 1;
    }
}