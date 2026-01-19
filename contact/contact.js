function send(e) {
    if (e) e.preventDefault();

    var btn = document.getElementById("send_btn");

    btn.disabled = true;
    var originalText = btn.innerText; // "Send Message" kiyana eka save karagaththa
    btn.innerText = "Sending... Please wait";
    btn.classList.add("disable");

    var f = new FormData();
    f.append("name", document.getElementById("name").value);
    f.append("email", document.getElementById("email").value);
    f.append("subject", document.getElementById("subject").value);
    f.append("message", document.getElementById("message").value);

    // alert("Form Data: \n" + 
    //     "Name: " + document.getElementById("name").value + "\n "+
    //     "email: " + document.getElementById("email").value + "\n "+
    //     "subject: " + document.getElementById("subject").value + "\n "+
    //     "message: " + document.getElementById("message").value );

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {

            btn.disabled = false;
            btn.innerText = originalText;
            btn.classList.remove("disable");

            if (r.responseText == "Message Sent Successfully") {
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("subject").value = "";
                document.getElementById("message").value = "";
                swal("Message Sent", "We'll get Back to you Soon ", "success");
            } else {
                swal("Try Again", r.responseText, "error");
            }

            document.getElementById("send_btn").disabled = false;
            document.getElementById("send_btn").classList.remove("disable");
        }
    }
    r.open("POST", "../mail/sendEmailProcess.php", true);
    r.send(f);
    document.getElementById("send_btn").disabled = true;
    document.getElementById("send_btn").classList.add("disable");
}


