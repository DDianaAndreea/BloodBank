        <div class="container">
            <div class="row">
               <?php foreach($evenimente as $eveniment): ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2><?php echo $eveniment->prenume?> <?php echo $eveniment->nume?></h2>
                                    <h5><?php echo $eveniment->data_cererii?></h5>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td ><?php echo $eveniment->email?></td>
                                            <td><?php echo $eveniment->telefon?></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table class="table table-inner table-vmiddle">
                                <thead>
                                    <tr>
                                        <th>Mesaj</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td ><?php echo $eveniment->mesaj?></td>
                                    </tr>
                                </tbody>
                            </table> 
                            <a class="btn btn-danger"href="<?php echo base_url('evenimente_op/delete_propunere/'.$eveniment->ID)?>">Șterge</a>
              
                        </div>

                    </div>
                    <br>
                </div>
                

                <?php endforeach?>
                

            </div>
            <br>
            

        </div>
