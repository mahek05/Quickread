function validateForm() {
    var fName = document.getElementById("firstName").value;
    var lName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var cNumber = document.getElementById("cNumber").value;
    var pass = document.getElementById("pass").value;
    var confirmPass = document.getElementById("confirmPass").value;

    if (fName === "" || lName === "" || email === "" || cNumber === "" || pass === "" || confirmPass === "") {
        alert("Fill all the details.");
        return false;
    }

    var namePattern = /^[a-zA-Z]+$/;
    if (!namePattern.test(fName) || !namePattern.test(lName)) {
        alert("Name should only contain letters.");
        return false;
    }

    var emailPattern = /^\w+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email.");
        return false;
    }

    var cNumberPattern = /^\d{10}$/;
    if (!cNumberPattern.test(cNumber)) {
        alert("Enter valid contact number.");
        return false;
    }

    var passPattern = /^(?=.[a-z])(?=.[A-Z])(?=.*\W).{8,}$/;
    if (!passPattern.test(pass)) {
        alert("Password should contain at least one lowercase, one uppercase, one special character, and be at least 8 characters long.");
        return false;
    }

    if (pass !== confirmPass) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}