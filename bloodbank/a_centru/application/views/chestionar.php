	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-user"></i>
									</div>
									<?php  foreach($donatori as $donator):?>
									<div class="breadcomb-ctn">
										<h2><?php echo  $donator->nume?> <?php echo $donator->prenume?></h2>

										<h5><?php echo $donator->data_cererii?></h5>
									<?php endforeach?>
                                        <?php if(!$donator->activ):?>
                                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#datePersonale"> Adăugare date personale</a>
                                        <?php endif?>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="normal-table-list mg-t-30">
        <div class="bsc-tbl-cds">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th class="col-md-4">1.Considerați că aveți o stare bună de sănătate?</th>
                        <th><?php echo $donator->c1?></th>
                       
                    </tr>
                </thead>
            </table>
            <br>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>2.În ultima vreme ați avut:</th>
                        <th>-o pierdere în greutate neașteptată</th>
                        <th>-febră neexplicabilă</th>
                        <th>-tratament stomatologic,vaccinări</th>
                    </tr>
                </thead>
                <tbody>
                    <td> </td>
                    <td><?php echo $donator->c2?></td>
                    <td><?php echo $donator->c3?></td>
                    <td><?php echo $donator->c4?></td>

                    
				</tbody>
            </table>
            <br>
            
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">3.Urmați tratament medicamentos?</th>
                        <th><?php echo $donator->c5?></th>
                    </tr>
                </thead>
               
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>4.În ultimele 12 luni ați avut contact sexual cu:</th>
                        <th>-un partener cu hepatită sau HIV pozitiv</th>
                        <th>-un partener ce se droghează prin injecții</th>
                        <th>-un partener cu hemofilie</th>
                        <th>-parteneri multipli</th>
                    </tr>
                </thead>
                <tbody>
                    <td> </td>
                    <td><?php echo $donator->c6?></td>
                    <td><?php echo $donator->c7?></td>
                    <td><?php echo $donator->c8?></td>
                    <td><?php echo $donator->c9?></td>

                    
                </tbody>
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">5.V-ați injectat vreodată droguri?</th>
                        <th><?php echo $donator->c10?></th>
                    </tr>
                </thead>
               
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">6.Ați schimbat partenerul(partenera) în ultimele 6 luni?</th>
                        <th><?php echo $donator->c11?></th>
                    </tr>
                </thead>
               
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>7.De la ultima donare,sau în ultimele 12 luni ați suferit:</th>
                        <th>-o intervenție chirurcicală sau investigații medicale?</th>
                        <th>-tatuaje,acupunctură,găuri pentru cercei?</th>
                        <th>-ați fost transfuat(ă)?</th>
                        <th>-ați fost însărcinată?</th>
                    </tr>
                </thead>
                <tbody>
                    <td> </td>
                    <td><?php echo $donator->c12?></td>
                    <td><?php echo $donator->c13?></td>
                    <td><?php echo $donator->c14?></td>
                    <td><?php echo $donator->c15?></td>

                    
                </tbody>
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">8.Ați fost în detenție în ultimii ani?</th>
                        <th><?php echo $donator->c16?></th>
                    </tr>
                </thead>
               
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-6">9.Ați fost expuși la hepatită(bolnavi în familie sau risc profesional)?</th>
                        <th><?php echo $donator->c17?></th>
                    </tr>
                </thead>
               
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>10.Ați suferit vreodata de:</th>
                        <th>- icter,tuberculoză,febră reumatică,malarie?</th>
                        <th>-boli de inimă,tensiune arterială mare sau mică?</th>
                    </tr>
                </thead>
                <tbody>
                    <td> </td>
                    <td><?php echo $donator->c18?></td>
                    <td><?php echo $donator->c19?></td>

                    
                </tbody>
            </table>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>-boli transmise sexual(hiv,sifilis etc)</th>
                        <th>-accidente vasculare cardiace sau cerebrale?</th>
                        <th>-convulsii,boli nervoase?</th>
                        <th>-boli cronice(diabet,ulcer,cancer,astm)</th>
                    </tr>
                </thead>
                <tbody>
                    <td><?php echo $donator->c20?></td>
                    <td><?php echo $donator->c21?></td>
                    <td><?php echo $donator->c22?></td>
                    <td><?php echo $donator->c23?></td>

                    
                </tbody>
            </table>
            <br>

             <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">11.Sunteți fumător?</th>
                        <th><?php echo $donator->c24?></th>
                    </tr>
                </thead>
               
            </table>
            <br>
            
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">12.Consumați alcool regulat și în cantități mai mari?</th>
                        <th><?php echo $donator->c25?></th>
                    </tr>
                </thead>
               
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">13.Ați fost amânat la o donare anterioară?</th>
                        <th><?php echo $donator->c26?></th>
                    </tr>
                </thead>
               
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th  class="col-md-4">14.Ați fost refuzat la o donare anterioară?</th>
                        <th><?php echo $donator->c27?></th>
                    </tr>
                </thead>
               
            </table>
            <br>
        
        </div>
    </div>
    <br>
    <?php if ($donator->activ =='0'):?>
        <div class="container">
            <div class="row" style="position: absolute;">
            
                <a href="<?php echo base_url('donatori/delete_donator/'.$donator->ID) ?>" class="btn btn-danger">Nu se încadrează ca donator</a>
                <a href="<?php echo base_url('donatori/in_asteptare/'.$donator->ID) ?>" class="btn btn-success">În așteptare până la verificarea analizelor</a>
            
            </div>
        </div>
    <?php endif?>
    <br>

  <!-- Modal -->
  <div class="modal fade" id="datePersonale" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Date personale</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('donatori/date_personale/').$donator->ID?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Seria</label>
                    <input type="text" name="seria" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Numarul</label>
                    <input type="text" name="numarul" class="form-control" >
                  </div>
                  
                </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label  class="text-black">Codul numeric personal</label>
                        <input type="text" name="cnp" class="form-control" >
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Localitate</label>
                    <input type="text" name="localitate" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Județ</label>
                    <input type="text" name="judet" class="form-control" >
                  </div>
                  
                </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label  class="text-black">Adresa</label>
                        <input type="text" name="adresa" class="form-control" >
                    </div>
                    </div>
                </div>

        <div class="form-group">
          <input type="submit" name="submit" value="Adaugare" class="btn btn-defaultr">
        </div>
      </div>
      
    </div>
  </div>

</div>


