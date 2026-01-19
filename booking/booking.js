function send(e) {
    if (e) e.preventDefault();

    if (!document.getElementById("terms").checked) {
        swal("Please Accept Terms", "You must agree to the Terms & Conditions before submitting.", "warning");
        return; // stop submission
    }

    var f = new FormData();
    f.append("fullname", document.getElementById("fullname").value);
    f.append("email", document.getElementById("email").value);
    f.append("phone", document.getElementById("phone").value);
    f.append("selector", document.getElementById("selector").value);
    f.append("guests", document.getElementById("guests").value);
    f.append("toDate", document.getElementById("toDate").value);
    f.append("fromDate", document.getElementById("fromDate").value);
    f.append("details", document.getElementById("details").value);
    f.append("terms", document.getElementById("terms").checked ? "accepted" : "not accepted");

    // alert("Form Data: \n" +
    //     "fullname: " + document.getElementById("fullname").value + "\n " +
    //     "email: " + document.getElementById("email").value + "\n " +
    //     "phone: " + document.getElementById("phone").value + "\n " +
    //     "selector: " + document.getElementById("selector").value + "\n " +
    //     "guests: " + document.getElementById("guests").value + "\n " +
    //     "toDate: " + document.getElementById("toDate").value + "\n " +
    //     "fromDate: " + document.getElementById("fromDate").value + "\n " +
    //     "details: " + document.getElementById("details").value) + "\n " +
    //     "terms: " + (document.getElementById("terms").checked ? "accepted" : "not accepted")


    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            if (r.responseText == "Message Sent Successfully") {
                document.getElementById("fullname").value = "";
                document.getElementById("email").value = "";
                document.getElementById("phone").value = "";
                document.getElementById("selector").value = "";
                document.getElementById("guests").value = "";
                document.getElementById("toDate").value = "";
                document.getElementById("fromDate").value = "";
                document.getElementById("details").value = "";
                swal("Message Sent", "We'll get Back to you Soon ", "success");
            } else {
                swal("Try Again", r.responseText, "error");
            }

            document.getElementById("send_btn").disabled = false;
            document.getElementById("send_btn").classList.remove("disable");
        }
    }
    r.open("POST", "../mail2/sendEmailProcess.php", true);
    r.send(f);
    document.getElementById("send_btn").disabled = true;
    document.getElementById("send_btn").classList.add("disable");
}


