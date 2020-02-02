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
									<div class="breadcomb-ctn">
										<h2>Persoane care au nevoie de sânge</h2>
                                        <p>pacienți</p>
										
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
                                        <th>Nume</th>
                                        <th>Prenume</th>
                                        <th>sex</th>
                                        <th>rh</th>
                                        <th>grupa sanguină</th>
                                        <th>data cererii</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pacienti as $pacient):?>
                                    <tr>
                                        
                                        <td><?php echo $pacient->nume?></td>
                                        <td><?php echo $pacient->prenume?></td>
                                        <td><?php echo $pacient->sex?></td>
                                        <td><?php echo $pacient->rh?></td>
                                        <td><?php echo $pacient->grupa_sanguina?></td>
                                        <td><?php echo $pacient->data_cererii?></td>
                                        <td><a class="fa fa-file btn" style="color:#8B0000" href="<?php echo base_url('pacienti/view_pacient/'.$pacient->ID )?>"></a></td>
                                        <td><a class="fa fa-check-circle btn" style="color:green" href="<?php echo base_url('pacienti_op/delete_pacient/'.$pacient->ID )?>"></a></td>
                                    </tr>

                                    <?php endforeach?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
