/*Login Page*/
function redirect() {
	event.preventDefault();    
    var userName = document.getElementById("userName").value;
    var password = document.getElementById("crstoPass").value;
    /*userVerify is in globalTesters.js*/
    console.log(userVerify(userName, password));
    if(userVerify(userName, password)>0){
        location.href ="CRSTOOrganizeTrip.html"+ "?userName="+ userName;
    }
    else if(userVerify(userName, password)==0){
        location.href ="CRSTOStaff.html";
    }
    else{
        return alert("Invalid Username or Password");
    }
}


/*Username + Password Check*/
function userVerify(userName, password){
	for(let i=0; i<workerArray.length; i++){
		if(userName.localeCompare(workerArray[i].userName)==0 
		&& password.localeCompare(workerArray[i].password)==0){
			if(workerArray[i].position=="Staff"){
				return 1;
			}
			else{
				return 0;
			}
		}
	}
	return null;
}