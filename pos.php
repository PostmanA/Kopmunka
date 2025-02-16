<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SZAMITOGEPES RENDSZEREK</title>
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
        <a href="eng_pos.php" class="w3-bar-item w3-button">English</a>
      </div>
    </div>
  <a href="logout.php" class="w3-bar-item w3-button">Kijelentkezes</a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

    <div>
    <h1 class="mtitle">SZAMITOGEPES RENDSZEREK</h1>
    </div>

        <div class="subject-container">
            <div class="card">
            <h2>Ohm Törvénye</h2>
            <p>Ohm német fizikus (1787-1854) az ellenállást a feszültségből és a hatására kialakuló áramerősségből határozta meg. Azt tapasztalta, hogy egy áramkörben a két mennyiség hányadosa jellemző az adott fogyasztóra és állandó érték:</p>
            <a href="elektrotechnika_anyag1.php"> Olvasson tovább...</a>
        </div>
        <div class="card">
            <h2>Kirchhoff törvények</h2>
            <p>Egy tetszőlegesen bonyolult hálózat bármely elemére külön-külön alkalmazható az
egyszerű áramkörnél megismert Ohm törvény, hiszen ez az összetartozó U, I és R
mennyiségek közötti kapcsolatot mutatja meg. Több elemből álló rendszerben a
Kirchhoff törvények nyújtanak segítséget.</p>
        <a href="elektrotechnika_anyag2.php">Olvasson tovább...</a>
        </div>
        <div class="card">
            <h2>Nevezetes passzív villamos hálózatok</h2>
            <p>A feszültségosztó
            Az Ohm és Kirchhoff törvényeket nevezetes kapcsolásokra alkalmazva további
            fontos törvényszerűségeket állapíthatunk meg.</p>
            <a href="elektrotechnika_anyag3.php">Olvasson tovább...</a>
        </div>
        </div>
</body>
</html>
