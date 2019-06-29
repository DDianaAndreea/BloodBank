    <section class="section">
      <div class="container">
      
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-12 element-animate">
            <h2 class="text-burg">Cerere</h2>
            <p class="lead">Pentru persoanele care au nevoie de transfuzii sanguine sau preparate din sânge.</p>
            <p class="lead">După trimiterea cererii urmeaza sa va contactăm.</p>
            <br>
            
          </div>
        </div>
        <br>
        

        <div class="row"  >
          <div class="col-md-1"></div>
          <div class="  col-md-8 element-animate">
            <form  action="<?php echo base_url('cerere_primire/cerere_pacient') ?>" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Prenume</label>
                    <input type="text" class="form-control" name="prenume" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Nume</label>
                    <input type="text" class="form-control" name="nume" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label  class="text-black">Email</label>
                <input type="email" class="form-control" name="email" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Data nașterii</label>
                    <input type="text" class="form-control" placeholder="an.luna.zi" name="data_nastere" required>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Telefon</label>
                    <input type="text" class="form-control" name="telefon" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="text-black">Sex </label><br>
                    <input type="radio" name="sex" value="m"> M</input>
                    <input type="radio" name="sex" value="f"> F</input>
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
                    <label class="text-black">Grupa sanguină </label><br>
                    <input type="radio" name="grupa_sanguina" value="0"> 0</input>
                    <input type="radio" name="grupa_sanguina" value="A"> A</input>
                    <input type="radio" name="grupa_sanguina" value="B"> B</input>
                    <input type="radio" name="grupa_sanguina" value="AB"> AB</input>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="appointment_message" class="text-black">Cazul dvs.</label>
                <textarea name="caz" id="appointment_message" class="form-control" cols="30" rows="10" type="text" required></textarea>
              </div>

              <div class="form-group">
                <label class="text-black">Permiteți să fie publicat cazul?</label><br>
                <input type="radio" name="public" value="Da"> Da</input>
                <input type="radio" name="public" value="Nu"> Nu</input>
              </div>


              <div class="form-group">
                <input type="submit" name="submit" value="Trimite cererea" class="btn btn-danger">
              </div>

            </form>
          </div>  
        </div>
        


 
      </div>
    </section>




