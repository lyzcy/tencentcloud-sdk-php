<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getPassword() 获取设置的Vpn认证密码
 * @method void setPassword(string $Password) 设置设置的Vpn认证密码
 * @method string getOperate() 获取操作字段，取值为：create（创建）或update（修改）
 * @method void setOperate(string $Operate) 设置操作字段，取值为：create（创建）或update（修改）
 */

/**
 *SetOutBandVpnAuthPassword请求参数结构体
 */
class SetOutBandVpnAuthPasswordRequest extends AbstractModel
{
    /**
     * @var string 设置的Vpn认证密码
     */
    public $Password;

    /**
     * @var string 操作字段，取值为：create（创建）或update（修改）
     */
    public $Operate;
    /**
     * @param string $Password 设置的Vpn认证密码
     * @param string $Operate 操作字段，取值为：create（创建）或update（修改）
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }
    }
}