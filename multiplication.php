<?php 
$header = "Çarpma İşlemleri";
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

  <h5>İlerleme</h5>
  <div class="progress">
    <div id="dynamic" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
      <span id="current-progress"></span>
    </div>
  </div>
  <br><br><br>
  <main role="main" class="inner cover">
    <h1 id="question" class="cover-heading"></h1>
    <input type="text" class="form-control" id="anwser" placeholder="Cevap">
    <button type="button" onclick="solve()" style="margin-top : 10px;" class="btn btn-lg btn-secondary">Gonder</button>
  </main>
  

  <script>
    function randomNumber(min, max) {  
      return Math.floor(Math.random() * (max - min) + min); 
    }  

    var number1 = randomNumber(1,15);
    var number2 = randomNumber(1,15);

    function generateQuestion(){
      var question = document.getElementById("question");
      number1 = randomNumber(1,15)
      number2 = randomNumber(1,15)
      console.log(number1,number2);
      document.getElementById("question").innerHTML = number1+"*"+number2;
    }

    generateQuestion();
    function solve(){
      var anwser = document.getElementById("anwser").value;
      console.log(anwser);
      if( number1 * number2 == anwser){
        console.log("DOGRUUUU");
        if(current_progress<=40){
          currentProgress(9);
        }
        else if(current_progress<=70){
          currentProgress(6);
        }
        else if(current_progress<=90){
          currentProgress(3);
        }
        else{
          currentProgress(1);
        }
        document.getElementById('anwser').value = '';
        generateQuestion();
      }
      else{
        console.log("YANLISS");
        if(current_progress<=40){
          currentProgress(-3);
        }
        else if(current_progress<=70){
          currentProgress(-9);
        }
        else if(current_progress<=90){
          currentProgress(-12);
        }
        else{
          currentProgress(-20);
        }
        document.getElementById('anwser').value = '';
        generateQuestion();
      }
    }
    var current_progress = 0;
    function currentProgress(change){
       current_progress += change;
      $("#dynamic").css("width", current_progress + "%").attr("aria-valuenow", current_progress).text(current_progress + "% Tamamlandi");
      if (current_progress >= 100){
        document.location.href="/";
      }
    }
  </script>
<?php include "inc/footer.php";?>