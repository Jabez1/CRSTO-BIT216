function selectTable(tableID, inputID){
    var selTable = document.getElementById(tableID);
    var rows = selTable.getElementsByTagName('tr');

    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        //create onclick event for allrows
        row.onclick = function () {
            // Get the row id 
            var rowId = this.rowIndex;

            //reset table first
            var otherRows = selTable.getElementsByTagName('tr');
            for (var row = 0; row < otherRows.length; row++) {
                otherRows[row].id = "";
            }
            
            //change id of selected row
            if(rowId>0){
                var rowSelected = selTable.getElementsByTagName('tr')[rowId];
                rowSelected.id = "selected";
                console.log(rowSelected);

                var itemSelected = rowSelected.getElementsByTagName('td')[0];
                console.log(itemSelected.innerHTML);
                var theForm = document.getElementById(inputID);
                theForm.value = itemSelected.innerHTML;
            }

        }
    }

}
