<?php
/**
 * Created by Perry.
 * Author: Perry
 * QQ:11568134
 * github:perry
 * Date: 2017/2/23
 * Time: 21:56
 */

namespace app\api\validate;


class IsValidUserToken extends BaseValidate
{
    protected $rule = [
        'token' => 'isValidUserToken'
    ];
}