const faqItems = document.querySelectorAll('.contact3--sec4--div6');

faqItems.forEach(item => {
    const button = item.querySelector('.contact3--sec4--btn1');
    const answer = item.querySelector('.contact3--sec4--div7');
    const icon = item.querySelector('.contact3--sec4--extraspan2');

    button.addEventListener('click', () => {
        faqItems.forEach(otherItem => {
            if (otherItem !== item && otherItem.classList.contains('active')) {
                otherItem.classList.remove('active');
                const otherIcon = otherItem.querySelector('.contact3--sec4--extraspan2');
                otherIcon.textContent = '+';
            }
        });

        // Toggle current item
        item.classList.toggle('active');

        // Update icon
        if (item.classList.contains('active')) {
            icon.textContent = '+'; // Keep + symbol, rotation will make it look like ×
        } else {
            icon.textContent = '+';
        }
    });
});



function send(e) {
    if (e) e.preventDefault();

    var btn = document.getElementById("send_btn");

    btn.disabled = true;
    var originalText = btn.innerText;
    btn.innerText = "Sending... Please wait";
    btn.classList.add("disable");

    var f = new FormData();
    f.append("name", document.getElementById("name").value);
    f.append("phone", document.getElementById("phone").value);
    f.append("email", document.getElementById("email").value);
    f.append("message", document.getElementById("message").value);


    // alert("Form Data: \n" + 
    //     "Name: " + document.getElementById("name").value + "\n "+
    //     "phone: " + document.getElementById("phone").value + "\n "+
    //     "email: " + document.getElementById("email").value + "\n "+
    //     "message: " + document.getElementById("message").value );

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {

            btn.disabled = false;
            btn.innerText = originalText;
            btn.classList.remove("disable");

            if (r.responseText == "Message Sent Successfully") {
                document.getElementById("name").value = "";
                document.getElementById("phone").value = "";
                document.getElementById("email").value = "";
                document.getElementById("message").value = "";
                swal("Message Sent", "We'll get Back to you Soon ", "success");
            } else {
                swal("Try Again", r.responseText, "error");
            }

            document.getElementById("send_btn").disabled = false;
            document.getElementById("send_btn").classList.remove("disable");
        }
    }
    r.open("POST", "../mail1/sendEmailProcess.php", true);
    r.send(f);
    document.getElementById("send_btn").disabled = true;
    document.getElementById("send_btn").classList.add("disable");
}