function passwordConfirm(){

}

function dateValidate(datePicker){
    if (document.getElementById(datePicker).validity.rangeUnderflow) {
        alert("Invalid Date");
    }
}