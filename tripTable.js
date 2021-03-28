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
            if(rowId>0){
                var rowSelected = tripTable.getElementsByTagName('tr')[rowId];
                rowSelected.id = "selected";
                console.log(rowSelected);

                var tripSelected = rowSelected.getElementsByTagName('td')[0];
                console.log(tripSelected.innerHTML);
                var theForm = document.getElementById('tripForm');
                theForm.value = tripSelected.innerHTML;
            }

        }
    }

}
