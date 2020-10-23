// just to hide the unnessary fullname and passord elements
function showRegister(){
	if(document.getElementById('type').selectedIndex!=1){
		document.getElementsByClassName('newPat')[0].style.display = 'block';
		document.getElementsByClassName('newPat')[1].style.display = 'block';
	}
	else{
		//make sure tester doesnt accidentally assign data
		document.getElementsByClassName('newPat')[0].style.display = 'none';
		document.getElementsByClassName('newPat')[1].style.display = 'none';
		document.getElementById('fullName').value = null;
		document.getElementById('password').value = null;
	}
}

function recordTest(){
	event.preventDefault();
	let testData = newTestData();
	let currDate = new Date();
	let currDateStr = new String(currDate);
	/*construct new objects*/
	let newPatient = new patientArray();
	let newTest = new testArray();

	/*set Test Date and symptoms*/
	newTest.resultDate=currDateStr.slice(4,15);
	newTest.symptoms = testData.symptoms;
	
	//if patient is returnee
	if (document.getElementById("type").value == "Returnee"){
		for(let i=0; i<patientArray.length; i++){
			if(testData.username== patientArray[i].username){
				patientArray[i].type = "Returnee";
				newTest.pID = patientArray[i].ID;
				testArray.push(newTest);
				
				return alert ("Test and Patient Recorded");
			}
		}
		return alert("Patient username not found")
	}
	//if patient is new
	else{
		newPatient.userName= testData.username;
		newPatient.password= testData.password;
		newPatient.fullName= testData.fullName;
		newPatient.type=testData.type;
		newPatient.comments=testData.comments;
		patientArray.push(newPatient);

		newTest.pID = newPatient.userName;
		testArray.push(newTest);
		return alert ("TestRecorded");
	}
	
}


function newTestData(){
	
	let testDataArr = {};

	testDataArr["username"] = document.getElementById("username").value;
	testDataArr["password"] = document.getElementById("password").value;
	testDataArr["fullName"] = document.getElementById("fullName").value;
	testDataArr["symptoms"] = document.getElementById("symptoms").value;
	testDataArr["type"] = document.getElementById("type").value;
	testDataArr["comments"] = document.getElementById("comments").value;
	
    return testDataArr;
}

