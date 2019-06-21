  
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo base_url('assets/images/donare-b.jpg')?>);">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Cazuri</h1>
              <p></p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
      <div class="container">

       
        <div class="row">
          <?php foreach($cazuri as $caz):?>
          <div class="col-md-3 element-animate">
            <img src='<?php echo base_url("assets/images/drops-of-life.jpg") ?>' class="img-fluid mb-4" alt="Image placeholder">
          </div>
          <div class="col-md-1"></div>
          
          <div class="col-md-7 element-animate">
            
            <h2 class="text-burg"><?php echo $caz->prenume?> <?php echo $caz->nume?></h2>
            <span>Grupa sanguină: <?php echo $caz->grupa_sanguina?></span><br>
            <p class="lead"><?php echo $caz->caz?></p>
            
           </div>
           <?php endforeach?>
        </div>
        
      





      </div>
    </section>

  
