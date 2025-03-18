<?php

namespace linlic\JsonRpc;

interface RoleServiceInterface
{
    /**
     * 获取机构系统角色组
     *
     * @param int $org_id
     * @param string $system_id
     * @param string $id_key
     * @param string $name_key
     * @return array
     * @deprecated 请使用UserDictServiceInterface::getRoleGroupOptions
     */
    public function getRoleGroupList(int $org_id,string $system_id,string $id_key='role_id',string $name_key='role_name'):array;

    /**
     * 获取机构系统角色组初始化数据(系统初始化调用一次)
     * @param int $org_id
     * @param string $system_id
     * @return array
     * @deprecated 废弃
     */
    public function getRoleGroupInitList(int $org_id,string $system_id):array;

    /**
     * 获取机构系统角色
     *
     * @param int $org_id
     * @param string $system_id
     * @param string $id_key
     * @param string $name_key
     * @return array
     * @deprecated 请使用UserDictServiceInterface::getRoleListOptions
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

    /**
     * 获取机构系统所有角色数据
     * @param int $org_id
     * @param string $system_id
     * @return array
     */
    public function getSystemAllData(int $org_id,string $system_id):array;

    /**
     * 插入机构系统角色
     * @param array $data
     * @return void
     */
    public function insertRole(array $data):void;

    /**
     * 更新用户角色
     * @param array $params ["org_id"=>1,"uid"=>'123',"role_id"=>['1','2'],"is_delete"=>0]  is_delete=1表示删除之前的数据组数据，否则是追加数据，该字段不必传
     * @return array  code=0表示成功，code=1表示失败，msg表示失败原因
     */
    public function updateUserRole(array $params):array;

    //功能配置（角色管理使用）
    public function getConfigs($params): array;
}