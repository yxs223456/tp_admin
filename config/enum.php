<?php

/**
 * 枚举定义
 */

return [

    // 审核失败原因枚举
    "auditFailReasonEnum" => [

        "one" => [
            "desc" => "自定义的奖品中包含保健品、医药、内衣、母婴或虚拟服务类等奖品，请删除后重新提交审核",
            "value" => 1
        ],

        "two" => [
            "desc" => "抽奖说明中包含引导用户消费的内容，请删除后重新提交审核",
            "value" => 2
        ],

        "three" => [
            "desc" => "图文介绍中包含违规图片，请删除后重新提交审核",
            "value" => 3
        ],

        "four" => [
            "desc" => "图文介绍内容过于简单，请完善后重新提交",
            "value" => 4
        ]

    ],


];