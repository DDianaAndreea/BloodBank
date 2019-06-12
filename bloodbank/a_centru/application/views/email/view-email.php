<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-envelope-open"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Vizualizare email </h2>
										<p>bloodbank@gmail.com </p>
									</div>
								</div>
							</div>
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Inbox area Start-->
    <div class="inbox-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="inbox-left-sd">
						<div class="compose-ml">
                            <a class="btn" href="#">Compune</a>
                        </div>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                               <li><a href="<?php echo base_url('inbox')?>"><i class="fa fa-envelope"></i> Mesaje primite</a></li>
                                <li><a href="<?php echo base_url('email/compose_v')?>"><i class="fa fa-paper-plane"></i> Trimite mesaje <b>voluntarilor</b></a></li>
                                <li><a href="<?php echo base_url('email/compose_d')?>"><i class="fa fa-paper-plane"></i> Trimite mesaje <b>donatorilor</b></a></li>
                             
                            </ul>
                        </div>
                        <hr>
                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="view-mail-list sm-res-mg-t-30">
                        <div class="view-mail-hd">
                            <div class="view-mail-hrd">
                                <h2>Email </h2>
                            </div>
                            
                        </div>
                        <div class="mail-ads mail-vw-ph">
                            <p ><b>De la:</b> <?php echo $mesaj[0]->prenume?> <?php echo $mesaj[0]->nume?></p>
                            <p><b>Email:</b> <a href="<?php echo base_url('email/response/'.$mesaj[0]->ID)?>"> <?php echo $mesaj[0]->email?></a></p>
                            <p class="last-ph"><b>Data:</b> <?php echo date("d M y",strtotime($mesaj[0]->data))?> , <?php echo date("H:i",strtotime($mesaj[0]->data))?></p>
                        </div>
                        <div class="view-mail-atn">
                            <p><?php echo $mesaj[0]->mesaj?>
                            </p>
                        </div>
                 
                        <div class="vw-ml-action-ls text-right mg-t-20">
                            <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                <a href="<?php echo base_url('email/response/'.$mesaj[0]->ID)?>"><button class="btn btn-default btn-sm waves-effect"><i class="fa fa-reply"></i> Raspunde</button></a>
                                <a href="<?php echo base_url('email/delete_msg/'.$mesaj[0]->ID)?>"><button class="btn btn-default btn-sm waves-effect" ><i class="fa fa-trash"></i> Sterge</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inbox area End-->