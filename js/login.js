function loginUser() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText === "success") {
                window.location.href = "biddingPage.html";
            } else {
                alert("Invalid email or password");
            }
        }
    };
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
}
