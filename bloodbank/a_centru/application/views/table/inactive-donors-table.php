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
										<h2>Donatori în așteptare</h2>
										<form method="get" action="<?php echo base_url('donatori/skeyword2')?>">
                                            <input type="text" style="width:490px; " name="don_key" id="don_search_box"  class="form-control input-lg typeahead" placeholder="caută donator după Nume, Prenume sau Grupa Sanguină" />
                                        </form>
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
                                        <th>Grupa Sanguină</th>
                                        <th>Rh</th>
                                        <th></th>
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
                                        <td><a class="fa fa-edit btn" data-toggle="modal" data-target="#modifica" style="color:#8B0000" href=""></a> </td>
                                        
                                        <td><a class="fa fa-file btn" style="color:#8B0000" href="<?php echo base_url('donatori/chestionar/'.$donator->ID)?>"></a> </td>
                                        <td><a class="fa fa-id-card btn" style="color:#8B0000 " href="<?php echo base_url('donatori/carnetul_donatorului/'.$donator->ID)?>"></a> </td>
                                        <td><a class="fa fa-check-circle btn" style="color:green" href="<?php echo base_url('donatori/activare/'.$donator->ID)?>"> aprobă donarea</a>
                                            <a class="fa fa-times-circle btn" style="color:#8B0000" href="<?php echo base_url('donatori/donator_respins/'.$donator->ID)?>"> nu aprobă donarea</a></td>
                                    </tr>
                                    <?php endforeach?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


<!-- Modal -->
  <div class="modal fade" id="modifica" >
    <form action="<?php echo base_url('donatori/modifica_gr_rh/'.$donator->ID)?>" method="POST">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Actualizare date donator</h4>
        </div>
        <div class="modal-body">
          <p>Grupa:
            <input class="form-control" type="text" name="grupa_sanguina" >
          </p>
          <p>Rh :</p>
            <select class="form-control" name="rh">
                <option value="">alege rh </option>
                            <option value="+ "> +</option>
                            <option value="- "> -</option>
            </select>
        </div>
        <br>
        <div class="modal-footer" >
          <input  class="btn btn-default" style="background-color: #8B0000"  type="submit" name="submit" value="Modifică" >
        </div>
      </div>
    </div>
</form>
  </div>