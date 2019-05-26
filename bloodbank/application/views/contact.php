
     <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo base_url('assets/images/contact.jpg')?>);">
        
        <div class="container">
          <br>
          <br>
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">

              <h1>Contact</h1>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 element-animate">
            <form action="<?php echo base_url('mesaje/mesaje')?>" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">Prenume</label>
                  <input type="text" name="prenume" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Nume</label>
                  <input type="text" name="nume" class="form-control form-control-lg" id="lname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Mesaj</label>
                  <textarea name="mesaj" type=""text id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" name="submit" value="Trimite" class="btn btn-primary btn-lg btn-block">
                </div>

              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            
            <h5 class="text-uppercase mb-3">Adresa</h5>
            <p class="mb-5">Strada Aleea Viorelelor,4 <br> Slatina,Romania</p>
            
            <h5 class="text-uppercase mb-3">Email</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@bloodbank.com</a>
            
            <h5 class="text-uppercase mb-3">Telefon</h5>
            <p class="mb-5">Mobil: 0760373781 <br> Fix: 0349807258 </p>
  

          </div>
        </div>
      </div>
    </section>

