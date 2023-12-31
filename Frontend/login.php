<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login | TRIXESS</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="images/logo.png" type="image/png">

</head>

<body>

    <div class="loginBody d-flex align-items-center justify-content-center">
        <div class="d-flex justify-content-center align-items-center loginContainer col-12 col-lg-5 flex-column p-3">
            <div class="headerText pt-3">TRIXESS</div>
            <div class="headerSubText mb-4">BEYOND THE FUTURE OF THE WORLD</div>
            <div class="fs-3 mb-4 mt-1">Login to Your Account</div>
            <span class="text-danger fs-6" id="msg2" style="text-align: start;"></span>
            <div class="col-12 d-flex flex-column mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" class="fs-3 p-1 rounded-2 border-0">
            </div>
            <div class="col-12 d-flex flex-column mb-5">
                <label for="password">Password</label>
                <input type="password" id="password" class="fs-3 p-1 rounded-2 border-0">
            </div>
            <button class="btn btn-info fw-bold fs-3 col-12 border-0 mb-3" onclick="login();">LOGIN</button>
            <button class="g-3 d-inline-flex align-items-center justify-content-center col-12 rounded-3 fs-2 p-2 mb-5">
                <img src="images/loginImages/Google_ G _Logo 1.svg" alt="googleImage" class=" bg-transparent">
                <div class="btnTextGoogle">CONTINUTE WITH GOOGLE</div>
            </button>
            <div class="text01 pb-3">Don’t have a Account? <a href="signup.php">Sign Up With Trixess</a></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>