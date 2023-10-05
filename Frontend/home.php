<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Customer Support ChatBot | TRIXESS</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" href="images/logo.png" type="image/png">
</head>

<body>
    <?php

    session_start();

    if (isset($_SESSION["u"])) {
        $data = $_SESSION["u"];

        ?>
        <?php include "connection.php"; ?>
        <nav class="navbar homeBody fixed-top">
            <div class="container-fluid">
                
                <button class="navbar-toggler navButton border-white text-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-white fw-bold fs-2 mx-auto" href="#">TRIXESS</a>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
                        <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column">
                        <div class="offcanvaBody d-flex justify-content-center align-items-center my-3">
                            <div class="offcanvasimg me-3 rounded-circle"  style=cursor:pointer onclick="window.location='profileSetting.php';">
                                <img src="images/signup/java02.jpg" alt="">
                            </div>
                            <div class="text-white">
                            <?php echo $data["fname"] . ' ' . $data["lname"]; ?>
                            </div>
                        </div>

                        <h6 class="text-white mt-5">Chat History</h6>

                        <ul class="navbar-nav justify-content-end ">
                            <li class="nav-item col-12 d-flex p-1 my-2">
                                <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                                <div class="fs-5 text-white ps-3">HOW TO COLLECT</div>
                                <div class="bin ms-auto">
                                    <img src="images/home/bin 1.png" alt="">
                                </div>
                            </li>

                            <li class="nav-item col-12 d-flex p-1 my-2">
                                <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                                <div class="fs-5 text-white ps-3">HOW TO COLLECT</div>
                                <div class="bin ms-auto">
                                    <img src="images/home/bin 1.png" alt="">
                                </div>
                            </li>

                            <li class="nav-item col-12 d-flex p-1 my-2">
                                <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                                <div class="fs-5 text-white ps-3">HOW TO COLLECT</div>
                                <div class="bin ms-auto">
                                    <img src="images/home/bin 1.png" alt="">
                                </div>
                            </li>

                        </ul>


                        <button onclick="signout();"
                            class="d-flex p-2 mt-auto col-lg-6 col-10 btn btn-light justify-content-center align-items-center mx-auto">
                            <img src="images/home/logout.png" alt="" width="30px" class=" me-1">
                            LOGOUT
                        </button>

                    </div>
                </div>
            </div>
        </nav>

        <div class="container homeBody1 d-flex flex-column">

            <div class="col-12 ms-auto question d-flex justify-content-center align-items-center p-2 my-3">
                <button class="bg-transparent border-0 me-auto ms-2"><img src="images/home/edit.png" width="30px"
                        alt=""></button>
                <input type="text" class="bg-transparent border-0 col-11 text-white text-end pe-3"
                    value="How to Find The Date in Windows Laptop" />
            </div>

            <div class="col-12answear f w-bold d-flex align-items-center p-2 g-2 fs-6 ms-2 mt-2 mb-5">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quas architecto error? Maxime dolorum eos
                natus amet odit ipsum dignissimos.
            </div>


            <div class="col-12 ms-auto question d-flex justify-content-center align-items-center p-2 my-3">
                <button class="bg-transparent border-0 me-auto ms-2"><img src="images/home/edit.png" width="30px"
                        alt=""></button>
                <input type="text" class="bg-transparent border-0 col-11 text-white text-end pe-3"
                    value="How to Find The Date in Windows Laptop" />
            </div>

            <div class="col-12 answear f w-bold d-flex align-items-center p-2 g-2 fs-6 ms-2 mt-2 mb-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, magni iste ab quia cum ullam quis libero!
                Dolor modi molestiae, maxime recusandae pariatur distinctio accusamus aliquam eius dignissimos eveniet
                reiciendis placeat vitae nobis iure qui.
            </div>

        </div>

        <div class="container fixed-bottom mb-3 d-flex z-0">
            <div class="col-12 mx-auto questioninput d-flex justify-content-center align-items-center p-2 my-3">

                <input type="text" class="bg-transparent border-0 col-11 text-white text-start ps-2"
                    value="Ask Something from me" />
                <button class="bg-transparent border-0  ms-auto me-3"><img src="images/home/right-arrow.png" width="30px"
                        alt=""></button>

            </div>
        </div>

        <?php

} else {
    header("Location: login.php");
    exit;
}


    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>

</html>