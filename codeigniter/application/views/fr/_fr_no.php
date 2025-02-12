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
            	<h3 class="form-section">Please select one or more of the options below according to your needs.</h3>
                <?php $reset = $this->session->userdata('reset'); if($reset) { $this->session->set_userdata(array('reset' => false)); ?>
                <div class="note note-bordered note-danger" style="text-align:center">
                    <h4>Maaf, sampai saat ini produk yang sesuai dengan kebutuhan anda masih terlalu banyak, sehingga kami akan menanyakan kembali dari awal, barangkali anda akan merubah kebutuhan anda.</h4>
                </div>
                <?php } ?>
                <?php foreach($fr as $f) { ?>                    
                <div class="form-group">
				    <?php $this->load->driver('crs'); $com = $this->crs->ontology->get_fr_comment($f); if(isset($com[0])) $c = $com[0]; else $c = ''; ?>
                    <label for="inputEmail1" class="col-md-3 control-label"> &nbsp; <?= str_replace('_', ' ', $f) ?></label>
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
                <button type="button" onclick="<?= $function ?>()" class="btn purple">Recommend &nbsp; <i class="fa fa-long-arrow-right"></i></button>
            </div>
        </form>
    </div>
</div>