

function JsRC() {

	event.preventDefault();

	let formdata = captureformData();

	// insert the data into table

	let tabObj  = document.getElementById("CTISList");
	let tab = tabObj.getElementsByTagName("tbody")[0];
	//let tabBody[0] = tabObj.getElementsByTagName('tbody');

	let row  = tab.insertRow(tab.length);
	
	let nameCell = row.insertCell(0);
	nameCell.innerHTML = formdata. ctrname;
	let idCell = row.insertCell(1);
	idCell.innerHTML = formdata. ctrId;


	


}

function captureformData() {

	let formDataArr = {};

	formDataArr["ctrname"] = document.getElementById("ctrname").value;
	formDataArr["ctrId"] = document.getElementById("ctrId").value;
	

    //console.log(formDataArr);
    return formDataArr;
}


/*Login Page*/
function redirect() {
	
	event.preventDefault();
	var userName = document.getElementById("userName").value;
	console.log(userName[0].toUpperCase =="P")
	console.log(userName[0].toUpperCase);
	console.log(userName[0]);

    if(userName[0].toUpperCase() =="P")
    {
		location.href ="PHistory.html";
	}
	else if(userName[0].toUpperCase() == "T")
    {
		location.href ="RecordNewTest.html";
	}
	else if(userName[0].toUpperCase() == "M")
    {
		location.href ="CTRegCenter.html";
    }
    else
    {
        alert("Invalid Username or Password");
	}
}
