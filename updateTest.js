/* this var will share the testArray index across the other functions*/
var currArrVal=-1; /*global var to check if findTest is used and to send testArray's index to updateTest()*/


function findTest(){
	event.preventDefault();
	for(let i=0; i<testArray.length;i++){
		let findingID = testArray[i].testId;
		/*if test id == test id from doc */
		if(findingID.localeCompare(document.getElementById("testId").value)==0){
			/*var outside of the function*/
			currArrVal=i;
			updateTestDataTable();
			return "";
			
		}
	}
	return alert("Test ID does not match any tests in our records");

	
}

function updateTestDataTable(){
	let tabObj = document.getElementById("testList");
	let tab = tabObj.getElementsByTagName("tbody")[0];
	let row  = tab.insertRow(0);

	let testDate = row.insertCell(0);  
	testDate.innerHTML = testArray[currArrVal].testDate;
	let result = row.insertCell(1);
	result.innerHTML = testArray[currArrVal].result;
	let resultDate = row.insertCell(2);
	resultDate.innerHTML = testArray[currArrVal].resultDate;
	let status = row.insertCell(3);
	status.innerHTML = testArray[currArrVal].status;
	tab.deleteRow(1);
}

function updateTest(){
	event.preventDefault();

	if(currArrVal>=0){
		let newResult = document.getElementById("results").value;
		let currDate = new Date();
		let currDateStr = new String(currDate);

		testArray[currArrVal].resultDate=currDateStr.slice(4,15);
		testArray[currArrVal].result = newResult;
		testArray[currArrVal].status="Complete";
		updateTestDataTable();	
		return"";
	}
	return alert("You haven't found any Test ID");
}