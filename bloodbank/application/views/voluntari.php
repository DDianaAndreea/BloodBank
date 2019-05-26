    <section class="section">
      <div class="container">
      
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-12 element-animate">
            <h2 class="text-burg">Voluntariat</h2>
            <p class="lead">Vrei sa fii instiintat in legatura cu campaniile noastre de donatii sau vrei sa initiezi o campanie?</p>
            <p class="lead">Te rugam sa completezi datele necesare si vei fii contactat ( in cazul initierii unei campanii) sau vei primii mailuri cu detalii despre campanii (in cazul voluntariatului).</p>
            <p class="lead">Multumim de colaborarea si increderea pe care ne-o acordati !</p>
            <br>
            
          </div>
        </div>
        <br>
        

        <div class="row"  >
          <div class="col-md-1"></div>
          <div class="  col-md-8 element-animate">
            <form action="<?php echo base_url('voluntari/cerere_voluntar') ?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Prenume</label>
                    <input type="text" name="prenume" class="form-control" placeholder="prenume*">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Nume</label>
                    <input type="text" name="nume" class="form-control" placeholder="nume*">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label  class="text-black">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="email*" >
                </div>
              </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Telefon</label>
                    <input type="text" name="telefon" class="form-control" placeholder="telefon*" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black"> </label><br>
                    <input type="radio" name="tip" value="voluntar" > Vreau sa fiu Voluntar!</input><br>
                    <input type="radio" name="tip" value="initiator"> Vreau sa Initiez o Campanie!</input>
                  </div>
                </div>
                
              </div>

              <div class="form-group">
                <label for="appointment_message" class="text-black">Mesajul dvs.</label>
                <textarea type="text" name="mesaj" id="appointment_message" class="form-control" cols="30" rows="5" placeholder="Completati in cazul initierii unei campanii"></textarea>
              </div>


              <div class="form-group">
                <input type="submit" name="submit" value="Trimite cererea" class="btn btn-danger">
              </div>
            </form>
          </div>  
        </div>
        


 
      </div>
    </section>




