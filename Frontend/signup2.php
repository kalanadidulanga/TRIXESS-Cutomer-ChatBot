<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Signup window02 | TRIXESS</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="icon" href="images/logo.png" type="image/png">

</head>

<body>

    <div class="loginBody d-flex align-items-center justify-content-center">
        <div class="d-flex justify-content-center align-items-center loginContainer col-12 col-lg-5 flex-column p-3">
            <div class="position-absolute top-0 start-0 mt-5 ms-5" type="button"
                onclick="document.location='signup.php'">
                < BACK</div>
                    <div class="headerText">TRIXESS</div>
                    <div class="headerSubText mb-4">BEYOND THE FUTURE OF THE WORLD</div>
                    <div class="fs-5 mb-4 mt-5">Let’s see how You Actually look</div>


                    <!-- HTML -->
                    <div type="button" class="circle d-flex justify-content-center align-items-center">
                        <div class="position-absolute fs-1">+</div>
                        <img src="image location" alt="" class="rounded-circle z-1">
                        <input type="file" id="fileInput" style="display: none;" accept="image/*">
                    </div>


                    <script>
                        const fileInput = document.getElementById("fileInput");

                        document.querySelector(".circle").addEventListener("click", function () {
                            fileInput.click();
                        });

                        fileInput.addEventListener("change", function () {
                            const selectedFile = fileInput.files[0];

                            if (selectedFile) {
                                const imagePreview = document.querySelector(".rounded-circle");
                                const fileReader = new FileReader();

                                fileReader.onload = function () {
                                    imagePreview.src = fileReader.result;
                                };

                                fileReader.readAsDataURL(selectedFile);
                            }
                        });
                    </script>



                    <button class="btn btn-info fw-bold fs-5 col-12 col-lg-5 border-0 mb-3 mt-5"
                        onclick="uploadIMG();">CREATE ACCOUNT</button>

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