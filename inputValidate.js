function passwordValidate(){
    var password = document.getElementById("userpass");
    console.log(password);
    console.log(password.value);
    var msg="string";
    var ret=true; 

    var lowerCaseLetters = /[a-z]/g;
    if(password.value.match(lowerCaseLetters)) {
        msg.replace("At Least 1 Lower Case Letter\n", "");
    } else {
        msg.concat("At Least 1 Lower Case Letter\n");
        ret=false;
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(password.value.match(upperCaseLetters)) {
        msg.replace("At Least 1 Upper Case Letter\n", "");
    } else {
        msg.concat("At Least 1 Upper Case Letter");
        ret=false;
        console.log(msg);
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(password.value.match(numbers)) {
        msg.replace("At Least 1 Number\n", "");
    } else {
        msg.concat("At Least 1 Number\n");
        ret=false;
    }

    // Validate length
    if(password.value.length >= 8) {
        msg.replace("Must have at least 8 characters\n", "");
    } else {
        msg.concat("Must have at least 8 characters\n");
        ret=false;
    }
password.setCustomValidity(msg);
console.log(msg);
return ret;

}

function passwordConfirm(){
    var password = document.getElementById("userpass")
    var confirm_password = document.getElementById("userpass2");

    if(password.value != confirm_password.value) {
        userpass2.setCustomValidity("Passwords Don't Match");
    } else {
        userpass2.setCustomValidity('');
    }
  }


function dateValidate(datePicker){
    if (document.getElementById(datePicker).validity.rangeUnderflow) {
        alert("Invalid Date");
    }
}