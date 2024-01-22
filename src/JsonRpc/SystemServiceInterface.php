<?php

namespace linlic\JsonRpc;

interface SystemServiceInterface
{
    /**
     * 机构添加系统
     * @param string $org_id 机构编号
     * @param array $system_id 系统编号
     * @return bool
     */
    public function orgAddSystem(string $org_id,array $system_id):bool;
}