function clearboxesLogin() {
  document.getElementById("memberemail").value = '';
  document.getElementById("memberpass").value = '';
}

function clearboxesRegister() {
  document.getElementById("firstname").value = '';
  document.getElementById("lastname").value = '';
  document.getElementById("emailbox").value = '';
  document.getElementById("passwordbox").value = '';
}

function loginpress() {
  var str = document.getElementById("memberemail").value;
  var at = "@"
  var dot = "."
  var lat = str.indexOf(at)
  var lstr = str.length
  var ldot = str.indexOf(dot)

  if (str == '') {
    document.getElementById("login_msg").value = "Enter your Email Address.";
  } else if (str.indexOf(at) == -1) {
    document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
    document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
    document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(at, (lat + 1)) != -1) {
    document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
  } else if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
    document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(dot, (lat + 2)) == -1) {
    document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(" ") != -1) {
    document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
  } else if (document.getElementById("memberpass").value == '') {
    document.getElementById("login_msg").value = "Password is Required";
  } else {
    return true
  }
  return false;
}

function newmemberjoin() {
  var str = document.getElementById("emailbox").value;
  var at = "@"
  var dot = "."
  var lat = str.indexOf(at)
  var lstr = str.length
  var ldot = str.indexOf(dot)

  var regex = /^[a-zA-Z]*$/;

  if (document.getElementById("firstname").value == "") {
    document.getElementById("registration_msg").value = "Enter your First Name";
  } else if (!regex.test(document.getElementById("firstname").value)) {
    document.getElementById("registration_msg").value = "First Name Cannot Have Numbers or Symbols";
  } else if (document.getElementById("lastname").value == '') {
    document.getElementById("registration_msg").value = "Enter your Last Name";
  } else if (!regex.test(document.getElementById("firstname").value)) {
    document.getElementById("registration_msg").value = "Last Name Cannot Have Numbers or Symbols";
  } else if (str == '') {
    document.getElementById("registration_msg").value = "Enter your Email Address.";
  } else if (str.indexOf(at) == -1) {
    document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
    document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
    document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(at, (lat + 1)) != -1) {
    document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";
  } else if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
    document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(dot, (lat + 2)) == -1) {
    document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";
  } else if (str.indexOf(" ") != -1) {
    document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";
  } else if (document.getElementById("passwordbox").value == '') {
    document.getElementById("registration_msg").value = "Password is Required";
  } else if (!document.forms["getnewmember"].agreetoterms.checked) {
    document.getElementById("registration_msg").value = "You have to agree to Terms & Conditions";
  } else {
    return true;
  }
  return false;

}
