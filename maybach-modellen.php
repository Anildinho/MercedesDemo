<?php

?>

<html>
<head>
    <title> Overzicht modellen | Mercedes Nederland </title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/filter.css">
</head>
<header>

</header>
<body>

<div class="modelOverveiw">
    <a href="index.php"><img class="modelTopImg" src="img/MB_logo.png"></a>
    <h2 class="modelTopText">Onze modellen</h2>
</div>

<!---------------------------------------------------------------------------------------------------------->
<!-- Model/Categorieen-->

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mercedes-Maybach
    </button>
    <div class="dropdown-menu" style="padding: 20px;" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="alle-modellen.php" style="font-weight: bolder">Alle modellen</a>
        <hr>
        <a class="dropdown-item" href="eq-modellen.php" style="font-weight: bolder">EQ-modellen (EV/PHEV)</a>
        <hr>
        <a class="dropdown-item" href="amg-modellen.php" style="font-weight: bolder">Mercedes-AMG</a>
        <hr>
        <a class="dropdown-item active" style="font-weight: bolder">Mercedes-Maybach</a>
    </div>
</div>

<!-- Model/Categorieen-->
<!---------------------------------------------------------------------------------------------------------->
<!--Categorieen-->

<div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('limousine')"> Limousine</button>
    <button class="btn" onclick="filterSelection('suv')"> SUV</button>
</div>

<!--Categorieen-->
<!---------------------------------------------------------------------------------------------------------->

<hr>

<div class="container">
    <div class="filterDiv limousine">
        <br>
        <h4>Limousine</h4>
        <hr>
        <div class="row">
            <div class="col-4 rowBox" style="display: inline-block;">
                <a href="#">
                    <h2 class="rowTitleBox">Mercedes-Maybach S-Klasse Limousine</h2>
                </a>
                <p class="p2 text-muted">vanaf € 186.172,00</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/Maybach-S-Klasse/s-klasse-limousine-maybach.png">
                </a>
            </div>
            <div class="col-4" style="display: inline-block;">
                <img class="rowCarImg" src="img/wit.png">
            </div>
            <div class="col-4" style="display: inline-block;">
                <img class="rowCarImg" src="img/wit.png">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="filterDiv suv">
        <br>
        <h4>SUV</h4>
        <hr>
        <div class="row">
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="emptySpace"></p>
                <a href="#">
                    <h2 class="rowTitleBox">Mercedes-Maybach GLS SUV</h2>
                </a>
                <p class="p2 text-muted">vanaf € 227.893,00</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/Maybach-GLS-Klasse/maybach-gls-suv.png">
                </a>
            </div>
            <div class="col-4" style="display: inline-block;">
                <img class="rowCarImg" src="img/wit.png">
            </div>
            <div class="col-4" style="display: inline-block;">
                <img class="rowCarImg" src="img/wit.png">
            </div>
        </div>
    </div>
</div>



</body>
<footer>

</footer>
<script>
    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

</html>
