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
										<i class="fa fa-envelope"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Mesaje primite</h2>
										<p>bloodbank@gmail.com</p>
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
                            <a class="btn" href="<?php echo base_url('compose')?>">Compunere</a>
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
                    <div class="inbox-text-list sm-res-mg-t-30">
                        <div class="inbox-btn-st-ls btn-toolbar">
                            <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                <a href="<?php echo base_url('inbox')?>"><button class="btn btn-default btn-sm" ><i class="fa fa-retweet" ></i> Reincarca</button></a>
                                
                            </div>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-inbox">
                                <tbody>
                                    <?php foreach($mesaje as $mesaj):?>
                                    <?php if(!$mesaj->stare_email):?>
                                    <tr class="unread">
                                        <td class="">
                                           <i class="fa fa-envelope"></i>
                                        </td>
                                        <td><a href="<?php echo base_url('email/view/'.$mesaj->ID)?>"><b><?php echo $mesaj->prenume?> <?php echo $mesaj->nume ?></b></a></td>
                                        <td><a href="<?php echo base_url('email/view/'.$mesaj->ID)?>"><b><?php echo $mesaj->email?></b></a>
                                        </td>
                                        <td><i></i></td>
                                        <td class="text-right mail-date"><b><?php echo date("d M",strtotime($mesaj->data))?></b></td>
                                    </tr>
                                    <?php else:?>
                                    <tr class="read">
                                        <td class="">
                                           <i class="fa fa-envelope-open">
                                        </td>
                                        <td><a href="<?php echo base_url('email/view/'.$mesaj->ID)?>"><?php echo $mesaj->prenume?> <?php echo $mesaj->nume ?></a></td>
                                        <td><a href="<?php echo base_url('email/view/'.$mesaj->ID)?>"><?php echo $mesaj->email?></a>
                                        </td>
                                        <td><i></i></td>
                                        <td class="text-right mail-date"><?php echo date("d M",strtotime($mesaj->data))?></td>
                                    </tr>
                                <?php endif;?>
                                    <?php endforeach;?>
                                    
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inbox area End-->