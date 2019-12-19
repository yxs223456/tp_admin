<?php

/**
 * 枚举定义
 */

return [

    "dingDing" => [
        'corpId' => 'ding22a56512a9d5189a',
        'corpSecret' => '5WHjiKLiavN3vkyGynHfAhmaS0YHx63YaRXQauHBdqk6ny9AwvjsZSpDzl4YIQg1',
        'agentId' => '185195101',
        'userIds' => [
            '杨秀山' => '10084',
        ],
    ],

    "redis_config" => [
        'scheme' => 'tcp',
        'host'   => '47.95.122.62',
        'port'   => 6379,
        'password' => 'Lottery123'
    ],

    'yxConfig' => [
        'clientId' => "23051754",
        'clientSecret' => "UDFsRRvJW0dUywNpVhFDRpSBIpbj9fVW"
    ],

    'yxApiHost' => "https://open-api.mryx.365uxuan.com",

    //缓存抽奖
    'cache_lottery_url' => 'https://api.mryx.365uxuan.com/api/lottery/cacheLotteryInfo',

    //初始化循环发布类抽奖
    'init_lottery_loop_url' => 'https://api.mryx.365uxuan.com/api/lottery/startLotteryLoop',

    //领奖超时时间
    'receive_timeout' => 3 * 86400,

    //每日可通过微信广告增加抽奖码的次数上限
    'lottery_code_by_wechat_commercials' => 3,

    //每日可通过视频广告增加抽奖券的次数上限
    'lottery_coupon_by_video_commercials' => 1,

    //每日可通过视频广告获取金币的次数上限
    'coin_by_video_commercials' => 10,

    //首次提现最小金额
    'first_withdraw_least_money' => 0.3,

    //提现最小金额
    'withdraw_least_money' => 1,

    //每日可通过微信广告在未中奖时获取金币的次数上限
    'coin_by_wechat_commercials' => 2,

    // 快递公司列表
    "expressCompanyList" => [
        "申通快递", "顺丰快递", "邮政快递", "圆通快递", "韵达快递", "中通快递", "EMS快递", "快捷速递", "宅急送",
        "德邦快递", "如风达快递", "DHL快递", "UPS快递", "百世快递", "天天快递", "芝麻开门", "万象物流", "我买网",
        "邮政快递包裹", "京东物流", "优速物流"
    ],

    // 七天签到配置
    "dailySignConfig" => [
        [
            "giftLotteryCouponNum" => 3
        ],
        [
            "giftLotteryCouponNum" => 3
        ],
        [
            "giftLotteryCouponNum" => 5
        ],
        [
            "giftLotteryCouponNum" => 3
        ],
        [
            "giftLotteryCouponNum" => 3
        ],
        [
            "giftLotteryCouponNum" => 3
        ],
        [
            "giftLotteryCouponNum" => 7
        ],
    ],

];

