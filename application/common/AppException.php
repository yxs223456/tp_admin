<?php
/**
 * Created by PhpStorm.
 * User: yangxs
 * Date: 2018/9/18
 * Time: 17:44
 */
namespace app\common;

class AppException extends \Exception
{
    const COM_PARAMS_ERR = [2, '请求参数错误'];
    const COM_FILE_ERR = [3, '上传文件不存在或超过服务器限制'];
    const COM_DATE_ERR = [4, '日期格式错误'];
    const COM_MOBILE_ERR = [5, '手机号合格错误'];
    const COM_ADDRESS_ERR = [6, '地址信息不全'];

    const USER_NOT_LOGIN = [1000, '您还未登录'];
    const USER_TOKEN_ERR = [1000, '登录信息已过期,请重新登录'];
    const USER_NOT_EXISTS = [1002, '用户不存在'];
    const USER_INVITE_CODE_NOT_EXISTS = [1003, '邀请码不存在'];
    const USER_LOTTERY_COUPON_BY_VIDEO_UPPER_LIMIT = [1004, '今日获取抽奖券到达上限'];

    const WECHAT_GET_USER_INFO_ERR = [2000, '获取用户微信信息失败'];
    const WECHAT_MINPROGRAM_LOGIN_ILLEGALAESKEY = [1001, 'encodingAesKey 非法'];
    const WECHAT_MINPROGRAM_LOGIN_ILLEGALIV = [-41002, '微信凭证获取失败'];
    const WECHAT_MINPROGRAM_LOGIN_ILLEGALBUFFER = [1001, '解密后得到的buffer非法'];
    const WECHAT_MINPROGRAM_LOGIN_DECODEBASE64ERROR = [-41004, 'base64解密失败'];
    const WECHAT_MINPROGRAM_APPID_ERROR = [-41005, 'appid不一致'];
    const WECHAT_QUERY_FILE = [2001, '请求微信失败'];
    const WECHAT_PAY_ORDER_NOT_EXISTS = [2002, '找不到微信支付信息'];

