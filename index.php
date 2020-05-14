<?php include "header.php";?>

<!-- Le header est-il vraiment utile ici ?
  <div id="header" class="vh-100">
    <div class="icon-bar">
      <a href="#section1">1</a>
      <a href="#section2">2</a>
      <a href="#section3">3</a>
      <a href="#section4">4</a>
    </div>
  </div>
-->

<!-- Section 1 -->
<div id="section1" class="d-flex vh-100 container-fluid">

  <div class="icon-bar col-3 d-flex flex-column">
    <a href="#section1" class="effetBar">1</a>
    <a href="#section2" class="effetBar">2</a>
    <a href="#section3" class="effetBar">3</a>
    <a href="#section4" class="effetBar">4</a>
  </div>

  <div id="musicMore" class="container-fluid d-flex flex-column justify-content-center">

    <p id="safe">a safe kind</p>
    <p id="music">music is</p>
    <p id="high">of high</p>

    <div class="d-flex">
      <a href="noway.php" type="button" class="btn btn-outline-light"><span id="viewMore">view more</span></a>
    </div>

  </div>

</div>

<!-- Section 2 -->
<div id="section2" class="d-flex vh-100 container-fluid">


</div>

<!-- Section 3 -->
<div id="section3" class="d-flex vh-100 container-fluid">

  <div id="play" class="container col-3 d-flex justify-content-center">
    <img src="img/faun_template_ElipseL.png" alt="Elipse Large" class="elipseL">
    <img src="img/faun_template_ElipseM.png" alt="Elipse Medium" class="elipseM">
    <img src="img/faun_template_ElipseS.png" alt="Elips Small" class="elipseS">
    <img src="img/faun_template_Player.png" alt="Play" class="elipsePlay">
  </div>

  <div id="newest" class="container d-flex flex-column justify-content-center font-weight-bold">
    <p id="video" class="text-uppercase ">our newest video</p>
    <p id="lorem" class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.<br>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
  </div>

  <div class="icon-bar col-3 d-flex flex-column">
    <a href="#section1" class="effetBar">1</a>
    <a href="#section2" class="effetBar">2</a>
    <a href="#section3" class="effetBar">3</a>
    <a href="#section4" class="effetBar">4</a>
  </div>



</div>

<!-- Section 4 -->
<div id="section4" class="flex-column vh-100 container-fluid">

  <div id="photos" class="d-flex">
    <div>
      <img src="img\faun_template_1.png" alt="Photo n°1" class="img-fluid">
    </div>
    <div>
      <img src="img\faun_template_2.png" alt="Photo n°2" class="img-fluid">
    </div>
    <div>
      <img src="img\faun_template_3.png" alt="Photo n°3" class="img-fluid">
    </div>
    <div>
      <img src="img\faun_template_4.png" alt="Photo n°4" class="img-fluid">
    </div>
  </div>

  <div class="container d-flex flex-column justify-content-center">


  <p class="wantTo">want to hire us ?</p>

  <p class="loremm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    <div class="d-flex justify-content-center">
    <a href="noway.php" type="button" class="btn btn-outline-light"><span class="contactUs">contact with us</span>
    </a>
    </div>
  </div>
</div>


<!-- Footer -->
<div id="footer">
  <a href="#section1" type="button" class="btn"><p class="faun">faun</p></a>
  <p class="allRights">all rights reserved by faun template for rock band</p>
</div>


<?php include "footer.php";
