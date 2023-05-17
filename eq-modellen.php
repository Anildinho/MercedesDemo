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
        EQ-modellen (EV/PHEV)
    </button>
    <div class="dropdown-menu" style="padding: 20px;" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="alle-modellen.php" style="font-weight: bolder">Alle modellen</a>
        <hr>
        <a class="dropdown-item active" style="font-weight: bolder">EQ-modellen (EV/PHEV)</a>
        <hr>
        <a class="dropdown-item" href="amg-modellen.php" style="font-weight: bolder">Mercedes-AMG</a>
        <hr>
        <a class="dropdown-item" href="maybach-modellen.php" style="font-weight: bolder">Mercedes-Maybach</a>
    </div>
</div>

<!-- Model/Categorieen-->
<!---------------------------------------------------------------------------------------------------------->
<!--Categorieen-->

<div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('hatchback')"> Hatchback</button>
    <button class="btn" onclick="filterSelection('limousine')"> Limousine</button>
    <button class="btn" onclick="filterSelection('estate')"> Estate</button>
    <button class="btn" onclick="filterSelection('coupe')"> Coupe</button>
    <button class="btn" onclick="filterSelection('suv')"> SUV</button>
    <button class="btn" onclick="filterSelection('mpv')"> MPV</button>
</div>

<!--Categorieen-->
<!---------------------------------------------------------------------------------------------------------->

<hr>

<div class="container">
    <div class="filterDiv hatchback">
        <br>
        <h4>Hatchback</h4>
        <hr>
        <div class="row">
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">A-Klasse Hatchback</h2>
                </a>
                <p class="p2 text-muted">vanaf € 41.195,58</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/A-Klasse/a-klasse-hatchback.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">B-Klasse</h2>
                </a>
                <p class="p2 text-muted">vanaf € 43.195,11</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/B-Klasse/b-klasse-hatchback.png">
                </a>
            </div>
            <div class="col-4" style="display: inline-block;">
                <img class="rowCarImg" src="img/wit.png">
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="filterDiv limousine">
        <br>
        <h4>Limousine</h4>
        <hr>
        <div class="row">
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">A-Klasse Limousine</h2>
                </a>
                <p class="p2 text-muted">vanaf € 41.695,51</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/A-Klasse/a-klasse-limousine.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">C-Klasse Limousine</h2>
                </a>
                <p class="p2 text-muted">vanaf € 51.295,24</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/C-Klasse/c-klasse-limousine.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">E-Klasse Limousine</h2>
                </a>
                <p class="p2 text-muted">vanaf € 66.394,63</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/E-Klasse/e-klasse-limousine.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <p class="spaceBetween"></p>
                <a href="#">
                    <h2 class="rowTitleBox">S-Klasse Limousine Lang</h2>
                </a>
                <p class="p2 text-muted">vanaf € 117.325,00</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/S-Klasse/s-klasse-limousine-lang.png">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="filterDiv estate">
        <br>
        <h4>Estate</h4>
        <hr>
        <div class="row">
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">CLA Shooting Brake</h2>
                </a>
                <p class="p2 text-muted">vanaf € 46.094.70</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/CLA-Klasse/cla-shooting-brake.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">C-Klasse Estate</h2>
                </a>
                <p class="p2 text-muted">vanaf € 53.295,11</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/C-Klasse/c-klasse-estate.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">E-Klasse Estate</h2>
                </a>
                <p class="p2 text-muted">vanaf € 69.294,68</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/E-Klasse/e-klasse-estate.png">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="filterDiv coupe">
        <br>
        <h4>Coupé</h4>
        <hr>
        <div class="row">
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">CLA Coupé</h2>
                </a>
                <p class="p2 text-muted">vanaf € 44.595,10</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/CLA-Klasse/cla-coupe.png">
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
                <p class="btnRoundingElectric">Elektrisch</p>
                <a href="#">
                    <h2 class="rowTitleBox">EQC</h2>
                </a>
                <p class="p2 text-muted">vanaf € 73.594,73</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/EQC-Klasse/eqc-suv.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">GLA SUV</h2>
                </a>
                <p class="p2 text-muted">vanaf € 50.594,70</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/GLA-Klasse/gla-suv.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">GLC Coupé</h2>
                </a>
                <p class="p2 text-muted">vanaf € 67.895,20</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/GLC-Klasse/glc-coupe-suv.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">GLC SUV</h2>
                </a>
                <p class="p2 text-muted">vanaf € 63.395,47</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/GLC-Klasse/glc-suv.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">GLE Coupé</h2>
                </a>
                <p class="p2 text-muted">vanaf € 96.187,00</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/GLE-Klasse/gle-coupe-suv.png">
                </a>
            </div>
            <div class="col-4 rowBox" style="display: inline-block;">
                <p class="btnRounding">Ook als Plug-in Hybride</p>
                <a href="#">
                    <h2 class="rowTitleBox">GLE SUV</h2>
                </a>
                <p class="p2 text-muted">vanaf € 82.490,00</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/GLE-Klasse/gle-suv.png">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="filterDiv mpv">
        <br>
        <h4>MPV</h4>
        <hr>
        <div class="row">
            <div class="col-4 rowBox" style="display: inline-block;">
                <div id="div1" class="btnRoundingNew2"> Nieuw </div>
                <div id="div2" class="btnRoundingElectric2"> Elektrisch </div>
                <a href="#">
                    <h2 class="rowTitleBox">EQV</h2>
                </a>
                <p class="p2 text-muted">Binnenkort vanaf september</p>
                <a href="#">
                    <img class="rowCarImg" src="img/Mercedes/EQV-Klasse/eqv-klasse.png">
                </a>
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
