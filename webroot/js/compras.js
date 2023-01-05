if (!index) {
    var index = -1;
}

var add_row_compra_detalle = function () {
    index++;
    var cols = '';
    cols += '<td>';
    cols += '<input type="number" name="detalle[' + index + '][cantidad]" class="form-control" min="0" step="1" onchange="if (parseInt(this.value) === 0) {' +
        ' delete_row_compra_detalle(this.parentNode.parentNode.rowIndex); }" value="1">';
    cols += '</td>';
    cols += '<td><input type="text" name="detalle[' + index + '][descripcion]" class="form-control" min="0"></td>';
    cols += '<td><input type="number" name="detalle[' + index + '][precio]" class="form-control" min="0" step="0.01"></td>';

    var tblBody = document.getElementById('tbl_compras_detalle').getElementsByTagName('tbody')[0];
    var fila = tblBody.insertRow(tblBody.rows.length);
    fila.innerHTML = cols;
}

var delete_row_compra_detalle = function (prm_rowIndex, prm_compra_detalle_id) {
    if (prm_compra_detalle_id && prm_compra_detalle_id > 0) {
        var tblBody = document.getElementById('tbl_compras_detalle_delete').getElementsByTagName('tbody')[0];
        var fila = tblBody.insertRow(tblBody.rows.length);
        fila.innerHTML = '<td><input type="number" name="compras_detalle_del_ids[' + prm_compra_detalle_id + ']" value="' + prm_compra_detalle_id + '"></td>';
    }
    document.getElementById('tbl_compras_detalle').deleteRow(prm_rowIndex);
}