<?php

namespace linlic\JsonRpc;

interface RoleFormServiceInterface
{
    /**
     * 获取机构系统所有角色关联的表单
     * @param int $org_id
     * @param array $role_id
     * @return array
     */
    public function getSystemAllData(int $org_id,array $role_id):array;

    /**
     * 插入机构系统角色表单关联
     * @param array $data
     * @return void
     */
    public function insertRoleForm(array $data):void;
}