<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Philippe PERECHODOV">
  <title>Intégration Template Faun</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<body>

<!-- Barre de navigation -->
<nav class="navbar navbar-light bg-auto justify-content-around fixed-top">

  <div class="dropdown">
    <button class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="img\faun_template_3TRAITS.png" alt="Menu">
    </button>
    <div class="dropdown-menu"  >
      <a class="dropdown-item" href="index.php#section1">Us</a>
      <a class="dropdown-item" href="index.php#section2">Concerts</a>
      <a class="dropdown-item" href="index.php#section3">Videos</a>
      <a class="dropdown-item" href="index.php#section4">Contact</a>
    </div>
  </div>

  <a href="index.php#section4" type="button" class="btn text-center font-weight-bold text-uppercase" id="faunNav">faun</a>

  <div class="dropdown">
    <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="img\faun_template_LOUPE.png" alt="Recherche">
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Seek and Destroy !" aria-label="Search">
        <button class="btn btn-outline-light font-weight-bold my-2 my-sm-0" type="submit">Go !</button>
      </form>
    </div>
  </div>

</nav>
