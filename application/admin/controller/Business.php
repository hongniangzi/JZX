<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://0731pgy.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: wanglun <573075930@qq.com>
// +----------------------------------------------------------------------

namespace app\admin\controller;
use think\Page;

/**
 * 平台管理端审核类
 */
class Business extends Home{
    public function initialize(){
        // 登录态检测
        $this->is_login();
        
        // 权限检测
        $rule = $this->checkUrl();
        $this->assign('url',$this->url);
        
        if($rule){
            echo json_encode($rule);die;
        }
    }

    public function businessList(){
        $list = '';
        $this->assign('list',$list);
        return $this->fetch($this->url);
    }
}