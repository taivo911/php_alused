<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://taivonurk.ikt.khk.ee/js/java/bootstrap.min.css">
    <meta name="Veebiarendus" content="Õpime veebiarenduse aluseid 2020" />
    <meta name="Veebispetsialist" content="HTML,CSS,HTML5,CSS3, BOOTSTRAP4"/>
    <meta name="Taivo N." content="Taivo Nurk" />
    <title>Taivo Nurk</title>
    <link rel="shortcut icon" href="/pictures/tn.ico"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
        <img src="https://taivonurk.ikt.khk.ee/pictures/logot1.png" alt="Logo" style="width:40px;">
    </a>
    <h3 class="text-white pr-4">NURK</h3>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Esileht <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Jagamine</h3>
            <form action="6_lisa.php" method="get">
                Väärtus A = <input type="number" name="j1"><br>
                Väärtus B = <input type="number" name="j2"><br>
                <input type="submit" value="Saada">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Vanusevõrdlus</h3>
            <form action="6_lisa.php" method="get">
                Esimene = <input type="number" name="j3"><br>
                Teine = <input type="number" name="j4"><br>
                <input type="submit" value="Saada">
            </form>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Ristkülik või ruut </h3>
            <form action="6_lisa.php" method="get">
                Külg A = <input type="number" name="j5"><br>
                Külg B = <input type="number" name="j6"><br>
                <input type="submit" value="Saada">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Ristkülik või ruut joonis</h3>
            <form action="6_lisa.php" method="get">
                Esimene = <input type="number" name="j7"><br>
                Teine = <input type="number" name="j8"><br>
                <input type="submit" value="Saada">
            </form>
        </div>
    </div>
    </div>
</div>

<script src="https://taivonurk.ikt.khk.ee/js/jquery-3.3.1.min.js"></script>
<script src="https://taivonurk.ikt.khk.ee/js/popper.min.js"></script>
<script src="https://taivonurk.ikt.khk.ee/js/bootstrap.min.js"></script>
</body>
</html>
