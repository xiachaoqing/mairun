<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
?>
    <?php if(!$_M['form']['sidebar_reload']){ ?>
<?php
$html_class=$body_class='h-100';
$html_class.=' met-admin';
?>
<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$basic_admin_css_filemtime = filemtime(PATH_PUBLIC_ADMIN.'css/basic_admin.css');
$met_title.=($met_title?'-':'').$word['metinfo'];
$synchronous=$_M['langlist']['admin'][$_M['langset']]['synchronous'];
$favicon_filemtime = filemtime(PATH_WEB."favicon.ico");
?>
<!DOCTYPE HTML>
<html class="<?php echo $html_class;?>">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="robots" content="noindex,nofllow">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
<meta name="format-detection" content="telephone=no">
<title><?php echo $met_title;?></title>
<meta name="generator" content="MetInfo V<?php echo $c['metcms_v'];?>" data-variable="<?php echo $url['site'];?>|<?php echo $_M['lang'];?>|<?php echo $synchronous;?>|<?php echo $c['met_skin_user'];?>||||">
<link href="<?php echo $url['site'];?>favicon.ico?<?php echo $favicon_filemtime;?>" rel="shortcut icon" type="image/x-icon">
<link href="<?php echo $url['public_admin'];?>css/basic_admin.css?<?php echo $basic_admin_css_filemtime;?>" rel='stylesheet' type='text/css'>
</head>
<!--['if lte IE 9']>
<div class="text-center mb-0 bg-danger alert">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
    </button>
    <?php echo $word['browserupdatetips'];?>
</div>
<!['endif']-->
<body class="<?php echo $body_class;?>">
    <?php if(!$_M['form']['noside']){ ?>
<div class="h-100 cover d-flex">
	<div class="metadmin-sidebar h-100 transition500">
		<button type="button" class="btn btn-default p-0 rounded-circle text-center position-absolute btn-adminsidebar-control"><i class="fa-angle-left h4 mb-0 position-relative" style="top:-1px;"></i></button>
		<div class="metadmin-logo d-flex align-items-center py-2 px-4" style="height: 62px;">
			<a href="#/home" title="<?php echo $word['metinfo'];?>" class="d-block">
				<img src="<?php echo $data['met_admin_logo'];?>" alt="<?php echo $word['metinfo'];?>" class="img-fluid" style="max-height: 62px;">
			</a>
		</div>
		<!-- <hr class="my-0"> -->
		<ul class="list-unstyled mb-0 mt-3 metadmin-sidebar-nav">
			<li class="py-3 px-4 transition500">
				<a href="#/home"><?php echo $word['backstage'];?></a>
				<span class="mx-1">|</span>
				<a href="<?php echo $url['site'];?>index.php?lang=<?php echo $_M['lang'];?>" target="_blank"><?php echo $word['homepage'];?></a>
				    <?php if($data['privilege']['navigation']=='metinfo' || strstr($data['privilege']['navigation'], '1802')){ ?>
				<span class="mx-1">|</span>
				<a href="<?php echo $url['site_admin'];?>?lang=<?php echo $_M['lang'];?>&n=ui_set" target="_blank"><?php echo $word['visualization'];?></a>
				<?php } ?>
			</li>
			<li class="transition500 position-relative">
				<a href="javascript:;" class="d-flex justify-content-between align-items-center px-4">
					<div><i class="fa-home mr-3"></i></div>
				</a>
				<ul class="sub list-unstyled text-nowrap py-2">
					<li class="transition500">
						<a href="#/home" title="<?php echo $msub['name'];?>" class="d-block px-4"><span><?php echo $word['backstage'];?></span></a>
						<a href="<?php echo $url['site'];?>index.php?lang=<?php echo $_M['lang'];?>" target="_blank" class="d-block px-4"><span><?php echo $word['homepage'];?></span></a>
						<a href="<?php echo $url['site_admin'];?>?lang=<?php echo $_M['lang'];?>&n=ui_set" class="d-block px-4"><span><?php echo $word['visualization'];?></span></a>
					</li>
				</ul>
			</li>
			<!-- <hr class="my-0"> -->
<?php } ?>
<?php } ?>
    <?php if(!$_M['form']['noside']){ ?>
			        <?php
            $sub = is_array($data['adminnav']['top']) ? count($data['adminnav']['top']) : 0;
            $cycleindex = 50;
            
            if(!is_array($data['adminnav']['top']) && $data['adminnav']['top']){
                $data['adminnav']['top'] = explode('|',$data['adminnav']['top']);
            }

            foreach ($data['adminnav']['top'] as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $m = $val;
            ?>
			<li class="transition500 position-relative">
				<a     <?php if($m['url']){ ?>href="#/<?php echo $m['url'];?>"<?php }else{ ?>href="javascript:;"<?php } ?> title="<?php echo $m['name'];?>" class="d-flex justify-content-between align-items-center px-4">
					<div><i class="metinfo-admin-icon metinfo-admin-icon-<?php echo $m['icon'];?> mr-3"></i><span><?php echo $m['name'];?></span></div>
					    <?php if($data['adminnav']['sub'][$m['id']]){ ?><span class="fa fa-caret-right h6 mb-0 position-relative"></span><?php } ?>
				</a>
				    <?php if($data['adminnav']['sub'][$m['id']]){ ?>
				<ul class="sub list-unstyled text-nowrap py-2">
					        <?php
            $sub = is_array($data['adminnav']['sub'][$m['id']]) ? count($data['adminnav']['sub'][$m['id']]) : 0;
            $cycleindex = 50;
            
            if(!is_array($data['adminnav']['sub'][$m['id']]) && $data['adminnav']['sub'][$m['id']]){
                $data['adminnav']['sub'][$m['id']] = explode('|',$data['adminnav']['sub'][$m['id']]);
            }

            foreach ($data['adminnav']['sub'][$m['id']] as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $msub = $val;
            ?>
					    <?php if($msub['url']||$data['adminnav']['sub'][$msub['id']]){ ?>
					<li class="transition500 position-relative">
						<a     <?php if($msub['url']){ ?>href="#/<?php echo $msub['url'];?>"<?php }else{ ?>href="javascript:;"<?php } ?> title="<?php echo $msub['name'];?>" class="d-block px-4"><i class="metinfo-admin-icon metinfo-admin-icon-<?php echo $msub['icon'];?> mr-3"></i><span><?php echo $msub['name'];?></span></a>
						    <?php if($data['adminnav']['sub'][$msub['id']]){ ?>
						<ul class="sub list-unstyled text-nowrap py-2">
							        <?php
            $sub = is_array($data['adminnav']['sub'][$msub['id']]) ? count($data['adminnav']['sub'][$msub['id']]) : 0;
            $cycleindex = 50;
            
            if(!is_array($data['adminnav']['sub'][$msub['id']]) && $data['adminnav']['sub'][$msub['id']]){
                $data['adminnav']['sub'][$msub['id']] = explode('|',$data['adminnav']['sub'][$msub['id']]);
            }

            foreach ($data['adminnav']['sub'][$msub['id']] as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $msub1 = $val;
            ?>
							<li class="transition500 position-relative">
								<a     <?php if($msub1['url']){ ?>href="#/<?php echo $msub1['url'];?>"<?php }else{ ?>href="javascript:;"<?php } ?> title="<?php echo $msub1['name'];?>" class="d-block px-4">    <?php if($msub1['icon']){ ?><i class="metinfo-admin-icon metinfo-admin-icon-<?php echo $msub1['icon'];?> mr-3"></i><?php } ?><span><?php echo $msub1['name'];?></span></a>
							</li>
							<?php }?>
						</ul>
						<?php } ?>
					</li>
					<?php } ?>
					<?php }?>
				</ul>
				<?php }else{ ?>
				<ul class="sub nosub hide list-unstyled text-nowrap py-2">
					<li class="transition500 position-relative">
						<a href="#/<?php echo $m['url'];?>" title="<?php echo $m['name'];?>" class="d-block px-4"><span><?php echo $m['name'];?></span></a>
					</li>
				</ul>
				<?php } ?>
			</li>
			<?php }?>
<?php } ?>
    <?php if(!$_M['form']['sidebar_reload']){ ?>
    <?php if(!$_M['form']['noside']){ ?>
		</ul>
	</div>
<?php } ?>
	<div class="metadmin-rightcontent h-100 met-scrollbar position-relative media-body" style="background: #F0F5F7;;overflow-x: hidden;">
		    <?php if(!$_M['form']['noside']){ ?>
		<?php
        $lang_name = $_M['langlist']['web'][$_M['lang']]['name'];
		?>
		<header class="metadmin-head navbar bg-white px-0 py-3" style="z-index: 1001;">
			<div class="container-fluid px-4">
				<div>
			        <div class="breadcrumb mb-0 p-0 d-none d-md-flex bg-none float-left mt-1 metadmin-breadcrumb">
			            <li class='breadcrumb-item'><?php echo $lang_name;?></li>
			        </div>
		        </div>
		        <div class="metadmin-head-right d-flex align-items-center">
                        <?php if($data['clear_cache']==1){ ?>
		        	<div class="btn-group mr-4">
		                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
		                    <i class="metinfo-admin-icon metinfo-admin-icon-clear-chache"></i>
		                    <span class="d-none d-md-inline-block"><?php echo $word['clearCache'];?></span>
		                </button>
		                <ul class="dropdown-menu dropdown-menu-right">
		                	<a href="<?php echo $url['own_form'];?>n=ui_set&c=index&a=doclear_cache" title="<?php echo $word['clearCache'];?>" class='dropdown-item px-3 clear-cache'><?php echo $word['system_cache'];?></a>
		                	<a href="<?php echo $url['own_form'];?>n=ui_set&c=index&a=doClearThumb" title="<?php echo $word['clearThumb'];?>" class='dropdown-item px-3 clear-cache'><?php echo $word['modimgurls'];?></a>
		                </ul>
		            </div>
					<?php } ?>
		                <?php if($data['function_complete']==1){ ?>
	                <a href="javascript:;" class="text-content mr-4" data-toggle="modal" data-target=".function-ency-modal" data-modal-size="lg" data-modal-url="#pub/function_ency/?n=index&c=index&a=get_auth" data-modal-refresh="one" data-modal-fullheight="1" data-modal-title="<?php echo $word['funcCollection'];?>" data-modal-oktext="" data-modal-notext="<?php echo $word['close'];?>">
	                    <i class="metinfo-admin-icon metinfo-admin-icon-function"></i>
	                    <span class="d-none d-md-inline-block"><?php echo $word['funcCollection'];?></span>
	                </a>
		            <?php } ?>
		            <div class="btn-group mr-4">
		                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
		                    <i class="metinfo-admin-icon metinfo-admin-icon-multilingualism"></i>
		                    <span class="d-none d-md-inline-block"><?php echo $lang_name;?></span>
		                </button>
		                <ul class="dropdown-menu dropdown-menu-right metadmin-head-langlist">
		                	        <?php
            $sub = is_array($_M['user']['langok']) ? count($_M['user']['langok']) : 0;
            $cycleindex = 50;
            
            if(!is_array($_M['user']['langok']) && $_M['user']['langok']){
                $_M['user']['langok'] = explode('|',$_M['user']['langok']);
            }

            foreach ($_M['user']['langok'] as $index => $val) {
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
		                        <a href="javascript:;" data-val='<?php echo $v['mark'];?>' class='dropdown-item px-3'><?php echo $v['name'];?></a>
		                    <?php }?>
	                        <li class="px-3 py-1"><a href="#/language" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo $word['added'];?><?php echo $word['langweb'];?></a></li>
		                </ul>
		            </div>
		            <div class="btn-group">
		                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		                	<i class="metinfo-admin-icon metinfo-admin-icon-administrator"></i>
		                	<span><?php echo $_M['user']['admin_name'];?></span>
		                </button>
		                <ul class="dropdown-menu dropdown-menu-right">
		                    <a href="#/admin/user" class="dropdown-item px-3"><?php echo $word['modify_information'];?></a>
		                    <a href="<?php echo $url['adminurl'];?>n=login&c=login&a=dologinout" class="dropdown-item px-3"><?php echo $word['indexloginout'];?></a>
		                </ul>
		            </div>
			    </div>
		    </div>
		</header>
		<?php } ?>
		<div class="metadmin-main px-4 mt-4 mb-3">
		</div>
		<div class="metadmin-loader"><div class="text-center d-flex align-items-center h-100"><div class="loader loader-round-circle"></div></div></div>
		<!-- <footer class="metadmin-foot px-4 my-3 text-grey"><?php echo $data['copyright'];?></footer> -->
		<button type="button" class="btn btn-primary px-2 met-scroll-top position-fixed" hidden><i class="icon wb-chevron-up" aria-hidden="true"></i></button>
	</div>
    <?php if(!$_M['form']['noside']){ ?>
</div>
<button type="button" data-toggle="modal" class="btn-admin-common-modal" hidden></button>
<?php } ?>
<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$basic_admin_js_time = filemtime(PATH_PUBLIC_ADMIN.'js/basic_admin.js');
$lang_json_admin_js_time = filemtime(PATH_WEB.'cache/lang_json_admin_'.$_M['lang'].'.js');
?>
</body>
<script>window.MET=<?php echo $data['met_para'];?>;</script>
<script src="<?php echo $url['site'];?>cache/lang_json_admin_<?php echo $_M['langset'];?>.js?<?php echo $lang_json_admin_js_time;?>"></script>
<script src="<?php echo $url['public_admin'];?>js/basic_admin.js?<?php echo $basic_admin_js_time;?>"></script>
</html>
<?php } ?>