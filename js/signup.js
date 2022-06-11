function validate() {
    if (!/^[0-9a-zA-Z_.-]+$/.test(document.querySelector("#username").value)) {
        alert("Username is wrong. Try another one");
    }

    if (!/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(document.querySelector("#email").value)) {
        // return false;
        alert("email is wrong. Try another one");
    }


    if (!/^[0-9A-Za-z]\w{7,14}$/.test(document.querySelector("#password").value)) {
        // return false;
        alert("Password is wrong. Try another one");
    }

    if (!/^[0-9A-Za-z]\w{7,14}$/.test(document.querySelector("#confirmPassword").value)) {
        // return false;
        alert("The password is wrong. Try another one");
    }

    if (document.querySelector("#password").value != document.querySelector("#confirmPassword").value) {
        // return false;
        alert("password didn't match");
    }
}