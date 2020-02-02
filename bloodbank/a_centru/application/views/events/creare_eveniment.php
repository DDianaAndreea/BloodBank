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
										<h2>Crează un eveniment</h2>

										
									

										
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
           <form  action="<?php echo base_url('evenimente_op/add_eveniment') ?>" method="POST">
            <table class="table table-condensed">
                <thead>
                    <tr class="col-md-6">
                        <th>Denumire</th><br>
                    </tr>
                </thead>
                <tbody>
                    <tr class="col-md-6">
                        <td ><input class="form-control " type="text" name="denumire"  ></td>
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
                        <td ><input type="file" class="form-control "  name="imagine"></td>
                    </tr>
				</tbody>
            </table>
            <table class="table table-condensed">
                <thead>
                    <tr class="col-md-6">
                        <th>Data</th>
                        <th>Locația</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="col-md-6">
                        <td ><input class="form-control" type="text" name="data"  ></td>
                        <td ><input class="form-control" type="text" name="locatie"  ></td>
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
                   		<td ><textarea rows="4" cols="50" class="form-control" type="text-area" name="descriere"  ></textarea></td>
                    </tr>
				</tbody>
            </table>
            <br>

            <input class="btn btn-danger" style="background: #8B0000;" type="submit" name="submit" value="Încarcă">

        </form>
            
      
        </div>
    </div>
</div>
