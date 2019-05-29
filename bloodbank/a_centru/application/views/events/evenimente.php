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
										<h2>Evenimente</h2>
										<p>active</p>
										
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
    <div class="row">
 		<?php  foreach($evenimente as $ev): ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                <div class="rc-it-ltd">
                    <div class="recent-items-ctn">
                        <div class="recent-items-title">
                            <h2><?php echo $ev->denumire?></h2>
                        </div>
                    </div>
                    <div class="recent-items-inn">
                        <table class="table table-inner table-vmiddle">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Locația</th>
                                    <th>Imagine</th>
                                            
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td > <?php echo $ev->data?> </td>
                                    <td> <?php echo $ev->locatie?> </td>
                                    <td><img style="border-radius: 4px; width: 120px;" src="<?php echo base_url('assets/uploads/'.$ev->imagine) ?>"/></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table class="table table-inner table-vmiddle">
                        <thead>
                            <tr>
                                <th>Descriere</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td ><?php echo $ev->descriere ?> </td>
                            </tr>
                        </tbody>
                    </table>
                           
                            <a class="btn btn-danger"href="<?php echo base_url('evenimente/delete_ev/'.$ev->ID)?>">Șterge</a> 
              
            	</div>

            </div>
                    <br>
       </div>
                

    <?php endforeach?>
                

    </div>
    <br>
            
</div>
  
