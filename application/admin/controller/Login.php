<?php
/**
 *  +----------------------------------------------------------------------
 *  | 草帽支付系统 [ WE CAN DO IT JUST THINK ]
 *  +----------------------------------------------------------------------
 *  | Copyright (c) 2018 http://www.iredcap.cn All rights reserved.
 *  +----------------------------------------------------------------------
 *  | Licensed ( https://www.apache.org/licenses/LICENSE-2.0 )
 *  +----------------------------------------------------------------------
 *  | Author: Brian Waring <BrianWaring98@gmail.com>
 *  +----------------------------------------------------------------------
 */

namespace app\admin\controller;

use app\common\controller\Common;

class Login extends Common
{
    /**
     * 登录首页
     *
     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>
     *
     * @return mixed
     */
    public function index()
    {
        //登录检测
        is_admin_login() && $this->redirect(url('index/index'));

        return $this->fetch();
    }

    /**
     * 登录处理
     *
     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>
     *
     * @param string $username
     * @param string $password
     * @param string $vercode
     */
    public function login($username = '', $password = '', $vercode = '')
    {
        $this->result($this->logicLogin->dologin($username, $password, $vercode));

    }

    /**
     * 注销登录
     *
     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>
     *
     */
    public function logout()
    {
        $this->result($this->logicLogin->logout());
    }

    /**
     * 清理缓存
     *
     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>
     *
     */
    public function clearCache()
    {
        $this->result($this->logicLogin->clearCache());
    }
}
