<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IT Sklep</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        button:focus {
            outline: 0;
        }

        .navbar .dropdown-menu .form-control {
            width: 200px;
        }
    </style>
</head>
<body>
@include('components/navbar')
@include('components/bread')

<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
        <div class="justify-content-center">
            <h1>Samsung Note</h1>
        </div>

        <!--Grid row-->
        <div class="row wow fadeIn">


            <!--Grid column-->
            <div class="col-md-6 mb-4 py-5">

                <img src="img/karta_samsung.jpg" class="img-fluid" alt="">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Content-->
                <div class="p-4">

                    <div class="mb-3">
                        <a href="">
                            <span class="badge purple mr-1">Telefony</span>
                        </a>
                    </div>

                    <p class="lead">
              <span class="mr-1">
                <del>3000zł</del>
              </span>
                        <span>2700zł</span>
                    </p>

                    <p class="lead font-weight-bold">Opis</p>

                    <p>System operacyjny: <b>Android 5.1</b><br>Wyświetlacz (przekątna) <b>5,7 cale/cali.</b><br>Pamięć masowa <b>32 GB.</b></p>
                    <p>Samsung Galaxy Note 5 napędzany jest przez chipset Exynos 7420 Octa. To 8-rdzeniowy procesor (4x2.1 GHz Cortex-A57 oraz 4x1.5 GHz Cortex-A53), a także układ grafiki Mali-T760MP8. Urządzenie ma więc podzespoły podobne do tych, które znajdziemy w Galaxy S6.</p>

                    <form class="d-flex justify-content-left">
                        <!-- Default input -->
                        <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
                        <button class="btn btn-warning btn-md my-0 p" type="submit">Do koszyka
                            <i class="fas fa-shopping-cart ml-1"></i>
                        </button>

                    </form>

                </div>
                <!--Content-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr>

        <!--Grid row-->
        <div class="row d-flex justify-content-center wow fadeIn">

            <!--Grid column-->
            <div class="col-md-6 text-center">

                <h4 class="my-4 h4">Zobacz także</h4>


            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">

                <div class="card" style="width: 18rem;">
                    <img src="img/karta_samsung.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Note</h5>
                        <p class="card-text">System operacyjny: <b>Android 5.1</b><br>Wyświetlacz (przekątna) <b>5,7 cale/cali.</b><br>Pamięć masowa <b>32 GB.</b></p>
                        <a href="#" class="btn btn-warning justify-content-center">Do koszyka
                            <i class="fas fa-shopping-cart ml-1"></i></a>
                    </div>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card" style="width: 18rem;">
                    <img src="img/karta_samsung.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Note</h5>
                        <p class="card-text">System operacyjny: <b>Android 5.1</b><br>Wyświetlacz (przekątna) <b>5,7 cale/cali.</b><br>Pamięć masowa <b>32 GB.</b></p>
                        <a href="#" class="btn btn-warning justify-content-center">Do koszyka
                            <i class="fas fa-shopping-cart ml-1"></i></a>
                    </div>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card" style="width: 18rem;">
                    <img src="img/karta_samsung.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Note</h5>
                        <p class="card-text">System operacyjny: <b>Android 5.1</b><br>Wyświetlacz (przekątna) <b>5,7 cale/cali.</b><br>Pamięć masowa <b>32 GB.</b></p>
                        <a href="#" class="btn btn-warning justify-content-center">Do koszyka
                            <i class="fas fa-shopping-cart ml-1"></i></a>
                    </div>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>
</body>
</html>
