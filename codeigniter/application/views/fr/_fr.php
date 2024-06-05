<div class="portlet light">
    <div class="portlet-title">
        <div class="caption caption-md">
            <i class="icon-globe font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Form Pertanyaan</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" id="frm_fr" class="form-horizontal form-bordered form-row-stripped">
            <div class="form-body">
            	<h3 class="form-section">Silahkan pilih sesuai kebutuhan anda</h3>
                
				<div class="form-group">
                    <label class="col-md-3 control-label">Budget</label>
                    <div class="col-md-9">
						<div class="col-md-1" style="margin-top:8px">Antara</div>
                    	<div class="col-md-5" style="width:150px" >
                        	<input type="text" name="inp[price][start]" class="form-control col-md-5 mask_currency"/>
                        </div>
                        <div class="col-md-1" style="margin-top:8px">Sampai</div>
                        <div class="col-md-5">
                        	<input type="text" name="inp[price][end]" class="form-control col-md-5 mask_currency" style="width:150px" />
                        </div>
						</br>
						</br>
                        <span class="help-block">Kosongkan pilihan budget jika tidak mempunyai budget khusus</span>
                    </div>
                </div>
				
				<!--<div class="form-group">
                    <label class="col-md-3 control-label">Budget</label>
                    <div class="col-md-9">
                    	<div class="col-md-5">
                        	<input type="text" name="inp[price][start]" class="form-control col-md-5 mask_currency" />
                        </div>
                        <div class="col-md-1" style="margin-top:8px">Sampai</div>
                        <div class="col-md-5">
                        	<input type="text" name="inp[price][end]" class="form-control col-md-5 mask_currency" />
                        </div>
                        <span class="help-block">Kosongkan pilihan budget jika tidak mempunyai budget khusus</span>
                    </div>
                </div>-->
				
                <div class="form-group">
                    <label class="col-md-3 control-label">Brand</label>
                    <div class="col-md-9">
                        <div class="brand-grid">
                            <?php foreach($brand as $b) { ?>
                                <label class="checkbox-inline brand-item">
                                    <input type="checkbox" name="inp[brand][]" id="<?= $b ?>" value="<?= $b ?>">
                                    <img src="cdn/icons/<?= $b ?>.png" width="100" height="56" alt="<?= str_replace('_', ' ', $b) ?>">
                                </label>
                            <?php } ?>
                            <span class="help-block">Jangan dicentang jika ingin memilih semua merk</span>
                        </div>
                    </div>
                </div>

         
                <div class="form-group">
                    <label class="col-md-3 control-label">Jenis</label>
                    <div class="col-md-9">
                        <div class="checkbox-list">
                        	<?php foreach($type as $id => $name) { ?>
                            <label class="checkbox-inline col-md-6" style="margin-left:0px; padding-left:0px">
                            <input type="checkbox" name="inp[type][]" id="" value="<?= $id ?>"> <img src="cdn/icons/<?= $id ?>.png" height="40"> &nbsp; <?= $name ?>
                            </label>
                            <?php } ?>
                            <span class="help-block">Jangan dicentang jika ingin memilih semua jenis</span>
                        </div>
                    </div>
                </div>
            	<h3 class="form-section">Please select one or more of the options below according to your needs.</h3>
                <?php foreach($fr as $f) { ?>                    
                <div class="form-group">
                    <?php $this->load->driver('crs'); $com = $this->crs->ontology->get_fr_comment($f); if(isset($com[0])) $c = $com[0]; else $c = ''; ?>
                    <label for="inputEmail1" class="col-md-3 control-label" title="<?= $c ?>">
                    	<img src="cdn/icons/<?= $f ?>.png" width="60" height="40" alt="<?= $c ?>"> &nbsp; <?= str_replace('_', ' ', $f) ?>
                    </label>
                    <div class="col-md-9">
                        <div class="radio-list">
                        	<label class="radio-inline">
                                <input type="radio" name="inp[usermodel][<?= $f ?>]" value="fh" checked="checked"> 
                                Must be fulfilled
                            </label>
                        	<label class="radio-inline">
                                <input type="radio" name="inp[usermodel][<?= $f ?>]" value="fs"> 
                                Better to fulfill
                            </label>
                        	<label class="radio-inline">
                                <input type="radio" name="inp[usermodel][<?= $f ?>]" value="fx"> 
                                Not Required
                            </label>
                        </div>
                    </div>
                </div>
            	<?php } ?>
            </div>
            <div class="form-actions">
                <button type="button" onclick="recommend_u1()" class="btn purple">Recommend &nbsp; <i class="fa fa-long-arrow-right"></i></button>
            </div>
        </form>
    </div>
</div>