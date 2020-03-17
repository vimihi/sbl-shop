<?php require_once('header.php') ?>
<!--DETAILS HEADER-->
<section class="sbl-spotlight sbl-mb-50">
  <!-- DETAILS TITLE -->
  <div class="sbl-spotlight-details-header">
    <div class="sbl-details-box">
      <a href="/index.php" class="sbl-btn-back">BACK</a>
      <div class="sbl-details-category">WOMAN</div>
    </div>
    <div class="sbl-details-box">
      <p class="sbl-details-title">PINK TAROT</p>
    </div>
    <div class="sbl-details-box">
      <p class="sbl-details-code">#SBL3345</p>
    </div>
    <!-- SLIDER -->
    <div class="slider slider-for">
        <?php
        for ($x = 1; $x <= 10; $x++) {
            if ($x % 2 == 0) {
                echo "<div class='sbl-details-images'>
                    <img src='images/man.png'/>
                  </div>";
            } else {
                echo "<div class='sbl-details-images'>
                    <img src='images/woman.png'/>
                  </div>";
            }
        }
        ?>
    </div>
    <div class="slider slider-nav">
        <?php
        for ($x = 1; $x <= 10; $x++) {
            if ($x % 2 == 0) {
                echo "<div class='sbl-details-thumbnail'>
                    <img src='images/man.png'/>
                  </div>";
            } else {
                echo "<div class='sbl-details-thumbnail'>
                    <img src='images/woman.png'/>
                  </div>";
            }
        }
        ?>
    </div>
    <!-- DETAILS PRICE -->
    <div class="sbl-details-box">
      <p class="sbl-details-price">230.000 VNĐ</p>
    </div>
  </div>
</section>
<!-- DETAILS CONTENT -->
<section class="sbl-spotlight">
  <div class="sbl-details-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper accumsan ultricies in orci est enim in mattis maecenas. Ultrices dapibus amet amet, ut varius praesent. Donec urna, felis et ac nulla libero mauris integer convallis. Justo, adipiscing sed viverra proin quis malesuada faucibus. Tortor dui, pharetra risus fames. Eu cursus faucibus diam id. Eget convallis sollicitudin turpis nisl ut ipsum suscipit magna. Ultrices lectus sagittis fermentum mauris tortor dignissim elementum aliquet. Bibendum cursus elit condimentum morbi. Id dictum adipiscing tempor, tortor vitae, leo at justo. Volutpat egestas est, est tristique odio interdum adipiscing donec. Elit senectus turpis malesuada mollis id pellentesque. Sed molestie nascetur eget sit cursus.
      Gravida posuere sagittis amet sed a. Libero vivamus hendrerit facilisi enim, lacinia. Donec nisl sed tellus faucibus aliquet tortor nisi tincidunt id. Molestie enim vestibulum, nec porttitor. Tellus morbi enim sit duis tellus. Lectus nunc hac dignissim nunc. Id nunc sem volutpat lacus malesuada congue.
      Pharetra molestie netus odio tincidunt lobortis lobortis. Massa turpis hac erat tempus aliquam. Ultrices aliquam integer non pharetra pharetra est porttitor. Varius pellentesque ut pellentesque pulvinar imperdiet varius. Auctor ut in egestas vitae egestas integer turpis metus. Egestas pretium sed nisl et aenean. Mauris a odio nibh porttitor sit vitae ornare ultrices curabitur. Pretium vitae quam porta nunc quam ullamcorper massa tempus. Phasellus nec mi quisque tristique convallis tempor et rhoncus. Sagittis non bibendum iaculis scelerisque iaculis platea varius nullam. Cras neque morbi eget tellus.
      Lacus sit in cursus sit cursus. Lacus nunc et sit dictumst mattis pellentesque porttitor in suspendisse. In et pulvinar augue quam. Porta netus lectus id nulla vitae dictum venenatis, dolor vulputate. Ante amet, commodo orci, id odio amet. Egestas nibh in est, id sapien eget duis nunc. In amet cras elementum vel elementum et morbi tellus leo. Aliquet cursus mattis semper turpis.
      Mus velit quis lobortis velit. Imperdiet sed sagittis semper tristique bibendum. Tempus, volutpat malesuada ut diam dignissim. Interdum egestas arcu, tristique neque, tincidunt. Ultrices bibendum mus sed nunc sit vitae sed dolor id. Ullamcorper dui id id id sed faucibus. Viverra accumsan enim aliquam egestas tincidunt lobortis proin. Felis senectus amet quis odio sit neque tortor, purus. Sed ullamcorper leo mattis fermentum. A turpis auctor varius vel tincidunt aliquam nibh.
      Hac aliquet in sagittis, nunc at. Condimentum interdum magna venenatis, arcu, libero in aliquet dolor arcu. Adipiscing eu porttitor ultrices aliquam sagittis pretium facilisi et enim. Euismod vivamus elementum elementum libero pellentesque posuere. Libero, mollis pretium, lectus turpis mi aliquam scelerisque vehicula. Enim, eleifend non sed feugiat nunc. Mi.</p>
  </div>
</section>

<?php require_once('feature.php') ?>

<?php require_once('footer.php') ?>
