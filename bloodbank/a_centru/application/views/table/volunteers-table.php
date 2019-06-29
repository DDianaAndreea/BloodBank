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
										<h2>Voluntari</h2>
										
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
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        <th>Mesaj</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($voluntari as $voluntar):?>
                                    <tr>

                                        <td><?php echo $voluntar->nume?></td>
                                        <td><?php echo $voluntar->prenume?></td>
                                        <td><?php echo $voluntar->telefon?></td>
                                        <td><?php echo $voluntar->email?></td>
                                        <td><?php echo $voluntar->mesaj?></td>
                                        <td><a class="fa fa-minus-circle btn" style="color:red; " href="<?php echo base_url('voluntari/delete_voluntar/'.$voluntar->ID )?>"></a></td>
                                        
                                    </tr>
                                <?php endforeach?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>