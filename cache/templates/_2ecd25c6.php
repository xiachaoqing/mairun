<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$readonly='';
$time = time();
$weburltext = $word['upfiletips10'].$url['web_site'];
if($_M['langlist']['web'][$_M['lang']]['link']){
    $readonly = 'readonly';
    $weburltext = $word['unitytxt_8'];
}
?>
<div class="met-web-set">
    <form method="POST" action="<?php echo $url['own_name'];?>c=info&a=doSaveInfo" data-submit-ajax="1" class='info-form'
          id="info-form" data-validate_order="#info-form">
        <div class="metadmin-fmbx">
            <h3 class='example-title'><?php echo $word['setbasicWebInfoSet'];?></h3>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['setbasicWebName'];?></label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_webname" class="form-control"></div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['linkLOGO'];?></label>
                </dt>
                <dd>
                    <div class='form-group'>
                        <div class="d-inline-block">
                            <input type="file" name="met_logo" value="" data-plugin='fileinput' accept="image/*">
                        </div>
                        <span class="text-help ml-2"><?php echo $word['suggested_size'];?> 180 * 60 (<?php echo $word['setimgPixel'];?>)</span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['mobile_logo'];?></label>
                </dt>
                <dd>
                    <div class='form-group'>
                        <div class="d-inline-block">
                            <input type="file" name="met_mobile_logo" value="" data-plugin='fileinput' accept="image/*">
                        </div>
                        <span class="text-help ml-2"><?php echo $word['suggested_size'];?> 180 * 50
              (<?php echo $word['setimgPixel'];?>)<br><?php echo $word['indexmobilelogoinfo'];?></span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['addbaricon'];?></label>
                </dt>
                <dd>
                    <div class='form-group'>
                        <div class="d-inline-block">
                            <input type="file" name="met_ico" value="../favicon.ico?<?php echo $time;?>"
                                   data-url="<?php echo $url['adminurl'];?>c=uploadify&m=include&a=doupico&data_key=" data-plugin='fileinput'
                                   accept="image/x-icon">
                        </div>
                        <span class="text-help ml-2">
              <?php echo $word['suggested_size'];?> 32 * 32 (<?php echo $word['setimgPixel'];?>)<?php echo $word['icontips'];?>
              <a href="https://www.baidu.com/s?wd=ico%E5%9B%BE%E6%A0%87%E5%88%B6%E4%BD%9C"
                 target="_blank"><?php echo $word['webset_tips2_v6'];?></a>
              <br />
              <?php echo $word['webset_tips1_v6'];?>
            </span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['linkKeys'];?></label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_keywords" class="form-control">
                        <span class="text-help ml-2"><?php echo $word['upfiletips13'];?></span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['upfiletips14'];?></label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <textarea name="met_description" rows="5" class='form-control'></textarea>
                        <span class="text-help ml-2"><?php echo $word['upfiletips15'];?></span>
                    </div>
                </dd>
            </dl>
            <h3 class='example-title'><?php echo $word['unitytxt_13'];?></h3>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['seticpinfo'];?></label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_icp_info" class="form-control">
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['setfootVersion'];?></label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_footright" class="form-control">
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['setfootAddressCode'];?></label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_footaddress" class="form-control">
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'><?php echo $word['linkcontact'];?></label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_foottel" class="form-control">
                    </div>
                </dd>
            </dl>
            <?php
            $editor=array(
                'dt'=>$word['setfootOther'],
                'no_title'=>1,
                'name'=>'met_footother',
                'height'=>100
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
                    <button type="submit" class='btn btn-primary'><?php echo $word['save'];?></button>
                </dd>
            </dl>
        </div>
    </form>
</div>