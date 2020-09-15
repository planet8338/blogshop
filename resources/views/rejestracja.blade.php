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

<div class="container py-5">
    <h1>Utwórz konto</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6">

    <form>
        <div class="form-group">
            <label for="name">Imię</label>
            <input type="text" class="form-control" id="name" placeholder="Imię">
        </div>
        <div class="form-group">
            <label for="surname">Nazwisko</label>
            <input type="text" class="form-control" id="surname" placeholder="Nazwisko">
        </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Wprowadź Email">
            </div>

        <div class="form-group">
            <label for="password">Hasło</label>
            <input type="password" class="form-control" id="password" placeholder="Hasło">
        </div>

        <div class="form-group">
            <label for="repeatPassword">Powtórz hasło</label>
            <input type="password" class="form-control" id="repeatPassword" placeholder="Powtórz Hasło">
        </div>



    </form>
    </div>
        <div class="col-lg-6">
        <form>
            <div class="form-group">
                <label for="number">Numer telefonu</label>
                <input type="number" class="form-control" id="number" placeholder="Numer telefonu">
            </div>
            <div class="form-group">
                <label for="street">Ulica</label>
                <input type="text" class="form-control" id="street" placeholder="Ulica">
            </div>

            <div class="form-group">
                <label for="city">Miejscowość</label>
                <input type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Miejscowość">
            </div>

            <div class="form-group">
                <label for="postcode">Kod pocztowy</label>
                <input type="number" class="form-control" id="postcode" placeholder="Kod pocztowy">
            </div>

        </form>

        </div>
        <div class="container py-5">
            <div class="justify-content-center">
                <button type="submit" class="btn btn-lg btn-warning">Utwórz konto</button>
            </div>
        </div>
</div>


@include('components/footer')
</body>

</html>

