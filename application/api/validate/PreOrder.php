<?php
/**
 * Created by Perry.
 * Author: Perry
 * QQ:11568134
 * github:perry
 * Date: 2017/2/26
 * Time: 15:44
 */

namespace app\api\validate;


class PreOrder extends BaseValidate
{
    protected $rule = [
        'order_no' => 'require|length:16'
    ];
}