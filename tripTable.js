function selectTrip(){
    var tripTable = document.getElementById('tripList');
    var rows = tripTable.getElementsByTagName('tr');

    console.log(table);
    console.log("table");
    console.log(table);

    for (var i = 0; i < rows.length; i++) {
        //for each row
        var row = rows[i];
        // do something on onclick event for cell
        row.onclick = function () {
            // Get the row id where the cell exists
            var rowId = this.rowIndex;

            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "yellow";
            rowSelected.className += " selected";

            var otherRows = table.getElementsByTagName('tr');
            for (var row = 0; row < rowsNotSelected.length; row++) {
                otherRows[row].style.backgroundColor = "";
                otherRows[row].classList.remove('selected');
            }


            msg = 'The ID of the company is: ' + rowSelected.cells[0].innerHTML;
            msg += '\nThe cell value is: ' + this.innerHTML;
            alert(msg);
        }
    }
}

function highlight_row() {
    var table = document.getElementById('tripList');
    var cells = table.getElementsByTagName('td');
    console.log(table);
    console.log("table");
    console.log(table);
    for (var i = 0; i < cells.length; i++) {
        // Take each cell
        var cell = cells[i];
        // do something on onclick event for cell
        cell.onclick = function () {
            // Get the row id where the cell exists
            var rowId = this.parentNode.rowIndex;
  
            var rowsNotSelected = table.getElementsByTagName('tr');
            for (var row = 0; row < rowsNotSelected.length; row++) {
                rowsNotSelected[row].style.backgroundColor = "";
                rowsNotSelected[row].classList.remove('selected');
            }
            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "yellow";
            rowSelected.className += " selected";
  
            msg = 'The ID of the company is: ' + rowSelected.cells[0].innerHTML;
            msg += '\nThe cell value is: ' + this.innerHTML;
            alert(msg);
        }
    }
  
  }