    const LOTTERY_PRIZE_TYPE_NOT_EXISTS = [3000, '奖品类型不存在'];
    const LOTTERY_PRIZE_EMPTY = [3001, '您还没有添加奖品'];
    const LOTTERY_TYPE_NOT_EXISTS = [3002, '抽奖类型不存在'];
    const LOTTERY_OFFICIAL_SPONSOR_EMPTY = [3003, '请填写赞助商'];
    const LOTTERY_OFFICIAL_SPONSOR_LOGO_EMPTY = [3004, '请上传赞助商logo'];
    const LOTTERY_LOTTERY_TYPE_NOT_EXISTS = [3005, '开奖方式不存在'];
    const LOTTERY_LOTTERY_NUM_EMPTY = [3006, '请设置开奖人数'];
    const LOTTERY_LOTTERY_TIME_ERR = [3007, '请设置符合规范的开奖时间'];
    const LOTTERY_LITTLE_DESCRIPTION_LONG = [3008, '抽奖说明长度超过限制'];
    const LOTTERY_SHIBBOLETH_LONG = [3009, '口令长度超过限制'];
    const LOTTERY_PRIZE_ERR = [3010, '奖品数据结构错误'];
    const LOTTERY_PRIZE_NUM_MORE = [3011, '奖品件数超过限制'];
    const LOTTERY_PRIZE_TOTAl_MORE = [3012, '奖品总个数超过限制'];
    const LOTTERY_LOTTERY_NUM_MORE = [3013, '开奖人数超过限制'];
    const LOTTERY_LOTTERY_TYPE_ERR = [3014, '当前抽奖配置不能选择该开奖方式'];
    const LOTTERY_LOTTERY_NUM_ERR = [3015, '开奖人数不合规范'];
    const LOTTERY_HIDDEN_NOT_SUPPORT = [3016, '当前抽奖方式不支持秘密抽奖'];
    const LOTTERY_SHIBBOLETH_EMPTY = [3017, '请设置口令'];
    const LOTTERY_SEND_TYPE_NOT_SUPPORT = [3018, '商城奖品不支持自定义领奖方式'];
    const LOTTERY_MP_APPID_ERR = [3019, '小程序AppID格式错误'];
    const LOTTERY_MP_PAGE_ERR = [3020, '小程序路径格式错误'];
    const LOTTERY_H5_LINK_ERR = [3020, 'H5链接格式错误'];
    const LOTTERY_TYPE_2_ZERO = [3021, '没有专业版使用券'];
    const LOTTERY_TYPE_3_ZERO = [3021, '没有官方版发起权限'];
    const LOTTERY_TYPE_4_ZERO = [3022, '您没有该开奖人数的自助抽奖使用券'];
    const LOTTERY_OFFICIAL_SPONSOR_LONG = [3023, '赞助商长度超限'];
    const LOTTERY_NOT_EXISTS = [3024, '抽奖记录不存在'];
    const LOTTERY_USER_ERR = [3025, '您不是该抽奖发起人'];
    const LOTTERY_TYPE_NOT_MODIFY = [3026, '抽奖类型不可修改'];
    const LOTTERY_PRIZE_NOT_MODIFY = [3027, '基础版、专业版不可修改商城类奖品'];
    const LOTTERY_END_NOT_MODIFY = [3028, '抽奖已结束'];
    const LOTTERY_PRIZE_TYPE_NOT_MODIFY = [3029, '奖品类型不可修改'];
    const LOTTERY_START_ALREADY = [3030, '抽奖已开始不可修改'];
    const LOTTERY_STATUS_NOT_AUDIT_FAIL = [3031, '当前操作只在审核失败时允许'];
    const LOTTERY_ONLINE_TYPE_NOT_EXISTS = [3032, '上线方式类型错误'];
    const LOTTERY_STATUS_NOT_WAIT_PAY = [3033, '该抽奖不为待支付状态'];
    const LOTTERY_USER_FORBID = [3034, '您已被管理员禁止发布抽奖'];
    const LOTTERY_ONLINE_TIME_EARLIER = [3035, '发布时间不能早于当前时间'];
    const LOTTERY_ONLINE_TIME_ALREADY = [3036, '该抽奖已经发布'];
    const LOTTERY_ONLINE_TIME_TYPE_ERR = [3037, '当前抽奖类型不可手动设置发布时间'];
    const LOTTERY_ONLINE_TIME_STATUS_ERR = [3038, '抽奖状态不为待发布'];
    const LOTTERY_USER_SHIBBOLETH_ERR = [3039, '口令错误'];
    const LOTTERY_USER_JOIN_ALREADY = [3040, '您已参加该抽奖'];
    const LOTTERY_OPEN_ALREADY = [3041, '该抽奖已经开奖'];
    const LOTTERY_TIMEOUT_ALREADY = [3042, '该抽奖已经超时结束'];
    const LOTTERY_NUM_ENOUGH = [3043, '该抽奖参加人数已到开奖条件，无法加入'];
    const LOTTERY_TIME_ENOUGH = [3044, '该抽奖已到开奖时间，无法加入'];
    const LOTTERY_OFFLINE = [3045, '该抽奖还未发布'];
    const LOTTERY_STATUS_NOT_ONLINE = [3046, '该抽奖不在发布状态'];
    const LOTTERY_WINNER_NOT_EXISTS = [3047, '没有找到您的中奖纪录'];
    const LOTTERY_SEND_TYPE_NOT_ADDRESS = [3048, '奖品发放方式不为邮寄发放'];
    const LOTTERY_ADD_ADDRESS_TIMEOUT = [3049, '添加地址时间已超时'];
    const LOTTERY_SEND_ALREADY = [3050, '奖品已在路上'];
    const LOTTERY_TYPE_2_SHORT = [3051, '专业版次数不足'];
    const LOTTERY_NOT_OPEN = [3052, '该抽奖未开奖'];
    const LOTTERY_STATUS_WAIT_PAY = [3053, '该抽奖还未支付'];
    const LOTTERY_OPEN_TYPE_NOT_MODIFY = [3054, '开奖方式不可修改'];
    const LOTTERY_OPEN_NUM_NOT_MODIFY = [3055, '开奖人数不可修改'];
    const LOTTERY_NOT_USER_THIRDPARTY_TICKET = [3056, '该抽奖没有使用第三方使用券'];
    const LOTTERY_NOVICE_ONLY = [3057, '该抽奖只限新手参与'];
    const LOTTERY_TICKET_CODE_ERR = [3058, '抽奖码格式错误'];
    const LOTTERY_VIRTUAL_NO_POWER = [3059, '基础版抽奖不能选择虚拟奖品'];
    const LOTTERY_VIRTUAL_PRIZE_MORE = [3060, '每件虚拟奖品的兑换码数量上限为100个'];
    const LOTTERY_COUPON_NOT_ENOUGH = [3061, '抽奖券数量不足'];
    const LOTTERY_SEND_TYPE_ADDRESS = [3062, '请填写地址来领取奖品'];
    const LOTTERY_RECEIVE_ALREADY = [3063, '您已领取过该奖品'];
    const LOTTERY_RECEIVE_TIMEOUT = [3064, '很遗憾，已过领取时间'];
    const LOTTERY_COIN_NOT_LOSS = [3065, '只有未中奖才可以领取金币'];
    const LOTTERY_RECEIVE_COIN_ALREADY = [3066, '您已领取过金币'];
    const LOTTERY_TYPE_ERR = [3067, '抽奖类型不符'];
    const LOTTERY_PRIZE_NONE_RED_PACKET = [3068, '奖品不包含红包'];

