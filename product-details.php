<?php require_once('header.php') ?>

<section class="sbl-spotlight">
  <div class="sbl-spotlight-details-header">
    <div class="sbl-back-category">
      <div class="sbl-btn-back">BACK</div>
      <div class="sbl-details-category">WOMAN</div>
    </div>
    <div class="sbl-back-category">
      <p class="sbl-details-title">PINK TAROT</p>
    </div>
    <div class="sbl-back-category">
      <p class="sbl-details-code">#SBL3345</p>
    </div>

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

  </div>
</section>

<?php require_once('footer.php') ?>
