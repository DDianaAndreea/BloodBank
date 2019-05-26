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
									<?php  foreach($pacienti as $pacient):?>
									<div class="breadcomb-ctn">
										<h2><?php echo  $pacient->nume?> <?php echo $pacient->prenume?></h2>

										<h5><?php echo $pacient->data_cererii?></h5s>
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
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Data nastere</th>
                        <th>sex</th>
                        <th>rh</th>
                        <th>grupa sanguina</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $pacient->data_nastere?></td>
                            <td><?php echo $pacient->sex?></td>
                            <td><?php echo $pacient->rh?></td>
                            <td><?php echo $pacient->grupa_sanguina?></td>
                        </tr>
					</tbody>
            </table>
            <br>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Caz</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $pacient->caz?></td>
                    </tr>
				</tbody>
            </table>
            <br>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Publicarea cazului</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $pacient->email?></td>
                            <td><?php echo $pacient->telefon?></td>
                            <td><?php echo $pacient->public?></td>
                            <?php if ($pacient->public == 'Da'): ?>
                                <td><a class="btn btn-secondary" href="<?php echo base_url('cazuri/view_caz/'.$pacient->ID) ?>" > Publica</a></td>
                            <?php endif; ?>

                        </tr>
					</tbody>
            </table>
                        



        </div>
    </div>
</div>
