    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Rezultate găsite pentru donatorul căutat:</h2>
                                        
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
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>CNP</th>
                                        <th>Serie</th>
                                        <th>Numar</th>
                                        <th>Nume și Prenume</th>
                                        <th>Localitate și Județ</th>
                                        <th>Adresa</th>
                                        <th>Data ultimei donări</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($donatori as $donator):?>
                                    <tr>
                                        <td><?php echo $donator->cnp?></td>
                                        <td><?php echo $donator->seria?></td>
                                        <td><?php echo $donator->numarul?></td>
                                        <td><?php foreach($d_a as $donator_info_a):?>
                                                <?php if ($donator->id== $donator_info_a->ID): ?>
                                                    <?php echo $donator_info_a->nume?>
                                                    <?php echo $donator_info_a->prenume?> -ACTIV
                                                    <a class="fa fa-check-circle btn" style="color:green" href="<?php echo base_url('donatori/donare_azi_home/'.$donator->id.'/'.$donator_info_a->grupa_sanguina.'/'.$donator_info_a->rh) ?>"> </a>
                                            
                                                <?php endif?>
                                        <?php endforeach?> 
                                            <?php foreach($d_i as $donator_info_i):?>
                                                <?php if ($donator->id== $donator_info_i->ID): ?>
                                                    <?php echo $donator_info_i->nume?>
                                                    <?php echo $donator_info_i->prenume?> -INACTIV
                                                <?php endif?>
                                        <?php endforeach?>
                                            <?php foreach($d_r as $donator_info_r):?>
                                                <?php if ($donator->id== $donator_info_r->ID): ?>
                                                    <?php echo $donator_info_r->nume?>
                                                    <?php echo $donator_info_r->prenume?> -RESPINS
                                                <?php endif?>
                                        <?php endforeach?>
                                        </td> 
                                        <td><?php echo $donator->localitate?>
                                            <?php echo $donator->judet?></td>
                                        <td><?php echo $donator->adresa?></td>
                                        <td><?php echo $donator->data_ultimei_donari?></td>

                                         
                                        <td><a class="fa fa-file btn" style="color:#8B0000" href="<?php echo base_url('donatori/chestionar/'.$donator->id)?>"></a> </td>
                                        <td><a class="fa fa-id-card btn" style="color:#8B0000" href="<?php echo base_url('donatori/carnetul_donatorului/'.$donator->id)?>"></a> </td>
                                      
                                    </tr>
                                    <?php endforeach?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>