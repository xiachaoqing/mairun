<?php
# MetInfo Enterprise Content Management System


defined('IN_MET') or exit('No permission');

load::mod_class('base/base_handle');


class news_handle extends base_handle
{

    public function __construct()
    {
        global $_M;
        $this->construct('news');
    }

    public function one_para_handle($content = array())
    {
        return parent::one_para_handle($content);
    }

}

# This program is an open source system, commercial use, please consciously to purchase commercial license.

?>
