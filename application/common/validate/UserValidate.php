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

namespace app\common\validate;

class UserValidate extends BaseValidate
{
    // 验证规则
    protected $rule = [
        'username'  => 'require|length:3,10|unique:user',
        'password'  => 'require|length:6,30',
        'account'     => 'require|email|unique:user',
        'phone'    => 'require|number|length:11|unique:user',
        'qq'    => 'require|number|length:5,10|unique:user'
    ];

    // 验证提示
    protected $message = [
        'username.require'    => '用户名不能为空',
        'username.length'     => '用户名长度为6-30个字符之间',
        'username.unique'     => '用户名已存在',
        'password.require'    => '密码不能为空',
        'password.length'     => '密码长度为6-30个字符之间',
        'account.require'       => '邮箱不能为空',
        'account.email'         => '邮箱格式不正确',
        'account.unique'        => '邮箱已存在',
        'phone.require'      => '手机号码不能为空',
        'phone.number'      => '手机号码必须为数字',
        'phone.length'      => '手机号码长度不对',
        'phone.unique'       => '手机号码已存在',
        'qq.require'      => 'QQ号码不能为空',
        'qq.length'      => 'QQ长度为5-10个数字之间',
        'qq.unique'       => '手机号码已存在'
    ];

    // 应用场景
    protected $scene = [
        'add'  =>  ['username','password','account'],
        'edit'      =>  ['username','phone','qq']
    ];
}