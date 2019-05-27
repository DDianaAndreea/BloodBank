	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-h-square"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Spitale</h2>
										
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
                                        <th>Data cererii</th>
                                        <th>Denumire spital</th>
                                        <th>Cantitate</th>
                                        <th>Grupa sanguina</th>
                                        <th>Rh</th>
                                        <th>Cazul</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($spitale as $spital):?>
                                    <tr>
                                        
                                        <td><?php echo $spital->data_cererii?></td>
                                        <td><?php echo $spital->denumire?></td>
                                        <td><?php echo $spital->cantitate?></td>
                                        <td><?php echo $spital->grupa?></td>
                                        <td><?php echo $spital->rh?></td>
                                        <td><?php echo $spital->cazul?></td>
                                        <td><?php echo $spital->telefon?></td>
                                        <td><?php echo $spital->email?></td>
                                        <?php foreach($stocuri as $stoc):?>
                                            <?php if($spital->grupa==$stoc->grupa && $spital->rh==$stoc->rh ):?>
                                                    <?php if($spital->cantitate<=$stoc->cantitate):?>
                                                        <td><a class="fa fa-check-circle btn" style="color:green" href="<?php echo base_url('spitale/delete_spital/'.$spital->ID )?>"></a></td>
                                                    <?php else:?>
                                                        <td><p style="color:#8B0000">stocuri insuficiente<p></td>
                                                    <?php endif?>
                                            <?php endif?>
                                        <?php endforeach?>
                                    </tr>

                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>