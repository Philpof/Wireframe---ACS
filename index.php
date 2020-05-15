<?php include "header.php";?>

<!-- Section 1 -->
<div id="section1" class="d-flex vh-100 container-fluid">

  <div class="icon-bar col-3 d-flex flex-column">
    <a href="#section1" class="effetBar">1</a>
    <a href="#section2" class="effetBar">2</a>
    <a href="#section3" class="effetBar">3</a>
    <a href="#section4" class="effetBar">4</a>
  </div>

  <div id="musicMore" class="row d-flex flex-column justify-content-center text-uppercase">

    <div id="safe">a safe kind</div>
    <div id="music" class="font-weight-bold">music is</div>
    <div id="high" class="font-weight-bold pt-3">of high</div>

    <div class="d-flex">
      <a href="noway.php" type="button" class="btn btn-outline-light font-weight-bold text-center"><span id="viewMore">view more</span></a>
    </div>

  </div>

</div>

<!-- Section 2 -->
<div id="section2" class="vh-100 container-fluid">



</div>

<!-- Section 3 -->
<div id="section3" class="d-flex vh-100 container-fluid">

  <div id="player" class="container col-3 d-flex">
    <img src="img/faun_template_ElipseL.png" alt="Elipse Large">
    <img src="img/faun_template_ElipseM.png" alt="Elipse Medium" id="elipseM">
    <img src="img/faun_template_ElipseS.png" alt="Elips Small" id="elipseS">
    <img src="img/faun_template_Player.png" alt="Play" id="elipsePlay">
  </div>

  <div class="container d-flex flex-column justify-content-center font-weight-bold">
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

<div class="progress" style="height: 4px" id="progress">
  <div class="progress-bar" id="progressBar" role="progressbar" style="width:30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<!-- Section 4 -->
<div id="section4" class="vh-100 flex-column container-fluid d-flex">

  <div class="d-flex">
    <div>
      <a href="photo1.php"><img src="img\faun_template_1.png" alt="Photo n°1" class="img-fluid"></a>
    </div>
    <div>
      <a href="photo2.php"><img src="img\faun_template_2.png" alt="Photo n°2" class="img-fluid"></a>
    </div>
    <div>
      <a href="photo3.php"><img src="img\faun_template_3.png" alt="Photo n°3" class="img-fluid"></a>
    </div>
    <div>
      <a href="photo4.php"><img src="img\faun_template_4.png" alt="Photo n°4" class="img-fluid"></a>
    </div>
  </div>

  <div class="container d-flex flex-column justify-content-center">
    <p id="wantTo" class="text-uppercase text-center font-weight-bold">want to hire us ?</p>
    <p id="loremm" class="text-center font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="d-flex justify-content-center">
      <a href="noway.php" type="button" class="btn btn-outline-light"><span id="contactUs">contact with us</span></a>
    </div>
  </div>

</div>


<!-- Footer -->
<div id="footer" class="d-flex container-fluid flex-column text-uppercase text-center">
  <a href="#section1" type="button" class="btn font-weight-bold" id="faun">faun</a>
  <div id="allRights">all rights reserved by faun template for rock band</div>
</div>


<?php include "footer.php";
