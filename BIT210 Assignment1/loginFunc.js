/*Login Page*/
function redirect() {
	event.preventDefault();    
    var userName = document.getElementById("userName").value;
    var password = document.getElementById("ctrPass").value;
    /*userVerify is in globalTesters.js*/
    console.log(userVerify(userName, password));
    if(userVerify(userName, password)>0){
        location.href ="PHistory.html"+ "?userName="+ userName;
    }
    else if(userVerify(userName, password)==0){
        location.href ="RecordNewTest.html";
    }
    else if(userVerify(userName, password)<0){
        location.href ="CTRegCentre.html";
    }
    else{
        return alert("Invalid Username or Password");
    }
}


/*Username + Password Check*/
function userVerify(userName, password){
	for(let i=0; i<patientArray.length; i++){
		if(userName.localeCompare(patientArray[i].userName)==0 
		&& password.localeCompare(patientArray[i].password)==0){
			return 1;
		}
	}
	for(let i=0; i<workerArray.length; i++){
		if(userName.localeCompare(workerArray[i].userName)==0 
		&& password.localeCompare(workerArray[i].password)==0){
			if(workerArray[i].position=="Tester"){
				return 0;
			}
			else{
				return -1;
			}
		}
	}
	return null;
}