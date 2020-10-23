var patientArray = [
	{ID:"P001", userName:"P001", password:"P001", fullName:"John Watson", type:"Returnee", comments:"fat"},
	{ID:"P002", userName:"P002", password:"P002", fullName:"Ryan Keith", type:"Suspected", comments:"powerful"},
	{ID:"P003", userName:"P003", password:"P003", fullName:"Jabez Chin", type:"Infected", comments:"tired"},
	{ID:"P004", userName:"P004", password:"P004", fullName:"Sherlock Holmes", type:"Close Contact", comments:"skeptical"},
]
var workerArray =[
	{ID:"W001", userName:"W001", password:"W001", fullName:"Robert Downey Jr", position:"Tester"},
	{ID:"W002", userName:"W002", password:"W002", fullName:"Ryan Gosling", position:"Tester"},
	{ID:"M001", userName:"M001", password:"M001", fullName:"Peter Griffin", position:"Manager"},
	{ID:"M002", userName:"M002", password:"M002", fullName:"Chee Shen", position:"Manager"}
]
var testArray = [
	{testId: "T001", testDate:"Apr 02 2020", result:null, resultDate:"", status:"Pending", pID:"P001", symptoms:["pain","suffering"]},
	{testId: "T002", testDate:"May 05 2020", result:"Negative", resultDate:"Jun 02 2020", status:"Complete", pID:"P002", symptoms:[]},
	{testId: "T003", testDate:"June 07 2020", result:null, resultDate:"", status:"Pending", pID:"P003", symptoms:["head pain"]},
	{testId: "T004", testDate:"Apr 18 2020", result:"Negative", resultDate:"Apr 20 2020", status:"Complete", pID:"P004", symptoms:[]},
	{testId: "T005", testDate:"Oct 07 2020", result:null, resultDate:"", status:"Pending", pID:"P002", symptoms:[]},
	{testId: "T006", testDate:"Sep 22 2020", result:null, resultDate:"", status:"Pending", pID:"P002", symptoms:[]},
	{testId: "T007", testDate:"Oct 21 2020", result:"Negative", resultDate:"Dec 22 2020", status:"Complete", pID:"P001", symptoms:[]},
	{testId: "T008", testDate:"Jul 12 2020", result:"Positive", resultDate:"Nov 12 2020", status:"Complete", pID:"P001", symptoms:[]},
	{testId: "T009", testDate:"Oct 16 2020", result:"Negative", resultDate:"Sep 16 2020", status:"Complete", pID:"P001", symptoms:[]}
]

/*object constructors*/
function patientArray() {
	this.ID="P00" + patientArray.length;
	this.userName="P00" + patientArray.length;
	this.password="P00" + patientArray.length;
	this.fullName="";
	this.type="";
	this.comments="";
}

function testArray() {
	this.testId = "T0" + testArray.length;
	this.testDate = "";
	this.result = null;
	this.resultDate = "";
	this.status = "Pending";
	this.pID = "";
	this.symptoms = [];
}

/*Generate Test Report*/
function generateReport(){
	let tabObj = document.getElementById("testList");
	let tab = tabObj.getElementsByTagName("tbody")[0];
	
	for(let i=0; i<testArray.length;i++){
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
	tab.deleteRow(0);
}

