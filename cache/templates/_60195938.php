<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
?>
<div class="met-seo">
  <form method="POST" action="<?php echo $url['own_name'];?>c=pseudo_static&a=doSavePseudoStatic" class="info-form" data-submit-ajax="1">
    <div class="metadmin-fmbx">
      <h3 class="example-title"><?php echo $word['unitytxt_1'];?></h3>
      <div class="alert dark alert-primary radius0"><?php echo $word['seotips3'];?></div>
      <dl>
        <dt>
          <label class="form-control-label"><?php echo $word['sys_static'];?></label>
        </dt>
        <dd>
          <div class="form-group clearfix">
            <input type="checkbox" data-plugin="switchery" name="met_pseudo"  value='0'/>
            <span class="text-help ml-2"><?php echo $word['seotips26'];?></span>
          </div>
        </dd>
      </dl>
      <div class="alert dark alert-primary radius0"><?php echo $word['mod_rewrite_column'];?></div>
      <h3 class="example-title">URL<?php echo $word['structure_mode'];?></h3>
      <dl>
        <dt>
          <label class="form-control-label"><?php echo $word['defaultlangtag'];?></label>
        </dt>
        <dd>
          <div class="form-group clearfix">
            <input type="checkbox" data-plugin="switchery" name="met_defult_lang"  value='0'/>
            <span class="text-help ml-2"><?php echo $word['seotips4'];?></span>
          </div>
        </dd>
      </dl>

      <dl>
        <dt>
          <label class="form-control-label"><?php echo $word['seotips6'];?></label>
        </dt>
        <dd>
          <div class="form-group clearfix">
            <span class="text-help ml-2"><?php echo $word['admin_seo1'];?></span>
          </div>
        </dd>
      </dl>
      <dl>
        <dt>
          <label class="form-control-label"><?php echo $word['setskinListPage'];?></label>
        </dt>
        <dd>
          <div class="form-group clearfix">
            <span class="text-help ml-2"><?php echo $word['admin_seo2'];?></span>
          </div>
        </dd>
      </dl>
      <dl>
        <dt>
          <label class="form-control-label"><?php echo $word['seotips9'];?></label>
        </dt>
        <dd>
          <div class="form-group clearfix">
            <span class="text-help ml-2"> <?php echo $word['admin_seo3'];?> </span>
          </div>
        </dd>
      </dl>
      <dl>
        <dt>
          <label class="form-control-label"><?php echo $word['pseudo_static'];?></label>
        </dt>
        <dd>
          <div class="form-group clearfix">
						<a href="javascript:;" class="watch-rule"
						data-toggle="modal"
						data-target=".pseudostatic-modal"
						data-modal-size="lg"
						data-modal-title="<?php echo $word['pseudo_static'];?>"
						data-modal-footerok="0"
						><?php echo $word['pseudo_static'];?></a>
            <span class="text-help ml-2"><?php echo $word['manually_static_rules'];?></span>
          </div>
        </dd>
      </dl>
      <dl>
        <dt></dt>
        <dd>
          <button type="submit" class="btn btn-primary"><?php echo $word['Submit'];?></button>
        </dd>
      </dl>
    </div>
  </form>
</div>
