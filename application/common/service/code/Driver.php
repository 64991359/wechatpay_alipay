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

namespace app\common\service\code;
use think\Cache;

/**
 * 验证码基础类
 */
abstract class Driver
{
    protected $handler = null;


    /**
     * 发送验证码
     * @access public
     * @param string $whom 发给谁
     * @param array $data 附加数据
     * @return bool
     */
    abstract public function send($whom,$data);

    /**
     * 验证数据
     * @access public
     * @param string $whom 发给谁
     * @param mixed  $value 验证值
     * @return mixed
     */
    abstract public function valid($whom, $value = false);



    /**
     * 返回句柄对象，可执行其它高级方法
     *
     * @access public
     * @return object
     */
    public function handler()
    {
        return $this->handler;
    }

    /**
     * 通用验证码存储
     *
     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>
     *
     * @param $whom
     * @return string
     */
    protected function buildCache($whom){
        $code = getRandChar('6','NUM');
        Cache::set('code_verify_'.$whom , $code ,300);
        return $code;
    }

    /**
     * 通用缓存验证
     *
     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>
     *
     * @param string $whom
     * @param bool $value
     * @return bool|mixed
     */
    protected function checkCache($whom, $value = false)
    {
        if (is_null($whom)){
            return false;
        }
        return Cache::get('code_verify_'.$whom) == $value
            ? Cache::rm('code_verify_'.$whom) : false;
    }
}
