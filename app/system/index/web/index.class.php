<?php
# MetInfo Enterprise Content Management System


defined('IN_MET') or exit('No permission');

load::sys_class('web');

class index extends web
{
    public function __construct()
    {
        global $_M;
        parent::__construct();

        $pos = strstr(PHP_SELF, "/index.php/");
        if ($pos) {
            header('HTTP/1.1 302 Moved Permanently');
            header("Location: {$_M['url']['web_site']}");
        }
    }

    public function doindex()
    {
        global $_M;
        $this->add_input('class1', 10001);
        $this->add_input('classnow', 10001);
        $_M['url']['site'] = '';//首页使用相对路径
        load::mod_class('user/user_url', 'new')->insert_m(); //首页重新给会员链接赋值

        $_M['config']['met_weburl'] = '';
        $this->seo();
        if ($_M['config']['met_hometitle']) {
            $title = $_M['config']['met_hometitle'];
        }else{
            $title = '';
            $title .= ($_M['config']['met_webname'] ? "{$_M['config']['met_webname']} - " : '');
            $title .= ($_M['config']['met_keywords'] ? : '');
        }
        $this->seo_title($title);
        $this->seo_canonical($_M['url']['site']);
        $this->view('index', $this->input);
    }
}

# This program is an open source system, commercial use, please consciously to purchase commercial license.

?>
