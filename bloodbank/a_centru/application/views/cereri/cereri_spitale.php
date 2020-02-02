        <div class="container">
            <div class="row">
               <?php foreach($spitale as $spital): ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2><?php echo $spital->denumire?></h2>
                                    <h5><?php echo $spital->data_cererii?></h5>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Cantitate</th>
                                            <th>Rh</th>
                                            <th>Grupa sanguină</th>
                                            <!-- <th style="width: 60px">Price</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=""><?php echo $spital->cantitate?></td>
                                            <td><?php echo $spital->rh?></td>
                                            <td class=""><?php echo $spital->grupa?></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td ><?php echo $spital->email?></td>
                                            <td><?php echo $spital->telefon?></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table class="table table-inner table-vmiddle">
                                <thead>
                                    <tr>
                                        <th>Cazul</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td ><?php echo $spital->cazul?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-success" href="<?php echo base_url('spitale_op/make_active/'.$spital->ID) ?>">Acceptă</a>
                            <a class="btn btn-danger"href="<?php echo base_url('spitale_op/delete/'.$spital->ID)?>">Șterge</a>
              
                        </div>

                    </div>
                    <br>
                </div>
                

                <?php endforeach?>
                

            </div>
            <br>
            

        </div>
