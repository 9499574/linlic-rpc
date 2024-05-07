<?php

namespace linlic\JsonRpc;

interface OrgContractServiceInterface
{
    /**
     * 获取机构系统开通信息
     * @param int $org_id
     * @param string $system_id
     * @return array
     */
    public function getOrgSystemContractInfo(int $org_id, string $system_id):array;
}