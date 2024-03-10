<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$html_class=$body_class='h-100';
$html_class.=' met-login';
$body_class.=' d-flex align-items-center justify-content-center';
$met_title=$word['logintitle'];
$login_logo_filemtime=filemtime(str_replace($url['site'], PATH_WEB, $data['met_agents_logo_login']));

$basic_admin_css_filemtime = filemtime(PATH_PUBLIC_ADMIN.'css/basic_admin.css');
$met_title.='-'.$word['metinfo'];
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
<body class="<?php echo $body_class;?>">
<div>
    <style>.met-ie-tips a{color: #fff;}</style>
    <div class="text-center mb-0 bg-danger alert hide mb-3 met-ie-tips">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
        </button>
        你正在使用一个 <strong>过时</strong> 的浏览器。请 <a href='https://browsehappy.com/' target=_blank>升级您的浏览器</a>，以提高您的体验。
    </div>
    <div class="d-flex text-left align-items-center">
        <a href="<?php echo $data['met_agents_linkurl'];?>" title="<?php echo $word['metinfo'];?>" target="_blank">
            <img src="<?php echo $data['met_agents_logo_login'];?>?<?php echo $login_logo_filemtime;?>" alt="<?php echo $word['metinfo'];?>" width="200">
        </a>
        <form action="<?php echo $url['own_form'];?>a=dologin" class="border-left pl-2 ml-4 met-login-form" style="border-color: #eee !important;" data-submit-ajax="1">
            <div class="row mb-4">
                <label class="col-form-label" style="width: 100px;"></label>
                <div class="mb-3">
                    <h1 class="h5"><?php echo $word['loginadmin'];?></h1>
                </div>
            </div>
                <?php if($c['met_admin_type_ok']){ ?>
                <div class="row">
                    <label class="col-form-label pr-3 text-right" style="width: 100px;"><?php echo $word['loginlanguage'];?></label>
                    <div class="form-group mb-4">
                        <select name="langset" data-checked="<?php echo $data['langset'];?>" class="form-control" onchange="javascript:location.href=M.url.admin+'?langset='+this.value">
                                    <?php
            $sub = is_array($data['met_langadmin']) ? count($data['met_langadmin']) : 0;
            $cycleindex = 50;
            
            if(!is_array($data['met_langadmin']) && $data['met_langadmin']){
                $data['met_langadmin'] = explode('|',$data['met_langadmin']);
            }

            foreach ($data['met_langadmin'] as $index => $val) {
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
                                <option value="<?php echo $v['mark'];?>"><?php echo $v['name'];?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <label class="col-form-label pr-3 text-right" style="width: 100px;"><?php echo $word['loginusename'];?></label>
                <div class="form-group mb-4">
                    <input type="text" name="login_name" data-safety required class="form-control" style="width: 200px;">
                </div>
            </div>
            <div class="row">
                <label class="col-form-label pr-3 text-right" style="width: 100px;"><?php echo $word['loginpassword'];?></label>
                <div class="form-group mb-4">
                    <input type="password" name="login_pass" data-safety required class="form-control" style="width: 200px;">
                </div>
            </div>
                <?php if($c['met_login_code']){ ?>
                <?php $random = random(4, 1); ?>
                <div class="row">
                    <label class="col-form-label pr-3 text-right" style="width: 100px;"><?php echo $word['logincode'];?></label>
                    <div class="form-group mb-4">
                        <div class="input-group" style="width: 200px;">
                            <input name='code' type='text' class='form-control' placeholder='<?php echo $word['memberImgCode'];?>' required>
                            <div class="input-group-append">
                                <div class="input-group-text py-0 px-1">
                                    <img src='<?php echo $url['entrance'];?>?m=include&c=ajax_pin&a=dogetpin&random=<?php echo $random;?>' title='<?php echo $word['memberTip1'];?>' align='absmiddle' role='button' class="met-getcode">
                                    <input type="hidden" name="random" value="<?php echo $random;?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <label class="col-form-label" style="width: 100px;"></label>
                <div class="">
                    <button type="submit" class="btn btn-primary px-4"><?php echo $word['loginconfirm'];?></button>
                    <a href="<?php echo $url['get_pass'];?>" class="ml-3"><?php echo $word['loginforget'];?></a>
                </div>
            </div>
        </form>
    </div>
    <!-- <footer class="metadmin-foot text-grey text-center mt-5 pt-5"><?php echo $data['copyright'];?></footer> -->
</div>
<?php
$basic_admin_js_time = filemtime(PATH_PUBLIC_ADMIN.'js/basic_admin.js');
$lang_json_admin_js_time = filemtime(PATH_WEB.'cache/lang_json_admin_'.$_M['lang'].'.js');
?>
</body>
<script>window.MET=<?php echo $data['met_para'];?>;</script>
<script src="<?php echo $url['public_admin'];?>js/basic_admin.js?<?php echo $basic_admin_js_time;?>"></script>
<script src="<?php echo $url['site'];?>cache/lang_json_admin_<?php echo $_M['langset'];?>.js?<?php echo $lang_json_admin_js_time;?>"></script>
<script>(function(){M.is_ie&&$('.met-ie-tips').removeClass('hide');})();</script>
</html>