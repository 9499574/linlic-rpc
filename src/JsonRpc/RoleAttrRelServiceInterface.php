<?php

namespace linlic\JsonRpc;

interface RoleAttrRelServiceInterface
{
    /**
     * 根据角色id获取角色属性ID
     * @param string $role_id
     * @return string
     */
    public function roleIdGetAttrId(string $role_id):string;

    /**
     * 获取机构系统已关联的数据
     * @param int $org_id
     * @param string $system_id
     * @return array
     */
    public function getSystemAllData(int $org_id,string $system_id):array;

    /**
     * 插入机构系统角色属性关联
     * @param array $data
     * @return void
     */
    public function insertRoleAttrRelation(array $data):void;
}