<form method="POST" action="<?php echo $url['own_name'];?>c=seo&a=doSaveParameter" class='info-form' data-submit-ajax='1'>
  <div class="metadmin-fmbx">
    <h3 class='example-title'><?php echo $word['columnmtitle'];?><?php echo $word['seting'];?></h3>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['setseohomeKey'];?></label>
      </dt>
      <dd>
        <div class='form-group clearfix'>
          <input type="text" name="met_hometitle" class="form-control">
          <span class="text-help ml-2"><?php echo $word['setseoTip10'];?></span>
        </div>
      </dd>
    </dl>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['setseotitletype'];?></label>
      </dt>
      <dd>
        <div class='form-group'>
          <div class="custom-control custom-radio ">
            <input type="radio" name="met_title_type" value='0' class="custom-control-input met_title_type-0"
              id="met_title_type-0" />
            <label class="custom-control-label" for="met_title_type-0"><?php echo $word['setseotitletype1'];?></label>
          </div>
          <div class="custom-control custom-radio ">
            <input type="radio" name="met_title_type" value='1' class="custom-control-input met_title_type-1"
              id="met_title_type-1" />
            <label class="custom-control-label" for="met_title_type-1"><?php echo $word['setseotitletype3'];?></label>
          </div>
          <div class="custom-control custom-radio ">
            <input type="radio" name="met_title_type" value='2' class="custom-control-input met_title_type-2"
              id="met_title_type-2" />
            <label class="custom-control-label" for="met_title_type-2"><?php echo $word['setseotitletype2'];?></label>
          </div>
          <div class="custom-control custom-radio ">
            <input type="radio" name="met_title_type" value='3' class="custom-control-input met_title_type-3"
              id="met_title_type-3" />
            <label class="custom-control-label" for="met_title_type-3"><?php echo $word['setseotitletype4'];?></label>
          </div>
          <span class="text-help "><?php echo $word['setseoTip14'];?></span>
        </div>
      </dd>
    </dl>
    <h3 class='example-title'><?php echo $word['unitytxt_15'];?></h3>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['301jump'];?></label>
      </dt>
      <dd>
        <div class='form-group clearfix'>
          <input type="checkbox" data-plugin="switchery" name="met_301jump" value='0'>
          <span class="text-help ml-2"><?php echo $word['301jumpDescription'];?></span>
        </div>
      </dd>
    </dl>
      <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['gotohttps'];?></label>
      </dt>
      <dd>
        <div class='form-group clearfix'>
          <input type="checkbox" data-plugin="switchery" name="met_https" value='0'>
          <span class="text-help ml-2"><?php echo $word['gotohttps_tips'];?></span>
        </div>
      </dd>
    </dl>
      <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['copyright_nofollow'];?></label>
      </dt>
      <dd>
        <div class='form-group clearfix'>
          <input type="checkbox" data-plugin="switchery" name="met_copyright_nofollow" value='0'>
          <span class="text-help ml-2"><?php echo $word['copyright_nofollow_description'];?></span>
        </div>
      </dd>
    </dl>

      <dl>
        <dt>
          <label class='form-control-label'>Canonical</label>
        </dt>
        <dd>
          <div class='form-group clearfix'>
              <input type="checkbox" data-plugin="switchery" name="met_seo_canonical" value='0'>
              <span class="text-help ml-2">在head标签中添加 rel="canonical" link 标记</span>
          </div>
        </dd>
    </dl>

    <h3 class='example-title'><?php echo $word['unitytxt_25'];?></h3>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['setseoKey'];?></label>
      </dt>
      <dd>
        <div class='form-group'>
          <input type="text" name="met_keywords" class="form-control" />
          <span class="text-help ml-2"><?php echo $word['seotips1'];?></span>
        </div>
      </dd>
    </dl>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['setseoTip6'];?></label>
      </dt>
      <dd>
        <div class='form-group'>
          <input type="text" name="met_alt" class="form-control" />
          <span class="text-help ml-2"><?php echo $word['setseoTip7'];?></span>
        </div>
      </dd>
    </dl>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['setseoTip8'];?></label>
      </dt>
      <dd>
        <div class='form-group'>
          <input type="text" name="met_atitle" class="form-control" />
          <span class="text-help ml-2"><?php echo $word['setseoTip9'];?></span>
        </div>
      </dd>
    </dl>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['setseoLogoKeyword'];?></label>
      </dt>
      <dd>
        <div class='form-group'>
          <input type="text" name="met_logo_keyword" class="form-control" />
          <span class="text-help ml-2"><?php echo $word['temSupport'];?></span>
        </div>
      </dd>
    </dl>

    <h3 class='example-title'><?php echo $word['admin_tag_setting1'];?></h3>
    <dl>
      <dt>
				<label class='form-control-label'><?php echo $word['admin_tag_setting2'];?></label>
			</dt>
          <dd class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="tag_search_type_2" name="tag_search_type" value='module' class="custom-control-input" data-checked='<?php echo $c['tag_search_type'];?>' required/>

                  <label class="custom-control-label" for="tag_search_type_2"><?php echo $word['by_module'];?></label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="tag_search_type_3" name="tag_search_type" value='column' class="custom-control-input" />

                  <label class="custom-control-label" for="tag_search_type_3"><?php echo $word['admin_tag_setting3'];?></label>
              </div>
          </dd>
      </dl>
      <dl>
      <dt>
				<label class='form-control-label'><?php echo $word['admin_tag_setting4'];?></label>
			</dt>
          <dd class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="tag_show_range_1" name="tag_show_range" value='0' data-checked='<?php echo $c['tag_show_range'];?>' required class="custom-control-input" />
                  <label class="custom-control-label" for="tag_show_range_1"><?php echo $word['search'];?></label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="tag_show_range_2" name="tag_show_range" value='1' class="custom-control-input" />

                  <label class="custom-control-label" for="tag_show_range_2"><?php echo $word['admin_tag_setting5'];?></label>
              </div>
          </dd>
      </dl>
      <dl>
        <dt>
          <label class='form-control-label'><?php echo $word['admin_tag_setting6'];?></label>
        </dt>
        <dd>
          <div class='form-group'>
            <input type="number" name="tag_show_number" class="form-control" value="<?php echo $c['tag_show_number'];?>"/>
          </div>
        </dd>
      </dl>
    <?php
    $editor=array(
      'title'=>$word['404page'],
      'dt'=>$word['404page'],
      'name'=>'met_404content',
      'width'=>700
    );
    ?>
    <?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$editor['title']=$editor['title']?$editor['title']:$word['contentdetail'];
