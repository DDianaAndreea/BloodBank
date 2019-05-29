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
										<h2>Publicare caz</h2>

										
									

										
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
            <form  action="<?php echo base_url('cazuri/public_caz') ?>" method="POST">
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
                        <?php  foreach($pacienti as $pacient):?>
                        <tr>
                            
                            <td ><input class="form-control" type="text" name="nume" value="<?php echo $pacient->nume?>" ></td>
                            <td ><input class="form-control" type="text" name="prenume" value="<?php echo $pacient->prenume?>" ></td>
                            <td><input class="form-control" type="text" name="grupa_sanguina" value="<?php echo $pacient->grupa_sanguina?>" ></td>
                            <td><input class="form-control" type="text" name="caz" value="<?php echo $pacient->caz?>" ></td>

                        </tr>
                        <?php endforeach?>

					</tbody>
            </table>
            <input type="submit" name="submit" value="Publică">
            </form>
            
            
                        



        </div>
    </div>
</div>
