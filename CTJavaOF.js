

function officer() {

	event.preventDefault();

	let formdata = captureformData();

	// insert the data into table
	let tab  = document.getElementById("CTISList");
	let newtab = tab.getElementsByTagName("tbody")[0];

	let row  = newtab.insertRow(tab.length);

	let idCell = row.insertCell(0);
	idCell.innerHTML = formdata. ctrId;
	let nameCell = row.insertCell(1);
	nameCell.innerHTML = formdata. usern;
	let numCell = row.insertCell(2);
	numCell.innerHTML = formdata. Psw;
	let nCell = row.insertCell(3);
	nCell.innerHTML = formdata. Ofn;
	let nmCell = row.insertCell(4);
	nmCell.innerHTML = formdata. Pos;
}

function captureformData() {

	let formDataArr = {};


	formDataArr["ctrId"] = document.getElementById("ctrId").value;
	formDataArr["usern"] = document.getElementById("usern").value;
	formDataArr["Psw"] = document.getElementById("Psw").value;
	formDataArr["Ofn"] = document.getElementById("Ofn").value;
	formDataArr["Pos"] = document.getElementById("Pos").value;

   
    return formDataArr;
}

function fillOfficerTable(){
	for(let i=0; i<workerArray.length;i++){
		let row  = tab.insertRow(tab.length);
		let ctrId = row.insertCell(0);
		ctrId.innerHTML = workerArray[i].ID;
		let usern = row.insertCell(1);
		usern.innerHTML = workerArray[i].userName;
		let Psw = row.insertCell(2);
		Psw.innerHTML = workerArray[i].password;
		let Ofn = row.insertCell(3);
		Ofn.innerHTML = workerArray[i].fullName;
		let Pos = row.insertCell(4);
		Pos.innerHTML = workerArray[i].position;
	}
}