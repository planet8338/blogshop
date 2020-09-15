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
<h1><i class="fas fa-id-card"></i>Kontakt</h1>
</div>

<?php
    $imie = "Ania";
    $sklep = "Media Markt";
    $produkt = "Komputer";
    $cena = 1850;
    $gwarancja = false;
    $decyzja = array("przyznana", "odmowa");


    echo $imie ." poszła do ". $sklep ." po ". $produkt .", który kosztował " . $cena ." zł.<br>";

    if($gwarancja == true){
        echo $produkt. " był popsuty, więc go oddała na gwarancję i sklep (". $sklep . ") oddał jej ". $cena. " zł.<br>";
        echo "Gwarancja: ". $decyzja[0];
    }else{
        echo $produkt . " był popsuty, więc musiała wrócić do ". $sklep . " aby kupić kolejny ". $produkt ." za kolejne ". $cena ." zł.<br>";

        echo "W sumie zapłaciła ". $cena * 2 ." zł.<br>";
        echo "Gwarancja: ". $decyzja[1];
    }
    ?>
<br>
<br>
<hr>
<br>
<br>


<form action="index.php" method="post">
    Number 1: <input type="number" name="num1"> <br>
    Operator: <input type="text" name="op"> <br>
    Number 2: <input type="number" name="num2"> <br>
    <input type="submit"> <br>
</form>

<?php
$op = "";
    if(isset($_POST["num1"])){
    $num1 = $_POST["num1"];
    }
    if(isset($_POST["op"])){
    $op = $_POST["op"];
    }
    if(isset($_POST["num2"])){
    $num2 = $_POST["num2"];
    }


    if($op == "+"){

        echo $num1 + $num2;

    }elseif($op == "-"){

        echo $num1 - $num2;

    }elseif($op == "/"){

        echo $num1 / $num2;

    }elseif($op == "*"){

        echo $num1 * $num2;

    }else{
        echo "Invalid operator.";

    }
?>




</body>
</html>

