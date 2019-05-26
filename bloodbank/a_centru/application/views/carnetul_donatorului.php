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

										<h5></h5>
									<?php endforeach?>

									<?php  foreach($carnet as $d):?>
									<?php endforeach?>

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
            <br>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th class="col-md-3">Data nasterii:</th>
                        <th>Sexul:</th>
                        <th>Grupa:</th>
                        <th>Rh-ul:</th>
                    </tr>
                </thead>
                <tbody>
                    <td><?php echo $donator->data_nastere?> </td>
                    <td><?php echo $donator->sex?></td>
                    <td><?php echo $donator->grupa_sanguina?></td>
                    <td><?php echo $donator->rh?></td>

                    
				</tbody>
            </table>
            <br>
            <table class="table table-condensed">
                <thead>
                    <tr>
                    	<th class="col-md-3">CNP:</th>
                        <th class="col-md-3">Serie:</th>
                        <th>Numar:</th>
                    </tr>
                </thead>
                <tbody>
                    <td ><?php echo $d->cnp?> </td>
                    <td><?php echo $d->seria?></td>
                    <td><?php echo $d->numarul?></td>
                     
				</tbody>
            </table>
            <br>

            <table class="table table-condensed">
                <thead>
                    <tr>
                    	<th>Adresa:</th>
                        <th>Localitate:</th>
                        <th>Judet:</th>
                        <th>Email:</th>
                        <th>Telefon:</th>
                    </tr>
                </thead>
                <tbody>
                    <td><?php echo $d->adresa?> </td>
                    <td><?php echo $d->localitate?></td>
                    <td><?php echo $d->judet?></td>
                    <td><?php echo $donator->email?></td>
                    <td><?php echo $donator->telefon?></td>

				</tbody>
            </table>
            <br>

            <?php if ($donator->activ =='2'):?>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Data ultimei donari:</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <td><?php echo $d->data_ultimei_donari?> </td>
                    

                </tbody>
            </table>
    <?php endif?>
            
        
        </div>
    </div>
    <br>
 
    <br>

 
  </div>
