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

    /**
     * 通过系统ID获取系统名称
     * @param string $org_id
     * @param array $system_id
     * @return array
     */
    public function systemNameList(string $org_id,array $system_id):array;

    /**
     * 通过机构ID获取系统列表
     * @param string $org_id
     * @return array
     */
    public function orgSystemList(string $org_id):array;

    /**
     * 查询机构全部系统ID
     * @param string $org_id
     * @return array
     */
    public function getOrgAllSystemId(string $org_id):array;

    /**
     * 系统正常状态列表
     * @param string $org_id
     * @return array 返回正常状态的系统列表
     */
    public function systemNormalStatusList(string $org_id):array;

    /**
     * 获取系统信息
     * @param string $org_id
     * @param string $system_id
     * @return mixed
     */
    public function getSystemInfo(string $org_id,string $system_id):array;

    /**
     * 获取机构系统级别的系统列表
     * @param int $org_id
     * @param array $system_id
     * @param int $system_level
     * @return array
     */
    public function getSystemLevelNormalStatusList(int $org_id,array $system_id=[],int $system_level=1):array;

    /**
     * 字典key获取系统列表
     *
     * @param int $org_id
     * @param array $system_id
     * @param string $id_key
     * @param string $name_key
     * @return array
     * @deprecated 请使用dictKeyGetSystemOptions
     */
    public function dictKeyGetSystemData(int $org_id,array $system_id=[], string $id_key='system_id', string $name_key='system_name'): array;

    /**
     * 字典key获取系统选项
     *
     * @param int $org_id
     * @param array $system_id
     * @param string $id_key
     * @param string $name_key
     * @return array
     */
    public function dictKeyGetSystemOptions(int $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;
}