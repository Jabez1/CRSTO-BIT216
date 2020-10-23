function Jstock() {

	event.preventDefault();
	let formdata = captureformData();

	// insert the data into table
	let tabObj  = document.getElementById("CTISList");
	let tab = tabObj.getElementsByTagName("tbody")[0];

	let row  = tab.insertRow(tab.length);
	
	let idCell = row.insertCell(0);
	idCell.innerHTML = formdata. tkId;
	let nameCell = row.insertCell(1);
	nameCell.innerHTML = formdata. tkn;
	let numCell = row.insertCell(2);
	numCell.innerHTML = formdata. as;
}

function captureformData() {

	let formDataArr = {};
	
	formDataArr["tkId"] = document.getElementById("tkId").value;
	formDataArr["tkn"] = document.getElementById("tkn").value;
	formDataArr["as"] = document.getElementById("as").value;

    return formDataArr;
}

