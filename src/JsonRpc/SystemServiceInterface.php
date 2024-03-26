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
     * @param array $system_id
     * @return array
     */
    public function systemNameList(array $system_id):array;

    /**
     * 通过机构ID获取系统列表
     * @param string $org_id
     * @return array
     */
    public function orgSystemList(string $org_id):array;

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
}