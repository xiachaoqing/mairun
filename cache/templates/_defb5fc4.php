<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$head_tab_active=isset($data['head_tab_active'])?$data['head_tab_active']:0;
$head_tab=array(
	array('title'=>$word['article6'],'url'=>'seo/seo/?nocommon=1'),
	array('title'=>$word['pseudostatic'],'url'=>'seo/pseudostatic'),
	array('title'=>$word['staticpage'],'url'=>'seo/staticpage'),
	array('title'=>$word['anchor_text'],'url'=>'seo/anchor'),
	array('title'=>"SiteMap",'url'=>'seo/sitemap'),
	array('title'=>$word['indexsetFriendly'],'url'=>'seo/link'),
	array('title'=>$word['tag'],'url'=>'seo/tags/?n=tags&c=index&a=doGetParentColumns&screen=1'),
	array('title' => $word['mod11'], 'url' => 'search/global/?c=index&a=doGetGlobalSearch','reload'=>1),
    array('title' => $word['column_search'], 'url' => 'search/column/?c=index&a=doGetColumnSearch','reload'=>1),
    array('title' => $word['advanced_search'], 'url' => 'search/advanced/?c=index&a=doGetAdvancedSearch','reload'=>1),
    //array('title' => '搜索设置', 'url' => 'search/setup/?c=index&a=doGetSearchSet')
);
$head_tab_ajax=/* $head_tab_reload = */ 1;
?>
<div class="met-seo">
<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$head_tab_active=isset($data['head_tab_active'])?$data['head_tab_active']:(isset($head_tab_active)?$head_tab_active:0);
$content_time=time();
?>
    <?php if($head_tab){ ?>
<nav class="nav nav-underline mb-3 met-headtab rounded-xs position-sticky    <?php if($head_tab_ajax && !$no_bg){ ?>metadmin-content-min py-2<?php } ?> bg-white"    <?php if($head_tab_ajax){ ?>data-ajaxchange='1'<?php } ?>     <?php if($head_tab_reload){ ?>data-reload="1"<?php } ?>>
	        <?php
            $sub = is_array($head_tab) ? count($head_tab) : 0;
            $cycleindex = 50;
            
            if(!is_array($head_tab) && $head_tab){
                $head_tab = explode('|',$head_tab);
            }

            foreach ($head_tab as $index => $val) {
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
	  <a
		class="nav-link    <?php if($head_tab_active==$v['_index']){ ?>active<?php } ?>"
	  	    <?php if($head_tab_ajax && !$v['target']){ ?>
		data-url="<?php echo $v['url'];?>" data-toggle="pill" href="#met-headtab-content-<?php echo $content_time;?>-<?php echo $v['_index'];?>"
		<?php }else{ ?>
		href="<?php echo $v['url'];?>"
		<?php } ?>
		    <?php if($v['reload']){ ?>data-reload="1"<?php } ?>
		    <?php if($v['target']){ ?>target="_blank"<?php } ?>
		><?php echo $v['title'];?></a>
  	<?php }?>
</nav>
    <?php if($head_tab_ajax){ ?>
<?php $head_tab_url=$head_tab[$head_tab_active]['url']; ?>
<div class="tab-content">
	        <?php
            $sub = is_array($head_tab) ? count($head_tab) : 0;
            $cycleindex = 50;
            
            if(!is_array($head_tab) && $head_tab){
                $head_tab = explode('|',$head_tab);
            }

            foreach ($head_tab as $index => $val) {
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
	    <?php if(!$v['target']){ ?>
	<div class="tab-pane fade     <?php if(!$no_bg){ ?>bg-white p-4<?php } ?>    <?php if($v['_index']==$head_tab_active){ ?>show active<?php } ?>" id="met-headtab-content-<?php echo $content_time;?>-<?php echo $v['_index'];?>">
	</div>
	<?php } ?>
	<?php }?>
</div>
<?php } ?>
<?php
unset($head_tab_ajax);
unset($head_tab_active);
unset($head_tab);
?>
<?php } ?>
</div>