<?php

namespace linlic\JsonRpc;

/**
 * org-center里面远程调用RPC接口
 */
interface OrgCallRpcServiceInterface
{
    /**
     * 执行RPC
     * @param string $rpc_name linlic\JsonRpc\UserServiceInterface\userSetConf
     * @param array $params 请求参数
     * @return array 返回结果
     */
    public function exec(string $rpc_name,array $params):array;
}