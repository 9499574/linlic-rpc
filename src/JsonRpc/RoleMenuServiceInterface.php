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

    /**
     * 获取用户按钮ID集合
     * @param string $role_id
     * @param string $channel_id
     * @param string $menu_id
     * @return array
     */
    public function getRoleBtnId(string $role_id,string $channel_id,string $menu_id):array;
}