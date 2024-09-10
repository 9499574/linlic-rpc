<?php

namespace linlic\JsonRpc;

interface RoleMenuServiceInterface
{
    /**
     * 获取机构角色关联的菜单
     * @param int $org_id
     * @param array $role_id
     * @return array
     */
    public function getSystemAllData(int $org_id,array $role_id):array;

    /**
     * 插入机构角色关联的菜单
     * @param array $data
     * @return void
     */
    public function insertRoleMenu(array $data):void;
}