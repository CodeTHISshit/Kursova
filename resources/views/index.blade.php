<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="~/css/app.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">
    <link rel="script" href="Script.js">

</head>

<body>
<nav class="mb-1 navbar navbar-expand-lg  fixed-top text-white">
    <a id="Logo"  class=" text-white navbar-brand" href="#">PoizdaTYT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Поїзда
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Автобуси</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="ContactUs.html">Літаки</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-3" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<section class="not-adaptive">
    <div id="SearchRow" class="row justify-content-center mt-5" >
        <form id="SearchField" class="text-center  p-5 mt-5" action="#!">

            <p class="h4 mb-4 text-white">Замовити квиток</p>
            <div class="form-row mb-4">
                <div class="col  mr-5">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Відправна точка">
                </div>
                <div class="col mr-3 ml-5">
                    <!-- Last name -->
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Кінцева точка">
                </div>
                <div class="col">
                    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Дата">
                </div>
            </div>

            <div class="row justify-content-end" >
                <a id="btn" href="TrainChoose.blade.php">Замовити</a>
            </div>

        </form>
    </div>
</section>


</body>
