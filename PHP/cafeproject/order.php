php<!doctype html>
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

    <h1 style="text-align: center; font-family: 'Dancing Script', cursive; color: #000000;">Order Now</h1>

    <div class="container">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">

        </ul>
    </div>


<!-- ordering process -->

<div class="container my-4" text-align="center">
    <form class="row g-3">
        
        <div class="col-md-7">
            <label for="inputState" class="form-label">Name of Coffee</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>BLACK COFFEE</option>
                <option>GREEN TEA</option>
                <option>CHOCOLATE COFFEE</option>
                <option>COLD COFFEE</option>
                <option>NORMAL TEA</option>
                <option>NORMAL COFFEE</option>
                <option>LEMON COFFEE</option>
                <option>CAPPUCCINO</option>
                <option>MACCHIATO</option>

            </select>
        </div>
        <br>
        <br>
        <div class="col-md-7">
            <label for="phone_no" class="form-label">Phone no.</label>
            <input type="phone_no" class="form-control" id="inputPassword4" placeholder="enter phone no.">
        </div>
        <br>
        <br>
        <div class="col-md-7">
            <label for="address" class="form-label">Address</label>
            <input type="address" class="form-control" id="inputPassword4" placeholder="enter your address">
        </div>
        <br>
        <br>
        <div class="col-md-7">
            <label for="number" class="form-label">Quantity of item</label>
            <input type="number" class="form-control" id="inputPassword4" placeholder="enter Quantity">
        </div>
        <br>

        <div class="col-md-7">
            <label for="inputState" class="form-label">Payment Method</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>CASH ON DELIVERY</option>
            </select>
        </div>



        <!-- <label for="option-" class="form-label">Payment option-:</label> -->
        <!-- <div class="form-check">  -->
            
            <!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> 
            <label class="form-check-label" for="flexRadioDefault1">
              Phone pay
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            Paytm
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Net Banking
            </label>
          </div>-->
          <!-- <div class="form-check"> 
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              cash on delivery
            </label>
          </div>-->
    
    </form>
</div>
<br>

<div class="col-12 d-flex justify-content-center align-items-center">
    <button type="submit" class="btn btn-success">Confirm Order</button>&nbsp;&nbsp;
    <a href="menu.php" class="nav-link px-2 text-muted">
<button type="cancel" class="btn btn-secondary">Cancel</button></a>
</div>







    <br><br> <br><br>


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