$editor['name']=$editor['name']?$editor['name']:'content';
$editor['value']=$editor['value']?$editor['value']:($data['list']?$data['list']['content']:'');
if($data['list']){
	$data['classnow']=intval($data['list']['class3'])?$data['list']['class3']:(intval($data['list']['class2'])?$data['list']['class2']:$data['list']['class1']);
}
?>
    <?php if(!$editor['no_title']){ ?>
<h3 class='example-title'><?php echo $editor['title'];?><?php echo $word['marks'];?>    <?php if($data['n']=='about'){ ?><a href="<?php echo $url['site_admin'];?>#/column" target="_blank" class="text-help ml-2"><?php echo $word['admin_colunmmanage_v6'];?></a><?php } ?></h3>
<?php } ?>
<dl>
	    <?php if($editor['dt']){ ?>
	<dt>
		<label class='form-control-label'><?php echo $editor['dt'];?><?php echo $word['marks'];?></label>
	</dt>
	<?php } ?>
	<dd class='clearfix'>
		    <?php if($data['n']=='product'){ ?>
		<?php
		$checkbox_time=time();
		for ($i = 1; $i < 5; $i++) {
			$product_content[]=array(
				'value'=>$data['list']['content'.$i]
			);
		}
		?>
		<div class="nav nav-underline product-details-navtab position-relative" data-url="<?php echo $url['own_name'];?>c=product_admin&a=doGetColumnSeting">
			<a class="nav-link active" data-toggle="tab" href="#product-content-<?php echo $checkbox_time;?>"></a>
			        <?php
            $sub = is_array($product_content) ? count($product_content) : 0;
            $cycleindex = 50;
            
            if(!is_array($product_content) && $product_content){
                $product_content = explode('|',$product_content);
            }

            foreach ($product_content as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
			<?php $v['sort']=$v['_index']+1; ?>
			<a class="nav-link" data-toggle="tab" href="#product-content<?php echo $v['sort'];?>-<?php echo $checkbox_time;?>"></a>
			<?php }?>
			<button type="button" class="btn btn-outline-primary ml-2 position-absolute" style="right:0;top: 0;" data-toggle="modal" data-target=".product-details-tabset-modal" data-modal-url="ui_set/page_config/?n=column&c=index&a=doGetClassExtInfo&module=3&id=0&from=admin&classnow=<?php echo $data['classnow'];?>" data-modal-title="<?php echo $word['settings_tab'];?>" data-modal-style="z-index:1702;" data-modal-type="centered"><?php echo $word['settings_tab'];?></button>
		</div>
		<div class="tab-content mt-2 product-details-content hide">
			<div class="tab-pane fade show active" id="product-content-<?php echo $checkbox_time;?>">
				<textarea name="<?php echo $editor['name'];?>" data-plugin='editor' data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
				<prev hidden><?php echo $editor['value'];?></prev>
			</div>
			        <?php
            $sub = is_array($product_content) ? count($product_content) : 0;
            $cycleindex = 50;
            
            if(!is_array($product_content) && $product_content){
                $product_content = explode('|',$product_content);
            }

            foreach ($product_content as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
			<?php $v['sort']=$v['_index']+1; ?>
			<div class="tab-pane fade" id="product-content<?php echo $v['sort'];?>-<?php echo $checkbox_time;?>">
				<textarea name="content<?php echo $v['sort'];?>" data-plugin='editor' data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
				<prev hidden><?php echo $v['value'];?></prev>
			</div>
			<?php }?>
		</div>
		<?php }else{ ?>
		<textarea name="<?php echo $editor['name'];?>" data-plugin='editor' data-editor-x="<?php echo $editor['width'];?>" data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
		<prev hidden><?php echo $editor['value'];?></prev>
		    <?php if($editor['tips']){ ?>
		<span class="text-help ml-2"><?php echo $editor['tips'];?></span>
		<?php } ?>
		<?php } ?>
	</dd>
