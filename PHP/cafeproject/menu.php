<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <title>project</title>
</head>

<body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">

            <h3 style="text-align: center; font-family: 'Dancing Script', cursive; color: #ffffff;"> One More Cup </h3>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent ">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <h7 style="color: #ffffff;">Home </h7>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <h7 style="color: #ffffff;">About</h7>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            <h7 style="color: #ffffff;">Contact us</h7>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" href="menu.php">
                            <h7 class="nav-link active" style="color: #ffffff;">Menu</h7>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>


    <h1 style="text-align: center; font-family: 'Dancing Script', cursive; color: #000000;">Menu</h1>

    <div class="container my-2">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">

        </ul>
    </div>



    <!-- contain box -->



    <div class="album py-4 bg-light my-4">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu1.jpg" class="d-block w-100" alt="...">


                        <div class="card-body my-2">
                            <h3 style="text-align:center;">BLACK COFFEE</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 129</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                    <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p> -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">

                                    <!-- button -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu2.jpg" class="d-block w-100" alt="...">

                        <div class="card-body my-2">
                            <h3 style="text-align:center;">GREEN TEA</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 119</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!-- btn -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu3.jpg" class="d-block w-100" alt="...">

                        <div class="card-body my-2">
                            <h3 style="text-align:center;">CHOCOLATE COFFEE</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 149</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!-- btn -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>


        </div>

    </div>

    <div class="album py-4 bg-light my-4">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu4.jpg" class="d-block w-100" alt="...">


                        <div class="card-body my-2">
                            <h3 style="text-align:center;">COLD COFFEE</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 169</button>
                            </div>

                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">

                                    <!-- button -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu5.jpg" class="d-block w-100" alt="...">

                        <div class="card-body my-2">
                            <h3 style="text-align:center;">NORMAL TEA</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 49</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!-- btn -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu6.jpg" class="d-block w-100" alt="...">

                        <div class="card-body my-2">
                            <h3 style="text-align:center;">NORMAL COFFEE</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 99</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!-- btn -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>



    <div class="album py-4 bg-light my-4">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu7.jpg" class="d-block w-100" alt="...">


                        <div class="card-body my-2">
                            <h3 style="text-align:center;">LEMON COFFEE</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 119</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">

                                    <!-- button -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu8.jpg" class="d-block w-100" alt="...">

                        <div class="card-body my-2">
                            <h3 style="text-align:center;">CAPPUCCINO</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 139</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!-- btn -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="images/menu9.jpg" class="d-block w-100" alt="...">

                        <div class="card-body my-2">
                            <h3 style="text-align:center;">MACCHIATO</h3>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <button type="button" class="btn btn-warning ">Rs = 149</button>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-4">
                                <a href="order.php" class="nav-link px-2 text-muted">
                                <button type="button" class="btn btn-success">Order Now</button></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <!-- btn -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <br><br>


    <div class="container">
        <footer class="py-3 my-6">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact Us</a></li>
                <li class="nav-item"><a href="menu.php" class="nav-link px-2 text-muted">Menu</a></li>

            </ul>
            <p class="text-center text-muted">© 2023 Cafe , Inc</p>
        </footer>
    </div>



    <br><br>


</body>

</html>