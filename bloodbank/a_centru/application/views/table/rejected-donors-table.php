	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-user-times"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Donatori respinsi</h2>
                                        <p>Donatorii au fost respinsi datorita rezultatelor probelor de laborator.</p>
										
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
                                        <th>Fisa date personale</th>
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
                                        <td><a class="fa fa-id-card btn" style="color:#8B0000" href="<?php echo base_url('donatori/carnetul_donatorului/'.$donator->ID)?>"></a> </td>
                                        <td> <a  class="fa fa-times-circle btn" style="color:#8B0000" href="" data-toggle="modal" data-target="#modalAppointment"> nu aproba donarea</a> 
                                        
                                    </tr>
                                    <?php endforeach?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




<!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Trimite mail!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('mesaje/mesaje')?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Prenume</label>
                    <input type="text" name="prenume" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  class="text-black">Nume</label>
                    <input type="text" name="nume" class="form-control" >
                  </div>
                  
                </div>
              </div>

              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" name="email" class="form-control" id="appointment_email">
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Mesajul tau</label>
                <textarea name="mesaj" type="text" id="appointment_message" class="form-control" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Trimite" class="btn btn-danger">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

