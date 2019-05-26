    <section class="section">
      <div class="container">
      
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-12 element-animate">
            <h2 class="text-burg">Cerere</h2>
            <p class="lead">Pentru centrele de sanatate.</p>
            <br>
            
          </div>
        </div>
        <br>
        

        <div class="row">
          <div class="col-md-1"></div>
          <div class="  col-md-8 element-animate">
            <form action="<?php echo base_url('cerere_primire/cerere_spital') ?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Denumire centru</label>
                    <input type="text" class="form-control" name="denumire" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Telefon</label>
                    <input type="text" class="form-control" name="telefon" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label  class="text-black">Email</label>
                <input type="text" class="form-control" name="email" >
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="text-black">Cantitate(nr de pungi) </label><br>
                    <input type="text" class="form-control" name="cantitate">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="text-black">RH </label><br>
                    <input type="radio" name="rh" value="+"> Pozitiv</input>
                    <input type="radio" name="rh" value="-"> Negativ</input>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="text-black">Grupa sanguina </label><br>
                    <input type="radio" name="grupa" value="0"> 0</input>
                    <input type="radio" name="grupa" value="A"> A</input>
                    <input type="radio" name="grupa" value="B"> B</input>
                    <input type="radio" name="grupa" value="AB"> AB</input>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="appointment_message" class="text-black">Cazul </label>
                <textarea name="cazul" type="text" id="appointment_message" class="form-control" cols="30" rows="6"></textarea>
              </div>


              <div class="form-group">
                <input type="submit" name="submit" value="Trimite cererea" class="btn btn-danger">
              </div>
            </form>
          </div>  
        </div>
      </div>
        


 
      </div>
    </section>




