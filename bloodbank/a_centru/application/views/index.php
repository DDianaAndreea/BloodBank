<div>

<br>
    <!-- Start Statistic area-->
    
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="email-statis-inner notika-shadow">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
								<h2>Statistică donatori</h2>
							</div>
                          
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $donatori_inactivi?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Donatori inactivi</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $donatori_in_asteptare?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Donatori în așteptare</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $donatori_activi?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Donatori activi</p>
                                    </div>
                                </div>
                                <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $donatori_respinsi?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Donatori respinși</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="email-statis-inner notika-shadow">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
                                <h2>Stocuri</h2>
                            </div>
                      
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $grupa0[0]->cantitate ?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Grupa 0</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $grupaA[0]->cantitate ?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Grupa A</p>
                                    </div>
                                </div>
                                <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $grupaB[0]->cantitate ?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Grupa B</p>
                                    </div>
                                </div>
                                <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="<?php echo $grupaAB[0]->cantitate ?>" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Grupa AB</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <br>
                <div class="row">
                <div class="col-md-7">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Evenimente </h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            
                                            <th>Denumire</th>
                                            <th>Dată</th>
                                            <th>Locație</th>
                                            <th>Participanți</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach($evenimente as$eveniment):?>
                                        <tr>
                                            
                                            <td><?php echo $eveniment->denumire?></td>
                                            <td><?php echo $eveniment->data?></td>
                                            <td><?php echo $eveniment->locatie?></td>
                                            <td><?php echo $eveniment->participanti?> <span class="fa fa-user"></span></td>


                                        </tr>
                                        <?php endforeach?>
                                        
                                    </tbody>
                                </table>
                            </div>
							
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>În așteptare </h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
    
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td>Pacienți</td>
                                            <td><?php echo $pacienti_in_asteptare?></td>
                                            


                                        </tr>
                                        <tr>
                                            
                                            <td>Donatori</td>
                                            <td><?php echo $donatori_in_asteptare?></td>
                                            


                                        </tr>

                                        <tr>
                                            
                                            <td>Spitale</td>
                                            <td><?php echo $spitale_in_asteptare?></td>
                                            


                                        </tr>
                                        <tr>
                                            
                                            <td>Evenimente</td>
                                            <td><?php echo $evenimente_in_asteptare?></td>
                                            


                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>


            </div> 

            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Donatori </h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            
                                            <th>Grupa</th>
                                            <th>Numărul de donatori</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr>
                                            <td>0</td>
                                            <td><?php echo $donatori_cu_grupa_0?></td>
                                        </tr>
                                        <tr>
                                            <td>A</td>
                                            <td><?php echo $donatori_cu_grupa_A?></td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td><?php echo $donatori_cu_grupa_B?></td>
                                        </tr>
                                        <tr>
                                            <td>AB</td>
                                            <td><?php echo $donatori_cu_grupa_AB?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 4px; width: 370px; height: 287px" src="<?php echo base_url('assets/img/grupe-rh.jpg') ?>"/>
                </div>

                <div class="col-md-5">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn" style="padding-top: 20px;">
                                <div class="recent-items-title">
                                    <h2>Căutare Donatori:</h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <div >
                                    <form method="get" action="<?php echo base_url('admin/d_skeyword')?>">
                                        <input type="text" name="d_key" id="d_search_box" class="form-control input-lg typeahead" placeholder="caută după CNP" />
                                    </form>
                                </div>
                            </div>

                            <div class="recent-items-ctn" style="padding-top: 40px; ">
                                <div class="recent-items-title">
                                    <h2>Căutare Pacienți:</h2>
                                </div>
                            </div>
                            <div class="recent-items-inn" style="padding-bottom: 10px;">
                                <div >
                                    <form method="get" action="<?php echo base_url('admin/p_skeyword')?>">
                                        <input type="text" name="p_key" id="p_search_box" class="form-control input-lg typeahead" placeholder="caută după Nume sau Prenume" />
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <br>

            </div>
            <div>
                <!-- <a href="<?php echo base_url('admin/send_sms')?>">send sms</a> -->
            </div>
        </div>
        </div>
    </div>
    <!-- End  Statistic area-->
    
<br>


 </div>




