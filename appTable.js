function selectApp(){
    var appTable = document.getElementById('appList');
    var rows = appTable.getElementsByTagName('tr');

    console.log(appTable);
    console.log("table");
    console.log(rows);

    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        //create onclick event for allrows
        row.onclick = function () {
            // Get the row id 
            var rowId = this.rowIndex;

            //reset table first
            var otherRows = appTable.getElementsByTagName('tr');
            for (var row = 0; row < otherRows.length; row++) {
                otherRows[row].id = "";
            }
            
            //change id of selected row
            var rowSelected = appTable.getElementsByTagName('tr')[rowId];
            rowSelected.id = "selected";
            console.log(rowSelected);
            var appSelected = rowSelected.getElementsByTagName('td')[0];
            console.log(apppSelected.innerHTML);
            var theForm = document.getElementById('appForm');
            theForm.value = appSelected.innerHTML;
        }
    }

}