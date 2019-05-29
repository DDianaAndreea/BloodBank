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
										<h2>Cazuri</h2>
                                        <p>cazuri care sunt publicate curent </p>
										
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
                        <!-- <div class="basic-tb-hd">
                            <h2>Table Condensed</h2>
                            <p>Make tables more compact by cutting cell padding in half (<code>.table-condensed</code>).</p>
                        </div> -->
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Nume</th>
                                        <th>Prenume</th>
                                        <th>Grupa sanguină</th>
                                        <th>Caz</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($cazuri as $caz):?>
                                    <tr>
                                        
                                        <td><?php echo $caz->nume?></td>
                                        <td><?php echo $caz->prenume?></td>
                                        <td><?php echo $caz->grupa_sanguina?></td>
                                        <td><?php echo $caz->caz?></td>
                                        <td><a class="fa fa-minus-circle btn" style="color:red; " href="<?php echo base_url('cazuri/delete/'.$caz->ID)?>"></a></td>
                                    </tr>

                                    <?php endforeach?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>