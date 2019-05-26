	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-user-plus"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Donatori in asteptare</h2>
										
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
                                        <th>Grupa Sanguina</th>
                                        <th>Rh</th>
                                        <th>Chestionarul donatorului</th>
                                        <th>Carnetul donatorului</th>
                                        <th>Rezultatele din laborator </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($donatori as $donator):?>
                                    <tr>
                                        <td><?php echo $donator->nume?></td>
                                        <td><?php echo $donator->prenume?></td>
                                        <td><?php echo $donator->grupa_sanguina?></td>
                                        <td><?php echo $donator->rh?></td>
                                        
                                        <td><a class="fa fa-file btn" style="color:#8B0000" href="<?php echo base_url('donatori/chestionar/'.$donator->ID)?>"></a> </td>
                                        <td><a class="fa fa-id-card btn" style="color:#8B0000 " href="<?php echo base_url('donatori/carnetul_donatorului/'.$donator->ID)?>"></a> </td>
                                        <td><a class="fa fa-check-circle btn" style="color:green" href="<?php echo base_url('donatori/activare/'.$donator->ID)?>"> aproba donarea</a>
                                            <a class="fa fa-times-circle btn" style="color:#8B0000" href="<?php echo base_url('donatori/donator_respins/'.$donator->ID)?>"> nu aproba donarea</a></td>
                                    </tr>
                                    <?php endforeach?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>