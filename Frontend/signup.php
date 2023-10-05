<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Signup | TRIXESS</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="loginBody d-flex align-items-center justify-content-center">
        <div class="d-flex justify-content-center align-items-center loginContainer col-12 col-lg-5 flex-column p-3">
            <div class="headerText pt-3 mt-3">TRIXESS</div>
            <div class="headerSubText mb-4">BEYOND THE FUTURE OF THE WORLD</div>
            <div class="fs-3 mb-4 mt-1">Tell us Something About You!</div>
            <span class="text-danger fs-6" id="msg2"></span>


            <div class="col-12 d-flex flex-column mb-3">
                <label for="fname" class="fs-6">First Name</label>
                <input type="text" id="fname" class="fs-4 p-1 rounded-2 border-0">
            </div>
            <div class="col-12 d-flex flex-column mb-3">
                <label for="lname" class=" fs-6">Last Name</label>
                <input type="text" id="lname" class="fs-4 p-1 rounded-2 border-0">
            </div>
            <div class="col-12 d-flex flex-column mb-3">
                <label for="email" class=" fs-6">Email</label>
                <input type="email" id="email" class="fs-4 p-1 rounded-2 border-0">
            </div>
            <div class="col-12 d-flex flex-column mb-3">
                <label for="password" class=" fs-6">Password</label>
                <input type="password" id="password" class="fs-4 p-1 rounded-2 border-0">
            </div>


            <button class="btn btn-info fw-bold fs-3 col-12 border-0 mb-3 mt-5" onclick="signUp();">CONTINUE</button>
            
            <div class="text01 pb-3">Already have a Account? <a href="login.php">Login Up With Trixess</a></div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>