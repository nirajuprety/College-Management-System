function validate() {
    if (!/^[0-9a-zA-Z_.-]+$/.test(document.querySelector("#username").value)) {
        alert("Invalid Username");
    }

    if (!/^[0-9A-Za-z]\w{7,14}$/.test(document.querySelector("#password").value)) {
        alert("Invalid password");
    }
}