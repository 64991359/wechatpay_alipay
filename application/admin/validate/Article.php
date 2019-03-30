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


namespace app\admin\validate;


class Article extends BaseAdmin
{
    // 验证规则
    protected $rule =   [
        'title'         => 'require',
        'content'       => 'require',
    ];

    // 验证提示
    protected $message  =   [
        'title.require'        => '文章标题不能为空',
        'content.require'      => '文章内容不能为空'
    ];
}