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

    <form>
        <div class="form-group">
            <label for="exampleInputName">Imię</label>
            <input type="text" class="form-control" placeholder="Imię">
        </div>
        <div class="form-group">
            <label for="exampleInputSurname">Nazwisko</label>
            <input type="text" class="form-control" placeholder="Nazwisko">
        </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wprowadź Email">
            </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Hasło</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword2">Powtórz hasło</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Powtórz Hasło">
        </div>

        <button type="submit" class="btn btn-warning">Utwórz konto</button>

    </form>

</div>

@include('components/footer')
</body>

</html>

