function organizeTrip(){
    event.preventDefault();
    let tripData = newTripData();
    
    let tab = document.getElementById("CRSTOLIST");
    let newtab = tab.getElementsByTagName("tbody")[0];

    let row  = newtab.insertRow(tab.length);
    let idCell = row.insertCell(0);
	idCell.innerHTML = tripData.TId;
	let dateCell = row.insertCell(1);
	dateCell.innerHTML = tripData.TDate;
	let desCell = row.insertCell(2);
	desCell.innerHTML = tripData.Des;
	let loCell = row.insertCell(3);
	loCell.innerHTML = tripData.Loc;
	let numCell = row.insertCell(4);
	numCell.innerHTML = tripData.NumV;
	let criCell = row.insertCell(5);
	criCell.innerHTML = tripData.Critype;


}

function newTripData(){
	
	let tripDataArr = {};

	tripDataArr["TId"] = document.getElementById("TId").value;
	tripDataArr["TDate"] = document.getElementById("TDate").value;
	tripDataArr["Des"] = document.getElementById("Des").value;
	tripDataArr["Loc"] = document.getElementById("Loc").value;
	tripDataArr["NumV"] = document.getElementById("NumV").value;
	tripDataArr["Critype"] = document.getElementById("Critype").value;
	
    return tripDataArr;
}

function fillTripTable(){
	for(let i=0; i<tripArray.length;i++){
		let row  = tab.insertRow(tab.length);
		
		let TId = row.insertCell(0);
		TId.innerHTML = tripArray[i].tripId;
		let TDate = row.insertCell(1);
		TDate.innerHTML = tripArray[i].tripDate;
		let Des = row.insertCell(2);
		Des.innerHTML = tripArray[i].description;
		let Loc = row.insertCell(3);
		Loc.innerHTML = tripArray[i].location;
		let NumV = row.insertCell(4);
		NumV.innerHTML = tripArray[i].numVolunteers;
		let Critype = row.insertCell(5);
		Critype.innerHTML = tripArray[i].crisistype;
	}
}