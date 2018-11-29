<?php
/**
 * Created by Perry
 * Author: Perry
 * 微信公号: 小楼昨夜又秋风
 * github:perry
 * Date: 2017/3/7
 * Time: 16:10
 */

namespace app\lib\enum;


class OrderStatusEnum
{
    // 待支付
    const UNPAID = 1;

    // 已支付
    const PAID = 2;

    // 已发货
    const DELIVERED = 3;

    // 已支付，但库存不足
    const PAID_BUT_OUT_OF = 4;

    // 已处理PAID_BUT_OUT_OF
    const HANDLED_OUT_OF = 5;
}