function selectTrip(){
    var tripTable = document.getElementById('tripList');
    var rows = tripTable.getElementsByTagName('tr');

    console.log(tripTable);
    console.log("table");
    console.log(rows);

    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        //create onclick event for allrows
        row.onclick = function () {
            // Get the row id 
            var rowId = this.rowIndex;

            //reset table first
            var otherRows = tripTable.getElementsByTagName('tr');
            for (var row = 0; row < otherRows.length; row++) {
                otherRows[row].id = "";
            }
            
            //change id of selected row
            var rowSelected = tripTable.getElementsByTagName('tr')[rowId];
            rowSelected.id = "selected";
        }
    }

    var tripSelected = document.getElementById('selected');
    console.log(tripSelected);
    
    var theForm = document.getElementById('tripForm');
    theForm.value="2";

}
