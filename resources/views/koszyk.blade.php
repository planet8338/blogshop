
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


<div class="container">

    <div class="row">

        <div class="col-lg-12">

            <h1 class="my-4">Twój koszyk</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Ilość</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Samsung Note</td>
                    <td>1 szt</td>
                    <td>2800zł</td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="produktUsun">Usuń</button>
                        <button type="button" class="btn btn-warning">Szczegóły</button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Samsung Note</td>
                    <td>1 szt</td>
                    <td>2800zł</td>
                    <td>
                        <button type="button" class="btn btn-danger">Usuń</button>
                        <button type="button" class="btn btn-warning">Szczegóły</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Samsung Note</td>
                    <td>1 szt</td>
                    <td>2800zł</td>
                    <td>
                        <button type="button" class="btn btn-danger">Usuń</button>
                        <button type="button" class="btn btn-warning">Szczegóły</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><h3>Do zapłaty:</h3> </th>
                    <td> </td>
                    <td> </td>
                    <td> <h2>8400zł</h2> </td>
                    <td>
                        <button type="button" class="btn btn-success btn-lg btn-block">Zapłać</button>
                    </td>
                </tr>

                </tbody>
            </table>
            <hr>

        </div>
        <p><b>Kod Rabatowy:</b> <input type="text" name="Rabat"></p>
    </div>
</div>

@include('components/wysokusun')


</body>
</html>
