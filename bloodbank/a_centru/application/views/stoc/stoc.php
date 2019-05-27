 <!-- Start Status area -->
   <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">

                            <h2><span >Grupa 0</span></h2>
                            <h4>Cantitate cu rh + : <span class="counter"><?php echo $grupa0[0]->cantitate ?></span></h4>
                            <h4>Cantitate cu rh - : <span class="counter"><?php echo $grupa0[1]->cantitate ?></span></h4>
                        </div>

                    </div>
                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">

                            <h2><span >Grupa A</span></h2>
                            <h4>Cantitate cu rh + : <span class="counter"><?php echo $grupaA[0]->cantitate ?></span></h4>
                            <h4>Cantitate cu rh - : <span class="counter"><?php echo $grupaA[1]->cantitate ?></span></h4>
                        </div>
                        
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">

                            <h2><span >Grupa B</span></h2>
                            <h4>Cantitate cu rh + : <span class="counter"><?php echo $grupaB[0]->cantitate ?></span></h4>
                            <h4>Cantitate cu rh - : <span class="counter"><?php echo $grupaB[1]->cantitate ?></span></h4>
                        </div>
                        
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">

                            <h2><span >Grupa AB</span></h2>
                            <h4>Cantitate cu rh + : <span class="counter"><?php echo $grupaAB[0]->cantitate ?></span></h4>
                            <h4>Cantitate cu rh - : <span class="counter"><?php echo $grupaAB[1]->cantitate ?></span></h4>
                        </div>
                        
                    </div>
                </div> 
                
                


            </div>
        </div>
    </div>
 

<!-- End Status area-->

<br>
<div class="container">
                <div class="row">
                <div class="col col-md-4">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Actualizare stocuri </h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            
                                            <th class="col col-md-8"></th>
                                            <th ></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td>Creste stocul</td>
                                            <td ><a href="" class="fa fa-plus btn" style="color:#8B0000" data-toggle="modal" data-target="#cresteStoc"></a></td>
                                        </tr>
                                        <tr>
                                            
                                            <td>Scade stocul</td>
                                            <td ><a href="" class="fa fa-minus btn" style="color:#8B0000" data-toggle="modal" data-target="#scadeStoc"></a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
							
                        </div>
                    </div>
                </div>

          



            </div> 

<!-- Modal -->
  <div class="modal fade" id="cresteStoc" >
  	<form action="<?php echo base_url('stoc/creste_stoc')?>" method="POST">
    	<div class="modal-dialog modal-sm">
      	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Actualizare stocuri</h4>
        </div>
        <div class="modal-body">
          <p>Adauga la stocul existent</p>
          <p>Cantitatea:
          	<input class="form-control" type="text" name="cantitate_de_scazut" placeholder=" numarul de pungi">
          </p>
          <p>Grupa sanguina :</p>
          	<select class="form-control" name="grupa">
          		<option value="">alege grupa </option>
          			<?php foreach ($stocuri as $stoc): ?>
          				<?php if($stoc->rh=='+'):?>
          					<option value="<?php echo $stoc->grupa?> "><?php echo $stoc->grupa?></option>
          				<?php endif?>
          			<?php endforeach?>
          	</select>
          <p>Rh :</p>
          	<select class="form-control" name="rh">
          		<option value="">alege rh </option>
          					<option value="+ "> +</option>
          					<option value="- "> -</option>
          	</select>
        </div>
        <br>
        <div class="modal-footer" >
          <input  class="btn btn-default" style="background-color: #8B0000"  type="submit" name="submit" value="Adauga" >
        </div>
      </div>
    </div>
</form>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="scadeStoc"  >
  	<form action="<?php echo base_url('stoc/scade_stoc')?>" method="POST">
    	<div class="modal-dialog modal-sm">
      	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Actualizare stocuri</h4>
        </div>
        <div class="modal-body">
          <p>Scade din stocul existent</p>
          <p>Cantitatea:
          	<input class="form-control" type="text" name="cantitate_de_scazut" placeholder=" numarul de pungi">
          </p>
          <p>Grupa sanguina :</p>
          	<select class="form-control" name="grupa">
          		<option value="">alege grupa </option>
          			<?php foreach ($stocuri as $stoc): ?>
          				<?php if($stoc->rh=='+'):?>
          					<option value="<?php echo $stoc->grupa?> "><?php echo $stoc->grupa?></option>
          				<?php endif?>
          			<?php endforeach?>
          	</select>
          <p>Rh :</p>
          	<select class="form-control" name="rh">
          		<option value="">alege rh </option>
          					<option value="+ "> +</option>
          					<option value="- "> -</option>
          	</select>
        </div>
        <br>
        <div class="modal-footer" >
          <input  class="btn btn-default" style="background-color: #8B0000"  type="submit" name="submit" value="Scade" >
        </div>
      </div>
    </div>
</form>
</div>




 </div>