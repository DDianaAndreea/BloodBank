	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-calendar"></i>
									</div>
									
									<div class="breadcomb-ctn">
										<h2>Editeaza evenimentul</h2>

										
									

										
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
           <form  action="<?php echo base_url('evenimente/edit_eveniment/'.$this->uri->segment(3)) ?>" method="POST">
            <?php  foreach($evenimente as $eveniment):?>
            <table class="table table-condensed">
                <thead>
                    <tr class="col-md-6">
                        <th>Denumire</th><br>
                    </tr>
                </thead>
                <tbody>
                    <tr class="col-md-6">
                        <td ><input class="form-control " type="text" name="denumire" value="<?php echo $eveniment->denumire?>" ></td>
                    </tr>
				</tbody>
            </table>
            <table class="table table-condensed">
                <thead>
                    <tr class="col-md-6">
                        <th>Imagine</th>
                    </tr>
                </thead>
                <tbody >
                    <tr  class="col-md-6">
                        <td ><input type="file" class="form-control "  name="imagine" value="<?php echo $eveniment->imagine?>"><?php echo $eveniment->imagine?></td>
                    </tr>
				</tbody>
            </table>
            <table class="table table-condensed">
                <thead>
                    <tr class="col-md-6">
                        <th>Data</th>
                        <th>Locatia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="col-md-6">
                        <td ><input class="form-control" type="text" name="data" value="<?php echo $eveniment->data?>"  ></td>
                        <td ><input class="form-control" type="text" name="locatie" value="<?php echo $eveniment->locatie?>" ></td>
					</tr>
				</tbody>
            </table>
			<table class="table table-condensed">
                <thead>
                    <tr class="col-md-12">
                        <th>Descriere</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="col-md-12">
                   		<td ><textarea rows="4" cols="50" class="form-control" type="text-area" name="descriere"  ><?php echo $eveniment->descriere?></textarea></td>
                    </tr>
				</tbody>
            </table>
        <?php endforeach?>
            <br>

            <input type="submit" name="submit" value="Modifica">

        </form>
            
      
        </div>
    </div>
</div>
