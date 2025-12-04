<?php

namespace linlic\JsonRpc;

/**
 * 模块短信发送公共入口方法接口
 */
interface ModuleSmsSendServiceInterface
{
    public function batchSendNoticeSms(string $orgId,string $smsKey,array $phones,array $variable):bool;
}