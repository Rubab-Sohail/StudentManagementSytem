// Form Validation
document.getElementById("studentForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let firstName = document.getElementById("firstName").value.trim();
    let lastName  = document.getElementById("lastName").value.trim();
    let email     = document.getElementById("email").value.trim();
    let phone     = document.getElementById("phone").value.trim();
    let course    = document.getElementById("course").value;

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    let phonePattern  = /^[0-9]{10,15}$/;

    if (firstName === "") { alert("Please enter your first name"); return; }
    if (lastName === "")  { alert("Please enter your last name");  return; }
    if (!email.match(emailPattern)) { alert("Please enter a valid email address"); return; }
    if (!phone.match(phonePattern)) { alert("Please enter a valid phone number (10-15 digits)"); return; }
    if (course === "") { alert("Please select a course"); return; }

    document.getElementById("studentForm").style.display = "none";
    document.getElementById("successMsg").style.display  = "flex";

    setTimeout(function() {
        document.getElementById("studentForm").style.display = "block";
        document.getElementById("successMsg").style.display  = "none";
        document.getElementById("studentForm").reset();
    }, 4000);
});


// jQuery Hide / Show
$(document).ready(function() {
    $("#hideBtn").click(function() {
        $("#formWrapper").hide(500);
    });
    $("#showBtn").click(function() {
        $("#formWrapper").show(500);
    });
});
