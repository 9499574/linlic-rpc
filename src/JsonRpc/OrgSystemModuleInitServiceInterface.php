<?php

namespace linlic\JsonRpc;

interface OrgSystemModuleInitServiceInterface
{
    /**
     * 机构系统菜单同步配置到字段配置中心
     * @param $org_id
     * @param $system_id
     * @param $created_by
     * @return array
     */
    public function configInit($org_id,$system_id,$created_by): array;
}