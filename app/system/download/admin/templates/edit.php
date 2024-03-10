<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
?>
<include file="pub/content_details/head"/>
<input type="hidden" name="imgurl_l" value="{$data.list.imgurl}">
<h3 class='example-title'>{$word.unitytxt_34}</h3>
<?php
$checkbox_time=time();
$upload = array(
    'title' => $word['downloadurl'],
    'name' => 'downloadurl',
    'value' => $data['list']['downloadurl'],
    'type' => 'file',
    'noimage' => 1,
    'drop_zone_enabled' => 1,
    'preview_class' => 'hide',
    'noprogress' => 1,
    'prev_input'=>1,
    'callback' => 'downloadFilesize'
);
?>
<include file="pub/content_details/upload"/>
<dl>
    <dt>
        <label class='form-control-label'>{$word.setfilesize}</label>
    </dt>
    <dd>
        <div class='form-group clearfix'>
            <input type="text" name="filesize" value="{$data.list.filesize}" class="form-control w-a">
            <span class="text-help ml-2">KB</span>
        </div>
    </dd>
</dl>
<include file="pub/content_details/paraset"/>
<include file="pub/content_details/content_seo_other"/>
<?php
$upload = array(
    'title' => $word['coverimg'],
    'name' => 'imgurl',
    'value' => $data['list']['imgurl'],
    'tips' => $word['tips7_v6']
);
?>
<include file="pub/content_details/upload"/>
</div>
</form>