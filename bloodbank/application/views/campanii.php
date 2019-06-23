  
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo base_url('assets/images/donare-b.jpg')?>);">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Campanii</h1>
              <p></p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
      <div class="container">

        <?php foreach($campanii as $campanie):?>
        <div class="row">
          <div class="col-md-3 element-animate">
            <img src="<?php echo base_url('/a_centru/assets/uploads/'.$campanie->imagine) ?>" class="img-fluid mb-4" alt="Image placeholder">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7 element-animate">
            <h2 class="text-burg"><?php echo $campanie->denumire?></h2>
            <span class="fa fa-user"> <?php echo $campanie->participanti?></span> <br>
            <span><?php echo $campanie->data?></span><br>
            <span><?php echo $campanie->locatie?></span>
            <p class="lead"> <?php echo $campanie->descriere?> </p>
            
            <?php 
              $cookieCampanie = 'cookie'.$campanie->ID;
            ?>

           <!--    <div id="<?php echo $campanie->ID?>">
                <a href="<?php echo base_url('campanii/setCookie/'.$campanie->ID)?>"  class="btn btn-danger <?php if ( isset($_COOKIE[$cookieCampanie]) ) echo 'disabled' ?>" style="font-color:white;">Vreau să particip</a>
              </div> -->

            <?php if ( !isset($_COOKIE[$cookieCampanie]) ): ?>
              <div id="<?php echo $campanie->ID?>">
                <a href="<?php echo base_url('campanii/setCookie/'.$campanie->ID)?>"  class="btn btn-danger " style="font-color:white;">Vreau să particip</a>
              </div> 
            <?php else:?>
              <div id="<?php echo $campanie->ID?>">
                <a href=""  class="btn btn-danger disabled " style="font-color:white;">Ai ales să participi la această campanie</a>
              </div>
            <?php endif?>
            <br>
            <div>
           </div>
        </div>
        <br>

      <?php endforeach?>

 

 



      
     </div>

      </div>
    </section>

   
  