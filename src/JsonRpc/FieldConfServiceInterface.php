<?php

namespace linlic\JsonRpc;

interface FieldConfServiceInterface
{
    /**
     * 机构中心同步菜单配置参数
     * @param array $params
     * @return bool
     */
    public function ConfigInit(array $params):bool;
}