</dl>
<?php unset($editor); ?>
    <dl>
      <dt>
        <label class='form-control-label'><?php echo $word['data_null'];?></label>
      </dt>
      <dd>
        <div class='form-group'>
          <textarea type="text" name="met_data_null" class="form-control" rows="5"></textarea>
          <span class="text-help ml-2"><?php echo $word['temSupport'];?></span>
        </div>
      </dd>
    </dl>
    <?php
    $editor=array(
      'title'=>$word['unitytxt_26'],
      'dt'=>$word['setseoFoot'],
      'name'=>'met_foottext',
      'width'=>700
    );
    ?>
    <?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$editor['title']=$editor['title']?$editor['title']:$word['contentdetail'];
$editor['name']=$editor['name']?$editor['name']:'content';
$editor['value']=$editor['value']?$editor['value']:($data['list']?$data['list']['content']:'');
if($data['list']){
	$data['classnow']=intval($data['list']['class3'])?$data['list']['class3']:(intval($data['list']['class2'])?$data['list']['class2']:$data['list']['class1']);
}
?>
    <?php if(!$editor['no_title']){ ?>
<h3 class='example-title'><?php echo $editor['title'];?><?php echo $word['marks'];?>    <?php if($data['n']=='about'){ ?><a href="<?php echo $url['site_admin'];?>#/column" target="_blank" class="text-help ml-2"><?php echo $word['admin_colunmmanage_v6'];?></a><?php } ?></h3>
<?php } ?>
<dl>
	    <?php if($editor['dt']){ ?>
	<dt>
		<label class='form-control-label'><?php echo $editor['dt'];?><?php echo $word['marks'];?></label>
	</dt>
	<?php } ?>
	<dd class='clearfix'>
		    <?php if($data['n']=='product'){ ?>
		<?php
		$checkbox_time=time();
		for ($i = 1; $i < 5; $i++) {
			$product_content[]=array(
				'value'=>$data['list']['content'.$i]
			);
		}
		?>
		<div class="nav nav-underline product-details-navtab position-relative" data-url="<?php echo $url['own_name'];?>c=product_admin&a=doGetColumnSeting">
			<a class="nav-link active" data-toggle="tab" href="#product-content-<?php echo $checkbox_time;?>"></a>
			        <?php
            $sub = is_array($product_content) ? count($product_content) : 0;
            $cycleindex = 50;
            
            if(!is_array($product_content) && $product_content){
                $product_content = explode('|',$product_content);
            }

            foreach ($product_content as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
			<?php $v['sort']=$v['_index']+1; ?>
			<a class="nav-link" data-toggle="tab" href="#product-content<?php echo $v['sort'];?>-<?php echo $checkbox_time;?>"></a>
			<?php }?>
			<button type="button" class="btn btn-outline-primary ml-2 position-absolute" style="right:0;top: 0;" data-toggle="modal" data-target=".product-details-tabset-modal" data-modal-url="ui_set/page_config/?n=column&c=index&a=doGetClassExtInfo&module=3&id=0&from=admin&classnow=<?php echo $data['classnow'];?>" data-modal-title="<?php echo $word['settings_tab'];?>" data-modal-style="z-index:1702;" data-modal-type="centered"><?php echo $word['settings_tab'];?></button>
		</div>
		<div class="tab-content mt-2 product-details-content hide">
			<div class="tab-pane fade show active" id="product-content-<?php echo $checkbox_time;?>">
				<textarea name="<?php echo $editor['name'];?>" data-plugin='editor' data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
				<prev hidden><?php echo $editor['value'];?></prev>
			</div>
			        <?php
            $sub = is_array($product_content) ? count($product_content) : 0;
            $cycleindex = 50;
            
            if(!is_array($product_content) && $product_content){
                $product_content = explode('|',$product_content);
            }

            foreach ($product_content as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
			<?php $v['sort']=$v['_index']+1; ?>
			<div class="tab-pane fade" id="product-content<?php echo $v['sort'];?>-<?php echo $checkbox_time;?>">
				<textarea name="content<?php echo $v['sort'];?>" data-plugin='editor' data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
				<prev hidden><?php echo $v['value'];?></prev>
			</div>
			<?php }?>
		</div>
		<?php }else{ ?>
		<textarea name="<?php echo $editor['name'];?>" data-plugin='editor' data-editor-x="<?php echo $editor['width'];?>" data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
		<prev hidden><?php echo $editor['value'];?></prev>
		    <?php if($editor['tips']){ ?>
		<span class="text-help ml-2"><?php echo $editor['tips'];?></span>
		<?php } ?>
		<?php } ?>
	</dd>
