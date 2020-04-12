<?php 
$header = "Dersler DEMO";
include "inc/header.php";?>

  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <a href="/"><img class="masthead-brand" src="assets/img/logo.png" width="200" height="50" alt=""></a>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="/">Ana Sayfa</a>
        <a class="nav-link" href="features.php">Özellikler</a>
        <a class="nav-link" href="contact.php">İletişim</a>
      </nav>
    </div>
  </header>

    <h3>Educatory'in DEMO Konuları</h1>
    <p>Educatory 2 günlük bebek! Bunları yaptığına şaşırın :)</p>
    <div class="list-group list-group-flush">
        <a href="addition.php" class="list-group-item list-group-item-dark list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Tek Basamaklı Toplama İşlemleri</h5>
          </div>
          <p class="mb-1">Örnekler -> 9+4=??, 6+2=?</p>
        </a>
        <a href="subtraction.php" class="list-group-item list-group-item-dark list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Tek Basamaklı Çıkarma İşlemleri</h5>
            </div>
            <p class="mb-1">Örnekler -> 9-4=?, 6*2=?</p>
          </a>
          <a href="multiplication.php" class="list-group-item list-group-item-dark list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1 cen">Tek Basamaklı Çarpma İşlemleri</h5>
            </div>
            <p class="mb-1">Örnekler -> 9*4=??, 6*2=??</p>
          </a>
      </div>
      
<?php include "inc/footer.php";?>