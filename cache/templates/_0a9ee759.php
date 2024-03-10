<footer class='met-foot-info border-top1' m-id='met_foot' m-type="foot">
    <div class="met-footnav text-xs-center p-b-20" m-id='noset' m-type='foot_nav'>
    <div class="container">
        <div class="row mob-masonry">
            <!-- 栏目调用 -->
            <div class="col-lg-6 col-md-12 col-xs-12 left_lanmu">
                <?php
    $type=strtolower(trim('foot'));
    $cid = 0;
    $num = 1000;
    if(!isset($column)){
        $column = load::sys_class('label', 'new')->get('column');
    }
    $result = $column->get_column_by_type($type,$cid,$num);
    
    $sub = is_array($result) ? count($result) : 0;
    foreach($result as $index=>$m):
        if($m['display'] == 1){
            continue;
        }
          
        if($data['module'] == 10001){
            $m['url'] = str_replace(array('../',$_M['url']['site']),'',$m['url']);
            $m['content'] = str_replace(array('../',$_M['url']['site']),'',$m['content']);
            $m['indeximg'] = str_replace(array('../',$_M['url']['site']),'',$m['indeximg']);
            $m['columnimg'] = str_replace(array('../',$_M['url']['site']),'',$m['columnimg']);
        }
        
        if($data['module'] == 404){
            $m['url'] = str_replace(array('../',$_M['url']['web_site']),'',$m['url']);
            if(!strstr($m['url'],'http')){
                $m['url'] = $_M['url']['web_site'] . $m['url'];
            }
            $m['content'] = str_replace(array('../',$_M['url']['web_site']),'',$m['content']);
            $m['indeximg'] = str_replace(array('../',$_M['url']['web_site']),'',$m['indeximg']);
            $m['columnimg'] = str_replace(array('../',$_M['url']['web_site']),'',$m['columnimg']);
        }
        
        $hides = 1;
        $hide = explode("|",$hides);
        $m['_index']= $index;
        if($data['classnow']==$m['id'] || $data['class1']==$m['id'] || $data['class2']==$m['id'] || $data['releclass'] == $m['id']){
            $m['class']="''";
        }else{
            $m['class'] = '';
        }
        
        //产品所属多个栏目时
        if($data['module']==3 && $data['page_type']=='showpage' && $data['classother']){
            if(strpos($data['classother'],'-'.$m['id'].'-')){
                $m['class']="''";
            }
        }
        
        if(in_array($m['name'],$hide)){
            unset($m['id']);
            $m['hide'] = $hide;
            $m['sub'] = 0;
        }

        if(substr(trim($m['icon']),0,1) == 'm' || substr(trim($m['icon']),0,1) == ''){
            $m['icon'] = 'icon fa-pencil-square-o '.$m['icon'];
        }
        $m['urlnew'] = $m['new_windows'] ? "target='_blank'" :"target='_self'";
        $m['urlnew'] = $m['nofollow'] ? $m['urlnew']." rel='nofollow'" :$m['urlnew'];
        $m['_first']=$index==0 ? true:false;
        $m['_last']=$index==($sub-1)?true:false;
        $$m = $m;
        
        $result[$index] = $m;
