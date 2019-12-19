<?php
/**
 * Created by PhpStorm.
 * User: yangxs
 * Date: 2018/11/13
 * Time: 14:04
 */
namespace app\common\helper;

use think\cache\driver\Redis as thinkRedis;
class Redis extends thinkRedis
{
    public static function factory()
    {
        $redisConfig = config('constants.redis_config');
        $redis = new self($redisConfig);
        return $redis;
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->handler, $name], $arguments);
    }
}