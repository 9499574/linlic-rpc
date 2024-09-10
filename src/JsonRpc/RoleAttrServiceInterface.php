<?php

namespace linlic\JsonRpc;

interface RoleAttrServiceInterface
{
    /**
     * 查询机构系统所有角色属性
     * @param int $org_id
     * @param string $system_id
     * @return array
     */
    public function getSystemAllData(int $org_id,string $system_id):array;

    /**
     * 插入机构系统角色属性
     * @param array $data
     * @return void
     */
    public function insertRoleAttr(array $data):void;
}