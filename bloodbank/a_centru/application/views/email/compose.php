
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-edit"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Compunere email</h2>
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
    <!-- Compose email area Start-->
    <div class="inbox-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="inbox-left-sd">
                        <div class="compose-ml">
                            <a class="btn" href="#">Compunere</a>
                        </div>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a href="<?php echo base_url('inbox')?>"><i class="fa fa-envelope"></i> Mesaje primite</a></li>
                                <li><a href="<?php echo base_url('send')?>"><i class="fa fa-paper-plane"></i> Mesaje trimise</a></li>
                            
                            </ul>
                        </div>
                        <hr>
                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="view-mail-list sm-res-mg-t-30">
                        <div class="view-mail-hd">
                            <div class="view-mail-hrd">
                                <h2>Mesaj nou</h2>
                            </div>
                        </div>
                        <div class="cmp-int mg-t-20">
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                    <div class="cmp-int-lb cmp-int-lb1 text-right">
                                        <span>To: </span>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                            <input type="email" class="form-control" placeholder="example@email.com" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                    <div class="cmp-int-lb cmp-int-lb1 text-right">
                                        <span>Cc: </span>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                            <input type="email" class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                    <div class="cmp-int-lb text-right">
                                        <span>Subiect: </span>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group cmp-em-mg">
                                        <div class="nk-int-st cmp-int-in cmp-email-over">
                                            <input type="text" class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cmp-int-box mg-t-20">
                            <div class="html-editor-cm">
                                <textarea rows="10" cols="113">
                                </textarea>
                            </div>
                        </div>

                        <div class="compose-ml col-md-3">
                            <a class="btn" href="<?php echo base_url('email/sendEmail')?>">Trimite</a>
                        </div>
           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Compose email area End