    const TICKET_TYPE_NOT_EXISTS = [4000, '使用券类型错误'];
    const TICKET_CONFIG_NOT_EXISTS = [4001, '使用券规格不存在'];
    const TICKET_ORDER_NOT_EXISTS = [4002, '购买使用券订单不存在'];
    const TICKET_SEND_NO_NOT_EXISTS = [4003, '赠送记录不存在'];
    const TICKET_SEND_GIVE_ALREADY = [4004, '本次赠送已被领取'];
    const TICKET_SEND_TIMEOUT = [4005, '本次赠送已超时无效'];
    const TICKET_SEND_SELF_FORBID = [4006, '使用券无法赠送自己'];

    const GOODS_NOT_EXISTS = [5000, '商城奖品不存在'];

    const SIGN_TODAY_EXIST = [6000, '今日已签到'];
    const SIGN_REMIND_VALUE = [6001, '签到提醒数据错误'];

    const RED_PACKET_NOT_EXIST = [7000, "红包不存在"];
    const RED_PACKET_NOT_ENOUGH = [7001, "今日红包已抢光"];
    const RED_PACKET_TODAY_EXCHANGE = [7002, "今日已兑换"];
    const RED_PACKET_COIN_NOT_ENOUGH = [7003, "金币不足，快去做任务得金币吧"];
    const RED_PACKET_EXCHANGE_ALREADY = [7004, "已兑换过该红包"];

    const TASK_NOT_EXIST = [8000, "任务不存在"];
    const TASK_TODAY_EXIST = [8001, "今日已完成该任务"];
    const TASK_FINISH_LIMIT = [8002, "该任务已到达次数限制"];
    const TASK_VIDEO_TIMERS_LIMIT = [8003, "幸运金币任务次数达到上限"];
    const TASK_VIDEO_TIME_LIMIT = [8004, "看完广告才可以获取幸运金币呦~"];

    const WITHDRAW_FIRST_WITHDRAW_LEAST_MONEY = [9000, '首次提现红包余额需满0.3元'];
    const WITHDRAW_WITHDRAW_LEAST_MONEY = [9001, '提现红包余额需满1元'];
    const WITHDRAW_NEED_FOCUS_OFFICIAL_ACCOUNT = [9002, '关注公众号后再来提现吧'];
    const WITHDRAW_TODAY_WITHDRAW_ALREADY = [9003, '今日已提现，明天再来吧'];

    public static function factory($errConst)
    {
        $e = new self($errConst[1], $errConst[0]);
        return $e;
    }
}