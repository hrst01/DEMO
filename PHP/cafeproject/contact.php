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


    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">

            <h3 style="text-align: center; font-family: 'Dancing Script', cursive; color: #ffffff;"> One More Cup </h3>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                        <a aria-current="page" href="contact.php">
                            <h7 class="nav-link active" style="color: #ffffff;">Contact us</h7>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">
                            <h7 style="color: #ffffff;">Menu </h7>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>



    <h1 style="text-align: center; font-family: 'Dancing Script', cursive; color: #000000;">Contact us</h1>



    <div class="container my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">

        </ul>
    </div>


    <div class="container my-4">
        <form class="row g-3">
            
            <div class="col-md-7">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="enter email">
            </div>
            <br>
            <br>
            <div class="col-md-7">
                <label for="number" class="form-label">Phone no.</label>
                <input type="number" class="form-control" id="number" placeholder="enter phone no.">
            </div>
            <br>

            <br>
            <div class="col-md-7">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="enter password">
            </div>
            <br>
            <div class="col-md-7">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="enter your address">
            </div>
            <br>
            <br>
            <div class="col-md-7">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="enter city">
            </div>
            <br> &nbsp;
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Madhya Pradesh</option>
                    <option>Uttar Pradesh</option>
                    <option>Bihar</option>
                    <option>Patna</option>
                    <option>Kerla</option>
                </select>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Massage</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="enter massage"></textarea>
                </div>

            </div>

            <br><br>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <br><br>
            <div class="col-12 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
                <button type="cancel" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
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