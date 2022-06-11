function validate() {
    var x = document.getElementById("Xpercent").value;

    if (x < 0 && x > 100) {
        alert("Invalid percent");
    }
    var y = document.getElementById("XIpercent").value;

    if (y < 0 && y > 100) {
        alert("Invalid percent");
    }

    if (!/^[0-9a-zA-Z_.-]+$/.test(document.querySelector("#firstname").value)) {
        alert("First name Invalid");
    }
    if (!/^[0-9a-zA-Z_.-]+$/.test(document.querySelector("#lastname").value)) {
        alert("LAst name Invalid");
    }

    if (!/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(document.querySelector("#email").value)) {
        // return false;
        alert("Invalid Email!");
    }
    // if (!/^[0-9a-zA-Z_.-]+$/.test(document.querySelector("#address").value)) {
    //     // also for spaces
    //     alert("Invalid Address");
    // }
    if (!/^[a-zA-Z_.-]+$/.test(document.querySelector("#district").value)) {
        alert("Invalid Distict name");
    }

    if (!/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{2}[-\s\.]?[0-9]{5,8}$/.test(document.querySelector('#phone').value)) {
        alert("invalid length and in format(+97798********)");
    }

    if (!/^[0-9A-Za-z]\w{7,14}$/.test(document.querySelector("#password").value)) {
        // return false;
        alert("Password is wrong. Try another one");
    }

    if (!/^[0-9A-Za-z]\w{7,14}$/.test(document.querySelector("#confirmPassword").value)) {
        // return false;
        alert("The password is wrong. Try another one");
    }



}