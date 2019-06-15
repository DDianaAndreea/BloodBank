    <a href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
      <span class="heading">Ai întrebări sau propuneri?</span>
      <span class="sub-heading">Lasă un mesaj</span>
    </a>
    <!-- END cta-link -->

     <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-3 mb-5">
            <h3>Servicii</h3>
            <ul class="footer-link list-unstyled">
              <li><a href='<?php echo base_url("cerere_donare") ?>'>Donare</a></li>
              <li><a href='<?php echo base_url("cerere_pacient") ?>'>Primire pacienți</a></li>
              <li><a href='<?php echo base_url("cerere_spital") ?>'>Primire centre</a></li>
            </ul>
            <br>
            <h3>Tot ce trebuie să știi</h3>
            <ul class="footer-link list-unstyled">
              <li><a href='<?php echo base_url("dece") ?>'>De ce să donezi și cine are nevoie de donațiile tale</a></li>
              <li><a href='<?php echo base_url("cum") ?>'>Cum să donezi și informațiile necesare</a></li>
              <li><a href='<?php echo base_url("unde") ?>'>Unde să donezi</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Evenimente</h3>
            <ul class="footer-link list-unstyled">
              <li><a href='<?php echo base_url("campanii") ?>'>Evenimente de recoltare a sângelui</a></li>
              <li><a href='<?php echo base_url("cazuri") ?>'>Cazuri ale pacienților</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Despre noi</h3>
            <ul class="footer-link list-unstyled">
              <li><a href='<?php echo base_url("contact") ?>'>Pagina de contact</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Locatie &amp; Contact</h3>
            <p class="mb-5">Aleea Viorelelor, Slatina, Olt, România</p>

            <h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@bloodbank.com</a></p>
            
            <h4 class="text-uppercase mb-3 h6 text-white">Telefon</h5>
            <p>0349000000</p>
            <p>0760373781</p>

          </div>
        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p><a href="index">www.bloodbank.ro </a></p>
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <!-- <a href="" class="p-2"><span class="fa fa-facebook"></span></a> -->
           <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://bloodbank.com/create-facebook-share-button-for-website-webpages/&layout=button&size=small&mobile_iframe=true&width=60&height=20&appId" width="90" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
          
        </div>
      </div>
    </footer>
    <!-- END footer -->

        <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Contactează-ne!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('mesaje/mesaje')?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Prenume</label>
                    <input type="text" name="prenume" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Nume</label>
                    <input type="text" name="nume" class="form-control" >
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" name="email" class="form-control" id="appointment_email">
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Mesajul tău</label>
                <textarea name="mesaj" type="text" id="appointment_message" class="form-control" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Trimite" class="btn btn-danger">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  </body>
</html>