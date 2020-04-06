<?php


namespace App\JwtAuth;

use Illuminate\Support\Facades\Redis;


class JwtToken
{
    /*
     * token
     */
    protected static $token;

    protected  static $user;
    /*
     * 创建token
     */
    public function createToken($account)
    {
        $token = password_hash($account,1);
        self::$token = $token;
    }

    /*
     * 设置token
     */
    public function setToken($uid,$token)
    {
        $key = 'user_token';
        Redis::hset($key,$uid,$token);
    }

    /*
     * 获取token
     */
    public function getToken($uid)
    {
        Redis::get($uid);
    }

    /*
     * 验证token
     */
    public static function verifyToken($token)
    {
        return Redis::get('zhangtaotao');
    }


}
