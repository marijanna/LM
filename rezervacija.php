<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/favicon-16x16.png" type="image/gif" sizes="16x16">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Rezervacije</title>
</head>
<body id="page1" class="pozadina">

  <?php	
  $ime="";
  $email="";
  $datum="";
  $prostor="";
  $napomena="";

  $errime="";
  $erremail="";
  $errdatum="";
  $errprostor="";
  $errnapomena="";




  if (isset($_POST['submit'])) {
   if(!empty($_POST['ime'])) {
    $ime=$_POST['ime'];


  } else {


    $errime= "Molimo Vas unesite Vaše ime i prezime";

  }



  if(!empty($_POST['email'])) {
    $email=$_POST['email'];


  } else {

    $erremail= "Molimo Vas unesite Vaš E-mail";
  }


  if(!empty($_POST['datum'])) {
    $datum=$_POST['datum'];


  } else {

    $errdatum= "Molimo Vas unesite datum rezervacije";
  }

  if(!empty($_POST['prostor'])) {
    $prostor=$_POST['prostor'];
    
  } else {

    $errprostor= "Molimo Vas izaberite deo restorana";
  }

  if(!empty($_POST['napomena'])) {
    $napomena=$_POST['napomena'];
    
  } else {

    $errnapomena= "Molimo Vas unesite napomenu";
  }

  if ($errime== "" && $erremail== "" && $errdatum== "" && $errprostor== ""  && $errnapomena== "" ) {
    echo "Poruka je uspešno poslata!";
  } else {
    echo "Poruka nije poslata, molimo Vas proverite Vašu formu!";
  }
}
?>
<center>

 <div class="topnav" id="myTopnav">
  <div class="margina1">
    <img class="logo" src="img/logoML.png">
    <a href="index.html">••| početna |</a>
    <a href="nas_tim.html">| naš tim |</a>
    <a href="jelovnik.html">| jelovnik |</a>
    <a href="galerija.html">| galerija |</a>
    <a href="rezervacija.php">| rezervacije |</a>
    <a href="kontakt.html">| kontakt |••</a> 
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div></div> 
</center>
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
  x.className += " responsive";
} else {
  x.className = "topnav";
}
}
</script>



<div class="backgroundRez">

  <h2 class="naslovi">Online rezervacija</h2>

  <div class="containerRezervacija">
    <form method="post" action="mail.php">
      <div class="row">
        <div class="col-25">
          <label for="ime">Ime i prezime:</label>
        </div>
        <div class="col-75">
          <input type="text" id="ime" name="ime" placeholder="Vaše ime i prezime..." value="<?php if(isset($_POST['ime'])) {
            echo $_POST['ime'];
          } ?>" >
          <?php
          if ($ime=="") {
            echo $errime;
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">E-mail:</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" placeholder="Vaše E-mail..." value="<?php if(isset($_POST['email'])) {
            echo $_POST['email'];
          } ?>" >
          <?php
          if ($email=="") {
            echo $erremail;
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="datum">Datum:</label>
        </div>
        <div class="col-75">
          <input type="text" id="datum" name="datum" placeholder="Unesite željeni datum..." value="<?php if(isset($_POST['datum'])) {
            echo $_POST['datum'];
          } ?>" >
          <?php
          if ($datum=="") {
            echo $errdatum;
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="prostor">Deo restorana:</label>
        </div>
        <div class="col-75">
          <select id="prostor" name="prostor" value="<?php if(isset($_POST['prostor'])) {
            echo $_POST['prostor'];
          } ?>" >
          <option value="dozvoljeno_pusenje">Dozvoljeno pušenje</option>
          <option value="zabranjeno_pusenje">Zabranjeno pušenje</option>
          <option value="basta">Bašta</option>
          <?php
          if ($prostor=="") {
            echo $errprostor;
          }
          ?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="napomena">Napomena:</label>
      </div>
      <div class="col-75">
        <textarea id="napomena" name="napomena" placeholder="Ostavite svoju poruku..." style="height:200px" value="<?php if(isset($_POST['napomena'])) {
          echo $_POST['napomena'];
        } ?>" >
        <?php
        if ($napomena=="") {
          echo $errnapomena;
        }
        ?>
      </textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name="submit" value="Pošalji">
  </div>
</form>
</div>
</div>
<center>
  <div class="footerJelovnik">
  	<h6 class="copyright">© Restoran LM, sva prava zadržana </h6>
  	<div class="social">
  		<a href="https://www.instagram.com/"><img src="img/instagram1.png"></a>
  		<a href="https://www.facebook.com/"><img src="img/facebook.png"></a>
  		<a href="https://www.twitter.com/"><img src="img/twitter1.png"></a>
  	</div>
  </div>
</center>


</body>
</html>