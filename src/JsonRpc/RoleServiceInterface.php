<?php

namespace linlic\JsonRpc;

interface RoleServiceInterface
{
    /**
     * 获取机构系统角色组
     * @param int $org_id
     * @param string $system_id
     * @param string $id_key
     * @param string $name_key
     * @return array
     */
    public function getRoleGroupList(int $org_id,string $system_id,string $id_key='role_id',string $name_key='role_name'):array;

    /**
     * 获取机构系统角色组初始化数据(系统初始化调用一次)
     * @param int $org_id
     * @param string $system_id
     * @return array
     */
    public function getRoleGroupInitList(int $org_id,string $system_id):array;

    /**
     * 获取机构系统角色
     * @param int $org_id
     * @param string $system_id
     * @param string $id_key
     * @param string $name_key
     * @return array
     */
    public function getRoleList(int $org_id,string $system_id,string $id_key='role_id',string $name_key='role_name'):array;

    /**
     * 根据角色组id获取角色id
     * @param array $role_id
     * @return array
     */
    public function topPidGetChildRoleId(array $role_id):array;

    /**
     * 根据角色ID获取角色数据
     * @param array $role_id
     * @param array $select
     * @return array
     */
    public function getRoleDataList(array $role_id,array $select=['role_id','role_name','pid','top_pid']):array;
}