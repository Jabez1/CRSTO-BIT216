function bothFunctions(){
    var url = document.location.href;
    var userName = url.split('?')[1].split("&")[0].split("=")[1];
    let pObj = patientArray.filter(num => num.userName === userName);
    patientDetails(pObj);
    fillPatientTable(pObj);
}

/* these functions would work but i dont know how to preventDefault in an if statement*/
function patientDetails(pObj){
    
    document.getElementById('name').innerHTML = "Patient Name: " + pObj[0].fullName;
    document.getElementById('id').innerHTML = "Patient ID: " +  pObj[0].ID;  
    document.getElementById('status').innerHTML = "Patient Status: " +  pObj[0].type;
}

function fillPatientTable(pObj){
    let tabObj = document.getElementById("patTable");
    let tab = tabObj.getElementsByTagName("tbody")[0];
    
	for(let i = 0; i<(testArray.length); i++){
        if(testArray[i].pID == pObj[0].ID){
            console.log(testArray[i].pID == pObj[0].ID);
            let row  = tab.insertRow(tab.length);
            let testId = row.insertCell(0);
            testId.innerHTML = testArray[i].testId;
            let testDate = row.insertCell(1);
            testDate.innerHTML = testArray[i].testDate;
            let result = row.insertCell(2);
            result.innerHTML = testArray[i].result;
            let resultDate = row.insertCell(3);
            resultDate.innerHTML = testArray[i].resultDate;
            let status = row.insertCell(4);
            status.innerHTML = testArray[i].status;
        }
       
    }
	
}
