<?php

namespace linlic\JsonRpc;

/**
 * 模块短信发送公共入口方法接口
 */
interface ModuleSmsSendServiceInterface
{
    /**
     * 批量发送短信
     * @param string $orgId
     * @param string $smsKey
     * @param array $userIds
     * @param array $variable
     * @return array ['status'=>0|1|2,'msg'=>''] 0是全部成功，1是部分成功，2是全部失败
     */
    public function batchSendNoticeSms(string $orgId,string $systemId,string $menuId,string $smsKey,array $userIds,array $variable):array;
}