?>
                    <?php if($m['_index']<4){ ?>
                <div class="col-lg-3 col-md-3 col-xs-6 list masonry-item foot-nav">
                    <h4 class='font-size-20 m-t-0'>
                        <a href="<?php echo $m['url'];?>" <?php echo $m['urlnew'];?> title="<?php echo $m['name'];?>"><?php echo $m['name'];?></a>
                    </h4>
                        <?php if($m['sub']){ ?>
                    <ul class='ulstyle m-b-0'>
                        <?php
    $type=strtolower(trim('son'));
    $cid = $m['id'];
    $num = 1000;
    if(!isset($column)){
        $column = load::sys_class('label', 'new')->get('column');
    }
    $result = $column->get_column_by_type($type,$cid,$num);
    
    $sub = is_array($result) ? count($result) : 0;
    foreach($result as $index=>$m):
        if($m['display'] == 1){
            continue;
        }
          
        if($data['module'] == 10001){
            $m['url'] = str_replace(array('../',$_M['url']['site']),'',$m['url']);
            $m['content'] = str_replace(array('../',$_M['url']['site']),'',$m['content']);
            $m['indeximg'] = str_replace(array('../',$_M['url']['site']),'',$m['indeximg']);
            $m['columnimg'] = str_replace(array('../',$_M['url']['site']),'',$m['columnimg']);
        }
        
        if($data['module'] == 404){
            $m['url'] = str_replace(array('../',$_M['url']['web_site']),'',$m['url']);
            if(!strstr($m['url'],'http')){
                $m['url'] = $_M['url']['web_site'] . $m['url'];
            }
            $m['content'] = str_replace(array('../',$_M['url']['web_site']),'',$m['content']);
            $m['indeximg'] = str_replace(array('../',$_M['url']['web_site']),'',$m['indeximg']);
            $m['columnimg'] = str_replace(array('../',$_M['url']['web_site']),'',$m['columnimg']);
        }
        
        $hides = 1;
        $hide = explode("|",$hides);
        $m['_index']= $index;
        if($data['classnow']==$m['id'] || $data['class1']==$m['id'] || $data['class2']==$m['id'] || $data['releclass'] == $m['id']){
            $m['class']="''";
        }else{
            $m['class'] = '';
        }
        
        //产品所属多个栏目时
        if($data['module']==3 && $data['page_type']=='showpage' && $data['classother']){
            if(strpos($data['classother'],'-'.$m['id'].'-')){
                $m['class']="''";
            }
        }
        
        if(in_array($m['name'],$hide)){
            unset($m['id']);
            $m['hide'] = $hide;
            $m['sub'] = 0;
        }

        if(substr(trim($m['icon']),0,1) == 'm' || substr(trim($m['icon']),0,1) == ''){
            $m['icon'] = 'icon fa-pencil-square-o '.$m['icon'];
        }
        $m['urlnew'] = $m['new_windows'] ? "target='_blank'" :"target='_self'";
        $m['urlnew'] = $m['nofollow'] ? $m['urlnew']." rel='nofollow'" :$m['urlnew'];
        $m['_first']=$index==0 ? true:false;
        $m['_last']=$index==($sub-1)?true:false;
        $$m = $m;
        
        $result[$index] = $m;
?>
                        <li>
                            <a href="<?php echo $m['url'];?>" <?php echo $m['urlnew'];?> title="<?php echo $m['name'];?>"><?php echo $m['name'];?></a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php endforeach;?>
            </div>           
            <!-- 栏目调用 -->

            <!-- 关注我们二维码 -->
            <div class="col-lg-3 col-md-3 col-xs-12 info masonry-item" m-type="nocontent">
                <!-- <h4 class='font-size-20 m-t-0'>
                    <?php echo $lang['aboutus_text'];?>
                </h4>
                <div class="erweima">
                    <div class="imgbox1 col-lg-6 col-md-6 col-xs-6">
                        <img src='<?php echo thumb($lang['footinfo_wx'],112,112);?>' alt='<?php echo $c['met_webname'];?>'>
                        <p class="weixintext"><?php echo $lang['erweima_one'];?></p>
                    </div>
                    <div class="imgbox2 col-lg-6 col-md-6 col-xs-6">
                        <img src='<?php echo thumb($lang['footinfo_wx2'],112,112);?>' alt='<?php echo $c['met_webname'];?>'>
                        <p class="weixintext"><?php echo $lang['erweima_two'];?></p>
                    </div>
                </div> -->
            </div>
            <!-- 关注我们二维码 -->

            <!-- 联系我们 -->
            <div class="col-lg-3 col-md-3 col-xs-12 info masonry-item font-size-20" m-id='met_contact' m-type="nocontent">
                    <?php if($lang['footinfo_tel']){ ?>
                    <p class='font-size-20'><?php echo $lang['footinfo_tel'];?></p>
                <?php } ?>
                    <?php if($lang['footinfo_dsc']){ ?>
                    <p class="font-size-24">
                        <a href="tel:<?php echo $lang['footinfo_dsc'];?>" title="<?php echo $lang['footinfo_dsc'];?>"><?php echo $lang['footinfo_dsc'];?></a>
                    </p>
                <?php } ?>
                    <?php if($lang['wooktime_text']){ ?>
                    <p class="font-size-16 weekbox">
                        <?php echo $lang['wooktime_text'];?>
                    </p>
                <?php } ?>
                    <?php if($lang['footinfo_wx_ok']){ ?>
                    <a class="p-r-5" id="met-weixin" data-plugin="webuiPopover" data-trigger="hover" data-animation="pop" data-placement='top' data-width='155' data-padding='0' data-content="<div class='text-xs-center'>
                        <img src='<?php echo $lang['footinfo_wx'];?>' alt='<?php echo $c['met_webname'];?>' width='150' height='150' id='met-weixin-img'></div>
                    ">
                        <i class="fa fa-weixin"></i>
                    </a>
                <?php } ?>
                    <?php if($lang['footinfo_qq_ok']){ ?>
                <a
                    <?php if($lang['foot_info_qqtype']==1){ ?>
                href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $lang['footinfo_qq'];?>&site=qq&menu=yes"
                <?php }else{ ?>
                href="http://crm2.qq.com/page/portalpage/wpa.php?uin={<?php echo $lang['footinfo_qq'];?>&aty=0&a=0&curl=&ty=1"
                <?php } ?>
                rel="nofollow" target="_blank" class="p-r-5">
                    <i class="fa fa-qq"></i>
                </a>
                <?php } ?>
                    <?php if($lang['footinfo_sina_ok']){ ?>
                <a href="<?php echo $lang['footinfo_sina'];?>" rel="nofollow" target="_blank" class="p-r-5">
                    <i class="fa fa-weibo"></i>
                </a>
                <?php } ?>
                    <?php if($lang['footinfo_twitterok']){ ?>
                <a href="<?php echo $lang['footinfo_twitter'];?>" rel="nofollow" target="_blank" class="p-r-5">
                    <i class="fa fa-twitter red-600"></i>
                </a>
                <?php } ?>
                    <?php if($lang['footinfo_googleok']){ ?>
                <a href="<?php echo $lang['footinfo_google'];?>" rel="nofollow" target="_blank" class="p-r-5">
                    <i class="fa fa-google red-600"></i>
                </a>
                <?php } ?>
                    <?php if($lang['footinfo_facebookok']){ ?>
                <a href="<?php echo $lang['footinfo_facebook'];?>" rel="nofollow" target="_blank" class="p-r-5">
                    <i class="fa fa-facebook red-600"></i>
                </a>
                <?php } ?>
                    <?php if($lang['footinfo_emailok']){ ?>
                <a href="mailto:<?php echo $lang['footinfo_email'];?>" rel="nofollow" target="_blank" class="p-r-5">
                    <i class="fa fa-envelope red-600"></i>
                </a>
                <?php } ?>
            </div>
            <!-- 联系我们 -->

            
        </div>
    </div>
</div>

    <!--友情链接-->
    <?php
    $result = load::sys_class('label', 'new')->get('link')->get_link_list($data['classnow']);
    $sub = is_array($result) ? count($result) : 0;
     foreach($result as $index=>$v):
         if($data['module'] == 10001){
             $v['weburl']   = \str_replace(array('../',$_M['url']['site']),'',$v['weburl']);
         }
        $v['sub']      = $sub;
        $v['_index']   = $index;
        $v['_first']   = $index == 0 ? true:false;
        $v['_last']    = $index == (count($result)-1) ? true : false;
        $v['nofollow'] = $v['nofollow'] ? "rel='nofollow'" : '';
?><?php endforeach;?>
        <?php if($lang['link_ok'] && $sub){ ?>
    <div class="met-link text-xs-center p-y-10" m-id='noset' m-type='link'>
        <div class="container">
            <ul class="breadcrumb p-0 link-img m-0">
                <li class='breadcrumb-item'><?php echo $lang['footlink_title'];?> :</li>
                        <?php
            $sub = is_array($result) ? count($result) : 0;
            $cycleindex = 50;
            
            if(!is_array($result) && $result){
                $result = explode('|',$result);
            }

            foreach ($result as $index => $val) {
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
                    <li class='breadcrumb-item'>
                        <a href="<?php echo $v['weburl'];?>" title="<?php echo $v['info'];?>" <?php echo $v['nofollow'];?> target="_blank">
                                <?php if($v['link_type']==1){ ?>
                                <img data-original="<?php echo $v['weblogo'];?>" alt="<?php echo $v['info'];?>" height='40'>
                            <?php }else{ ?>
                                <span><?php echo $v['webname'];?></span>
                            <?php } ?>
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <?php } ?>  
    <!--友情链接-->

    <div class="copy p-y-10 border-top1">
        <div class="container text-xs-center">
                <?php if($c['met_footright'] || $c['met_footstat']){ ?>
                <div class="met_footright">
                    <span><?php echo $c['met_footright'];?></span>&nbsp;
                        <?php if($c['met_foottel']){ ?>
                        <span><?php echo $c['met_foottel'];?></span>&nbsp;
                    <?php } ?>

                        <?php if($c['met_footaddress']){ ?>
                        <span><?php echo $c['met_footaddress'];?></span>
                    <?php } ?>
                </div>
            <?php } ?>
                <?php if($c['met_footother']){ ?>
                <div><?php echo $c['met_footother'];?></div>
            <?php } ?>
                <?php if($c['met_foottext']){ ?>
                <div><?php echo $c['met_foottext'];?></div>
            <?php } ?>
                    <?php if($c['met_ch_lang'] && $lang['cn1_position']==0){ ?>
                        <?php if($lang['cn1_ok']){ ?>
                        <?php if($data['synchronous']=='cn' || $data['synchronous']=='zh'){ ?>
                        <button type="button" class="btn btn-outline btn-default btn-squared btn-lang" id='btn-convert' m-id="lang" m-type="lang">繁体</button>
                    <?php } ?>
                    <?php } ?>
                <?php } ?>
                    <?php if($c['met_lang_mark'] && $lang['langlist_position']==0){ ?>
                <div class="met-langlist vertical-align" m-id="lang"  m-type="lang">
                    <div class="inline-block dropup">

                                <?php
            $language = load::sys_class('label', 'new')->get('language')->get_lang();
           
            $sub = is_array($language) ? count($language) : 0;
            $i = 0;
            foreach($language as $index=>$v):
                $v['_index']   = $index;
                $v['_first']   = $i == 0 ? true:false;
                $v['_last']    = $index == (count($language)-1) ? true : false;
                $v['sub'] = $sub;
                $i++;
        ?>
                            <?php if($sub>1){ ?>
                                <?php if($data['lang']==$v['mark']){ ?>
                            <button type="button" data-toggle="dropdown" class="btn btn-outline btn-default btn-squared dropdown-toggle btn-lang">
                                    <?php if($lang['langlist1_icon_ok']){ ?>
                                <img src="<?php echo $v['flag'];?>" alt="<?php echo $v['name'];?>" width="20">
                                <?php } ?>
                                <span><?php echo $v['name'];?></span>
                            </button>
                            <?php } ?>
                        <?php }else{ ?>
                            <a href="<?php echo $v['met_weburl'];?>" title="<?php echo $v['name'];?>" class="btn btn-outline btn-default btn-squared btn-lang"     <?php if($v['newwindows']==1){ ?>target="_blank"<?php } ?>>
                                    <?php if($lang['langlist1_icon_ok']){ ?>
                                <img src="<?php echo $v['flag'];?>" alt="<?php echo $v['name'];?>" width="20">
                                <?php } ?>
                                <?php echo $v['name'];?>
                            </a>
                        <?php } ?>
                        <?php endforeach;?>
                            <?php if($sub>1){ ?>
                            <ul class="dropdown-menu dropdown-menu-right animate animate-reverse" id="met-langlist-dropdown" role="menu">
                                        <?php
            $language = load::sys_class('label', 'new')->get('language')->get_lang();
           
            $sub = is_array($language) ? count($language) : 0;
            $i = 0;
            foreach($language as $index=>$v):
                $v['_index']   = $index;
                $v['_first']   = $i == 0 ? true:false;
                $v['_last']    = $index == (count($language)-1) ? true : false;
                $v['sub'] = $sub;
                $i++;
        ?>
                                <a href="<?php echo $v['met_weburl'];?>" title="<?php echo $v['name'];?>" class='dropdown-item'     <?php if($v['newwindows']==1){ ?>target="_blank"<?php } ?>>
                                        <?php if($lang['langlist1_icon_ok']){ ?>
                                    <img src="<?php echo $v['flag'];?>" alt="<?php echo $v['name'];?>" width="20">
                                    <?php } ?>
                                    <?php echo $v['name'];?>
                                </a>
                                <?php endforeach;?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    
</footer>
<div class="met-menu-list text-xs-center     <?php if($_M['form']['pageset']){ ?>iskeshi<?php } ?>" m-id="noset" m-type="menu">
    <div class="main">
        <?php
    $type = '1';
    $result = load::sys_class('label', 'new')->get('menu')->get_list($type);
    $sub = is_array($result) ? count($result) : 0;
     foreach($result as $index=>$v):
        $v['sub']      = $sub;
        $v['_index']   = $index;
        $v['_first']   = $index == 0 ? true:false;
        $v['_last']    = $index == (count($result)-1) ? true : false;
?>
            <div style="background-color: <?php echo $v['but_color'];?>;">
                <a href="<?php echo $v['url'];?>" class="item"     <?php if($v['target']){ ?>target="_blank"<?php } ?> style="color: <?php echo $v['text_color'];?>;">
                    <i class="<?php echo $v['icon'];?>"></i>
                    <span><?php echo $v['name'];?></span>
                </a>
            </div>
        <?php endforeach;?>
    </div>
</div>

<?php if($lang_json_file_ok){ ?>
<input type="hidden" name="met_lazyloadbg" value="<?php echo $g['lazyloadbg'];?>">
<?php if($data["module"]==3&&$data["id"]){ ?>
<textarea name="met_product_video" data-playinfo="<?php echo $c['met_auto_play_pc'];?>|<?php echo $c['met_auto_play_mobile'];?>" hidden><?php echo $data['video'];?></textarea>
<?php
    }
    if($c["shopv2_open"]){
        $data["shop_goods"]=$data["shop_goods"]?$data["shop_goods"]:0;
?>
<script>
var jsonurl="<?php echo $url['shop_cart_jsonlist'];?>",
    totalurl="<?php echo $url['shop_cart_modify'];?>",
    delurl="<?php echo $url['shop_cart_del'];?>",
    price_prefix="<?php echo $c['shopv2_price_str_prefix'];?>",
    price_suffix="<?php echo $c['shopv2_price_str_suffix'];?>",
    shop_goods=<?php echo $data['shop_goods'];?>;
</script>
<?php
    }
    $met_lang_time = filemtime(PATH_WEB."cache/lang_json_".$_M["lang"].".js");
?>
<script src="<?php echo $url['site'];?>cache/lang_json_<?php echo $_M["lang"];?>.js?<?php echo $met_lang_time;?>"></script>
<?php
}
if(!$c["disable_cssjs"]){
    if(is_file(PATH_TEM."cache/metinfo.js")){
        $common_js_time = filemtime(PATH_TEM."cache/metinfo.js");
        $metpagejs="metinfo.js?".$common_js_time;
    }
    if($met_page){
        $page_js_time = filemtime(PATH_TEM."cache/".$met_page."_".$_M["lang"].".js");
        $metpagejs=$met_page."_".$_M["lang"].".js?".$page_js_time;
    }
    $basic_js_name=$metinfover_v2?"":"_web";
    if($c["temp_frame_version"]=="v2") $basic_js_name.="_v2";
    $basic_js_time = filemtime(PATH_PUBLIC_WEB."js/basic".$basic_js_name.".js");
?>
<script src="<?php echo $url['public_web'];?>js/basic<?php echo $basic_js_name;?>.js?<?php echo $basic_js_time;?>" data-js_url="<?php echo $url['site'];?>templates/<?php echo $c['met_skin_user'];?>/cache/<?php echo $metpagejs;?>" id="met-page-js"></script>
<?php
}
if($lang_json_file_ok){
    if($c["shopv2_open"]){
        $shop_js_filemtime = filemtime(PATH_ALL_APP."shop/web/templates/met/js/own.js");
        if(($metinfover_v2=="v2" && $template_type) || $metinfover_v2!="v2"){
            $app_js_filemtime = filemtime(PATH_PUBLIC_WEB."js/app.js");
?>
<script src="<?php echo $url['public_web'];?>js/app.js?<?php echo $app_js_filemtime;?>"></script>
<?php } ?>
<script src="<?php echo $url['shop_ui'];?>js/own.js?<?php echo $shop_js_filemtime;?>"></script>
<?php
    }
    if(is_mobile() && $c["met_footstat_mobile"]){
?>
<?php echo $c['met_footstat_mobile'];?>

<?php }else if(!is_mobile() && $c["met_footstat"]){?>
<?php echo $c['met_footstat'];?>

<?php
    }
    if($_M["html_plugin"]["foot_script"]){
?>
<?php echo $_M["html_plugin"]["foot_script"];?>

<?php
    }
}
?></body>
</html>