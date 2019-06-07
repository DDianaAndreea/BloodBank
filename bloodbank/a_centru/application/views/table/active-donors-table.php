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
                                        <h2>Donatori activi</h2>
                                        <form method="post" action="<?php echo base_url('donatori/skeyword')?>">
                                            <input type="text" style="width:490px; " name="don_key" id="don_search_box"  class="form-control input-lg typeahead" placeholder="caută donator după Nume, Prenume sau Grupa Sanguină" />
                                        </form>
                            
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
                        <div class="basic-tb-hd" >
                            
                        </div>
                        <div class="bsc-tbl-cds" id="result">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Nume</th>
                                        <th>Prenume</th>
                                        <th>Grupa Sanguină</th>
                                        <th>Rh</th>
                                        <th>Data ultimei donări</th>
                                        <th>Chestionarul donatorului</th>
                                        <th>Carnetul donatorului</th>
                                        <th>A donat Acum </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($donatori as $donator):?>
                                    <tr>
                                        <td><?php echo $donator->nume?></td>
                                        <td><?php echo $donator->prenume?></td>
                                        <td><?php echo $donator->grupa_sanguina?></td>
                                        <td><?php echo $donator->rh?></td>
                                        <td><?php foreach($d as $donator_carnet):?>
                                                <?php if ($donator->ID== $donator_carnet->id): ?>
                                                    <?php echo $donator_carnet->data_ultimei_donari?>
                                                <?php endif?>
                                            <?php endforeach?></td>
                                        
                                        <td><a class="fa fa-file btn" style="color:#8B0000" href="<?php echo base_url('donatori/chestionar/'.$donator->ID)?>"></a> </td>
                                        <td><a class="fa fa-id-card btn" style="color:#8B0000" href="<?php echo base_url('donatori/carnetul_donatorului/'.$donator->ID)?>"></a> </td>
                                        <td><a class="fa fa-check-circle btn" style="color:green" href="<?php echo base_url('donatori/donare_azi/'.$donator->ID.'/'.$donator->grupa_sanguina.'/'.$donator->rh) ?>"> </a>
                                            </td>
                                    </tr>
                                    <?php endforeach?>
                                    
                                </tbody>
                            </table>  
                        </div>
                    </div>
                </div>








<!-- <script>
$(document).ready(function(){

    load_data();

    function load_data(query)
    {
        $.ajax({
            url:"<?php echo base_url(); ?>donatori/fetch",
            method:"POST",
            data:{query:query},
            success:function(data){
                $('#result').html(data);
            }
        })
    }

    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();
        }
    });

});
</script> -->