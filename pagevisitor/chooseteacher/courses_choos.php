<?php
session_start();
if (isset($_SESSION['arabic'])) {
    $langu = 'arabic';
}
if (isset($_SESSION['english'])) {
    $langu = 'english';
}
$path = '..\..\languages/' . $langu . '.php';
include $path;
?>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/curriculum.css">
    <title>curriculum</title>
  </head>
   <body  > 
    <div class="close">
      <a href="teachers.php"><i class="fas fa-window-close"></i></a>
    </div>
    <div   id="btn_return">
  <i class="fas fa-arrow-alt-circle-left"></i>
  </div>
    <div id="logo">
     <img   src="../../img/logo_fixed.png">
    </div>
  <section id="title">
    <h1 class="heading">
      <span>C</span>
      <span>U</span>
      <span>R</span>
      <span>R</span>
      <span>I</span>
      <span>C</span>
      <span>U</span>
      <span>L</span>
      <span>U</span>
      <span>M</span>
    </h1>   
    
</section>

<section class="curriculum" id="curriculum">

  <label for="exampleFormControlFile1" >DOWNLOAD </label>
  <div class="underline "> <span></span></div>

<div class="image-container">

<div class="img Tenth">
<img src="../../img/Mathematics.jpg">
<h3 >Mathematics</h3>
<h2 href="#">Tenth</h2>
  <h2 href="#">Eleven</h2>
  <h2 href="#">Baccalaureate</h2>
</div>

<div class="img Tenth">
  <img src="../../img/Physics.jpg">
  <h3 >Physics</h3>
  <h2 href="#">Tenth</h2>
  <h2 href="#">Eleven</h2>
  <h2 href="#">Baccalaureate</h2>
  </div>
  
<div class="img Tenth">
  <img src="../../img/Chemistry.jpg">
  <h3 >Chemistry</h3>
  <h2 href="#">Tenth</h2>
  <h2 href="#">Eleven</h2>
  <h2 href="#">Baccalaureate</h2>
  </div>
  
<div class="img Tenth">
  <img src="../../img/Arabic.jpg">
  <h3 >Arabic</h3>
  <h2 href="#">Tenth</h2>
  <h2 href="#">Eleven</h2>
  <h2 href="#">Baccalaureate</h2>
  </div>

  
<div class="img Tenth">
  <img src="../../img/English.jpg">
  <h3 >English</h3>
  <h2 href="#">Tenth</h2>
  <h2 href="#">Eleven</h2>
  <h2 href="#">Baccalaureate</h2>
  </div>

  
<div class="img Tenth">
  <img src="../../img/French.jpg">
  <h3 >French</h3>
  <h2 href="#">Tenth</h2>
  <h2 href="#">Eleven</h2>
  <h2 href="#">Baccalaureate</h2>
  </div>

    <div class="img Tenth">
      <img src="../../img/National Education.jpg">
      <h3 >National Education</h3>
      <h2 href="#">Tenth</h2>
      <h2 href="#">Eleven</h2>
      <h2 href="#">Baccalaureate</h2>
      </div>
      
  <div class="img Tenth">
    <img src="../../img/Religious Education.png">
    <h3 >Religious Education</h3>
    <h2 href="#">Tenth</h2>
    <h2 href="#">Eleven</h2>
    <h2 href="#">Baccalaureate</h2>
    </div>

    <div class="img Tenth">
      <img src="../../img/Physical Education.jpg">
      <h3 >Physical Education</h3>
      <h2 href="#">Tenth</h2>
  <h2 href="#">Eleven</h2>
  <h2 href="#">Baccalaureate</h2>
      </div>

      <div class="img Tenth">
        <img src="../../img/Science.jpg">
        <h3 >Science</h3>
        <h2 href="#">Tenth</h2>
        <h2 href="#">Eleven</h2>
        <h2 href="#">Baccalaureate</h2>
        </div>
  
      <div class="img Tenth">
        <img src="../../img/Geography.jpg">
        <h3 >Geography</h3>
        <h2 href="#">Tenth</h2>
      <h2 href="#">Eleven</h2>
        </div>
    
        <div class="img Tenth">
          <img src="../../img/History.jpg">
          <h3 >History</h3>
          <h2 href="#">Tenth</h2>
          <h2 href="#">Eleven</h2>
          </div>

          <div class="img Tenth">
            <img src="../../img/Informatics.jpg">
            <h3 >Informatics</h3>
            <h2 href="#">Tenth</h2>
            <h2 href="#">Eleven</h2>
            </div>
      
          <div class="img Tenth">
            <img src="../../img/Art.jpg">
            <h3 >Art</h3>
            <h2 href="#">Tenth</h2>
           <h2 href="#">Eleven</h2>
            </div>

      <div class="img Tenth">
        <img src="../../img/Philosophy.jpg">
        <h3 >Philosophy</h3>
        <h2 href="#">Tenth</h2>
        </div>

     
</div>
</section>

        <script src="../../js/jquery-3.6.0.min.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>
