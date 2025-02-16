<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEKTRONIKA</title>
    <link rel="stylesheet" href="kartya.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/bukris.david" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/bukris_dejvid/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="index_hu.php" class="w3-bar-item w3-button">Főoldal</a>
  <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="language">Nyelv<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="eng_elektronika.php" class="w3-bar-item w3-button">English</a>
      </div>
    </div>
  <a href="logout.php" class="w3-bar-item w3-button">Kijelentkezes</a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

    <div>
    <h1 class="mtitle">ELEKTRONIKA</h1>
    </div>

        <div class="subject-container">
            <div class="card">
            <h2>Kódolás</h2>
            <p>Az információ leírását valamilyen egyezményes jelrendszerben kódolásnak nevezzük. Kódolás pl. a tízes számrendszerbeli szám átírása bináris számrendszerbe.</p>
            <a href="elektronika_anyag1.php"> Olvasson tovább...</a>
        </div>
        <div class="card">
            <h2>Kapuáramkörök</h2>
            <p>A kapuáramkörök a logikai alapfüggvényeket megvalósító digitális integrált áramkörök. A megvalósított függvény és a hozzátartozó kapuk elnevezése:</p>
        <a href="elektronika_anyag2.php">Olvasson tovább...</a>
        </div>
        <div class="card">
            <h2>Funkcionális áramkörök</h2>
            <p>A funkcionális áramkörök olyan digitális integrált áramkörök, amelyek egy adott feladat ellátására készültek. Közös jellemzőjük, hogy kapukból és tárolókból épülnek fel és az áramköri toknak csak a funkció ellátásához szükséges kivezetései vannak.</p>
            <a href="elektronika_anyag3.php">Olvasson tovább...</a>
        </div>
        </div>
</body>
</html>
