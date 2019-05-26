        <div class="container">
            <div class="row">
               <?php foreach($donatori as $donator): ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2><?php echo $donator->nume?> <?php echo $donator->prenume?></h2>
                                    <h5><?php echo $donator->data_cererii?></h5>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Data nastere</th>
                                            <th>Sex</th>
                                            <th>Rh</th>
                                            <th>Grupa sanguina</th>
                                            <!-- <th style="width: 60px">Price</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=""><?php echo $donator->data_nastere?></td>
                                            <td><?php echo $donator->sex?></td>
                                            <td class=""><?php echo $donator->rh?></td>
                                            <td><?php echo $donator->grupa_sanguina?></td>
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
                                            <td ><?php echo $donator->email?></td>
                                            <td><?php echo $donator->telefon?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <a class="btn btn-danger"href="<?php echo base_url('donatori/chestionar/'.$donator->ID)?>">Chestionar</a>  
              
                        </div>

                    </div>
                    <br>
                </div>
                

                <?php endforeach?>
                

            </div>
            

        </div>
  