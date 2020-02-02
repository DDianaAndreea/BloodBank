  <section class="section">
    <div class="container">
      
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-12 element-animate">
            <h2 class="text-burg">Chestionar pentru donatorul de sânge</h2>
            <p class="lead">Convorbirea în cadrul consultaţiei medicale este acoperită de secretul medical.</p>
            <p class="lead">Precauţiile sunt luate în scopul securităţii medicale, atât pentru donator cât şi pentru primitorul de sânge.</p>
            <button  onclick="arataInfo()" class="btn btn-danger mb-2 ">Informații</button>
            <br>
          </div>
        </div>

        <div class="row" id="info">
          <div class="col-md-1"></div>
          <div class="col-md-12 element-animate">
            <!-- <img src='<?php echo base_url("assets/images/donate-Where.jpg") ?>' class="img-fluid" style="" alt="Image placeholder"> -->
            <p>Protecția și confidențialitatea datelor personale ale donatorului, respectiv identitatea si starea de sănătate a acestuia , rezultatele testelor efectuate, care nu vor fi furnizate fara autorizare;</p>
            <p>Opțiunea donatorilor de a se răzgandi in ceea ce privește actul donării, înainte de a merge mai departe sau despre eventualitatea de a se autoexclude în orice moment în cursul procesului de donare, fără nici un fel de jenă sau discomfort;</p>
            <p>Donatorii să informeze centrul de transfuzie sanguină despre orice eventual eveniment ulterior transfuziei ce poate face donarea anterioară improprie pentru terapia transfuzională;</p>
            <p>Nedeclararea intenționată de către donator a bolilor transmisibile sau a factorilor de risc cunoscuți, constituie infracțiune ce se pedepsește conform art.39 și 40 din Legea nr.282/2005;</p>
            <p>Condițiile pe care trebuie să le îndeplinească potențialul donator în vederea donării de sânge,respectiv să aibă o stare bună de sănătate fizică și mentală, o stare de igienă personală corespunzătoare și să prezinte documentele medicale doveditoare că a efectuat examenele medicale recomandate de medicul responsabil cu selecția donatorilor;</p>

          </div>
        </div>
        <br>

        <form action="<?php echo base_url('cereri/cerere_donare/cerere_donator') ?>" method="POST">
        <div class="row" id="chestionar" >
          <div class="col-md-1"></div>
          <div class="  col-md-8 element-animate">
            
              <div class="form-group row">
                <label class="col-md-9">1.Considerați că aveți o stare bună de sănătate?</label>
                <div class="col col-sm-2">
                    <input type="radio"  name="c1" value="Da">Da</input>
                    <input type="radio"  name="c1" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">2.În ultima vreme ați avut:</label>
                <br>
                <label class="col-md-9">- o pierdere în greutate neasteptată</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c2" value="Da">Da</input>
                    <input type="radio" name="c2" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- febră neexplicabilă </label>
                <div class="col col-sm-2">
                    <input type="radio" name="c3" value="Da">Da</input>
                    <input type="radio" name="c3" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- tratament stomatologic,vaccinari</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c4" value="Da">Da</input>
                    <input type="radio" name="c4" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">3.Urmați tratament medicamentos?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c5" value="Da">Da</input>
                    <input type="radio" name="c5"value="Nu">Nu</input>
                </div>
               </div>

              <div class="form-group row">
                <label class="col-md-9">4.În ultimele 12 luni ați avut contact sexual cu:</label>
                <br>
                <label class="col-md-9">- un partener cu hepatită sau HIV pozitiv</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c6" value="Da">Da</input>
                    <input type="radio" name="c6" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- un partener ce se droghează prin injecții</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c7" value="Da">Da</input>
                    <input type="radio" name="c7" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- un partener cu hemofilie</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c8" value="Da">Da</input>
                    <input type="radio" name="c8" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- parteneri multipli</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c9" value="Da">Da</input>
                    <input type="radio" name="c9" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">5.V-ați injectat vreodată droguri?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c10" value="Da">Da</input>
                    <input type="radio" name="c10" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">6.Ați schimbat partenerul(partenera) în ultimele 6 luni?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c11" value="Da">Da</input>
                    <input type="radio" name="c11" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">7.De la ultima donare,sau în ultimele 12 luni ați suferit:</label>
                <br>
                <label class="col-md-9">- o intervenție chirurgicală sau investigații medicale?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c12" value="Da">Da</input>
                    <input type="radio" name="c12" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">-tatuaje,acupunctură,găuri pentru cercei?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c13" value="Da">Da</input>
                    <input type="radio" name="c13" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- ați fost transfuat(ă)?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c14" value="Da">Da</input>
                    <input type="radio" name="c14" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- ați fost însarcinată?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c15" value="Da">Da</input>
                    <input type="radio" name="c15" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">8.Ați fost în detenție în ultimii ani?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c16" value="Da">Da</input>
                    <input type="radio" name="c16" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">9.Ați fost expuși la hepatită(bolnavi în familie sau risc profesional)?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c17" value="Da">Da</input>
                    <input type="radio" name="c17"value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">10.Ați suferit vreodată de: </label>
                <br>
                <label class="col-md-9">- icter,tuberculoză,febră reumatică,malarie?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c18" value="Da">Da</input>
                    <input type="radio" name="c18" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- boli de inimă,tensiune arterială mare sau mică?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c19" value="Da">Da</input>
                    <input type="radio" name="c19" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- boli transmise sexual(hiv,sifilis etc).</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c20" value="Da">Da</input>
                    <input type="radio" name="c20" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- accidente vasculare cardiace sau cerebrale?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c21" value="Da">Da</input>
                    <input type="radio"  name="c21" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">- convulsii,boli nervoase?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c22" value="Da">Da</input>
                    <input type="radio" name="c22" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">-boli cronice(diabet,ulcer,cancer,astm)</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c23" value="Da">Da</input>
                    <input type="radio" name="c23" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">11.Sunteti fumător?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c24" value="Da">Da</input>
                    <input type="radio" name="c24" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">12.Consumati alcool regulat și în cantități mai mari?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c25" value="Da">Da</input>
                    <input type="radio" name="c25" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">13.Ați fost amânat la o donare anterioară?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c26" value="Da">Da</input>
                    <input type="radio" name="c26" value="Nu">Nu</input>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-9">14.Ați fost refuzat la o donare anterioară?</label>
                <div class="col col-sm-2">
                    <input type="radio" name="c27" value="Da">Da</input>
                    <input type="radio" name="c27" value="Nu">Nu</input>
                </div>
              </div>

            </div>  
      </div>
              
              <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-12 element-animate">

              <h2 class="text-burg">Cerere pentru donatorul de sânge</h2>
              <p class="lead">În momentul campaniilor sau nevoii sanguine cu grupa dumneavoastră o să primiti mail pentru a vă putea prezenta la centrul de transfuzie.</p>

              <div id="cerere">
                <div class="row">
                 <div class="col-md-1"></div>
                    <div class="col-md-8 element-animate">
            
                      <div class="row">
   
                        <div class="col-md-6">
                          <div class="form-group">
                            <label  class="text-black">Prenume</label>
                            <input name="prenume" type="text" class="form-control" required >
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label  class="text-black">Nume</label>
                            <input name="nume" type="text" class="form-control" required>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label  class="text-black">Email</label>
                         <input name="email" type="email" class="form-control" required>
                      </div>
                      

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label  class="text-black">Data nasterii</label>
                            <input name="data_nastere"type="text" class="form-control" placeholder="aaaa-ll-zz" required>
                          </div>    
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label  class="text-black">Telefon</label>
                            <input name="telefon" type="text" class="form-control" required>
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
                            <label class="text-black" required>RH </label><br>
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

    
                    </div>  

                
                </div>
              </div>

            
            </div>
        </div>

        <div class="row">
          <button type="submit" class="btn btn-danger mb-2 ">Trimite</button>
        </div>



    </form>
  </div>
</section>
  



    <script >
      function arataInfo() {
        var div = document.getElementById("info");
        if (div.style.display === "none") {
           div.style.display = "block";
        } else {
           div.style.display = "none";
        }
      }   
    </script>


<!--         <script >
      function arataCerere() {
        var div = document.getElementById("cerere");
        if (div.style.display === "none") {
           div.style.display = "block";
        } else {
           div.style.display = "none";
        }
      }   
    </script> -->
