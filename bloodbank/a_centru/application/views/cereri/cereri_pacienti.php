        <div class="container">
            <div class="row">
               <?php foreach($pacienti as $pacient): ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2><?php echo $pacient->nume?> <?php echo $pacient->prenume?></h2>
                                    <h5><?php echo $pacient->data_cererii?></h5>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Dată naștere</th>
                                            <th>Sex</th>
                                            <th>Rh</th>
                                            <th>Grupa sanguină</th>
                                            <!-- <th style="width: 60px">Price</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=""><?php echo $pacient->data_nastere?></td>
                                            <td><?php echo $pacient->sex?></td>
                                            <td class=""><?php echo $pacient->rh?></td>
                                            <td><?php echo $pacient->grupa_sanguina?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th >Public</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td ><?php echo $pacient->email?></td>
                                            <td><?php echo $pacient->telefon?></td>
                                            <td ><?php echo $pacient->public?></td>
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
                                            <td ><?php echo $pacient->caz?></td>
                                            
                                        </tr>
                                    </tbody>
                            </table>
                            <a class="btn btn-success" href="<?php echo base_url('pacienti_op/make_active/'.$pacient->ID) ?>">Acceptă</a>
                            <a class="btn btn-danger"href="<?php echo base_url('pacienti_op/delete/'.$pacient->ID)?>">Șterge</a>
              
                        </div>

                    </div>
                    <br>
                </div>
                

                <?php endforeach?>
                

            </div>
            

        </div>
