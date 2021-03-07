

function staff() {

	event.preventDefault();

	let formdata = captureformData();

	// insert the data into table
	let tab  = document.getElementById("CRSTOList");
	let newtab = tab.getElementsByTagName("tbody")[0];

	let row  = newtab.insertRow(tab.length);

	
	let nameCell = row.insertCell(0);
	nameCell.innerHTML = formdata. usern;
	let numCell = row.insertCell(1);
	numCell.innerHTML = formdata. Psw;
	let nCell = row.insertCell(2);
	nCell.innerHTML = formdata. Sfn;
	let nmCell = row.insertCell(3);
	nmCell.innerHTML = formdata. Pos;
	let phoCell = row.insertCell(4);
	phoCell.innerHTML = formdata.Pho;
	let djoCell = row.insertCell(5);
	djoCell.innerHTML = formdata.Djo;
}

function captureformData() {

	let formDataArr = {};


	
	formDataArr["usern"] = document.getElementById("usern").value;
	formDataArr["Psw"] = document.getElementById("Psw").value;
	formDataArr["Sfn"] = document.getElementById("Sfn").value;
	formDataArr["Pos"] = document.getElementById("Pos").value;
	formDataArr["Pho"] = document.getElementById("Pho").value;
	formDataArr["Djo"] = document.getElementById("Djo").value;


   
    return formDataArr;
}

function fillStaffTable(){
	for(let i=0; i<workerArray.length;i++){
		let row  = tab.insertRow(tab.length);
		
		let usern = row.insertCell(0);
		usern.innerHTML = workerArray[i].userName;
		let Psw = row.insertCell(1);
		Psw.innerHTML = workerArray[i].password;
		let Sfn = row.insertCell(2);
		Sfn.innerHTML = workerArray[i].fullName;
		let Pos = row.insertCell(3);
		Pos.innerHTML = workerArray[i].position;
		let Pho = row.insertCell(4);
		Pho.innerHTML = workerArray[i].phone;
		let Djo = row.insertCell(5);
		Djo.innerHTML = workerArray[i].datejoined;
	}
}