function signUp() {

    var f = document.getElementById("fname");
    var l = document.getElementById("lname");
    var e = document.getElementById("email");
    var p = document.getElementById("password");

    var form = new FormData;
    form.append("fname", f.value);
    form.append("lname", l.value);
    form.append("email", e.value);
    form.append("password", p.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            var text = request.responseText;
            if (text == "success") {
                window.location="home.php";
            } else {
                document.getElementById("msg2").innerHTML = text;
                document.getElementById("msgdiv").className = "d-block";
            }
        }
    };

    request.open("POST", "signupProcess.php", true);
    request.send(form);

}

function login() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");
  
    var f = new FormData();
    f.append("e", email.value);
    f.append("p", password.value);
  
    var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText;
        if (t == "success") {
          window.location = "home.php";
        } else {
          document.getElementById("msg2").innerHTML = t;
        }
      }
    };
  
    r.open("POST", "loginProcess.php", true);
    r.send(f);
  }