</dl>
<?php unset($editor); ?>
    <?php
    $editor=array(
      'no_title'=>1,
      'dt'=>$word['setseoTip4'],
      'name'=>'met_seo',
      'width'=>700
    );
    ?>
    <?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$editor['title']=$editor['title']?$editor['title']:$word['contentdetail'];
$editor['name']=$editor['name']?$editor['name']:'content';
$editor['value']=$editor['value']?$editor['value']:($data['list']?$data['list']['content']:'');
if($data['list']){
	$data['classnow']=intval($data['list']['class3'])?$data['list']['class3']:(intval($data['list']['class2'])?$data['list']['class2']:$data['list']['class1']);
}
?>
    <?php if(!$editor['no_title']){ ?>
<h3 class='example-title'><?php echo $editor['title'];?><?php echo $word['marks'];?>    <?php if($data['n']=='about'){ ?><a href="<?php echo $url['site_admin'];?>#/column" target="_blank" class="text-help ml-2"><?php echo $word['admin_colunmmanage_v6'];?></a><?php } ?></h3>
<?php } ?>
<dl>
	    <?php if($editor['dt']){ ?>
	<dt>
		<label class='form-control-label'><?php echo $editor['dt'];?><?php echo $word['marks'];?></label>
	</dt>
	<?php } ?>
	<dd class='clearfix'>
		    <?php if($data['n']=='product'){ ?>
		<?php
		$checkbox_time=time();
		for ($i = 1; $i < 5; $i++) {
			$product_content[]=array(
				'value'=>$data['list']['content'.$i]
			);
		}
		?>
		<div class="nav nav-underline product-details-navtab position-relative" data-url="<?php echo $url['own_name'];?>c=product_admin&a=doGetColumnSeting">
			<a class="nav-link active" data-toggle="tab" href="#product-content-<?php echo $checkbox_time;?>"></a>
			        <?php
            $sub = is_array($product_content) ? count($product_content) : 0;
            $cycleindex = 50;
            
            if(!is_array($product_content) && $product_content){
                $product_content = explode('|',$product_content);
            }

            foreach ($product_content as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
			<?php $v['sort']=$v['_index']+1; ?>
			<a class="nav-link" data-toggle="tab" href="#product-content<?php echo $v['sort'];?>-<?php echo $checkbox_time;?>"></a>
			<?php }?>
			<button type="button" class="btn btn-outline-primary ml-2 position-absolute" style="right:0;top: 0;" data-toggle="modal" data-target=".product-details-tabset-modal" data-modal-url="ui_set/page_config/?n=column&c=index&a=doGetClassExtInfo&module=3&id=0&from=admin&classnow=<?php echo $data['classnow'];?>" data-modal-title="<?php echo $word['settings_tab'];?>" data-modal-style="z-index:1702;" data-modal-type="centered"><?php echo $word['settings_tab'];?></button>
		</div>
		<div class="tab-content mt-2 product-details-content hide">
			<div class="tab-pane fade show active" id="product-content-<?php echo $checkbox_time;?>">
				<textarea name="<?php echo $editor['name'];?>" data-plugin='editor' data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
				<prev hidden><?php echo $editor['value'];?></prev>
			</div>
			        <?php
            $sub = is_array($product_content) ? count($product_content) : 0;
            $cycleindex = 50;
            
            if(!is_array($product_content) && $product_content){
                $product_content = explode('|',$product_content);
            }

            foreach ($product_content as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
			<?php $v['sort']=$v['_index']+1; ?>
			<div class="tab-pane fade" id="product-content<?php echo $v['sort'];?>-<?php echo $checkbox_time;?>">
				<textarea name="content<?php echo $v['sort'];?>" data-plugin='editor' data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
				<prev hidden><?php echo $v['value'];?></prev>
			</div>
			<?php }?>
		</div>
		<?php }else{ ?>
		<textarea name="<?php echo $editor['name'];?>" data-plugin='editor' data-editor-x="<?php echo $editor['width'];?>" data-editor-y='    <?php if($editor['height']){ ?><?php echo $editor['height'];?><?php }else{ ?>500<?php } ?>' hidden></textarea>
		<prev hidden><?php echo $editor['value'];?></prev>
		    <?php if($editor['tips']){ ?>
		<span class="text-help ml-2"><?php echo $editor['tips'];?></span>
		<?php } ?>
		<?php } ?>
	</dd>
</dl>
<?php unset($editor); ?>
    <dl>
      <dt></dt>
      <dd>
        <button type="submit" class='btn btn-primary'><?php echo $word['Submit'];?></button>
      </dd>
    </dl>
  </div>
</form>